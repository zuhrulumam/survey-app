<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">

        <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('js/jquery.wizard/jquery.steps.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('js/bootstrap.slider/bootstrap-slider.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('theme/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
        <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />

        <script src="{!! asset('js/jquery-3.1.0.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>


    </head>
    <body>
        <div class="content">

            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="logo-uns">
                                        <img src="{!! asset('images/logo uns.png') !!}" width="50%">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="logo-informatika">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="logo judul">
                                <h1>Survei mengenai faktor-faktor yang mempengaruhi kesuksesan Elearning Di Universitas sebelas maret</h1>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12 map-content-left">
                            <form id="example-advanced-form" method="POST">
                                {!! csrf_field() !!}
                                <?php
                                $index = 0;
                                ?>
                                @for($i = 0; $i< $totalPage; $i++)
                                <h3>Iframe Step <span class="glyphicon glyphicon-ok-circle"> </span></h3>
                                <section>
                                    @for($j = 0; $j < $perPage; $j++)
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo ($questions[$index]['question_text']); ?></label>
                                        <input id="ex19" name="kolom3" type="text"
                                               data-provide="slider"
                                               data-slider-ticks="[1, 2, 3, 4, 5]"
                                               data-slider-ticks-labels='["Sangat Tidak Penting", "Tidak Penting", "Normal", "Penting", "Sangat Penting"]'
                                               data-slider-min="1"
                                               data-slider-max="5"
                                               data-slider-step="1"
                                               data-slider-value="3" />
                                    </div>
                                    <?php $index++; ?>
                                    @endfor
                                </section>

                                @endfor
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="copy-right">
            <div class="container">
                <p>Copyright &copy; 2015 Unique Design UI Kit. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
            </div>
        </div>
        <!-- //footer -->

        <script src="{!! asset('js/jquery.wizard/jquery.steps.min.js') !!}"></script>
        <script src="{!! asset('js/jquery.validate/jquery.validate.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.slider/bootstrap-slider.min.js') !!}"></script>
        <script src="{!! asset('js/jquery.wizard/steps.js') !!}"></script>
        <script>
                    $("#ex19").slider({
            tooltip: 'always',
//        ticks_labels: ['$0', '$100', '$200', '$300', '$400'],
            });
        </script>
    </body>
</html>
