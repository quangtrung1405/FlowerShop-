<?php
/* Smarty version 3.1.30, created on 2021-10-30 16:27:16
  from "C:\xampp\htdocs\shophoa\views\chi_tiet_hoa\v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_617d564496b995_54934477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '602e7d433eaf7cca64937194c77fb06ac061afbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\views\\chi_tiet_hoa\\v_thanh_danh_muc.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617d564496b995_54934477 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                    </li>
                <li class="category4">
                    <a href="" title=""><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</a>
                    </li>
                <li class="category22">
                    <strong><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</strong>
                </li>
                <li>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }
}
