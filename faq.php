<?php include ("includes/header.php"); ?>

<!-- breadcrumb section -->
<section class="breadcrumb-section" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('images/background-img/breadcrumb-section-bg.png') center no-repeat;
    background-size:cover;">
    <div class=" container">
        <h1 class="page-title">FAQs</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
            </ol>
        </nav>
    </div>
</section>

<!-- faq section -->
<section class="faq-section section-padding">
    <div class="container text-center">
        <div class="sub-heading">Some of the frequently asked questions</div>
        <h2 class="section-heading">FAQs</h2>
        <div class="document-content mb-5">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I send a bulk SMS with Parewa SMS?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sending a bulk SMS with Parewa SMS is easy. Simply log in to your account, create a new
                            mesFour
                            upload your recipient list, and schedule or send your message. Our platform offers
                            user-friendly
                            tools to streamline the process.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What types of messages can I send with bulk SMS?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sending a bulk SMS with Parewa SMS is easy. Simply log in to your account, create a new
                            message,
                            upload your recipient list, and schedule or send your message. Our platform offers
                            user-friendly
                            tools to streamline the process.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What types of messages can I send with bulk SMS?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sending a bulk SMS with Parewa SMS is easy. Simply log in to your account, create a new
                            message,
                            upload your recipient list, and schedule or send your message. Our platform offers
                            user-friendly
                            tools to streamline the process.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What types of messages can I send with bulk SMS?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sending a bulk SMS with Parewa SMS is easy. Simply log in to your account, create a new
                            message,
                            upload your recipient list, and schedule or send your message. Our platform offers
                            user-friendly
                            tools to streamline the process.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination  -->
        <div class="pagination-wrapper">
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item " aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<?php include ("includes/footer.php"); ?>