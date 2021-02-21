<style>
    .tongtien {
        font-size: 18px;
    }

    .tongtien th {
        padding: 10px 0;
    }

    .empty {
        display: flex;
        padding: 50px;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }

    .empty img {
        margin-bottom: 40px;
    }
</style>
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Giỏ hàng</h1>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="blog-list-1.html">Giỏ hàng</a></li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->
<div class="content-container pb-5">
    <div class="container">
        <?php if (count($_SESSION['giohang']) > 0) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="commerce">
                            <form>
                                <table class="table shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove hidden-xs">&nbsp;</th>
                                            <th class="product-thumbnail hidden-xs">&nbsp;</th>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-price text-center">Giá</th>
                                            <th class="product-quantity text-center">Số lượng</th>
                                            <th class="product-subtotal text-center hidden-xs">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $tongtien = 0;
                                        foreach ($_SESSION['giohang'] as $item) {
                                        ?>
                                            <tr class="cart_item">
                                                <td class="product-remove hidden-xs">
                                                    <a href="?act=cart&what=remove&id=<?= $item['idDT'] ?>" class="remove" style="font-size: 20px;" title="Xoá sản phẩm này">&times;</a>
                                                </td>

                                                <td class="product-thumbnail hidden-xs">
                                                    <a href="index.php?act=detail&id=<?= $item['idDT'] ?>">
                                                        <img width="100" height="150" src="<?= IMG_FILE . "/" . $item['urlHinh'] ?>" alt="Product-2" />
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="index.php?act=detail&id=<?= $item['idDT'] ?>"><?= $item['TenDT'] ?></a>
                                                    <!-- <dl class="variation">
                                                <dt class="variation-Color">Color:</dt>
                                                <dd class="variation-Color">
                                                    <p>Green</p>
                                                </dd>
                                                <dt class="variation-Size">Size:</dt>
                                                <dd class="variation-Size">
                                                    <p>Extra Large</p>
                                                </dd>
                                            </dl> -->
                                                </td>
                                                <td class="product-price text-center">
                                                    <span class="amount"><?= number_format($item['Gia'], 0, '', '.'); ?>đ</span>
                                                </td>
                                                <td class="product-quantity text-center">
                                                    <div class="quantity">
                                                        <input type="text" value="<?=$item['Amount']?>" name="quantity-number" class="quantity-number">
                                                        <span class="inc quantity-button">+</span>
                                                        <span class="dec quantity-button">-</span>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal hidden-xs text-center">
                                                    <span class="amount"><?= number_format($item['Gia'] * $item['Amount'], 0, '', '.'); ?>đ</span>
                                                </td>
                                            </tr>
                                        <?php
                                            $tongtien += $item['Gia'] * $item['Amount'];
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals d-flex justify-content-between">
                                <div>
                                    <a href="?act=cart&what=removeall" class="btn btn-danger">Xoá giỏ hàng</a>
                                    <a href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>
                                </div>
                                <div class="cart_totals">
                                    <h2>Tổng tiền</h2>
                                    <table width="100%" class="tongtien">
                                        <tr class="cart-subtotal">
                                            <div class="input-group input-group-sm">

                                                <input type="text" class="form-control fix-rounded-right" placeholder="Mã giảm giá">
                                                <div class="input-group-prepend">
                                                    <button class="input-group-text" style="height: 100%;">Áp dụng</button>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Phí ship</th>
                                            <td class="text-right"><strong><span class="amount">0đ</span></strong></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng</th>
                                            <td class="text-right"><strong><span class="amount"><?= number_format($tongtien, 0, '', '.'); ?>đ</span></strong></td>
                                        </tr>
                                    </table>
                                    <div class="wc-proceed-to-checkout float-right">
                                        <a href="#" class="btn btn-primary">Đặt hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="empty">
                <img width="300px" src="./views/img/empty.svg" alt="">
                <p>Bạn chưa có đơn hàng nào, <a href="index.php" style="color: #f63440;">Mua ngay</a> .</p>
            </div>


        <?php } ?>
    </div>
</div>