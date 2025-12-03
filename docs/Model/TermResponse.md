# # TermResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID |
**object** | **string** |  | [optional] [default to 'term']
**livemode** | **bool** | 本番環境かどうか |
**startAt** | **\DateTime** | 区間開始時刻 |
**endAt** | **\DateTime** | 区間終了時刻  Termが表す区間はstart_at 以上 end_at 未満 の範囲となります。 翌サイクルのTermの場合nullを返します。 |
**closed** | **bool** | 締め処理が完了済みならTrue |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
