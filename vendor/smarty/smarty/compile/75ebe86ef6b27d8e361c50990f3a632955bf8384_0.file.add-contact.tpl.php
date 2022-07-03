<?php
/* Smarty version 4.1.1, created on 2022-07-03 11:56:07
  from 'C:\xampp\htdocs\contact-list-smarty-php\pages\add-contact..\..\..\vendor\smarty\smarty\template\add-contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c167b7a914d0_34550118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ebe86ef6b27d8e361c50990f3a632955bf8384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\pages\\add-contact..\\..\\..\\vendor\\smarty\\smarty\\template\\add-contact.tpl',
      1 => 1656839196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c167b7a914d0_34550118 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container mt-5">
    <form action="" method="post" id="add-contact-form" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1" />

        <div class="row">
            <div class="col-md-12">
                <div class="form-group mt-3">
                    <label for="first-name">Avatar</label>
                    <input type="file" class="form-control" name="avatar" id="avatar">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group mt-3">
                    <label for="first-name">Name</label>
                    <input type="text" class="form-control" placeholder="Mohsen" name="name" id="first-name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" name="email" id="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" class="form-control" placeholder="+989123456789" name="phone" id="phone-number">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3 mb-5">Add to list</button>
        <a href="../../index.php" class="btn btn-danger mt-3 mb-5">Cancel</a>
</form><?php }
}
