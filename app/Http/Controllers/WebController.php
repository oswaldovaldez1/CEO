<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class WebController extends Controller
{
    
    public function ponente1(){
        $susses='
        <div class="col-sm-4" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/home/ponentes/P_01.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 9px;">Fundadora y Presidenta, Crea Comunidades de Emprendedores Sociales</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">
                                <a href="https://twitter.com/ljauregui?lang=es" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>
                                <a href="https://mx.linkedin.com/in/leticiajauregui" target="_blank"><img  src="img/redes/google1.png"/> </a>
                            </div>
        
        </div>
        <div class="col-sm-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 288px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">LETICIA JAUREGUI</h3>
        </div>
        
        <div class="textoponentes">
        Leticia ha presentado su trabajo sobre remesas, migraci&oacute;n y desarrollo empresarial de mujeres en el Foro Econ&oacute;mico Mundial de Davos, la escuela de negocios de Wharton, la OEA y la OECD, entre otros.<br>En 2008, fund&oacute; Crea, instituci&oacute;n dedicada a mujeres emprendedoras de comunidades. Adem&aacute;s, es una de las fundadoras del Impact Hub Mexico City, plataforma &uacute;nica de colaboraci&oacute;n para emprendedores de alto impacto en M&eacute;xico.
		<br>Se gradu&oacute; de las Licenciaturas en Econom&iacute;a y en Relaciones Internacionales en el ITAM, cuenta con una Maestr&iacute;a en Ciencias en Desarrollo Comunitario y una Maestr&iacute;a en Ciencias en Econom&iacute;a Agr&iacute;cola y de los Recursos por la Universidad de California, Davis.
        </div> 
        </div>
        ';
        return response()->json(['success'=>$susses],200);
    }
    public function ponente2(){
        $susses='
        <div class="col-sm-4" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/home/ponentes/P_02.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 22px;">Diseñadora Creativa</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">
                                <a href="https://twitter.com/tanya_moss?lang=es" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>
                                <a href="https://www.linkedin.com/in/tanya-moss-ba88b65/" target="_blank"><img  src="img/redes/google1.png"/> </a>
                            </div>
        
        </div>
        <div class="col-sm-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 288px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">TANYA MOSS</h3>
        </div>
        
        <div class="textoponentes">
        Durante los más de 20 años de su trayectoria como diseñadora de joyería, siempre ha tenido la pasión por transmitir alegría y belleza, a través de sus creaciones, creando piezas atemporales que sean femeninas, delicadas y originales. Su trabajo se presenta en 14 de sus propias boutiques, así como en hoteles y tiendas departamentales.
        </div> 
        </div>
        ';
        return response()->json(['success'=>utf8_encode($susses)],200);
    }
    public function ponente3(){
        $susses='
        <div class="col-sm-4" style="padding-left: 56px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/home/ponentes/P_03.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 9px;">Gerente de Emprendimiento para LATAM en Facebook</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">
                                <a href="https://twitter.com/ZhairaF?lang=es" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>
                                <a href="https://mx.linkedin.com/in/zhairafranco" target="_blank"><img  src="img/redes/google1.png"/> </a>
                            </div>
        
        </div>
        <div class="col-sm-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 288px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">ZHAIRA FRANCO</h3>
        </div>
        
        <div class="textoponentes">
        Lidera el a´rea de Emprendimiento en Facebook para Ame´rica Latina.<br><br>Su meta es crear programas de vinculacio´n y educacio´n para emprendedores y duen~os de Pequen~as y Medianas Empresas (PyMES) en la regio´n con el fin de ofrecer a los empresarios herramientas que los apoyen a generar impacto econo´mico y social sostenible.<br><br>Antes de estar en Facebook, se desarrollo´ profesionalmente en las a´reas de comunicacio´n corporativa y mercadotecnia de varias empresas transnacionales.<br><br>Zhaira es mexicana, egresada de California State University en Estados Unidos, con un ti´tulo en Comunicacio´n Corporativa y especialidad en Relaciones Pu´blicas.
        </div> 
        </div>
        ';
        return response()->json(['success'=>utf8_encode($susses)],200);
    }
    public function ponente4(){
        $susses='
        <div class="col-sm-4" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/home/ponentes/P_04.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 9px;">Founder and CEO Startup México</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">
                                <a href="https://twitter.com/mdantus?lang=es" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>
                                <a href="https://mx.linkedin.com/in/marcusdantus" target="_blank"><img  src="img/redes/google1.png"/> </a>
                            </div>
        
        </div>
        <div class="col-sm-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 288px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">MARCUS DANTUS</h3>
        </div>
        
        <div class="textoponentes">
        Lidera Startup México, un súper campus para emprendimiento en México.<br> Es profesor invitado de emprendimiento e innovación en el IPADE, coordina el módulo de creación y financiamiento de empresas de la Maestría por internet en Negocios del ISDI; y es fundador de Wayra México y de Mexico.com, Simitel, Peerant y Abdeo Medical, entre otras.<br> Actualmente es Tiburón junto con otros empresarios mexicanos.
        </div> 
        </div>
        ';
        return response()->json(['success'=>utf8_encode($susses)],200);
    }
    public function ponente5(){
        $susses='
        <div class="col-sm-4" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/home/ponentes/P_05.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 12px;">Fundador de Los Supercívicos</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">
                                <a href="https://twitter.com/arturoelpantera?lang=es" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>
                                
                            </div>
        
        </div>
        <div class="col-sm-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 288px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">ARTURO HERNÁNDEZ</h3>
        </div>
        
        <div class="textoponentes">
        Activista fundador de Los Supercívicos, un grupo de ciudadanos preocupados por el respeto a las reglas de convivencia en México. Ha recorrido las calles de la Ciudad de México señalando, denunciando y exhibiendo muchas de las faltas de valor, sentido humano y educación cívica que tienen los ciudadanos de la Ciudad de México por medio de videos, utilizando el humor como herramienta clave, con el objetivo de construir una mejor sociedad. Está convencido de que con ciudadanos mejor informados y con mayor criterio mejorará la convivencia entre los mexicanos.
        </div> 
        </div>
        ';
        return response()->json(['success'=>utf8_encode($susses)],200);
    }
    public function ponente6(){
        $susses='
        <div class="col-sm-4" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/home/ponentes/P_06.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 12px;">Director de Chilim Balam</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">                                
                                <a href="https://mx.linkedin.com/in/enrique-osoviecki-b162256b" target="_blank"><img  src="img/redes/google1.png"/> </a>
                            </div>
        
        </div>
        <div class="col-sm-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 288px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">ENRIQUE OSOVIECKI</h3>
        </div>
        
        <div class="textoponentes">
        Enrique Osoviecki es Ingeniero Industrial, egresado de la Universidad Anáhuac Estado de México y tiene un diplomado de Master Brewer del American Brewers Guild en Davis California.<br> Con más de 20 años de experiencia profesional tanto en el ramo industrial como en el de servicios, ha participado en el desarrollo de conceptos exitosos desde la idea, puesta en marcha, operación y dirección de proyectos como Chilim-Balam, Beer Factory, Milagro Restaurant & amp, Cantina, Alebrije Micro cervecería y Fiebre de Malta.<br> En 1998 recibió el premio Carlos Anderson a la innovación restaurantera por Beer Factory y en el 2006 el premio a la innovación tecnológica otorgado por Information Week.<br> Actualmente, es director general de Chilim Balam y participa en el consejo de administración de Cervecería Alebrije y el restaurante Fiebre de Malta.
        </div> 
        </div>
        ';
        return response()->json(['success'=>utf8_encode($susses)],200);
    }
    
    public function sum(){
        $susses='
        <img class="img-fluid" src="img/fundadores/sum.png" />
        <br />
        <br />
        <br />
        <p class="titulofundador">
        STARTUP M&Eacute;XICO CAMPUS OAXACA
        </p>
        <span class="contenidofundador">
            Startup M&eacute;xico es la organizaci&oacute;n l&iacute;der en M&eacute;xico en la <span class="contenidofundadorbold">promoci&oacute;n de innovaci&oacute;n, cultura emprendedora y desarrollo econ&oacute;mico a nivel local e internacional.</span> En el campus Oaxaca buscamos replicar este liderazgo para <span class="contenidofundadorbold">apoyar a las startups prometedoras de alto impacto</span> (proporcion&aacute;ndoles un ecosistema de servicios profesionales cr&iacute;ticos). En Startup M&eacute;xico los emprendedores encuentran todo lo que necesitan para hacer realidad sus ideas.<br/><br/>
Hacia una cultura emprendedora en Oaxaca<br/><br/>
Aportamos nuestro conocimiento, experiencia y networking para reunir a exponentes relevantes del ecosistema emprendedor y contribuir a la construcci&oacute;n de una cultura emprendedora en la ciudad. Participamos en el Encuentro CEO 2019 para fortalecer la figura del emprendedor local y su ecosistema en la ciudad de Oaxaca.
            </span>
        ';
        return response()->json(['success'=>$susses],200);
    }
    public function anahuac(){
        $susses='<img class="img-fluid" src="img/fundadores/anahuac.png" />
        <br />
        <br />
        <br />
        <p class="titulofundador">
        UNIVERSIDAD AN&Aacute;HUAC DE OAXACA
        </p>
        <span class="contenidofundador">
            Somos una instituci&oacute;n particular de educaci&oacute;n superior que tiene por objetivo primordial <span class="contenidofundadorbold">elevar la condici&oacute;n humana y social de los hombres y mujeres de Oaxaca.</span> Comprometidos con una formaci&oacute;n integral, a trav&eacute;s de un enfoque de liderazgo de acci&oacute;n positiva, que <span class="contenidofundadorbold">propone un modelo de emprendimiento transversal en toda su oferta acad&eacute;mica;</span> transmitiendo una visi&oacute;n responsable, proactiva e innovadora con su entorno social inmediato.<br /><br/>
            An&aacute;huac y su visi&oacute;n de emprendimiento<br /><br />
            Estamos comprometidos con los emprendedores y el <span class="contenidofundadorbold">desarrollo de nuevas soluciones de alto impacto que generen empleos y eleven la competitividad del estado de Oaxaca a nivel internacional.</span> Colaboramos con el ecosistema emprendedor a trav&eacute;s de actividades que promueven el esp&iacute;ritu de liderazgo y la cultura emprendedora centrada en la innovaci&oacute;n.
            </span>';
        return response()->json(['success'=>$susses],200);
    }
    public function iodemc(){
        $susses='
        <img class="img-fluid" src="img/fundadores/iodemc.png" />
        <br />
        <br />
        <br />
        <p class="titulofundador">
        INSTITUTO OAXAQUE&Ntilde;O DEL EMPRENDEDOR Y DE LA COMPETITIVIDAD(IODEMC)
        </p>
        <span class="contenidofundador">
            Somos una instituci&oacute;n especializada en la pol&iacute;tica p&uacute;blica de <span class="contenidofundadorbold">apoyo a nuevos emprendimientos</span> de base s&oacute;lida y tecnol&oacute;gica para consolidar a las micro y peque&ntilde;as empresas. Funcionamos como un organismo descentralizado, sectorizado a la Secretar&iacute;a de Econom&iacute;a, que busca siempre <span class="contenidofundadorbold">incrementar en las empresas su competitividad e inserci&oacute;n exitosa hacia los mercados nacionales e internacionales</span>.<br /><br />
        De la mano con CEO<br /><br />
        Dentro de los objetivos de IODEMC est&aacute; el <span class="contenidofundadorbold">fomentar la cultura emprendedora</span> a trav&eacute;s de la organizaci&oacute;n de eventos que <span class="contenidofundadorbold">impulsen la generaci&oacute;n de nuevas iniciativas emprendedoras</span> y la exposici&oacute;n de <span class="contenidofundadorbold">productos de origen oaxaque&ntilde;o.</span> Todo para promover un espacio donde se generen v&iacute;nculos entre los miembros del ecosistema local y nacional.
            </span>
        ';
        return response()->json(['success'=>$susses],200);
    }
    
    public function sumdir(){
        $susses='
            <p >
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 16">
  <image id="ubication" width="12" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAQCAYAAAAiYZ4HAAABSUlEQVQokYWSvUoDQRSFv2yiw0DWhSX1EhASC8GnSCP+1EKw1UKU2PgA6gP4CBairRY+R+xUEMIU2uhAGCEQoshdbsLGRDyw7Nxzzt05d2ZLKLI0rgJHwA7QVPoJuAYunA+fQuQNWRo3gHtgmfl4AdadD8+lLI2XgAegXrB6facFrgesRcBxwfwObAA1fTaVQz0d2UFyNpTcdj7cFUNlabwF3GqZRxoBZWAAVJ0P378aJIUMbIEvKUaqVQAzZ2SjmmAkDV0tFoC9GTvsqybolhNryjqooJVYU0mseUusqSXWHAKnQKT6mcywqBdUn/n2NORYm5HzYahH+x864pU49AfDx8SaFWD1j6Yb58O5LMbZBAfA6xyzcKLlmDQ4Hz6ANlC8B1m3VcuRRxqjPxj2EmvkAlvKnTgfroqeye89RpbGwl3qrrtTIvADrlhYEOw9rhEAAAAASUVORK5CYII="/>
</svg><br>
<a class="informacionfundador" href="https://goo.gl/maps/SxqB9qpUBv4uCyKf6" target="_blank">Melchor Ocampo #215, Col. Centro, C.P. 68000, Oaxaca.</a></p>

    <p ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
  <image id="phone" width="16" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABQElEQVQ4jY2RTysFURjGf2M2jrPQuxh3a8JOdmStbJUvYE2+AMVCIbK6RWx8BhssbGwoe5L8aZKyMGmmuxiTiI7m1rlzZnKf5fM87++c9xw/DMQTrZqi1bFoJaLVWZrldCtftFoE1oAeYBJoiFan3ULM0ELJmwd2nWaNvDCQn+qIsShOrh234gbfjgsvwLPjVsgAHkv2KzAVxUnLrbsygKOS6wNvTrNGBrAHfFhxA9isrrvy0yxviVafwLSVTohW92mW3zgTFddFtLoyQ8CIlc2IVg82JAykT7QK0yx/b3ueFfYDF8Bo6ZAmsAqY/BwYBraiOFnuABSQAeCyKNkyP2PWHLS87ShOljoABSQAToDxLt5w3QG0dwX2gbl/AF+VAAs0C+wAQzWVw79fqFOa5Xei1QFwC/QCZj0FPAEbwMovQwhNoGfgNmYAAAAASUVORK5CYII="/>
</svg><br> <a class="informacionfundador" href="tel:9515149429">(951) 514 9429</a></p>

    <p>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="12" viewBox="0 0 16 12">
  <image id="e-mail" width="16" height="12" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAABCUlEQVQokZXSvyvFURgG8I9fXZLlznJHizJI3ZIy2BSTOwojg8lmNCibckdkEhaK6Q5KQiaZbPwDdzEIhU7eW1/3cuNZTud5n+c57znvaenL97RhCzP+h13Mt+M6zE9Y/GPEJsrJmwKGcI4pPGC9Qf4dy7gKT741SnlU8IgSXhpsX1wpNJXwaM0IcthHAeOoZmrV4AqhydUK6RE/6k56xkCIToKbwCvu0JUV1we8Yxr9KGIp+A1c4h4H2c7rAxaig+3Y38Y6GOtcdFD+KWAVFzhGxy8TeMMkRrCSiDTGhB0c4ayJOSHVDjGGXsymgD2sxVy7m5hrSJpTjKIzXSE9SPoYw38wZ3GD4ifkWDRMzE2o/QAAAABJRU5ErkJggg=="/>
</svg><br><a class="informacionfundador" href="mailto:contacto@conectandoemprendedores.mx">contacto@conectandoemprendedores.mx</a></p>
        ';
        return response()->json(['success'=>$susses],200);
    }
    public function anahuacdir(){
        $susses='
            <p >
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 16">
  <image id="ubication" width="12" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAQCAYAAAAiYZ4HAAABSUlEQVQokYWSvUoDQRSFv2yiw0DWhSX1EhASC8GnSCP+1EKw1UKU2PgA6gP4CBairRY+R+xUEMIU2uhAGCEQoshdbsLGRDyw7Nxzzt05d2ZLKLI0rgJHwA7QVPoJuAYunA+fQuQNWRo3gHtgmfl4AdadD8+lLI2XgAegXrB6facFrgesRcBxwfwObAA1fTaVQz0d2UFyNpTcdj7cFUNlabwF3GqZRxoBZWAAVJ0P378aJIUMbIEvKUaqVQAzZ2SjmmAkDV0tFoC9GTvsqybolhNryjqooJVYU0mseUusqSXWHAKnQKT6mcywqBdUn/n2NORYm5HzYahH+x864pU49AfDx8SaFWD1j6Yb58O5LMbZBAfA6xyzcKLlmDQ4Hz6ANlC8B1m3VcuRRxqjPxj2EmvkAlvKnTgfroqeye89RpbGwl3qrrtTIvADrlhYEOw9rhEAAAAASUVORK5CYII="/>
</svg><br>
<a class="informacionfundador" href="https://goo.gl/maps/LZ9MSwh5Wyaa8q8H9" target="_blank">Blvd. Guadalupe Hinojosa de Murat 1100,C.P. 71248 San Raymundo Jalpam, Oax.</a></p>

    <p ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
  <image id="phone" width="16" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABQElEQVQ4jY2RTysFURjGf2M2jrPQuxh3a8JOdmStbJUvYE2+AMVCIbK6RWx8BhssbGwoe5L8aZKyMGmmuxiTiI7m1rlzZnKf5fM87++c9xw/DMQTrZqi1bFoJaLVWZrldCtftFoE1oAeYBJoiFan3ULM0ELJmwd2nWaNvDCQn+qIsShOrh234gbfjgsvwLPjVsgAHkv2KzAVxUnLrbsygKOS6wNvTrNGBrAHfFhxA9isrrvy0yxviVafwLSVTohW92mW3zgTFddFtLoyQ8CIlc2IVg82JAykT7QK0yx/b3ueFfYDF8Bo6ZAmsAqY/BwYBraiOFnuABSQAeCyKNkyP2PWHLS87ShOljoABSQAToDxLt5w3QG0dwX2gbl/AF+VAAs0C+wAQzWVw79fqFOa5Xei1QFwC/QCZj0FPAEbwMovQwhNoGfgNmYAAAAASUVORK5CYII="/>
</svg><br> <a class="informacionfundador" href="tel:9515016250">(951) 501 6250</a></p>

    <p>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="12" viewBox="0 0 16 12">
  <image id="e-mail" width="16" height="12" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAABCUlEQVQokZXSvyvFURgG8I9fXZLlznJHizJI3ZIy2BSTOwojg8lmNCibckdkEhaK6Q5KQiaZbPwDdzEIhU7eW1/3cuNZTud5n+c57znvaenL97RhCzP+h13Mt+M6zE9Y/GPEJsrJmwKGcI4pPGC9Qf4dy7gKT741SnlU8IgSXhpsX1wpNJXwaM0IcthHAeOoZmrV4AqhydUK6RE/6k56xkCIToKbwCvu0JUV1we8Yxr9KGIp+A1c4h4H2c7rAxaig+3Y38Y6GOtcdFD+KWAVFzhGxy8TeMMkRrCSiDTGhB0c4ayJOSHVDjGGXsymgD2sxVy7m5hrSJpTjKIzXSE9SPoYw38wZ3GD4ifkWDRMzE2o/QAAAABJRU5ErkJggg=="/>
</svg><a class="informacionfundador" href="mailto:contacto@conectandoemprendedores.mx">contacto@conectandoemprendedores.mx</a></p>
        ';
        return response()->json(['success'=>$susses],200);
    }
    public function iodemcdir(){
        $susses='
            <p >
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 16">
  <image id="ubication" width="12" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAQCAYAAAAiYZ4HAAABSUlEQVQokYWSvUoDQRSFv2yiw0DWhSX1EhASC8GnSCP+1EKw1UKU2PgA6gP4CBairRY+R+xUEMIU2uhAGCEQoshdbsLGRDyw7Nxzzt05d2ZLKLI0rgJHwA7QVPoJuAYunA+fQuQNWRo3gHtgmfl4AdadD8+lLI2XgAegXrB6facFrgesRcBxwfwObAA1fTaVQz0d2UFyNpTcdj7cFUNlabwF3GqZRxoBZWAAVJ0P378aJIUMbIEvKUaqVQAzZ2SjmmAkDV0tFoC9GTvsqybolhNryjqooJVYU0mseUusqSXWHAKnQKT6mcywqBdUn/n2NORYm5HzYahH+x864pU49AfDx8SaFWD1j6Yb58O5LMbZBAfA6xyzcKLlmDQ4Hz6ANlC8B1m3VcuRRxqjPxj2EmvkAlvKnTgfroqeye89RpbGwl3qrrtTIvADrlhYEOw9rhEAAAAASUVORK5CYII="/>
</svg><br>
<a class="informacionfundador" href="https://goo.gl/maps/kJ9YidP7LvSEuk7G9" target="_blank">Antequera #300, Barrio de Jalatlaco, C.P. 68080, Oaxaca.</a></p>

    <p ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
  <image id="phone" width="16" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABQElEQVQ4jY2RTysFURjGf2M2jrPQuxh3a8JOdmStbJUvYE2+AMVCIbK6RWx8BhssbGwoe5L8aZKyMGmmuxiTiI7m1rlzZnKf5fM87++c9xw/DMQTrZqi1bFoJaLVWZrldCtftFoE1oAeYBJoiFan3ULM0ELJmwd2nWaNvDCQn+qIsShOrh234gbfjgsvwLPjVsgAHkv2KzAVxUnLrbsygKOS6wNvTrNGBrAHfFhxA9isrrvy0yxviVafwLSVTohW92mW3zgTFddFtLoyQ8CIlc2IVg82JAykT7QK0yx/b3ueFfYDF8Bo6ZAmsAqY/BwYBraiOFnuABSQAeCyKNkyP2PWHLS87ShOljoABSQAToDxLt5w3QG0dwX2gbl/AF+VAAs0C+wAQzWVw79fqFOa5Xei1QFwC/QCZj0FPAEbwMovQwhNoGfgNmYAAAAASUVORK5CYII="/>
</svg><br> <a class="informacionfundador" href="tel:9512062428">(951) 206 2428 </a> <br /> <a class="informacionfundador" href="tel:9512061089">(951) 206 1089</a></p>

    <p>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="12" viewBox="0 0 16 12">
  <image id="e-mail" width="16" height="12" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAABCUlEQVQokZXSvyvFURgG8I9fXZLlznJHizJI3ZIy2BSTOwojg8lmNCibckdkEhaK6Q5KQiaZbPwDdzEIhU7eW1/3cuNZTud5n+c57znvaenL97RhCzP+h13Mt+M6zE9Y/GPEJsrJmwKGcI4pPGC9Qf4dy7gKT741SnlU8IgSXhpsX1wpNJXwaM0IcthHAeOoZmrV4AqhydUK6RE/6k56xkCIToKbwCvu0JUV1we8Yxr9KGIp+A1c4h4H2c7rAxaig+3Y38Y6GOtcdFD+KWAVFzhGxy8TeMMkRrCSiDTGhB0c4ayJOSHVDjGGXsymgD2sxVy7m5hrSJpTjKIzXSE9SPoYw38wZ3GD4ifkWDRMzE2o/QAAAABJRU5ErkJggg=="/>
</svg><a class="informacionfundador" href="mailto:contacto@conectandoemprendedores.mx">contacto@conectandoemprendedores.mx</a></p>
        ';
        return response()->json(['success'=>$susses],200);
    }
    
    public function economianaranja(){         
        $susses='
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
        ';
         return response()->json(['success'=>$susses],200);        
    }
    
    public function economiasocial(){         
        $susses='
        <p class="titulo2encuentro">ECONOM&Iacute;A<br/>SOCIAL</p>
        <hr class="hr_encientro" />                
        <p class="subtitulo2encuentro">Lograr mejores resultados en pro del bien com&uacute;n.</p> 
        <p class="texto2encuentro">La econom&iacute;a social es un movimiento integrado por empresas cuyo objetivo principal es generar un impacto significativo sobre la sociedad, el medio ambiente y la comunidad local.</p>
        <p class="texto2encuentro"> 
           Al responder mediante la innovaci&oacute;n social a necesidades a&uacute;n no satisfechas, las empresas sociales forman parte de un crecimiento tanto inteligente como sostenible, pues su visi&oacute;n a largo 
           plazo en el aspecto de impacto ambiental les permite desarrollar soluciones eficientes para reducir las emisiones y los residuos u optimizar los recursos naturales. Como su nombre lo dice, ponen especial &eacute;nfasis en las personas y la cohesi&oacute;n social, siendo el n&uacute;cleo de un crecimiento inclusivo al generar puestos de trabajo sostenibles para las mujeres, los j&oacute;venes y las personas mayores.
        </p>
        <em><p class="fuente_encuentro">Mercado Interno. (2015). La iniciativa de emprendimiento social de la Comisi&oacute;n Europea. Comisi&oacute;n Europea.</p></em>
        ';
         return response()->json(['success'=>$susses],200);        
    }
    
    public function slider(){
        $susses='';
        return response()->json(['success'=>$susses],200);
         //return view('paso')->with("slider",$slider);   
    }
    public function horario(){              
        return response()
                   ->file('./pdf/horario.pdf',['Content-Type'=> 'application/pdf']);
                  /*->header();*/         
    }
    /*
    */
}