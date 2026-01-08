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
createPrice($priceCreateRequest): \PAYJPV2\Model\PriceDetailsResponse
```

Create Price

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


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$priceCreateRequest = new \PAYJPV2\Model\PriceCreateRequest(); // \PAYJPV2\Model\PriceCreateRequest

try {
    $result = $apiInstance->createPrice($priceCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->createPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **priceCreateRequest** | [**\PAYJPV2\Model\PriceCreateRequest**](../Model/PriceCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PriceDetailsResponse**](../Model/PriceDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPrices()`

```php
getAllPrices($limit, $startingAfter, $endingBefore, $lookupKeys): \PAYJPV2\Model\PriceListResponse
```

Get All Prices

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


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得
$lookupKeys = array('lookupKeys_example'); // string[] | 価格を動的に取得するために使用される検索キー

try {
    $result = $apiInstance->getAllPrices($limit, $startingAfter, $endingBefore, $lookupKeys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getAllPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |
| **lookupKeys** | [**string[]**](../Model/string.md)| 価格を動的に取得するために使用される検索キー | [optional] |

### Return type

[**\PAYJPV2\Model\PriceListResponse**](../Model/PriceListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrice()`

```php
getPrice($priceId): \PAYJPV2\Model\PriceDetailsResponse
```

Get Price

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


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$priceId = 'priceId_example'; // string

try {
    $result = $apiInstance->getPrice($priceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **priceId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PriceDetailsResponse**](../Model/PriceDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrice()`

```php
updatePrice($priceId, $priceUpdateRequest): \PAYJPV2\Model\PriceDetailsResponse
```

Update Price

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


$apiInstance = new PAYJPV2\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$priceId = 'priceId_example'; // string
$priceUpdateRequest = new \PAYJPV2\Model\PriceUpdateRequest(); // \PAYJPV2\Model\PriceUpdateRequest

try {
    $result = $apiInstance->updatePrice($priceId, $priceUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->updatePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **priceId** | **string**|  | |
| **priceUpdateRequest** | [**\PAYJPV2\Model\PriceUpdateRequest**](../Model/PriceUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PriceDetailsResponse**](../Model/PriceDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
