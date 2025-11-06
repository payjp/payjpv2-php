# PAYJPV2\StatementsApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStatementUrl()**](StatementsApi.md#createStatementUrl) | **POST** /v2/statements/{statement_id}/statement_urls | Create Statement Url |
| [**getAllStatements()**](StatementsApi.md#getAllStatements) | **GET** /v2/statements | Get All Statements |
| [**retrieveStatement()**](StatementsApi.md#retrieveStatement) | **GET** /v2/statements/{statement_id} | Retrieve Statement |


## `createStatementUrl()`

```php
createStatementUrl($statement_id): \PAYJPV2\Model\StatementURLResponse
```

Create Statement Url

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


$apiInstance = new PAYJPV2\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statement_id = 'statement_id_example'; // string

try {
    $result = $apiInstance->createStatementUrl($statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->createStatementUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statement_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\StatementURLResponse**](../Model/StatementURLResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStatements()`

```php
getAllStatements($since, $until, $limit, $starting_after, $ending_before, $owner, $source_transfer, $tenant, $type, $term): \PAYJPV2\Model\StatementListResponse
```

Get All Statements

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


$apiInstance = new PAYJPV2\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 指定した日付以降のデータを取得
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 指定した日付以前のデータを取得
$limit = 10; // int | 取得するデータの最大件数
$starting_after = 'starting_after_example'; // string | このIDより後のデータを取得
$ending_before = 'ending_before_example'; // string | このIDより前のデータを取得
$owner = 'owner_example'; // string | オーナータイプでフィルタ (merchant または tenant)
$source_transfer = 'source_transfer_example'; // string | 送金元IDでフィルタ
$tenant = 'tenant_example'; // string | テナントIDでフィルタ
$type = new \PAYJPV2\Model\\PAYJPV2\Model\StatementType(); // \PAYJPV2\Model\StatementType | 明細タイプでフィルタ
$term = 'term_example'; // string | 期間IDでフィルタ

try {
    $result = $apiInstance->getAllStatements($since, $until, $limit, $starting_after, $ending_before, $owner, $source_transfer, $tenant, $type, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getAllStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **\DateTime**| 指定した日付以降のデータを取得 | [optional] |
| **until** | **\DateTime**| 指定した日付以前のデータを取得 | [optional] |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **starting_after** | **string**| このIDより後のデータを取得 | [optional] |
| **ending_before** | **string**| このIDより前のデータを取得 | [optional] |
| **owner** | **string**| オーナータイプでフィルタ (merchant または tenant) | [optional] |
| **source_transfer** | **string**| 送金元IDでフィルタ | [optional] |
| **tenant** | **string**| テナントIDでフィルタ | [optional] |
| **type** | [**\PAYJPV2\Model\StatementType**](../Model/.md)| 明細タイプでフィルタ | [optional] |
| **term** | **string**| 期間IDでフィルタ | [optional] |

### Return type

[**\PAYJPV2\Model\StatementListResponse**](../Model/StatementListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveStatement()`

```php
retrieveStatement($statement_id): \PAYJPV2\Model\StatementResponse
```

Retrieve Statement

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


$apiInstance = new PAYJPV2\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statement_id = 'statement_id_example'; // string

try {
    $result = $apiInstance->retrieveStatement($statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statement_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\StatementResponse**](../Model/StatementResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
