# PAYJPV2\EventsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllEvents()**](EventsApi.md#getAllEvents) | **GET** /v2/events | Get All Events |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /v2/events/{event_id} | Get Event |


## `getAllEvents()`

```php
getAllEvents($since, $until, $limit, $offset, $resource_id, $object, $type): \PAYJPV2\Model\EventListResponse
```

Get All Events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 指定した日付以降のデータを取得
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 指定した日付以前のデータを取得
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置
$resource_id = 'resource_id_example'; // string | 取得するeventに紐づくAPIリソースのID (e.g. customer.id)
$object = 'object_example'; // string | 取得するeventに紐づくAPIリソースのobject。値はリソース名(e.g. customer, payment_intent)
$type = 'type_example'; // string | 取得するeventのtype

try {
    $result = $apiInstance->getAllEvents($since, $until, $limit, $offset, $resource_id, $object, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **\DateTime**| 指定した日付以降のデータを取得 | [optional] |
| **until** | **\DateTime**| 指定した日付以前のデータを取得 | [optional] |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |
| **resource_id** | **string**| 取得するeventに紐づくAPIリソースのID (e.g. customer.id) | [optional] |
| **object** | **string**| 取得するeventに紐づくAPIリソースのobject。値はリソース名(e.g. customer, payment_intent) | [optional] |
| **type** | **string**| 取得するeventのtype | [optional] |

### Return type

[**\PAYJPV2\Model\EventListResponse**](../Model/EventListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($event_id): \PAYJPV2\Model\EventResponse
```

Get Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PAYJPV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PAYJPV2\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
