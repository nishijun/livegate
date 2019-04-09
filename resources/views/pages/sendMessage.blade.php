@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/result/{{$livehouse->id}}" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">メール送信</h1>
</header>
<main class="px-3">
<div class="container">
  <form class="" action="" method="post">
    <label for="group">バンド・ユニット名</label>
    <input for="group" type="text" name="group" placeholder="バンド・ユニット名を入力して下さい"><br><hr>
    <label for="mail">メールアドレス</label>
    <input type="email" name="mail" placeholder="メールアドレスを入力して下さい"><br><hr>
    <label for="content">内容</label>
    <textarea for="content" name="content" rows="8" cols="80" placeholder="問い合わせ内容を入力して下さい"></textarea>
  </form>
  <div class="sendMessage">送信する</div>
</div>
</main>
@endsection
