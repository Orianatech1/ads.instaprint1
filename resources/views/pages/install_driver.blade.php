@extends('layout.main')
@section('main-content')
<body>
    <div style="padding-top:50px;">
        <center>
            <img src="assets/img/error-image.png" style="height:60%; width:60%;" />

            <h2 style="margin-top:-15%">Please Contact Customer Support at Live Chat</h2><br>
        </center>
    </div>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=87893531;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>

</body>
</html>
@endsection
