@extends("layout")
@section("content")
<header class="text-center font-weight-bold">送信内容確認</header>
<main>
<div class="container">
{!! Form::open(["method" => "POST", "url" => "result/$livehouse->id/sendMessage/complete"]) !!}
  <div class="form-group">
    {!! Form::label("name", "活動名") !!}
    {!! $contact->name !!}
  </div>
  <div class="form-group">
    {!! Form::label("email", "メールアドレス") !!}
    {!! $contact->email !!}
  </div>
  <div class="form-group">
    {!! Form::label("message", "内容") !!}
    {!! $contact->message !!}
  </div>
  <div class="button-area">
    <div class="form-group">
      {!! Form::submit("入力画面へ戻る", ["class" => "form-controll button back text-center text-white mb-5 mx-auto", "name" => "action"]) !!}
    </div>
    <div class="form-group">
      {!! Form::submit("送信する", ["class" => "form-controll button confirm text-center text-white mb-5 mx-auto", "name" => "action"]) !!}
    </div>
  </div>
  @foreach ($contact->getAttributes() as $key => $value)
  <div class="form-group">
    {!! Form::hidden($key, $value, ["class" => "form-controll"]) !!}
  </div>
  @endforeach
{!! Form::close() !!}
</div>
</main>
@endsection
