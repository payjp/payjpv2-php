# PAYJPV2\PaymentMethodsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachPaymentMethod()**](PaymentMethodsApi.md#attachPaymentMethod) | **POST** /v2/payment_methods/{payment_method_id}/attach | Attach Payment Method |
| [**createPaymentMethod()**](PaymentMethodsApi.md#createPaymentMethod) | **POST** /v2/payment_methods | Create Payment Method |
| [**detachPaymentMethod()**](PaymentMethodsApi.md#detachPaymentMethod) | **POST** /v2/payment_methods/{payment_method_id}/detach | Detach Payment Method |
| [**getAllPaymentMethods()**](PaymentMethodsApi.md#getAllPaymentMethods) | **GET** /v2/payment_methods | Get All Payment Methods |
| [**getPaymentMethod()**](PaymentMethodsApi.md#getPaymentMethod) | **GET** /v2/payment_methods/{payment_method_id} | Get Payment Method |
| [**updatePaymentMethod()**](PaymentMethodsApi.md#updatePaymentMethod) | **POST** /v2/payment_methods/{payment_method_id} | Update Payment Method |


## `attachPaymentMethod()`

```php
attachPaymentMethod($payment_method_id, $payment_method_attach_request): \PAYJPV2\Model\PaymentMethodResponse
```

Attach Payment Method

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


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 'payment_method_id_example'; // string
$payment_method_attach_request = new \PAYJPV2\Model\PaymentMethodAttachRequest(); // \PAYJPV2\Model\PaymentMethodAttachRequest

try {
    $result = $apiInstance->attachPaymentMethod($payment_method_id, $payment_method_attach_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->attachPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **payment_method_attach_request** | [**\PAYJPV2\Model\PaymentMethodAttachRequest**](../Model/PaymentMethodAttachRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentMethod()`

```php
createPaymentMethod($payment_method_create_request): \PAYJPV2\Model\PaymentMethodResponse
```

Create Payment Method

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

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detachPaymentMethod()`

```php
detachPaymentMethod($payment_method_id): \PAYJPV2\Model\PaymentMethodResponse
```

Detach Payment Method

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


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 'payment_method_id_example'; // string

try {
    $result = $apiInstance->detachPaymentMethod($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->detachPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPaymentMethods()`

```php
getAllPaymentMethods($limit, $starting_after, $ending_before): \PAYJPV2\Model\PaymentMethodListResponse
```

Get All Payment Methods

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


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$starting_after = 'starting_after_example'; // string | このIDより後のデータを取得
$ending_before = 'ending_before_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllPaymentMethods($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getAllPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **starting_after** | **string**| このIDより後のデータを取得 | [optional] |
| **ending_before** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentMethodListResponse**](../Model/PaymentMethodListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

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


// Configure HTTP basic authorization: HTTPBasic
$config = PAYJPV2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: HTTPBearer
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentMethod()`

```php
updatePaymentMethod($payment_method_id, $payment_method_update_request): \PAYJPV2\Model\PaymentMethodResponse
```

Update Payment Method

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


$apiInstance = new PAYJPV2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 'payment_method_id_example'; // string
$payment_method_update_request = new \PAYJPV2\Model\PaymentMethodUpdateRequest(); // \PAYJPV2\Model\PaymentMethodUpdateRequest

try {
    $result = $apiInstance->updatePaymentMethod($payment_method_id, $payment_method_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **payment_method_update_request** | [**\PAYJPV2\Model\PaymentMethodUpdateRequest**](../Model/PaymentMethodUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
