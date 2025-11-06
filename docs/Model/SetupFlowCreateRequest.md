# # SetupFlowCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confirm** | **bool** | SetupFlow をすぐに確定しようとする場合に &#x60;true&#x60; を設定します。このパラメーターのデフォルト値は &#x60;false&#x60; です。カードが登録済みの支払い方法である場合は、追加の認証が必要な場合に備えて &#x60;return_url&#x60; を指定できます。 | [optional] [default to false]
**customer** | **string** | この SetupFlow が属する顧客の ID。SetupFlow に PaymentMethod が設定されている場合、SetupFlow の設定が成功するとその PaymentMethod は顧客に紐付きます。別の顧客に紐付いている PaymentMethod をこの SetupFlow で使用することはできません。 | [optional]
**description** | **string** | 説明。顧客に表示されます。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]
**payment_method** | **string** | この SetupFlow に紐付ける決済方法のID | [optional]
**payment_method_data** | [**\PAYJPV2\Model\PaymentMethodCreateRequest**](PaymentMethodCreateRequest.md) | 支払い方法データ | [optional]
**payment_method_options** | **array<string,mixed>** | この SetupFlow の支払い方法の個別設定。 | [optional]
**payment_method_types** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) |  | [optional]
**return_url** | **string** | 顧客が支払いを完了後、あるいはキャンセルした後にリダイレクトされるURL。アプリにリダイレクトしたい場合は URI Scheme を指定できます。&#x60;confirm&#x3D;true&#x60; の場合のみ指定できます。 | [optional]
**usage** | [**\PAYJPV2\Model\Usage**](Usage.md) | 支払い方法が今後どのように使用されるかを指定します。指定されていない場合、この値はデフォルトで &#x60;off_session&#x60; になります。  | 指定できる値 | |:---| | **off_session**: 定期課金など、顧客がカートなどの決済フローにいるかどうか不明な場合は &#x60;off_session&#x60; を使用してください。 | | **on_session**: 顧客がカートなどの決済フローにいる場合にのみ支払い方法を利用する場合は &#x60;on_session&#x60; を使用してください。 | | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
