<!DOCTYPE html>
<html>
    <head>
        <title>Survey E-learning UNS</title>

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
                                <div class="col-md-3">
                                    <div class="logo-uns">
                                        <img src="{!! asset('images/logo uns.png') !!}" width="100%" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="logo judul">
                                        <h1>Survei untuk mengetahui faktor-faktor yang mempengaruhi kesuksesan implementasi E-learning Di Universitas Sebelas Maret</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="penjelasan">
                    <div class="row">
                        <div class="col-md-9 penjelasan-left">
                            <h2>E-learning Universitas Sebelas Maret</h2>
                            @if($flag == 0)
                            <p> 
                                E-Learning UNS merupakan media pembelajaran online di Universitas Sebelas Maret Surakarta yang dikembangkan oleh Lembaga Pengembangan dan Penjaminan Mutu Pendidikan UNS. Survey ini diperuntukan kepada dosen maupun mahasiswa Universitas Sebelas Maret untuk mengetahui faktor-faktor yang harus diprioritaskan untuk diperbaiki oleh pengelola E-learning Universitas Sebelas Maret agar E-learning lebih baik dan memuaskan bagi penggunannya.<br>
                                Survei ini terdiri dari {{ $totalPage+1 }} bagian dengan total {{ $totalPage*$perPage }} pernyataan. Mohon berikan tingkat persetujuan anda terhadap setiap pernyataan berikut.
                            </p>
                            @else 
                            <p> 
                                Berikut adalah survey E-learning UNS bagian 2. Mohon berkenan untuk partisipasinya.
                                <br>
                                Survei ini terdiri dari {{ $totalPage }} bagian dengan total {{ $totalPage*$perPage }} pernyataan. Mohon berikan tingkat persetujuan anda terhadap setiap pernyataan berikut.
                            </p>
                            @endif

                        </div>
                        <div class="col-md-3 penjelasan-right" >
                            <a href="http://elearning.uns.ac.id/" target="_blank">Elearning Universitas Sebelas Maret Surakarta (http://elearning.uns.ac.id/)</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="form-content">
                    <form id="example-advanced-form" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" value="{{ $flag }}" name="flag">
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
                        @if($flag == 0)
                        <h3 class="text-nowrap">
                            <div class="catText">
                                Pertanyaan General 
                            </div>                            
                        </h3>
                        <section>
                            <div class="form-group">

                                <label class="questions">
                                    <div class="qNumber">
                                        1.
                                    </div>
                                    <div class="qText ">
                                        Apakah Anda pernah mengakses E-learning Universitas Sebelas Maret Surakarta (elearning.uns.ac.id) ?
                                    </div>                          
                                </label>
                                <div class="col-md-6">                                            
                                    <div class="radio-vertical">  
                                        <label class="radio-inline">
                                            <input type="radio" name="pertanyaan_31" value="1" required> Pernah
                                        </label>
                                    </div>
                                    <div class="radio-vertical">
                                        <label class="radio-inline">
                                            <input type="radio" name="pertanyaan_31" value="2"> Belum Pernah
                                        </label>
                                    </div>
                                   
                                </div>
                                <div class="col-md-6 vertical-error"> 
                                </div>            
                        </section>
                        @endif
                        @for($i = 0; $i< $totalPage; $i++)
                        <h3 class="text-nowrap">
                            <div class="catText">
                                <?php echo $categories[$i]->category_name; ?>
                            </div>                            
                        </h3>
                        <section>
                            @for($j = 0; $j < $perPage; $j++)
                            <?php
                            $random = rand(1, 2);
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
                                $qIndex = $questions[$index]['question_id'];
                                $name = "pertanyaan_" . $qIndex;
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
