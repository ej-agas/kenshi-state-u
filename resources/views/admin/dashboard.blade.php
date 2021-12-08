<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KSU Admin Portal</title>
</head>
<body>
    @if ($user)
        <h2>Hi, {{ $user->name }}</h2>
        <h3>Email: {{ $user->email }}</h3>

        <form method="POST" action="{{ route('logout') }}">
            @csrf {{ csrf_field() }}
            <input type="hidden" name="name" value="value" />
            <a href="#" onclick="this.parentNode.submit();">Logout</a>
        </form>
    @endif
</body>
</html>
