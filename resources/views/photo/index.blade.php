<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      @foreach ($photos as $photo)
        <div class="photo">
          <img src="{{$photo->url}}" alt="">
        </div>
      @endforeach
    </div>
  </body>
</html>
