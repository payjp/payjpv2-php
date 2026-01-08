# PAYJPV2\EventsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllEvents()**](EventsApi.md#getAllEvents) | **GET** /v2/events | Get All Events |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /v2/events/{event_id} | Get Event |


## `getAllEvents()`

```php
getAllEvents($limit, $startingAfter, $endingBefore, $resourceId, $object, $type): \PAYJPV2\Model\EventListResponse
```

Get All Events

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


$apiInstance = new PAYJPV2\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得
$resourceId = 'resourceId_example'; // string | 取得する event に紐づく API リソースの ID
$object = 'object_example'; // string | 取得する event に紐づく API リソースの object。値はリソース名 (e.g. customer, payment_flow)
$type = 'type_example'; // string | 取得する event の type

try {
    $result = $apiInstance->getAllEvents($limit, $startingAfter, $endingBefore, $resourceId, $object, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |
| **resourceId** | **string**| 取得する event に紐づく API リソースの ID | [optional] |
| **object** | **string**| 取得する event に紐づく API リソースの object。値はリソース名 (e.g. customer, payment_flow) | [optional] |
| **type** | **string**| 取得する event の type | [optional] |

### Return type

[**\PAYJPV2\Model\EventListResponse**](../Model/EventListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($eventId): \PAYJPV2\Model\EventResponse
```

Get Event

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


$apiInstance = new PAYJPV2\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string

try {
    $result = $apiInstance->getEvent($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
