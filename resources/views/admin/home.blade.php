<!doctype html>
 <head>
  <meta charset="utf-8">
 </head>

 <body>
こんにちは！
@if (Auth::check('admin'))
    管理者：{{ \Admin::user()->name}}さん<br />
    <a href="/admin/logout">ログアウト</a>
@else
    管理者ゲストさん<br />
    <a href="/admin/login">管理者ログイン</a><br />
    <a href="/admin/register">管理者登録</a>
@endif
</body>

</html>
