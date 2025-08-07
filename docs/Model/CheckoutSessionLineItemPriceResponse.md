# # CheckoutSessionLineItemPriceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | 料金ID | [optional]
**object** | **string** |  | [optional] [default to 'price']
**livemode** | **bool** | 本番環境かどうか | [optional]
**active** | **bool** | 有効かどうか | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ | [optional]
**nickname** | **string** |  | [optional]
**type** | [**\PAYJPV2\Model\PriceType**](PriceType.md) | 料金の種類 | [optional]
**lookup_key** | **string** |  | [optional]
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 通貨 | [optional]
**product** | **string** | 商品ID | [optional]
**unit_amount** | **int** | 単価 | [optional]
**created_at** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) | [optional]
**updated_at** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
