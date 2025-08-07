# # SetupIntentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID |
**object** | **string** |  | [optional] [default to 'setup_intent']
**created_at** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updated_at** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**client_secret** | **string** | この SetupIntent のクライアントシークレットです。フロントエンドで公開鍵と合わせて使用し、SetupIntent の取得や支払い処理を行います。**この値はこの SetupIntent の支払いを行う顧客以外へ公開しないでください。 |
**customer** | **string** |  | [optional]
**description** | **string** |  | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ | [optional]
**payment_method** | **string** |  | [optional]
**payment_method_options** | **object** |  | [optional]
**payment_method_types** | **string[]** | この SetupIntent で使用できる支払い方法の種類（カードなど）のリストです。 指定しない場合、ダッシュボードで利用可能な状態にしている支払い方法が自動的に設定されます。 |
**status** | [**\PAYJPV2\Model\SetupIntentStatus**](SetupIntentStatus.md) | この SetupIntent のステータスです。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/setup_intents#status\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ステータスの詳細についてはこちらをご覧ください。&lt;/a&gt;  | 値 | |:---| | **requires_payment_method**: 支払い方法が必要です。 | | **requires_confirmation**: 確認が必要です。 | | **requires_action**: 顧客のアクションが必要です。 | | **processing**: 処理中です。 | | **succeeded**: 成功しました。 | | **canceled**: キャンセルされました。 | |
**next_action** | **object** |  | [optional]
**return_url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
