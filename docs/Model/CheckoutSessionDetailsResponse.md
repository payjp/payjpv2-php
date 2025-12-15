# # CheckoutSessionDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID |
**object** | **string** |  | [optional] [default to 'checkout.session']
**livemode** | **bool** | 本番環境かどうか |
**amountSubtotal** | **int** |  |
**amountTotal** | **int** |  |
**cancelUrl** | **string** |  |
**customerId** | **string** |  |
**customerEmail** | **string** |  |
**expiresAt** | **\DateTime** |  |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 |
**locale** | [**\PAYJPV2\Model\Locale**](Locale.md) |  |
**paymentFlowId** | **string** |  | [optional]
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) |  |
**paymentMethodOptions** | **array<string,mixed>** |  |
**setupFlowId** | **string** |  | [optional]
**submitType** | [**\PAYJPV2\Model\CheckoutSessionSubmitType**](CheckoutSessionSubmitType.md) |  |
**mode** | [**\PAYJPV2\Model\CheckoutSessionMode**](CheckoutSessionMode.md) | Checkout Session のモード  | 指定できる値 | |:---| | **payment**: 支払いモードでCheckout Sessionを作成します。 | | **setup**: セットアップモードでCheckout Sessionを作成します。 | |
**uiMode** | [**\PAYJPV2\Model\CheckoutSessionUIMode**](CheckoutSessionUIMode.md) | Checkout Session の UI モード。デフォルトは &#x60;hosted&#x60; です。&lt;br&gt;  | 指定できる値 | |:---| | **hosted**: PAY.JPでホスティングしている画面を使用します。 | |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**status** | [**\PAYJPV2\Model\CheckoutSessionStatus**](CheckoutSessionStatus.md) | チェックアウトセッションのステータス |
**successUrl** | **string** |  |
**url** | **string** | URL |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
