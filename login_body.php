     <?php

if (isset($_SESSION["user"])) {
    header("location: index.php");
    exit();
}
?>

<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {

	$user = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]);
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]);

    include "storescripts/connect_to_mysql.php";
    $sql = mysql_query("SELECT id FROM customer WHERE login='$user' AND password='$password' LIMIT 1");

    $existCount = mysql_num_rows($sql);
    if ($existCount == 1) {
	     while($row = mysql_fetch_array($sql)){
             $id = $row["id"];
		 }
		 $_SESSION["id"] = $id;
		 $_SESSION["user"] = $user;
		 $_SESSION["password"] = $password;
		 header("location: index.php?userloginsuccess");
         exit();
    } else {
		echo  '<br> <center> That information is incorrect, try again <a href="login.php">Click Here</a> </center';
		exit();
	}
}
?>

    <div class="login">
        <div class="wrap">
            <div class="col_1_of_login span_1_of_login">
                <h4 class="title">New Customers</h4>
                <p> This changes are for the introduction to the new customers which will visit our webpage</p>
                <div class="button1">
                    <a href="register.html"><input type="submit" name="Submit" value="Create an Account"></a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col_1_of_login span_1_of_login">
                <div class="login-title">
                    <h4 class="title">Registered Customers</h4>
                    <div id="loginbox" class="loginbox">
                            <form id="form2" name="form2" method="post" action="login.php">
                            <fieldset class="input">
                                <p id="login-form-username">
                                    <label for="modlgn_username">User Name</label>
                                    <input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p id="login-form-password">
                                    <label for="modlgn_passwd">Password</label>
                                    <input id="modlgn_passwd" type="password"name="password" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <div class="remember">
                                    <p id="login-form-remember">
                                        <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
                                    </p>
                                    <input type="submit" name="Submit" class="button" value="Login">
                                    <div class="clear"></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
