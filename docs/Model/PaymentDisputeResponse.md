# # PaymentDisputeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'payment_dispute']
**id** | **string** | PaymentDispute ID |
**livemode** | **bool** | 本番環境かどうか |
**paymentFlowId** | **string** | 関連する PaymentFlow の ID |
**amount** | **int** | 金額 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 通貨コード (ISO 4217) |
**status** | [**\PAYJPV2\Model\PaymentDisputeStatus**](PaymentDisputeStatus.md) | disputeのステータス  | 値 | |:---| | **pre_warning_needs_response**: 利用照会 | | **warning_needs_response**: 配送保留 | | **warning_needs_refund**: 配送停止 | | **warning_under_review**: 加盟店回答済 | | **needs_response**: チャージバック | | **under_review**: 反証済 | | **lost**: チャージバック受入 | | **cancel**: 取下げ | |
**reason** | [**\PAYJPV2\Model\PaymentDisputeReason**](PaymentDisputeReason.md) |  |
**dueBy** | **\DateTime** |  |
**paymentMethodType** | [**\PAYJPV2\Model\PaymentMethodTypes**](PaymentMethodTypes.md) | 支払い方法の種類 |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
