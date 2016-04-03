<?php /*%%SmartyHeaderCode:17943113256fd2771f00828-98175688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20d45e2012f13d72d4c1417ea799299ff1fe492' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1459425931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17943113256fd2771f00828-98175688',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fd27720bd433_05848326',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fd27720bd433_05848326')) {function content_56fd27720bd433_05848326($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost:8888/prestashop/en/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost:8888/prestashop/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost:8888/prestashop/en/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost:8888/prestashop/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost:8888/prestashop/en/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
