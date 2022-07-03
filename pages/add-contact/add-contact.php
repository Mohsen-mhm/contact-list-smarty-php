<?php
require('../../db.php');
include("../../auth.php");

require __DIR__ . ('../../../vendor/autoload.php');
require __DIR__ . ('../../../vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '../../../vendor/smarty/smarty/template');
$smarty->setConfigDir(__DIR__ . '../../../vendor/smarty/smarty/config');
$smarty->setCompileDir(__DIR__ . '../../../vendor/smarty/smarty/compile');
$smarty->setCacheDir(__DIR__ . '../../../vendor/smarty/smarty/cache');

$smarty->assign('dir', '../../');
$smarty->assign('page_title', 'Add Contact');
$smarty->assign('username_session', $_SESSION['username']);

$smarty->display('meta.tpl');
?>
<header class="container-fluid d-flex justify-content-between align-items-center bg-light shadow p-3">
    <?php $smarty->display('header.tpl'); ?>
    <div class="form d-flex flex-column justify-content-between align-items-center">
        <p>Welcome <?= $_SESSION['username'] ?>!</p>
        <a href="../login/login.php">Logout</a>
    </div>
</header>

<?php

if (isset($_POST['new']) && $_POST['new'] == 1) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $submittedby = $_SESSION["username"];

    $imgName = $_FILES['avatar']['name'];
    $target_dir = "../../img/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");
    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['avatar']['tmp_name'], $target_dir . $imgName);
    }

    $ins_query = "insert into records
    (`avatar`,`name`,`email`,`phone`,`submittedby`)values
    ('" . $imgName . "','$name','$email','$phone','$submittedby')";
    mysqli_query($con, $ins_query) or die();

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    header("Location: ../../index.php");
}
$smarty->display('add-contact.tpl');
$smarty->display('footer.tpl');
