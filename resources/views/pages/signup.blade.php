@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">プロフィール入力</h1>
</header>
<main class="profile">
  <div class="container">
    {!! Form::open(["url" => "signup"]) !!}
      <div class="form-group">
        {!! Form::label("name", "ライブハウス名") !!}
        {!! Form::text("name", null, ["class" => "form-controll",  "placeholder" => "ライブハウス名を入力して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("email", "メールアドレス") !!}
        {!! Form::email("email", "", ["class" => "form-controll", "placeholder" => "メールアドレスを入力して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("photo", "プロフィール写真") !!}
        {!! Form::file("photo", ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("province_id", "所在地") !!}
        {!! Form::select("province_id", $provinces, "", ["class" => "form-controll", "placeholder" => "選択して下さい"])!!}
      </div>
      <div class="form-group">
        {!! Form::label("capacitie_type", "観客収容人数") !!}
        {!! Form::select("capacitie_type", ["〜50", "50〜100", "100〜300", "300〜500", "500〜1000", "1000〜"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("smoking_type", "喫煙可否") !!}
        {!! Form::select("smoking_type", ["禁煙", "分煙", "喫煙可"], "", ["class" => "font-controll", "placeholder" => "選択して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("test", "音源審査") !!}
        {!! Form::radio("test", "1", true) !!}<span class="ml-2 mr-4">なし</span>
        {!! Form::radio("test", "2") !!}<span class="ml-2">あり</span>
      </div>
      <div class="form-group">
        {!! Form::label("price", "ライブ出演費") !!}
        {!! Form::text("price", null, ["class" => "form-controll", "placeholder" => "凡そのノルマ金額を記入して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("catchcopy", "一言コメント") !!}
        {!! Form::text("catchcopy", null, ["class" => "form-controll", "placeholder" => "宣伝事項やコメントなどあれば記入して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("homepage", "HPリンク") !!}
        {!! Form::text("homepage", null, ["class" => "form-controll", "placeholder" => "HPやYouTubeへのリンクなどあれば記入して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::submit("決定", ["class" => "form-controll button confirm text-center text-white mb-5 mx-auto"]) !!}
      </div>
    {!! Form::close() !!}
  </div>
</main>
@endsection
