# # EventResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'event']
**id** | **string** | イベント ID |
**livemode** | **bool** | 本番環境かどうか |
**type** | **string** | イベントの種類 |
**pendingWebhooks** | **int** | 設定された URL への通知が完了していない (2xx のレスポンスが得られていない) webhook の数 |
**data** | **array<string,mixed>** | このイベントに関連したリソースオブジェクト |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
