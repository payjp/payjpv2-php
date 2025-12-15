# # StatementResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'statement']
**id** | **string** | 明細ID |
**livemode** | **bool** | 本番環境かどうか |
**title** | **string** |  |
**type** | [**\PAYJPV2\Model\StatementType**](StatementType.md) | 取引明細の区分  | 名 | 区分 | 詳細 | |---| --- | --- | | **sales** | 売上 | 決済による売上、決済手数料等 | | **service_fee** | サービス利用料 | 有料プランの月額費用など、salesに含まれないサービス利用料 | | **forfeit** | 残高失効 | - | | **transfer_fee** | 振込手数料 | - | | **misc** | その他 | 調整金など | |
**createdAt** | **\DateTime** | 更新時の日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新時の日時 (UTC, ISO 8601 形式) |
**term** | [**\PAYJPV2\Model\TermResponse**](TermResponse.md) |  |
**balanceId** | **string** |  |
**items** | [**\PAYJPV2\Model\StatementItemResponse[]**](StatementItemResponse.md) | 明細項目のリスト |
**net** | **int** | 含まれるstatement_itemの金額合計 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
