<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Umum </h1>
    @if(auth()->check() && auth()->user()->role === 'admin')
        <h3>admin</h3>
      @elseif(auth()->check() && auth()->user()->role === 'operator')
      <h3>operator</h3>
      @elseif(auth()->check() && auth()->user()->role === 'owner')
      <h3>owner</h3>
      @endif
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>