<?php
require 'header.php';
?>
<!--page register-->
<div class="sign_in-page">
    <div class="form">
        <div class="sign_in">
            <div class="sign_in-header">
                <h3>LOGIN</h3>
                <p>Please enter your credentials to Sign In.</p>
            </div>
        </div>
        <form method="post" class="sign_in-form">
            <input name="username" type="text" placeholder="username"/>
            <input name="email" type="email" placeholder="email"/>
            <input name="password" type="password" placeholder="password"/>
            <input name="password_confirm" type="password_confirm" placeholder="password confirm"/>
            <button type="submit">create</button>
            <p class="message">already registered? <a href="#">log in</a></p>
        </form>
    </div>
</div>

<?php
require 'footer.php';
?>
