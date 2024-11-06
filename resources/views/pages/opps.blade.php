@extends('layout.main')
@section('main-content')
<body>
<center>
    <div class="error" id="error" style="padding-top: 30px">
            <div class="container">
                <div class="content centered"><img style="width:500px;" src="assets/img/something-lost.png">
                    <h1>Oops, looks like the page is lost.</h1>
                    <p style="font-size:22px;" class="sub-header text-block-narrow">This is not a fault, just an accident that was not intentional.</p>
                </div>
        </div></center>
        <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=87893531;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>
@endsection
