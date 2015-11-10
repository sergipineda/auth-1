<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
html, body {
    height: 100%;
}

            body {
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
    font-weight: 100;
                font-family: 'Lato';
            }

            .container {
    text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
    text-align: center;
                display: inline-block;
            }

            .title {
    font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Register</div>

                <form method="post" action="{{ route('register.postRegister') }}">
{!! csrf_field() !!}
<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
</div>
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">

</div>
<div class="checkbox">
    <label><input name="remember" type="checkbox"> Remember me</label>
</div>
<button id ="register" type="submit" class="btn btn-default">Register</button>
<button type="reset" class="btn btn-default">Reset</button>
</form>

Ja ets usuari?

<a id="register" href="{{ route('auth.login') }}">Login</a>
</div>
</div>
</body>
</html>

