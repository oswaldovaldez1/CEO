<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PonentesController extends Controller
{
    private $_ponentes=array(
        'magistrales'=>array(
            1=>array(
                'nombre'=>'EDUARDO PAXSON',
                'empresa'=>'Promotora Social México',
                'puesto'=>'Director Financiero',
                'descripcion'=>'Ha desempeñado los cargos de Director de Operaciones y Director de Administración y Finanzas en organizaciones del sector privado, así como Consultor Senior en materia de desarrollo y cultura organizacional, impartiendo seminarios en materia de liderazgo, cultura, psicología empresarial y emprendimiento social.',
                'img'=>'1.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            2=>array(
                'nombre'=>'TANYA MOSS',
                'empresa'=>'Tanya Moss',
                'puesto'=>'Directora General',
                'descripcion'=>'Durante más de 20 años de trayectoria como diseñadora de joyería, Tanya siempre ha tenido pasión por transmitir alegría y belleza a través de sus creaciones; haciendo piezas atemporales, femeninas, delicadas y originales.',
                'img'=>'2.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            3=>array(
                'nombre'=>'ZHAIRA FRANCO',
                'empresa'=>'Facebook',
                'puesto'=>'Gerente de Emprendimiento para LATAM en Facebook',
				'descripcion'=>'Lidera el área de Emprendimiento en Facebook para América Latina.<br><br>Su meta es crear programas de vinculación y educación para emprendedores y dueños de Pequeñas y Medianas Empresas (PyMES) en la región con el fin de ofrecer a los empresarios herramientas que los apoyen a generar impacto económico y social sostenible.<br><br>Antes de estar en Facebook, se desarrolló profesionalmente en las áreas de comunicación corporativa y mercadotecnia de varias empresas transnacionales.<br><br>Zhaira es mexicana, egresada de California State University en Estados Unidos, con un título en Comunicación Corporativa y especialidad en Relaciones Públicas.',
                /*'puesto'=>'Directora de Emprendimiento para América Latina',
				
                'descripcion'=>'Su meta es crear programas de vinculación y educación para emprendedores y dueños de Pequeñas y Medianas Empresas (PyMES) en la región, con el fin de ofrecer a los empresarios de ésta herramientas que los apoyen a generar impacto económico y social sostenible.<br><br>
Anteriormente, se desarrolló profesionalmente en las áreas de comunicación corporativa y mercadotecnia de varias empresas transnacionales. 
',*/
                'img'=>'3.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            4=>array(
                'nombre'=>'LETICIA JÁUREGUI',
                'empresa'=>'Crea Comunidades de Emprendeores Sociales',
                'puesto'=>'Directora General',
                'descripcion'=>'En 2008 fundó Crea, una institución dedicada a mujeres emprendedoras de comunidades y es una de las fundadoras del Impact Hub Mexico City, una plataforma única de colaboración para emprendedores de alto impacto en México.' ,
                'img'=>'4.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',           
                ),
            5=>array(
                'nombre'=>'ARTURO HERNÁNDEZ ORTEGA',
                'empresa'=>'Supercívicos',
                'puesto'=>'Creador y fundador',
                'descripcion'=>'Activista fundador de Los Supercívicos, un grupo de ciudadanos preocupados por el respeto a las reglas de convivencia en México.<br><br>Está convencido de que con ciudadanos mejor informados y con mayor criterio mejorará la convivencia entre los mexicanos.'
,                'img'=>'5.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
                ),
            /*6=>array(
                'nombre'=>'MARÍA JOSÉ CÉSPEDES',
                'empresa'=>'Ashoka México y Centro América',
                'puesto'=>'Directora General',
                'descripcion'=>'Se encargó de liderar las iniciativas de Ventures y Fellowships, donde identificaba y seleccionaba a los principales emprendimientos sociales de la región. Ha participado en proyectos de desarrollo económico y social en México, Kenia, Australia y los Estados Unidos.',
                'img'=>'6.png'
            ),*/
        ),
        'maestras'=>array(
            1=>array(
                'nombre'=>'JOSE LUIS SILVA',
                'empresa'=>'Dux Capital',
                'puesto'=>'Director General',
                'descripcion'=>'Participó en transacciones estratégicas y pioneras dentro de las áreas de Compras y Adquisiciones del Banco HSBC.
<br><br>                Como emprendedor fundó tres Startups: una en la industria del reciclaje, otra como una firma boutique para Inversiones Bancarias para SMEs (que después se fusionó con DUX Capital), y finalmente un Laboratorio de Helado de Nitrógeno Líquido.
',
                'img'=>'1.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
                
            ),
            2=>array(
                'nombre'=>'ENRIQUE OSOVIECKI',
                'empresa'=>'Chilim Balam',
                'puesto'=>'Director General',
                'descripcion'=>'Con más de 20 años de experiencia profesional, tanto en el ramo industrial como en el de servicios, Enrique ha participado en el desarrollo de conceptos exitosos, desde la idea, puesta en marcha, operación y dirección de proyectos como: Chilim-Balam; Beer Factory; Milagro Restaurant & amp; Cantina; Alebrije Micro cervecería y Fiebre de Malta.',
                'img'=>'2.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            3=>array(
                'nombre'=>'MANUEL ORTEGA',
                'empresa'=>'Catorce días',
                'puesto'=>'Co-CEO',
                'descripcion'=>'Ha colaborado para empresas como Diageo, en el área de finanzas, y Cadbury Adams en marketing. Así́ como en Casa Pedro Domecq (hoy Pernod Ricard México) donde trabajó distintas marcas como Martell; Chivas Regal; Wyborowa; Beefeater; entre otras.',
                'img'=>'3.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            4=>array(
                'nombre'=>'MARCUS DANTUS',
                'empresa'=>'Startup México',
                'puesto'=>'Fundador y Director General',
                'descripcion'=>'Fundador de Startup México, es profesor invitado de emprendimiento e innovación en el IPADE, coordina el módulo de creación y financiamiento de empresas de la Maestría por internet en Negocios del ISDI y es fundador de Wayra México; Mexico.com; Simitel; Peerant y Abdeo Medical, entre otras.
                <br><br>Actualmente es Tiburón junto con otros empresarios mexicanos.',
                'img'=>'4.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            5=>array(
                'nombre'=>'MARÍA JOSÉ CÉSPEDES',
                'empresa'=>'Ashoka México y Centro América',
                'puesto'=>'Directora General',
                'descripcion'=>'Se encargó de liderar las iniciativas de Ventures y Fellowships, donde identificaba y seleccionaba a los principales emprendimientos sociales de la región. Ha participado en proyectos de desarrollo económico y social en México, Kenia, Australia y los Estados Unidos.',
                'img'=>'5.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            6=>array(
                'nombre'=>'JAVIER TENORIO',
                'empresa'=>'Agile Dojo - Citibanamex',
                'puesto'=>'',
                'descripcion'=>'Ingeniero en Sistemas Computacionales por la Escuela Superior de Cómputo (IPN) con más de 15 años de experiencia en distintos roles del desarrollo de software buscando siempre la mejora continua en los diferentes productos en los que ha colaborado.<br><br>

Anteriormente aspirante a músico, kickboxer por diversión, melómano y miembro de Tool Army.
Actualmente Vice President encargado de Tools & Enablers del Agile Dojo en Citibanamex buscando la transformación de la banca actual mexicana.
',
                'img'=>'6.png',
                'fb'=>'',
                'lk'=>'https://www.linkedin.com/in/javier-alejandro-tenorio-martinez-491492127/',
                'tw'=>'https://twitter.com/agileshinobi',
            ),
            7=>array(
                'nombre'=>'CARMEN DÍAZ GUADARRAMA',
                'empresa'=>'Agile Dojo - Citibanamex',
                'puesto'=>'',
                'descripcion'=>'Licenciada en Ciencias de la Informática de UPIICSA – IPN. Cuenta con experiencia en proyectos de trasformación, implementaciones de nuevas tecnologías y mejoras a productos en consultoras, en empresas como Walmart de México y Centroamérica y actualmente Citibanamex.<br><br>  
Cuenta con certificaciones en materia de agilidad y amplio conocimiento de estos marcos de trabajo.',
                'img'=>'7.png',
                'fb'=>'',
                'lk'=>'https://www.linkedin.com/in/carmen-diaz-guadarrama-41822b3b/',
                'tw'=>'twitter.com/karmense',
            ),
            /*8=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'8.png'
            ),*/
        ),
        'conferencias'=>array(
            1=>array(
                'nombre'=>'MARIO ROMERO',
                'empresa'=>'Impact HUB',
                'puesto'=>'Director General',
                'descripcion'=>'Cuenta con 11 años de experiencia diseñando y desarrollando proyectos estratégicos para corporaciones, startups y ONGs; sus áreas de especialización son la Innovación, Responsabilidad Social Corporativa, Gestión del Cambio, Recursos Humanos Estratégicos, Liderazgo, entre otros.',
                'img'=>'1.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            2=>array(
                'nombre'=>'GERMÁN SANTILLÁN',
                'empresa'=>'Oaxacanita',
                'puesto'=>'Fundador y Presidente',
                'descripcion'=>'Fundador y Director General de Oaxacanita chocolate, es miembro del Consejo Directivo y Asociado Fundador de la Asociación de Chocolateros del Estado de Oaxaca A.C.<br><br>
Fue nombrado por The International Youth Foundation y Laureate como uno de los 20 mejores emprendedores sociales del mundo.
',
                'img'=>'2.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),            
            3=>array(
                'nombre'=>'CELIA VERMICELLI',
                'empresa'=>'Kickstarter',
                'puesto'=>'Community lead de Kickstarter en México',
                'descripcion'=>'Cuenta con más de 4 años de experiencia en financiamiento de proyectos creativos, ha sido promotora de formas alternativas que democratizan el acceso a capital en Latinoamérica y colabora en distintas iniciativas que promueven un consumo responsable, como con la Cooperativa de consumo La Impossible.',
                'img'=>'3.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            4=>array(
                'nombre'=>'KARLA PANIAGUA',
                'empresa'=>'Centro',
                'puesto'=>'Coordinadora de estudios de futuros y Directora de la especialidad en Diseño del mañana',
                'descripcion'=>'Coordinadora de estudios de futuros, Directora de la especialidad en diseño del mañana y coeditora en jefe de la revista Economía Creativa en CENTRO, institución educativa especializada en industrias creativas. Asimismo, es Directora de diseño en la agencia de tecnología Punk.',
                'img'=>'4.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            5=>array(
                'nombre'=>'ROBERTO TABOADA CORTINA',
                'empresa'=>'KUBO Financiero',
                'puesto'=>'Director de Crecimiento Exponencial',
                'descripcion'=>'Entusiasta del impacto social, el mundo emprendedor y de las finanzas como palanca de desarrollo social. Desde hace dos años colabora en KUBO Financiero, la fintech mexicana que busca crear y fortalecer la clase media del país.',
                'img'=>'5.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            6=>array(
                'nombre'=>'JONATHAN HERNÁNDEZ',
                'empresa'=>'Ricinomex',
                'puesto'=>'Director General y Fundador',
                'descripcion'=>'Creador de un modelo sustentable de producción de biocombustibles, el cual ha sido acreedor a una patente internacional y a premios tanto nacionales como internacionales. Hoy en día es socio fundador de Ricinomex una empresa que aprovecha al 100% la sede Higuerilla y genera empleos en el campo mexicano.',
                'img'=>'6.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            7=>array(
                'nombre'=>'STEVEN WHITE',
                'empresa'=>'Miller Center for Social Entreprenneurship',
                'puesto'=>'',
                'descripcion'=>'Veterano de varias start-ups en Silicon Valley con una gran experiencia en el financiamiento, la creación de modelos de negocio innovadores, la construcción de equipos efectivos, el crecimiento de organizaciones y la salida de inversionistas de manera efectiva, Steve ha fundado dos organizaciones y fue empleado inicial en otras tres.<br><br>Ha sido ángel inversionista.<br><br>Desde marzo de 2011, Steve ha brindado apoyo a los ejecutivos y emprendedores sociales a través del Global Social Benefit Institute (GSBI) de la Universidad de Santa Clara.<br><br>El GSBI es un centro de emprendimiento global, basado en la innovación al servicio de la humanidad.',
                'img'=>'7.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),            
            
            8=>array(
                'nombre'=>'MIGUEL IGNACIO GALLO REYNOSO',
                'empresa'=>'Ibero CDMX',
                'puesto'=>'Director de Escuela de Emprendimiento Social e Innovación',
                'descripcion'=>'Ha colaborado en el análisis y propuestas de proyectos sociales con enfoque empresarial. Además de haber formado parte del equipo docente del Banco Mundial, en su proyecto AgriFin, impartiendo cursos en México, Sri Lanka, Sudáfrica y Vietnam.',
                'img'=>'8.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
                        
            
            
            9=>array(
                'nombre'=>'SERGIO ALEJANDRO RÍOS FORNAGUERA',
                'empresa'=>'Blacksmith Research',
                'puesto'=>'',
                'descripcion'=>'Ingeniero en sistemas digitales con un programa de alta dirección en el IPADE y una trayectoria profesional como directivo de más de 30 años en el sector asegurador, en empresas globales líderes, desarrollando estrategias de tecnología, de negocio digital, proyectos de excelencia operativa y mejora continua y planeación financiera.',
                'img'=>'9.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
           10=>array(
                'nombre'=>'Alejandro Villanueva Argüelles',
                'empresa'=>'POSiBLE',
                'puesto'=>'Director',
                'descripcion'=>'Es Director Ejecutivo de Televisa Foundation y Director de POSiBLE, un programa para inspirar y apoyar a emprendedoras y emprendedores que quieren tener un alto impacto con proyectos basados en innovación. Ha sido también consultor en estrategia de empresas globales, voluntario, activista, emprendedor e inversionista en proyectos de tecnología.',
                'img'=>'10.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            11=>array(
                'nombre'=>'Rodrigo Millán',
                'empresa'=>'MiTo MEDIA',
                'puesto'=>'Director',
                'descripcion'=>'Imparte cursos, consultoría y conferencias sobre estrategia de negocios, marketing, emprendimiento e innovación. Le apasionan la estrategia de negocios, de marketing, de emprendimiento moderno, de innovación, el liderazgo, la tecnología, la neurociencia, la gestión del cambio, etc.',
                'img'=>'11.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            12=>array(
                'nombre'=>'Antonio Guzmán',
                'empresa'=>'Google Launchpad Acelerator',
                'puesto'=>'',
                'descripcion'=>'Software developer con sólida experiencia en Google Cloud, Technology Advocate en Xertica y Google Developer Expert, en donde participa en iniciativas de asesoría y apoyo a startups del programa Google Launchpad.',
                'img'=>'12.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            13=>array(
                'nombre'=>'PAOLA ESCALANTE',
                'empresa'=>'Google ZOO México',
                'puesto'=>'Líder del equipo Creativo Tecnológico de Google',
                'descripcion'=>'Mexicana apasionada el crecimiento vertiginoso de la tecnología y su capacidad para transformar la vida de las personas. 
<br><br>
Egresada del Tecnológico de Monterrey en la carrera de Comunicación con especialidad en técnicas publicitarias, y de Singularity University con foco en tecnología exponencial. 
<br><br>
Arrancó su carrera en Televisa, cruzando posteriormente al mundo de las agencias creativas, colaborando en Clarus y luego en Flock, donde tuvo una fuerte ascensión, posicionándose como Grouper Account, Executive Producer y New Business Manager.
<br><br> 
Tras su paso por agencias dio el salto a puestos de liderazgo de marketing digital en grandes compañías, primero en PPG Comex (donde fue la main sponsor del proyecto ColorMaps, ganador de más de 30 premios de clase mundial); como Senior Marketing Manager, y más recientemente en PayPal donde tuvo un rol clave en el crecimiento de la compañía como Leader of Merchant Marketing & Ops.
<br><br>
Actualmente es líder del equipo Creativo Tecnológico de Google, cuyo mayor reto es generar \'killer ideas\' que involucran disrupción y tecnología e innovación.
<br><br>
También estudia actualmente una MBA con enfoque en negocios creativos en la Berlin School of Creative Leadership. ',
                'img'=>'13.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            14=>array(
                'nombre'=>'ABRAHAM TRIGUEROS',
                'empresa'=>'Agile Dojo - Citibanamex',
                'puesto'=>'',
                'descripcion'=>'Licenciado en Informática Administrativa por la Universidad Mexicana. Ha colaborado en organizaciones como Walmart, Nielsen y Bimbo. Miembro del Agile Dojo en Citibanamex, responsable del pilar de Agile Execution y Agile Coach para la aplicación Móvil de Citibanamex. Promotor del humor involuntario. ENFP. Mexicano.',
                'img'=>'14.png',
                'fb'=>'',
                'lk'=>' https://www.linkedin.com/in/abraham-trigueros-flores-518b94b9/',
                'tw'=>'',
            ),
            15=>array(
                'nombre'=>'ARTURO ROBLES MALOOF',
                'empresa'=>'Agile Dojo - Citibanamex',
                'puesto'=>'',
                'descripcion'=>'Ingeniero en Cibernética y Maestro en Administración de Negocios en TI, es apasionado de los valores y principios ágiles y cómo aplicarlos para hacer a las personas geniales y obtener resultados asombrosos.
<br><br>
Con algunos años de experiencia en la industria privada y pública, ha colaborado en instituciones como Walmart de México y Centroamérica, la Secretaría de Comunicaciones y Transportes y algunas start ups (antes de que el termino fuera trendy).
',
                'img'=>'15.png',
                'fb'=>'',
                'lk'=>'https://www.linkedin.com/in/leanandgeek/',
                'tw'=>'https://twitter.com/reskiebak',
            ),
        ),
        'paneles'=>array(
            1=>array(
                'nombre'=>'MARTHA GUADALUPE JIMÉNEZ MUÑOZ',
                'empresa'=>'Blancos y Bancos',
                'puesto'=>'Directora',
                'descripcion'=>'Finalista en Posible Camp Oaxaca 2018 y el Campamento Nacional Posible 2018.
Fundadora de Blancos y Bancos, una compañía oaxaqueña que diseña, produce y comercializa muebles, ropa de cama y artículos decorativos con identidad cultural. Además, busca generar un impacto social a través de la capacitación y empleo de mujeres.
',
                'img'=>'1.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            2=>array(
                'nombre'=>'GABRIEL BOLAN CHIÑAS',
                'empresa'=>'Bordadistmo',
                'puesto'=>'Fundador',
                'descripcion'=>'Ganador del Campamento Posible 2018. 
Fundador de la empresa oaxaqueña Bordaditsmo, empresa reconocida en el ámbito emprendedor por ser de alto impacto social.
',
                'img'=>'2.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            3=>array(
                'nombre'=>'ERIKA ADRIANA RAMIREZ MIJANGOS',
                'empresa'=>'Guajito',
                'puesto'=>'Fundadora',
                'descripcion'=>'Ganadora de Posible Oaxaca. 
Fundadora de la empresa oaxaqueña Guajito, la cual busca generar un impacto social positivo en la mixteca oaxaqueña a través de la generación de empleos a jóvenes.
',
                'img'=>'3.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            4=>array(
                'nombre'=>'ROBERTO  LÓPEZ',
                'empresa'=>'Robobrick',
                'puesto'=>'Fundador ',
                'descripcion'=>'Socio fundador de Robobrick, la primera academia de robótica educativa en el estado de Oaxaca, donde potencializa el talento de niños y jóvenes mediante talleres STEAM.<br><br> Han obtenido más de 15 premios de primer lugar en competencias de robótica a nivel nacional en internacional.',
                'img'=>'4.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            5=>array(
                'nombre'=>'ISRAEL CAUICH VIÑAS',
                'empresa'=>'SoldAI',
                'puesto'=>'Director Ejecutivo',
                'descripcion'=>'Actualmente es Director Ejecutivo de SoldAI, una empresa de inteligencia artificial que crea chatbots y asistentes telefónicos para el mercado empresarial.<br><br> Se encarga de la administración general de la organización, el desarrollo corporativo, el desarrollo de productos, las operaciones comerciales y la estrategia.<br><br> Cuenta con experiencia en desarrollo corporativo, desarrollo de productos, operaciones comerciales, estrategia, mercadeo de productos.',
                'img'=>'5.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            /*6=>array(
                'nombre'=>'PAOLA ESCALANTE',
                'empresa'=>'Google ZOO',
                'puesto'=>'Líder del equipo Creativo Tecnológico de Google',
                'descripcion'=>'Egresada del Tecnológico de Monterrey de la carrera de Comunicación con especialidad en técnicas publicitarias y de Singularity University con foco en tecnología exponencial.<br><br>Arrancó su carrera en Televisa pasando luego al mundo de las agencias creativas primero en Clarus y luego en Flock donde tuvo una fuerte ascensión asumiendo posiciones como Grouper Account, Executive Producer y New Business Manager.<br><br>Tras su paso por agencias dio el salto a puestos de liderazgo de marketing digital en grandes compañías.<br><br>Actualmente es líder del equipo Creativo Tecnológico de Google cuyo mayor reto es generar 'killer ideas' que involucran disrupción, tecnología e innovación y estudia una MBA con enfoque en negocios creativos en la Berlin School of Creative Leadership.',
                'img'=>'6.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            7=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'7.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            8=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'8.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            9=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'9.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            10=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'10.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            11=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'11.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            12=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'12.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            13=>array(
                'nombre'=>'',
                'empresa'=>'',
                'puesto'=>'',
                'descripcion'=>'',
                'img'=>'13.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),*/
        ),
        'talleres'=>array(
            1=>array(
                'nombre'=>'OMAR SILVA',
                'empresa'=>'Universidad Anáhuac de Oaxaca',
                'puesto'=>'Docente UAO',
                'descripcion'=>'Asesor y consultor para el desarrollo de startups y capacitación empresarial. Conferencista en temas de innovación, liderazgo y emprendimiento.
                <br><br>
                Juez de Posible México y Green Tech Challenge.',
                'img'=>'1.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            2=>array(
                'nombre'=>'ALÁN ARMENGOL',
                'empresa'=>'Universidad Anáhuac de Oaxaca',
                'puesto'=>'Docente UAO',
                'descripcion'=>'Se ha desarrollado en el ámbito cultural, turístico y de emprendimiento, así como consultor para empresas de alimentos, bebidas y de producción de mezcal.<br><br>Cuenta con la certificación como experto de vinos y destilados por la Wine Spirit Eduaction Trust.',
                'img'=>'2.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            3=>array(
                'nombre'=>'VERÓNICA GONZÁLEZ',
                'empresa'=>'Universidad Anáhuac de Oaxaca',
                'puesto'=>'Docente UAO',
                'descripcion'=>'Ha participado en congresos internacionales, nacionales y estatales, con el tema: <br>Modelo de educación en finanzas personales para fortalecer las capacidades humanas en los administradores de hogares y de empresarios.',
                'img'=>'3.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            4=>array(
                'nombre'=>'LAURA UGALDE',
                'empresa'=>'Facebook',
                'puesto'=>'Especialista en Emprendimiento de GPSCOM para Facebook',
                'descripcion'=>'Especialista en el área de emprendimiento y en la realización de programas para el ecosistema.<br><br>Comunicóloga egresada de Universidad de las Américas Puebla, especialista en posicionamiento a través de canales web y redes sociales y en el desarrollo de contenidos y estrategias digitales.',
                'img'=>'4.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            5=>array(
                'nombre'=>'ALDO ALEMÁN',
                'empresa'=>'Facebook',
                'puesto'=>'Especialista en Emprendimiento de GPSCOM para Facebook',
                'descripcion'=>'Encargado de la implementación y ejecución de los programas para pequeñas, medianas empresas y emprendedores.<br><br>Durante más de tres años se desarrolló en el área de mercadotecnia de una incubadora de alto impacto, apoyando a jóvenes emprendedores a desarrollar proyectos de emprendimiento basados en tecnología, innovación y negocios.<br><br>Emprendedor social, representante legal de la Asociación Integramos AC, comunicólogo egresado de la Universidad Veracruzana.',
                'img'=>'5.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            6=>array(
                'nombre'=>'ALEJANDRA BARROETA',
                'empresa'=>'Distrito Emprendedor',
                'puesto'=>'CO-CEO',
                'descripcion'=>'Co-Fundadora de Distrito emprendedor, ha desarrollado metodologías de enseñanzas enfocadas en la etapa temprana de emprendimiento basadas en megatendencias, innovación, herramientas emergentes y finanzas. Además, es evaluadora nacional en comunidades de Posible, el Tecnológico Nacional de México, iLab, Endeavor, entre otros.',
                /*'descripcion'=>'Es Directora de Contenidos y Programas de Seguimiento en Distrito Emprendedor y catedrática y conferencista de la UNAM y Escuela de Innovación de Startup. Además de ser Consejera editorial y estratégica.',*/
                'img'=>'6.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            7=>array(
                'nombre'=>'Claudia Mendoza Olivar',
                'empresa'=>'Facebook',
                'puesto'=>'Especialista en Emprendimiento de GPSCOM para Facebook',
                'descripcion'=>'Licenciada en Filosofía de la Universidad Nacional Autónoma de México, con estudios de posgrado en Gestión Cultural y Comunicación por parte de la Facultad Latinoamericana de Ciencias Sociales de Argentina.<br><br>Su experiencia profesional ha estado enfocada en la investigación, redacción y gestión de proyectos tanto culturales como publicitarios para diversas instancias públicas y privadas.<br><br>Ha dado clases y talleres en la Facultad de Filosofía y Letras de la UNAM, Biblioteca Vasconcelos, 17 Instituto de Estudios Críticos y Centro Diseño, Cine y Televisión.',
                'img'=>'7.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            8=>array(
                'nombre'=>'Sandra Hernández',
                'empresa'=>'Facebook',
                'puesto'=>'Encargada de Programas Especiales de GPSCOM para Facebook',
                'descripcion'=>'Especialista en temas de emprendimiento femenino y cuidado de marca.<br><br>Apasionada de la cultura digital, la tecnología, la innovación social y los negocios con propósito.<br><br>Desde hace 4 años ha trabajado en la creación e implementación de estrategias de comunicación para pequeñas y medianas empresas.<br><br>Administradora, egresada de la Universidad Nacional Autónoma de México, ha realizado cursos en el área de comercio electrónico en la Universidad de Buenos Aires, Argentina, y programación web en el Seoul Institute of Tecnology & Education en Corea del Sur.',
                'img'=>'8.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            9=>array(
                'nombre'=>'Erick Adrián Martínez Castillo',
                'empresa'=>'Impact Hub',
                'puesto'=>'Desarrollo de Negocios',
                'descripcion'=>'Ha colaborado como asesor tecnológico en diversas dependencias del Gobierno Federal e iniciativa privada.
Tiene experiencia como mentor, tallerista y conferencista de emprendimiento, modelo de negocio, design thinking, tecnología e innovación digital con empresas como DisruptivoTV, Socialab, Hult Prize
ITAM, Village Capital, SEP, entre otros.
',
                'img'=>'9.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
            10=>array(
                'nombre'=>'Rodrigo Millán',
                'empresa'=>'MiTo MEDIA',
                'puesto'=>'Director',
                'descripcion'=>'Imparte cursos, consultoría y conferencias sobre estrategia de negocios, marketing, emprendimiento e innovación. Le apasionan la estrategia de negocios, de marketing, de emprendimiento moderno, de innovación, el liderazgo, la tecnología, la neurociencia, la gestión del cambio, etc.',
                'img'=>'10.png',
                'fb'=>'',
                'lk'=>'',
                'tw'=>'',
            ),
        ),
    );
    public function todos1($pantalla){
        
        $orden=array(
            1=>array(
                'ponencia'=>'magistrales',
                'indice'=>4
            ),
            2=>array(
                'ponencia'=>'magistrales',
                'indice'=>5
            ),
            3=>array(
                'ponencia'=>'magistrales',
                'indice'=>2
            ),
            4=>array(
                'ponencia'=>'maestras',
                'indice'=>4
            ),
            5=>array(
            'ponencia'=>'magistrales',
            'indice'=>3
            ),
            6=>array(
            'ponencia'=>'magistrales',
            'indice'=>1
            ),
            7=>array(
            'ponencia'=>'conferencias',
            'indice'=>3
            ),
            8=>array(
            'ponencia'=>'maestras',
            'indice'=>2
            ),
            9=>array(
            'ponencia'=>'conferencias',
            'indice'=>4
            ),
            10=>array(
            'ponencia'=>'conferencias',
            'indice'=>7
            ),
            11=>array(
            'ponencia'=>'maestras',
            'indice'=>5
            ),
            12=>array(
            'ponencia'=>'conferencias',
            'indice'=>2
            ),
            13=>array(
            'ponencia'=>'talleres',
            'indice'=>4
            ),
            14=>array(
            'ponencia'=>'maestras',
            'indice'=>1
            ),
            15=>array(
            'ponencia'=>'paneles',
            'indice'=>1
            ),
            16=>array(
            'ponencia'=>'talleres',
            'indice'=>5
            ),
            17=>array(
            'ponencia'=>'talleres',
            'indice'=>6
            ),
            18=>array(
            'ponencia'=>'paneles',
            'indice'=>2
            ),
            19=>array(
            'ponencia'=>'paneles',
            'indice'=>3
            ),
            20=>array(
            'ponencia'=>'conferencias',
            'indice'=>5
            ),
            21=>array(
            'ponencia'=>'talleres',
            'indice'=>3
            ),
            22=>array(
            'ponencia'=>'conferencias',
            'indice'=>6
            ),
            23=>array(
            'ponencia'=>'talleres',
            'indice'=>7
            ),
            24=>array(
            'ponencia'=>'maestras',
            'indice'=>3
            ),
            25=>array(
            'ponencia'=>'talleres',
            'indice'=>1
            ),
            26=>array(
            'ponencia'=>'talleres',
            'indice'=>8
            ),
            27=>array(
            'ponencia'=>'conferencias',
            'indice'=>1
            ),
            28=>array(
            'ponencia'=>'conferencias',
            'indice'=>8
            ),
            29=>array(
            'ponencia'=>'talleres',
            'indice'=>2
            ),            
            30=>array(
            'ponencia'=>'conferencias',
            'indice'=>10
            ),
            31=>array(
            'ponencia'=>'talleres',
            'indice'=>9
            ),
            32=>array(
            'ponencia'=>'talleres',
            'indice'=>10
            ),  
            33=>array(
            'ponencia'=>'conferencias',
            'indice'=>12
            ),
            34=>array(
            'ponencia'=>'paneles',
            'indice'=>4
            ),
            35=>array(
            'ponencia'=>'paneles',
            'indice'=>5
            ),
            36=>array(
            'ponencia'=>'conferencias',
            'indice'=>13
            ),
            37=>array(
            'ponencia'=>'maestras',
            'indice'=>6
            ),
            38=>array(
            'ponencia'=>'maestras',
            'indice'=>7
            ),
            39=>array(
            'ponencia'=>'conferencias',
            'indice'=>14
            ),
            40=>array(
            'ponencia'=>'conferencias',
            'indice'=>15
            ),
        );
        $salida='<div class="row d-flex align-items-center">';
        $data='';
        
        $infponente='col-12 col-sm-12 col-md-12 col-lg-8';
        $imgponente='col-12 col-sm-12 col-md-12 col-lg-4';
        
        for($x=1;$x<=count($orden);$x++){
            $ponencia=$orden[$x]['ponencia'];
            $i=$orden[$x]['indice'];                                    
            $pon=$this->_ponentes[$ponencia][$i];                       
            $salida=$salida.'
                <div class=" col-6 col-sm-4 col-md-4" style="padding-bottom: 30px;">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#Modal'.$ponencia.$i.'">
                    <div  class="imgponentes  wow fadeIn" data-wow-duration="1500ms" style=\'background-image: url("img/ponentes/'.$ponencia.'/'.$i.'.png"); background-size: 100% 100%;\'>
                        <div class="cintillo" >
                            <span style=\'font-size: 14.582px;
                                      font-family: "Exo 2";
                                      color: rgb(255, 255, 255);
                                      text-transform: uppercase;
                                      line-height: 1.43;
                                      text-align: center;\'>'.$pon['nombre'].'</span>
                            <span style=\'font-size: 13.266px;
                                      font-family: "Exo 2";
                                      color: rgb(255, 255, 255);
                                      line-height: 1.362;
                                      text-align: center;\'>'.$pon['empresa'].'</span>
                        </div>
                    </div>
                    </a>
                </div>';
                
                $data=$data.'<div class="modal fade" id="Modal'.$ponencia.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" id="exampleModalLabel">Modal title</h5-->
        <button type="button" class="close cierre" data-dismiss="modal" aria-label="Close" style="color: black !important;">
          <span class="cierre" aria-hidden="true" style=\'font-family: "Exo 2";\'>x</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: auto;">
        <div class="row infomodal" id="infomodal" style="overflow: initial;">
            <div class="'.$imgponente.'" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/ponentes/'.$ponencia.'/'.$i.'.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 9px;">'.$pon['puesto'].' / '.$pon['empresa'].'</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">';
                            if($pon['tw']!=''){
                                $data=$data.'<a href="'.$pon['tw'].'" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>';
                                }           
                            if($pon['lk']!=''){                                
                                $data=$data.'<a href="'.$pon['lk'].'" target="_blank"><img  src="img/redes/google1.png"/> </a>';
                                }
                                
                            $data=$data.'</div>
        
        </div>
        <div id="infoponente" class="'.$infponente.' infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 320px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">'.$pon['nombre'].'</h3>
        </div>
        
        <div class="textoponentes" style="padding-top: 65px;     text-align: left;">
        '.$pon['descripcion'].'
        </div> 
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>';
                
        }
        
        $salida=$salida.'</div>';
        return response()->json(['success'=>$salida,'modal'=>$data],200);                
    }
    public function todos(){        
        $salida='<div class="row d-flex align-items-center">'        
        .$this->grid1('magistrales')
        .$this->grid1('maestras')
        .$this->grid1('conferencias')
        .$this->grid1('paneles')
        .$this->grid1('talleres');
        $salida=$salida.'';
        return response()->json(['success'=>$salida],200);
    }
    
    private function grid1($ponencia,$pantalla){
        $ponentes=$this->_ponentes[$ponencia];
        //dd($ponentes);
        $salida='';        
        for($i=1;$i<=count($ponentes);$i++){
            $pon=$ponentes[$i];
            if($pon['nombre']<>''){                                
                $salida=$salida.'
                <div class=" col-6 col-sm-4 col-md-4" style="padding-bottom: 30px;">
                <a href="javascript:void(0)" onclick="info(\''.$ponencia.'\',\''.$i.'\')" data-toggle="modal" data-target="#Modalponentes">
                    <div  class="imgponentes  wow fadeIn" data-wow-duration="1500ms" style=\'background-image: url("img/ponentes/'.$ponencia.'/'.$i.'.png"); background-size: 100% 100%;\'>
                        <div class="cintillo" >
                            <span style=\'font-size: 14.582px;
                                      font-family: "Exo 2";
                                      color: rgb(255, 255, 255);
                                      text-transform: uppercase;
                                      line-height: 1.43;
                                      text-align: center;\'>'.$pon['nombre'].'</span>
                            <span style=\'font-size: 13.266px;
                                      font-family: "Exo 2";
                                      color: rgb(255, 255, 255);
                                      line-height: 1.362;
                                      text-align: center;\'>'.$pon['empresa'].'</span>
                        </div>
                    </div>
                    </a>
                </div>';                
            }
        }
        
          return $salida;
//        echo $salida;
    }
    
    public function grid($ponencia,$pantalla){
        //echo $ponencia;exit;
        if($ponencia==='todos'){
            return $this->todos();
        }
        if($ponencia==='todo'){
            return $this->todos1();
        }
        
       $infponente='col-12 col-sm-12 col-md-12 col-lg-8';
        $imgponente='col-12 col-sm-12 col-md-12 col-lg-4';
        
        $ponentes=$this->_ponentes[$ponencia];
        //dd($ponentes);
        $salida='<div class="row d-flex align-items-center">';
        $data='';        
        for($i=1;$i<=count($ponentes);$i++){
            $pon=$ponentes[$i];
            if($pon['nombre']<>''){                
                if($i===count($ponentes) && $i%2===1 && count($ponentes)>1){                    
                    $salida=$salida.'<div id="cambiar" class="col-sm-0"></div>';
                }
                $salida=$salida.'
                <div class=" col-6 col-sm-4 col-md-4" style="padding-bottom: 30px;">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#Modal'.$ponencia.$i.'">
                    <div  class="imgponentes  wow fadeIn" data-wow-duration="1500ms" style=\'background-image: url("img/ponentes/'.$ponencia.'/'.$i.'.png"); background-size: 100% 100%;\'>
                        <div class="cintillo" >
                            <span style=\'font-size: 14.582px;
                                      font-family: "Exo 2";
                                      color: rgb(255, 255, 255);
                                      text-transform: uppercase;
                                      line-height: 1.43;
                                      text-align: center;\'>'.$pon['nombre'].'</span>
                            <span style=\'font-size: 13.266px;
                                      font-family: "Exo 2";
                                      color: rgb(255, 255, 255);
                                      line-height: 1.362;
                                      text-align: center;\'>'.$pon['empresa'].'</span>
                        </div>
                    </div>
                    </a>
                </div>
                ';
                
                
                $data=$data.'<div class="modal fade" id="Modal'.$ponencia.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" id="exampleModalLabel">Modal title</h5-->
        <button type="button" class="close cierre" data-dismiss="modal" aria-label="Close" style="color: black !important;">
          <span class="cierre" aria-hidden="true" style=\'font-family: "Exo 2";\'>x</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: auto;">
        <div class="row infomodal" id="infomodal" style="overflow: initial;">
            <div class="'.$imgponente.'" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/ponentes/'.$ponencia.'/'.$i.'.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 9px;">'.$pon['puesto'].' / '.$pon['empresa'].'</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">';
                                if($pon['tw']!=''){
                                $data=$data.'<a href="'.$pon['tw'].'" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>';
                                }           
                            if($pon['lk']!=''){                                
                                $data=$data.'<a href="'.$pon['lk'].'" target="_blank"><img  src="img/redes/google1.png"/> </a>';
                                }
                                
                            $data=$data.'</div>
        
        </div>
        <div id="infoponente" class="'.$infponente.' infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 320px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">'.$pon['nombre'].'</h3>
        </div>
        
        <div class="textoponentes" style="padding-top: 65px;     text-align: left;">
        '.$pon['descripcion'].'
        </div> 
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>';
                
            }
        }
        $salida=$salida.'</div>';
          return response()->json(['success'=>$salida,'modal'=>$data],200);
//        echo $salida;
    }
    public function ponentesinfo($ponencia,$ponente,$pantalla){
        $pon=$this->_ponentes[$ponencia][$ponente];
        $infponente='col-12 col-sm-12 col-md-12 col-lg-8';
        $imgponente='col-12 col-sm-12 col-md-12 col-lg-4';
        /*if($pantalla>500 && $pantalla<1023){
            $infponente='col-sm-12';
            $imgponente='col-sm-12';
        }
		<div class="'.$imgponente.'" style="padding-left: 66px;">
		<div id="infoponente" class="'.$infponente.' infoponente"
		*/
        $susses='
        <div class="col-12 col-sm-12 col-md-12 col-lg-4" style="padding-left: 66px;">
        <div style="width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 5px solid #4e0099;
            background-image: url(\'img/ponentes/'.$ponencia.'/'.$ponente   .'.png\');
            background-position-x: center;
            background-position-y: center;">            
            </div>
            <p class="puestoponente" style="color: black; font-weight: bold; text-decoration: underline; padding-top: 18px;
    padding-left: 9px;">'.$pon['puesto'].' / '.$pon['empresa'].'</p>
                            <div class="redes d-flex justify-content-start" style="padding-left: 58px;">
                                <!--a href="https://twitter.com/ljauregui?lang=es" target="_blank"><img class="rprimero"  src="img/redes/facebook1.png"/></a>
                                <a href="https://mx.linkedin.com/in/leticiajauregui" target="_blank"><img  src="img/redes/google1.png"/> </a-->
                            </div>
        
        </div>
        <div id="infoponente" class="col-12 col-sm-12 col-md-12 col-lg-8 infoponente"
        style="border-left: 2px solid rgb(204, 204, 204);"
        >
        <div style="background-color: #4e0099;
    width: 320px;
    position: absolute;
    left: 0px;
    top:6px;
    padding-top: 6px;
    ">
            <h3 style="color: white; padding-left: 15px;">'.$pon['nombre'].'</h3>
        </div>
        
        <div class="textoponentes" style="padding-top: 65px;     text-align: left;">
        '.$pon['descripcion'].'
        </div> 
        </div>
        ';
        return response()->json(['success'=>$susses],200);    
    }
    
}