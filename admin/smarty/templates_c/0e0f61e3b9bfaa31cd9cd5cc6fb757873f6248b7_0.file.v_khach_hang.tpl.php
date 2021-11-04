<?php
/* Smarty version 3.1.30, created on 2020-11-26 06:24:58
  from "C:\xampp\htdocs\shophoa\admin\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbf3c2ad40342_65428518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0f61e3b9bfaa31cd9cd5cc6fb757873f6248b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\admin\\views\\v_khach_hang.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_ds_khach_hang.tpl' => 1,
  ),
),false)) {
function content_5fbf3c2ad40342_65428518 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_ds_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
</div><?php }
}
