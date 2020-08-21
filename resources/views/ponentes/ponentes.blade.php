<!--div style="height: 50px; width: 100%; background-color: white;"></div-->
<section class="container" style="padding-bottom: 100px; padding-top: 100px;">
    <div class="row">
        <div class="col-sm-2"></div>
    <div class="col-sm-5">
    <img class="img-fluid triangulo3 wow tada" src="img/home/triangulo2.png" data-wow-duration="3s"  data-wow-offset="17"  data-wow-iteration="infinite"/>
        <p  class="titulonosotros wow fadeInUp" style="text-align: end; font-weight: bold;"  data-wow-duration="2000ms">PONENTES</p>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-7">
                <p class="wow fadeInUp" data-wow-duration="2s" style='font-family: "Exo 2";'>Conoce a los hombres y mujeres que formar&aacute;n parte de tu camino de exploraci&oacute;n, ideas, alianzas e innovaci&oacute;n.
</p>
            </div>
        </div>  
          <!--img class="img-fluid" src="img/ponentes/barco.png" style="position: relative; left: -20px; top: 140px;" /-->
          <img class="barco img-fluid wow fadeIn" data-wow-duration="2000ms" src="img/ponentes/barco.png" style="position: absolute;
    bottom: 10px;" />
    </div>
    <div class="col-sm-5">
        <img class="img-fluid wow fadeIn" data-wow-duration="2000ms" src="img/ponentes/ponentes.png" />        
    </div>    
    </div>
    <hr  style="border: 1px solid #cccccc; margin-top: 100px;" />    
    <div class="tamastro" >
            @include('astro')
        </div>
</section>

<section class="container" style="padding-bottom: 100px;">

<div id="datamodal" class="datamodal"></div>

    <div class="row">
        <div id="cam1" class="col-sm-4" style="padding-bottom: 50px;">
            <p style='
  font-size: 39.583px;
  font-family: "Exo 2";
  color: rgb(34, 34, 34);
  text-transform: uppercase;
  line-height: 1.2;
  text-align: left;
' class="wow bounceInLeft" data-wow-duration="1500ms">ENCUENTRA</p>
<div class="w-75 wow fadeInUp" data-wow-duration="2s" style="border: 1px solid grey;">
            
            <div style="border-bottom:  1px solid grey; padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" onclick="ponencias('todo')" class="sum" style='
              font-size: 15px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; TODOS            
            </a>
            </div>
            
            <div style="padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" onclick="ponencias('magistrales')" class="iodemc" style='
              font-size: 15px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; C. MAGISTRALES
            </a>
            </div>
            
            <div style="border-top: 1px solid grey; padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" onclick="ponencias('maestras')" class="anahuac" style='
              font-size: 15px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; CLASES MAESTRAS</a>
            </div>
            
            <div style="border-top: 1px solid grey; padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" onclick="ponencias('conferencias')" class="sum" style='
              font-size: 15px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; CONFERENCIAS            
            </a>
            </div>
            
            <div style="border-top: 1px solid grey; padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" onclick="ponencias('paneles')" class="sum" style='
              font-size: 15px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; PANELES            
            </a>
            </div>
            
            <div style="border-top: 1px solid grey; padding-top: 5px; padding-bottom: 5px;">
            <a href="javascript:void(0)" onclick="ponencias('talleres')" class="sum" style='
              font-size: 15px;
              font-family: "Exo 2";
              color: rgb(85, 85, 85);
              font-weight: bold;  
              line-height: 2.331;'>&nbsp;
            &gt; TALLERES            
            </a>
            </div>                                    
            </div>
        </div>
        <div class="col-sm-0"></div>
        <div id="cam2" class="col-sm-8">
        
        </div>
    </div>
    
    <div class="tamastro" >
            @include('astro')
        </div>
<!--img class="img-fluid" src="img/ponentes/puntos.png" /-->    
</section>
