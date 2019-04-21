@extends("layout")
@section("content")
<div class="w-100 h-100 complete-bg pt-5">
<div class="container">
  <div class="text-center px-2 bg-white complete-message mb-5"><i class="fas fa-check mr-3 text-success"></i><span>メール送信完了</span></div>
  <div class="text-center px-2 py-3 bg-white complete-message-2">
    <p>お問い合わせ有難う御座いました。メッセージは正常に送信されました。</p>
    <div class="to-top"><a href="/result/{{$livehouse->id}}">戻る</a></div>
  </div>
</div>
</div>
@endsection
