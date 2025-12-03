<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Get settings from environment variables
$api_host = getenv('PAYJP_API_HOST') ?: 'https://api.pay.jp';
$api_key = getenv('PAYJP_API_KEY') ?: '';

if (empty($api_key)) {
    fwrite(STDERR, "Error: Please set the PAYJP_API_KEY environment variable\n");
    exit(1);
}

$config = PAYJPV2\Configuration::getDefaultConfiguration()
    ->setAccessToken($api_key)
    ->setHost($api_host);

$customersApi = new PAYJPV2\Api\CustomersApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    // 1. Create Customer
    echo "=== 1. Create Customer ===\n";
    $createRequest = new \PAYJPV2\Model\CustomerCreateRequest();
    $createRequest->setEmail('test@example.com');
    $createRequest->setDescription('Test customer from PHP SDK');

    $idempotencyKey = str_replace('.', '_', uniqid('', true));
    echo "Using Idempotency-Key: " . $idempotencyKey . "\n";

    $customer = $customersApi->createCustomer($createRequest, idempotencyKey: $idempotencyKey);
    $customerId = $customer->getId();
    echo "Created customer: " . $customerId . "\n";
    echo "Email: " . $customer->getEmail() . "\n\n";

    // 2. Get Customer
    echo "=== 2. Get Customer ===\n";
    $retrieved = $customersApi->getCustomer($customerId);
    echo "Retrieved customer: " . $retrieved->getId() . "\n";
    echo "Email: " . $retrieved->getEmail() . "\n";
    echo "Description: " . ($retrieved->getDescription() ?? '(none)') . "\n\n";

    // 3. Update Customer
    echo "=== 3. Update Customer ===\n";
    $updateRequest = new \PAYJPV2\Model\CustomerUpdateRequest();
    $updateRequest->setDescription('Updated description from PHP SDK');
    $updateRequest->setEmail('updated@example.com');

    $updated = $customersApi->updateCustomer($customerId, $updateRequest);
    echo "Updated customer: " . $updated->getId() . "\n";
    echo "New email: " . $updated->getEmail() . "\n";
    echo "New description: " . ($updated->getDescription() ?? '(none)') . "\n\n";

    // 4. List Customers
    echo "=== 4. List Customers ===\n";
    $customerList = $customersApi->getAllCustomers(limit: 3);
    echo "Total customers retrieved: " . count($customerList->getData()) . "\n";
    foreach ($customerList->getData() as $c) {
        echo "  - " . $c->getId() . " (" . ($c->getEmail() ?? 'no email') . ")\n";
    }
    echo "\n";

    // 5. Delete Customer
    echo "=== 5. Delete Customer ===\n";
    $customersApi->deleteCustomer($customerId);
    echo "Deleted customer: " . $customerId . "\n\n";

    echo "=== All tests passed! ===\n";

} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage() . "\n";
    exit(1);
}
