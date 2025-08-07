# PAYJPV2\PricesApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrice()**](PricesApi.md#createPrice) | **POST** /v2/prices | Create Price |
| [**getAllPrices()**](PricesApi.md#getAllPrices) | **GET** /v2/prices | Get All Prices |
| [**getPrice()**](PricesApi.md#getPrice) | **GET** /v2/prices/{price_id} | Get Price |
| [**updatePrice()**](PricesApi.md#updatePrice) | **POST** /v2/prices/{price_id} | Update Price |


## `createPrice()`

```php
createPrice($price_create_request): \PAYJPV2\Model\PriceDetailsResponse
```

Create Price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_create_request = new \PAYJPV2\Model\PriceCreateRequest(); // \PAYJPV2\Model\PriceCreateRequest

try {
    $result = $apiInstance->createPrice($price_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->createPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_create_request** | [**\PAYJPV2\Model\PriceCreateRequest**](../Model/PriceCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PriceDetailsResponse**](../Model/PriceDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPrices()`

```php
getAllPrices($limit, $offset): \PAYJPV2\Model\PriceListResponse
```

Get All Prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllPrices($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getAllPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\PriceListResponse**](../Model/PriceListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrice()`

```php
getPrice($price_id): \PAYJPV2\Model\PriceDetailsResponse
```

Get Price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_id = 'price_id_example'; // string

try {
    $result = $apiInstance->getPrice($price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PriceDetailsResponse**](../Model/PriceDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrice()`

```php
updatePrice($price_id, $price_update_request): \PAYJPV2\Model\PriceDetailsResponse
```

Update Price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_id = 'price_id_example'; // string
$price_update_request = new \PAYJPV2\Model\PriceUpdateRequest(); // \PAYJPV2\Model\PriceUpdateRequest

try {
    $result = $apiInstance->updatePrice($price_id, $price_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->updatePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_id** | **string**|  | |
| **price_update_request** | [**\PAYJPV2\Model\PriceUpdateRequest**](../Model/PriceUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PriceDetailsResponse**](../Model/PriceDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
