<?php /* Smarty version 3.1.28-dev/33, created on 2015-07-31 13:11:45
         compiled from "C:\Users\Max TOMPOUCE\git\s4e\smarty\mapage.html" */ ?>
<?php
/*%%SmartyHeaderCode:648455bb7411712598_43542982%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13ded1a6cbd8f6d49feff4d2fa9d4560862e7ba' => 
    array (
      0 => 'C:\\Users\\Max TOMPOUCE\\git\\s4e\\smarty\\mapage.html',
      1 => 1438348304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '648455bb7411712598_43542982',
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/33',
  'unifunc' => 'content_55bb741176de33_17868051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bb741176de33_17868051')) {
function content_55bb741176de33_17868051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '648455bb7411712598_43542982';
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


<label for="qt">Quantity: </label>
<select id="qt" name="q">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
</select><br>
<button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00"
        data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Add to cart</button>


<div class="dropdown">
    <div id="cart">
        <p><span id="in-cart-items-num">0</span> Articles</p>
    </div>

    <ul id="cart-dropdown" hidden>
        <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
        <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
    </ul>
</div>

</body>
</html><?php }
}
?>