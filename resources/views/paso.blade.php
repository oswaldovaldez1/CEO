<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        @include('header')
        <style>
        
        .rojoa{
            background-color: red !important;
        }
        @media (min-width: 320px) {
            table span{
            font-family: "Exo 2";
            font-size: 1px;
        }
        table{
            width: 1px;
            height: 1px;
        }
             .imgmapa,#imgmapa{
                visibility: visible;
            }
            .tamastro{
                height: 100px;       
            }
            .vr{
                background-color: transparent;
            }
            .mapaespacio{
                visibility: hidden;
                left:0px
            }
        div.registros{        
         width: 154px;
         
        color: rgb(90, 0, 157) !important;
        position: absolute;
        padding-left: 35px;
        height: 60px;
        top: 70px;
        right: 0px;
        padding-top: 16px;
        font-weight: bold;
        background-color: rgb(48, 243, 248);
        
        }
        .astro{
            position: absolute;
            right: 99px;
            top: 28px;
            z-index: 10;
        }
        .reg{
        color: rgb(90, 0, 157) !important;
        position: absolute;
        padding-top: 2px;
        font-weight: bold;
        font-family: "Exo 2";        
        background-color: rgb(48, 243, 248);
        text-decoration: none;
        }
        .movilastro{
            position: absolute;
            top:700px;
            right: 0px;
            visibility: visible;
        }
    }
    
    
    
    /*aqui*/
    @media (min-width: 425px) {
        #nombresalas,
        .nombresalas{
            width: 316%;
    height: 70%;
    /*background-color: #3ba6db;*/
    margin-left: -431%;
    margin-top: 207%;
        }
        .mapaespacio{
            left:0px;
            visibility: visible;
            height: 282px;
    width: 420px;
    background-color: #3f80cc;
    position: absolute;
    /*right: 261px;*/
    /*left:79px;*/
    top: 242px;    
    z-index:1;
        }
        table span{
            font-family: "Exo 2";
            font-size: 6px;
        }
        table{
            width: 100%;
        }
        .contenedor1mapa{            
        position: absolute;
        width: 334px;
        height: 106px;        
        z-index: 2;
        top: 51px;
        left: 5px;
        border: 1px solid aqua;
        }
        .espacio1{
            left: 0px;
            width: 138px;
            height: 106px;
             /*background-color: aqua;¨*/ 
            border-right: 1px solid aqua;
        }
        .espacio2{width: 193px;
            height: 106px;
             /*background-color: aqua;*/}
		.espacio3{
			 border: 1px solid aqua;
    width: 80px;
    height: 157px;
		}
        .pason,
		#pason{
			
        /*background-color: red;*/
        /*height: 92%;*/
        height: 65%;
        width: 43%;
        margin-left: 1%;
        margin-top: 2%;
        
		}
        #uno{
            background-color: #3ba6db;    
            left: 0px;
            width: 96%;
            height: 92%;
            margin-left: 4%;
            margin-top: 2%;
        }
        #uno p{
            font-family: "Exo 2";
                font-size: 24px;
                color: white;
                margin-left: 90%;
                padding-top: 48%;
        }
        #dos{
            background-color: #3ba6db;
        height: 92%;
        width: 42%;
        margin-left: 1%;
        margin-top: 2%;
        }
        #dos p{
             font-family: "Exo 2";
                font-size: 24px;
                color: white;
                margin-left: 81%;
                padding-top: 77%;
        }
        #tres{
            background-color: #3ba6db; width: 46%; height: 20%; margin-left: 2%; margin-right: 2%;
        }
        #tres p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #cuatro{
            background-color: #3ba6db;
    width: 46%;
    height: 20%;
    margin-left: 2%;
    margin-top: 3%;
        }
        #cuatro p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #cinco{
            background-color: #3ba6db;    
            left: 0px;
            width: 96%;
            height: 92%;
            margin-left: 4%;
            margin-top: 2%;
        }
        #cinco p{
            font-family: "Exo 2";
                font-size: 24px;
                color: white;
                    margin-left: 83%;
                padding-top: 39%;

        }
        #seis{
            background-color: #3ba6db;
    width: 48%;
    height: 20%;
    margin-top: 3%;
    margin-left: 2%;
        }
        #seis p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #siete{
            background-color: #3ba6db; width: 48%; height: 20%;
        }
        #siete p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #ocho{
            background-color: #3ba6db;
    width: 65%;
    height: 31%;
    margin-right: 9%;
    margin-top: 4%;
        }
        #ocho p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #nueve{
			background-color: #3ba6db;
            width: 65%;
			height: 27%;
			margin-right: 9%;
			margin-top: 5%;
        }
        #nueve p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #diez{
           width: 65%;
    height: 31%;
    margin-right: 9%;
    margin-top: 5%;
	background-color: #3ba6db;
        }
        #diez p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
        #once{
            width: 202%;
    height: 43%;
    background-color: #3ba6db;
    margin-right: 7%;
    margin-top: 15%;
        }
        #once p{
            font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
		#doce{
          width: 51%;
			height: 11%;
			background-color: #3ba6db;
			margin-right: 7%;
			margin-top: 27%;
        }
        #doce p{
             font-family: "Exo 2";
                font-size: 12px;
                color: white;
        }
    }
    
    @media (min-width: 768px) {
            .vr{
                width: 2px; 
                height: 500px; 
                background-color: black; 
                position: absolute;
                top: 50px;
            }
            table span{
            font-family: "Exo 2";
            font-size: 10px;
        }
            .mapaespacio{
                left: 28px;
            }
            .imgmapa,#imgmapa{
                visibility: hidden;
            }
            }
            
    
    @media (min-width: 1024px) {
        .tamastro{
                height: 0px;       
            }
            div.registros,
            .astro,
            .reg{
                opacity: 0;
            }
            .tamfoot{
                margin-top: 100px;
            }
            .mapaespacio {
    left: 22%;
}
    }
    @media (min-width: 1360px) {
        .imgmapa,#imgmapa{
                visibility: visible;
            }
            .mapaespacio {
    left: 78px;
}
    }
        </style>
        <style>
        .navbar-brand{
            visibility: hidden;
        }
        </style>
        <style>
        #basicSlider { position: relative; }

#basicSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 2%;
  height: auto;
}

#basicSlider .MS-content .item {
  display: inline-block;
  width: 20%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  line-height: 50px;
  vertical-align: middle;
}
@media (max-width: 991px) {

#basicSlider .MS-content .item { width: 25%; }
}
@media (max-width: 767px) {

#basicSlider .MS-content .item { width: 33.33333%; }
}
@media (max-width: 500px) {

#basicSlider .MS-content .item { width: 100%; }
}

#basicSlider .MS-content .item a {
  line-height: 50px;
  vertical-align: middle;
}

#basicSlider .MS-controls button { position: absolute; }

#basicSlider .MS-controls .MS-left {
  top: 35px;
  left: 10px;
}

#basicSlider .MS-controls .MS-right {
  top: 35px;
  right: 10px;
}
        </style>
        
    </head>
    <body  onscroll="scrolln()" onload="scrolln()" onchange="scrolln()">
    <!--section class="container centrado" style="background-image: url('img/home/bannerubicacion1.png'); max-height: 700px; background-repeat: no-repeat;"-->
    
    
    
<section class="container centrado" style="background-color: rgb(78, 0, 153); background-repeat: no-repeat;">
<!--img class="video" src="img/home/bannerubicacion.png"/-->
<div class="row">
<div class="col-sm-4" style="height: 600px;">
<div class="centroconvenciones wow fadeInDown" data-wow-duration="2s">CENTRO CULTURAL<br /> Y DE CONVENCIONES<br /> DE OAXACA</div>
<div class="direccion wow fadeInUp" data-wow-duration="2s">L&aacute;zaro C&aacute;rdenas s/n<br>Col. El Baj&iacute;o, Santa Luc&iacute;a<br>del Camino, Oaxaca.</br>C.P. 71240</div>
<img class="img-fluid" src="img/home/mapa/ubicacion.png" style="    position: absolute;
    left: 0px;
    top: 220px;"/>
<a class="btn btn-primary vermapa botonubicaciona wow flipInY" data-wow-duration="2s" style='font-family: "Exo 2";' href="javascript:void(0)" role="button" data-toggle="modal" data-target="#modalmapa1">&iquest;C&oacute;mo llegar?</a>
</div>
<div class="col-sm-8" style="height: 600px;">
<div class="vr"></div>
<div class="mapaespacio" style="
    
    
">

    <div class="float-left contenedor1mapa" style="
        
    ">
        <div  class="float-left espacio1" style="                                        
        ">
            <div id="uno" style="
            ">
            <p style='                
            '>1</p>
            </div>
        </div>
        <div class="float-right espacio2" style="                             
        ">
        <div id="dos" class="float-left" style="
        
        ">
        <p style='
                font-family: "Exo 2";
                font-size: 24px;
                color: white;
                margin-left: 81%;
                padding-top: 77%;
            '>2</p>
        </div>
        <div id="pason" class="float-left" style="    
        ">
        <div id="tres" class="float-left" style="">
        <p style='
        
                
            '>3</p>
        </div>
        <div id="siete" class="float-right" style="">
        <p style='
                
            '>7</p>
        </div>
        <div id="cuatro" class="float-left" style="">
        <p style='
                
                
            '>4</p>
        </div>
        <div id="seis" class="float-right" style="">
        <p style='
                
            '>6</p>
        </div>
        <div id="cinco" class="float-left" style="
        
        ">
        <p style='
                
                
            '>5</p>
        </div>
        </div>
        
        </div>
    </div>
    <div class="float-right espacio3" style="
    
;">
<div id="ocho" class="float-right" style="

">
        <p style='
                
                
            '>8</p>
        </div>
        
        <div id="nueve" class="float-right" style="
    
">
        <p style='
                
                
            '>9</p>
        </div>
        <div id="diez" class="float-right" style="
    
">
        <p style='
                
                
            '>10</p>
        </div>
        <div id="once" class="float-right" style="">
    <p style='
                
                
            '>11</p>
    </div>
    <div id="doce" class="float-right" style="
    
    ">
    <p style='
               
                
            '>12</p>
    </div>
<div id="nombresalas" >
    <table style=' font-family:"Exo 2"; font-size: 8px;'>
<tr>
<td>
<span id="unosala">1 Gran Sal&oacute;n Citibanamex</span>
</td><td>
<span id="sietesala">7  Zona Prensa</span>
</tr><tr>
</td><td>
<span id="dossala">2  Bazar de Emprendedores</span>
</td><td>
<span id="ochosala">8  Sala Facebook</span>

</td>
</tr><tr>
<td>
<span id="tressala">3  Zona Conecta</span>
</td><td>
<span id="nuevesala">9  Sala Emprende</span>

</td>
</tr><tr>
<td>
<span id="cuatrosala">4  Zona Interactivos</span>
</td><td>
<span id="diezsala">10  Sala Posible</span>
</td>
</tr><tr>
<td>
<span id="cincosala">5  Zona de Aliados</span>
</td><td>
<span id="oncesala">11  Zona Food Truck</span>
</td>
</tr><tr>
<td>
<span id="seissala">6  Zona Idea</span>
</td><td>
<span id="docesala">12 Sala Explora</span>
</td>
<tr>
</table>
    </div>
</div>
</div>
<div class="secciones wow zoomIn" data-wow-duration="2s"> <h3>SECCIONES</h3></div>
<img class="cubo1" src="img/home/bannerprincipal/cubo.png" />
<img class="planeta1" src="img/home/bannerprincipal/sol_azul.png"  />
<img id="imgmapa" class="img-fluid" src="img/home/mapa/mapa.png" style="position: absolute; right: 0px; top:240px; z-index: 0;"/>
<!-- -->
<div id="modalmapa1" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cierre" aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe class="framemapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15256.70594900014!2d-96.7046335!3d17.0640178!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a3aef858bcdff22!2sCentro+Cultural+y+de+Convenciones+de+Oaxaca!5e0!3m2!1ses-419!2smx!4v1561473939723!5m2!1ses-419!2smx" width="758" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>          
      <!--div class="modal-footer">
        
      </div-->
    </div>
  </div>
</div>

</div>

</div>


</section>

    <script>
        function scrolln() {
          /*var elmnt =  document.body;
          var x = elmnt.scrollLeft;
          var y = elmnt.scrollTop;*/
          
          var paso=screen.height-120;
          /*console.log("as "+window.pageYOffset);
          console.log(paso);*/
        
        if(window.matchMedia("(max-width: 768px)").matches) {
            var astro=document.getElementById('astronauta');
            var astronauta=document.getElementById('divapp');
            var redes=document.getElementById('redessociales');
            redes.style.visibility='hidden';
            astronauta.style.visibility='hidden';
            astro.style.width='1px';
            astronauta.style.width='1px';
            /*astro.style.opacity='1';*/
            /*astro.style.z-indez='-1';*/            
            return;
        }
        
          if(window.pageYOffset>=paso){
            var astronauta=document.getElementById('divapp');
            var astro=document.getElementById('astronauta');
            var redes=document.getElementById('redessociales');
            var reg=document.getElementById('registro');
            reg.style.visibility='hidden';
            
            redes.style.visibility='visible';
            astronauta.style.visibility='visible';
            astro.style.opacity='1';
             
          }
          else{
            var astro=document.getElementById('astronauta');
            var astronauta=document.getElementById('divapp');
            var redes=document.getElementById('redessociales');
            var reg=document.getElementById('registro');
            reg.style.visibility='hidden';
            redes.style.visibility='hidden';
            astronauta.style.visibility='hidden';
            astro.style.opacity='0';
            
          }
          
          /*document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";*/
        }
        function toponentes() {
          var elmnt = document.getElementById("ponentes");
          elmnt.scrollIntoView();
        }
        </script>
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

   

    
     $(".ponente1").click(function(e){
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/ponente1',           
           success:function(data){
                $( "div.infomodal" ).html(data.success);                               

           }           
        });
	}        
    );
    
    $(".ponente2").click(function(e){
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/ponente2',           
           success:function(data){
                $( "div.infomodal" ).html(data.success);                               

           }           
        });
	}        
    );
    $(".ponente3").click(function(e){
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/ponente3',           
           success:function(data){
                $( "div.infomodal" ).html(data.success);                               

           }           
        });
	}        
    );
    $(".ponente4").click(function(e){
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/ponente4',           
           success:function(data){
                $( "div.infomodal" ).html(data.success);                               

           }           
        });
	}        
    );
    
    $(".ponente5").click(function(e){
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/ponente5',           
           success:function(data){
                $( "div.infomodal" ).html(data.success);                               

           }           
        });
	}        
    );
    $(".ponente6").click(function(e){
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/ponente6',           
           success:function(data){
                $( "div.infomodal" ).html(data.success);                               

           }           
        });
	}        
    );

</script>
<script src="js/multislider.js"></script> 
  <script>
       	
    </script>        
<script>

    
 $('#basicSlider').multislider({
            duration: 750,
            continuous: false,
            interval: 3000,
            dots:true
        });
</script>
<script src="js/main.js" charset="utf-8"></script>


<style>
@media (min-width: 320px),
@media (min-width: 375px),
@media (min-width: 425px),
@media (min-width: 768px) {
    .ponentes1{
        visibility: visible !important;
        position: relative !important;  
    }
    .ponentes{
        visibility: hidden !important;
        position: absolute !important;  
    }
    .paso{
        position: absolute; visibility: hidden !important;
        
    }
    }
@media (min-width: 1024px) {
    .ponentes1{
        visibility: hidden !important;
        position: absolute !important;  
    }
    .ponentes{
        visibility: visible !important;
        position: relative !important;  
    }
    .paso{
        position: relative; visibility: visible !important;        
    }    
    .rojo{
        background-color: red !important;
    }
}
</style>
<script>
$("#unosala").hover(function () {
    
            removerclases();
            $("#uno").addClass("rojo");
        });
        $("#dossala").hover(function () {
    
            removerclases();
            $("#dos").addClass("rojo");
        });
        $("#tressala").hover(function () {
    
            removerclases();
            $("#tres").addClass("rojo");
        });
        $("#cuatrosala").hover(function () {
    
            removerclases();
            $("#cuatro").addClass("rojo");
        });
        $("#cincosala").hover(function () {
    
            removerclases();
            $("#cinco").addClass("rojo");
        });
        $("#seissala").hover(function () {
    
            removerclases();
            $("#seis").addClass("rojo");
        });
        $("#sietesala").hover(function () {
    
            removerclases();
            $("#siete").addClass("rojo");
        });
        $("#ochosala").hover(function () {
    
            removerclases();
            $("#ocho").addClass("rojo");
        });
        $("#nuevesala").hover(function () {
    
            removerclases();
            $("#nueve").addClass("rojo");
        });
        $("#diezsala").hover(function () {
    
            removerclases();
            $("#diez").addClass("rojo");
        });
        $("#oncesala").hover(function () {
    
            removerclases();
            $("#once").addClass("rojo");
        });
        $("#docesala").hover(function () {
    
            removerclases();
            $("#doce").addClass("rojo");
        });
function removerclases() {
        $("#uno").removeClass("rojo");
        $("#dos").removeClass("rojo");
        $("#tres").removeClass("rojo");
        $("#cuatro").removeClass("rojo");
        $("#cinco").removeClass("rojo");
        $("#seis").removeClass("rojo");
        $("#siete").removeClass("rojo");
        $("#ocho").removeClass("rojo");
        $("#nueve").removeClass("rojo");
        $("#diez").removeClass("rojo");
        $("#once").removeClass("rojo");
        $("#doce").removeClass("rojo");

    }
</script>             
    </body>
</html>
