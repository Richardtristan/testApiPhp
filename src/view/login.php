<?php
require 'header.php';
?>
    <!--page login-->
    <div class="field has-text-centered ">
        <div id="header_h3" class="login-header pt-6 pb-6">
            <h3 class="pb-3">LOGIN</h3>
            <p>Please enter your credentials to login.</p>
        </div>
        <div class="is-half has-text-centered columns">
        <p class="control has-icons-left column is-half is-offset-one-quarter">
            <input class="input " name="username_log" type="text" placeholder="Username">
            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
        </p>
        </div>
    </div>
    <div class="field">
        <p class="control has-icons-left column is-half is-offset-one-quarter">
            <input name="password_log" class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
        </p>
    </div>
    <div class="field column is-half is-offset-one-quarter has-text-centered pt-6 ">
        <p class="control ">
            <button id="button-login" class="button">
                Login
            </button>
        </p>
        <p class="column is-half is-offset-one-quarter">Not registered? <a href="#">Create an account</a></p>
    </div>
<?php
require 'footer.php';
?>