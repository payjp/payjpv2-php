# # PaymentRefundResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | 返金対象となる PaymentFlow の ID |
**object** | **string** |  | [optional] [default to 'refund']
**created_at** | **\DateTime** | 作成時の日時 (UTC, ISO 8601 形式) |
**updated_at** | **\DateTime** | 更新時の日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**amount** | **int** | 返金金額 |
**status** | [**\PAYJPV2\Model\PaymentRefundStatus**](PaymentRefundStatus.md) | 返金ステータス  &lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/payment_refunds#refund_status\&quot; target&#x3D;\&quot;_blank\&quot;&gt;返金ステータスの詳細についてはこちらを参照してください。&lt;/a&gt;  | 指定できる値 | |:---| | **succeeded**: 成功 | | **failed**: 失敗 | | **pending**: 保留中 | | **canceled**: キャンセル | |
**payment_flow** | **string** | 返金対象となる PaymentFlow の ID |
**reason** | [**\PAYJPV2\Model\PaymentRefundReason**](PaymentRefundReason.md) |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
