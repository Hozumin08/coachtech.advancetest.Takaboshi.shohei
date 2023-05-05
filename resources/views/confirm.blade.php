<!DOCTYPE html>
<html lang="JP">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ内容確認</title>
</head>
<body>
  <h1>内容確認</h1>
  <form method="post" action="{{route('form.store')}}">
    @csrf
    <table>
      <tr>
        <td>お名前</td>
        <td>{{session('familyname')}} {{session('firstname')}}</td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          @if(session('gender') === '1')
            男性
          @elseif(session('gender') === '2')
            女性
          @endif
        </td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td>{{session('email')}}</td>
      </tr>
      <tr>
        <td>郵便番号</td>
        <td>{{session('postcode')}}</td>
      </tr>
      <tr>
        <td>住所</td>
        <td>{{session('address')}}</td>
      </tr>
      <tr>
        <td>建物名</td>
        <td>{{session('building_name')}}</td>
      </tr>
      <tr>
        <td>ご意見</td>
        <td>{{session('opinion')}}</td>
      </tr>
    </table>
    <button type="submit">送信</button>
  <a href ="{{ url()->previous() }}">修正する</a>
  </form>
</body>
</html>