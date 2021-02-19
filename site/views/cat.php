    	<!-- Page title -->
    	<div class="page-title parallax parallax1">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-md-12">
    	                <div class="page-title-heading">
    	                    <h1 class="title"><?= $brandname ?></h1>
    	                </div><!-- /.page-title-heading -->
    	                <div class="breadcrumbs">
    	                    <ul>
    	                        <li><a href="<?=SITE_URL?>">Trang chủ</a></li>
    	                        <li><a href="shop-3col.html">Thương hiệu</a></li>
    	                    </ul>
    	                </div><!-- /.breadcrumbs -->
    	            </div><!-- /.col-md-12 -->
    	        </div><!-- /.row -->
    	    </div><!-- /.container -->
    	</div><!-- /.page-title -->

    	<section class="flat-row main-shop shop-slidebar">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-md-3">
    	                <div class="sidebar slidebar-shop">
    	                    <!-- <div class="widget widget-search">
    	                        <form role="search" method="get" class="search-form" action="#">
    	                            <label>
    	                                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
    	                            </label>
    	                            <input type="submit" class="search-submit" value="Search">
    	                        </form>
    	                    </div>/.widget-search -->
    	                    <!-- <div class="widget widget-sort-by">
    	                        <h5 class="widget-title">
    	                            Sort By
    	                        </h5>
    	                        <ul>
    	                            <li><a href="#" class="active">Default</a></li>
    	                            <li><a href="#">Popularity</a></li>
    	                            <li><a href="#">Average rating</a></li>
    	                            <li><a href="#">Newness</a></li>
    	                            <li><a href="#">Price: low to high</a></li>
    	                            <li><a href="#">Price: high to low</a></li>
    	                        </ul>
    	                    </div>/.widget-sort-by -->
    	                    <!-- <div class="widget widget-color">
    	                        <h5 class="widget-title">
    	                            Colors
    	                        </h5>
    	                        <ul class="flat-color-list icon-left">
    	                            <li><a href="#" class="yellow"></a><span>Yellow</span> <span class="pull-right">25</span></li>
    	                            <li><a href="#" class="pink"> </a><span>White</span> <span class="pull-right">16</span></li>
    	                            <li><a href="#" class="red active"></a><span>Red</span> <span class="pull-right">28</span></li>
    	                            <li><a href="#" class="black"></a><span>Black</span> <span class="pull-right">12</span></li>
    	                            <li><a href="#" class="blue"></a><span>Green</span> <span class="pull-right">0</span></li>
    	                        </ul>
    	                    </div>/.widget-color -->
    	                    <!-- <div class="widget widget-price">
    	                        <h5 class="widget-title">Filter by price</h5>
    	                        <div class="price-filter">
    	                            <div id="slide-range"></div>
    	                            <p class="amount">
    	                                Price: <input type="text" id="amount" disabled="">
    	                            </p>
    	                        </div>
    	                    </div> -->
    	                    <div class="widget widget_tag">
    	                        <h5 class="widget-title">
    	                            Thương hiệu
    	                        </h5>
    	                        <div class="tag-list">
									<?php 
									foreach ($nsx as $brand) {
										$acitve = "";
										if($brand['idNSX']==$_GET['id'])
											$acitve = 'class="active"';
										echo '<a '.$acitve.' href="?act=cat&id='.$brand['idNSX'].'" >'.$brand['TenNSX'].'</a>';
									}?>
    	                            
								
    	                        </div>
    	                    </div><!-- /.widget -->
    	                </div><!-- /.sidebar -->
    	            </div><!-- /.col-md-3 -->
    	            <div class="col-md-9">
    	                <div class="filter-shop clearfix">
    	                    <!-- <p class="showing-product float-right">
    	                        Showing 1–12 of 56 Products
    	                    </p> -->
    	                </div><!-- /.filte-shop -->
    	                <div class="product-content product-threecolumn product-slidebar clearfix">
							<ul class="product style2 sd1">
    	                        <?php foreach ($listSP as $item) {
                                ?>
    	                            <li class="product-item">
    	                                <div class="product-thumb clearfix">
    	                                    <a href="?act=detail&id=<?= $item['idDT'] ?>">
    	                                        <img src="<?= IMG_FILE . "/" . $item['urlHinh'] ?>" alt="image">
    	                                    </a>
    	                                    <?= (isset($item['GiaKM'])) ? '<span class="new sale">Sale</span>' : ""; ?>
    	                                </div>
    	                                <div class="product-info clearfix">
    	                                    <span class="product-title"><?= $item['TenDT'] ?></span>
    	                                    <div class="price">
    	                                        <?php if (isset($item['GiaKM'])) { ?>
    	                                            <del>
    	                                                <span class="regular"><?= number_format($item['Gia'], 0, '', '.'); ?>đ</span>
    	                                            </del>
    	                                            <br>
    	                                            <ins>
    	                                                <span class="amount"><?= number_format($item['GiaKM'], 0, '', '.'); ?>đ</span>
    	                                            </ins>
    	                                        <?php } else { ?>
    	                                            <ins>
    	                                                <span class="amount"><?= number_format($item['Gia'], 0, '', '.'); ?>đ</span>
    	                                            </ins>
    	                                        <?php } ?>
    	                                    </div>
    	                                </div>
    	                                <div class="add-to-cart text-center">
    	                                    <a href="#">THÊM VÀO GIỎ</a>
    	                                </div>
    	                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
    	                            </li>
    	                        <?php } ?>
    	                    </ul><!-- /.product -->
    	                </div><!-- /.product-content -->
    	                <!-- <div class="product-pagination text-center clearfix">
    	                    <ul class="flat-pagination">
    	                        <li class="prev">
    	                            <a href="#"><i class="fa fa-angle-left"></i></a>
    	                        </li>
    	                        <li><a href="#">1</a></li>
    	                        <li class="active"><a href="#" title="">2</a></li>
    	                        <li><a href="#">3</a></li>
    	                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
    	                    </ul> /.flat-pagination -->
    	                </div>
    	            </div><!-- /.col-md-9 -->
    	        </div><!-- /.row -->
    	    </div><!-- /.container -->
    	</section><!-- /.flat-row -->