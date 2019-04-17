@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/result/{{$livehouse->id}}" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">メール送信</h1>
</header>
<main class="px-3">
<div class="container">
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
{!! Form::open(["method" => "POST", "url" => "result/$livehouse->id/sendMessage/confirm"]) !!}
  <div class="form-group">
    {!! Form::label("name", "活動名") !!}
    {!! Form::text("name", old("name"), ["class" => "form-controll",  "placeholder" => "活動名を入力して下さい"]) !!}
  </div>
  <div class="form-group">
    {!! Form::label("email", "メールアドレス") !!}
    {!! Form::text("email", old("email"), ["class" => "form-controll",  "placeholder" => "メールアドレスを入力して下さい"]) !!}
  </div>
  <div class="form-group">
    {!! Form::label("message", "内容") !!}
    {!! Form::textarea("message", old("mesasage"), ["class" => "form-controll",  "placeholder" => "問い合わせ内容を入力して下さい"]) !!}
  </div>
  <div class="form-group">
    {!! Form::submit("確認画面へ", ["class" => "form-controll button confirm text-center text-white mb-5 mx-auto"]) !!}
  </div>
{!! Form::close() !!}
</div>
</main>
@endsection
