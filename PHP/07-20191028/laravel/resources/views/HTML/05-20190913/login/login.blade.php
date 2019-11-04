<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style05.css')}}">
    <title>Document</title>
</head>
<body>
    <div class=" container Login h-100 ">
        <div class="row Login__1st-Row d-flex align-items-center w-100 h-100">
            <form method="" class="Login__1st-Row__Form d-flex flex-column align-items-center m-auto">
                <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="clear" height="90px" width="70px">
                <h3 class="Login__1st-Row__Form__h3 pt-3 pb-2">Please sign in</h3>
                <input class=" form-control Login__1st-Row__Form__Input-mail" type="Email" placeholder="Email address">
                <input class="form-control Login__1st-Row__Form__Input-pass" type="password" placeholder="Password">
                <div class="Login__1st-Row__Form__Check mt-2">
                    <input type="checkbox">
                    <label>Remember me</label>
                </div>
                <button  type="submit" class=" Login__1st-Row__Form__btn  mt-3 btn-block btn-primary"> Sign in</button>
                <p class="mt-5 text-muted">© 2017-2019</p>
            </form>
        </div>
    </div>
</body>
</html>
