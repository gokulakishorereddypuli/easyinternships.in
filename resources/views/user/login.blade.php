@include('common.head')

 <header class="header-2 access-page-nav">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="index.html"><img src="images/logo-2.png" alt=""></a>
              </div>
              <div class="top-nav">
                <a href="register" class="account-page-link">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </header>

    <div class="padding-top-90 padding-bottom-90 access-page-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="access-form">
              <div class="form-header">
                <h5><i data-feather="user"></i>Login</h5>
              </div>

              @if(Session::has('message'))
              <a style="color: red ;" center ><b>!!!!.{{ Session('message') }}<b></a>
              @endif
              @php
                Session::pull('message');
              @endphp
              <form action="/login" method="POST">
                @csrf
                <div class="account-type">
                    <label for="idloginCan">
                      <input id="idloginCan" checked type="radio" value="Candidate" name="user_type">
                      <span>Candidate</span>
                    </label>
                    <label for="idloginEmp">
                      <input id="idloginEmp"   type="radio" value="Employer" name="user_type">
                      <span>Employer</span>
                    </label>
                  </div>
                <div class="form-group">

                  <input type="email" placeholder="Email Address" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control" name="password" required>
                </div>
                <div class="more-option">
                  <div class="mt-0 terms">
                    <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                    <label for="radio-4">
                      <span class="dot"></span> Remember Me
                    </label>
                  </div>
                  <a href=" ">Forget Password?</a>
                </div>
                <button class="button primary-bg btn-block" type="submit">Login</button>
              </form>
              <div class="shortcut-login">
                <span>Or connect with</span>
                <div class="buttons">
                  <a href=" " class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                  <a href=" " class="google"><i class="fab fa-google"></i>Google</a>
                </div>
                <p>{{ "Don't have an account? " }}<a href="register">Register</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@include('common.foot')
