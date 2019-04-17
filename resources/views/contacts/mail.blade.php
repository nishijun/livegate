@extends("layout")
@section("content")
<p>活動名：{{$contact->name}}</p>
<p>メールアドレス：{{$contact->email}}</p>
<p>問い合わせ内容：{{$contact->message}}</p>
@endsection
