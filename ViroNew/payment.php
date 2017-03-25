<?php
require_once('./config.php');
require_once ('./header.php');
?>
            <section class="heading price_viro" id="home-block1">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text_head text-center mt-80">
                            <p class="heading_p color-trangmo">Post your sales and promotion events. Our users will be <br>
                                notified of your events, and shop advantageously.</p>
                        </div>
                        <div class="col-lg-12">

                            <div class="price_table">
                                <div class="column_1">
                                    <ul>
                                        <li class="header_row_1 align_center">
                                            <div class="pack-title">STARTER</div>
                                        </li>
                                        <li class="header_row_2 align_center">
                                            <div class="price"><span>$100</span></div>
                                            <!--<div class="time">per year</div>-->
                                        </li>
                                        <li class="row_style_1 align_center"><span>10 Ads Posting<br>(20 shares per ad)</span></li>
                                        <!--<li class="row_style_1 align_center"><span>Praesent ac</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Duis quis risus</span></li>-->
                                        <!--<li class="row_style_1 align_center no-option"><span>Suspendisse rutrum</span></li>-->
                                        <!--<li class="row_style_1 align_center no-option"><span>Quisque mauris urna</span></li>-->
                                        <!--<li class="row_style_footer_1"><a href="#" class="buy_now">BUY NOW</a></li>-->
                                        <li class="row_style_footer_1">
                                            <form action="charge.php" method="post">
                                                <?php $amount = "10000"; ?>
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="pk_live_By7fN3bBa3oNNAJwgY0bNVF4"
                                                    data-amount="<?php echo $amount ?>"
                                                    data-name="Viro"
                                                    data-description="Starter"
                                                    data-image="assets/img/icon96.png"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                                <input type="hidden" value="<?php echo $amount ?>" name="amount" />
                                            </form>

                                        </li>

                                    </ul>
                                </div><!--end column-->

                                <div class="column_1">
                                    <ul>
                                        <li class="header_row_1 align_center">
                                            <div class="pack-title">SILVER</div>
                                        </li>
                                        <li class="header_row_2 align_center">
                                            <div class="price"><span>$500</span></div>
                                            <!--<div class="time">per year</div>-->
                                        </li>
                                        <li class="row_style_2 align_center"><span>55 Ads Posting<br>(20 shares per ad)</span></li>
                                        <!--<li class="row_style_2 align_center"><span>Praesent ac</span></li>-->
                                        <!--<li class="row_style_2 align_center"><span>Duis quis risus</span></li>-->
                                        <!--<li class="row_style_2 align_center"><span>Suspendisse rutrum</span></li>-->
                                        <!--<li class="row_style_2 align_center no-option"><span>Quisque mauris</span></li>-->
                                        <!--<li class="row_style_footer_2"><a href="#" class="buy_now">BUY NOW</a></li>-->
                                        <li class="row_style_footer_1">
                                            <form action="charge.php" method="post">
                                                <?php $amount = "50000"; ?>
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="pk_live_By7fN3bBa3oNNAJwgY0bNVF4"
                                                    data-amount="<?php echo $amount ?>"
                                                    data-name="Viro"
                                                    data-description="Starter"
                                                    data-image="assets/img/icon96.png"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                                <input type="hidden" value="<?php echo $amount ?>" name="amount" />
                                            </form>
                                        </li>
                                    </ul>
                                </div><!--end column-->

                                <div class="column_1">
                                    <ul>
                                        <li class="header_row_1 align_center">
                                            <div class="pack-title">GOLD</div>
                                        </li>
                                        <li class="header_row_2 align_center">
                                            <div class="price"><span>$1000</span></div>
                                            <!--<div class="time">per year</div>-->
                                        </li>
                                        <li class="row_style_1 align_center"><span>120 Ads Posting<br>(20 shares per ad)</span></li>
                                        <!--<li class="row_style_1 align_center"><span>Praesent ac</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Duis quis risus</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Suspendisse rutrum</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Quisque mauris urna</span></li>-->
                                        <!--<li class="row_style_footer_1"><a href="#" class="buy_now">BUY NOW</a></li>-->
                                        <li class="row_style_footer_1">
                                            <form action="charge.php" method="post">
                                                <?php $amount = "100000"; ?>
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="pk_live_By7fN3bBa3oNNAJwgY0bNVF4"
                                                    data-amount="<?php echo $amount ?>"
                                                    data-name="Viro"
                                                    data-description="Starter"
                                                    data-image="assets/img/icon96.png"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                                <input type="hidden" value="<?php echo $amount ?>" name="amount" />
                                            </form>

                                        </li>
                                    </ul>
                                </div><!--end column-->

                                <div class="column_1 price_active">
                                    <ul>
                                        <li class="header_row_1 align_center">
                                            <div class="pack-title">PLATINUM</div>
                                        </li>
                                        <li class="header_row_2 align_center">
                                            <div class="price"><span>$3000</span></div>
                                            <!--<div class="time">per year</div>-->
                                        </li>
                                        <li class="row_style_2 align_center"><span>390 Ads Posting<br>(20 shares per ad)</span></li>
                                        <!--<li class="row_style_2 align_center"><span>Praesent ac</span></li>-->
                                        <!--<li class="row_style_2 align_center"><span>Duis quis risus</span></li>-->
                                        <!--<li class="row_style_2 align_center"><span>Suspendisse rutrum</span></li>-->
                                        <!--<li class="row_style_2 align_center no-option"><span>Quisque mauris</span></li>-->
                                        <!--<li class="row_style_footer_2"><a href="#" class="buy_now">BUY NOW</a></li>-->
                                        <li class="row_style_footer_1">
                                            <form action="charge.php" method="post">
                                                <?php $amount = "300000"; ?>
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="pk_live_By7fN3bBa3oNNAJwgY0bNVF4"
                                                    data-amount="<?php echo $amount ?>"
                                                    data-name="Viro"
                                                    data-description="Starter"
                                                    data-image="assets/img/icon96.png"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                                <input type="hidden" value="<?php echo $amount ?>" name="amount" />
                                            </form>

                                        </li>
                                    </ul>
                                </div><!--end column-->

                                <div class="column_1">
                                    <ul>
                                        <li class="header_row_1 align_center">
                                            <div class="pack-title">VIP</div>
                                        </li>
                                        <li class="header_row_2 align_center">
                                            <div class="price"><span>$5000</span></div>
                                            <!--<div class="time">per year</div>-->
                                        </li>
                                        <li class="row_style_1 align_center"><span>700 Ads Posting<br>(20 shares per ad)</span></li>
                                        <!--<li class="row_style_1 align_center"><span>Praesent ac</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Duis quis risus</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Suspendisse rutrum</span></li>-->
                                        <!--<li class="row_style_1 align_center"><span>Quisque mauris urna</span></li>-->
                                        <li class="row_style_footer_1">
                                            <form action="charge.php" method="post">
                                                <?php $amount = "500000"; ?>
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="pk_live_By7fN3bBa3oNNAJwgY0bNVF4"
                                                    data-amount="<?php echo $amount ?>"
                                                    data-name="Viro"
                                                    data-description="Starter"
                                                    data-image="assets/img/icon96.png"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                                <input type="hidden" value="<?php echo $amount ?>" name="amount" />
                                            </form>

                                        </li>
                                    </ul>
                                </div><!--end column-->

                            </div><!--end price table-->




                        </div>
                    </div><!--row-->
                </div>



            </section>

<?php require_once './footer.php'; ; ?>