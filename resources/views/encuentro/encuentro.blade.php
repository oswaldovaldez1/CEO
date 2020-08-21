<section class="container" id="contenedorencuentro" >
    <div class="row">
        <div class="col-sm-4">
            <img class="img-fluid cubomedidas wow " data-wow-duration="1500ms" src="img/nosotros/cubo.png"/>
        </div>
        <div class="col-sm-3">
            <p class="titulo_encuentro wow fadeInUp" data-wow-duration="1500ms" >EJES</p>
            <p class="subtitulo_encuentro wow fadeInUp" data-wow-duration="1500ms" >Principales</p>
            <p class="textoencuentro wow fadeInUp" data-wow-duration="2s" >El mundo del emprendimiento se transforma constantemente y por ello, en CEO apostamos por dos temas que est&aacute;n dando mucho de qu&eacute; hablar. Aqu&iacute; te compartimos un poco acerca de ellos.</p>
        </div>
        <div class="col-sm-3">
            <p class="edicion2019 wow fadeInUp" data-wow-duration="1500ms">Edici&oacute;n<br />2019</p>
        </div>
        <div class="col-sm-2">
        <img class="img-fluid planetaencuentro wow " data-wow-duration="1500ms" src="img/nosotros/planeta.png"/>
        <img class="img-fluid astronautaencuentro wow " data-wow-duration="1500ms" src="img/nosotros/astronauta.png"/>
        </div>
    </div>
    <img class="img-fluid" src="img/nosotros/nubes.png"/>
    <hr class="hr_encientro2"/>
    <div class="tamastro" >
            @include('astro')
        </div>
</section>

<section class="container sec2encuentro">
    <div class="row">
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="2000ms" style="padding-bottom: 40px;">
            <div class="w-75" style="border: 1px solid grey;">
            <div style="padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" class="naranja" style='
              font-size: 16px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; ECONOM&Iacute;A NARANJA
            </a>
            </div>
            <div style="border-top: 1px solid grey; padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" class="social" style='
              font-size: 16px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; ECONOM&Iacute;A SOCIAL</a>
            </div>
            </div>

        </div>
        <div class="col-sm-4 imgrem" style="padding-bottom: 30px;">
            <img class="img-fluid wow fadeIn" data-wow-duration="2000ms" src="img/encuentro/naranja.png"/>            
        </div>        
        <div class="col-sm-4 textos_encuentro wow fadeInUp" data-wow-duration="2000ms" id="textoencuentro">
           <p class="titulo2encuentro">ECONOM&Iacute;A NARANJA</p>
        <hr class="hr_encientro" />
        
<p class="subtitulo2encuentro">La econom&iacute;a creativa, herencia cultural de la regi&oacute;n.</p> 
<p class="texto2encuentro">Es el conjunto de actividades que de manera encadenada permiten que las ideas se transformen en bienes y servicios culturales, cuyo valor est&aacute; determinado por su contenido de propiedad intelectual. El universo naranja est&aacute; compuesto por:</p>
<ul class="texto2encuentro"> 
    <li>La Econom&iacute;a Cultural y las Industrias Creativas, en cuya intersecci&oacute;n se encuentran las Industrias Culturales Convencionales.</li>
    <li>Las &aacute;reas de soporte para la creatividad.</li>
</ul>
</p>
<em><p class="fuente_encuentro">Buitrago F. y Duque I. (2013). La econom&iacute;a naranja: una oportunidad infinita. Bogot&aacute;, Colombia: Editorial Puntoaparte</p></em>           
        
        </div>
    </div>    
    <div class="tamastro" >
            @include('astro')
        </div>
</section>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript">

   

    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }        

    });

   

    $(".naranja").click(function(e){

        

        e.preventDefault();

   

   

        $.ajax({

           type:'POST',

           url:'/economianaranja',

           //data:{name:name, password:password, email:email},

           success:function(data){
                $( "div.textos_encuentro" ).html(data.success);
                $( "div.imgrem" ).html('<img class="img-fluid" src="img/encuentro/naranja.png"/>');
                
                /*$([document.documentElement, document.body]).animate({
                    scrollTop: $("#textoencuentro").offset().top
                }, 2000);*/
              /*alert(data.success);*/

           }
           

        });

  

	}
    
    
    
    );
    
     $(".social").click(function(e){

        

        e.preventDefault();

   

   

        $.ajax({

           type:'POST',

           url:'/economiasocial',

           //data:{name:name, password:password, email:email},

           success:function(data){
                $( "div.textos_encuentro" ).html(data.success);
                $( "div.imgrem" ).html('<img class="img-fluid" src="img/encuentro/social.png"/>');
                 /*$([document.documentElement, document.body]).animate({
                    scrollTop: $("#textoencuentro").offset().top
                }, 2000);*/
              /*alert(data.success);*/

           }
           

        });

  

	}
    
    
    
    );

</script>