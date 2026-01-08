# # PaymentFlowDataRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**captureMethod** | [**\PAYJPV2\Model\CaptureMethod**](CaptureMethod.md) | 支払いの確定方法を指定します。  | 指定できる値 | |:---| | **automatic**: 顧客が支払いを承認すると自動的に確定します。 | | **manual**: 顧客が支払いを承認すると一旦確定を保留し、後で Capture API を使用して確定します。（すべての支払い方法がこれをサポートしているわけではありません）。 | | [optional]
**metadata** | [**array<string,\PAYJPV2\Model\MetadataValue>**](MetadataValue.md) | キーバリューの任意のデータを格納できます。20件まで登録可能で、空文字列を指定するとそのキーを削除できます。&lt;a href&#x3D;\&quot;https://docs.pay.jp/v2/guide/developers/metadata\&quot;&gt;詳細はメタデータのドキュメントを参照してください。&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
