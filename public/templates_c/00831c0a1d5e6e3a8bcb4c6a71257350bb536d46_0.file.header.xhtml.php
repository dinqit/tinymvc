<?php
/* Smarty version 3.1.30, created on 2017-05-05 13:03:20
  from "X:\www\mvc\public/templates/header.xhtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c78186c8d26_17749726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00831c0a1d5e6e3a8bcb4c6a71257350bb536d46' => 
    array (
      0 => 'X:\\www\\mvc\\public/templates/header.xhtml',
      1 => 1493989394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c78186c8d26_17749726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/>
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id='main'>
<header>
      <div id="header_section">      
        <div id="welcome">
        <div class='logo'>&nbsp;</div>
          <h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
        </div>
        <!--close welcome-->
        <span>	  	
        <nav>
          <ul id="nav">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hnav']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
          	<li id="<?php echo $_smarty_tpl->tpl_vars['n']->value['num'];?>
" class="hnav"><a href="<?php echo $_smarty_tpl->tpl_vars['n']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</a></li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            
          </ul>
        </nav>
        </span>
      </div>
	</header>
  <div id="site_content">
<div id="content"><?php }
}
