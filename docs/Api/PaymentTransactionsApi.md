# PAYJPV2\PaymentTransactionsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllPaymentTransactions()**](PaymentTransactionsApi.md#getAllPaymentTransactions) | **GET** /v2/payment_transactions | Get All Payment Transactions |
| [**getPaymentTransaction()**](PaymentTransactionsApi.md#getPaymentTransaction) | **GET** /v2/payment_transactions/{payment_transaction_id} | Get Payment Transaction |


## `getAllPaymentTransactions()`

```php
getAllPaymentTransactions($limit, $startingAfter, $endingBefore, $termId, $type, $paymentMethodType): \PAYJPV2\Model\PaymentTransactionListResponse
```

Get All Payment Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: HTTPBasic
$config = PAYJPV2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: HTTPBearer
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PAYJPV2\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得
$termId = 'termId_example'; // string | 集計区間 ID
$type = 'type_example'; // string | 取引タイプ
$paymentMethodType = 'paymentMethodType_example'; // string | 支払い方法タイプ

try {
    $result = $apiInstance->getAllPaymentTransactions($limit, $startingAfter, $endingBefore, $termId, $type, $paymentMethodType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->getAllPaymentTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |
| **termId** | **string**| 集計区間 ID | [optional] |
| **type** | **string**| 取引タイプ | [optional] |
| **paymentMethodType** | **string**| 支払い方法タイプ | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentTransactionListResponse**](../Model/PaymentTransactionListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTransaction()`

```php
getPaymentTransaction($paymentTransactionId): \PAYJPV2\Model\PaymentTransactionResponse
```

Get Payment Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: HTTPBasic
$config = PAYJPV2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: HTTPBearer
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PAYJPV2\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentTransactionId = 'paymentTransactionId_example'; // string

try {
    $result = $apiInstance->getPaymentTransaction($paymentTransactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->getPaymentTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentTransactionId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentTransactionResponse**](../Model/PaymentTransactionResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
