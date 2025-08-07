# # SetupIntentConfirmRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method** | **string** | この SetupIntent に紐付ける決済方法のID | [optional]
**payment_method_data** | [**\PAYJPV2\Model\PaymentMethodCreateRequest**](PaymentMethodCreateRequest.md) | 支払い方法データ | [optional]
**payment_method_options** | **object** | この SetupIntent の支払い方法の個別設定。 | [optional]
**return_url** | **string** | 顧客が支払いを完了後、あるいはキャンセルした後にリダイレクトされるURL。アプリにリダイレクトしたい場合は URI Scheme を指定できます。&#x60;confirm&#x3D;true&#x60; の場合のみ指定できます。 | [optional]
**use_payjp_sdk** | **bool** | PAY.JP SDK を使用するかどうか | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
