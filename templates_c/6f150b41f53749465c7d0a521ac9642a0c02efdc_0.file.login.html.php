<?php /* Smarty version 3.1.28-dev/33, created on 2015-08-06 16:18:24
         compiled from "C:\Users\Max TOMPOUCE\git\s4e\rezote\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:2004255c388d051e754_02167680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f150b41f53749465c7d0a521ac9642a0c02efdc' => 
    array (
      0 => 'C:\\Users\\Max TOMPOUCE\\git\\s4e\\rezote\\login.html',
      1 => 1438877903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2004255c388d051e754_02167680',
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/33',
  'unifunc' => 'content_55c388d0560794_71173646',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c388d0560794_71173646')) {
function content_55c388d0560794_71173646 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2004255c388d051e754_02167680';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


    <form method="POST" action="">
        <label for="login">Login</label>
        <input type ="text" id="login" name="login" placeholder="Enter login">
        <br />

        <label for="pwd">Password</label>
        <input type ="password" id="pwd" name="pwd" placeholder="Enter pwd">
        <br />

        <input type="submit" value="Login">


    </form>

</body>
</html><?php }
}
?>