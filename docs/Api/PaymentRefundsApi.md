# PAYJPV2\PaymentRefundsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentRefund()**](PaymentRefundsApi.md#createPaymentRefund) | **POST** /v2/payment_refunds | Create Payment Refund |
| [**getAllPaymentRefunds()**](PaymentRefundsApi.md#getAllPaymentRefunds) | **GET** /v2/payment_refunds | Get All Payment Refunds |
| [**retrievePaymentRefund()**](PaymentRefundsApi.md#retrievePaymentRefund) | **GET** /v2/payment_refunds/{payment_refund_id} | Retrieve Payment Refund |
| [**updatePaymentRefund()**](PaymentRefundsApi.md#updatePaymentRefund) | **POST** /v2/payment_refunds/{payment_refund_id} | Update Payment Refund |


## `createPaymentRefund()`

```php
createPaymentRefund($payment_refund_create_request): \PAYJPV2\Model\PaymentRefundResponse
```

Create Payment Refund

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


$apiInstance = new PAYJPV2\Api\PaymentRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_refund_create_request = new \PAYJPV2\Model\PaymentRefundCreateRequest(); // \PAYJPV2\Model\PaymentRefundCreateRequest

try {
    $result = $apiInstance->createPaymentRefund($payment_refund_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->createPaymentRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_refund_create_request** | [**\PAYJPV2\Model\PaymentRefundCreateRequest**](../Model/PaymentRefundCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentRefundResponse**](../Model/PaymentRefundResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPaymentRefunds()`

```php
getAllPaymentRefunds($limit, $starting_after, $ending_before): \PAYJPV2\Model\PaymentRefundListResponse
```

Get All Payment Refunds

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


$apiInstance = new PAYJPV2\Api\PaymentRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$starting_after = 'starting_after_example'; // string | このIDより後のデータを取得
$ending_before = 'ending_before_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllPaymentRefunds($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->getAllPaymentRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **starting_after** | **string**| このIDより後のデータを取得 | [optional] |
| **ending_before** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentRefundListResponse**](../Model/PaymentRefundListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentRefund()`

```php
retrievePaymentRefund($payment_refund_id): \PAYJPV2\Model\PaymentRefundResponse
```

Retrieve Payment Refund

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


$apiInstance = new PAYJPV2\Api\PaymentRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_refund_id = 'payment_refund_id_example'; // string

try {
    $result = $apiInstance->retrievePaymentRefund($payment_refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->retrievePaymentRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_refund_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentRefundResponse**](../Model/PaymentRefundResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentRefund()`

```php
updatePaymentRefund($payment_refund_id, $payment_refund_update_request): \PAYJPV2\Model\PaymentRefundResponse
```

Update Payment Refund

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


$apiInstance = new PAYJPV2\Api\PaymentRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_refund_id = 'payment_refund_id_example'; // string
$payment_refund_update_request = new \PAYJPV2\Model\PaymentRefundUpdateRequest(); // \PAYJPV2\Model\PaymentRefundUpdateRequest

try {
    $result = $apiInstance->updatePaymentRefund($payment_refund_id, $payment_refund_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->updatePaymentRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_refund_id** | **string**|  | |
| **payment_refund_update_request** | [**\PAYJPV2\Model\PaymentRefundUpdateRequest**](../Model/PaymentRefundUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentRefundResponse**](../Model/PaymentRefundResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
