<?php
	$category_list = new Models\ProductCategoryList;
	$category_list->findAll();
?>
<!-- start sidebar -->
<ul class="breadcrumb">
	<li>Categories</span></li>
</ul>
<div class="span3 product_list">
	<ul class="nav">
		<?php foreach ($category_list->objects as $category) { ?>
			<li><a class="" href="/search.php?category_id=<?php echo $category->id?>"><?php echo $category->label?></a>
		<?php }?>
	</ul>
</div><!-- end sidebar -->