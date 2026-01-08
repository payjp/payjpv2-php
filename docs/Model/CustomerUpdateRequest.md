# # CustomerUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**defaultPaymentMethodId** | **string** |  | [optional]
**email** | **string** | 顧客のメールアドレス。メールアドレスの形式が正しいかどうかは検証されます。 | [optional]
**description** | **string** | 顧客オブジェクトに付加できる任意の文字列です。管理画面で顧客と一緒に表示されます。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
