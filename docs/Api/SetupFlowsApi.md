# PAYJPV2\SetupFlowsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSetupFlow()**](SetupFlowsApi.md#cancelSetupFlow) | **POST** /v2/setup_flows/{setup_flow_id}/cancel | Cancel Setup Flow |
| [**confirmSetupFlow()**](SetupFlowsApi.md#confirmSetupFlow) | **POST** /v2/setup_flows/{setup_flow_id}/confirm | Confirm Setup Flow |
| [**createSetupFlow()**](SetupFlowsApi.md#createSetupFlow) | **POST** /v2/setup_flows | Create Setup Flow |
| [**getAllSetupFlow()**](SetupFlowsApi.md#getAllSetupFlow) | **GET** /v2/setup_flows | Get All Setup Flow |
| [**retrieveSetupFlow()**](SetupFlowsApi.md#retrieveSetupFlow) | **GET** /v2/setup_flows/{setup_flow_id} | Retrieve Setup Flow |
| [**updateSetupFlow()**](SetupFlowsApi.md#updateSetupFlow) | **POST** /v2/setup_flows/{setup_flow_id} | Update Setup Flow |


## `cancelSetupFlow()`

```php
cancelSetupFlow($setup_flow_id, $setup_flow_cancel_request): \PAYJPV2\Model\SetupFlowResponse
```

Cancel Setup Flow

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


$apiInstance = new PAYJPV2\Api\SetupFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_flow_id = 'setup_flow_id_example'; // string
$setup_flow_cancel_request = new \PAYJPV2\Model\SetupFlowCancelRequest(); // \PAYJPV2\Model\SetupFlowCancelRequest

try {
    $result = $apiInstance->cancelSetupFlow($setup_flow_id, $setup_flow_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->cancelSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_flow_id** | **string**|  | |
| **setup_flow_cancel_request** | [**\PAYJPV2\Model\SetupFlowCancelRequest**](../Model/SetupFlowCancelRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\SetupFlowResponse**](../Model/SetupFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmSetupFlow()`

```php
confirmSetupFlow($setup_flow_id, $setup_flow_confirm_request): \PAYJPV2\Model\SetupFlowResponse
```

Confirm Setup Flow

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


$apiInstance = new PAYJPV2\Api\SetupFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_flow_id = 'setup_flow_id_example'; // string
$setup_flow_confirm_request = new \PAYJPV2\Model\SetupFlowConfirmRequest(); // \PAYJPV2\Model\SetupFlowConfirmRequest

try {
    $result = $apiInstance->confirmSetupFlow($setup_flow_id, $setup_flow_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->confirmSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_flow_id** | **string**|  | |
| **setup_flow_confirm_request** | [**\PAYJPV2\Model\SetupFlowConfirmRequest**](../Model/SetupFlowConfirmRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\SetupFlowResponse**](../Model/SetupFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSetupFlow()`

```php
createSetupFlow($setup_flow_create_request): \PAYJPV2\Model\SetupFlowResponse
```

Create Setup Flow

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


$apiInstance = new PAYJPV2\Api\SetupFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_flow_create_request = new \PAYJPV2\Model\SetupFlowCreateRequest(); // \PAYJPV2\Model\SetupFlowCreateRequest

try {
    $result = $apiInstance->createSetupFlow($setup_flow_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->createSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_flow_create_request** | [**\PAYJPV2\Model\SetupFlowCreateRequest**](../Model/SetupFlowCreateRequest.md)|  | [optional] |

### Return type

[**\PAYJPV2\Model\SetupFlowResponse**](../Model/SetupFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllSetupFlow()`

```php
getAllSetupFlow($limit, $starting_after, $ending_before): \PAYJPV2\Model\SetupFlowListResponse
```

Get All Setup Flow

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


$apiInstance = new PAYJPV2\Api\SetupFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$starting_after = 'starting_after_example'; // string | このIDより後のデータを取得
$ending_before = 'ending_before_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllSetupFlow($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->getAllSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **starting_after** | **string**| このIDより後のデータを取得 | [optional] |
| **ending_before** | **string**| このIDより前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\SetupFlowListResponse**](../Model/SetupFlowListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSetupFlow()`

```php
retrieveSetupFlow($setup_flow_id): \PAYJPV2\Model\SetupFlowResponse
```

Retrieve Setup Flow

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


$apiInstance = new PAYJPV2\Api\SetupFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_flow_id = 'setup_flow_id_example'; // string

try {
    $result = $apiInstance->retrieveSetupFlow($setup_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->retrieveSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_flow_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\SetupFlowResponse**](../Model/SetupFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSetupFlow()`

```php
updateSetupFlow($setup_flow_id, $setup_flow_update_request): \PAYJPV2\Model\SetupFlowResponse
```

Update Setup Flow

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


$apiInstance = new PAYJPV2\Api\SetupFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setup_flow_id = 'setup_flow_id_example'; // string
$setup_flow_update_request = new \PAYJPV2\Model\SetupFlowUpdateRequest(); // \PAYJPV2\Model\SetupFlowUpdateRequest

try {
    $result = $apiInstance->updateSetupFlow($setup_flow_id, $setup_flow_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->updateSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setup_flow_id** | **string**|  | |
| **setup_flow_update_request** | [**\PAYJPV2\Model\SetupFlowUpdateRequest**](../Model/SetupFlowUpdateRequest.md)|  | |

### Return type

[**\PAYJPV2\Model\SetupFlowResponse**](../Model/SetupFlowResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
