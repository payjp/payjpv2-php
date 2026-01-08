# # TaxRateUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | この税率が有効であるかどうか。無効にした場合でも、すでに設定されている定期課金などでは使用可能です。 | [optional]
**country** | [**\PAYJPV2\Model\Country**](Country.md) | 有効な2文字の &lt;a href&#x3D;\&quot;https://ja.wikipedia.org/wiki/ISO_3166-1\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 国コード&lt;/a&gt; | [optional]
**description** | **string** | 説明。管理画面内のみで表示され、顧客には表示されません。 | [optional]
**displayName** | **string** | 表示名。顧客に表示されます。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
