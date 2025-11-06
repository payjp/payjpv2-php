# # CheckoutSessionLineItemDataResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'line_item']
**id** | **string** | ID | [optional]
**amount_subtotal** | **int** | 割引や税金が適用される前のすべての商品の合計金額 | [optional]
**amount_tax** | **int** | 税額 | [optional]
**amount_total** | **int** | 割引と税金が適用された後のすべての商品の合計金額 | [optional]
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 | [optional]
**description** | **string** | 説明 | [optional]
**price** | [**\PAYJPV2\Model\PriceDetailsResponse**](PriceDetailsResponse.md) | 料金情報 | [optional]
**quantity** | **int** | 数量 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
