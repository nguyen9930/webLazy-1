<?php use webLazy\Model\ProductModel;

require_once 'views/Shop/header.php' ?>
<?php
$row = ProductModel::selectAll();

?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">List Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->

    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <!-- Begin Li's Banner Area -->
    <div class="single-banner shop-page-banner">
        <a href="#">
            <img src="./assets/theme/images/bg-banner/2.jpg" alt="Li's Static Banner">
        </a>
    </div>
    <!-- Li's Banner Area End Here -->
    <!-- shop-top-bar start -->
    <div class="shop-top-bar mt-30">
        <div class="shop-bar-inner">
            <div class="product-view-mode">
                <!-- shop-item-filter-list start -->
                <ul class="nav shop-item-filter-list" role="tablist">
                    <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                                              data-toggle="tab" role="tab"
                                                              aria-controls="grid-view"
                                                              href="#grid-view"><i class="fa fa-th"></i></a>
                    </li>
                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                               href="#list-view"><i class="fa fa-th-list"></i></a></li>
                </ul>
                <!-- shop-item-filter-list end -->
            </div>
            <div class="toolbar-amount">
                <span>Showing 1 to 9 of 15</span>
            </div>
        </div>
        <!-- product-select-box start -->
        <div class="product-select-box">
            <div class="product-short">
                <p>Sort By:</p>
                <select class="nice-select">
                    <option value="trending">Relevance</option>
                    <option value="sales">Name (A - Z)</option>
                    <option value="sales">Name (Z - A)</option>
                    <option value="rating">Price (Low &gt; High)</option>
                    <option value="date">Rating (Lowest)</option>
                    <option value="price-asc">Model (A - Z)</option>
                    <option value="price-asc">Model (Z - A)</option>
                </select>
            </div>
        </div>
        <!-- product-select-box end -->
    </div>
    <!-- shop-top-bar end -->
    <!-- shop-products-wrapper start -->
    <div class="shop-products-wrapper">
    <div class="tab-content">
    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
        <div class="product-area shop-product-area">
                <div class="row">
                    <?php foreach ($row as $key => $value): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="<?=\webLazy\Core\URL::uri('ctsp').'/'.$value[0]?>">
                                    <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                      style="width: 270px;height: 270px"  alt="Li's Product Image">
                                </a>
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
                                                <li class="no-star"><i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="no-star"><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a class="product_name" href="<?=\webLazy\Core\URL::uri('ctsp').'/'.$value[0]?>"><?= $value[1] ?></a></h4>
                                    <div class="price-box">
                                        <span class="new-price"><?= $value[2] ?></span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart active"><a href="shopping-cart.html">Add
                                                to cart</a></li>
                                        <li><a class="links-details" href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></li>
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
    <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
<?php foreach ($row as $key => $value): ?>
    <div class="row">
        <div class="col">
            <div class="row product-layout-list">
                <div class="col-lg-3 col-md-5 ">
                    <div class="product-image">
                        <a href="<?=\webLazy\Core\URL::uri('ctsp').'/'.$value[0]?>">
                            <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                 style="width: 270px;height: 270px"  alt="Li's Product Image">
                        </a>
                        <span class="sticker">New</span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
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
                                        <li class="no-star"><i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="no-star"><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h4><a class="product_name" href="<?=\webLazy\Core\URL::uri('ctsp').'/'.$value[0]?>"><?= $value[1] ?></a></h4>
                            <div class="price-box">
                                <span class="new-price"><?= $value[2] ?></span>
                            </div>
                            <p><?= the_excerpt($value[3]) ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shop-add-action mb-xs-30">
                        <ul class="add-actions-link">
                            <li class="add-cart"><a href="#">Add to cart</a></li>
                            <li class="wishlist"><a href="wishlist.html"><i
                                            class="fa fa-heart-o"></i>Add to wishlist</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
    </div>

    <div class="paginatoin-area">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <p>Showing 1-12 of 13 item(s)</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="pagination-box">
                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- shop-products-wrapper end -->
    </div>
    </div>
    </div>
    </div>
    <?php require_once 'views/Shop/footer.php' ?>