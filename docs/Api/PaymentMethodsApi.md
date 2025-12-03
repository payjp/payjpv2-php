# PAYJPV2\PaymentMethodsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachPaymentMethod()**](PaymentMethodsApi.md#attachPaymentMethod) | **POST** /v2/payment_methods/{payment_method_id}/attach | Attach Payment Method |
| [**createPaymentMethod()**](PaymentMethodsApi.md#createPaymentMethod) | **POST** /v2/payment_methods | Create Payment Method |
| [**detachPaymentMethod()**](PaymentMethodsApi.md#detachPaymentMethod) | **POST** /v2/payment_methods/{payment_method_id}/detach | Detach Payment Method |
| [**getAllPaymentMethods()**](PaymentMethodsApi.md#getAllPaymentMethods) | **GET** /v2/payment_methods | Get All Payment Methods |
| [**getPaymentMethod()**](PaymentMethodsApi.md#getPaymentMethod) | **GET** /v2/payment_methods/{payment_method_id} | Get Payment Method |
| [**getPaymentMethodByCard()**](PaymentMethodsApi.md#getPaymentMethodByCard) | **GET** /v2/payment_methods/cards/{card_id} | Get Payment Method By Card |
| [**updatePaymentMethod()**](PaymentMethodsApi.md#updatePaymentMethod) | **POST** /v2/payment_methods/{payment_method_id} | Update Payment Method |


## `attachPaymentMethod()`

```php
attachPaymentMethod($paymentMethodId, $paymentMethodAttachRequest): \PAYJPV2\Model\PaymentMethodResponse
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
$paymentMethodId = 'paymentMethodId_example'; // string
$paymentMethodAttachRequest = new \PAYJPV2\Model\PaymentMethodAttachRequest(); // \PAYJPV2\Model\PaymentMethodAttachRequest

try {
    $result = $apiInstance->attachPaymentMethod($paymentMethodId, $paymentMethodAttachRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->attachPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodId** | **string**|  | |
| **paymentMethodAttachRequest** | [**\PAYJPV2\Model\PaymentMethodAttachRequest**](../Model/PaymentMethodAttachRequest.md)|  | |

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
createPaymentMethod($paymentMethodCreateRequest): \PAYJPV2\Model\PaymentMethodResponse
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
$paymentMethodCreateRequest = new \PAYJPV2\Model\PaymentMethodCreateRequest(); // \PAYJPV2\Model\PaymentMethodCreateRequest

try {
    $result = $apiInstance->createPaymentMethod($paymentMethodCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodCreateRequest** | [**\PAYJPV2\Model\PaymentMethodCreateRequest**](../Model/PaymentMethodCreateRequest.md)|  | |

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
detachPaymentMethod($paymentMethodId): \PAYJPV2\Model\PaymentMethodResponse
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
$paymentMethodId = 'paymentMethodId_example'; // string

try {
    $result = $apiInstance->detachPaymentMethod($paymentMethodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->detachPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodId** | **string**|  | |

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
getAllPaymentMethods($limit, $startingAfter, $endingBefore): \PAYJPV2\Model\PaymentMethodListResponse
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
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllPaymentMethods($limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getAllPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

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
getPaymentMethod($paymentMethodId): \PAYJPV2\Model\PaymentMethodResponse
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
$paymentMethodId = 'paymentMethodId_example'; // string

try {
    $result = $apiInstance->getPaymentMethod($paymentMethodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodId** | **string**|  | |

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

## `getPaymentMethodByCard()`

```php
getPaymentMethodByCard($cardId): \PAYJPV2\Model\PaymentMethodResponse
```

Get Payment Method By Card

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
$cardId = 'cardId_example'; // string

try {
    $result = $apiInstance->getPaymentMethodByCard($cardId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getPaymentMethodByCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cardId** | **string**|  | |

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
updatePaymentMethod($paymentMethodId, $paymentMethodUpdateRequest): \PAYJPV2\Model\PaymentMethodResponse
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
$paymentMethodId = 'paymentMethodId_example'; // string
$paymentMethodUpdateRequest = new \PAYJPV2\Model\PaymentMethodUpdateRequest(); // \PAYJPV2\Model\PaymentMethodUpdateRequest

try {
    $result = $apiInstance->updatePaymentMethod($paymentMethodId, $paymentMethodUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodId** | **string**|  | |
| **paymentMethodUpdateRequest** | [**\PAYJPV2\Model\PaymentMethodUpdateRequest**](../Model/PaymentMethodUpdateRequest.md)|  | |

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
