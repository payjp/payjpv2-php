# # PaymentFlowUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 支払い予定の金額。50円以上9,999,999円以下である必要があります。 | [optional]
**customerId** | **string** | この PaymentFlow に関連付ける顧客の ID | [optional]
**paymentMethodId** | **string** | 支払い方法 ID。customer_id の指定が必須です。Customer が所持する PaymentMethod のみ指定できます。payment_method_id を指定せず、Customer に default_payment_method_id が設定されている場合はそちらが自動でセットされます。 | [optional]
**paymentMethodOptions** | [**\PAYJPV2\Model\PaymentFlowPaymentMethodOptionsRequest**](PaymentFlowPaymentMethodOptionsRequest.md) | この PaymentFlow 固有の支払い方法の設定 | [optional]
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) | この PaymentFlow で使用できる支払い方法の種類のリスト。指定しない場合は、PAY.JP は支払い方法の設定から利用可能な支払い方法を動的に表示します。 | [optional]
**returnUrl** | **string** | 顧客が支払いを完了後かキャンセルした後にリダイレクトされる URL。アプリにリダイレクトしたい場合は URI Scheme を指定できます。 | [optional]
**description** | **string** | オブジェクトにセットする任意の文字列。ユーザーには表示されません。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
