# # EventResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | イベントID |
**object** | **string** |  | [optional] [default to 'event']
**created_at** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updated_at** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**type** | **string** | イベントの種類 |
**pending_webhooks** | **int** | 設定されたURLへの通知が完了していない(2xxのレスポンスが得られていない)webhookの数 |
**data** | **object** | このイベントに関連したリソースオブジェクト |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
