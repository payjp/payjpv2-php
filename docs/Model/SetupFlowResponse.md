# # SetupFlowResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID |
**object** | **string** |  | [optional] [default to 'setup_flow']
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**clientSecret** | **string** | この SetupFlow のクライアントシークレットです。フロントエンドで公開鍵と合わせて使用し、SetupFlow の取得や支払い処理を行います。**この値はこの SetupFlow の支払いを行う顧客以外へ公開しないでください。 |
**customer** | **string** |  |
**description** | **string** |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**paymentMethod** | **string** |  |
**paymentMethodOptions** | **array<string,mixed>** |  |
**paymentMethodTypes** | **string[]** | この SetupFlow で使用できる支払い方法の種類（カードなど）のリストです。 指定しない場合、ダッシュボードで利用可能な状態にしている支払い方法が自動的に設定されます。 |
**status** | [**\PAYJPV2\Model\SetupFlowStatus**](SetupFlowStatus.md) | この SetupFlow のステータスです。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/setup_flows#status\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ステータスの詳細についてはこちらをご覧ください。&lt;/a&gt;  | 値 | |:---| | **requires_payment_method**: 支払い方法が必要です。 | | **requires_confirmation**: 確認が必要です。 | | **requires_action**: 顧客のアクションが必要です。 | | **processing**: 処理中です。 | | **succeeded**: 成功しました。 | | **canceled**: キャンセルされました。 | |
**nextAction** | **array<string,mixed>** |  |
**returnUrl** | **string** |  |
**lastSetupError** | **array<string,mixed>** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
