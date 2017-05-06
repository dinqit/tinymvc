<?php
/* Smarty version 3.1.30, created on 2017-05-05 11:34:52
  from "X:\www\mvc\public/templates/home/pseudo_footer.xhtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c635c2f6241_81677974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8139ce7e2ec7bce33d161eec4731757a5f55466' => 
    array (
      0 => 'X:\\www\\mvc\\public/templates/home/pseudo_footer.xhtml',
      1 => 1493984089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c635c2f6241_81677974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="pseudo_footer">
<!--<hr class="divider"/>-->
	<span>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fnav']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
</a> • 
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</span>
</div><?php }
}
