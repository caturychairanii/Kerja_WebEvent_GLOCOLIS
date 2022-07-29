<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6>GLOCOLIS</h6>
                                    <h2>Photo</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/illustration/gallery.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h4>Foto <em>2022</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">

                    <!-- Gallery 2022 -->
                    <?php foreach ($Foto_2022 as $f22) { ?>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/images/gallery/2022/<?= $f22 ?>.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h4>Foto <em>2021</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">

                    <!-- Foto 2021 -->
                    <?php foreach($Foto_2021 as $f21) { ?>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/images/gallery/2021/<?= $f21 ?>.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>