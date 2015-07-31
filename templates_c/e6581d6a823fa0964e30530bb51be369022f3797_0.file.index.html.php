<?php /* Smarty version 3.1.28-dev/33, created on 2015-07-31 15:28:27
         compiled from "C:\Users\Max TOMPOUCE\git\s4e\rezote\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1236755bb941b34e4b6_34644272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6581d6a823fa0964e30530bb51be369022f3797' => 
    array (
      0 => 'C:\\Users\\Max TOMPOUCE\\git\\s4e\\rezote\\index.html',
      1 => 1438356388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236755bb941b34e4b6_34644272',
  'variables' => 
  array (
    'array' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/33',
  'unifunc' => 'content_55bb941b3b1950_96622099',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bb941b3b1950_96622099')) {
function content_55bb941b3b1950_96622099 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1236755bb941b34e4b6_34644272';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
    <?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/cart.js"><?php echo '</script'; ?>
>
</head>
<body>



<form id="cart" action="cart.php" method="post">




    <?php
$foreach_0_product_sav['s_item'] = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_from = $_smarty_tpl->tpl_vars['array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_0_product_sav['item'] = $_smarty_tpl->tpl_vars['product'];
?>

    <label for=<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</label>
    <input type="hidden" name="product[]" value=<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
>
    <input id=<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
 name="qt[]"  type="text">
    <br />

    <?php
$_smarty_tpl->tpl_vars['product'] = $foreach_0_product_sav['item'];
}
if ($foreach_0_product_sav['s_item']) {
$_smarty_tpl->tpl_vars['product'] = $foreach_0_product_sav['s_item'];
}
?>


    <input value="Add to cart" type="submit" class="add-to-cart">


</form>



</body>
</html><?php }
}
?>