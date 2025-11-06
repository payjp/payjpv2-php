# PAYJPV2\BalancesApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBalanceUrl()**](BalancesApi.md#createBalanceUrl) | **POST** /v2/balances/{balance_id}/balance_urls | Create Balance Url |
| [**getAllBalances()**](BalancesApi.md#getAllBalances) | **GET** /v2/balances | Get All Balances |
| [**retrieveBalance()**](BalancesApi.md#retrieveBalance) | **GET** /v2/balances/{balance_id} | Retrieve Balance |


## `createBalanceUrl()`

```php
createBalanceUrl($balance_id): \PAYJPV2\Model\BalanceURLResponse
```

Create Balance Url

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


$apiInstance = new PAYJPV2\Api\BalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string

try {
    $result = $apiInstance->createBalanceUrl($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->createBalanceUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\BalanceURLResponse**](../Model/BalanceURLResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllBalances()`

```php
getAllBalances($since, $until, $limit, $starting_after, $ending_before, $state, $closed, $since_due_date, $until_due_date): \PAYJPV2\Model\BalanceListResponse
```

Get All Balances

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


$apiInstance = new PAYJPV2\Api\BalancesApi(
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
$state = new \PAYJPV2\Model\\PAYJPV2\Model\BalanceState(); // \PAYJPV2\Model\BalanceState | stateが指定した値であるオブジェクトに限定
$closed = True; // bool | closedが指定した値であるオブジェクトに限定
$since_due_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 入金予定日/振込期限日が指定した日時以降のデータのみ取得
$until_due_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 入金予定日/振込期限日が指定した日時以前のデータのみ取得

try {
    $result = $apiInstance->getAllBalances($since, $until, $limit, $starting_after, $ending_before, $state, $closed, $since_due_date, $until_due_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->getAllBalances: ', $e->getMessage(), PHP_EOL;
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
| **state** | [**\PAYJPV2\Model\BalanceState**](../Model/.md)| stateが指定した値であるオブジェクトに限定 | [optional] |
| **closed** | **bool**| closedが指定した値であるオブジェクトに限定 | [optional] |
| **since_due_date** | **\DateTime**| 入金予定日/振込期限日が指定した日時以降のデータのみ取得 | [optional] |
| **until_due_date** | **\DateTime**| 入金予定日/振込期限日が指定した日時以前のデータのみ取得 | [optional] |

### Return type

[**\PAYJPV2\Model\BalanceListResponse**](../Model/BalanceListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBalance()`

```php
retrieveBalance($balance_id): \PAYJPV2\Model\BalanceResponse
```

Retrieve Balance

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


$apiInstance = new PAYJPV2\Api\BalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string

try {
    $result = $apiInstance->retrieveBalance($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->retrieveBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**|  | |

### Return type

[**\PAYJPV2\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
