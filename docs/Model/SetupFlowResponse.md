# # SetupFlowResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional] [default to 'setup_flow']
**id** | **string** | ID |
**livemode** | **bool** | 本番環境かどうか |
**clientSecret** | **string** | この SetupFlow のクライアントシークレットです。フロントエンドで公開鍵と合わせて使用し、SetupFlow の取得や支払い方法の登録処理を行います。**この値はこの SetupFlow を利用する顧客以外へ公開しないでください。 |
**customerId** | **string** |  |
**description** | **string** |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**paymentMethodId** | **string** |  |
**paymentMethodOptions** | **array<string,mixed>** |  |
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) | この SetupFlow で使用できる支払い方法の種類のリスト |
**status** | [**\PAYJPV2\Model\SetupFlowStatus**](SetupFlowStatus.md) | この SetupFlow のステータスです。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/payments/setupflow#setup-flow-%E3%81%AE%E3%82%B9%E3%83%86%E3%83%BC%E3%82%BF%E3%82%B9\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ステータスの詳細についてはこちらをご覧ください。&lt;/a&gt;  | 値 | |:---| | **requires_payment_method**: 支払い方法が必要です。 | | **requires_confirmation**: 確認が必要です。 | | **requires_action**: 顧客のアクションが必要です。 | | **processing**: 処理中です。 | | **succeeded**: 成功しました。 | | **canceled**: キャンセルされました。 | |
**nextAction** | **array<string,mixed>** |  |
**returnUrl** | **string** |  |
**lastSetupError** | **array<string,mixed>** |  |
**cancellationReason** | [**\PAYJPV2\Model\SetupFlowCancellationReason**](SetupFlowCancellationReason.md) |  |
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
