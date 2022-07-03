<?php
/* Smarty version 4.1.1, created on 2022-07-03 12:32:40
  from 'C:\xampp\htdocs\contact-list-smarty-php\vendor\smarty\smarty\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c17048d6d2e7_29577368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7e52849550fa90406b61bc267ac9e81ad469ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\vendor\\smarty\\smarty\\template\\header.tpl',
      1 => 1656844280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c17048d6d2e7_29577368 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="container-fluid d-flex justify-content-between align-items-center bg-light shadow p-3">
<h3 class="m-2"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h3>
<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['username']))) {?>
    <div class="form d-flex flex-column justify-content-between align-items-center">
        <p>Welcome <?php echo $_smarty_tpl->tpl_vars['username_session']->value;?>
!</p>
        <a href="../login/login.php">Logout</a>
    </div>
<?php }?>
</header><?php }
}
