# # PaymentMethodResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'payment_method']
**id** | **string** | ID |
**type** | **string** |  |
**customer** | **string** |  |
**detachedAt** | **\DateTime** |  |
**livemode** | **bool** | 本番環境かどうか |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**billingDetails** | [**\PAYJPV2\Model\PaymentMethodBillingDetailsResponse**](PaymentMethodBillingDetailsResponse.md) | 請求先情報 |
**card** | [**\PAYJPV2\Model\PaymentMethodCardDetailsResponse**](PaymentMethodCardDetailsResponse.md) | カード情報 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
