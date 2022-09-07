<?php

function listarArchivosSwiper( $ruta, $clave, $movies, $x){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != ".." && $archivo != "new") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    listarArchivos($ruta_completa, $clave);
                } else {
                  if (substr($archivo, -4) == '.mp4' or substr($archivo, -4) == '.mkv' or substr($archivo, -4) == '.avi'){
                    $name = explode("Resident Evil1",$archivo);
                    $type = explode("/",$ruta)[1];

                    $title = trim(strtolower(explode(".",$name[sizeof($name) - 1])[0]));
                    $img = is_file( $ruta.$title.'.jpg' ) ? $ruta.$title.'.jpg' : IMG_POSTER;

                    if($type == 'movies' || $type == 'series'){
                        $x++;
                        $id = explode("/",$archivo);
                        $title = str_replace(' ', '',strtolower(explode(".",$name[sizeof($name) - 1])[0]));

                        echo '<div class="swiper-slide filter '.$title.' '.$title[0].'">';

                        echo '<span class="chip badge rounded-pill bg-dark">'.explode(".",$name[sizeof($name) - 1])[0].'</span>
                        <a href="open.php?name='.$archivo.'">
                            <img src="'.$img.'" class="card-img" style="border-radius: 21px;" alt="...">
                        </a>
                        </div>';
                    }else{
                        echo '<div class="swiper-slide filter '.$clave.'">';

                        echo '<span class="chip badge rounded-pill bg-dark">'.explode(".",$name[sizeof($name) - 1])[0].'</span>
                        <a href="open.php?name='.$archivo.'">
                            <img src="'.$img.'." class="card-img" style="border-radius: 21px;" alt="...">
                        </a>
                        </div>';
                    }
                    
                  
                  }

                }
            }
            
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
    } else {
        echo "";
    }
    return $x;
}

function menu($bg, $type, $shadow,$logo){

    if ($shadow == true) $shadow = "border-bottom shadow-sm";
    
    switch($logo){
        case "logo":
            $logo = '<img src="img/logo.svg" width="38" height="30" class="me-3" alt="Bootstrap">';
            break;
        case "name";
            $logo = '<a class="navbar-brand text-white" href="./">'.SITE_NAME.'</a>';
            break;
        case "both":
            $logo = '<a class="navbar-brand text-white" href="./">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
          </svg> '.SITE_NAME.'</a>';
            break;
    }

    switch($type){
        case "media":
            echo '<nav class="navbar navbar-expand-lg fixed '.$shadow.'" style="color: white; border-radius: 25px; background-color: rgba(0, 0, 0, .5); webkit-backdrop-filter: saturate(180%) blur(10px); backdrop-filter: saturate(180%) blur(1px);" aria-label="Tenth navbar example">
                <div class="container-fluid">
                '.$logo.'  
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white filter-button" href="./" data-filter="all">Hello</a>
                        </li>
                        <li class="nav-item">
                            <!--<span class="badge rounded-pill bg-dark">-->
                                <a class="nav-link text-white filter-button" href="#" id="date">
                                
                                </a>
                            <!--</span>-->
                        </li>
                        <li class="nav-item">
                            <!--<span class="badge rounded-pill bg-dark">-->
                                <a class="nav-link text-white filter-button" href="#">
                                        <div id="clockdate">
                                            <div class="clockdate-wrapper">
                                            <div id="clock_time">
                                                <span id="clock"></span><span id="sec"></span>
                                            </div>
                                            </div>
                                        </div>
                                </a>
                            <!--</span>-->
                        </li>
                    </ul>
                </div>
                </div>
            </nav>';
        break;
    }
}



?>