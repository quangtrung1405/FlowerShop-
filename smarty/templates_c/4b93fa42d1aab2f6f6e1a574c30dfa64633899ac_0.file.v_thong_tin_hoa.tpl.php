<?php
/* Smarty version 3.1.30, created on 2021-10-30 16:27:16
  from "C:\xampp\htdocs\shophoa\views\chi_tiet_hoa\v_thong_tin_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_617d5644999419_40117029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b93fa42d1aab2f6f6e1a574c30dfa64633899ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\views\\chi_tiet_hoa\\v_thong_tin_hoa.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617d5644999419_40117029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="short-description hidden-xs">
    <div class="magic-category clearfix">
        <div class="block-title-tabs clearfix">
            <ul class="magictabs">
                <li class="item active loaded">
                    <span class="title" data-toggle="tab" href="#menu1">Thông tin chi tiết</span>
                </li>
                <li class="item" >
                    <span class="title" data-toggle="tab" href="#menu2">Thông tin kỹ thuật</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</p>
        </div>
        <div id="menu2" class="tab-pane fade in">
            <div class="box-collateral box-additional active">
                <table class="data-table" id="product-attribute-specs-table">
                    <colgroup>
                        <col width="25%"><col>
                    </colgroup>
                    <tbody>
                        <tr class="first odd">
                            <th class="label">Vật liệu hoa</th>
                            <td class="data"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</td>
                        </tr>
                        <tr class="even">
                            <th class="label">Loại hoa</th>
                            <td class="data"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php }
}
