# # PaymentTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID |
**object** | **string** |  | [optional] [default to 'payment_transaction']
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**resourceId** | **string** | PaymentTransaction生成の元になったリソースのID |
**amount** | **int** | 金額 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 通貨 |
**feeRate** | **string** | 手数料率 |
**fee** | **int** | 手数料 |
**type** | [**\PAYJPV2\Model\PaymentTransactionType**](PaymentTransactionType.md) | PaymentTransactionの種類 |
**paymentMethodType** | [**\PAYJPV2\Model\PaymentMethodTypes**](PaymentMethodTypes.md) | 支払い方法の種類 |
**termId** | **string** | 期間ID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
