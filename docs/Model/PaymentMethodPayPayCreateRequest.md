# # PaymentMethodPayPayCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | **string** | 顧客ID | [optional]
**billingDetails** | [**\PAYJPV2\Model\PaymentMethodBillingDetailsRequest**](PaymentMethodBillingDetailsRequest.md) | 請求先情報 | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]
**type** | **string** | PayPay決済の場合は &#x60;paypay&#x60; を指定します。 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
