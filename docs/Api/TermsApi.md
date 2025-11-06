# PAYJPV2\TermsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllTerm()**](TermsApi.md#getAllTerm) | **GET** /v2/terms | Get All Term |
| [**retrieveTerm()**](TermsApi.md#retrieveTerm) | **GET** /v2/terms/{term_id} | Retrieve Term |


## `getAllTerm()`

```php
getAllTerm($limit, $offset, $since_start_at, $until_start_at): \PAYJPV2\Model\TermListResponse
```

Get All Term

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


$apiInstance = new PAYJPV2\Api\TermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$offset = 0; // int | データ取得を行う開始位置
$since_start_at = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | start_atが指定した日付以降のデータを取得
$until_start_at = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | start_atが指定した日付以前のデータを取得

try {
    $result = $apiInstance->getAllTerm($limit, $offset, $since_start_at, $until_start_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->getAllTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **offset** | **int**| データ取得を行う開始位置 | [optional] [default to 0] |
| **since_start_at** | **\DateTime**| start_atが指定した日付以降のデータを取得 | [optional] |
| **until_start_at** | **\DateTime**| start_atが指定した日付以前のデータを取得 | [optional] |

### Return type

[**\PAYJPV2\Model\TermListResponse**](../Model/TermListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveTerm()`

```php
retrieveTerm($term_id): \PAYJPV2\Model\TermResponse
```

Retrieve Term

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


$apiInstance = new PAYJPV2\Api\TermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term_id = 'term_id_example'; // string

try {
    $result = $apiInstance->retrieveTerm($term_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->retrieveTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **term_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\TermResponse**](../Model/TermResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
