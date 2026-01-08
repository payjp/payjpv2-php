# # TaxRateDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'tax_rate']
**id** | **string** | 税率 ID |
**displayName** | **string** | 表示名。顧客に表示されます。 |
**inclusive** | **bool** | 税込みかどうか。税込 &#x3D; &#x60;true&#x60; 税抜 &#x3D; &#x60;false&#x60; |
**percentage** | **float** | 税率 (% 単位) |
**active** | **bool** | この税率が有効であるかどうか |
**country** | [**\PAYJPV2\Model\Country**](Country.md) |  |
**description** | **string** |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
