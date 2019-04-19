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
@if (count($livehouses) > 0)
<div class="row">
  @foreach ($livehouses as $livehouse)
  <div class="col-5 text-center my-3 mx-3">
    <a href="result/{{$livehouse->id}}">
      <div class="user-icon w-100 pb-3">
        @if($livehouse->img)
          <img src="/img/{{$livehouse->img}}" class="usericon">
        @else
          <img src="/img/noimage.png" class="usericon">
        @endif
      </div>
      <div class="information">
        <p class="ave-evaluation">総合評価：<?= number_format(Helper::getTotalEvaluations($livehouse->id), 2, ".", ""); ?></p>
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
@endif
</main>
@endsection
