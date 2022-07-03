<?php
/* Smarty version 4.1.1, created on 2022-07-03 12:39:30
  from 'C:\xampp\htdocs\contact-list-smarty-php\pages\login..\..\..\vendor\smarty\smarty\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c171e2184591_61909971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd615c27df81e35f8edaadd568a8544e4c485df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\pages\\login..\\..\\..\\vendor\\smarty\\smarty\\template\\login.tpl',
      1 => 1656844769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c171e2184591_61909971 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <form action="" method="post" class="mt-5">

        <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
            <input type="username" id="username" class="form-control" name="username" />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" />
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4 mt-2">Sign in</button>
    </form>
<p>Not registered yet? <a href='../registration/registration.php'>Register Here</a></p><?php }
}
