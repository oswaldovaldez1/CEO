<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        @include('header')
        <style>
        @media (min-width: 320px) {
            .tamastro{
                height: 130px;       
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
        }
    }
    @media (min-width: 768px) {
    .ocultame{
        position:absolute;
    }
    }
    @media (min-width: 1024px) {
        .ocultame{
        position:relative;
    }
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

#basicSlider .MS-content .item { width: 90%; }
}
@media (max-width: 767px) {

#basicSlider .MS-content .item { width: 90%; }
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
    <body  onscroll="scrolln()" onload="" onresize="scrolln()" >
        @include('borrame')                        
        @include('footer')      
        <script>
        function scrolln() {
          /*var elmnt =  document.body;
          var x = elmnt.scrollLeft;
          var y = elmnt.scrollTop;*/
          
          var paso=screen.height-120;
          /*console.log("as "+window.pageYOffset);
          console.log(paso);*/
          if(window.matchMedia("(min-width: 1360px)").matches){
			 
			 var pones1 = document.getElementById("pones1");
             var pones2 = document.getElementById("pones2");
             var pones3 = document.getElementById("pones3");
             var pones4 = document.getElementById("pones4");
             var contponene= document.getElementById('contponene');
             pones1.classList.remove("col-sm-12");
             pones1.classList.add("col-md-3");
             
			 pones3.classList.add("col-md-8");
             pones3.classList.remove("col-sm-10");
             contponene.innerHTML="Para emprender es necesario escuchar a los mejores;<br> en Encuentro CEO 2019,<br>conoce a hombres y mujeres <br>que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n."
             /*
             Para emprender es necesario escuchar a los mejores;<br> en Encuentro CEO 2019,<br>conoce a hombres y mujeres <br>que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n. 
             */
			 //contponene
             /*
             var titulo = document.getElementById("titulo1");
				titulo.classList.add("col-sm-4");
				titulo.classList.remove("col-md-12");
             */
			}
        else if(window.matchMedia("(min-width: 1024px)").matches){
			 
			 var pones1 = document.getElementById("pones1");
             var pones2 = document.getElementById("pones2");
             var pones3 = document.getElementById("pones3");
             var pones4 = document.getElementById("pones4");
             var contponene= document.getElementById('contponene');
             pones1.classList.remove("col-md-3");
             pones1.classList.add("col-sm-12");
			 pones3.classList.remove("col-md-8");
             pones3.classList.add("col-sm-10");
             contponene.innerHTML="Para emprender es necesario escuchar a los mejores; en Encuentro CEO 2019, conoce a hombres y mujeres que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n."
             /*
             Para emprender es necesario escuchar a los mejores;<br> en Encuentro CEO 2019,<br>conoce a hombres y mujeres <br>que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n. 
             */
			 //contponene
             /*
             var titulo = document.getElementById("titulo1");
				titulo.classList.add("col-sm-4");
				titulo.classList.remove("col-md-12");
             */
			}
            else if(window.matchMedia("(min-width: 768px)").matches){
			 
			 var pones1 = document.getElementById("pones1");
             var pones2 = document.getElementById("pones2");
             var pones3 = document.getElementById("pones3");
             var pones4 = document.getElementById("pones4");
             var contponene= document.getElementById('contponene');
             pones1.classList.remove("col-sm-12");
             pones1.classList.add("col-md-3");
             
			 pones3.classList.add("col-md-8");
             pones3.classList.remove("col-sm-10");
             contponene.innerHTML="Para emprender es necesario escuchar a los mejores;<br> en Encuentro CEO 2019,<br>conoce a hombres y mujeres <br>que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n."             
			}
            if(window.matchMedia("(max-width: 768px)").matches) {
                //alert("ggg");
            }
         /*if(window.matchMedia("(max-width: 768px)").matches) {
            var astro=document.getElementById('astronauta');
            var astronauta=document.getElementById('divapp');
            var redes=document.getElementById('redessociales');
            redes.style.visibility='hidden';
            astronauta.style.visibility='hidden';
            astro.style.width='1px';
            astronauta.style.width='1px';
            /*astro.style.opacity='1';*/
            /*astro.style.z-indez='-1';            
            return;
        }
        
          if(window.pageYOffset>=paso){
            var astronauta=document.getElementById('divapp');
            var astro=document.getElementById('astronauta');
            var redes=document.getElementById('redessociales');                        
            redes.style.visibility='visible';
            astronauta.style.visibility='visible';
            astro.style.opacity='1';
             
          }
          else{
            var astro=document.getElementById('astronauta');
            var astronauta=document.getElementById('divapp');
            var redes=document.getElementById('redessociales');            
            redes.style.visibility='hidden';
            astronauta.style.visibility='hidden';
            astro.style.opacity='0';
            
          }*/
          
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
        
        
        
 /*function resize(){
            if(window.matchMedia("(min-width: 1360px)").matches){
                
            }
			if(window.matchMedia("(min-width: 1024px)").matches){
			 alert("hqw");
			 var pones1 = document.getElementById("pones1");
             var pones2 = document.getElementById("pones2");
             var pones3 = document.getElementById("pones3");
             var pones4 = document.getElementById("pones4");
             var contponene= document.getElementById('contponene');
             
             pones1.classList.add("col-sm-3");
			 pones1.classList.remove("col-md-12");
             //contponene.innerHTML="Para emprender es necesario escuchar a los mejores; en Encuentro CEO 2019, conoce a hombres y mujeres que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n."
             /*
             Para emprender es necesario escuchar a los mejores;<br> en Encuentro CEO 2019,<br>conoce a hombres y mujeres <br>que han recorrido con &eacute;xito un camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n. 
             */
			 //contponene
             /*
             var titulo = document.getElementById("titulo1");
				titulo.classList.add("col-sm-4");
				titulo.classList.remove("col-md-12");
             --/
			}
            
            if(window.matchMedia("(min-width: 768px)").matches){}
            }
            
            if(window.matchMedia("(min-width: 320px)").matches){}
            }
            
            }
            
 window.onload = function() {			
			if(window.matchMedia("(min-width: 1024px)").matches){
			 alert("666");
             
			}
            
            }*/       
</script>
<!--script src="js/main.js" charset="utf-8"></script-->


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
}
</style>             
    </body>
</html>
