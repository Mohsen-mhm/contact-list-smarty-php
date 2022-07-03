<?php
/* Smarty version 4.1.1, created on 2022-07-03 12:39:57
  from 'C:\xampp\htdocs\contact-list-smarty-php\pages\registration..\..\..\vendor\smarty\smarty\template\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c171fd9ff3c9_35626055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726de022a950851d3a9569654060fede4ead1a34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\pages\\registration..\\..\\..\\vendor\\smarty\\smarty\\template\\registration.tpl',
      1 => 1656844790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c171fd9ff3c9_35626055 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <form action="" method="post" class="mt-5">

        <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
            <input type="text" id="username" class="form-control" name="username" required />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <input type="text" id="email" class="form-control" name="email" required />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" required />
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4 mt-2">Sign up</button>
    </form>
<p>Already registered? <a href='../login/login.php'>Login Here</a></p><?php }
}
