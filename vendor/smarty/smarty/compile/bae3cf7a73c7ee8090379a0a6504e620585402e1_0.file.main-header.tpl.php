<?php
/* Smarty version 4.1.1, created on 2022-07-03 12:40:19
  from 'C:\xampp\htdocs\contact-list-smarty-php\vendor\smarty\smarty\template\main-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c17213e9e302_21308729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae3cf7a73c7ee8090379a0a6504e620585402e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\vendor\\smarty\\smarty\\template\\main-header.tpl',
      1 => 1656844665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c17213e9e302_21308729 (Smarty_Internal_Template $_smarty_tpl) {
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
