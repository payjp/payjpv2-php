# PAYJPV2\PaymentIntentsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPaymentIntent()**](PaymentIntentsApi.md#cancelPaymentIntent) | **POST** /v2/payment_intents/{payment_intent_id}/cancel | Cancel Payment Intent |
| [**capturePaymentIntent()**](PaymentIntentsApi.md#capturePaymentIntent) | **POST** /v2/payment_intents/{payment_intent_id}/capture | Capture Payment Intent |
| [**confirmPaymentIntent()**](PaymentIntentsApi.md#confirmPaymentIntent) | **POST** /v2/payment_intents/{payment_intent_id}/confirm | Confirm Payment Intent |
| [**createPaymentIntent()**](PaymentIntentsApi.md#createPaymentIntent) | **POST** /v2/payment_intents | Create Payment Intent |
| [**getAllPaymentIntent()**](PaymentIntentsApi.md#getAllPaymentIntent) | **GET** /v2/payment_intents | Get All Payment Intent |
| [**incrementAuthorizationPaymentIntent()**](PaymentIntentsApi.md#incrementAuthorizationPaymentIntent) | **POST** /v2/payment_intents/{payment_intent_id}/increment_authorization | Increment Authorization Payment Intent |
| [**retrievePaymentIntent()**](PaymentIntentsApi.md#retrievePaymentIntent) | **GET** /v2/payment_intents/{payment_intent_id} | Retrieve Payment Intent |
| [**updatePaymentIntent()**](PaymentIntentsApi.md#updatePaymentIntent) | **POST** /v2/payment_intents/{payment_intent_id} | Update Payment Intent |


## `cancelPaymentIntent()`

```php
cancelPaymentIntent($payment_intent_id, $payment_intent_cancel_request): \PAYJPV2\Model\PaymentIntentResponse
```

Cancel Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = 'payment_intent_id_example'; // string
$payment_intent_cancel_request = new \PAYJPV2\Model\PaymentIntentCancelRequest(); // \PAYJPV2\Model\PaymentIntentCancelRequest

try {
    $result = $apiInstance->cancelPaymentIntent($payment_intent_id, $payment_intent_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->cancelPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_id** | **string**|  | |
| **payment_intent_cancel_request** | [**\PAYJPV2\Model\PaymentIntentCancelRequest**](../Model/PaymentIntentCancelRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capturePaymentIntent()`

```php
capturePaymentIntent($payment_intent_id, $payment_intent_capture_request): \PAYJPV2\Model\PaymentIntentResponse
```

Capture Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = 'payment_intent_id_example'; // string
$payment_intent_capture_request = new \PAYJPV2\Model\PaymentIntentCaptureRequest(); // \PAYJPV2\Model\PaymentIntentCaptureRequest

try {
    $result = $apiInstance->capturePaymentIntent($payment_intent_id, $payment_intent_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->capturePaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_id** | **string**|  | |
| **payment_intent_capture_request** | [**\PAYJPV2\Model\PaymentIntentCaptureRequest**](../Model/PaymentIntentCaptureRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPaymentIntent()`

```php
confirmPaymentIntent($payment_intent_id, $payment_intent_confirm_request): \PAYJPV2\Model\PaymentIntentResponse
```

Confirm Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = 'payment_intent_id_example'; // string
$payment_intent_confirm_request = new \PAYJPV2\Model\PaymentIntentConfirmRequest(); // \PAYJPV2\Model\PaymentIntentConfirmRequest

try {
    $result = $apiInstance->confirmPaymentIntent($payment_intent_id, $payment_intent_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->confirmPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_id** | **string**|  | |
| **payment_intent_confirm_request** | [**\PAYJPV2\Model\PaymentIntentConfirmRequest**](../Model/PaymentIntentConfirmRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentIntent()`

```php
createPaymentIntent($payment_intent_create_request): \PAYJPV2\Model\PaymentIntentResponse
```

Create Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_create_request = new \PAYJPV2\Model\PaymentIntentCreateRequest(); // \PAYJPV2\Model\PaymentIntentCreateRequest

try {
    $result = $apiInstance->createPaymentIntent($payment_intent_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->createPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_create_request** | [**\PAYJPV2\Model\PaymentIntentCreateRequest**](../Model/PaymentIntentCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPaymentIntent()`

```php
getAllPaymentIntent($limit, $offset): \PAYJPV2\Model\PaymentIntentListResponse
```

Get All Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllPaymentIntent($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->getAllPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\PaymentIntentListResponse**](../Model/PaymentIntentListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incrementAuthorizationPaymentIntent()`

```php
incrementAuthorizationPaymentIntent($payment_intent_id, $payment_intent_increment_authorization_request): \PAYJPV2\Model\PaymentIntentResponse
```

Increment Authorization Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = 'payment_intent_id_example'; // string
$payment_intent_increment_authorization_request = new \PAYJPV2\Model\PaymentIntentIncrementAuthorizationRequest(); // \PAYJPV2\Model\PaymentIntentIncrementAuthorizationRequest

try {
    $result = $apiInstance->incrementAuthorizationPaymentIntent($payment_intent_id, $payment_intent_increment_authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->incrementAuthorizationPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_id** | **string**|  | |
| **payment_intent_increment_authorization_request** | [**\PAYJPV2\Model\PaymentIntentIncrementAuthorizationRequest**](../Model/PaymentIntentIncrementAuthorizationRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentIntent()`

```php
retrievePaymentIntent($payment_intent_id): \PAYJPV2\Model\PaymentIntentResponse
```

Retrieve Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = 'payment_intent_id_example'; // string

try {
    $result = $apiInstance->retrievePaymentIntent($payment_intent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->retrievePaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentIntent()`

```php
updatePaymentIntent($payment_intent_id, $payment_intent_update_request): \PAYJPV2\Model\PaymentIntentResponse
```

Update Payment Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = 'payment_intent_id_example'; // string
$payment_intent_update_request = new \PAYJPV2\Model\PaymentIntentUpdateRequest(); // \PAYJPV2\Model\PaymentIntentUpdateRequest

try {
    $result = $apiInstance->updatePaymentIntent($payment_intent_id, $payment_intent_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->updatePaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_id** | **string**|  | |
| **payment_intent_update_request** | [**\PAYJPV2\Model\PaymentIntentUpdateRequest**](../Model/PaymentIntentUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
