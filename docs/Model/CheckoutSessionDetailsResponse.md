# # CheckoutSessionDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'checkout.session']
**id** | **string** | Checkout Session ID |
**livemode** | **bool** | 本番環境かどうか |
**amountSubtotal** | **int** |  |
**amountTotal** | **int** |  |
**customerId** | **string** |  |
**customerEmail** | **string** |  |
**customerDetails** | [**\PAYJPV2\Model\CheckoutSessionCustomerDetailsResponse**](CheckoutSessionCustomerDetailsResponse.md) |  | [optional]
**expiresAt** | **\DateTime** |  |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 |
**locale** | [**\PAYJPV2\Model\Locale**](Locale.md) |  |
**paymentFlowId** | **string** |  | [optional]
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) |  |
**paymentMethodOptions** | **array<string,mixed>** |  |
**setupFlowId** | **string** |  | [optional]
**submitType** | [**\PAYJPV2\Model\CheckoutSessionSubmitType**](CheckoutSessionSubmitType.md) |  |
**mode** | [**\PAYJPV2\Model\CheckoutSessionMode**](CheckoutSessionMode.md) | Checkout Session のモード  | 値 | |:---| | **payment**: 支払いモード | | **setup**: セットアップモード | |
**uiMode** | [**\PAYJPV2\Model\CheckoutSessionUIMode**](CheckoutSessionUIMode.md) | Checkout Session の UI モード  | 値 | |:---| | **hosted**: PAY.JP でホスティングしている画面を使用します。 | |
**status** | [**\PAYJPV2\Model\CheckoutSessionStatus**](CheckoutSessionStatus.md) | チェックアウトセッションのステータス |
**successUrl** | **string** |  |
**cancelUrl** | **string** |  |
**url** | **string** | URL |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
