<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>
<body>
    <div class="login">
        <div class="body">
            <div class="header">
                <img src="{{ url('a.svg') }}" alt="" style="width: 500px">
                <h5 style="margin-top: 20px">Sign in to your account</h5>
            </div><br>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" id="" placeholder="Enter Username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="username" id="" placeholder="Enter Password" class="form-control">
                </div>
                <p>Fogot your password?</p>
                <div class="button">
                    <button class="buttons">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
