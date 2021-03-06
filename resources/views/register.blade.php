<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

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
        <div class="jumbotron">REGISTER</div>

        <form method="post" action="{{ route('register.postRegister') }}">
            {!! csrf_field() !!}
            <div class="container">
                <div class="content">



                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form method="post" action="{{ route('register.postRegister') }}">
            <div class="form-group">
                <label for="name">User name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom d'usuari" required>

            <div class="form-group" id="emailFormGroup">
                <label for="email">Email address:</label>

                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}"
                       placeholder="el teu correu electronic" v-on:onblur="checkEmailExists" required>
                <div v-show="exists">
                    email ja existeix
                </div>
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="La teva contrasenya" required>
            </div>
            <div class="form-group">
                <label for="password_confirm">Password confirm:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>



            <button id="login" type="submit" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

        Ja tens usuari?
        <a id="login" href="{{ route('auth.login') }}">Loga't</a>
    </div>
</div>

            <script src="{{asset('js/all.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>

</body>
</html>