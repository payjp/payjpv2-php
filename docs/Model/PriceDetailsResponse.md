# # PriceDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'price']
**id** | **string** | 料金 ID |
**livemode** | **bool** | 本番環境かどうか |
**productId** | **string** | この価格が紐付く商品の ID |
**unitAmount** | **int** | 価格の単価 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 |
**active** | **bool** | 価格が有効かどうか |
**nickname** | **string** |  |
**type** | [**\PAYJPV2\Model\PriceType**](PriceType.md) | 一度限りの購入を表す &#x60;one_time&#x60; が入ります。 |
**lookupKey** | **string** |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
