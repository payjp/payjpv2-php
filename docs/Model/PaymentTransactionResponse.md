# # PaymentTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'payment_transaction']
**id** | **string** | 決済トランザクション ID |
**livemode** | **bool** | 本番環境かどうか |
**resourceId** | **string** | PaymentTransaction 生成の元になったリソースの ID |
**amount** | **int** | 金額 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 通貨 |
**feeRate** | **string** | 手数料率 |
**fee** | **int** | 手数料 |
**type** | [**\PAYJPV2\Model\PaymentTransactionType**](PaymentTransactionType.md) | PaymentTransaction の種類  | 値 | |:---| | **payment**: 支払い | | **refund**: 返金 | | **chargeback**: チャージバック | | **chargeback_cancel**: チャージバックのキャンセル | |
**paymentMethodType** | [**\PAYJPV2\Model\PaymentMethodTypes**](PaymentMethodTypes.md) | 支払い方法の種類 |
**termId** | **string** | 集計区間 ID |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
