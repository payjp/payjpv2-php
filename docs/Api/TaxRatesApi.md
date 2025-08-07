# PAYJPV2\TaxRatesApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTaxRate()**](TaxRatesApi.md#createTaxRate) | **POST** /v2/tax_rates | Create Tax Rate |
| [**getAllTaxRates()**](TaxRatesApi.md#getAllTaxRates) | **GET** /v2/tax_rates | Get All Tax Rates |
| [**getTaxRate()**](TaxRatesApi.md#getTaxRate) | **GET** /v2/tax_rates/{tax_rate_id} | Get Tax Rate |
| [**updateTaxRate()**](TaxRatesApi.md#updateTaxRate) | **POST** /v2/tax_rates/{tax_rate_id} | Update Tax Rate |


## `createTaxRate()`

```php
createTaxRate($tax_rate_create_request): \PAYJPV2\Model\TaxRateDetailsResponse
```

Create Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_rate_create_request = new \PAYJPV2\Model\TaxRateCreateRequest(); // \PAYJPV2\Model\TaxRateCreateRequest

try {
    $result = $apiInstance->createTaxRate($tax_rate_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_rate_create_request** | [**\PAYJPV2\Model\TaxRateCreateRequest**](../Model/TaxRateCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\TaxRateDetailsResponse**](../Model/TaxRateDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxRates()`

```php
getAllTaxRates($limit, $offset): \PAYJPV2\Model\TaxRateListResponse
```

Get All Tax Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置

try {
    $result = $apiInstance->getAllTaxRates($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getAllTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |

### Return type

[**\PAYJPV2\Model\TaxRateListResponse**](../Model/TaxRateListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRate()`

```php
getTaxRate($tax_rate_id): \PAYJPV2\Model\TaxRateDetailsResponse
```

Get Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_rate_id = 'tax_rate_id_example'; // string

try {
    $result = $apiInstance->getTaxRate($tax_rate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_rate_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\TaxRateDetailsResponse**](../Model/TaxRateDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxRate()`

```php
updateTaxRate($tax_rate_id, $tax_rate_update_request): \PAYJPV2\Model\TaxRateDetailsResponse
```

Update Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_rate_id = 'tax_rate_id_example'; // string
$tax_rate_update_request = new \PAYJPV2\Model\TaxRateUpdateRequest(); // \PAYJPV2\Model\TaxRateUpdateRequest

try {
    $result = $apiInstance->updateTaxRate($tax_rate_id, $tax_rate_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_rate_id** | **string**|  | |
| **tax_rate_update_request** | [**\PAYJPV2\Model\TaxRateUpdateRequest**](../Model/TaxRateUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\TaxRateDetailsResponse**](../Model/TaxRateDetailsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
