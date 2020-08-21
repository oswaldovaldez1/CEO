<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8? />
        @include('header')
        <style>
        
        
        @media (min-width: 320px),
@media (min-width: 375px),
@media (min-width: 425px),
@media (min-width: 768px) {
    .tr1{
        opacity:0;
        visibility: hidden !important;
    }
    .tr2{
        opacity:0;
    }
    }
@media (min-width: 1024px) {
    .tr1{
        opacity:1;
        visibility: visible !important;
    }
    .tr2{
        opacity:1;
        
    } 
    .espacios1{
        padding-top: 100px;
    }
    .lineapuntos{
        padding-top: 21px;
        padding-left: 28px;
    }
}
        
        
        
         @media (min-width: 300px) {
     .titulonosotros{   
  font-size: 57px;
  font-family: "Exo 2";
  color: transparent;
  text-transform: uppercase;
  line-height: 1.2;
  -webkit-text-fill-color: transparent;
  -webkit-text-stroke: 2px #f8304d;    
}
.subsec{
    margin-bottom: 30px;
}
.secnosotrsa{
    margin-bottom: 30px;
    margin-top: 30px;
}
  .divapp .astronauta{
    z-index: -1;
  }
  .divapp{
    z-index: -1;
  }
    }
        @media (min-width: 1024px) {
    .titulonosotros{   
  font-size: 93.75px;
  font-family: "Exo 2";
  color: transparent;
  text-transform: uppercase;
  line-height: 1.2;
  -webkit-text-fill-color: transparent;
  -webkit-text-stroke: 2px #f8304d;    
}
.subsec{
    margin-bottom: 100px;
}
.secnosotrsa{
    margin-bottom: 100px;
    margin-top: 100px;
}
    }
        
        @media (min-width: 1360px) {
    .divapp{ visibility: visible !important;}
    .divapp .astronauta{
    z-index: 1;
  }
  .divapp{
    z-index: 1;
  }
    }
    
    
    /*ceo*/
    @media (min-width: 320px) {
 .tamastro{
                height: 150px;
                margin-top: 10px;       
            }
.astro{
            position: absolute;
            right: 99px;
            /*top: 28px;*/
            z-index: 10;
        }
div.registros{        
         width: 154px;
         
        color: rgb(90, 0, 157) !important;
        position: absolute;
        padding-left: 35px;
        height: 60px;
        /*top: 70px;*/
        margin-top: 42px;
        right: 0px;
        padding-top: 16px;
        font-weight: bold;
        background-color: rgb(48, 243, 248);
        
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
}


@media (min-width: 1024px)
{
.tamastro{
                height: 0px;       
            }
            div.registros,
            .astro,
            .reg{
                opacity: 0;
            }
}
    /**/
    
    
    
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143895852-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143895852-1');
</script>
    </head>
    <body  onscroll="scrolln()" onload="scrolln()" onchange="scrolln()">
        @include('menu')
        @include('nosotros/suenios')                        
        @include('siguenos')        
        @include('astronauta')        
        @include('footer')
        <script>
        new WOW().init();
        </script>
        <script>
        function scrolln() {
          /*var elmnt =  document.body;
          var x = elmnt.scrollLeft;
          var y = elmnt.scrollTop;*/
          
          var paso=0;
          /*console.log("as "+window.pageYOffset);
          console.log(paso);*/
        
        if(window.matchMedia("(max-width: 768px)").matches) {
            var astro=document.getElementById('astronauta');
            var astronauta=document.getElementById('divapp');
            var redes=document.getElementById('redessociales');
            redes.style.visibility='hidden';
            astronauta.style.visibility='hidden';
            astro.style.opacity='0';
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
            
          }
          
          /*document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";*/
        }
        function toponentes() {
          var elmnt = document.getElementById("ponentes");
          elmnt.scrollIntoView();
        }
        </script>
        <script>
  
</script>        
    </body>
</html>
