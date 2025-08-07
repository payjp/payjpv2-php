# PAYJPV2\SetupIntentsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSetupIntent()**](SetupIntentsApi.md#cancelSetupIntent) | **POST** /v2/setup_intents/{setup_intent_id}/cancel | Cancel Setup Intent |
| [**confirmSetupIntent()**](SetupIntentsApi.md#confirmSetupIntent) | **POST** /v2/setup_intents/{setup_intent_id}/confirm | Confirm Setup Intent |
| [**createSetupIntent()**](SetupIntentsApi.md#createSetupIntent) | **POST** /v2/setup_intents | Create Setup Intent |
| [**getAllSetupIntent()**](SetupIntentsApi.md#getAllSetupIntent) | **GET** /v2/setup_intents | Get All Setup Intent |
| [**retrieveSetupIntent()**](SetupIntentsApi.md#retrieveSetupIntent) | **GET** /v2/setup_intents/{setup_intent_id} | Retrieve Setup Intent |
| [**updateSetupIntent()**](SetupIntentsApi.md#updateSetupIntent) | **POST** /v2/setup_intents/{setup_intent_id} | Update Setup Intent |


## `cancelSetupIntent()`

```php
cancelSetupIntent($setup_intent_id, $setup_intent_cancel_request): \PAYJPV2\Model\SetupIntentResponse
```

Cancel Setup Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\SetupIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_intent_id = 'setup_intent_id_example'; // string
$setup_intent_cancel_request = new \PAYJPV2\Model\SetupIntentCancelRequest(); // \PAYJPV2\Model\SetupIntentCancelRequest

try {
    $result = $apiInstance->cancelSetupIntent($setup_intent_id, $setup_intent_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupIntentsApi->cancelSetupIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_intent_id** | **string**|  | |
| **setup_intent_cancel_request** | [**\PAYJPV2\Model\SetupIntentCancelRequest**](../Model/SetupIntentCancelRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\SetupIntentResponse**](../Model/SetupIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmSetupIntent()`

```php
confirmSetupIntent($setup_intent_id, $setup_intent_confirm_request): \PAYJPV2\Model\SetupIntentResponse
```

Confirm Setup Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\SetupIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_intent_id = 'setup_intent_id_example'; // string
$setup_intent_confirm_request = new \PAYJPV2\Model\SetupIntentConfirmRequest(); // \PAYJPV2\Model\SetupIntentConfirmRequest

try {
    $result = $apiInstance->confirmSetupIntent($setup_intent_id, $setup_intent_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupIntentsApi->confirmSetupIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_intent_id** | **string**|  | |
| **setup_intent_confirm_request** | [**\PAYJPV2\Model\SetupIntentConfirmRequest**](../Model/SetupIntentConfirmRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\SetupIntentResponse**](../Model/SetupIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSetupIntent()`

```php
createSetupIntent($setup_intent_create_request): \PAYJPV2\Model\SetupIntentResponse
```

Create Setup Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\SetupIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_intent_create_request = new \PAYJPV2\Model\SetupIntentCreateRequest(); // \PAYJPV2\Model\SetupIntentCreateRequest

try {
    $result = $apiInstance->createSetupIntent($setup_intent_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupIntentsApi->createSetupIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_intent_create_request** | [**\PAYJPV2\Model\SetupIntentCreateRequest**](../Model/SetupIntentCreateRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\SetupIntentResponse**](../Model/SetupIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllSetupIntent()`

```php
getAllSetupIntent($limit, $offset): \PAYJPV2\Model\SetupIntentListResponse
```

Get All Setup Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\SetupIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllSetupIntent($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupIntentsApi->getAllSetupIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\SetupIntentListResponse**](../Model/SetupIntentListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSetupIntent()`

```php
retrieveSetupIntent($setup_intent_id): \PAYJPV2\Model\SetupIntentResponse
```

Retrieve Setup Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\SetupIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_intent_id = 'setup_intent_id_example'; // string

try {
    $result = $apiInstance->retrieveSetupIntent($setup_intent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupIntentsApi->retrieveSetupIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_intent_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\SetupIntentResponse**](../Model/SetupIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSetupIntent()`

```php
updateSetupIntent($setup_intent_id, $setup_intent_update_request): \PAYJPV2\Model\SetupIntentResponse
```

Update Setup Intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\SetupIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_intent_id = 'setup_intent_id_example'; // string
$setup_intent_update_request = new \PAYJPV2\Model\SetupIntentUpdateRequest(); // \PAYJPV2\Model\SetupIntentUpdateRequest

try {
    $result = $apiInstance->updateSetupIntent($setup_intent_id, $setup_intent_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupIntentsApi->updateSetupIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_intent_id** | **string**|  | |
| **setup_intent_update_request** | [**\PAYJPV2\Model\SetupIntentUpdateRequest**](../Model/SetupIntentUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\SetupIntentResponse**](../Model/SetupIntentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
