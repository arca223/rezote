<?php /* Smarty version 3.1.28-dev/33, created on 2015-08-05 14:29:19
         compiled from "C:\Users\Max TOMPOUCE\git\s4e\rezote\cart.html" */ ?>
<?php
/*%%SmartyHeaderCode:1847255c21dbfe10158_15507369%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0751346c6e8913e91dd35d769adbb373beb1db4b' => 
    array (
      0 => 'C:\\Users\\Max TOMPOUCE\\git\\s4e\\rezote\\cart.html',
      1 => 1438784958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1847255c21dbfe10158_15507369',
  'variables' => 
  array (
    'cart' => 0,
    'prod' => 0,
    'qt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/33',
  'unifunc' => 'content_55c21dbfe72415_03901632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c21dbfe72415_03901632')) {
function content_55c21dbfe72415_03901632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1847255c21dbfe10158_15507369';
?>
<!DOCTYPE html>
<html>
<head>
    <title>EditCart</title>

    <?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/cart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>$(document).ready()<?php echo '</script'; ?>
>
</head>
<body>

<?php
$foreach_0_qt_sav['s_item'] = isset($_smarty_tpl->tpl_vars['qt']) ? $_smarty_tpl->tpl_vars['qt'] : false;
$foreach_0_qt_sav['s_key'] = isset($_smarty_tpl->tpl_vars['prod']) ? $_smarty_tpl->tpl_vars['prod'] : false;
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['qt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['qt']->_loop = false;
$_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value => $_smarty_tpl->tpl_vars['qt']->value) {
$_smarty_tpl->tpl_vars['qt']->_loop = true;
$foreach_0_qt_sav['item'] = $_smarty_tpl->tpl_vars['qt'];
?>

<?php echo $_smarty_tpl->tpl_vars['prod']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['qt']->value;?>

<br />
<?php
$_smarty_tpl->tpl_vars['qt'] = $foreach_0_qt_sav['item'];
}
if ($foreach_0_qt_sav['s_item']) {
$_smarty_tpl->tpl_vars['qt'] = $foreach_0_qt_sav['s_item'];
}
if ($foreach_0_qt_sav['s_key']) {
$_smarty_tpl->tpl_vars['prod'] = $foreach_0_qt_sav['s_key'];
}
?>

<form method="POST" action="cart.php">
    <input type="submit" name="nameTest" id="btn" value="Click" onclick="test();">
</form>

</body>
</html><?php }
}
?>