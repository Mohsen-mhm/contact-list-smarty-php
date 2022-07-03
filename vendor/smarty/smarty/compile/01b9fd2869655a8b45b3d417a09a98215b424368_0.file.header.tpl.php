<?php
/* Smarty version 4.1.1, created on 2022-07-03 12:31:54
  from 'C:\xampp\htdocs\contact-list-smarty-php\pages\login..\..\..\vendor\smarty\smarty\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c1701a064454_89895812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01b9fd2869655a8b45b3d417a09a98215b424368' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\pages\\login..\\..\\..\\vendor\\smarty\\smarty\\template\\header.tpl',
      1 => 1656844280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c1701a064454_89895812 (Smarty_Internal_Template $_smarty_tpl) {
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
