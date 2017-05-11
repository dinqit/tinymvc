<?php
/* Smarty version 3.1.30, created on 2017-05-11 13:40:22
  from "X:\www\mvc\public/templates/home/pseudo_footer.xhtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591469c631cfc4_37598394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8139ce7e2ec7bce33d161eec4731757a5f55466' => 
    array (
      0 => 'X:\\www\\mvc\\public/templates/home/pseudo_footer.xhtml',
      1 => 1494510008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591469c631cfc4_37598394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="pseudo_footer">
<!-- Hier plaatsen we de navigatie footer aan het einde op de pagina -->
	<span>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fnav']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
</a> | 
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</span>
<!-- Hier onder komen de facebook, twitter, Google+ en Paypal knoppen voor het publiek.-->
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fdick.dagoe&amp;layout=standard&amp;show_faces=false&amp;colorscheme=dark&amp;width=450&amp;height=5" scrolling="no" frameborder="0" style="border:none; color:#FFF; overflow:hidden; width:450px; height:20px;vertical-align:middle;" allowTransparency="true"></iframe><br />
    <span class="reclame">Hier komen al onze sponsoren en ozen reclame onderdeel<br />
    Wij zijn trots om onze third party leveranciers te promoten<br />
    Al onze leranciers en partners</span>

</div><?php }
}
