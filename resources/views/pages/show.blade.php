@extends("layout")
@section("content")
<header class="bg-white px-3">
  <a href="/result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center">{{$livehouse->name}}</h1>
</header>
<main>
<div>ユーザーアイコン表示<p>ログイン日時表示</p></div>
<div class="container">
  <table>
    <tr><td class="title">地域</td><td>：{{$livehouse->province_id}}</td></tr>
    <tr><td class="title">観客収容人数</td><td>：{{$livehouse->capacitie_type}}</td></tr>
    <tr><td class="title">喫煙可否</td><td>：{{$livehouse->smoking_type}}</td></tr>
    <tr><td class="title">ジャンル</td><td>：{{$livehouse->smoking_type}}</td></tr>
    <tr><td class="title">音源審査</td><td>：{{$livehouse->test}}</td></tr>
    <tr><td class="title">Web</td><td>：{{$livehouse->homepage}}</td></tr>
  </table>
  <div class="chart">
    <canvas id="chart_{{$livehouse->id}}"></canvas>
    <div class="comment-area mt-5">
        <?php
        $comments = [];
        foreach($evaluations as $evaluation) {
          $comments[] = $evaluation->body;
        }
        for ($i = 0; $i < count($comments); $i++) : ?>
        <p><?= $comments[$i]?></p>
        <?php endfor ?>
    </div>
  </div>
  <div class="evaluation-button mb-5"><a href="/result/{{$livehouse->id}}/evaluate">評価する</a></div>
</div>
</main>
<footer class="show-footer">
  <div class="send-mail mx-auto text-center"><a href="/result/{{$livehouse->id}}/sendMessage">メールを送る</a></div>
</footer>
<script>
(function() {
"use strict";

let ctx = document.getElementById("chart_<?= $livehouse->id ?>");
let myRadarChart = new Chart(ctx, {
  type: 'radar',
  data: {
    labels: ["機材", "音響", "スタッフ", "アクセス", "設備", "飲食"],
    datasets: [{
        label: '<?= $livehouse->name; ?>',
        data: [
          <?= Helper::getAveEvaluations($livehouse->id, 0);?>,
          <?= Helper::getAveEvaluations($livehouse->id, 1);?>,
          <?= Helper::getAveEvaluations($livehouse->id, 2);?>,
          <?= Helper::getAveEvaluations($livehouse->id, 3);?>,
          <?= Helper::getAveEvaluations($livehouse->id, 4);?>,
          <?= Helper::getAveEvaluations($livehouse->id, 5);?>
        ],
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
          return value;
        }
      }
    }
  }
});
})();
</script>
@endsection
