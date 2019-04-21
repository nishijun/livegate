@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/result/{{$livehouse->id}}/sendMessage" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center text-muted section-title">送信内容確認</h1>
</header>
<main>
<div class="container">
<h2 class="text-center mb-5">入力内容をご確認下さい</h2>
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
    <div class="form-group text-center">
      {!! Form::submit("送信する", ["class" => "form-controll button confirm text-center text-white", "name" => "action"]) !!}
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
