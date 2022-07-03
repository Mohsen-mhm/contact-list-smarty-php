<?php
/* Smarty version 4.1.1, created on 2022-07-03 11:46:05
  from 'C:\xampp\htdocs\contact-list\pages\registration..\..\..\vendor\smarty\smarty\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c1655d174866_54804626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '839a47d2f077a1e410b232f2b1445c5e169b28f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list\\pages\\registration..\\..\\..\\vendor\\smarty\\smarty\\template\\login.tpl',
      1 => 1656841514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c1655d174866_54804626 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <form action="" method="post">

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
