# # EventResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | イベントID |
**object** | **string** |  | [optional] [default to 'event']
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**type** | **string** | イベントの種類 |
**pendingWebhooks** | **int** | 設定されたURLへの通知が完了していない(2xxのレスポンスが得られていない)webhookの数 |
**data** | **array<string,mixed>** | このイベントに関連したリソースオブジェクト |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
