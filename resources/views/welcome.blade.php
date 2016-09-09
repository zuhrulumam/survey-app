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

                <div class="degrees">
                    <div class="degree-left">
                        <h2>E-learning Universitas Sebelas Maret</h2>
                        <p> 
                            E-Learning UNS merupakan media pembelajaran online di Universitas Sebelas Maret Surakarta yang dikembangkan oleh Lembaga Pengembangan dan Penjaminan Mutu Pendidikan UNS. E-learning UNS memerlukan beberapa pengembagan agar dapat dinilai sukses oleh para penggunanya. Oleh karena itu survey ini diperuntukan kepada dosen maupun mahasiswa Universitas Sebelas Maret guna mengetahui faktor-faktor yang harus dikembangkan oleh Universitas Sebelas Maret agar E-learning lebih sukses daripada yang sekarang
                        <p>
                    </div>
                    <div class="degree-right">
                        <a href="http://elearning.uns.ac.id/" target="_blank">Elearning Universitas Sebelas Maret Surakarta (http://elearning.uns.ac.id/)</a>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="form-content">
                    <form id="example-advanced-form" method="POST">
                        {!! csrf_field() !!}
                        <?php
                        $index = 0;
                        $name = "";
                        $input = [
                            0 => '<input id="ex19" name="' . $name . '"  type="text" data-provide="slider"
                                               data-slider-ticks="[1, 2, 3, 4, 5]"
                                               data-slider-ticks-labels=\'["Sangat Tidak Setuju", "Tidak Setuju", "Normal", "Setuju", "Sangat Setuju"]\'
                                               data-slider-min="1"
                                               data-slider-max="5"
                                               data-slider-step="1"
                                               data-slider-value="3"/> ',
                            1 => 'type="radio" value="male" checked'
                        ];
                        ?>
                        @for($i = 0; $i< $totalPage; $i++)
                        <h3 class="text-nowrap">
                            <div class="catText">

                                <?php echo $categories[$i]->category_name; ?>

                            </div>                            
                        </h3>
                        <section>
                            @for($j = 0; $j < $perPage; $j++)
                            <?php
                            $random = rand(0, 2);
                            ?>
                            <div class="form-group">

                                <label class="questions">
                                    <div class="qNumber">
                                        <?php echo ($index + 1) . '. ' ?>
                                    </div>
                                    <div class="qText ">
                                        <?php echo ($questions[$index]['question_text']); ?>
                                    </div>                          

                                </label>
                                <?php
                                $name = "pertanyaan_" . $index;
                                if ($random == 0) {
                                    echo '<input id="ex19" name="' . $name . '"  type="text" data-provide="slider"
                                               data-slider-ticks="[1, 2, 3, 4, 5]"
                                               data-slider-ticks-labels=\'["Sangat Tidak Setuju", "Tidak Setuju", "Normal", "Setuju", "Sangat Setuju"]\'
                                               data-slider-min="1"
                                               data-slider-max="5"
                                               data-slider-step="1"
                                               data-slider-value="3"/> ';
                                } else if ($random == 1) {
                                    $return = <<<EOF
<div class="col-md-6">                                            
    <div class="radio-vertical">  
    <label class="radio-inline">
      <input type="radio" name=$name value="1" required> Sangat Tidak Setuju
    </label>
    </div>
    <div class="radio-vertical">
    <label class="radio-inline">
      <input type="radio" name=$name value="2"> Tidak Setuju
    </label>
    </div>
    <div class="radio-vertical">
    <label class="radio-inline">
      <input type="radio" name=$name value="3"> Normal
    </label>
    </div>
    <div class="radio-vertical">
    <label class="radio-inline">
      <input type="radio" name=$name  value="4"> Setuju
    </label>
    </div>
    <div class="radio-vertical">
    <label class="radio-inline">
      <input type="radio" name=$name  value="5"> Sangat Setuju
    </label>
    </div>
</div>
<div class="col-md-6 vertical-error"> 
</div>                                            
EOF;
                                    echo $return;
                                } else if ($random == 2) {
                                    $return = <<<EOF
<div class="col-md-12">                                             
    <label class="radio-inline">
      <input type="radio" name=$name value="1" required> Sangat Tidak Setuju
    </label>

    <label class="radio-inline">
      <input type="radio" name=$name value="2"> Tidak Setuju
    </label>

    <label class="radio-inline">
      <input type="radio" name=$name value="3"> Normal
    </label>

    <label class="radio-inline">
      <input type="radio" name=$name  value="4"> Setuju
    </label>

    <label class="radio-inline">
      <input type="radio" name=$name  value="5"> Sangat Setuju
    </label>
</div>                                              
<div class="col-md-12 horizontal-error"> 
</div>                                            
EOF;
                                    echo $return;
                                }
                                ?>
                            </div>
                            <?php $index++; ?>
                            @endfor
                        </section>

                        @endfor
                    </form>
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
