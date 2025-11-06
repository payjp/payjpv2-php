# PAYJPV2\PaymentTransactionsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllPaymentTransaction()**](PaymentTransactionsApi.md#getAllPaymentTransaction) | **GET** /v2/payment_transactions | Get All Payment Transaction |
| [**retrievePaymentTransaction()**](PaymentTransactionsApi.md#retrievePaymentTransaction) | **GET** /v2/payment_transactions/{payment_transaction_id} | Retrieve Payment Transaction |


## `getAllPaymentTransaction()`

```php
getAllPaymentTransaction($limit, $starting_after, $ending_before, $term_id, $type, $payment_method_type): \PAYJPV2\Model\PaymentTransactionListResponse
```

Get All Payment Transaction

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
$starting_after = 'starting_after_example'; // string | このIDより後のデータを取得
$ending_before = 'ending_before_example'; // string | このIDより前のデータを取得
$term_id = 'term_id_example'; // string | term ID
$type = 'type_example'; // string | 取引タイプ
$payment_method_type = 'payment_method_type_example'; // string | 支払い方法タイプ

try {
    $result = $apiInstance->getAllPaymentTransaction($limit, $starting_after, $ending_before, $term_id, $type, $payment_method_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->getAllPaymentTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **starting_after** | **string**| このIDより後のデータを取得 | [optional] |
| **ending_before** | **string**| このIDより前のデータを取得 | [optional] |
| **term_id** | **string**| term ID | [optional] |
| **type** | **string**| 取引タイプ | [optional] |
| **payment_method_type** | **string**| 支払い方法タイプ | [optional] |

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

## `retrievePaymentTransaction()`

```php
retrievePaymentTransaction($payment_transaction_id): \PAYJPV2\Model\PaymentTransactionResponse
```

Retrieve Payment Transaction

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
$payment_transaction_id = 'payment_transaction_id_example'; // string

try {
    $result = $apiInstance->retrievePaymentTransaction($payment_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->retrievePaymentTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_transaction_id** | **string**|  | |

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
