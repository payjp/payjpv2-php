# PAYJPV2\CheckoutSessionsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCheckoutSession()**](CheckoutSessionsApi.md#createCheckoutSession) | **POST** /v2/checkout/sessions | Create Checkout Session |
| [**getAllCheckoutSessions()**](CheckoutSessionsApi.md#getAllCheckoutSessions) | **GET** /v2/checkout/sessions | Get All Checkout Sessions |
| [**getCheckoutSession()**](CheckoutSessionsApi.md#getCheckoutSession) | **GET** /v2/checkout/sessions/{checkout_session_id} | Get Checkout Session |
| [**updateCheckoutSession()**](CheckoutSessionsApi.md#updateCheckoutSession) | **POST** /v2/checkout/sessions/{checkout_session_id} | Update Checkout Session |


## `createCheckoutSession()`

```php
createCheckoutSession($checkout_session_create_request): \PAYJPV2\Model\CheckoutSessionDetailsResponse
```

Create Checkout Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_create_request = new \PAYJPV2\Model\CheckoutSessionCreateRequest(); // \PAYJPV2\Model\CheckoutSessionCreateRequest

try {
    $result = $apiInstance->createCheckoutSession($checkout_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->createCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_session_create_request** | [**\PAYJPV2\Model\CheckoutSessionCreateRequest**](../Model/CheckoutSessionCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\CheckoutSessionDetailsResponse**](../Model/CheckoutSessionDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCheckoutSessions()`

```php
getAllCheckoutSessions($limit, $offset): \PAYJPV2\Model\CheckoutSessionListResponse
```

Get All Checkout Sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllCheckoutSessions($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->getAllCheckoutSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\CheckoutSessionListResponse**](../Model/CheckoutSessionListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutSession()`

```php
getCheckoutSession($checkout_session_id, $expand): \PAYJPV2\Model\CheckoutSessionDetailsResponse
```

Get Checkout Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string
$expand = array('expand_example'); // string[] | レスポンス返却時に展開したいオブジェクト名。指定したオブジェクトを同時に取得し、レスポンスに乗せて返却します。

try {
    $result = $apiInstance->getCheckoutSession($checkout_session_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_session_id** | **string**|  | |
| **expand** | [**string[]**](../Model/string.md)| レスポンス返却時に展開したいオブジェクト名。指定したオブジェクトを同時に取得し、レスポンスに乗せて返却します。 | [optional] |

### Return type

[**\PAYJPV2\Model\CheckoutSessionDetailsResponse**](../Model/CheckoutSessionDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckoutSession()`

```php
updateCheckoutSession($checkout_session_id, $checkout_session_update_request): \PAYJPV2\Model\CheckoutSessionDetailsResponse
```

Update Checkout Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string
$checkout_session_update_request = new \PAYJPV2\Model\CheckoutSessionUpdateRequest(); // \PAYJPV2\Model\CheckoutSessionUpdateRequest

try {
    $result = $apiInstance->updateCheckoutSession($checkout_session_id, $checkout_session_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->updateCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_session_id** | **string**|  | |
| **checkout_session_update_request** | [**\PAYJPV2\Model\CheckoutSessionUpdateRequest**](../Model/CheckoutSessionUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\CheckoutSessionDetailsResponse**](../Model/CheckoutSessionDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
