# PAYJPV2\PaymentDisputesApi

All URIs are relative to https://api.pay.jp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllPaymentDisputes()**](PaymentDisputesApi.md#getAllPaymentDisputes) | **GET** /v2/payment_disputes | Get All Payment Disputes |
| [**getPaymentDispute()**](PaymentDisputesApi.md#getPaymentDispute) | **GET** /v2/payment_disputes/{payment_dispute_id} | Get Payment Dispute |


## `getAllPaymentDisputes()`

```php
getAllPaymentDisputes($limit, $startingAfter, $endingBefore, $paymentFlowId, $status): \PAYJPV2\Model\PaymentDisputeListResponse
```

Get All Payment Disputes

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


$apiInstance = new PAYJPV2\Api\PaymentDisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | 取得するデータの最大件数
$startingAfter = 'startingAfter_example'; // string | このIDより後のデータを取得
$endingBefore = 'endingBefore_example'; // string | このIDより前のデータを取得
$paymentFlowId = 'paymentFlowId_example'; // string | 取得する payment_dispute に紐づく payment_flow の ID
$status = array(new \PAYJPV2\Model\\PAYJPV2\Model\PaymentDisputeStatus()); // \PAYJPV2\Model\PaymentDisputeStatus[] | 取得する payment_dispute のステータス。複数指定可能

try {
    $result = $apiInstance->getAllPaymentDisputes($limit, $startingAfter, $endingBefore, $paymentFlowId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputesApi->getAllPaymentDisputes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| 取得するデータの最大件数 | [optional] [default to 10] |
| **startingAfter** | **string**| このIDより後のデータを取得 | [optional] |
| **endingBefore** | **string**| このIDより前のデータを取得 | [optional] |
| **paymentFlowId** | **string**| 取得する payment_dispute に紐づく payment_flow の ID | [optional] |
| **status** | [**\PAYJPV2\Model\PaymentDisputeStatus[]**](../Model/\PAYJPV2\Model\PaymentDisputeStatus.md)| 取得する payment_dispute のステータス。複数指定可能 | [optional] |

### Return type

[**\PAYJPV2\Model\PaymentDisputeListResponse**](../Model/PaymentDisputeListResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentDispute()`

```php
getPaymentDispute($paymentDisputeId): \PAYJPV2\Model\PaymentDisputeResponse
```

Get Payment Dispute

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


$apiInstance = new PAYJPV2\Api\PaymentDisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = 'paymentDisputeId_example'; // string

try {
    $result = $apiInstance->getPaymentDispute($paymentDisputeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputesApi->getPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentDisputeId** | **string**|  | |

### Return type

[**\PAYJPV2\Model\PaymentDisputeResponse**](../Model/PaymentDisputeResponse.md)

### Authorization

[HTTPBasic](../../README.md#HTTPBasic), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
