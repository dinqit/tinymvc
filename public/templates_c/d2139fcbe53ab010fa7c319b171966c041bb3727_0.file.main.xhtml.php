<?php
/* Smarty version 3.1.30, created on 2017-05-11 13:40:22
  from "X:\www\mvc\public/templates/home/main.xhtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591469c62fd1d2_52431020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2139fcbe53ab010fa7c319b171966c041bb3727' => 
    array (
      0 => 'X:\\www\\mvc\\public/templates/home/main.xhtml',
      1 => 1494510019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591469c62fd1d2_52431020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content_item">
  <div class="slideshow">
    <ul class="slideshow">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
      <li class="show"><img width="680" height="330" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
" /></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
  </div>
  <!--close slideshow-->
  <section class="content_container">
  	<h3>Webontwikkeling</h3>
    
    <!--<img class="main_item_img" width="124" height="124" src="/app/public/images/graph.png"/>-->
    <p class='main_item'><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['truncate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['truncate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'truncate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('truncate', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Wij maken alles wat internet intergratie gebruikt en aangaat. Wij maken device specifieke applicaties en maken daarbij gebruik van <a href="">Python</a> en wsgi of fastcgi. Bij Rapid development gebruiken wij vaak bekende frameworks als <a href="#">WordPress</a>, <a href="">Joomla</a>, <a href="">Django</a>. Bij maatwerk gebruiken wij ook eigen <i>libraries</i> die wij uitgegeven hebben onder een GNU licentie en te vinden is op onze Github pagina.<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br />
</p>
<span class='more'><a href='#'>&hellip;&hellip; lees meer </a></span>
  </section>
   <section class="content_container">
  	<h3>Mobile development</h3>
    
    <!--<img  class="main_item_img" width="124" height="124" src="/app/public/images/person.png"/>-->
    <p class='main_item'><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['truncate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['truncate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'truncate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('truncate', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Wij maken mobiele applicaties op de traditionele wijze met <a href=''>PhoneGap</a> en Responsive Web. Maar gaan ook op native vlak een stap verder met <a href="">Kivy</a> waardoor uw mobiel apparaat als meet- of bedienings apparaat gebruikt kan worden.<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <br /></p><span class='more'><a href='#'>&hellip;&hellip; lees meer </a></span>
  </section>
</div>
<div class="clear_both"></div>
<?php }
}
