# # BankInfoResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankCode** | **string** | 銀行コード |
**bankBranchCode** | **string** | 支店番号 |
**bankAccountType** | **string** | 口座種別。&#x60;普通&#x60; または &#x60;当座&#x60; |
**bankAccountNumber** | **string** | 口座番号 |
**bankAccountHolderName** | **string** | 口座名義 |
**bankAccountStatus** | [**\PAYJPV2\Model\BankAccountStatus**](BankAccountStatus.md) | 最新振込結果  | 値 | |:---| | **success**: 成功 | | **failed**: 失敗 | | **pending**: 初回振込み前 | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
