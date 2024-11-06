@extends('layout.main')
@section('main-content')
<body>
    <!-- How to -->
    <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">How to Print</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">How to Scan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">How to Fax</a>
            </li>
        </ul>

        <div class="tab-content py-4 " id="myTabContent">

            <!-- Content-1 -->
            <div class="container px-5 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row ">
                    <div class="col-lg-4 mb-5">
                        <!-- Feature item-->
                        <div >
                            <img src="assets/img/u1223.avif" width="300px">
                        </div>
                    </div>
                    <div class="col-lg-8 mb-5">
                        <!-- Feature item-->
                        <div>
                            <h2 style="font-weight: 100;">How to Print</h2>
                            <p>You can learn how to print from a USB or wirelessly-connected HP printer by following the steps below.</p>
                            <ol>
                                <li>Select the file you want to print and open the file so it appears on your computer screen.</li>
                                <li>Press the Ctrl and P buttons on your keyboard at the same time.</li>
                                <li>Once the printing pop-up menu appears on your computer screen, select the printer you intend to send the job to.</li>
                                <ul>
                                    <li>If the printer is not connected, get help setting it up through the <a href="#">Technical Assitance</a>.</li>
                                    <li>For wireless printer setup and connection, get help <a href="#">Technical Support</a>.</li>
                                </ul>
                                <li>If needed, modify your print settings. This step is optional.</li>
                                <li>Click the Print button on screen to send the job into the printer print queue and wait for the job to complete.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content-2 -->
            <div class="container px-5 tab-pane fade show " id="profile" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <!-- Feature item-->
                        <div >
                            <img src="assets/img/u1623.avif" width="300px">
                        </div>
                    </div>
                    <div class="col-lg-8 mb-5">
                        <!-- Feature item-->
                        <div>
                            <h2 style="font-weight: 100;">How to Scan on a Windows Computer</h2>
                            <p>You can learn how to scan documents or photos from a USB or wirelessly-connected multifunction HP printer to a Windows computer by using the steps below.</p>
                            <ol>
                                <li>Software is required to scan a document. Make sure the latest Full Feature Software and Drivers for the printer is downloaded and installed. Start by going to Customer Support <a href="{{ ('printer_smart') }}">Software and Driver Downloads</a> </li>
                                <li>Load the item on the scanner glass or in the automatic document feeder (ADF), depending on your printer type and features.</li>
                                <li>Depending on the printer, open HP Scan (printers released 2011 and later) or HP Solution Center (printers released 2010 and earlier).</li>
                                <ul>
                                    <li>Open <a href="#">HP Solution Center software</a> and follow the on-screen prompts to scan.</li>
                                </ul>
                                <li>Scan the file and save to the desired destination on the computer.</li>
                                <ul>
                                    <li>In HP Scan you can change the scan destination folder by clicking on Advanced Settings or More.</li>
                                    <li>In HP Solution Center you can change the scan destination folder by clicking on Save to File Save Options.</li>
                                </ul>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Content-3 -->
            <div class="container px-5 tab-pane fade show " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <!-- Feature item-->
                        <div >
                            <img src="assets/img/u2169.avif" width="300px">
                        </div>
                    </div>
                    <div class="col-lg-8 mb-5">
                        <!-- Feature item-->
                        <div>
                            <h2 style="font-weight: 100;">HP Printers - Sending and receiving fax</h2>
                            <p>You can learn how to fax from a fax-enabled HP printer by following the steps below.</p>
                            <ol>
                                <li>Ensure the printer is connected and set up properly.</li>
                                <li>Load the sheets you are intending to fax into the input tray and adjust the width guides so that they rest against the edges of the paper. The printer should indicate whether the printed side of the page(s) should face up or down.</li>
                                <li>For multifunction HP printers, there may be an option to select Fax. Complete this step before moving on.</li>
                                <li>If needed, modify the fax settings. This step is optional.</li>
                                <li>Dial the fax number you are wanting to send the fax to. Be sure to include any dial codes and extensions necessary to route the call correctly.</li>
                                <li>Press Start, Send, Go, or a start fax-equivalent button.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="pt-4" style="background: #f7f7f7;">
        <div class="container px-5">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <!-- Feature item-->
                    <div >
                        <img src="assets/img/print-error.avif" width="300px">
                    </div>
                </div>
                <div class="col-lg-8 mb-5">
                    <!-- Feature item-->
                    <div>
                        <h2 style="font-weight: 400;">Facing problem with your printer?</h2>
                        <h4 style="font-weight: 400;">HP Virtual Agent</h4>
                        <p style="font-weight: 100;">Use our HP’s automated Virtual Agent to try and find a resolution for your issue.</p>
                        <button onclick="javascript:void(jivo_api.open());" class="btn btn-primary jivoButton mt-3 btn-block">Chat with Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/4.5.2/js/bootstrap.min.js"></script>



<!-- Bootstrap core JS-->
<script src="js/bootstrap5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=87893531;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>
</html>
@endsection
