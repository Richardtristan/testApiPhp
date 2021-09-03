<?php
require 'header.php';
?>
    <!--page login-->
<div class="login-page">
    <div class="form">
        <div class="login">
            <div class="login-header">
                <h3>LOGIN</h3>
                <p>Please enter your credentials to login.</p>
            </div>
        </div>
        <form class="login-form">
            <input name="username_log" type="text" placeholder="username"/>
            <input name="password_log" type="password" placeholder="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>
<?php
require 'footer.php';
?>