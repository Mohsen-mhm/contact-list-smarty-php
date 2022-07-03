<?php
/* Smarty version 4.1.1, created on 2022-07-03 11:56:12
  from 'C:\xampp\htdocs\contact-list-smarty-php\pages\edit-contact..\..\..\vendor\smarty\smarty\template\edit-contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c167bcc76691_97893543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bcfcaa01115600fac429952954b856580212008' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\pages\\edit-contact..\\..\\..\\vendor\\smarty\\smarty\\template\\edit-contact.tpl',
      1 => 1656839201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c167bcc76691_97893543 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container mt-5">
    <form action="" method="post" id="edit-contact-form" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

        <div class="row">
            <div class="col-md-12 d-flex justify-content-evenly align-items-center">
                <div class="w-50 d-flex justify-content-evenly align-items-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['image_src']->value;?>
" alt="" class="w-25 rounded-circle">
                </div>
            </div>
        </div>
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
                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="first-name"
                        value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email"
                        value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" class="form-control" placeholder="Enter phone number" name="phone"
                        id="phone-number" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3 mb-5">Accept changes</button>
        <a href="../../index.php" class="btn btn-danger mt-3 mb-5">Cancel</a>
</form><?php }
}
