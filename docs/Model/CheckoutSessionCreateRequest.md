# # CheckoutSessionCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | [**\PAYJPV2\Model\CheckoutSessionMode**](CheckoutSessionMode.md) | Checkout Session のモード  | 指定できる値 | |:---| | **payment**: 支払いモードで Checkout Session を作成します。 | | **setup**: セットアップモードで Checkout Session を作成します。 | |
**clientReferenceId** | **string** | ID | [optional]
**customerId** | **string** | 顧客 ID | [optional]
**customerEmail** | **string** | 顧客オブジェクトを作成する時に使われます。指定されていない場合、顧客にメールアドレスの入力を求めます。すでに顧客のメールアドレスを持っている場合は、このパラメータを使ってあらかじめ情報を入力しておくことが可能です。 | [optional]
**customerCreation** | [**\PAYJPV2\Model\CustomerCreation**](CustomerCreation.md) | Checkout Session の確定時に Customer を作成するかどうかを指定します。&lt;br&gt; &#x60;payment&#x60; および &#x60;setup&#x60; モードでのみ設定可能です。 | [optional]
**lineItems** | [**\PAYJPV2\Model\LineItemRequest[]**](LineItemRequest.md) | 顧客が購入する商品のリストです。このパラメーターを使用して、1回限りまたは定期的な料金を渡します。  &#x60;payment&#x60; モードの場合、最大100個のラインアイテムを使用できます。 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]
**successUrl** | **string** | 支払いや設定が完了した際に、PAY.JP が顧客をリダイレクトする URL。成功した Checkout Session からの情報をページで使用したい場合は、成功ページのカスタマイズに関するガイドをお読みください。 | [optional]
**cancelUrl** | **string** | キャンセル時のリダイレクト URL | [optional]
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 | [optional]
**expiresAt** | **\DateTime** | Checkout Session の有効期限が失効する日時 | [optional]
**locale** | [**\PAYJPV2\Model\Locale**](Locale.md) | Checkout 画面の表示言語を指定します。  | 指定できる値 | |:---| | **ja**: 日本語で表示します。 | | [optional]
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) | この PaymentFlow で使用できる支払い方法の種類（カードなど）のリストです。指定しない場合、管理画面で利用可能な状態にしている支払い方法を自動的に表示します。 | [optional]
**paymentMethodOptions** | [**\PAYJPV2\Model\CheckoutSessionPaymentMethodOptionsRequest**](CheckoutSessionPaymentMethodOptionsRequest.md) | この PaymentFlow の支払い方法の個別設定 | [optional]
**paymentFlowData** | [**\PAYJPV2\Model\PaymentFlowDataRequest**](PaymentFlowDataRequest.md) | &#x60;payment&#x60; モード指定時に PaymentFlow 作成に使用するパラメーター | [optional]
**submitType** | [**\PAYJPV2\Model\CheckoutSessionSubmitType**](CheckoutSessionSubmitType.md) | Checkout の画面上に表示される送信ボタンなど、ページ上の関連テキストをカスタマイズするために使用されます。&lt;br&gt; &#x60;submit_type&#x60; は、&#x60;payment&#x60; モードの Checkout Session でのみ指定できます。未指定時、あるいは &#x60;auto&#x60; の場合、&#x60;pay&#x60; が使用されます。  | 指定できる値 | |:---| | **auto**: &#x60;pay&#x60; が使用されます。 | | **pay**: 「支払う」（デフォルト） | | **book**: 「予約する」 | | **donate**: 「寄付する」 | | [optional]
**setupFlowData** | [**\PAYJPV2\Model\SetupFlowDataRequest**](SetupFlowDataRequest.md) | &#x60;setup&#x60; モードの Checkout Session を作成する際、SetupFlow の作成に渡されるパラメーター | [optional]
**uiMode** | [**\PAYJPV2\Model\CheckoutSessionUIMode**](CheckoutSessionUIMode.md) | Checkout Session の UI モード。デフォルトは &#x60;hosted&#x60; です。  | 指定できる値 | |:---| | **hosted**: PAY.JP でホスティングしている画面を使用します。 | | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
