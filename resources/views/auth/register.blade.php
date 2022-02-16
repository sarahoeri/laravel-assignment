<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
    <div class = "d-flex container justify-content-center align-items-center flex-column pt-5">
        <h1>Register</h1>
        <form method="post" action="/register">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="conf_pass">
            </div>

            <div class="form-group">
                
                <input type="submit" class="btn btn-primary form-control" name="Register">
            </div>
        </form>

    </div>

</body>
</html>