<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>

        <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">

        <link href="{!! asset('theme/css/style-success.css') !!}" rel="stylesheet" type="text/css" media="all" />

        <script src="{!! asset('js/jquery-3.1.0.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>


    </head>
    <body>
        <div class="wrap">
            <div class="content">
                <div class="logo">
                    <a href="#"><h1>Sukses</h1></a>
                </div>
                <p>Terimakasih Atas Partisipasinya &#33;</p>
                @if ($answered == 1)
                <p class="ket">Untuk mengetahui faktor yang perlu dikembangkan agar E-learning UNS maju, kami memohon partisipasi anda sekalilagi untuk mengisi quesioner selanjutnya. Jika anda berminat untuk mengisi silahkan klik link berikut <a href="http://survey.uns.ac.id/elearning">http://survey.uns.ac.id/elearning</a> &#33;</p>
                @endif
                <div class="footer">                    
                    <p class="copy">&#169; 2013 Designed by<a href="http://w3layouts.com" target="_blank">&nbsp;w3layouts</a> </p>
                </div>
            </div>
        </div>
    </body>
</html>

