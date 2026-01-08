# # PaymentMethodConfigurationDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'payment_method_configuration']
**id** | **string** | 支払い方法設定 ID |
**livemode** | **bool** | 本番環境かどうか |
**active** | **bool** | 設定が有効かどうか |
**name** | **string** |  |
**paypay** | [**\PAYJPV2\Model\PaymentMethodConfigurationSettingResponse**](PaymentMethodConfigurationSettingResponse.md) | PayPay の設定 |
**card** | [**\PAYJPV2\Model\PaymentMethodConfigurationSettingResponse**](PaymentMethodConfigurationSettingResponse.md) | カードの設定 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
