# # PaymentRefundCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentFlowId** | **string** | 返金対象となる PaymentFlow の ID |
**amount** | **int** | 返金金額。省略すると全額返金となります。 | [optional]
**reason** | [**\PAYJPV2\Model\PaymentRefundReason**](PaymentRefundReason.md) | 返金理由  | 値 | |:---| | **duplicate**: 重複した支払い | | **fraudulent**: 不正な支払い | | **requested_by_customer**: 顧客の要求 | | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
