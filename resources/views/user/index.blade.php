<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      @foreach ($users as $user)
        <div class="user">
          <h2>{{$user->name}}</h2>
          <h3>{{$user->email}}</h3>
          <p>{{$user->password}}</p>
          @foreach ($user->photo as $photo)
            <img src="{{$photo['url']}}" alt="">
          @endforeach
        </div>
      @endforeach
    </div>
  </body>
</html>
