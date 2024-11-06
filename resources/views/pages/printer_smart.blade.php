@extends('layout.main')
@section('main-content')

<body>
    <section style="background: #f7f7f7;">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-md-4 border-end text-center mb-4 mb-md-0">
                    <img src="assets/img/hp-smart-app-icon.png" alt="" class="img-fluid-install mx-auto d-block">
                    <h3 class="pt-4">HP Smart</h3>
                    <div class="pt-4">
                        <a href="#" id="installButton" class="btn btn-primary w-75" style="font-size: 25px;"
                            data-bs-toggle="modal" data-bs-target="#fullScreenModal">Install Now</a>
                    </div>
                    <div class="pt-4">
                        <p>Connects seamlessly with your HP printer</p>
                    </div>

                </div>

                <div class="col-md-8">
                    <img src="assets/img/hp-smart.webp" alt="" class="img-fluid mx-auto d-block"
                        style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>


    <section style="padding-top: 50px;">
        <div class="container pt-4">
            <div class="row" style="align-items: center;">
                <div class="col-md-7">
                    <p class="mb-0">Print, scan, and share files by using HP Smart with your HP Printer. HP Smart makes
                        it easy to get started and keeps you going with features like Print Anywhere or Mobile Fax!
                        NOTE:
                        Disconnect from a Virtual Private Network (VPN) connection before downloading.
                    <ul>
                        <li>Start with a hassle-free set up, then print, scan, copy, and share files directly from your
                            computer to your friends, co-workers, or a linked cloud account </li>
                        <li>Manage or print to your printer using any network connection</li>
                        <li>Order supplies, get support, and manage your HP account straight from the app</li>
                        <li>Create high-quality scans by importing existing files or scanning from your printer, and
                            improve them by cropping the file, adding filters and text, or adjusting saturation,
                            contrast, and brightness</li>
                        <li>It’s easy to send secure faxes from the app with Mobile Fax</li>
                        <li>Be more productive with customizable one-touch Shortcuts (formally Smart Tasks)</li>
                        <li>Access hundreds of printable crafts, cards, and learning activities for free with
                            Printables! Get involved and get your family creating together!</li>
                    </ul>
                    Some HP Smart features require a network connection and an HP account for full functionality.
                    Certain features/software are available in English language only. </p>
                </div>
                <div class="col-md-5">
                    <img src="assets/img/app-home-page.webp" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <!-- Additional sections and content here -->

    <section style="padding-top: 50px;">
        <div class="container pt-4">
            <div class="row justify-content-center align-items-center">
                <div class="text-center">
                    <h2 class="text-primary1">We Provide Solution’s for</h2>
                    <p>Storage | Software Download | Installation Issues | Network Connectivity Related Issues</p>
                </div>
                <div class="col-10 col-md-6 col-lg-5 mb-3">
                    <div class="text-center pt-4">
                        <img src="assets/img/Support for Laptop.png" class="card-img-top" style="border-radius: 10px;"
                            alt="...">
                        <div class="card-body pt-4">
                            <h5 class="card-title">Get Instant Support for Laptop & Desktop</h5>
                            <p class="card-text pt-2">If the all-in-one, elite, premium, pavilions or any other HP
                                desktop is not working properly due to an error then connect to one of our technicians
                                at customer service number.</p>
                            <a href="#" class="btn btn-primary">Call Technician</a>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-5 mb-3">
                    <div class="text-center pt-4">
                        <img src="assets/img/Support for the Driver.png" class="card-img-top"
                            style="border-radius: 10px;" alt="...">
                        <div class="card-body pt-4">
                            <h5 class="card-title">Support for the Driver Download & Installation</h5>
                            <p class="card-text pt-2">Finding and then installing the drivers for laptops, desktops, and
                                printers is a task that requires a lot of attention and time. But our support services
                                can make it so easy.</p>
                            <a href="{{ ('fix_scan') }}" class="btn btn-primary">Fix Scan/Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="d-flex justify-content-center align-items-center" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/slider-1.webp" class="d-block w-60 mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider-2.webp" class="d-block w-60 mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer-->
    <footer class="bg-black text-center py-4" style="padding-top: 50px;">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy;2024 HP Go Wireless Setup.</div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="fullScreenModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" style="padding-top: 100px;">
                            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                                <div class="img-container">
                                    <img src="assets/img/hp-smart-app-icon.png"
                                        style="width: 100px; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                                <div class="progress" style="width: 100px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                                <div class="img-container">
                                    <img src="assets/img/printer-working.gif" class="img-fluid" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 50px; padding-bottom: 100px;">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <h3>Please wait... Driver is installing</h32>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="js/bootstrap5.2.3/dist/js/bootstrap.bundle.min-2.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=87893531;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>

</html>
@endsection
