<?php
require('../../db.php');
session_start();

require __DIR__ . ('../../../vendor/autoload.php');
require __DIR__ . ('../../../vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '../../../vendor/smarty/smarty/template');
$smarty->setConfigDir(__DIR__ . '../../../vendor/smarty/smarty/config');
$smarty->setCompileDir(__DIR__ . '../../../vendor/smarty/smarty/compile');
$smarty->setCacheDir(__DIR__ . '../../../vendor/smarty/smarty/cache');

$smarty->assign('dir', '../../');
$smarty->assign('page_title', 'Register');
$smarty->assign('username_session', $_SESSION['username']);

$smarty->display('meta.tpl');
?>
<header class="container-fluid d-flex justify-content-center align-items-center bg-light shadow p-3 mb-5">
    <?php $smarty->display('header.tpl'); ?>
</header>

<?php
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $checkExist_query = "Select * from users";
    $username_result = mysqli_query($con, $checkExist_query);
    $email_result = mysqli_query($con, $checkExist_query);

    $usernameList = [];
    $emailList = [];
    while ($row = mysqli_fetch_assoc($username_result)) {
        array_push($usernameList, $row['username']);
    }
    while ($row = mysqli_fetch_assoc($email_result)) {
        array_push($emailList, $row['email']);
    }

    if (in_array($username, $usernameList)) {
        echo "<div class='form'>
                    <h3 class='mt-5 text-center'>This username already exists.</h3>
                    <br/><p class='text-center'>Lets <a href='./registration.php'>Try again</a></p>
                  </div>";
    } elseif (in_array($email, $emailList)) {
        echo "<div class='form'>
                    <h3 class='mt-5 text-center'>This email already exists.</h3>
                    <br/><p class='text-center'>Lets <a href='./registration.php'>Try again</a></p>
                  </div>";
    } else {
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query = "INSERT into `users` (username, password, email)
            VALUES ('$username', '" . md5($password) . "', '$email')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                    <h3 class='mt-5 text-center'>You are registered successfully.</h3>
                    <br/><p class='text-center'>Click here to <a href='../login/login.php'>Login</a></p>
                  </div>";
        }
    }
} else {
    $smarty->display('registration.tpl');
}
$smarty->display('footer.tpl');