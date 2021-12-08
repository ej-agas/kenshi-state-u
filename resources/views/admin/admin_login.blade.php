<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/login.css') }}">
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
        <h1>Sign in as Admin</h1>
        @if ($login_message ?? null)
            <div class="alert alert-danger" role="alert">
                {{ $login_message }}
            </div>
            <br>
        @endif
        <form action="{{ route('auth.admin') }}" method="POST">
            @csrf {{ csrf_field() }}
            <label>
                <input type="email" name="email" placeholder="Email" required>
            </label>
            <label>
                <input type="password" name="password" placeholder="Password" required>
            </label>
            <input type="submit" name="submit" value="Login">
        </form>
        <a href="#">Forgot Password?</a><br><br>
        <a href="{{ url('/') }}">Home</a>
    </div>
</div>
</body>
</html>
