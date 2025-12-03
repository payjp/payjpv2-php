# # BalanceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'balance']
**id** | **string** | 残高ID |
**livemode** | **bool** | 本番環境かどうか |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新時の日時 (UTC, ISO 8601 形式) |
**state** | [**\PAYJPV2\Model\BalanceState**](BalanceState.md) | Balanceの状態  | 指定できる値 | |:---| | **collecting**: 集計中 | | **transfer**: 入金 | | **claim**: 請求 | |
**statements** | [**\PAYJPV2\Model\StatementResponse[]**](StatementResponse.md) | 関連付けられているStatementオブジェクトのリスト |
**closed** | **bool** | このBalanceの清算が終了していればtrue  state&#x3D;transferであれば加盟店口座への入金作業完了、state&#x3D;claimであればPAY.JPで請求額の振込が確認できたことを表します。 |
**closedDate** | **\DateTime** |  |
**dueDate** | **\DateTime** |  |
**net** | **int** | 関連付けられているStatementの総額 |
**bankInfo** | [**\PAYJPV2\Model\BankInfoResponse**](BankInfoResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
