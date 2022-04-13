<header class="ct-page-header ct-u-scratches--bottom ct-u-scratches--inner ct-u-background--black">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1 class="ct-page-header__title"></h1>
                </div>
                <div class="col-sm-8">
                    <ul class="breadcrumb">
                        <li><a href="#">หน้าหลัก</a>
                        </li>
                        <li><a href="#">ชำระเงิน</a>
                        </li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="ct-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">กรุณาสแกน QR Code ผ่าน Application ของธนาคาร</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                &nbsp;
            </div>
            <div class="col-md-3 text-center">
                <img src="data:image/png;base64, <?php echo $result['data']['qrImage']; ?>" alt="">
            </div>
            <div class="col-md-3">
                <p>ยอดเงินที่ชำระ</p>
                <p><b><?php echo $amount;?></b> บาท</p>
                <p>หมายเลขอ้างอิง</p>
                <p><?php echo $invoice;?></p>
            </div>
            <div class="col-md-3">
                &nbsp;
            </div>
        </div>
    </div>
</main>