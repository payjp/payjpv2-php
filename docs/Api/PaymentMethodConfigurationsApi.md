# PAYJPV2\PaymentMethodConfigurationsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllPaymentMethodConfigurations()**](PaymentMethodConfigurationsApi.md#getAllPaymentMethodConfigurations) | **GET** /v2/payment_method_configurations | Get All Payment Method Configurations |
| [**getPaymentMethodConfiguration()**](PaymentMethodConfigurationsApi.md#getPaymentMethodConfiguration) | **GET** /v2/payment_method_configurations/{payment_method_configuration_id} | Get Payment Method Configuration |
| [**updatePaymentMethodConfiguration()**](PaymentMethodConfigurationsApi.md#updatePaymentMethodConfiguration) | **POST** /v2/payment_method_configurations/{payment_method_configuration_id} | Update Payment Method Configuration |


## `getAllPaymentMethodConfigurations()`

```php
getAllPaymentMethodConfigurations($limit, $startingAfter, $endingBefore): \PAYJPV2\Model\PaymentMethodConfigurationListResponse
```

Get All Payment Method Configurations

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


$apiInstance = new PAYJPV2\Api\PaymentMethodConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllPaymentMethodConfigurations($limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodConfigurationsApi->getAllPaymentMethodConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentMethodConfigurationListResponse**](../Model/PaymentMethodConfigurationListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethodConfiguration()`

```php
getPaymentMethodConfiguration($paymentMethodConfigurationId): \PAYJPV2\Model\PaymentMethodConfigurationDetailsResponse
```

Get Payment Method Configuration

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


$apiInstance = new PAYJPV2\Api\PaymentMethodConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentMethodConfigurationId = 'paymentMethodConfigurationId_example'; // string

try {
    $result = $apiInstance->getPaymentMethodConfiguration($paymentMethodConfigurationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodConfigurationsApi->getPaymentMethodConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodConfigurationId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodConfigurationDetailsResponse**](../Model/PaymentMethodConfigurationDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentMethodConfiguration()`

```php
updatePaymentMethodConfiguration($paymentMethodConfigurationId, $paymentMethodConfigurationUpdateRequest): \PAYJPV2\Model\PaymentMethodConfigurationDetailsResponse
```

Update Payment Method Configuration

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


$apiInstance = new PAYJPV2\Api\PaymentMethodConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentMethodConfigurationId = 'paymentMethodConfigurationId_example'; // string
$paymentMethodConfigurationUpdateRequest = new \PAYJPV2\Model\PaymentMethodConfigurationUpdateRequest(); // \PAYJPV2\Model\PaymentMethodConfigurationUpdateRequest

try {
    $result = $apiInstance->updatePaymentMethodConfiguration($paymentMethodConfigurationId, $paymentMethodConfigurationUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodConfigurationsApi->updatePaymentMethodConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodConfigurationId** | **string**|  | |
| **paymentMethodConfigurationUpdateRequest** | [**\PAYJPV2\Model\PaymentMethodConfigurationUpdateRequest**](../Model/PaymentMethodConfigurationUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodConfigurationDetailsResponse**](../Model/PaymentMethodConfigurationDetailsResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
