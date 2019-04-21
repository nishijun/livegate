@extends("layout")
@section("content")
<header class="result-header px-3 bg-white">
  <div class="scope"><a href="search"><i class="fas fa-search mr-2"></i>絞り込む</a></div>
</header>
<main class="px-5" style="margin-top:90px;">
@if (count($livehouses) > 0)
<div class="row">
  @foreach ($livehouses as $livehouse)
  <div class="col-5 text-center my-3 mx-3">
    <a href="result/{{$livehouse->id}}">
      <div class="user-icon pb-3">
        @if($livehouse->img)
          <img src="/img/{{$livehouse->img}}" class="usericon">
        @else
          <img src="/img/noimage.png" class="usericon">
        @endif
      </div>
      <div class="information">
        <h2 class="livehouse-name">{{$livehouse->name}}</h2>
        <p class="ave-evaluation">総合評価：<?= number_format(Helper::getTotalEvaluations($livehouse->id), 2, ".", ""); ?></p>
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
