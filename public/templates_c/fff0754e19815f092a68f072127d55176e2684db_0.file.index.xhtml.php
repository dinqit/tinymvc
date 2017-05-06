<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:18:22
  from "X:\www\mvc\public/templates/home/index.xhtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c516e343ea3_57995498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff0754e19815f092a68f072127d55176e2684db' => 
    array (
      0 => 'X:\\www\\mvc\\public/templates/home/index.xhtml',
      1 => 1493924812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.xhtml' => 1,
    'file:sidebar.php' => 1,
    'file:home/main.xhtml' => 1,
    'file:footer.xhtml' => 1,
  ),
),false)) {
function content_590c516e343ea3_57995498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.xhtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:sidebar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id='content_item'>
<?php echo show_session_message(array(),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:home/main.xhtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php echo unset_message(array(),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.xhtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
