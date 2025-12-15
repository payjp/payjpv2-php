# PAYJPV2\CheckoutSessionsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCheckoutSession()**](CheckoutSessionsApi.md#createCheckoutSession) | **POST** /v2/checkout/sessions | Create Checkout Session |
| [**getAllCheckoutSessionLineItems()**](CheckoutSessionsApi.md#getAllCheckoutSessionLineItems) | **GET** /v2/checkout/sessions/{checkout_session_id}/line_items | Get All Checkout Session Line Items |
| [**getAllCheckoutSessions()**](CheckoutSessionsApi.md#getAllCheckoutSessions) | **GET** /v2/checkout/sessions | Get All Checkout Sessions |
| [**getCheckoutSession()**](CheckoutSessionsApi.md#getCheckoutSession) | **GET** /v2/checkout/sessions/{checkout_session_id} | Get Checkout Session |
| [**updateCheckoutSession()**](CheckoutSessionsApi.md#updateCheckoutSession) | **POST** /v2/checkout/sessions/{checkout_session_id} | Update Checkout Session |


## `createCheckoutSession()`

```php
createCheckoutSession($checkoutSessionCreateRequest): \PAYJPV2\Model\CheckoutSessionDetailsResponse
```

Create Checkout Session

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


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutSessionCreateRequest = new \PAYJPV2\Model\CheckoutSessionCreateRequest(); // \PAYJPV2\Model\CheckoutSessionCreateRequest

try {
    $result = $apiInstance->createCheckoutSession($checkoutSessionCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->createCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkoutSessionCreateRequest** | [**\PAYJPV2\Model\CheckoutSessionCreateRequest**](../Model/CheckoutSessionCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\CheckoutSessionDetailsResponse**](../Model/CheckoutSessionDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCheckoutSessionLineItems()`

```php
getAllCheckoutSessionLineItems($checkoutSessionId, $limit, $startingAfter, $endingBefore): \PAYJPV2\Model\CheckoutSessionLineItemListResponse
```

Get All Checkout Session Line Items

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


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutSessionId = 'checkoutSessionId_example'; // string
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllCheckoutSessionLineItems($checkoutSessionId, $limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->getAllCheckoutSessionLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkoutSessionId** | **string**|  | |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\CheckoutSessionLineItemListResponse**](../Model/CheckoutSessionLineItemListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCheckoutSessions()`

```php
getAllCheckoutSessions($limit, $startingAfter, $endingBefore): \PAYJPV2\Model\CheckoutSessionListResponse
```

Get All Checkout Sessions

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


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllCheckoutSessions($limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->getAllCheckoutSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\CheckoutSessionListResponse**](../Model/CheckoutSessionListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutSession()`

```php
getCheckoutSession($checkoutSessionId): \PAYJPV2\Model\CheckoutSessionDetailsResponse
```

Get Checkout Session

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


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutSessionId = 'checkoutSessionId_example'; // string

try {
    $result = $apiInstance->getCheckoutSession($checkoutSessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkoutSessionId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\CheckoutSessionDetailsResponse**](../Model/CheckoutSessionDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckoutSession()`

```php
updateCheckoutSession($checkoutSessionId, $checkoutSessionUpdateRequest): \PAYJPV2\Model\CheckoutSessionDetailsResponse
```

Update Checkout Session

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


$apiInstance = new PAYJPV2\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutSessionId = 'checkoutSessionId_example'; // string
$checkoutSessionUpdateRequest = new \PAYJPV2\Model\CheckoutSessionUpdateRequest(); // \PAYJPV2\Model\CheckoutSessionUpdateRequest

try {
    $result = $apiInstance->updateCheckoutSession($checkoutSessionId, $checkoutSessionUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->updateCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkoutSessionId** | **string**|  | |
| **checkoutSessionUpdateRequest** | [**\PAYJPV2\Model\CheckoutSessionUpdateRequest**](../Model/CheckoutSessionUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\CheckoutSessionDetailsResponse**](../Model/CheckoutSessionDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
