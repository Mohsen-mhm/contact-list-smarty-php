<?php
/* Smarty version 4.1.1, created on 2022-07-04 06:00:02
  from 'C:\xampp\htdocs\contact-list-smarty-php\vendor\smarty\smarty\template\create-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c265c2f34db8_86209021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '043f1433675304334d45baa6c1e3b33305df70b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list-smarty-php\\vendor\\smarty\\smarty\\template\\create-list.tpl',
      1 => 1656872179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c265c2f34db8_86209021 (Smarty_Internal_Template $_smarty_tpl) {
?>    <tr class="list-item">
        <td class="text-center"><b><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</b></td>
        <td class="text-center">
            <div class="w-100">
                <img src="<?php echo $_smarty_tpl->tpl_vars['image_src']->value;?>
" alt="" class="rounded-circle" style="width: 45px;">
            </div>
        </td>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['result']->value["name"];?>
</td>
        <td class="text-center table-responsive"><?php echo $_smarty_tpl->tpl_vars['result']->value["email"];?>
</td>
        <td class="text-center table-responsive"><?php echo $_smarty_tpl->tpl_vars['result']->value["phone"];?>
</td>
        <td class="text-center">
            <a href="./pages/edit-contact/edit-contact.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value["id"];?>
"><i
                    class="far fa-edit p-2 btn btn-primary"></i></a>
            <a href="./pages/delete/delete.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value["id"];?>
"><i class="far fa-trash p-2 btn btn-danger"></i></a>
        </td>
</tr><?php }
}
