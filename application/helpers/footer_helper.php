<?php

function retornarFooter() {
    $retFoo = ' 
    <fooder>
        <div class=".container">
            <
        
        </div>
    
 <img src="' . base_url() . '/imgs/sidecomlogo.jpg"  with="300px"    height="300px"     />   
 <span class="glyphicon glyphicon-thumbs-up"></span>
    </footer>
 ';
    //return $retFoo;

    $retFooter = '<div class="container-fluid"  id="footer">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4 ">
                    <div class="text-center">
                        <p class="texto_footer text-center">
                            Buscanos en Facebook
                        </p>
                        <div class="centrado">
                            <i class="circular big facebook sign icon "></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4">
                    <div class="text-center">
                        <p class="texto_footer">
                            Siguenos en Twitter
                        </p>
                        <div class="centrado">
                            <i class="circular big twitter sign icon"></i>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-xs-4">
                    <div class="text-center">
                        <p class="texto_footer">
                            Contactanos a nuestro correo
                        </p>
                        <div class="centrado">
                        <span class=""> <i class="circular big mail icon"></i> </span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    ';

    return $retFooter;
}
?>

