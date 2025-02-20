@extends('layout.main')
@section('main-content')

<body>




    <style>
        /* Custom media query for desktop view */
        @media (min-width: 992px) {

            /* lg breakpoint for Bootstrap */
            .desktop-padding {
                padding-left: 40px;
            }
        }

        /* General styles */
        .form-container {
            background-color: white;
            max-width: 800px;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0 auto;
            /* Center horizontally */
        }

        .form-content {
            max-width: 500px;
            width: 100%;
            padding: 30px;
        }

        /* Responsive styles */
        @media (max-width: 767px) {
            .form-container {
                width: 100%;
                /* Full width on mobile devices */
            }

            .form-content {
                width: 100%;
                padding: 20px;
                /* Adjust padding for smaller screens */
            }
        }
    </style>

    <!-- Services -->
    <section class="py-4">
        <div class="container check-warranty-header">
            <div class="text-center" style="padding-top: 50px;">
                <h1>Check your warranty or service status</h1>
            </div>
        </div>
    </section>

    <!-- Overlapping Container -->
    <section class="py-4 warranty-section">
        <div class="container-fluid d-flex justify-content-center">
            <div class="form-container">
                <form id="warrantyForm" action="{{ ('printer_smart') }}" method="post" class="form-content">
                    <div class="mb-3 pt-4">
                        <label for="countrySelect" class="form-label" style="font-size: 16px;">Country/Region of
                            Purchase</label>
                        <select class="form-select" id="countrySelect" aria-describedby="countryHelp"
                            style="font-size: 14px;" required>

                            <option value="us">United States</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: 16px;">Serial
                            number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" style="font-size: 14px;"
                            placeholder="Example: PU265BM20V" aria-describedby="emailHelp" required>
                    </div>
                    <p style="font-size: 14px;">By completing and submitting this form you consent to the use of your
                        data in accordance with HP's Privacy statement.</p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="width: 200px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('warrantyForm').addEventListener('submit', function(event) {
        var countrySelect = document.getElementById('countrySelect').value;
        var serialNumber = document.getElementById('exampleInputEmail1').value;

        if (!countrySelect || !serialNumber) {
            event.preventDefault(); // Prevent form submission
            alert('Please select your country and enter a serial number.');
        }
    });
    </script>


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
                            <a href="fix-printer-scan.html" class="btn btn-primary">Fix Scan/Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=87893531;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>
<!-- Bootstrap core JS-->
<script src="js/bootstrap5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
            const countries = [
                "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola",
                "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia",
                "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
                "Bermuda", "Bhutan", "Bolivia", "Bonaire, Sint Eustatius and Saba",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei Darussalam",
                "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon",
                "Canada", "Cayman Islands", "Central African Republic", "Chad", "Chile",
                "China", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica",
                "Croatia", "Cuba", "Curaçao", "Cyprus", "Czech Republic", "Denmark",
                "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt",
                "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini",
                "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia",
                "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland",
                "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
                "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati",
                "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho",
                "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
                "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia",
                "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique",
                "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand",
                "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman",
                "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia",
                "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines",
                "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia",
                "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore",
                "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa",
                "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname",
                "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania",
                "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago",
                "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine",
                "United Arab Emirates", "United Kingdom", "United States", "Uruguay",
                "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam",
                "Yemen", "Zambia", "Zimbabwe"
            ];

            const countrySelect = document.getElementById("countrySelect");

            countries.forEach(country => {
                const option = document.createElement("option");
                option.textContent = country;
                countrySelect.appendChild(option);
            });
        });
</script>

</html>
@endsection
