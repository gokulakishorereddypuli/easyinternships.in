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
              <a href="login" class="account-page-link">Login</a>
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
              <h5><i data-feather="edit"></i>Register Account</h5>
            </div>
            <form action="/register" method="POST">
                @csrf
            <div class="account-type">
              <label for="idRegisterCan">
                <input id="idRegisterCan" checked type="radio" value="Candidate" name="register">
                <span>Candidate</span>
              </label>
              <label for="idRegisterEmp">
                <input id="idRegisterEmp" type="radio" value="Employer" name="register">
                <span>Employer</span>
              </label>
            </div>

              <div class="form-group">
                <input type="text" placeholder="Username" class="form-control">
              </div>
              <div class="form-group">
                <input type="email" placeholder="Email Address" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <div class="more-option terms">
                <div class="mt-0 terms">
                  <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition" checked>
                  <label for="radio-4">
                    <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                  </label>
                </div>
              </div>
              <button class="button primary-bg btn-block">Register</button>
            </form>
            <div class="shortcut-login">
              <span>Or connect with</span>
              <div class="buttons">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
              </div>
              <p>Already have an account? <a href="login">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('common.foot')
