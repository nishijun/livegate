@extends("layout")
@section("content")
<header class="bg-white px-3 header-fixation">
  <a href="result" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">検索条件設定</h1>
</header>
<main class="set-qualifications">
  <div class="container">
    {!! Form::open(["method" => "POST", "url" => "result"]) !!}
      <div class="form-group">
        {!! Form::label("name", "キーワード") !!}
        {!! Form::text("name", $name, ["class" => "form-controll",  "placeholder" => "キーワードを入力して下さい"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("province_id", "所在地") !!}
        {!! Form::select("province_id", ["" => "選択して下さい", $provinces], $province_id, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("capacitie_type", "観客収容人数") !!}
        {!! Form::select("capacitie_type", ["" => "選択して下さい", "〜50" => "〜50", "50〜100" => "50〜100", "100〜300" => "100〜300", "300〜500" => "300〜500", "500〜1000" => "500〜1000", "1000〜" => "1000〜"], $capacitie_type, ["class" => "form-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("smoking_type", "喫煙可否") !!}
        {!! Form::select("smoking_type", ["" => "選択して下さい", "禁煙" => "禁煙", "分煙" => "分煙", "喫煙可" => "喫煙可"], $smoking_type, ["class" => "font-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label("test", "音源審査") !!}
        {!! Form::select("test", ["" => "選択して下さい", "なし" => "なし", "あり" => "あり"], $test, ["class" => "font-controll"]) !!}
      </div>
      <div class="form-group">
        {!! Form::submit("検索", ["class" => "form-controll button confirm text-center text-white mb-5 mx-auto"]) !!}
      </div>
    {!! Form::close() !!}
  </div>
</main>
@endsection
