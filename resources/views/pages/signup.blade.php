@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">プロフィール入力</h1>
</header>
<main class="profile">
  <div class="container">
    {!! Form::open() !!}
      <div class="form-group">
        {!! Form::label("name", "Name") !!}
        {!! Form::text("name", null, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("mail", "Mail") !!}
        {!! Form::text("mail", null, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("photo", "Photo") !!}
        {!! Form::text("photo", null, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("address", "Address") !!}
        {!! Form::text("address", null, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("capacity", "Capacity") !!}
        {!! Form::text("capacity", null, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("capacity", "Capacity") !!}
        {!! Form::text("capacity", null, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("capacity", "Capacity") !!}
        {!! Form::text("capacity", null, ["class" => "form-controll"]) !!}
      </div>
    {!! Form::close() !!}



    <form action="/result" method="post">
      <label for="name">ライブハウス名</label>
      <input id="name" type="text" name="name" placeholder="ライブハウス名を入力して下さい" required><br><hr>
      <label for="mail">メールアドレス</label>
      <input id="mail" type="email" name="mail" placeholder="メールアドレスを入力して下さい" required><br><hr>
      <label for="photo">プロフィール写真</label>
      <input id="photo" type="file" name="photo" value="アップロード"><br><hr>
      <label for="address">所在地</label>
      <select id="address" name="address" required>
        @foreach ($provinces as $province)
        <option value="{{$province->id}}">{{$province->name}}</option>
        @endforeach
      </select><br><hr>
      <label for="capacity">収容人数</label>
      <select id="capacity" name="capacity">
        <option value="1">〜100</option>
        <option value="2">100〜300</option>
        <option value="3">300〜500</option>
        <option value="4">500〜1000</option>
        <option value="5">1000〜</option>
      </select><br><hr>
      <label for="smoking">喫煙可否</label>
      <select id="smoking" name="smoking">
        <?php $i = 1 ?>
        @foreach($smokes as $smoke)
        <option value="<?= $i ?>">{{$smoke}}</option>
        <?php $i++ ?>
        @endforeach
      </select><br><hr>
      <label for="genre">募集ジャンル<br><span>※複数選択可</span></label>
      <input type="checkbox" name="genre" value="rock">ロック
      <input class="ml-2" type="checkbox" name="genre" value="metal">メタル
      <input class="ml-2" type="checkbox" name="genre" value="pops">ポップス
      <input class="ml-2" type="checkbox" name="genre" value="R&B">R&B
      <input class="ml-2" type="checkbox" name="genre" value="regee">レゲエ
      <input class="ml-2" type="checkbox" name="genre" value="rap">ラップ
      <input class="ml-2" type="checkbox" name="genre" value="country">カントリー<br><hr>
      <label for="test">音源審査</label>
      <input type="checkbox" name="test">あり
      <input class="ml-3" type="checkbox" name="test">なし<br><hr>
      <label for="catchcopy">一言宣伝事項</label>
      <input type="text" name="catchcopy" placeholder="キャッチコピーや宣伝事項等あれば入力して下さい"><br><hr>
      <label for="web">Webページリンク</label>
      <input id="web" type="text" name="web" placeholder="HPやYouTubeのリンクを貼って下さい">
    </form>
  </div>
  <div class="button confirm text-center text-white mb-5">確認画面へ</div>
</main>
@endsection
