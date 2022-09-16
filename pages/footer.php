<?php 
    $select_infosite = "SELECT * from infosite";
    $infoList = executeResult($select_infosite,1);
?>

<footer>
        <div class="site-footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer-widget">
                                <a href="index.php" class="logo-wrapper">
                                    <img src="img/logo/<?php echo $infoList['logo']?>" alt="logo">
                                </a>
                                <div class="text-donate-footer" style="margin-top: 15px">
                                    <p>
                                        <span>
                                        <?php echo $infoList['description']?>                                                                                
                                        </span>
                                    </p>
                                </div>
                                <h3>
                                    <span>Theo dõi</span>
                                </h3>
                                <ul class="inline-list social-icons">
                                    <li>
                                        <a href="<?php echo $infoList['facebook']?>" class="icon-fallback-text">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $infoList['instagram']?>" class="icon-fallback-text">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $infoList['youtube']?>" class="icon-fallback-text">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $infoList['zalo']?>" class="icon-fallback-text">
                                            <img src="//bizweb.dktcdn.net/100/345/407/themes/706150/assets/zalo.png?1656415239934" alt="zalo">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="footer-widget">
                                <h3>
                                    <span>Địa chỉ cửa hàng</span>
                                </h3>
                                <h4 style="margin-top:22px;">Địa chỉ</h4>
                                <p><?php echo $infoList['address']?></p>
                                <h4 style="margin-top:22px;">Hỗ trợ & tư vấn</h4>
                                <p>
                                    <a href="callto:<?php echo $infoList['phone_number']?>"><?php echo $infoList['phone_number']?></a>
                                </p>
                                <h4>Email</h4>
                                <p>
                                            <a href="mailto:"><?php echo $infoList['email']?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-6" style="text-align: right;">
                            <div class="back-to-header show end">Lên đầu trang
                                <a href="#top-main" class="fa-solid fa-circle-arrow-up"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
    function process(tabShow){
        $('.owl-stage-2').hide();
        
        $('#'+tabShow).show();
    }
</script>
<script>
    $('.owl-stage-2').hide();

    $( '.owl-stage-2' ).each(function( index ) {
    if(index == 0){
        $( this ).show();
    }
    });
</script>
<script>
    function addCart()
    {
        var count_item_pr= parseInt($('.count_item_pr').html());
        count_item_pr++;
        $('.count_item_pr').html(count_item_pr);
    }
</script>
    