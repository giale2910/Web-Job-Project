<!-- 
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
                    Account
                </a>
            </li>
        </ul>
    </div>
</div> -->
<div class="container">
    <div class="wrapper-login-form">
        <div class="title-form">
            <h3>Login</h3>
            <p>Please login using account detail bellow</p>
        </div>
        <div class="login-form">
            <form action="user/login" method="POST">
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <!-- <div class="" >
                    <input type="radio" name="fav_language" value="user">
                      <label for="user">User</label><br>
                      <input type="radio" name="fav_language" value="admin">
                      <label for="admin">Admin</label>
                </div> -->
                <div class="_row">
                    <button type="submit">
                        Sign in
                    </button>
                    <!-- <a class="" href="#">
                        <p>Forgot your password?</p>
                    </a> -->
                </div>

            </form>
            <div class="footer">
                <a class="content" href="/register">
                    New user? <span class="lin">Create account</span>
                </a>
            </div>
        </div>
        
    </div>
</div>