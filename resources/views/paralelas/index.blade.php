<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8? />
        @include('header')
        <style>
        
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
   
        .data{
            width: 200px;
            right: 0px;
        }        
        
        @media (min-width: 320px),
@media (min-width: 375px),
@media (min-width: 425px),
@media (min-width: 768px) {
    .divapp .astronauta{
    z-index: -1;
  }
  .divapp{
    z-index: -1;
  }
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
        
       @media (min-width: 1360px) {
    .divapp{ visibility: visible !important;    
    }
    .divapp .astronauta{
    z-index: 1;
  }
  .divapp{
    z-index: 1;
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
        
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143895852-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143895852-1');
</script>
    </head>
    <body  onload="scrolln()" onchange="scrolln()" onresize="scrolln()">
    @include('menu')
        @include('paralelas/paralelas')

        @include('modal')                                
        @include('siguenos')                
        @include('footer')
        <script>
        new WOW().init();
        </script>        
        <script>
        function scrolln() {
            //alert('waldo');
            
            $("#exampleModalCenter").modal("show");
            
            if(window.matchMedia("(min-width: 320px)").matches){
                var cam1 = document.getElementById("cam1");
                var cam2 = document.getElementById("cam2");
                var cam3 = document.getElementById("cam3");
                var cam4 = document.getElementById("cam4");
                var cam5 = document.getElementById("cam5");
                var des1 = document.getElementById("des1");
                var des2 = document.getElementById("des2");
                var des3 = document.getElementById("des3");
                var des4 = document.getElementById("des4");
                var imagenpara=document.getElementById("imagenpara");
                var imagenpara2=document.getElementById("imagenpara2");
                var cubo=document.getElementById("cubo");
                var piso=document.getElementById("piso");
                var planeta=document.getElementById("planeta");
                
                cubo.style.opacity="0";
                
                piso.style.opacity="0";
                planeta.style.opacity="1";
                cubo.style.position="absolute";
                piso.style.position="absolute";
                planeta.style.top="-89vh";                
                planeta.classList.add("data");
                                
                imagenpara.style.position="absolute";
                imagenpara.style.opacity="0";
                imagenpara2.style.position="initial";
                imagenpara2.style.opacity="1";
                
                cam1.classList.add("col-sm-3");
                cam1.classList.remove("col-sm-6");
                
                cam2.classList.add("col-sm-3");
                cam2.classList.remove("col-sm-6");
                
                cam3.classList.add("col-sm-3");
                cam3.classList.remove("col-sm-6");
                
                cam4.classList.remove("col-sm-12");
                cam4.classList.add("col-sm-7");
                
                cam5.classList.remove("col-sm-8");
                cam5.classList.add("col-sm-7");
                
                des1.classList.add("col-sm-2");
                des1.classList.remove("col-sm-0");
                
                des2.classList.add("col-sm-0");
                des2.classList.remove("col-sm-1");
                
                des3.classList.add("col-sm-0");
                des3.classList.remove("col-sm-4");
            }
            if(window.matchMedia("(min-width: 579px)").matches){
              //alert('waldo2');
                //imagenpara
                var cam1 = document.getElementById("cam1");
                var cam2 = document.getElementById("cam2");
                var cam3 = document.getElementById("cam3");
                var cam4 = document.getElementById("cam4");
                var cam5 = document.getElementById("cam5");
                var des1 = document.getElementById("des1");
                var des2 = document.getElementById("des2");
                var des3 = document.getElementById("des3");
                var des4 = document.getElementById("des4");
                var imagenpara=document.getElementById("imagenpara");
                var imagenpara2=document.getElementById("imagenpara2");
                var cubo=document.getElementById("cubo");
                var piso=document.getElementById("piso");
                var planeta=document.getElementById("planeta");
                
                cubo.style.opacity="0";
                piso.style.opacity="0";
                cubo.style.position="initial";
                piso.style.position="initial";
                
                planeta.style.opacity="1";
                planeta.style.top="-50px";
                planeta.classList.remove("data");
                
                imagenpara.style.position="initial";
                imagenpara.style.opacity="1";
                
                imagenpara2.style.position="absolute";
                imagenpara2.style.opacity="0";
                imagenpara2.style.bottom="0";
                
                cam1.classList.remove("col-sm-3");
                cam1.classList.add("col-sm-6");
                
                cam2.classList.remove("col-sm-3");
                cam2.classList.add("col-sm-6");
                
                cam3.classList.remove("col-sm-3");
                cam3.classList.add("col-sm-6");
                
                cam4.classList.remove("col-sm-7");
                cam4.classList.add("col-sm-12");
                
                cam5.classList.remove("col-sm-7");
                cam5.classList.add("col-sm-8");
                
                des1.classList.remove("col-sm-2");
                des1.classList.add("col-sm-0");
                
                des2.classList.remove("col-sm-1");
                des2.classList.add("col-sm-0");            
                
                des3.classList.add("col-sm-4");
                des3.classList.remove("col-sm-0");
                
                des4.classList.add("col-sm-0");
                des4.classList.remove("col-sm-1");
                                                       
            }
            if(window.matchMedia("(min-width: 1024px)").matches){
                
                var cam1 = document.getElementById("cam1");
                var cam2 = document.getElementById("cam2");
                var cam3 = document.getElementById("cam3");
                var cam4 = document.getElementById("cam4");
                var cam5 = document.getElementById("cam5");
                var des1 = document.getElementById("des1");
                var des2 = document.getElementById("des2");
                var des3 = document.getElementById("des3");
                var des4 = document.getElementById("des4");
                var imagenpara=document.getElementById("imagenpara");
                var cubo=document.getElementById("cubo");
                var piso=document.getElementById("piso");
                var planeta=document.getElementById("planeta");
                

                cubo.style.opacity="1";
                piso.style.opacity="1";
                planeta.style.top="-109px";
                //alert("waldo");
                
                imagenpara.style.position="absolute";
                imagenpara.style.opacity="1";
                
                cam1.classList.add("col-sm-3");
                cam1.classList.remove("col-sm-6");
                
                cam2.classList.add("col-sm-3");
                cam2.classList.remove("col-sm-6");
                
                cam3.classList.add("col-sm-3");
                cam3.classList.remove("col-sm-6");
                
                cam4.classList.remove("col-sm-12");
                cam4.classList.add("col-sm-7");
                
                cam5.classList.remove("col-sm-8");
                cam5.classList.add("col-sm-7");
                
                des1.classList.add("col-sm-2");
                des1.classList.remove("col-sm-0");
                
                des2.classList.add("col-sm-1");
                des2.classList.remove("col-sm-0");
                
                des3.classList.add("col-sm-4");
                des3.classList.remove("col-sm-0");
                
                des4.classList.add("col-sm-1");
                des4.classList.remove("col-sm-0");
            }
            
        }
        </script>              
    </body>
</html>
