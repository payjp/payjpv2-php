# # CheckoutSessionDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID | [optional]
**object** | **string** |  | [optional] [default to 'checkout.session']
**livemode** | **bool** | 本番環境かどうか | [optional]
**amount_subtotal** | **int** |  | [optional]
**amount_total** | **int** |  | [optional]
**billing_address_collection** | [**\PAYJPV2\Model\BillingAddressCollection**](BillingAddressCollection.md) |  | [optional]
**cancel_url** | **string** |  | [optional]
**customer** | [**\PAYJPV2\Model\Customer**](Customer.md) |  | [optional]
**customer_email** | **string** |  | [optional]
**customer_details** | **array<string,mixed>** | &#x60;expand&#x60; パラメーターを指定した場合、顧客の詳細情報を含んだオブジェクトが返却されます。  | 説明 | |:---| | **email**: 顧客のメールアドレス | | [optional]
**expires_at** | **\DateTime** |  | [optional]
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 | [optional]
**locale** | [**\PAYJPV2\Model\Locale**](Locale.md) |  | [optional]
**payment_flow** | [**\PAYJPV2\Model\PaymentFlow**](PaymentFlow.md) |  | [optional]
**payment_method_types** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) |  | [optional]
**payment_method_options** | **array<string,mixed>** |  | [optional]
**setup_flow** | [**\PAYJPV2\Model\SetupFlow**](SetupFlow.md) |  | [optional]
**submit_type** | [**\PAYJPV2\Model\CheckoutSessionSubmitType**](CheckoutSessionSubmitType.md) |  | [optional]
**mode** | [**\PAYJPV2\Model\CheckoutSessionMode**](CheckoutSessionMode.md) | Checkout Session のモード  | 指定できる値 | |:---| | **hosted**: PAY.JPでホスティングしている画面を使用します。 | | [optional]
**ui_mode** | [**\PAYJPV2\Model\CheckoutSessionUIMode**](CheckoutSessionUIMode.md) | Checkout Session の UI モード。デフォルトは &#x60;hosted&#x60; です。&lt;br&gt;  | 指定できる値 | |:---| | **hosted**: PAY.JPでホスティングしている画面を使用します。 | | [optional]
**created_at** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) | [optional]
**updated_at** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ | [optional]
**status** | [**\PAYJPV2\Model\CheckoutSessionStatus**](CheckoutSessionStatus.md) | チェックアウトセッションのステータス | [optional]
**line_items** | [**\PAYJPV2\Model\CheckoutSessionLineItemsResponse**](CheckoutSessionLineItemsResponse.md) |  | [optional]
**success_url** | **string** |  | [optional]
**url** | **string** | URL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
