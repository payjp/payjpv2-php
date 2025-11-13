# PAYJPV2\PaymentFlowsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPaymentFlow()**](PaymentFlowsApi.md#cancelPaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id}/cancel | Cancel Payment Flow |
| [**capturePaymentFlow()**](PaymentFlowsApi.md#capturePaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id}/capture | Capture Payment Flow |
| [**confirmPaymentFlow()**](PaymentFlowsApi.md#confirmPaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id}/confirm | Confirm Payment Flow |
| [**createPaymentFlow()**](PaymentFlowsApi.md#createPaymentFlow) | **POST** /v2/payment_flows | Create Payment Flow |
| [**getAllPaymentFlow()**](PaymentFlowsApi.md#getAllPaymentFlow) | **GET** /v2/payment_flows | Get All Payment Flow |
| [**retrievePaymentFlow()**](PaymentFlowsApi.md#retrievePaymentFlow) | **GET** /v2/payment_flows/{payment_flow_id} | Retrieve Payment Flow |
| [**updatePaymentFlow()**](PaymentFlowsApi.md#updatePaymentFlow) | **POST** /v2/payment_flows/{payment_flow_id} | Update Payment Flow |


## `cancelPaymentFlow()`

```php
cancelPaymentFlow($payment_flow_id, $payment_flow_cancel_request): \PAYJPV2\Model\PaymentFlowResponse
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
$payment_flow_id = 'payment_flow_id_example'; // string
$payment_flow_cancel_request = new \PAYJPV2\Model\PaymentFlowCancelRequest(); // \PAYJPV2\Model\PaymentFlowCancelRequest

try {
    $result = $apiInstance->cancelPaymentFlow($payment_flow_id, $payment_flow_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->cancelPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_flow_id** | **string**|  | |
| **payment_flow_cancel_request** | [**\PAYJPV2\Model\PaymentFlowCancelRequest**](../Model/PaymentFlowCancelRequest.md)|  | [optional] |

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
capturePaymentFlow($payment_flow_id, $payment_flow_capture_request): \PAYJPV2\Model\PaymentFlowResponse
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
$payment_flow_id = 'payment_flow_id_example'; // string
$payment_flow_capture_request = new \PAYJPV2\Model\PaymentFlowCaptureRequest(); // \PAYJPV2\Model\PaymentFlowCaptureRequest

try {
    $result = $apiInstance->capturePaymentFlow($payment_flow_id, $payment_flow_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->capturePaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_flow_id** | **string**|  | |
| **payment_flow_capture_request** | [**\PAYJPV2\Model\PaymentFlowCaptureRequest**](../Model/PaymentFlowCaptureRequest.md)|  | [optional] |

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
confirmPaymentFlow($payment_flow_id, $payment_flow_confirm_request): \PAYJPV2\Model\PaymentFlowResponse
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
$payment_flow_id = 'payment_flow_id_example'; // string
$payment_flow_confirm_request = new \PAYJPV2\Model\PaymentFlowConfirmRequest(); // \PAYJPV2\Model\PaymentFlowConfirmRequest

try {
    $result = $apiInstance->confirmPaymentFlow($payment_flow_id, $payment_flow_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->confirmPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_flow_id** | **string**|  | |
| **payment_flow_confirm_request** | [**\PAYJPV2\Model\PaymentFlowConfirmRequest**](../Model/PaymentFlowConfirmRequest.md)|  | [optional] |

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
createPaymentFlow($payment_flow_create_request): \PAYJPV2\Model\PaymentFlowResponse
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
$payment_flow_create_request = new \PAYJPV2\Model\PaymentFlowCreateRequest(); // \PAYJPV2\Model\PaymentFlowCreateRequest

try {
    $result = $apiInstance->createPaymentFlow($payment_flow_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->createPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_flow_create_request** | [**\PAYJPV2\Model\PaymentFlowCreateRequest**](../Model/PaymentFlowCreateRequest.md)|  | |

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

## `getAllPaymentFlow()`

```php
getAllPaymentFlow($limit, $starting_after, $ending_before, $customer_id): \PAYJPV2\Model\PaymentFlowListResponse
```

Get All Payment Flow

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
$starting_after = 'starting_after_example'; // string | このIDより後のデータを取得
$ending_before = 'ending_before_example'; // string | このIDより前のデータを取得
$customer_id = 'customer_id_example'; // string | 指定した顧客のデータのみを取得

try {
    $result = $apiInstance->getAllPaymentFlow($limit, $starting_after, $ending_before, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->getAllPaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **starting_after** | **string**| このIDより後のデータを取得 | [optional] |
| **ending_before** | **string**| このIDより前のデータを取得 | [optional] |
| **customer_id** | **string**| 指定した顧客のデータのみを取得 | [optional] |

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

## `retrievePaymentFlow()`

```php
retrievePaymentFlow($payment_flow_id): \PAYJPV2\Model\PaymentFlowResponse
```

Retrieve Payment Flow

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
$payment_flow_id = 'payment_flow_id_example'; // string

try {
    $result = $apiInstance->retrievePaymentFlow($payment_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->retrievePaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_flow_id** | **string**|  | |

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

## `updatePaymentFlow()`

```php
updatePaymentFlow($payment_flow_id, $payment_flow_update_request): \PAYJPV2\Model\PaymentFlowResponse
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
$payment_flow_id = 'payment_flow_id_example'; // string
$payment_flow_update_request = new \PAYJPV2\Model\PaymentFlowUpdateRequest(); // \PAYJPV2\Model\PaymentFlowUpdateRequest

try {
    $result = $apiInstance->updatePaymentFlow($payment_flow_id, $payment_flow_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentFlowsApi->updatePaymentFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_flow_id** | **string**|  | |
| **payment_flow_update_request** | [**\PAYJPV2\Model\PaymentFlowUpdateRequest**](../Model/PaymentFlowUpdateRequest.md)|  | |

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
