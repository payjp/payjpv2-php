# # TaxRateDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'tax_rate']
**id** | **string** | ID |
**displayName** | **string** | 表示名。顧客に表示されます。 |
**inclusive** | **bool** | 税込みかどうか。税込 &#x3D; &#x60;true&#x60; 税抜 &#x3D; &#x60;false&#x60; |
**percentage** | **float** | 税率を % 単位で指定します（例： 10%の場合は「10」と入力） |
**active** | **bool** | この税率が有効であるかどうか。無効にした場合でも、すでに設定されている定期課金などでは使用可能です。 |
**country** | [**\PAYJPV2\Model\Country**](Country.md) |  |
**description** | **string** |  |
**taxType** | [**\PAYJPV2\Model\TaxType**](TaxType.md) |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
