<?php

require_once './src/auth.php';
if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}

?>
<form method="POST">
    <div class="form-group">
        <label for="exampleInputLogin1">Login</label>
        <input name="login" type="text" class="form-control" id="exampleInputLogin1" aria-describedby="loginHelp">
        <small id="loginHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>