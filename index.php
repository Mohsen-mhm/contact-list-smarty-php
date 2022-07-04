<?php
require('db.php');
include("auth.php");
require __DIR__ . ('/vendor/autoload.php');
require __DIR__ . ('/vendor/smarty/smarty/libs/Smarty.class.php');
require __DIR__ . ('/vendor/smarty/smarty/libs/sysplugins/smarty_function_create_dom.php');
require __DIR__ . ('/vendor/smarty/smarty/libs/plugins/search_sort_pagination.php');
require __DIR__ . ('/vendor/smarty/smarty/libs/plugins/pagination.php');

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/vendor/smarty/smarty/template');
$smarty->setConfigDir(__DIR__ . '/vendor/smarty/smarty/config');
$smarty->setCompileDir(__DIR__ . '/vendor/smarty/smarty/compile');
$smarty->setCacheDir(__DIR__ . '/vendor/smarty/smarty/cache');

$smarty->assign('dir', '');
$smarty->assign('page_title', 'Contact List');
$smarty->assign('username_session', $_SESSION['username']);

$smarty->display('meta.tpl');
$smarty->display('main-header.tpl');

$count = 1;
$count_contact_query = "SELECT COUNT(`submittedby`) FROM `records` WHERE `submittedby` = '$_SESSION[username]';";
$result_number = mysqli_query($con, $count_contact_query);
$num = mysqli_fetch_assoc($result_number);

$smarty->assign('records_num', $num['COUNT(`submittedby`)']);

$search_str = '';

if (isset($_GET['search'])) {
    $search_str = $_GET['search'];
}
$smarty->assign('search_str', $search_str);

$smarty->display('index.tpl');

$count = 1;
$sel_query = "Select * from records WHERE submittedby = '$_SESSION[username]';";
$result = mysqli_query($con, $sel_query);

$results_per_page = 10;
$number_of_result = mysqli_num_rows($result);
$number_of_page = (int) ceil($number_of_result / $results_per_page);
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$page_first_result = ($page - 1) * $results_per_page;
$query = "SELECT * FROM records WHERE submittedby = '$_SESSION[username]' LIMIT " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($con, $query);

if (isset($_GET['search'])) {
    $search_str = $_GET['search'];
    $results_per_sPage = 10;
    $search_query = "SELECT * FROM `records` WHERE `name` LIKE '%$search_str%' OR `email` LIKE '%$search_str%' OR `phone` LIKE '%$search_str%';";
    $search_result = mysqli_query($con, $search_query);

    $number_of_result = mysqli_num_rows($search_result);
    $number_of_sPage = (int) ceil($number_of_result / $results_per_sPage);

    if (!isset($_GET['sPage'])) {
        $sPage = 1;
    } else {
        $sPage = $_GET['sPage'];
    }
    $sPage_first_result = ($sPage - 1) * $results_per_sPage;

    $search_query = "SELECT * FROM `records` WHERE `name` LIKE '%$search_str%' OR `email` LIKE '%$search_str%' OR `phone` LIKE '%$search_str%' LIMIT " . $sPage_first_result . ',' . $results_per_sPage;
    $search_result = mysqli_query($con, $search_query);

    while ($search = mysqli_fetch_assoc($search_result)) {
        $image = $search['avatar'];
        $image_src = "img/" . $image;
        smarty_function_createDOM($count, $image_src, $search);
        $count++;
    }
    $smarty->display('tPagination.tpl');
    search_sort_pagination($sPage, $search_str, $number_of_sPage, 'search', 'sPage');
    $smarty->display('bPagination.tpl');
} else if (isset($_GET['sort-by'])) {
    $sortBy = $_GET['sort-by'];

    $results_per_sort_page = 10;
    $sort_query = "SELECT * FROM `records` ORDER BY `name`";
    $result_sort = mysqli_query($con, $sort_query);
    $number_of_result = mysqli_num_rows($result_sort);
    $number_of_sort_page = (int) ceil($number_of_result / $results_per_sort_page);
    if (!isset($_GET['sortPage'])) {
        $sort_page = 1;
    } else {
        $sort_page = $_GET['sortPage'];
    }
    $sort_page_first_result = ($sort_page - 1) * $results_per_sort_page;

    if ($sortBy == 'name') {
        $sort_query = "SELECT * FROM `records` ORDER BY `name`  LIMIT " . $sort_page_first_result . ',' . $results_per_sort_page;
        $result_sort = mysqli_query($con, $sort_query);
        while ($result = mysqli_fetch_assoc($result_sort)) {
            $image = $result['avatar'];
            $image_src = "img/" . $image;
            smarty_function_createDOM($count, $image_src, $result);
            $count++;
        }
    } else if ($sortBy == 'email') {
        $sort_query = "SELECT * FROM `records` ORDER BY `email`  LIMIT " . $sort_page_first_result . ',' . $results_per_sort_page;
        $result_sort = mysqli_query($con, $sort_query);
        while ($result = mysqli_fetch_assoc($result_sort)) {
            $image = $result['avatar'];
            $image_src = "img/" . $image;
            smarty_function_createDOM($count, $image_src, $result);
            $count++;
        }
    } else if ($sortBy == 'phone') {
        $sort_query = "SELECT * FROM `records` ORDER BY `phone`  LIMIT " . $sort_page_first_result . ',' . $results_per_sort_page;
        $result_sort = mysqli_query($con, $sort_query);
        while ($result = mysqli_fetch_assoc($result_sort)) {
            $image = $result['avatar'];
            $image_src = "img/" . $image;
            smarty_function_createDOM($count, $image_src, $result);
            $count++;
        }
    }
    $smarty->display('tPagination.tpl');
    search_sort_pagination($sort_page, $sortBy, $number_of_sort_page, 'sort-by', 'sortPage');
    $smarty->display('bPagination.tpl');
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['avatar'];
        $image_src = "img/" . $image;
        smarty_function_createDOM($count, $image_src, $row);
        $count++;
    }
    $smarty->display('tPagination.tpl');
    pagination($page, $number_of_page);
    $smarty->display('bPagination.tpl');
}
$smarty->display('footer.tpl');