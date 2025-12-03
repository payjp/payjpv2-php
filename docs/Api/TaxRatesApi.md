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
createTaxRate($taxRateCreateRequest): \PAYJPV2\Model\TaxRateDetailsResponse
```

Create Tax Rate

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


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxRateCreateRequest = new \PAYJPV2\Model\TaxRateCreateRequest(); // \PAYJPV2\Model\TaxRateCreateRequest

try {
    $result = $apiInstance->createTaxRate($taxRateCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxRateCreateRequest** | [**\PAYJPV2\Model\TaxRateCreateRequest**](../Model/TaxRateCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\TaxRateDetailsResponse**](../Model/TaxRateDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxRates()`

```php
getAllTaxRates($limit, $startingAfter, $endingBefore): \PAYJPV2\Model\TaxRateListResponse
```

Get All Tax Rates

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


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllTaxRates($limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getAllTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\TaxRateListResponse**](../Model/TaxRateListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRate()`

```php
getTaxRate($taxRateId): \PAYJPV2\Model\TaxRateDetailsResponse
```

Get Tax Rate

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


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxRateId = 'taxRateId_example'; // string

try {
    $result = $apiInstance->getTaxRate($taxRateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxRateId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\TaxRateDetailsResponse**](../Model/TaxRateDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxRate()`

```php
updateTaxRate($taxRateId, $taxRateUpdateRequest): \PAYJPV2\Model\TaxRateDetailsResponse
```

Update Tax Rate

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


$apiInstance = new PAYJPV2\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxRateId = 'taxRateId_example'; // string
$taxRateUpdateRequest = new \PAYJPV2\Model\TaxRateUpdateRequest(); // \PAYJPV2\Model\TaxRateUpdateRequest

try {
    $result = $apiInstance->updateTaxRate($taxRateId, $taxRateUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxRateId** | **string**|  | |
| **taxRateUpdateRequest** | [**\PAYJPV2\Model\TaxRateUpdateRequest**](../Model/TaxRateUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\TaxRateDetailsResponse**](../Model/TaxRateDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
