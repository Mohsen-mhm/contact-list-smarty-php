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
$smarty->assign('page_title', 'Login');
$smarty->assign('username_session', $_SESSION['username']);

$smarty->display('meta.tpl');
?>
<header class="container-fluid d-flex justify-content-center align-items-center bg-light shadow p-3 mb-5">
    <?php $smarty->display('header.tpl'); ?>
</header>

<?php
if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `users` WHERE username='$username' and password='" . md5($password) . "'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['loggedin_time'] = time();
        header("Location: ../../index.php");
    } else {
        echo "<div class='form'>
                <h3 class='mt-5 text-center'>Username/password is incorrect.</h3>
                <br/><p class='text-center'>Click here to <a href='login.php'>Login</a></p>
                </div>";
    }
} else {
    $smarty->display('login.tpl');
}
$smarty->display('footer.tpl');
