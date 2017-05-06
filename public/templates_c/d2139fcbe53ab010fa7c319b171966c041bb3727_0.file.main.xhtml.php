<?php
/* Smarty version 3.1.30, created on 2017-05-05 13:38:41
  from "X:\www\mvc\public/templates/home/main.xhtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c8061179a01_76724096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2139fcbe53ab010fa7c319b171966c041bb3727' => 
    array (
      0 => 'X:\\www\\mvc\\public/templates/home/main.xhtml',
      1 => 1493991513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c8061179a01_76724096 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    <img class="main_item_img" width="124" height="124" src="/app/public/images/graph.png"/>
    <p class='main_item'>Wij zijn een full service web development agency. In meer dan vijftien jaar heeft DinqIt het helpen van toonaangevende bedrijven om de resultaten te behalen die zij online willen. We zijn bekend voor wereldklasse website ontwikkeling, het bouwen van geweldige websites die de gewenste resultaten leveren - websites die uw bottom line verbeteren. Bij DinqIt hebben we een echte passie voor webdesign en voor het leveren van resultaten. En het is wat ons drijft om uw verwachtingen te overschrijden en elke keer weer geweldige resultaten te geven!</p>
  </section>
   <section class="content_container">
  	<h3>Mobile development</h3>
    
    <img  class="main_item_img" width="124" height="124" src="/app/public/images/person.png"/>
    <p class='main_item'>Wij zijn een full service web development agency. In meer dan vijftien jaar heeft DinqIt het helpen van toonaangevende bedrijven om de resultaten te behalen die zij online willen. We zijn bekend voor wereldklasse website ontwikkeling, het bouwen van geweldige websites die de gewenste resultaten leveren - websites die uw bottom line verbeteren. Bij DinqIt hebben we een echte passie voor webdesign en voor het leveren van resultaten. En het is wat ons drijft om uw verwachtingen te overschrijden en elke keer weer geweldige resultaten te geven!</p>
  </section>
</div>
<div class="clear_both"></div>
<?php }
}
