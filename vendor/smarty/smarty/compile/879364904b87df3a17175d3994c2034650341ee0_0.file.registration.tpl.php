<?php
/* Smarty version 4.1.1, created on 2022-07-03 11:47:07
  from 'C:\xampp\htdocs\contact-list\pages\registration..\..\..\vendor\smarty\smarty\template\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c1659bbf84b1_05302903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '879364904b87df3a17175d3994c2034650341ee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list\\pages\\registration..\\..\\..\\vendor\\smarty\\smarty\\template\\registration.tpl',
      1 => 1656841626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c1659bbf84b1_05302903 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <form action="" method="post">

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
