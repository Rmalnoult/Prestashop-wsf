<?php /*%%SmartyHeaderCode:129515392056fd27714bc340-94278765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c278b4ff0f53cc524d4fc5aa90068d11721fb0e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1459425931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129515392056fd27714bc340-94278765',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fd27715a3468_47529703',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fd27715a3468_47529703')) {function content_56fd27715a3468_47529703($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost:8888/prestashop/en/manufacturers" title="Manufacturers">
						Manufacturers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost:8888/prestashop/en/1_fashion-manufacturer" title="More about Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">All manufacturers</option>
													<option value="http://localhost:8888/prestashop/en/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
