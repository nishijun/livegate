@extends("layout")
@section("content")
<header class="bg-white px-3 header-fixation">
  <a href="result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>保存</a>
  <h1 class="text-center py-2 text-muted">検索条件設定</h1>
</header>
<main class="set-qualifications">
  <div class="container">
    <label for="area">地域</label>
    <select id="area" name="area">
      <option value=""></option>
    </select><br><hr>
    <label for="capa">キャパ</label>
    <select id="capa" name="capa">
      <option value=""></option>
    </select><br><hr>
    <label for="smoke">喫煙</label>
    <select id="smoke" name="smoke">
      <option></option>
    </select><br><hr>
    <label for="gen">ジャンル</label>
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <input type="checkbox" name="gen" value="rock">ロック
    <div class="reset button text-center">リセットする</div>
  </div>
</main>
@endsection
