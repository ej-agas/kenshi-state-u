<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/login.css') }}">
    <link rel="stylesheet" href="{{ url('/css/stylesheet.css') }}">
    <title>Login</title>
</head>
<body>
<section>
    <div>
        <div class="bg-image"></div>
    </div>
</section>
<div class="container">
    <div class="login-form">
        <h1>Sign in</h1>
        <a href="{{ route('student.login_view') }}" class="btn btn-primary btn-sm"> AS STUDENT</a>
        <br>
        <br>
            <a href="{{ route('teacher.login_view') }}" class="btn btn-primary btn-sm">AS TEACHER</a>
        <br>
        <br>
        <a href="{{ route('admin.login_view') }}" class="btn btn-primary btn-sm">AS ADMIN</a>
    </div>
</div>
</body>
</html>
