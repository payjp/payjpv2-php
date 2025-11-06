# # PaymentTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID |
**object** | **string** |  | [optional] [default to 'payment_transaction']
**created_at** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updated_at** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**resource_id** | **string** | PaymentTransaction生成の元になったリソースのID |
**amount** | **int** | 金額 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 通貨 |
**fee_rate** | **string** | 手数料率 |
**fee** | **int** | 手数料 |
**type** | [**\PAYJPV2\Model\PaymentTransactionType**](PaymentTransactionType.md) | PaymentTransactionの種類 |
**payment_method_type** | [**\PAYJPV2\Model\PaymentMethodTypes**](PaymentMethodTypes.md) | 支払い方法の種類 |
**term** | **string** | 期間ID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
