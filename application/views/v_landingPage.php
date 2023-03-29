

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Navigation & Social buttons -->
          <div class="site-nav mobile-menu-hide">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <!-- About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About me</a><!-- href value = data-id without # of .pt-page -->
              </li>
              <!-- /About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#resume" data-animation="59" data-goto="2">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio" data-animation="60" data-goto="3">Portfolio</a>
              </li>
              <!-- <li>
                <a class="pt-trigger" href="#blog" data-animation="61" data-goto="4">Blog</a>
              </li> -->
              <li>
                <a class="pt-trigger" href="#contact" data-animation="58" data-goto="5">Contact</a>
              </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
              <!-- <li><a class="tip social-button" href="<?= base_url() ?>template/tema1/#" title="Twitter"><i class="fa fa-twitter"></i></a></li>  -->
              <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <!-- <li><a class="tip social-button" href="<?= base_url() ?>template/tema1/#" title="Facebook"><i class="fa fa-facebook"></i></a></li> -->
              <!-- <li><a class="tip social-button" href="<?= base_url() ?>template/tema1/#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li> -->
              <!--<li><a class="tip social-button" href="<?= base_url() ?>template/tema1/#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
              <!--<li><a class="tip social-button" href="<?= base_url() ?>template/tema1/#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
              <!--<li><a class="tip social-button" href="<?= base_url() ?>template/tema1/#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
            </ul>
            <!-- /Social buttons -->
          </div>
          <!-- Navigation & Social buttons -->

          <!-- Subpages -->
          <div class="subpages">
            <!-- About Me Subpage -->
            <section class="pt-page pt-page-1" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">Tentang saya</h2>
                <h5 class="section-description">Webdeveloper, Content Creator, orang paling keren</h5>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
                  <div class="my-photo-small">
                    <img src="<?= base_url() ?>template/tema1/images/keren.jpg" alt="image">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="general-info">
                    <h3>Hai Saya Maulana Yusup</h3>
                    <p>Saya lulusan D3 Sistem Informasi dari Universitas Bina Sarana Informatika. Terbiasa dalam menggunakan 
framework CodeIgniter dan menggunakan Bahasa pemrograman, PHP, Javascript dan menggunakan 
Mysql sebagai Database. Saya memiliki ketertarikan di dunia teknologi yang bersifat support maupun 
dalam pembuatan aplikasi. Namun tidak menutup kemungkinan saya mampu bekerja dalam bidang 
lainnya yang didorong dengan kemampuan, keahlian dan pengalaman yang saya miliki.</p>
                    
                  </div>
                </div>

                <!--<div class="col-sm-4 col-md-4 subpage-block">
                  <div class="block end">
                    <ul class="info-list">
                      <li><span class="title">Name</span><span class="value">Alex Smith</span></li>
                      <li><span class="title">Age</span><span class="value">29</span></li>
                      <li><span class="title">Address</span><span class="value">88 Street - State, Town</span></li>
                      <li><span class="title">e-mail</span><span class="value"><a href="<?= base_url() ?>template/tema1/mailto:email@addres.com">email@addres.com</a></span></li>
                      <li><span class="title">Phone</span><span class="value">+0123 123 456 789</span></li>
                      <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                    </ul>
                  </div>
                </div>-->

                
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="<?= base_url() ?>template/tema1/images/service/web_design.png" alt="Responsive Design">
                      <h4>Web Developer</h4>
                      <p>Terbiasa menggunakan Codeigniter dan MYSQL</p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="<?= base_url() ?>template/tema1/images/service/management.png" alt="Management">
                      <h4>Content Creator</h4>
                      <p>Mempunyai akun youtube Programming By Mierebus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Services block -->

              
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-2" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Resume</h2>
                <h5 class="section-description"></h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Pendidikan</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2020</h5>
                      <h4 class="event-name">Sistem Informasi</h4>
                      <span class="event-description">University Bina Sarana Informatika</span>
                      <p>IPK 3.4</p>
                    </div>
                    
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Pengalaman Kerja</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Agustus 2021 - Oktober 2022</h5>
                      <h4 class="event-name">Junior Web Developer</h4>
                      <span class="event-description">PT. Tagima Teknologi Indonesia</span>
                      <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Maret 2020 - Juli 2021</h5>
                      <h4 class="event-name">Training Officer</h4>
                      <span class="event-description">PT. TIRTA FRESINDO JAYA (MAYORA CIMANDE)
</span>
                      <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Agustus 2019 - Febuari 2020</h5>
                      <h4 class="event-name">Intern Human Capital Management</h4>
                      <span class="event-description">PT. Perusahaan gas Negara Tbk</span>
                      <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Oktober 2014 - September 2016</h5>
                      <h4 class="event-name">Operator Produksi</h4>
                      <span class="event-description">PT.Astra Komponen Indonesia</span>
                      <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Juli 2012 - Juli 2014</h5>
                      <h4 class="event-name">Operator & Maintenance</h4>
                      <span class="event-description">PT.Sanyo Jaya Components Indonesia</span>
                      <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3> Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>MYSQL</h4>                               
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div> -->

                    <h4>PHP</h4>
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-2"></div>
                    </div> -->

                    <h4>Javascript</h4>
                    <h4>Codeigniter</h4>
                    <h4>Bootstrap</h4>
                    <h4>Navicat</h4>
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div>  -->
                  </div>

                  <div class="block-title">
                    <!-- <h3>Coding Skills</h3> -->
                  </div>
                  <div class="skills-info">
                    <h4>MS Office</h4>                               
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div> -->

                    <h4>Photoshop & Premiere</h4>
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div> -->

                    <h4>Visio / Draw io</h4>
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div> -->

                    <h4>Canva / polotno studio</h4>
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div> -->

                    <h4>Team Work</h4>
                    <!-- <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <!-- <a class="button" target="_blank" href="<?= base_url() ?>template/tema1/#">Download CV</a> -->
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-3" data-id="portfolio">
              <div class="section-title-block">
                <h2 class="section-title">Portfolio</h2>
                <h5 class="section-description">My Best Works</h5>
              </div>

              <!-- Portfolio Content -->
              <div class="portfolio-content">
                            
                <!-- Portfolio filter -->
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                  </li>
                  <!-- <li>
                    <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                  </li> -->
                </ul>
                <!-- End of Portfolio filter -->

                <!-- Portfolio Grid -->
                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="<?= base_url() ?>portfolio">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/jobdesk/spv1nn.jpg" alt="">
                      <div>
                        <h5 class="name">Jobdesk IT Spv</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="<?= base_url() ?>portfolio/staff">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/jobdesk/staff1n.jpg" alt="">
                      <div>
                        <h5 class="name">Jobdesk IT Staff</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="<?= base_url() ?>portfolio/kdsv">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/kriteria/kd sv1nn.jpg" alt="">
                      <div>
                        <h5 class="name">Kriteria Dasar Supervisor</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->
                  
                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="<?= base_url() ?>portfolio/ser">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/sertifikasi/ser1.jpeg" alt="">
                      <div>
                        <h5 class="name"> Pelatihan</h5>
                        <!-- <small>Media</small> -->
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->
                 
                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="<?= base_url() ?>portfolio/standar">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/sop/sop_penilaianTahun1.jpg" alt="">
                      <div>
                        <h5 class="name"> SOP</h5>
                        <!-- <small>Media</small> -->
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="<?= base_url() ?>portfolio/kdsrstaff">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/kriteria/kd sr1n.jpg" alt="">
                      <div>
                        <h5 class="name">Kriteria Dasar Senior Staff</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->
                  

                  

                  <!-- Portfolio Item 5 -->
                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a href="<?= base_url() ?>template/tema1/images/portfolio/youtube.jpg" class="lightbox" title="Filosofi Pekerjaan">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/youtube.jpg" alt="">
                      <div>
                        <h5 class="name">Youtube</h5>
                        <!-- <small>Illustration</small> -->
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 5 -->
                  <!-- Portfolio Item 5 -->
                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a href="<?= base_url() ?>template/tema1/images/portfolio/filosofi1.jpg" class="lightbox" title="Filosofi Pekerjaan">
                      <img src="<?= base_url() ?>template/tema1/images/portfolio/filosofi1.jpg" alt="">
                      <div>
                        <h5 class="name">Filosofi Pekerjaan</h5>
                        <!-- <small>Illustration</small> -->
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 5 -->

                 

                

                 

                 

                 
                </div>
                <!-- /Portfolio Grid -->

              </div>
              <!-- /Portfolio Content -->

            </section>
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <section class="pt-page pt-page-4" data-id="blog">
              <div class="section-title-block">
                <h2 class="section-title">Blog</h2>
                <h5 class="section-description">My Diary</h5>
              </div>
              <div class="blog-masonry">
                <!-- Blog Post 1 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_1.jpg" alt="blog-post-1" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">6</span><span class="month">Dec</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">Travel</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">Bootstrap is the Most Popular Framework</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 1 -->

                <!-- Blog Post 2 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_2.jpg" alt="blog-post-2" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">3</span><span class="month">Nov</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">jQuery</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">One Framework, Every Device</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 2 -->

                <!-- Blog Post 3 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_3.jpg" alt="blog-post-3" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">12</span><span class="month">Oct</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">Sport</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">Designed for Everyone, Everywhere</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 3 -->

                <!-- Blog Post 4 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_4.jpg" alt="blog-post-4" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">18</span><span class="month">Aug</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">CSS</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">An Introduction To PostCSS</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 4 -->

                <!-- Blog Post 5 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_5.jpg" alt="blog-post-5" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">2</span><span class="month">Jul</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">                        
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">CSS3</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">Original and Innovative Web Layouts</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 5 -->

                <!-- Blog Post 6 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_6.jpg" alt="blog-post-6" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">8</span><span class="month">May</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">HTML5</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 6 -->

                <!-- Blog Post 7 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_7.jpg" alt="blog-post-7" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">7</span><span class="month">Apr</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">Design</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">Navigation for Mega-Sites</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 7 -->

                <!-- Blog Post 8 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html">
                        <img class="post-image img-responsive" src="<?= base_url() ?>template/tema1/images/blog/blog_post_8.jpg" alt="blog-post-8" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">21</span><span class="month">Mar</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="<?= base_url() ?>template/tema1/#">CSS3</a></li>
                      </ul>
                      <a href="<?= base_url() ?>template/tema1/blog-post-1.html"><h4 class="blog-item-title">Front-End Challenge Accepted: CSS 3D Cube</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 8 -->
              </div>
            </section>
            <!-- End Blog Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Hubungi saya</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Alamat Dan Kontak</h3>
                  </div>
                  <!-- <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p> -->
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Bogor Jawa barat</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5><a href="#" class="" data-cfemail="">maulana182y@gmail.com&#160;</a></h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>088224749204</h5>
                    </div>
                  </div>
                  <!-- <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance Available</h5>
                    </div>
                  </div> -->
                </div>

                <!-- <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form id="contact-form" method="post" action="#">

                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-user"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-envelope"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-comment"></i>
                          <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>

                      <input type="submit" class="button btn-send" value="Send message">
                    </div>
                  </form>
                </div> -->
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    

   </script><script src="<?= base_url() ?>template/tema1/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/page-transition.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/validator.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/jquery.shuffle.min.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/jquery.hoverdir.js"></script>
    <script src="<?= base_url() ?>template/tema1/js/main.js"></script>

    <!-- Demo Color changer Script -->
    <script src="<?= base_url() ?>template/tema1/preview/lmpixels-demo-panel.js"></script>
    <!-- /Demo Color changer Script -->
  </body>


</html>
