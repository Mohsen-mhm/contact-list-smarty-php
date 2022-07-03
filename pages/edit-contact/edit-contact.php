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
$smarty->assign('page_title', 'Edit Contact');
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
$id = $_REQUEST['id'];
$query = "SELECT * from records where id='" . $id . "'";
$queryImg = "Select * from records ORDER BY id desc;";
$result = mysqli_query($con, $query) or die();
$resultImg = mysqli_query($con, $queryImg);
$row = mysqli_fetch_assoc($result);
$rowImg = mysqli_fetch_assoc($resultImg);
$image = $row['avatar'];
$image_src = "img/" . $image;

$smarty->assign('id', $row['id']);
$smarty->assign('image_src', $image_src);
$smarty->assign('name', $row['name']);
$smarty->assign('email', $row['email']);
$smarty->assign('phone', $row['phone']);

if (isset($_POST['new']) && $_POST['new'] == 1) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $submittedby = $_SESSION["username"];

    $update = "update records set name='" . $name . "', email='" . $email . "',
        phone='" . $phone . "', submittedby='" . $submittedby . "' where id='" . $id . "'";
    mysqli_query($con, $update) or die();
    header("Location: ../../index.php");
} else {
    $smarty->display('edit-contact.tpl');
}
$smarty->display('footer.tpl');
