<?php
/* Smarty version 4.1.1, created on 2022-07-03 10:37:34
  from 'C:\xampp\htdocs\contact-list\vendor\smarty\smarty\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c1554e970ca4_42774978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48035d224a984de1b50ec3eba2675844c7c3add4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\contact-list\\vendor\\smarty\\smarty\\template\\index.tpl',
      1 => 1656837339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c1554e970ca4_42774978 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container-fluid">
    <h4 class="text-center mt-4">All Contacts</h4>
    <div class="row mt-3 d-flex justify-content-center align-items-center responsive-header">
        <div class="col-7 d-flex justify-content-between align-items-center responsive-header-one">
            <div class="row d-flex justify-content-evenly align-items-center w-100 p-3">
                <form action=""
                    class="col-sm-9 col-lg-10 col-xl-9 d-flex justify-content-around align-items-center w-50"
                    method="get">
                    <input type="submit" class="btn btn-secondary w-25" value="Sort">
                    <select class="form-select w-50" name="sort-by" id="sort-select">
                        <option value="choose" disabled selected>Select</option>
                        <option value="name">Name</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                    </select>
                </form>
                <p class="col-sm-3 col-lg-2 col-xl-3 text-center mt-2 w-50">Contacts Number: <b
                        class="contact-number"><?php echo $_smarty_tpl->tpl_vars['records_num']->value;?>
</b></p>
            </div>
        </div>
        <div class="col-5 d-flex justify-content-evenly align-items-center responsive-header-two">
            <form action="" method="get" class="w-50">
                <input type="search" class="form-control w-100" value="<?php echo $_smarty_tpl->tpl_vars['search_str']->value;?>
" name="search"
                    placeholder="Search...">
            </form>
            <a href="./pages/add-contact/add-contact.php"
                class="d-flex align-items-center btn btn-success add-contact-btn">Add Contact <i
                    class="fas fa-plus ms-2"></i></a>
        </div>
    </div>
    <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">Number</th>
                <th class="text-center">Avatar</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Options</th>
            </tr>
        </thead>
<tbody class="contact-list-body list-wrapper"><?php }
}
