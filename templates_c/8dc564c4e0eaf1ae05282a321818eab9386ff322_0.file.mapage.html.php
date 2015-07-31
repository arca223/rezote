<?php /* Smarty version 3.1.28-dev/33, created on 2015-07-31 13:57:23
         compiled from "C:\Users\Max TOMPOUCE\git\s4e\rezote\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:661855bb7ec3d527f0_24674058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dc564c4e0eaf1ae05282a321818eab9386ff322' => 
    array (
      0 => 'C:\\Users\\Max TOMPOUCE\\git\\s4e\\rezote\\index.html',
      1 => 1438348304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '661855bb7ec3d527f0_24674058',
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/33',
  'unifunc' => 'content_55bb7ec3d8aeb6_20537584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bb7ec3d8aeb6_20537584')) {
function content_55bb7ec3d8aeb6_20537584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '661855bb7ec3d527f0_24674058';
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