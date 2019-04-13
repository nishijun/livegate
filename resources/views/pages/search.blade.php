@extends("layout")
@section("content")
<header class="bg-white px-3 header-fixation">
  <a href="result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">検索条件設定</h1>
</header>
<main class="set-qualifications">
  <div class="container">

    <label for="area">地域</label>
    <select id="area" name="area">
      @foreach ($provinces as $province)
      <option value="{{$province->id}}">{{$province->name}}</option>
      @endforeach
    </select><br><hr>
    <label for="capa">収容人数</label>
    <select id="capa" name="capa">
      <option value="1">〜100</option>
      <option value="2">100〜300</option>
      <option value="3">300〜500</option>
      <option value="4">500〜1000</option>
      <option value="5">1000〜</option>
    </select><br><hr>
    <label for="smoke">喫煙</label>
    <select id="smoke" name="smoke">
      <?php $i = 1 ?>
      @foreach ($smokes as $smoke)
      <option value="<?= $i ?>">{{$smoke}}</option>
      <?php $i++ ?>
      @endforeach
    </select><br><hr>
    <label for="gen">ジャンル</label>
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック<br><hr>
    <label for="test">音源審査</label>
    <input id="test" type="checkbox" name="test" value="">あり
    <input id="test" type="checkbox" name="test" value="">なし
    <div class="reset button text-center">リセットする</div>
  </div>
</main>
@endsection
