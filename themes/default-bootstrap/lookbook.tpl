<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Pack->name</h2>
	</div>
	<div class="panel-body"></div>
</div>

	{foreach from=$pack item=product name=loop}
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-3">
					<img style="max-width: 100%" src="{$link->getImageLink($product->link_rewrite, $product->id)}" alt="">
				</div>
				<div class="col-md-9">
					<h3><a href="{$link->getProductLink($product->id)}">{$product->name}</a></h3>
					<p>{round($product->price)} €</p>
					<p>Category : {ucfirst($product->category)}</p>
				</div>
			</div>
		</div>

	{/foreach}