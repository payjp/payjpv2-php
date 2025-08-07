# PAYJPV2\RefundsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelRefund()**](RefundsApi.md#cancelRefund) | **POST** /v2/refunds/{refund_id}/cancel | Cancel Refund |
| [**createRefund()**](RefundsApi.md#createRefund) | **POST** /v2/refunds | Create Refund |
| [**getAllRefunds()**](RefundsApi.md#getAllRefunds) | **GET** /v2/refunds | Get All Refunds |
| [**retrieveRefund()**](RefundsApi.md#retrieveRefund) | **GET** /v2/refunds/{refund_id} | Retrieve Refund |
| [**updateRefund()**](RefundsApi.md#updateRefund) | **POST** /v2/refunds/{refund_id} | Update Refund |


## `cancelRefund()`

```php
cancelRefund($refund_id): \PAYJPV2\Model\RefundResponse
```

Cancel Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = 'refund_id_example'; // string

try {
    $result = $apiInstance->cancelRefund($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->cancelRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefund()`

```php
createRefund($refund_create_request): \PAYJPV2\Model\RefundResponse
```

Create Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_create_request = new \PAYJPV2\Model\RefundCreateRequest(); // \PAYJPV2\Model\RefundCreateRequest

try {
    $result = $apiInstance->createRefund($refund_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_create_request** | [**\PAYJPV2\Model\RefundCreateRequest**](../Model/RefundCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllRefunds()`

```php
getAllRefunds($limit, $offset): \PAYJPV2\Model\RefundListResponse
```

Get All Refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllRefunds($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->getAllRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\RefundListResponse**](../Model/RefundListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRefund()`

```php
retrieveRefund($refund_id): \PAYJPV2\Model\RefundResponse
```

Retrieve Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = 'refund_id_example'; // string

try {
    $result = $apiInstance->retrieveRefund($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->retrieveRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRefund()`

```php
updateRefund($refund_id, $payment_refund_update_request): \PAYJPV2\Model\RefundResponse
```

Update Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = 'refund_id_example'; // string
$payment_refund_update_request = new \PAYJPV2\Model\PaymentRefundUpdateRequest(); // \PAYJPV2\Model\PaymentRefundUpdateRequest

try {
    $result = $apiInstance->updateRefund($refund_id, $payment_refund_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->updateRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_id** | **string**|  | |
| **payment_refund_update_request** | [**\PAYJPV2\Model\PaymentRefundUpdateRequest**](../Model/PaymentRefundUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
