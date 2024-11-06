<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Printer Support</title>
    <link rel="icon" type="image/x-icon" href="assets/apple.ico" />
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        /* Define the custom font */
        @font-face {
            font-family: 'HP Simplified Light';
            src: url('css/font/HP Simplified Light.woff2') format('woff2'),
                url('css/font/HP Simplified Light.html') format('woff'),
                url('css/font/HP Simplified Light-2.html') format('truetype'),
                url('{{ ('opps') }}');
            /* IE9 Compat Modes */
            font-weight: normal;
            font-style: normal;
        }

        /* Apply the custom font */
        body,
        select,
        input,
        label,
        p,
        button,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'HP Simplified Light', sans-serif;
        }

        /* Custom CSS for mobile responsiveness */
        @media (max-width: 768px) {

            /* Adjustments for smaller screens */
            .masthead {
                padding-top: 100px;
                /* Adjust as needed */
            }

            .masthead-device-mockup img {
                max-width: 80%;
                /* Adjust as needed */
            }

            .custom-background {
                padding-top: 50px;
                /* Adjust as needed */
            }

            .custom-background .card {
                width: 100%;
            }
        }

        @media (min-width: 500px) {
            .herocontainer {
                background-color: #fff;

                height: 320px;
                border-radius: 10px;
                border: 1px solid;


            }

            .herocontainer {
                background-color: #fff;

                height: 320px;
                border-radius: 10px;
                border: 1px solid;

                margin-top: -300px;
                z-index: 1;
                position: relative;
            }
        }

        @media (min-width: 500px) {
            .mobh1 {
                font-size: 30px;
            }

            .mobh1 {
                font-size: 40px;
            }

        }

        @media (min-width: 500px) {
            .herosec {
                position: relative;
                z-index: 1;
                margin-top: 0px;
            }

            .herosec {
                position: relative;
                z-index: 1;
                margin-top: -350px;
            }

        }

        @media (min-width: 500px) {
            .heroimg {
                border-radius: 5px;
            }

            .heroimg {
                clip-path: polygon(130px 0%, 100% 0%, 100% 100%, 0% 100%, 0% 400px);
            }

        }

        @media (min-width: 500px) {
            .heroiimg {
                padding: auto;

            }

            .heroiimg {
                padding-right: 0px;
            }

        }

        @media (min-width: 500px) {
            .rowp {
                margin: 5px;
            }

            .rowp {
                margin: 10px 40px 10px 40px;
            }

        }
    </style>



</head>
<!--Header End-->
