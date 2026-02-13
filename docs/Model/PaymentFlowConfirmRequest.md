# # PaymentFlowConfirmRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentMethodId** | **string** | 支払い方法 ID。customer_id の指定が必須です。Customer が所持する PaymentMethod のみ指定できます。payment_method_id を指定せず、Customer に default_payment_method_id が設定されている場合はそちらが自動でセットされます。 | [optional]
**paymentMethodOptions** | [**\PAYJPV2\Model\PaymentFlowPaymentMethodOptionsRequest**](PaymentFlowPaymentMethodOptionsRequest.md) | この PaymentFlow 固有の支払い方法の設定 | [optional]
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) | この PaymentFlow で使用できる支払い方法の種類のリスト。指定しない場合は、PAY.JP は支払い方法の設定から利用可能な支払い方法を動的に表示します。 | [optional]
**captureMethod** | [**\PAYJPV2\Model\CaptureMethod**](CaptureMethod.md) | 支払いの確定方法を指定します。  | 値 | |:---| | **automatic**: (デフォルト) 顧客が支払いを承認すると、自動的に確定させます。 | | **manual**: 顧客が支払いを承認すると一旦確定を保留し、後で Payment Flow の Capture API を使用して確定します。（すべての支払い方法がこれをサポートしているわけではありません）。 | | [optional]
**returnUrl** | **string** | 顧客が支払いを完了後かキャンセルした後にリダイレクトされる URL。アプリにリダイレクトしたい場合は URI Scheme を指定できます。 | [optional]
**description** | **string** | オブジェクトにセットする任意の文字列。ユーザーには表示されません。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
