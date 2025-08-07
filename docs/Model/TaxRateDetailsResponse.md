# # TaxRateDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'tax_rate']
**id** | **string** | ID | [optional]
**display_name** | **string** | 表示名。顧客に表示されます。 | [optional]
**inclusive** | **bool** | 税込みかどうか。税込 &#x3D; &#x60;true&#x60; 税抜 &#x3D; &#x60;false&#x60; | [optional]
**percentage** | **float** | 税率を % 単位で指定します（例： 10%の場合は「10」と入力） | [optional]
**active** | **bool** | この税率が有効であるかどうか。無効にした場合でも、すでに設定されている定期課金などでは使用可能です。 | [optional]
**country** | [**\PAYJPV2\Model\Country**](Country.md) |  | [optional]
**description** | **string** |  | [optional]
**tax_type** | [**\PAYJPV2\Model\TaxType**](TaxType.md) |  | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
