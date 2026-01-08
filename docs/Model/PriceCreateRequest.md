# # PriceCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productId** | **string** | この価格が紐付く商品の ID |
**unitAmount** | **int** | 価格の単価 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 |
**id** | **string** | 料金 ID | [optional]
**active** | **bool** | 価格が有効かどうか | [optional] [default to true]
**nickname** | **string** | 価格の名称。PAY.JP の管理画面で識別するためのもので、顧客には表示されません。 | [optional]
**lookupKey** | **string** | この価格を検索するためのキー | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
