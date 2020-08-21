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
        .botonmodal{              
              font-size: 26.499px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              background-color: white; 
              border-color: #555555;
              line-height: 1.559;
              text-align: center;
              border-radius:0px;
        }
        .botonmodal:hover,.botonmodal:focus{
            color: white;
              background-color: #f8304d; 
              border-color: #f8304d;
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
        .cintillo{
            opacity: 0;
        }
        .modal-header,.modal-footer{
            border: 0px;
        }
        .imgponentes:hover .cintillo{
            background-color: rgba(110,48,170,0.6);
            opacity: 1;
        }        
        @media (min-width: 320px){
            .divapp .astronauta{
    z-index: -1;
  }
  .divapp{
    z-index: -1;
  }
            .imgponentes{
               height: 140px;
            width: 140px;
            }
            .barco{
                opacity: 0 !important;
                visibility: hidden !important;
            }
            .cintillo{
                background-color: rgba(71,71,71,0.5);
                position: absolute;
                width: 140px;
                bottom: 30px;
                height: 35%;
            }    
        }
        @media (min-width: 768px)
        {.barco{
                opacity: 1 !important;
                visibility: visible !important;
            }
            }
        @media (min-width: 1024px){
            .imgponentes{
               height: 200px;
            width: 200px;
            }    
            .cintillo{
                width: 200px;
            }
        }
        
             @media (min-width: 1360px) {
    .divapp{ visibility: visible !important;}
    .divapp .astronauta{
    z-index: 1;
    opacity: 1 !important;
  }
  .divapp{
    z-index: 1;
  }
    }
   
        
        @media (min-width: 1360px){
            .imgponentes{
               height: 240px;
            width: 240px;
            }
            .cintillo{
                width: 240px;
                height: 30%;
            }
                #redessociales{
                    visibility: visible !important;
                }
        }
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
    .modal-content {
    width: 800px;
    left: -30%;
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
        <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-143895852-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143895852-1');
</script-->
    </head>
    <body  onload="scrolln()" onchange="scrolln()" onresize="scrolln()">
        @include('menu')
        <section class="container" style="padding-bottom: 100px; padding-top: 100px; height: 900px; margin-bottom: 100px;">
            <!--object data="/pdf/horario.pdf" type="application/pdf" width="100%" height="800"></object-->
            <!--iframe src="https://drive.google.com/file/d//view?usp=sharing" width="100%" height="680px"></iframe-->
            
            <iframe src="https://docs.google.com/viewer?srcid=1SNvsKFqabXkUAhu9PTwAA6-eWBfIBkcp&pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="100%" height="680px"></iframe>
            <div style="width: 100%; padding-top:  50px; text-align: center;">
            <a class="btn botonmodal"  href="/pdf/ceo2019_horario.pdf" download>DESCARGAR</a>
            </div>
            
        </section>                        
        {{--@include('siguenos')--}}
        {{--@include('astronauta')--}}                
        @include('footer')
        <script>
        new WOW().init();
        </script>        
        <script>
        function scrolln() {
            if(window.matchMedia("(min-width: 320px)").matches){
                //cambiar
                var cam1 = document.getElementById("cam1");
                var cam2 = document.getElementById("cam2");
                /*var cam3 = document.getElementById("cam3");
                var cam4 = document.getElementById("cam4");
                var cam5 = document.getElementById("cam5");
                var des1 = document.getElementById("des1");
                var des2 = document.getElementById("des2");
                var des3 = document.getElementById("des3");
                var des4 = document.getElementById("des4");*/
                
                if ( document.getElementById( "cambiar" )) {
                    
                        cambiar=document.getElementById( "cambiar" );
                        cambiar.classList.add("col-3");
                        cambiar.classList.remove("col-sm-0");
                }
                                
                cam1.classList.add("col-sm-4");
                cam1.classList.remove("col-sm-8");
                
                cam2.classList.add("col-sm-8");
                cam2.classList.remove("col-sm-12");
                
                /*cam3.classList.add("col-sm-3");
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
                des4.classList.remove("col-sm-0");*/
            }            
            if(window.matchMedia("(min-width: 590px)").matches){              
                var cam1 = document.getElementById("cam1");
                var cam2 = document.getElementById("cam2");
                /*var cam3 = document.getElementById("cam3");
                var cam4 = document.getElementById("cam4");
                var cam5 = document.getElementById("cam5");
                var des1 = document.getElementById("des1");
                var des2 = document.getElementById("des2");
                var des3 = document.getElementById("des3");
                var des4 = document.getElementById("des4");*/                                                
                
                if ( document.getElementById( "cambiar" )) {
                        cambiar=document.getElementById( "cambiar" );
                        cambiar.classList.add("col-sm-0");
                        cambiar.classList.remove("col-3");
                }
                
                cam1.classList.remove("col-sm-4");
                cam1.classList.add("col-sm-8");
                
                cam2.classList.remove("col-sm-8");
                cam2.classList.add("col-sm-12");
                
                /*cam3.classList.remove("col-sm-3");
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
                des4.classList.remove("col-sm-1");*/
                                                       
            }
            if(window.matchMedia("(min-width: 768px)").matches){
                
                var cam1 = document.getElementById("cam1");
                var cam2 = document.getElementById("cam2");
                /*var cam3 = document.getElementById("cam3");
                var cam4 = document.getElementById("cam4");
                var cam5 = document.getElementById("cam5");
                var des1 = document.getElementById("des1");
                var des2 = document.getElementById("des2");
                var des3 = document.getElementById("des3");
                var des4 = document.getElementById("des4");*/
                                
                cam1.classList.add("col-sm-4");
                cam1.classList.remove("col-sm-8");
                
                cam2.classList.add("col-sm-8");
                cam2.classList.remove("col-sm-12");
                
                /*cam3.classList.add("col-sm-3");
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
                des4.classList.remove("col-sm-0");*/
            }
            
        }
        </script>
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  
  <script>
        function ponencias(ponencia) {
            grid = document.getElementById('cam2');
            $.ajax({

           type:'GET',

           url:'/ponentes/'+ponencia+'/'+screen.width,


           success:function(data){
            //console.log(data);
            grid.innerHTML = data.success;
            $( "div.datamodal" ).html(data.modal);    
           }
           

        }); 
            //alert(ponencia);
        }
       /* function info(ponencia,ponente) {
           
            $.ajax({

           type:'GET',

           url:'/ponentes/'+ponencia+'/'+ponente+'/'+screen.width,


           success:function(data){                               
            //info.innerHTML = data.success;
            $( "div.infomodal" ).html(data.success);
												   }
        });
        }*/
    </script>
  
         <script>
      function load() {
        scrolln();
        //alert("evento load detectado!");
        grid = document.getElementById('cam2');
        $.ajax({

           type:'GET',

           /*url:'/ponentes/magistrales/',*/
           url:'/ponentes/todo/'+screen.width,

           success:function(data){
            //console.log(data);
            grid.innerHTML = data.success;
            $( "div.datamodal" ).html(data.modal);    
           }
           

        });
        
      }
      window.onload = load;
    </script>
            
    </body>
</html>
