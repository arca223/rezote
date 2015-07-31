<?php /* Smarty version 3.1.28-dev/33, created on 2015-07-31 15:40:29
         compiled from "C:\Users\Max TOMPOUCE\git\s4e\rezote\cart.html" */ ?>
<?php
/*%%SmartyHeaderCode:2906255bb96ed6b69c1_95006882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0751346c6e8913e91dd35d769adbb373beb1db4b' => 
    array (
      0 => 'C:\\Users\\Max TOMPOUCE\\git\\s4e\\rezote\\cart.html',
      1 => 1438357202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2906255bb96ed6b69c1_95006882',
  'variables' => 
  array (
    'cart' => 0,
    'prod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/33',
  'unifunc' => 'content_55bb96ed707115_69420930',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bb96ed707115_69420930')) {
function content_55bb96ed707115_69420930 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2906255bb96ed6b69c1_95006882';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$foreach_0_prod_sav['s_item'] = isset($_smarty_tpl->tpl_vars['prod']) ? $_smarty_tpl->tpl_vars['prod'] : false;
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prod']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
$foreach_0_prod_sav['item'] = $_smarty_tpl->tpl_vars['prod'];
?>

<?php echo $_smarty_tpl->tpl_vars['prod']->value;?>


<?php
$_smarty_tpl->tpl_vars['prod'] = $foreach_0_prod_sav['item'];
}
if ($foreach_0_prod_sav['s_item']) {
$_smarty_tpl->tpl_vars['prod'] = $foreach_0_prod_sav['s_item'];
}
?>


</body>
</html><?php }
}
?>