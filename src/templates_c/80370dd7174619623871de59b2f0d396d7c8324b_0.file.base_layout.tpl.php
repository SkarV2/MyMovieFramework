<?php
/* Smarty version 3.1.30, created on 2017-02-08 19:00:19
  from "/home/karol/Dokumenty/htdocs/src/templates/layout/base_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b5cb3a4bca8_87558581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80370dd7174619623871de59b2f0d396d7c8324b' => 
    array (
      0 => '/home/karol/Dokumenty/htdocs/src/templates/layout/base_layout.tpl',
      1 => 1486576802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589b5cb3a4bca8_87558581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_524563205589b5cb3a45ce0_59576514', "title");
?>
</title>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_224040463589b5cb3a4a341_56800461', "body");
?>

    </body>
</html><?php }
/* {block "title"} */
class Block_524563205589b5cb3a45ce0_59576514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_224040463589b5cb3a4a341_56800461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
