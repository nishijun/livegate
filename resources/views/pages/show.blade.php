@extends("layout")
@section("content")
<header class="bg-white px-3">
  <a href="/result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
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
    <canvas id="chart_<?= $livehouse->id?>" width="300" height="300"></canvas>
  </div>
  <div class="evaluation-button"><a href="/result/{{$livehouse->id}}/evaluate">評価する</a></div>
</div>
</main>
<footer class="show-footer">
  <div class="send-mail mx-auto text-center"><a href="/result/{{$livehouse->id}}/sendMessage">メールを送る</a></div>
</footer>
<script>
(function() {
"use strict";
var ctx = document.getElementsByClassName("chart_<?= $livehouse->id; ?>");
var myRadarChart = new Chart(ctx, {
  type: 'radar',
  data: {
    labels: ["機材", "音響", "スタッフ", "アクセス", "設備", "飲食"],
    datasets: [{
      label: '東京ドーム',
      data: [3, 3, 3, 3, 3, 3],
      backgroundColor: 'RGBA(225,95,150, 0.5)',
      borderColor: 'RGBA(225,95,150, 1)',
      borderWidth: 1,
      pointBackgroundColor: 'RGB(46,106,177)'
    }]
  },
  options: {
    title: {
      display: true,
      text: 'ユーザー評価'
    },
    scale:{
      ticks:{
        suggestedMin: 0,
        suggestedMax: 5,
        stepSize: 1,
        callback: function(value, index, values){
          return  value;
        }
      }
    }
  }
});
})();
</script>
@endsection
