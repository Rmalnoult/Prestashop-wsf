<?php /* Smarty version Smarty-3.1.19, created on 2016-04-03 13:42:26
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/lookbook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146164749570101a29c7f61-77469470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d3782d8d033a95aa079f9eabe21c83f01dc71c' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/lookbook.tpl',
      1 => 1459683743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146164749570101a29c7f61-77469470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pack' => 0,
    'product' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570101a2a0e0a7_33468657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570101a2a0e0a7_33468657')) {function content_570101a2a0e0a7_33468657($_smarty_tpl) {?><div class="panel panel-default">
	<div class="panel-heading">
		<h2>Pack->name</h2>
	</div>
</div>

<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-3">
				<img style="max-width: 100%" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id);?>
" alt="">
			</div>
			<div class="col-md-9">
				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value->id);?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></h3>
				<p><?php echo round($_smarty_tpl->tpl_vars['product']->value->price);?>
 €</p>
				<p>Category : <?php echo ucfirst($_smarty_tpl->tpl_vars['product']->value->category);?>
</p>
			</div>
		</div>
	</div>

<?php } ?><?php }} ?>
