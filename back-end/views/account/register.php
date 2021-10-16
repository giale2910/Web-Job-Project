<div class="container">
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
</div>
<div class="container">
    <div class="wrapper-register-form">
        <div class="title-form">
            <h3>Create Account</h3>
            <p>Please Register using account detail bellow</p>
        </div>
        <div class="register-form">
            <form action="user/register" method="POST">
                <div class="form-group">
                    <input type="text" name="firstName" id="first-name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" id="last-name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="rePassword" id="re-password" placeholder="Re-Password">
                </div>
                <div class="_row">
                    <button type="submit">
                        Register
                    </button>
                    <a href="/login">
                        <p>Have an account?</p>
                    </a>
                </div>
                <div class="form-group">
                    <a href="#">
                        <p>
                            Back to shop
                        </p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>