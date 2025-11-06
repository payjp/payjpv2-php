# # PaymentMethodCardCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | **string** | 顧客ID | [optional]
**billing_details** | [**\PAYJPV2\Model\PaymentMethodCardBillingDetailsRequest**](PaymentMethodCardBillingDetailsRequest.md) | 請求先情報 |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]
**type** | **string** | クレジットカード決済の場合は &#x60;card&#x60; を指定します。 |
**card** | [**\PAYJPV2\Model\PaymentMethodCreateCardDetailsRequest**](PaymentMethodCreateCardDetailsRequest.md) | カード情報 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
