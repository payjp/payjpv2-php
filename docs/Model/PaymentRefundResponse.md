# # PaymentRefundResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'payment_refund']
**id** | **string** | 返金 ID |
**livemode** | **bool** | 本番環境かどうか |
**paymentFlowId** | **string** | 返金対象となる PaymentFlow の ID |
**amount** | **int** | 返金金額 |
**status** | [**\PAYJPV2\Model\PaymentRefundStatus**](PaymentRefundStatus.md) | 返金ステータス  &lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/status-management/refund#%E8%BF%94%E9%87%91%E3%82%B9%E3%83%86%E3%83%BC%E3%82%BF%E3%82%B9%E3%81%AE%E7%9B%A3%E8%A6%96\&quot; target&#x3D;\&quot;_blank\&quot;&gt;返金ステータスの詳細についてはこちらを参照してください。&lt;/a&gt;  | 値 | |:---| | **succeeded**: 返金が成功しました | | **failed**: 返金が失敗しました | | **pending**: 返金処理中です | | **canceled**: 返金がキャンセルされました | | **requires_action**: 追加のアクションが必要です | |
**reason** | [**\PAYJPV2\Model\PaymentRefundReason**](PaymentRefundReason.md) |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
