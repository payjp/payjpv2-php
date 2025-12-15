# PAYJPV2\SetupFlowsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSetupFlow()**](SetupFlowsApi.md#cancelSetupFlow) | **POST** /v2/setup_flows/{setup_flow_id}/cancel | Cancel Setup Flow |
| [**createSetupFlow()**](SetupFlowsApi.md#createSetupFlow) | **POST** /v2/setup_flows | Create Setup Flow |
| [**getAllSetupFlows()**](SetupFlowsApi.md#getAllSetupFlows) | **GET** /v2/setup_flows | Get All Setup Flows |
| [**getSetupFlow()**](SetupFlowsApi.md#getSetupFlow) | **GET** /v2/setup_flows/{setup_flow_id} | Get Setup Flow |
| [**updateSetupFlow()**](SetupFlowsApi.md#updateSetupFlow) | **POST** /v2/setup_flows/{setup_flow_id} | Update Setup Flow |


## `cancelSetupFlow()`

```php
cancelSetupFlow($setupFlowId, $setupFlowCancelRequest): \PAYJPV2\Model\SetupFlowResponse
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
$setupFlowId = 'setupFlowId_example'; // string
$setupFlowCancelRequest = new \PAYJPV2\Model\SetupFlowCancelRequest(); // \PAYJPV2\Model\SetupFlowCancelRequest

try {
    $result = $apiInstance->cancelSetupFlow($setupFlowId, $setupFlowCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->cancelSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setupFlowId** | **string**|  | |
| **setupFlowCancelRequest** | [**\PAYJPV2\Model\SetupFlowCancelRequest**](../Model/SetupFlowCancelRequest.md)|  | [optional] |

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
createSetupFlow($setupFlowCreateRequest): \PAYJPV2\Model\SetupFlowResponse
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
$setupFlowCreateRequest = new \PAYJPV2\Model\SetupFlowCreateRequest(); // \PAYJPV2\Model\SetupFlowCreateRequest

try {
    $result = $apiInstance->createSetupFlow($setupFlowCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->createSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setupFlowCreateRequest** | [**\PAYJPV2\Model\SetupFlowCreateRequest**](../Model/SetupFlowCreateRequest.md)|  | [optional] |

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

## `getAllSetupFlows()`

```php
getAllSetupFlows($limit, $startingAfter, $endingBefore): \PAYJPV2\Model\SetupFlowListResponse
```

Get All Setup Flows

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
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得

try {
    $result = $apiInstance->getAllSetupFlows($limit, $startingAfter, $endingBefore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->getAllSetupFlows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |

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

## `getSetupFlow()`

```php
getSetupFlow($setupFlowId): \PAYJPV2\Model\SetupFlowResponse
```

Get Setup Flow

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
$setupFlowId = 'setupFlowId_example'; // string

try {
    $result = $apiInstance->getSetupFlow($setupFlowId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->getSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setupFlowId** | **string**|  | |

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
updateSetupFlow($setupFlowId, $setupFlowUpdateRequest): \PAYJPV2\Model\SetupFlowResponse
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
$setupFlowId = 'setupFlowId_example'; // string
$setupFlowUpdateRequest = new \PAYJPV2\Model\SetupFlowUpdateRequest(); // \PAYJPV2\Model\SetupFlowUpdateRequest

try {
    $result = $apiInstance->updateSetupFlow($setupFlowId, $setupFlowUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupFlowsApi->updateSetupFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setupFlowId** | **string**|  | |
| **setupFlowUpdateRequest** | [**\PAYJPV2\Model\SetupFlowUpdateRequest**](../Model/SetupFlowUpdateRequest.md)|  | |

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
