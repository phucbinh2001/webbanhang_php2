<div class="row">

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card-box widget-box-one">
            <i class="mdi mdi-store widget-one-icon"></i>
            <div class="wigdet-one-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Nhà sản xuất</p>
                <h2><?= $soNSX ?></h2>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card-box widget-box-one">
            <i class="mdi mdi-cellphone-iphone widget-one-icon"></i>
            <div class="wigdet-one-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Điện thoại</p>
                <h2><?= $sodt ?></h2>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card-box widget-box-one">
            <i class="mdi mdi-comment-text widget-one-icon"></i>
            <div class="wigdet-one-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Bình luận</p>
                <h2><?= $soDh ?></h2>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card-box widget-box-one">
            <i class="mdi mdi-cart widget-one-icon"></i>
            <div class="wigdet-one-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Đơn hàng</p>
                <h2><?= $soBl ?></h2>
            </div>
        </div>
    </div><!-- end col -->

</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-4">
        <div class="card-box">

            <h4 class="header-title m-t-0">Daily Sales</h4>

            <div class="widget-chart text-center">
                <div id="morris-donut-example" style="height: 245px;"></div>
                <ul class="list-inline chart-detail-list m-b-0">
                    <li>
                        <h5 class="text-danger"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                    </li>
                    <li>
                        <h5 class="text-success"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-4">
        <div class="card-box">

            <h4 class="header-title m-t-0">Statistics</h4>
            <div id="morris-bar-example" style="height: 280px;"></div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-4">
        <div class="card-box">

            <h4 class="header-title m-t-0">Total Revenue</h4>
            <div id="morris-line-example" style="height: 280px;"></div>
        </div>
    </div><!-- end col -->

</div>
<!-- end row -->