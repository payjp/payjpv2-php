# # PaymentMethodConfigurationDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID | [optional]
**object** | **string** |  | [optional] [default to 'payment_method_configuration']
**active** | **bool** | 設定が有効かどうか。 | [optional]
**livemode** | **bool** | 本番環境かどうか | [optional]
**name** | **string** |  | [optional]
**paypay** | [**\PAYJPV2\Model\PaymentMethodConfigurationSettingResponse**](PaymentMethodConfigurationSettingResponse.md) | PayPayの設定 | [optional]
**card** | [**\PAYJPV2\Model\PaymentMethodConfigurationSettingResponse**](PaymentMethodConfigurationSettingResponse.md) | カードの設定 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
