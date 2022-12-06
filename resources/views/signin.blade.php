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
    <link rel="stylesheet" href="Styles/signin.css" />
    <title>Sign in</title>
  </head>
  <body>
    <div class="container">
      <div class="container-form">
        <form action="/signin" method="post">
          @csrf

          <h1>Sign in</h1>
          <input type="text" id="username" name="username" required value="{{ old('username') }}" tabindex="0" />
          <label for="username">
            <span data-text="Username">Username</span>
          </label>
          <input type="text" id="email"name="email" required value="{{ old('email') }}"  @error('email') is-invalid @enderror tabindex="0" />
          <label for="email">
            <span data-text="email">Email</span>
          </label>
          @error('email')
                  <div class="invalid-feedback"style="color:red;">
                    Your email unknown !
                  </div>
                @enderror
          <input type="password" id="password" name="password" required tabindex="0" @error('password') is-invalid @enderror/>
          <label for="password">
            <span data-text="password">Password</span>
          </label>
          @error('password')
                  <div class="invalid-feedback" style="color:red;">
                    Password not match !
                  </div>
                @enderror
          <input type="password" id="confirm-password"name="confirm-password" required @error('password') is-invalid @enderror tabindex="0" />
          <label for="confirm-password">
            <span data-text="confirm-password">Confirm Password</span>
          </label>
          
          <div class="form-footer">
            <button class="btn" id="btnSubmit"> Create Account</button>
          </div>
          
          <div class="other">
            <p>or Sign in with</p>
            <ul>
              <li><a href="#" class="fa fa-google"></a></li>
              <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
          </div>
          <div class="sign-in">
            <p>
              Already have an account ?
              <a href="/login">Log in</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
