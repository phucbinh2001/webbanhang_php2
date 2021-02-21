<?php require_once './models/function.php' ?>
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title"><?= $sp['TenDT'] ?></h1>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="shop-3col.html">Sản phẩm</a></li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<section class="flat-row main-shop shop-detail style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-flexslider">
                    <div class="inner padding-top-5">

                        <ul class="slides">
                            <li data-thumb="<?= IMG_FILE . "/" . $sp['urlHinh'] ?>">
                                <img src="<?= IMG_FILE . "/" . $sp['urlHinh'] ?>" alt="Image">
                            </li>
                        </ul>

                    </div>
                </div>
            </div><!-- /.col-md-6 -->

            <div class="col-md-6">
                <div class="divider h0"></div>
                <div class="product-detail">
                    <div class="inner">
                        <div class="content-detail">
                            <h2 class="product-title"><?= $sp['TenDT'] ?></h2>
                            <!-- <div class="flat-star style-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(1)</span>
                            </div> -->
                            <p><?= cut_string($sp['MoTa'], 300, '...')  ?></p>
                            <div class="price margin-top-30">
                                <?php if (isset($sp['GiaKM'])) { ?>
                                    <del>
                                        <span class="regular"><?= number_format($sp['Gia'], 0, '', '.'); ?>đ</span>
                                    </del>
                                    <br>
                                    <ins>
                                        <span class="amount"><?= number_format($sp['GiaKM'], 0, '', '.'); ?>đ</span>
                                    </ins>
                                <?php } else { ?>
                                    <ins>
                                        <span class="amount"><?= number_format($sp['Gia'], 0, '', '.'); ?>đ</span>
                                    </ins>
                                <?php } ?>
                            </div>
                            <div class="product-quantity margin-top-44">
                                <!-- <div class="quantity">
                                    <input type="text" value="1" name="quantity-number" class="quantity-number">
                                    <span class="inc quantity-button">+</span>
                                    <span class="dec quantity-button">-</span>
                                </div> -->
                                <div class="add-to-cart">
                                    <a href="#">THÊM VÀO GIỎ HÀNG</a>
                                </div>
                                <div class="box-like">
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.product-detail -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-row -->

<section class="flat-row shop-detail-content" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-tabs style-1 has-border">
                    <div class="inner">
                        <ul class="menu-tab">
                            <li class="active">Mô tả</li>
                            <li>Cấu hình</li>
                        </ul>
                        <div class="content-tab">
                            <div class="content-inner">
                                <div class="inner max-width-77 padding-top-33 padding-left-7">
                                    <?= $sp['MoTa'] ?>
                                </div>
                            </div><!-- /.content-inner -->
                            <div class="content-inner">
                                <div class="inner max-width-40">
                                <?php if(count($thuoctinh)<=1) echo "Đang cập nhật"; else{?>
                                    <table>
                                        <tr>
                                            <td>Màn hình</td>
                                            <td><?= $thuoctinh['ManHinh'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Hệ điều hành</td>
                                            <td><?= $thuoctinh['HeDieuHanh'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Camera trước</td>
                                            <td><?= $thuoctinh['CameraTruoc'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Camera sau</td>
                                            <td><?= $thuoctinh['CameraSau'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>CPU</td>
                                            <td><?= $thuoctinh['CPU'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ram</td>
                                            <td><?= $thuoctinh['RAM'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bộ nhớ trong</td>
                                            <td><?= $thuoctinh['BoNhoTrong'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Thẻ nhớ</td>
                                            <td><?= $thuoctinh['TheNho'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Thẻ sim</td>
                                            <td><?= $thuoctinh['TheSIM'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dung lượng</td>
                                            <td><?= $thuoctinh['DungLuongPin'] ?></td>
                                        </tr>
                                    </table>
                                    <?php }?>
                                </div>
                            </div><!-- /.content-inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.shop-detail-content -->