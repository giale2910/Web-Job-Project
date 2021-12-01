<!-- <div class="container">
    <div class="breadcum">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="active">
                <a href="#">
                    Create Account
                </a>
            </li>
        </ul>
    </div>
</div> -->
<div class="container">
    <div class="wrapper-register-form">
        <div class="title-form">
            <h3>Create Account</h3>
            <p>Please fill in to create your account</p>
        </div>
        <div class="register-form">
            <form  onsubmit="return validateRegsiter(this);" action="user/register" method="POST">
                <div class="form-group">
                    <input type="text" name="firstName" id="first-name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" id="last-name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input required type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input  type="password" name="password" id="password" placeholder="Password">
                </div>
                <div id="pwdError" style="color:#FF0000;font-size:14px;margin-bottom:25px;margin-top:-10px;"></div>

                <div class="form-group">
                    <input  type="password" name="rePassword" id="re-password" placeholder="Confirm Password">
                </div>
                <div id="rePwdError" style="color:#FF0000;font-size:14px;margin-bottom:30px;margin-top:-5px;"></div>

                <div class="_row">
                    <button type="submit">
                        Register
                    </button>
                </div>
                <div class="content">
                    <a href="/login">
                        <p>Have an account? Login here</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>