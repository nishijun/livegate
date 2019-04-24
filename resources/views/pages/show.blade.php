@extends("layout")
@section("content")
<header class="bg-white px-3">
  <a href="/result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center text-muted section-title">{{$livehouse->name}}</h1>
</header>
<main>
<div class="container">
  <div>
    @if($livehouse->img)
    <img src="/img/{{$livehouse->img}}" class="usericon-show">
    @else
    <img src="/img/noimage.png" class="usericon">
    @endif
  </div>
  <div class="catchcopy text-center">{{$livehouse->catchcopy}}</div>
  <p class="text-white bg-dark mt-3 mb-0 font-weight-bold text-center py-2">基本情報</p>
  <table class="w-100 mb-3">
    <tr><td class="title">所在地</td><td class="fact">{{$livehouse->province->name}}</td></tr>
    <tr><td class="title">キャパ</td><td class="fact">{{$livehouse->capacitie_type}}</td></tr>
    <tr><td class="title">喫煙可否</td><td class="fact">{{$livehouse->smoking_type}}</td></tr>
    <tr><td class="title">音源審査</td><td class="fact">{{$livehouse->test}}</td></tr>
    <tr><td class="title">ジャンル</td><td class="fact">
      @foreach ($livehouse->genres as $genre)
        {{$genre->name}}
      @endforeach
    </td></tr>
    <tr><td class="title">ノルマ目安</td><td class="fact">{{$livehouse->price}}</td></tr>
    <tr><td class="title">Web</td><td class="fact"><a href="{{$livehouse->homepage}}">{{$livehouse->homepage}}</a></td></tr>
  </table>
  <div class="chart">
    <canvas id="chart_{{$livehouse->id}}"></canvas>
    <p class="text-center mt-3 total-eva">総合評価：<span id="rateYo"></span><?= number_format(Helper::getTotalEvaluations($livehouse->id), 2, ".", ""); ?></p>
    <div class="mt-5 comment">
      <h2 id="switch">このライブハウスへのコメント<i id="changer" class="fas fa-chevron-down"></i></h2>
      <div class="comment_area">
        <?php
        $comments = [];
        foreach($evaluations as $evaluation) {
          $comments[] = $evaluation->body;
        }
        for ($i = 0; $i < count($comments); $i++) : ?>
        <p><?= $comments[$i]?></p>
        <hr>
        <?php endfor ?>
      </div>
    </div>
  </div>
</div>
<div class="action-area">
  <div class="evaluation-button button"><a href="/result/{{$livehouse->id}}/evaluate">評価する</a></div>
  <div class="send-mail text-center button"><a href="/result/{{$livehouse->id}}/sendMessage">メールを送る</a></div>
</div>
</main>
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
