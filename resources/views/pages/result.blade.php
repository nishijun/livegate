@extends("layout")
@section("content")
<header class="result-header px-3 bg-white">
  <a href="/" class="font-weight-bold to-index text-dark">LiveGate</a>
  <div class="scope"><a href="search"><i class="fas fa-search mr-2"></i>絞り込む</a></div>
</header>
<main class="px-3" style="margin-top:90px;">
@if (count($livehouses) > 0)
<div class="row">
  @foreach ($livehouses as $livehouse)
  <div class="col-12 col-sm-6 col-lg-4 col-xl-3 text-center my-3">
    <div class="frame m-1">
      <a href="result/{{$livehouse->id}}" class="link-show p-1">
        <div class="user-icon pb-3">
          @if($livehouse->img)
          <img src="/img/{{$livehouse->img}}" class="usericon">
          @else
          <img src="/img/noimage.png" class="usericon">
          @endif
        </div>
        <div class="information">
          <h2 class="livehouse-name font-weight-bold">{{$livehouse->name}}</h2>
          <p class="ave-evaluation">総合評価：<?= number_format(Helper::getTotalEvaluations($livehouse->id), 2, ".", ""); ?></p>
          <p class="text-center bg-dark text-white font-weight-bold py-1 mb-0">基本情報</p>
          <table class="w-100 result-table">
            <tr><td width="50%">所在地</td><td class="font-weight-bold">{{$livehouse->province->name}}</td></tr>
            <tr><td>キャパ</td><td class="font-weight-bold">{{$livehouse->capacitie_type}}</td></tr>
            <tr><td>喫煙可否</td><td class="font-weight-bold">{{$livehouse->smoking_type}}</td></tr>
            <tr><td>ジャンル</td><td class="font-weight-bold">
              @foreach ($livehouse->genres as $genre)
                {{$genre->name}}
              @endforeach
            </td></tr>
          </table>
        </div>
      </a>
    </div>
  </div>
  @endforeach
</div>
@endif
</main>
@endsection
