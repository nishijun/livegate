@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/result/{{$livehouse->id}}" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center text-muted section-title">評価する</h1>
</header>
<main class="px-3">
<div class="container">
  <p class="text-center font-weight-bold">各項目について評価して下さい</p>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  {!! Form::open(["url" => "result/$livehouse->id/evaluate"]) !!}
    <div class="form-group d-none">
      {!! Form::label("livehouse_id", "ライブハウス名") !!}
      {!! Form::select("livehouse_id", ["$livehouse->id" => "$livehouse->name"], "", ["class" => "form-controll"])!!}
    </div>
    <div class="form-group">
      {!! Form::label("equipment", "機材の質や種類、使い心地") !!}
      {!! Form::select("equipment", ["0" => "0（論外）", "1" => "1（全くよくなかった）", "2" => "2（あまりよくなかった）", "3" => "3（普通）", "4" => "4（良かった）", "5" => "5（とても良かった）"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
    </div>
    <div class="form-group">
      {!! Form::label("acoustic", "ライブ時の音響について") !!}
      {!! Form::select("acoustic", ["0" => "0（論外）", "1" => "1（全くよくなかった）", "2" => "2（あまりよくなかった）", "3" => "3（普通）", "4" => "4（良かった）", "5" => "5（とても良かった）"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
    </div>
    <div class="form-group">
      {!! Form::label("staff", "スタッフの対応について") !!}
      {!! Form::select("staff", ["0" => "0（論外）", "1" => "1（全くよくなかった）", "2" => "2（あまりよくなかった）", "3" => "3（普通）", "4" => "4（良かった）", "5" => "5（とても良かった）"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
    </div>
    <div class="form-group">
      {!! Form::label("access", "アクセスしやすさについて") !!}
      {!! Form::select("access", ["0" => "0（論外）", "1" => "1（全くよくなかった）", "2" => "2（あまりよくなかった）", "3" => "3（普通）", "4" => "4（良かった）", "5" => "5（とても良かった）"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
    </div>
    <div class="form-group">
      {!! Form::label("facility", "店内設備について") !!}
      {!! Form::select("facility", ["0" => "0（論外）", "1" => "1（全くよくなかった）", "2" => "2（あまりよくなかった）", "3" => "3（普通）", "4" => "4（良かった）", "5" => "5（とても良かった）"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
    </div>
    <div class="form-group">
      {!! Form::label("food", "飲食物について") !!}
      {!! Form::select("food", ["0" => "0（論外）", "1" => "1（全くよくなかった）", "2" => "2（あまりよくなかった）", "3" => "3（普通）", "4" => "4（良かった）", "5" => "5（とても良かった）"], "", ["class" => "form-controll", "placeholder" => "選択して下さい"]) !!}
    </div>
    <div class="form-group d-none">
      {!! Form::label("ave_evaluation", "総合評価（平均）") !!}
      {!! Form::select("ave_evaluation", ["3" => "内緒"]) !!}
    </div>
    <div class="form-group">
      {!! Form::label("body", "コメント") !!}
      {!! Form::textarea("body", null, ["class" => "form-controll", "placeholder" => "コメントがあれば記入して下さい"]) !!}
    </div>
    <div class="form-group text-center">
      {!! Form::submit("決定", ["class" => "form-controll button confirm text-center text-white"]) !!}
    </div>
  {!! Form::close() !!}
</div>
</main>
@endsection
