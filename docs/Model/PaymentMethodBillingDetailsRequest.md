# # PaymentMethodBillingDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 請求先の名義 | [optional]
**phone** | **string** | 請求先の電話番号（ &#x60;type&#x3D;card&#x60; の場合、 &#x60;phone&#x60; または &#x60;email&#x60; のどちらかは必須） | [optional]
**email** | **string** | 請求先のメールアドレス（ &#x60;type&#x3D;card&#x60; の場合、 &#x60;phone&#x60; または &#x60;email&#x60; のどちらかは必須） | [optional]
**address** | [**\PAYJPV2\Model\PaymentMethodBillingAddressRequest**](PaymentMethodBillingAddressRequest.md) | 請求先の住所 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
