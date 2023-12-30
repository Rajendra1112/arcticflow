<?php include ("includes/header.php"); ?>

<!-- breadcrumb section -->
<section class="breadcrumb-section" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('images/background-img/breadcrumb-section-bg.png') center no-repeat;
    background-size:cover;">
    <div class=" container">
        <h1 class="page-title">Portfolio</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</section>


<!-- portfolio section -->
<section class="portfolio-section section-padding">
    <div class="container text-center">
        <div class="sub-heading">Explore Our Work</div>
        <h2 class="section-heading">Featured <span>Projects:</span></h2>

        <!-- tabs  -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all"
                    type="button" role="tab" aria-controls="nav-all" aria-selected="true">All</button>

                <button class="nav-link" id="nav-ecommerce-tab" data-bs-toggle="tab" data-bs-target="#nav-ecommerce"
                    type="button" role="tab" aria-controls="nav-ecommerce" aria-selected="false">E-Commerce</button>

                <button class="nav-link" id="nav-manpower-tab" data-bs-toggle="tab" data-bs-target="#nav-manpower"
                    type="button" role="tab" aria-controls="nav-manpower" aria-selected="false">Manpower</button>

                <button class="nav-link" id="nav-consultancy-tab" data-bs-toggle="tab" data-bs-target="#nav-consultancy"
                    type="button" role="tab" aria-controls="nav-consultancy" aria-selected="false">Consultancy</button>
            </div>
        </nav>

        <!-- tabs content -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab"
                tabindex="0">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/portfolio1.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">E-Commerce Revamp</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/youtube-video-img.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Himalayan Sunrise</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/youtube-video-img.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Himalayan Sunrise</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/portfolio1.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">E-Commerce Revamp</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-ecommerce" role="tabpanel" aria-labelledby="nav-ecommerce-tab"
                tabindex="0">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/portfolio1.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Check 23</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/youtube-video-img.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Bigklsdjfoisdjfiodsj Sunrise</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-manpower" role="tabpanel" aria-labelledby="nav-manpower-tab"
                tabindex="0">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/portfolio1.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">E-Commerce Revamp</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/youtube-video-img.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Himalayan Sunrise</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-consultancy" role="tabpanel" aria-labelledby="nav-consultancy-tab"
                tabindex="0">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/portfolio1.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">E-Commerce Revamp</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/youtube-video-img.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Himalayan Sunrise</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/youtube-video-img.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">Himalayan Sunrise</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="single-portfolio.php" class="portfolio-card">
                            <figure>
                                <img src="images/other-img/portfolio1.png" alt="image of portfolio">
                            </figure>
                            <div class="view-project">
                                <div class="project-title">E-Commerce Revamp</div>
                                <div class="secondary-btn">View Project</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ("includes/footer.php"); ?>