<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body id='main'>
            <div class="col-12 col-centered">
                @if (Session::has('mensaje'))
                   <div id='mensaje_email' class="alert alert-success">{{ Session::get('mensaje') }}</div>
                @endif
            </div>




    <div class="container">
        <div class="row justify-content-center">
            <div class="logo_empresa">
                <img src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-428.svg" alt="">
            </div>
            <div class="col-11 nav_escritorio escritorio margen_50">
                <div>UNO</div>
                <div>DOS</div>
                <div>TRES</div>
                <div>CUATRO</div>
                <div>CINCO</div>
            </div>
            <div class="wrap_navegador mobil">
                <div class='navegador'>
                  <span id='abrir' >&#9776;</span>
                </div>
                <div id="mySidenav" class="sidenav">
                    <div class="logo_side">
                        <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-5338x395.svg" alt="">
                    </div>
                  <a href="javascript:void(0)" class="closebtn cerrar">&times;</a>
                  <a href="#">About</a>
                  <a href="#">Services</a>
                  <a href="#">Clients</a>
                  <a href="#">Contact</a>
                </div>
            </div>
            <div class="col-11 alineado_cent">
                <img class='pastelito' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/cupcake.png" alt="">
            </div>
        </div>
    </div>
    <div class="wrap_bloque1">
        <div class="bloque_1">
            <div class="titulo_uno">
                <h2 class='alineado_cent'>
                    Vivamus elementum
                </h2>
                <div class="linea_gris">
                </div>
            </div>
            <p class='alineado_justi'>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            </p>
        </div>
        <div class="">
            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/parallax_cheescake.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 margen_50">
                <div class="titulo_uno">
                    <h2 class="alineado_cent">
                        Vivamus elementum
                    </h2>
                    <div class="linea_gris">
                        
                    </div>
                </div>
            </div>
            <div class="col-12 margen_50">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-4 align-self-center">
                        <div class="imagen_icono">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-361x376.svg" alt="">
                        </div>
                        <p class="texto_icono alineado_justi margen_30">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
     
                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        </p>
                        <div class="wrap_conoce_mas">
                            <div class="conoce_mas">
                                CONOCE MÁS
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-4 align-self-center">
                        <div class="imagen_icono">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-2936x408.svg" alt="">
                        </div>
                        <p class="texto_icono alineado_justi margen_30">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
     
                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        </p>
                        <div class="wrap_conoce_mas">
                            <div class="conoce_mas">
                                CONOCE MÁS
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-4 align-self-center">
                        <div class="imagen_icono">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-376x376.svg" alt="">
                        </div>
                        <p class="texto_icono alineado_justi margen_30">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
     
                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        </p>
                        <div class="wrap_conoce_mas">
                            <div class="conoce_mas">
                                CONOCE MÁS
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="container" id='galeria'>
        <div class="row justify-content-center margen_50">
            <div class="col-11 col-sm-4 col-md-3">
                <label for="exampleSelect2">Categoria</label>
                <select class="form-control" id="selectCatego">

                    <option disabled selected value> Selecciona una categoria </option>
                    @foreach($categorias as $categoria)
                    <option value='{{$categoria->id}}'>{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-11 col-sm-4 col-md-3">
                <label for="exampleSelect2">Sub Categoria</label>
                <select disabled class="form-control" id="subcate">
                  <option>Selecciona una subcategoria</option>
              </select>
            </div>
            <div class="col-11 col-sm-4 col-md-3">
                <label for="exampleSelect2">Producto</label>
                <select disabled class="form-control" id="seleProdu">
                    <option disabled selected value> Selecciona un producto </option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 ">
                <div class="row cambio">
                    @foreach($categorias as $categoria)
                    <div class="col-11 col-sm-6 col-md-3 seleccion">
                        <div class='al_100'>
                            <img class="al_100" src="{{asset($categoria->imagen)}}" data-idcate="{{$categoria->id}}" class="d-block img-fluid">
                        </div>
                        <div class="">
                            <h3>{{$categoria->nombre}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- carousel  -->   
        </div>
    </div>
    <div class="contactanos alineado_cent margen_50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="wrap_contactanos">
                        <div class="texto_uno texto_contacto">
                            Contáctanos
                        </div>
                        <div class="linea_amarilla">
                            
                        </div>
                    </div>   
                </div>
                <div class="col-11 col-sm-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                    </p> 
                </div>
            </div>
        </div>


        
    </div>
    <div class="container  margen_50">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row justify-content-center">
                    @if (count($errors) > 0)
                    <div class="col-12">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }}<br> 
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @if(session()->has('message'))
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    </div>
                    @endif
                    <div class="col-12 col-centered">
                        <form method='POST' action='{{url('enviar_correo')}}'>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <input type="text" name='nombre' class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="Agregar nombre">
                                @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
                            </div>
                            <div class="form-group">
                                <input type="email" name='correo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agregar email">
                                @if ($errors->has('correo')) <p class="help-block">{{ $errors->first('correo') }}</p> @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name='contenido' id="exampleTextarea" rows="3" placeholder="Escriba su mensaje"></textarea>
                                @if ($errors->has('contenido')) <p class="help-block">{{ $errors->first('contenido') }}</p> @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn_submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div class='mapa_pastelito'>
        <div id="map">
            
        </div>
        <div class="panque">
            <img src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/cupcake302x308.png" alt="">
        </div>
    </div>
    <div class="enviar_arriba">
        <div class="volver_arriba">
            <img src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-1003x42.svg" alt="">
            <div class='btn_volver_arriba'>
                Volver arriba
            </div>
        </div>
    </div>
    <div class="footer">
        <div class='titulo_siguenos'>
            Síguenos
            <div class="linea_blanca">
                
            </div>
        </div>
        <div class='wrap_ico_social margen_20'>
            <div class='ico_social'>
                <a href="#">
                    <img class='icono_social' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-224x224.svg" alt="">
                </a>
            </div>
            <div class='ico_social'>
                <a href="#">
                    <img class='icono_social' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-224x2242.svg" alt="">
                </a>
            </div>
            <div class='ico_social'>
                <a href="#">
                    <img class='icono_social' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-224x2243.svg" alt="">
                </a>
            </div>
        </div>
        <div class='alineado_cent'>
            All rights reserved © 2017 Elebegraph.com
        </div>
    </div>


        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV5GxIotfGKptiCdhNCWqVSpI2E9m9dk&callback=initMap">
            </script>
        <script src='{{asset('js/jquery.slides.min.js')}}'></script>
        <script src='{{asset('js/main.js')}}'></script>
    </body>
</html>
