# # PriceDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | 料金ID | [optional]
**object** | **string** |  | [optional] [default to 'price']
**livemode** | **bool** | 本番環境かどうか | [optional]
**active** | **bool** | 価格が有効かどうか。デフォルトは &#x60;true&#x60;。 | [optional]
**metadata** | **object** | メタデータ | [optional]
**nickname** | **string** |  | [optional]
**type** | [**\PAYJPV2\Model\PriceType**](PriceType.md) | 価格が一度限りの購入か、継続的な（サブスクリプション）購入かに応じて、&#x60;one_time&#x60; または &#x60;recurring&#x60; のいずれかとなります。  | 指定できる値 | |:---| | **one_time**: 1回限りの価格。 | | **recurring**: 継続的な価格。 | | [optional]
**lookup_key** | **string** |  | [optional]
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 | [optional]
**product** | **string** | この価格が紐付く商品のID。 | [optional]
**unit_amount** | **int** | 価格の単価。0以上の整数となります。 | [optional]
**created_at** | **\DateTime** | 支払い方法作成時の日時 (UTC, ISO 8601 形式) | [optional]
**updated_at** | **\DateTime** | 支払い方法更新時の日時 (UTC, ISO 8601 形式) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
