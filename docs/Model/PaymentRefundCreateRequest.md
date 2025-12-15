# # PaymentRefundCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentFlowId** | **string** | 返金対象となる PaymentFlow の ID |
**amount** | **int** | 返金金額 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]
**reason** | [**\PAYJPV2\Model\PaymentRefundReason**](PaymentRefundReason.md) | 返金理由  | 指定できる値 | |:---| | **duplicate**: 重複した支払い | | **fraudulent**: 不正な支払い | | **requested_by_customer**: 顧客の要求 | | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
