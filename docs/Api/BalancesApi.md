# PAYJPV2\BalancesApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBalanceUrl()**](BalancesApi.md#createBalanceUrl) | **POST** /v2/balances/{balance_id}/balance_urls | Create Balance Url |
| [**getAllBalances()**](BalancesApi.md#getAllBalances) | **GET** /v2/balances | Get All Balances |
| [**getBalance()**](BalancesApi.md#getBalance) | **GET** /v2/balances/{balance_id} | Get Balance |


## `createBalanceUrl()`

```php
createBalanceUrl($balanceId): \PAYJPV2\Model\BalanceURLResponse
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
$balanceId = 'balanceId_example'; // string

try {
    $result = $apiInstance->createBalanceUrl($balanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->createBalanceUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balanceId** | **string**|  | |

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
getAllBalances($since, $until, $limit, $startingAfter, $endingBefore, $state, $closed, $sinceDueDate, $untilDueDate): \PAYJPV2\Model\BalanceListResponse
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
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得
$state = new \PAYJPV2\Model\\PAYJPV2\Model\BalanceState(); // \PAYJPV2\Model\BalanceState | state が指定した値であるオブジェクトに限定
$closed = True; // bool | closed が指定した値であるオブジェクトに限定
$sinceDueDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 入金予定日/振込期限日が指定した日時以降のデータのみ取得
$untilDueDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 入金予定日/振込期限日が指定した日時以前のデータのみ取得

try {
    $result = $apiInstance->getAllBalances($since, $until, $limit, $startingAfter, $endingBefore, $state, $closed, $sinceDueDate, $untilDueDate);
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
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |
| **state** | [**\PAYJPV2\Model\BalanceState**](../Model/.md)| state が指定した値であるオブジェクトに限定 | [optional] |
| **closed** | **bool**| closed が指定した値であるオブジェクトに限定 | [optional] |
| **sinceDueDate** | **\DateTime**| 入金予定日/振込期限日が指定した日時以降のデータのみ取得 | [optional] |
| **untilDueDate** | **\DateTime**| 入金予定日/振込期限日が指定した日時以前のデータのみ取得 | [optional] |

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

## `getBalance()`

```php
getBalance($balanceId): \PAYJPV2\Model\BalanceResponse
```

Get Balance

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
$balanceId = 'balanceId_example'; // string

try {
    $result = $apiInstance->getBalance($balanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->getBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balanceId** | **string**|  | |

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
