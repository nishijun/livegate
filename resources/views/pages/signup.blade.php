@extends("layout")
@section("content")
<header class="bg-white header-fixation">
  <h1 class="text-center py-2 text-muted">プロフィール入力</h1>
</header>
<main class="profile">
  <div class="container">
    <form class="" action="" method="post">
      <label for="name">ライブハウス名</label>
      <input id="name" type="text" name="name" placeholder="ライブハウス名を入力して下さい" required><br><hr>
      <label for="mail">メールアドレス</label>
      <input id="mail" type="email" name="mail" placeholder="メールアドレスを入力して下さい" required><br><hr>
      <label for="photo">プロフィール写真</label>
      <input id="photo" type="file" name="photo" value="アップロード"><br><hr>
      <label for="address">所在地</label>
      <select id="address" name="address" required>
        @foreach ($provinces as $province)
        <option value="">{{$province->name}}</option>
        @endforeach
      </select><br><hr>
      <label for="capacity">収容人数</label>
      <select id="capacity" name="capacity">
        <option value=""></option>
      </select><br><hr>
      <label for="smoking">喫煙可否</label>
      <select id="smoking" name="smoking">
        @foreach($smokes as $smoke)
        <option value="">{{$smoke}}</option>
        @endforeach
      </select><br><hr>
      <label for="genre">募集ジャンル<br><span>※複数選択可</span></label>
      <input type="checkbox" name="genre" value="rock">ロック
      <input type="checkbox" name="genre" value="metal">メタル
      <input type="checkbox" name="genre" value="pops">ポップス
      <input type="checkbox" name="genre" value="R&B">R&B
      <input type="checkbox" name="genre" value="regee">レゲエ
      <input type="checkbox" name="genre" value="rap">ラップ
      <input type="checkbox" name="genre" value="country">カントリー<br><hr>
      <label for="test">音源審査</label>
      <input type="checkbox" name="test">あり
      <input type="checkbox" name="test">なし<br><hr>
      <label for="web">Webページリンク</label>
      <input id="web" type="text" name="web" placeholder="HPやYouTubeのリンクを貼って下さい">
    </form>
  </div>
  <div class="button confirm text-center text-white">確認画面へ</div>
</main>
@endsection
