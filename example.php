<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: APIKeyHeader

$config = PAYJPV2\Configuration::getDefaultConfiguration()
    ->setApiKey('Authorization', 'Bearer sk_test_c62fade9d045b54cd76d7036')
    ->setHost('http://localhost:8200');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_create_request = new \PAYJPV2\Model\CustomerCreateRequest(); // \PAYJPV2\Model\CheckoutSessionCreateRequest
$customer_create_request->setEmail('test@example.com');
try {
    $result = $apiInstance->createCustomer($customer_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
