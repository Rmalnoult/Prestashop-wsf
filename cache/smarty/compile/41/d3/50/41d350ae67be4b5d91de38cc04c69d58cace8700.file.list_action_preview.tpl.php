<?php /* Smarty version Smarty-3.1.19, created on 2016-04-03 13:00:51
         compiled from "/Applications/MAMP/htdocs/prestashop/admin1551drewb/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16196786055700f7e30b63e9-38407676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d350ae67be4b5d91de38cc04c69d58cace8700' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin1551drewb/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16196786055700f7e30b63e9-38407676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5700f7e30c44f1_37001770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700f7e30c44f1_37001770')) {function content_5700f7e30c44f1_37001770($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
