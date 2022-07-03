<?php
/* Smarty version 4.1.1, created on 2022-07-03 12:40:47
  from 'C:\xampp\htdocs\contact-list-smarty-php\pages\edit-contact..\..\..\vendor\smarty\smarty\template\main-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c1722fde22c7_14077896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810935e83f89479426a094c630c8c8209f66b4b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\pages\\edit-contact..\\..\\..\\vendor\\smarty\\smarty\\template\\main-header.tpl',
      1 => 1656844665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c1722fde22c7_14077896 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="container-fluid d-flex justify-content-between align-items-center bg-light shadow p-3">
    <h3 class="m-2"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h3>
    <div class="form d-flex flex-column justify-content-between align-items-center">
        <p>Welcome <?php echo $_smarty_tpl->tpl_vars['username_session']->value;?>
!</p>
        <a href="pages/login/login.php">Logout</a>
    </div>
</header><?php }
}
