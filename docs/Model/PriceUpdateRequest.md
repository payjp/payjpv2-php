# # PriceUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nickname** | **string** | 価格の名称。PAY.JP のダッシュボードで識別するためのもので、顧客には表示されません。 | [optional]
**lookupKey** | **string** | この価格を検索するためのキー。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]
**active** | **bool** | 価格が有効かどうか。デフォルトは &#x60;true&#x60;。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
