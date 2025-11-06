# # SetupFlowUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | **string** | この SetupFlow が属する顧客の ID。SetupFlow に PaymentMethod が設定されている場合、SetupFlow の設定が成功するとその PaymentMethod は顧客に紐付きます。別の顧客に紐付いている PaymentMethod をこの SetupFlow で使用することはできません。 | [optional]
**payment_method** | **string** | この SetupFlow に紐付ける決済方法のID | [optional]
**payment_method_options** | **array<string,mixed>** | この SetupFlow の支払い方法の個別設定。 | [optional]
**payment_method_types** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) |  | [optional]
**description** | **string** | 説明。顧客に表示されます。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
