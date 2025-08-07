# PAYJPV2\PaymentMethodsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentMethod()**](PaymentMethodsApi.md#createPaymentMethod) | **POST** /v2/payment_methods | Create Payment Method |
| [**getAllPaymentMethods()**](PaymentMethodsApi.md#getAllPaymentMethods) | **GET** /v2/payment_methods | Get All Payment Methods |
| [**getPaymentMethod()**](PaymentMethodsApi.md#getPaymentMethod) | **GET** /v2/payment_methods/{payment_method_id} | Get Payment Method |
| [**updatePaymentMethod()**](PaymentMethodsApi.md#updatePaymentMethod) | **POST** /v2/payment_methods/{payment_method_id} | Update Payment Method |


## `createPaymentMethod()`

```php
createPaymentMethod($payment_method_create_request): \PAYJPV2\Model\PaymentMethodResponse
```

Create Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_create_request = new \PAYJPV2\Model\PaymentMethodCreateRequest(); // \PAYJPV2\Model\PaymentMethodCreateRequest

try {
    $result = $apiInstance->createPaymentMethod($payment_method_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_create_request** | [**\PAYJPV2\Model\PaymentMethodCreateRequest**](../Model/PaymentMethodCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPaymentMethods()`

```php
getAllPaymentMethods($limit, $offset): \PAYJPV2\Model\PaymentMethodListResponse
```

Get All Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllPaymentMethods($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getAllPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\PaymentMethodListResponse**](../Model/PaymentMethodListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethod()`

```php
getPaymentMethod($payment_method_id): \PAYJPV2\Model\PaymentMethodResponse
```

Get Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 'payment_method_id_example'; // string

try {
    $result = $apiInstance->getPaymentMethod($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentMethod()`

```php
updatePaymentMethod($payment_method_id, $payment_method_card_update_request): \PAYJPV2\Model\PaymentMethodResponse
```

Update Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 'payment_method_id_example'; // string
$payment_method_card_update_request = new \PAYJPV2\Model\PaymentMethodCardUpdateRequest(); // \PAYJPV2\Model\PaymentMethodCardUpdateRequest

try {
    $result = $apiInstance->updatePaymentMethod($payment_method_id, $payment_method_card_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **payment_method_card_update_request** | [**\PAYJPV2\Model\PaymentMethodCardUpdateRequest**](../Model/PaymentMethodCardUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
