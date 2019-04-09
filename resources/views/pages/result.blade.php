@extends("layout")
@section("content")
<header class="result-header px-3 bg-white">
  <div class="scope"><a href="search"><i class="fas fa-search mr-2"></i>絞り込む</a></div>
  <div class="choose-display">
    <div class="envalution active">評価順</div>
    <div class="login">ログイン順</div>
  </div>
  <div class="choose-column">
    <i class="fas fa-th-large mr-1 active-icon"></i>
    <i class="fas fa-bars"></i>
  </div>
</header>
<main class="px-5" style="margin-top:90px;">
<div class="row">
  @foreach ($livehouses as $livehouse)
  <div class="col-5 text-center d-none d-md-block my-3 mx-3">
    <a href="result/{{$livehouse->id}}">
      <div class="user-icon w-100 pb-3">
        ユーザーアイコン表示枠
      </div>
      <div class="information">
        <p class="ave-evaluation">{{$livehouse->ave_evaluation}}</p>
        <h2 class="livehouse-name">{{$livehouse->name}}</h2>
        <p class="catchcopy">{{$livehouse->catchcopy}}</p>
        <p class="area">地域：{{$livehouse->province->name}}</p>
        <p class="capacity">観客収容人数：{{$livehouse->capacitie_type}}</p>
        <p class="smoke">喫煙可否：{{$livehouse->smoking_type}}</p>
        <p class="genre">ジャンル：</p>
      </div>
    </a>
  </div>
  <div class="col-12 text-center d-md-none my-3">
    <a href="result/{{$livehouse->id}}">
      <div>
        ユーザーアイコン表示枠
        <p class="ave-evaluation">{{$livehouse->ave_evaluation}}</p>
      </div>
      <canvas class="chart_<?= $livehouse->id; ?>" width="200" height="200"></canvas>
      <div class="information">
        <h2 class="livehouse-name">{{$livehouse->name}}</h2>
        <p class="catchcopy">{{$livehouse->catchcopy}}</p>
        <p class="area">地域：{{$livehouse->province->name}}</p>
        <p class="capacity">観客収容人数：{{$livehouse->capacitie_type}}</p>
        <p class="smoke">喫煙可否：{{$livehouse->smoking_type}}</p>
        <p class="genre">ジャンル：</p>
      </div>
    </a>
  </div>
  @endforeach
</div>
</main>
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
