<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>Kriteria Dasar Senior Staff</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="<?= base_url() ?>template/tema1/images/portfolio/kriteria/kd sr1n.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= base_url() ?>template/tema1/images/portfolio/kriteria/kd sr2n.jpg" alt="">
                    </div>
                    <!-- <div class="item">
                        <img src="<?= base_url() ?>template/tema1/images/portfolio/kriteria/staff3n.jpg" alt="">
                    </div> -->
                </div>

                <!-- <div class="portfolio-page-video embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="<?= base_url() ?>template/tema1/"></iframe>
                </div> -->

                <!--
                <div class="portfolio-page-image">
                    <img src="<?= base_url() ?>template/tema1/images/portfolio/portfolio_details/1_1.jpg" alt="">
                </div>
                -->

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });
                    }); 
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="block-title">
                    <h3>Description</h3>
                </div>
                <ul class="project-general-info">
                    <li><p><i class="fa fa-user"></i> Kriteria Dasar Senior Staff</p></li>
                    <!-- <li><p><i class="fa fa-globe"></i> <a href="#" target="_blank">www.project-site.com</a></p></li>
                    <li><p><i class="fa fa-calendar"></i> 25 december, 2016</p></li> -->
                </ul>

                <!-- <p class="text-justify">Tujuan Pekerjaan = Bertanggungjawab untuk merencanakan, menganalisis, merancang,
mengimplementasikan, mengembangkan dan atau mengoperasikan sistem informasi berbasis komputer, agar pelaksanaan tugas Bagian Teknologi Informasi (IT) berjalan lancar seperti instalasi, evaluasi serta peningkatan terhadap komputer (hardware), software, serta pengembangan sistem jaringan (network system)
.</p> -->
                <!-- /Project Description -->

                <!-- Technology -->
                <!-- <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        <li><a>HTML5</a></li>
                        <li><a>CSS3</a></li>
                        <li><a>jQuery</a></li>
                        <li><a>Ajax</a></li>
                        <li><a>PHP5</a></li>
                    </ul>
                </div> -->
                <!-- /Technology -->

                <!-- Share Buttons -->
                <!-- <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Share</h3>
                    </div>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
                </div> -->
                <!-- /Share Buttons -->
            </div>
        </div>
    </div>
</div>
