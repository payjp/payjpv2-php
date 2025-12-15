# # PaymentFlowResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | 支払いフローID |
**object** | **string** |  | [optional] [default to 'payment_flow']
**createdAt** | **\DateTime** | 作成日時 (UTC, ISO 8601 形式) |
**updatedAt** | **\DateTime** | 更新日時 (UTC, ISO 8601 形式) |
**livemode** | **bool** | 本番環境かどうか |
**amount** | **int** | 支払い予定の金額 |
**currency** | [**\PAYJPV2\Model\Currency**](Currency.md) | 価格の通貨。現在は &#x60;jpy&#x60; のみサポートしています。 |
**amountCapturable** | **int** |  |
**amountReceived** | **int** |  |
**clientSecret** | **string** | このPaymentFlowのクライアントシークレットです。フロントエンドで公開APIキーと合わせて使用しPaymentFlowの情報を取得や支払い処理を行います。**この値はこのPaymentFlowの支払いを行う顧客以外へ公開しないでください。**また保存やログへの記録なども行わないでください。 |
**customerId** | **string** |  |
**description** | **string** |  |
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | メタデータ |
**paymentMethodId** | **string** |  |
**paymentMethodOptions** | **array<string,mixed>** |  |
**paymentMethodTypes** | [**\PAYJPV2\Model\PaymentMethodTypes[]**](PaymentMethodTypes.md) | このPaymentFlowで使用できる支払い方法の種類のリスト |
**status** | [**\PAYJPV2\Model\PaymentFlowStatus**](PaymentFlowStatus.md) | このPaymentFlowのステータス。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/payment_flows#status\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ステータスの詳細についてはこちらをご覧ください。&lt;/a&gt;  | 値 | |:---| | **requires_payment_method**: 支払い方法が必要です。 | | **requires_confirmation**: 確認が必要です。 | | **requires_action**: 顧客のアクションが必要です。 | | **processing**: 処理中です。 | | **requires_capture**: 確定が必要です。 | | **canceled**: キャンセルされました。 | | **succeeded**: 成功しました。 | |
**nextAction** | **array<string,mixed>** |  |
**returnUrl** | **string** |  |
**captureMethod** | [**\PAYJPV2\Model\CaptureMethod**](CaptureMethod.md) | 支払いの確定方法  | 指定できる値 | |:---| | **automatic**: (デフォルト) 顧客が支払いを承認すると、自動的に確定させます。 | | **manual**: 顧客が支払いを承認すると一旦確定を保留し、後で Capture API を使用して確定します。（すべての支払い方法がこれをサポートしているわけではありません）。 | |
**lastPaymentError** | **array<string,mixed>** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
