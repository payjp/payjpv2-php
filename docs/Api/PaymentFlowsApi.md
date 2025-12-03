# PAYJPV2\PaymentFlowsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPaymentFlow()**](PaymentFlowsApi.md#cancelPaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id}/cancel | Cancel Payment Flow |
| [**capturePaymentFlow()**](PaymentFlowsApi.md#capturePaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id}/capture | Capture Payment Flow |
| [**confirmPaymentFlow()**](PaymentFlowsApi.md#confirmPaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id}/confirm | Confirm Payment Flow |
| [**createPaymentFlow()**](PaymentFlowsApi.md#createPaymentFlow) | **POST** /v2/payment_flows | Create Payment Flow |
| [**getAllPaymentFlows()**](PaymentFlowsApi.md#getAllPaymentFlows) | **GET** /v2/payment_flows | Get All Payment Flows |
| [**getPaymentFlow()**](PaymentFlowsApi.md#getPaymentFlow) | **GET** /v2/payment_flows/{payment_flow_id} | Get Payment Flow |
| [**getPaymentFlowRefunds()**](PaymentFlowsApi.md#getPaymentFlowRefunds) | **GET** /v2/payment_flows/{payment_flow_id}/refunds | Get Payment Flow Refunds |
| [**updatePaymentFlow()**](PaymentFlowsApi.md#updatePaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id} | Update Payment Flow |


## `cancelPaymentFlow()`

```php
cancelPaymentFlow($paymentFlowId, $paymentFlowCancelRequest): \PAYJPV2\Model\PaymentFlowResponse
```

Cancel Payment Flow

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowId = 'paymentFlowId_example'; // string
$paymentFlowCancelRequest = new \PAYJPV2\Model\PaymentFlowCancelRequest(); // \PAYJPV2\Model\PaymentFlowCancelRequest

try {
    $result = $apiInstance->cancelPaymentFlow($paymentFlowId, $paymentFlowCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->cancelPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowId** | **string**|  | |
| **paymentFlowCancelRequest** | [**\PAYJPV2\Model\PaymentFlowCancelRequest**](../Model/PaymentFlowCancelRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentFlowResponse**](../Model/PaymentFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capturePaymentFlow()`

```php
capturePaymentFlow($paymentFlowId, $paymentFlowCaptureRequest): \PAYJPV2\Model\PaymentFlowResponse
```

Capture Payment Flow

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowId = 'paymentFlowId_example'; // string
$paymentFlowCaptureRequest = new \PAYJPV2\Model\PaymentFlowCaptureRequest(); // \PAYJPV2\Model\PaymentFlowCaptureRequest

try {
    $result = $apiInstance->capturePaymentFlow($paymentFlowId, $paymentFlowCaptureRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->capturePaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowId** | **string**|  | |
| **paymentFlowCaptureRequest** | [**\PAYJPV2\Model\PaymentFlowCaptureRequest**](../Model/PaymentFlowCaptureRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentFlowResponse**](../Model/PaymentFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPaymentFlow()`

```php
confirmPaymentFlow($paymentFlowId, $paymentFlowConfirmRequest): \PAYJPV2\Model\PaymentFlowResponse
```

Confirm Payment Flow

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowId = 'paymentFlowId_example'; // string
$paymentFlowConfirmRequest = new \PAYJPV2\Model\PaymentFlowConfirmRequest(); // \PAYJPV2\Model\PaymentFlowConfirmRequest

try {
    $result = $apiInstance->confirmPaymentFlow($paymentFlowId, $paymentFlowConfirmRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->confirmPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowId** | **string**|  | |
| **paymentFlowConfirmRequest** | [**\PAYJPV2\Model\PaymentFlowConfirmRequest**](../Model/PaymentFlowConfirmRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentFlowResponse**](../Model/PaymentFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentFlow()`

```php
createPaymentFlow($paymentFlowCreateRequest): \PAYJPV2\Model\PaymentFlowResponse
```

Create Payment Flow

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowCreateRequest = new \PAYJPV2\Model\PaymentFlowCreateRequest(); // \PAYJPV2\Model\PaymentFlowCreateRequest

try {
    $result = $apiInstance->createPaymentFlow($paymentFlowCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->createPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowCreateRequest** | [**\PAYJPV2\Model\PaymentFlowCreateRequest**](../Model/PaymentFlowCreateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentFlowResponse**](../Model/PaymentFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPaymentFlows()`

```php
getAllPaymentFlows($limit, $startingAfter, $endingBefore, $customerId): \PAYJPV2\Model\PaymentFlowListResponse
```

Get All Payment Flows

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得
$customerId = 'customerId_example'; // string | 指定した顧客のデータのみを取得

try {
    $result = $apiInstance->getAllPaymentFlows($limit, $startingAfter, $endingBefore, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->getAllPaymentFlows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |
| **customerId** | **string**| 指定した顧客のデータのみを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentFlowListResponse**](../Model/PaymentFlowListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentFlow()`

```php
getPaymentFlow($paymentFlowId): \PAYJPV2\Model\PaymentFlowResponse
```

Get Payment Flow

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowId = 'paymentFlowId_example'; // string

try {
    $result = $apiInstance->getPaymentFlow($paymentFlowId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->getPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentFlowResponse**](../Model/PaymentFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentFlowRefunds()`

```php
getPaymentFlowRefunds($paymentFlowId, $limit, $startingAfter, $endingBefore): \PAYJPV2\Model\PaymentRefundListResponse
```

Get Payment Flow Refunds

Payment Flowに紐づくRefundsをリスト取得する

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowId = 'paymentFlowId_example'; // string
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getPaymentFlowRefunds($paymentFlowId, $limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->getPaymentFlowRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowId** | **string**|  | |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentRefundListResponse**](../Model/PaymentRefundListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentFlow()`

```php
updatePaymentFlow($paymentFlowId, $paymentFlowUpdateRequest): \PAYJPV2\Model\PaymentFlowResponse
```

Update Payment Flow

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


$apiInstance = new PAYJPV2\Api\PaymentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentFlowId = 'paymentFlowId_example'; // string
$paymentFlowUpdateRequest = new \PAYJPV2\Model\PaymentFlowUpdateRequest(); // \PAYJPV2\Model\PaymentFlowUpdateRequest

try {
    $result = $apiInstance->updatePaymentFlow($paymentFlowId, $paymentFlowUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->updatePaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentFlowId** | **string**|  | |
| **paymentFlowUpdateRequest** | [**\PAYJPV2\Model\PaymentFlowUpdateRequest**](../Model/PaymentFlowUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\PaymentFlowResponse**](../Model/PaymentFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
