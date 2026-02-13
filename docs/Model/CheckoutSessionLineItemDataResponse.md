# # CheckoutSessionLineItemDataResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'line_item']
**id** | **string** | ID |
**amountSubtotal** | **int** | 割引や税金が適用される前のすべての商品の合計金額 |
**amountTax** | **int** | 税額 |
**amountTotal** | **int** | 割引と税金が適用された後のすべての商品の合計金額 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 |
**description** | **string** |  |
**price** | [**\PAYJPV2\Model\PriceDetailsResponse**](PriceDetailsResponse.md) | 料金情報 |
**quantity** | **int** | 数量 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
