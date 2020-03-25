<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      @foreach ($chat as $message)
        <div class="message">
          <h2>Title {{$message->title}}</h2>
          <h3>Sender: {{$message->sender}}</h3>
          <p>{{$message->description}}</p>
          <span>{{$message->created_at}}</span>
        </div>
      @endforeach
    </div>
  </body>
</html>
