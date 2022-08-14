<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Orchitek Admin - Login</title>
    <link href="/css/backend.css" rel="stylesheet">
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('admin.auth.login') }}" method="POST">
                    @csrf
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-4 p-4 mb-0">
                            <div class="card-body">
                                <h1>Orchitek Administrator</h1>
                                <p class="text-medium-emphasis">Sign In to your account</p>
                                @include('includes.messages')
                                <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                    <input class="form-control" type="email" name="email" value="{{ @old('email') }}" placeholder="Email">
                                </div>
                                <div class="input-group mb-4">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="/js/backend.js"></script>
<script>
</script>

</body>
</html>
