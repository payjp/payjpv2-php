# PAYJPV2\PaymentRefundsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentRefund()**](PaymentRefundsApi.md#createPaymentRefund) | **POST** /v2/payment_refunds | Create Payment Refund |
| [**getAllPaymentRefunds()**](PaymentRefundsApi.md#getAllPaymentRefunds) | **GET** /v2/payment_refunds | Get All Payment Refunds |
| [**getPaymentRefund()**](PaymentRefundsApi.md#getPaymentRefund) | **GET** /v2/payment_refunds/{payment_refund_id} | Get Payment Refund |
| [**updatePaymentRefund()**](PaymentRefundsApi.md#updatePaymentRefund) | **POST** /v2/payment_refunds/{payment_refund_id} | Update Payment Refund |


## `createPaymentRefund()`

```php
createPaymentRefund($paymentRefundCreateRequest): \PAYJPV2\Model\PaymentRefundResponse
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
$paymentRefundCreateRequest = new \PAYJPV2\Model\PaymentRefundCreateRequest(); // \PAYJPV2\Model\PaymentRefundCreateRequest

try {
    $result = $apiInstance->createPaymentRefund($paymentRefundCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->createPaymentRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentRefundCreateRequest** | [**\PAYJPV2\Model\PaymentRefundCreateRequest**](../Model/PaymentRefundCreateRequest.md)|  | |

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
getAllPaymentRefunds($limit, $startingAfter, $endingBefore): \PAYJPV2\Model\PaymentRefundListResponse
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
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllPaymentRefunds($limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->getAllPaymentRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

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

## `getPaymentRefund()`

```php
getPaymentRefund($paymentRefundId): \PAYJPV2\Model\PaymentRefundResponse
```

Get Payment Refund

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
$paymentRefundId = 'paymentRefundId_example'; // string

try {
    $result = $apiInstance->getPaymentRefund($paymentRefundId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->getPaymentRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentRefundId** | **string**|  | |

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
updatePaymentRefund($paymentRefundId, $paymentRefundUpdateRequest): \PAYJPV2\Model\PaymentRefundResponse
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
$paymentRefundId = 'paymentRefundId_example'; // string
$paymentRefundUpdateRequest = new \PAYJPV2\Model\PaymentRefundUpdateRequest(); // \PAYJPV2\Model\PaymentRefundUpdateRequest

try {
    $result = $apiInstance->updatePaymentRefund($paymentRefundId, $paymentRefundUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRefundsApi->updatePaymentRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentRefundId** | **string**|  | |
| **paymentRefundUpdateRequest** | [**\PAYJPV2\Model\PaymentRefundUpdateRequest**](../Model/PaymentRefundUpdateRequest.md)|  | |

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
