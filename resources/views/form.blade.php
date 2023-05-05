<!DOCTYPE html>

<html lang="JP">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ入力フォーム</title>
</head>

<body>
  <h1>お問い合わせ</h1>
  @if (count($errors) > 0)
  @endif
  <form method="post" action="{{ route('form.confirm')}}">
  @csrf
  <table border ="1">
    <tr>
      <td>お名前</td>
      <td><input type = "text" name= "familyname" value="{{ old('familyname') }}" ></td>
      <td><input type = "text" name= "firstname" value="{{ old('firstname') }}" ></td>
    </tr>
    @error('familyname')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    @error('firstname')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    <tr>
      <td>性別</td>
      <td>
        <label>
          <input type = "radio" name= "gender" value ="1" checked>男性
        </label>
        <label>
          <input type = "radio" name="gender" value ="2">女性
        </label>
      </td>
    </tr>
    @error('gender')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    <tr>
      <td>メールアドレス</td>
      <td><input type = "email" name= "email" value="{{ old('email') }}" ></td>
    </tr>
    @error('email')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    <tr>
      <td>郵便番号</td>
      <td>〒<input type = "text" name= "postcode" value="{{ old('postcode') }}" ></td>
    </tr>
    @error('postcode')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    <tr>
      <td>住所</td>
      <td><input type = "text" name= "address" value="{{ old('address') }}" ></td>
    </tr>
    @error('address')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    <tr>
      <td>建物名</td>
      <td><input type = "text" name= "building_name" value="{{ old('building_name') }}" ></td>
    </tr>
    @error('building_name')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    <tr>
      <td>ご意見</td>
      <td>
        <textarea name= "opinion" value="{{ old('opinion') }}" ></textarea>
      </td>
    </tr>
    @error('opinion')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
</table>
  <input type = "submit">

  </form>
</body>
</html>