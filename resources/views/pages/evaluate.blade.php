@extends("layout")
@section("content")
<header class="bg-white header-fixation px-3">
  <a href="/result/{{$livehouse->id}}" class="save-qualifications"><i class="fas fa-chevron-left mr-2"></i>戻る</a>
  <h1 class="text-center py-2 text-muted">評価する</h1>
</header>
<main class="px-3">
<div class="container">
  <p class="text-center">各項目について評価して下さい</p>
  <form class="" action="" method="post">
    <label for="equipment">機材の種類や質、使い心地</label>
    <select id="equipment">
      <option value="0">0（論外）</option>
      <option value="1">1（全くよくなかった）</option>
      <option value="2">2（あまりよくなかった）</option>
      <option value="3">3（普通）</option>
      <option value="4">4（良かった）</option>
      <option value="5">5（とても良かった）</option>
    </select><br><hr>
    <label for="acoustic">ライブ時の音響について</label>
    <select id="acoustic">
      <option value="0">0（論外）</option>
      <option value="1">1（全くよくなかった）</option>
      <option value="2">2（あまりよくなかった）</option>
      <option value="3">3（普通）</option>
      <option value="4">4（良かった）</option>
      <option value="5">5（とても良かった）</option>
    </select><br><hr>
    <label for="staff">スタッフの対応について</label>
    <select id="staff">
      <option value="0">0（論外）</option>
      <option value="1">1（全くよくなかった）</option>
      <option value="2">2（あまりよくなかった）</option>
      <option value="3">3（普通）</option>
      <option value="4">4（良かった）</option>
      <option value="5">5（とても良かった）</option>
    </select><br><hr>
    <label for="access">ライブハウスへのアクセスのしやすさ</label>
    <select id="access">
      <option value="0">0（論外）</option>
      <option value="1">1（全くよくなかった）</option>
      <option value="2">2（あまりよくなかった）</option>
      <option value="3">3（普通）</option>
      <option value="4">4（良かった）</option>
      <option value="5">5（とても良かった）</option>
    </select><br><hr>
    <label for="facility">店内設備について</label>
    <select id="facility">
      <option value="0">0（論外）</option>
      <option value="1">1（全くよくなかった）</option>
      <option value="2">2（あまりよくなかった）</option>
      <option value="3">3（普通）</option>
      <option value="4">4（良かった）</option>
      <option value="5">5（とても良かった）</option>
    </select><br><hr>
    <label for="food">飲食物の味</label>
    <select id="food">
      <option value="0">0（論外）</option>
      <option value="1">1（全くよくなかった）</option>
      <option value="2">2（あまりよくなかった）</option>
      <option value="3">3（普通）</option>
      <option value="4">4（良かった）</option>
      <option value="5">5（とても良かった）</option>
    </select><br><hr>
    <label for="comment">コメント</label>
    <textarea id="comment" name="content" rows="8" cols="80" placeholder="コメントがあれば入力して下さい"></textarea>
  </form>
  <div class="sendMessage mb-5">決定</div>
</div>
</main>
@endsection
