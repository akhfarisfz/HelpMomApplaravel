<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="Styles/login.css" />
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <title>Login</title>

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="container-form">
                @if(session()->has('success'))
                <div
                    class="alert alert-success alert-dismissible fade show"
                    role="alert"
                >
                    {{ session('success') }}
                    <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif @if(session()->has('loginError'))
                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                    {{ session('loginError') }}
                    <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <h1>Login</h1>
                    <input type="text" id="username" name="username" tabindex="0" />
                    <label for="username">
                        <span data-text="Username">Username</span>
                    </label>
                    <input type="password" name="password" id="password" tabindex="0" />
                    <label for="password">
                        <span data-text="password">Password</span>
                    </label>
                    <div class="form-footer">
                        <button class="btn">Log In</button>
                    </div>

                    <div class="Or">
                        <p>Or</p>
                    </div>
                    <div class="other">
                        <p>Login with</p>
                        <ul>
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="sign-in">
                        <p>
                            Need an account ?
                            <a href="/signin">Sign in </a>
                            <!-- <br><br><br>
              <a href="/">DASHBOARD</a>
              <small>Tombol Sementara, nnti ini akan hilang</small> -->
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
