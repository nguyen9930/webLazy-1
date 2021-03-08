<?php use webLazy\Core\URL;
use webLazy\Model\BannerModel;
use webLazy\Model\QueryHomeModel;
use webLazy\Model\SearchModel;

require_once 'views/Shop/header.php' ?>
    <!-- Header Area End Here -->
    <!-- Begin Slider With Banner Area -->
    <div class="slider-with-banner">
        <div class="container">
            <div class="row">
                <!-- Begin Slider Area -->
                <div class="col-lg-8 col-md-8">
                    <div class="row carousel-holder">
                        <div class="col-md-12">
                            <div id="carousel-indicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
									<?php
									$row = BannerModel::selectAll();
									foreach ($row as $key => $value):
										if ($value[2] == 'TRUE') {
											?>
                                            <li data-target="#carousel-indicators"
                                                data-slide-to="<?= $key ?>" <?php echo ($key == 0) ?
												"class=\"active\"" : '' ?>></li>
										<?php } endforeach; ?>
                                </ol>
                                <div class="carousel-inner" role="listbox">
									<?php

									foreach ($row as $key => $value):
										if ($value[2] == 'TRUE') {
											?>
                                            <div class="item <?= ($key == 0) ? "active" : "" ?>">
                                                <img src="./assets/upload/Banner/<?= $value[3] ?>" alt=""
                                                     style="min-height: 475px;width: 100%;">
                                                <div class="carousel-caption">
                                                    <h3><?= $value[1] ?></h3>
                                                </div>
                                            </div>
										<?php }
									endforeach; ?>
                                </div>
                                <a class="left carousel-control" href="#carousel-indicators" style="margin-top: 216px"
                                   role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control" href="#carousel-indicators" style="margin-top: 216px"
                                   role="button" data-slide="next">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Area End Here -->
                <!-- Begin Li Banner Area -->
                <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                    <div class="li-banner">
                        <a href="#">
                            <img style="width: 370px;height: 230px"
                                 src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Note_Series_690X300-v2.png"
                                 alt="">
                        </a>
                    </div>
                    <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                        <a href="#">
                            <img style="width: 370px;height: 230px"
                                 src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Sliding-690x300-v2_1.png"
                                 alt="">
                        </a>
                    </div>
                </div>
                <!-- Li Banner Area End Here -->
            </div>
        </div>
    </div>
    <!-- Slider With Banner Area End Here -->
    <!-- Begin Product Area -->
    <div class="product-area pt-60 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a data-toggle="tab" style="color: #0b0b0b"
                                   href="#li-new-product"><span>Sản Phẩm Mới</span></a></li>
                            <li><a data-toggle="tab" style="color: #0b0b0b" href="#li-featured-product"><span>Featured Products</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
							<?php $row = QueryHomeModel::productNew();
							foreach ($row as $value):
								?>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                <img src="./assets/upload/<?= LoadOneAnh($value[6]) ?>"
                                                     style="width: 200px;height: 200px" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name"
                                                       href="<?= URL::uri('ctsp') . '/' .
												       $value[0] ?>"><?= $value[1] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= Money($value[4]); ?> vnđ</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active">
                                                        <button style="width: 120px;"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                            Add to cart
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button style="width: 33px;"
                                                                class="links-details"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); ">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button style="width: 33px;"
                                                                class="quick-view-btn"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');
                                                                viewProduct(id); ">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div id="li-featured-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <?php $aDataFeatured=(new \webLazy\Controllers\SearchController())
                                ->handleFeaturedProducts();
                            foreach ($aDataFeatured as $value):
                            ?>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                            <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                 style="width: 200px;height: 200px" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker" style="background: red">Hot</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name"
                                                   href="<?= URL::uri('ctsp') . '/' .
					                               $value[0] ?>"><?= $value[1] ?></a></h4>
                                            <div class="price-box">
                                                <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active">
                                                    <button style="width: 120px;"
                                                            data-id="<?= $value[0] ?>"
                                                            onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                        Add to cart
                                                    </button>
                                                </li>
                                                <li>
                                                    <button style="width: 33px;"
                                                            class="links-details"
                                                            data-id="<?= $value[0] ?>"
                                                            onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); ">
                                                        <i class="fa fa-heart-o"></i>
                                                    </button>
                                                </li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <!-- Begin Li's Static Banner Area -->
    <div class="li-static-banner">
        <div class="container">
            <div class="row">
                <!-- Begin Single Banner Area -->
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="single-banner">
                        <a href="#">
                            <img src="./assets/theme/images/banner/1_3.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
                <!-- Begin Single Banner Area -->
                <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                    <div class="single-banner">
                        <a href="#">
                            <img src="./assets/theme/images/banner/1_4.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
                <!-- Begin Single Banner Area -->
                <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                    <div class="single-banner">
                        <a href="#">
                            <img src="./assets/theme/images/banner/1_5.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
            </div>
        </div>
    </div>
    <!-- Li's Static Banner Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Laptop</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
					        <?php $row = SearchModel::searchProductMenu(2);
					        foreach ($row as $value):
						        ?>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                     style="width: 200px;height: 200px" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name"
                                                       href="<?= URL::uri('ctsp') . '/' .
										               $value[0] ?>"><?= $value[1] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active">
                                                        <button style="width: 120px;"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                            Add to cart
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button style="width: 33px;"
                                                                class="links-details"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); ">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
					        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's Laptop Product Area End Here -->
    <!-- Begin Li's TV & Audio Product Area -->
    <section class="product-area li-laptop-product li-tv-audio-product pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Điện Thoại</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
					        <?php $row = SearchModel::searchProductMenu(1);
					        foreach ($row as $value):
						        ?>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                     style="width: 200px;height: 200px" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name"
                                                       href="<?= URL::uri('ctsp') . '/' .
										               $value[0] ?>"><?= $value[1] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active">
                                                        <button style="width: 120px;"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                            Add to cart
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button style="width: 33px;"
                                                                class="links-details"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); ">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
					        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's TV & Audio Product Area End Here -->
    <!-- Begin Li's Static Home Area -->
    <div class="li-static-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Li's Static Home Image Area -->
                    <div class="li-static-home-image"></div>
                    <!-- Li's Static Home Image Area End Here -->
                    <!-- Begin Li's Static Home Content Area -->
                    <div class="li-static-home-content">
                        <p>Sale Offer<span>-20% Off</span>This Week</p>
                        <h2>Featured Product</h2>
                        <h2>Meito Accessories 2021</h2>
                        <p class="schedule">
                            Starting at
                            <span> $1209.00</span>
                        </p>
                        <div class="default-btn">
                            <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                        </div>
                    </div>
                    <!-- Li's Static Home Content Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Li's Static Home Area End Here -->
    <!-- Begin Li's Trending Product Area -->
    <section class="product-area li-trending-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Tab Menu Area -->
                <div class="col-lg-12">
                    <div class="li-product-tab li-trending-product-tab">
                        <h2>
                            <span>Smath Watch</span>
                        </h2>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                    <div class="tab-content li-tab-content li-trending-product-content">
                        <div id="home1" class="tab-pane show fade in active">
                            <div class="row">
                                <div class="product-active owl-carousel">
	                                <?php $row = SearchModel::searchProductMenu(3);
	                                foreach ($row as $value):
		                                ?>
                                        <div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                        <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                             style="width: 200px;height: 200px" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a href="">Graphic Corner</a>
                                                            </h5>
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4><a class="product_name"
                                                               href="<?= URL::uri('ctsp') . '/' .
						                                       $value[0] ?>"><?= $value[1] ?></a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active">
                                                                <button style="width: 120px;"
                                                                        data-id="<?= $value[0] ?>"
                                                                        onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button style="width: 33px;"
                                                                        class="links-details"
                                                                        data-id="<?= $value[0] ?>"
                                                                        onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); ">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </button>
                                                            </li>
                                                            <li><a href="#" title="quick view" class="quick-view-btn"
                                                                   data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                            class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
	                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Menu Content Area End Here -->
                </div>
                <!-- Tab Menu Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's Trending Product Area End Here -->
    <!-- Begin Li's Trendding Products Area -->
<?php require_once 'views/Shop/footer.php' ?>