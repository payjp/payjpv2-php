# # SetupFlowCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerId** | **string** | この SetupFlow に関連付ける顧客の ID。SetupFlow により作られた PaymentMethod はこの顧客に紐付きます。 | [optional]
**paymentMethodOptions** | [**\PAYJPV2\Model\SetupFlowPaymentMethodOptionsRequest**](SetupFlowPaymentMethodOptionsRequest.md) | この SetupFlow 固有の支払い方法の設定 | [optional]
**paymentMethodTypes** | **string[]** | この SetupFlow で使用できる支払い方法の種類のリスト。 指定しない場合は、PAY.JP は支払い方法の設定から利用可能な支払い方法を動的に表示します。 | [optional]
**usage** | [**\PAYJPV2\Model\Usage**](Usage.md) | 支払い方法が今後どのように使用されるかを指定します。指定されていない場合、この値はデフォルトで &#x60;off_session&#x60; になります。  | 値 | |:---| | **off_session**: 定期課金など、顧客がカートなどの決済フローにいるかどうか不明な場合は &#x60;off_session&#x60; を使用してください。 | | **on_session**: 顧客がカートなどの決済フローにいる場合にのみ支払い方法を利用する場合は &#x60;on_session&#x60; を使用してください。 | | [optional]
**description** | **string** | 説明。顧客に表示されます。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
