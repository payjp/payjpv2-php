# # TermResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'term']
**id** | **string** | 集計区間 ID |
**livemode** | **bool** | 本番環境かどうか |
**startAt** | **\DateTime** | 区間開始時刻 |
**endAt** | **\DateTime** | 区間終了時刻  Term が表す区間は start_at 以上 end_at 未満の範囲となります。 翌サイクルの Term の場合 null を返します。 |
**closed** | **bool** | 締め処理が完了済みなら true |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
