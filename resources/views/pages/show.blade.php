@extends("layout")
@section("content")
<header class="bg-white px-3">
  <a href="result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center">{{$livehouse->name}}</h1>
</header>
<main>
<div>ユーザーアイコン表示<p>ログイン日時表示</p></div>
<div class="">
  <table>
    <tr><td class="title">地域</td><td>：{{$livehouse->province_id}}</td></tr>
    <tr><td class="title">観客収容人数</td><td>：{{$livehouse->capacitie_type}}</td></tr>
    <tr><td class="title">喫煙可否</td><td>：{{$livehouse->smoking_type}}</td></tr>
    <tr><td class="title">ジャンル</td><td>：{{$livehouse->smoking_type}}</td></tr>
    <tr><td class="title">音源審査</td><td>：{{$livehouse->test}}</td></tr>
    <tr><td class="title">Web</td><td>：{{$livehouse->homepage}}</td></tr>
  </table>
  <div class="chart">
    チャートグラフ表示
    総合評価（星5段階）
  </div>
  <div class="evaluation-button">評価する</div>
</div>
</main>
<footer class="show-footer">
  <div class="send-mail mx-auto text-center">メールを送る</div>
</footer>
@endsection
