<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>The Beagles</title>
     <link rel="icon" href="img/favicon.png" type="im/img">
    <link rel="stylesheet" href="libs/font-awesome.css">
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <link rel="stylesheet" href="libs/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css?family=Magra" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="libs/jquery.flexslider-min.js"></script>
    <script src="script/jquery.flexslider.js"></script>
    <script src="libs/bootstrap.min.js"></script>
    <script src="script/script.js"></script>

</head>
<body>
   <header id="header">
       <h1 >THE BEAGLES </h1>
       <ul id="lista" class="menu_principal">
                    <li id="inicio"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a></li>
                    <li><a href="#"><i class="fa fa-paw" aria-hidden="true"></i>&nbsp;Adopta</a>
                        <ul>
                            <li><a href="#">¿Qué debo saber?</a></li>
                            <li><a href="#">Nuestros Perros</a></li>
                            <li><a href="#">Formulario de adopción</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Comunidad Beagle</a>
                        <ul>
                            <li><a href="#">Foro de perros</a></li>
                            <li><a href="#">Revistas de perros</a></li>
                            <li><a href="#">Comparte tus historia canina</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;Noticias</a></li>
                    <li><a href="#"><i class="fa fa-camera" aria-hidden="true"></i> &nbsp;Fotos</a></li>
                    <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> &nbsp;Videos</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#login-modal"><i class="fa fa-user-circle" aria-hidden="true"></i> &nbsp;Iniciar Sesión</a></li>
        </ul>
   </header>
   <aside id="aside">
            <div id="redes_sociales">
            <a href="https://www.facebook.com/mundobeagleworld/"><img class="link" src="img/facebook.png" alt="fb" /></a>
            <a href="https://twitter.com/beagleinc"><img class="link" src="img/twitter.png" alt="twitter" /></a>
            <a href="https://www.instagram.com/instagrambeagles/"><img class="link" src="img/instagram_1.png" alt="instagram"/></a>
            </div>
            <!-- Publicidad  -->
            <div id="carrusel_publicidad"><img src="img/dogshow.png" alt="publicidad" height=196 width=180 /></div>
            <div id="carrusel_publicidad_2"><img src="img/medicina.jpg" alt="publicidad" height=196 width=180 /></div>
   </aside>
   <nav id="nav">
               <input type="search" name="busqueda" placeholder=" Buscar" id="buscar">
               <!-- menu desplegable -->
               <div id="menu_2">
               <ul id="menu">
                   
                    <li><a href="#" ><i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;Quienes somos </a>
                        <ul>
                            <li><a href="#">&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;Historia</a>
                                <ul>
                                    <li id="l1"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Los Primeros beagle</a></li>
                                    <li id="l2"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raza moderna</a></li>
                                    <li id="l3"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popularidad</a></li>
                                    <li id="l4"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Origen de su nombre</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" ><i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;Descripción</a>
                        <ul>
                            <li id="l5"><a href="#">&nbsp; &nbsp;&nbsp;Apariencia</a></li>
                            <li id="l6"><a href="#">&nbsp; &nbsp;&nbsp;Color</a></li>
                            <li id="l7"><a href="#">&nbsp; &nbsp;&nbsp;Olfato</a></li>
                            <li id="l8"><a href="#" >&nbsp; &nbsp;&nbsp;Temperamento</a></li>
                        </ul>
                    </li>  
                    <li><a href="#" ><i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;Salud</a>
                        <ul>
                            <li id="l9"><a href="#">&nbsp; &nbsp;&nbsp;Crianza</a></li>
                        </ul>
                    </li>
                    <li > <a href="#" ><i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;Perro de Trabajo</a>
                        <ul>
                            <li id="l10"><a href="#">&nbsp; &nbsp;&nbsp;Caza</a></li>
                            <li id="l11"><a href="#">&nbsp; &nbsp;&nbsp;Perro de Detección</a></li>
                            <li id="l12"><a href="#">&nbsp; &nbsp;&nbsp;Medicación médica</a></li>
                            <li id="l13"><a href="#">&nbsp; &nbsp;&nbsp;Otras</a></li>
                        </ul>
                    </li>
               </ul>  
               </div>  
                      
    </nav>
    <main id="main">
      <!-- carrusel e informacion del menu desplegable  -->
       <div id="carrusel" class="flexslider">
       <ul class="slides">
           <li  class="flex-caption">
               <img src="img/beagles.jpg" alt="beagles" height=350 width=740>
           </li>
           <li  class="flex-caption">
               <img src="img/beagles_3.jpg" alt="puppies" height=350 width=740>
           </li>
           <li  class="flex-caption">
               <img src="img/lemonade.jpg" alt="lemonade" height=350 width=740>
           </li>
       </ul>
       <!--<img src="img/beagles.jpg" alt="beagles" height=350 width=740 /> -->
        </div>
    </main>
	
	<div id="suscribir">
        <input type="text" name="email" placeholder="&nbsp;E-mail" id="email">
	    <button type="button" id="suscribete">Suscribete</button>
	</div>
	<div id="patrocinadores">
	    <p>Patrocinadores </p> 
	</div>
	<div id="imagen_1">
	    <img src="img/bayer.png" alt="bayer" height=50 width=50 /> 
    </div>
    <div id="imagen_2">
	    <img src="img/logo_01.png" alt="royal_canin" height=120 width=130 />
	</div>
	<div id="imagen_3">
	    <img src="img/NestlePurina_logo.png" alt="purina" height=90 width=200 />
	</div>
	<footer id="footer">
	<hr>
	<p>Copyright© 2017 TheBeagles.com-Todos los derechos reservados &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicidad en:
	</p>
	<nav id="contacto"> 
	        <ul>
                    <li class="link_menu"><a href="#" >TheBeagles.com &nbsp; </a></li>
                    <li class="link_menu"><a href="#" > | Contacto &nbsp;</a></li>  
                    <li  class="link_menu"><a href="#" >| Aviso Legal &nbsp;</a></li>
                    <li  class="link_menu"><a href="#" >| Política de Privacidad &nbsp;</a></li>
                    <li  class="link_menu"><a href="#" >| Condiciones de Uso</a></li>
            </ul>  
	</nav>
	</footer>
 <!--login -->
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<img class="img-circle" id="img_logo" alt="logo" src="img/login.png" height=100 width=100>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true" id="salir"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form  action="login.php" id="login-form" method="post">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg"></div>
                                <span id="text-login-msg">Let´s get started</span>
                            </div>
				    		<input id="login_username" class="form-control" type="text" placeholder="Username" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox" id="remember">
                                <label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remember me</label> <input type="checkbox" id="checar">
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div id="caja_boton">
                                <button type="submit" id="logear">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" id="enviar">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
		    				<input id="register_username" class="form-control" type="text" placeholder="Username" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit"  id="registrar">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
 </div>
   <!-- paginas internas  -->
   
   
   <div id="page2">
     <h2>Los primeros beagle</h2>
     <br>
      <p>Los orígenes de esta raza no están muy claros, pero perros de la talla y características similares al beagle moderno se remontan hasta la Antigua Grecia.Jenofonte (ca. 431 a. C. - 354 a. C.), en su Tratado sobre la cacería o Cynegeticus menciona a un sabueso que cazaba liebres mediante el olfato y al que se seguía a pie. También se mencionan pequeños sabuesos en las Leyes Forestales de Canuto el Grande, donde se los eximía de la ordenanza que establecía que a todos los perros capaces de acosar a un venado se les debía mutilar una pata.De ser cierto, estas leyes confirmarían que perros del tipo del beagle existían en Inglaterra antes de 1016, pero es probable que fueran escritas en la Edad Media y se les quisiera dar una percepción de antigüedad y tradición.
      <br>
      En el siglo XI, Guillermo el Conquistador introdujo el talbot en Gran Bretaña. El talbot era un sabueso predominantemente blanco, lento, con la garganta profunda, descendiente del San Huberto que había sido desarrollado en el siglo VIII. En algún momento los talbots ingleses fueron cruzados con galgos para darles un punto suplementario de velocidad.Extinguido ya hace tiempo, el talbot probablemente dio origen al southern hound que, por su parte, se cree que es un antepasado del beagle moderno.
      <br>
      A partir de la época medieval, el término beagle se utilizó como nombre genérico para referirse a los sabuesos más pequeños, aunque estos perros se diferenciaran bastante de la raza moderna. Unas razas de perros diminutos tipo beagle ya se conocían en tiempos Eduardo II y Enrique VII, que tenían jaurías de «beagles de guante» (glove beagles), llamados así por su pequeño tamaño, y la reina Isabel I tenía unos perros conocidos como «beagles de bolsillo» (pocket beagles), que solo tenían de 20 a 23 cm de altura hasta la cruz, lo bastante pequeños como para poder llevarse en un bolsillo o alforja mientras se montaba a caballo durante una cacería. 
      </p>    
   </div>
   <div id="page3">
       <h2>Raza moderna</h2>
       <br>
       <p>
           El reverendo Phillip Honeywood estableció un criadero de beagles en Essex en los años 1830 y se cree que este grupo constituyó la base para la formación de la raza beagle moderna. Aunque no existen registros con los detalles del linaje de esta perrada, se cree tanto los southern hound como los north country beagle estaban fuertemente representados; el veterinario británico William Youatt sospechaba que el harrier constituía una buena parte de la herencia genética del beagle, opinión compartida por otros estudiosos en la actualidad.Los beagles de Honeywood eran pequeños, con una altura hasta la cruz de unos 25 cm y, según escribió John Mills en su The Sportsman's Library (1845), de color blanco puro. El príncipe Alberto, esposo de la reina Victoria, y Lord Winterton también tenían jaurías de beagles en esa época, y el favor real sin duda ayudó al incremento del interés hacia esta raza, aunque el grupo de Honeywood estaba considerado como el más refinado de los tres.
           <br>
           Aunque se la atribuye el desarrollo de la raza moderna, Honeywood se concentró en la cría de perros para la caza y dejó en manos de Thomas Johnson refinar la cría para producir perros que fueran cazadores tanto atractivos como capaces. Se desarrollaron dos variedades: la de pelaje áspero y la de pelaje liso. El beagle de pelaje áspero sobrevivió hasta principios del siglo XX (hay incluso registro de su aparición en un espectáculo de perros en 1969), pero esta variedad está extinguida en la actualidad, probablemente absorbido en el linaje genético estándar del beagle.
       </p>
     <br>
   </div>
   <div id="page4">
        <h2>Popularidad</h2>
        <br>
        <p>
            Cuando se constituyó, la Asociación de Propietarios de Harriers y Beagles puso en marcha una exhibición regular en Peterborough comenzando en 1889, y el Club del Beagle en el Reino Unido montó su primera exhibición en 1896.24 La exposición regular de la raza llevó al desarrollo de un tipo uniforme, y el beagle siguió aumentando su éxito hasta el inicio de la Primera Guerra Mundial, cuando todos los espectáculos fueron suspendidos. Tras la guerra, la raza luchaba otra vez por la supervivencia en el Reino Unido: el último de los beagles de bolsillo probablemente desapareció durante este tiempo, y los registros cayeron hasta su nivel más bajo. Unos pocos criadores (en especial Reynalton Kennels) lograron reanimar el interés por este perro y al inicio de la Segunda Guerra Mundial la raza volvía a ser popular. Los registros cayeron de nuevo tras el final de la guerra, pero se recuperaron casi inmediatamente.
            <br>
            Como perros de raza, los beagles siempre han sido más populares en los Estados Unidos y Canadá que en su país natal. El Club Nacional del Beagle de América (National Beagle Club of America) fue creado en 1888 y hacia 1901 un beagle ya ganó un premio al «Mejor ejemplar de la exposición» (Best in Show). Al igual que en el Reino Unido, la actividad durante la Primera Guerra Mundial fue mínima, pero la raza experimentó un renacimiento mucho más fuerte en los Estados Unidos cuando cesaron las hostilidades. En 1928 ganaron varios premios en la exposición del Westminster Kennel Club y hacia 1939 un beagle (Champion Meadowlark Draughtsman) consiguió el título del máximo galardón del perro de cría americano del año.
        </p>
   </div>
   <div id="page5">
        <h2>Origen de su nombre</h2>
        <br>
        <p>El nombre de esta raza no se ha incorporado al idioma español,34 y se utiliza la misma grafía que en idioma inglés. Según el Oxford English Dictionary, la primera mención del término beagle en la literatura inglesa data de ca. 1475, en el libro Esquire of Low Degree. El origen de la palabra es incierto, aunque se cree que puede derivar del francés becguele o b'gueule, garganta abierta (quizás por las características de su ladrido), o del inglés antiguo, francés o gaélico beag, pequeño. Otros autores indican como origen el término francés beugler, bramar, rugir, o el alemán begele, regañar, reprender.</p>
   </div>
    <div id="page6">
        <h2>Apariencia</h2>
        <br>
        <p>Su aspecto general es similar al de un foxhound de pequeño tamaño, pero la cabeza es más amplia, el hocico más corto, la expresión completamente diferente y las piernas más cortas en relación con el cuerpo.Tienen una altura de entre 33 y 41 cm hasta la cruz y pesan entre 8 y 16 kg; las hembras son por lo general ligeramente más pequeñas que los machos.
        <br>
        La cabeza es alargada y fuerte; en las hembras suele ser más estilizada. El cráneo es liso, ancho y con una ligera cresta occipital. El hocico es de tamaño medio y cortado en ángulo recto, con la trufa (nariz) ancha, con los orificios nasales amplios y generalmente negra. Los ojos son de color marrón oscuro o avellana, bastante grandes, no suelen estar hundidos en las órbitas ni tampoco son saltones. Las orejas son amplias y largas, con la punta redondeada y llegan casi hasta la punta de la nariz si las estiramos hacia delante; de inserción baja, su textura es suave y cuelgan cerca de los pómulos. Tienen un cuello fuerte y de longitud media (lo suficientemente largo como para permitir que baje la cabeza hasta el suelo fácilmente para poder seguir un rastro), ligeramente arqueado y con poca papada. Tiene un pecho amplio que se estrecha hacia un abdomen afilado y llega, en su parte inferior, hasta debajo de los codos; costillas arqueadas que se extienden hacia atrás, y el vientre no tiene un recogimiento excesivo. La cola es robusta y no muy larga, bien cubierta de pelo, especialmente en su parte inferior, y con la punta blanca, lo que permite que el perro pueda verse fácilmente cuando están con la cabeza baja siguiendo un rastro; la cola no se riza sobre su espalda, pero se sostiene erguida cuando el perro se encuentra activo.
        <br>
        El beagle tiene un cuerpo musculoso y una talla media; es de constitución cuadrada: la longitud desde el pecho hasta las piernas es casi igual a la altura desde el suelo hasta la cruz. Su pelaje es liso, corto, denso y resistente a los cambios climatológicos bruscos. Los hombros se encuentran echados hacia atrás y no muy cargados; las patas tienen nudillos prominentes, almohadillas plantares resistentes y uñas cortas; las delanteras son rectas y aplomadas y las traseras son musculosas y dobladas en la articulación superior.</p>
   </div>
     <div id="page7">
        <h2>Color</h2>
        <br>
        <p>Esta raza se puede encontrar con una amplia variedad de colores. Aunque la capa (color del pelaje) tricolor formada por una base de color blanco con grandes áreas negras y tonos marrón claro sea la más común, los beagles pueden verse con cualquier color habitual en los sabuesos.
        <br>
        Las variedades tricolores las encontramos en varios tonos, desde el llamado classic tri, con un lomo negro (también conocido como blackback), el dark tri, con marcas de marrón suaves mezcladas con marcas negras más prominentes, hasta el faded tri, con débiles manchas negras mezcladas con marcas castañas más destacadas. Algunos perros presentan un patrón tricolor quebrado, a veces conocido como pied; esta variedad tiene un pelaje sobre todo blanco con parches de pelo de color negro y marrón. Los beagles tricolores nacen casi siempre negros y blancos. Las áreas blancas se establecen normalmente a la octava semana, y las áreas negras pueden ir cambiando hacia el marrón conforme el cachorro madura y que puede tardar entre uno y dos años en desarrollarse plenamente. Algunos beagles cambian gradualmente de color durante su vida y pueden perder sus manchas negras por completo.
        <br>
        Las variedades bicolores siempre tienen un color blanco como base, con áreas del segundo color. Marrón claro y blanco es la variedad bicolor más común, pero hay una amplia gama de otros colores como un marrón muy claro, rojo, rojizo, naranja, casi marrón, marrón oscuro y negro. Las variedades a manchas o moteadas pueden ser blancas o negras con manchas de colores diferentes. Algunos beagles tricolores también tienen un moteado de varios colores en sus áreas blancas.</p>
   </div>
     <div id="page8">
        <h2>Olfato</h2>
        <br>
        <p>Junto al San Huberto (bloodhound, en inglés), el beagle tiene uno de los mejores y más desarrollados sentidos del olfato de entre todas las razas de perro. En los años 1950, John Paul Scott y John Fuller iniciaron un estudio de trece años de duración sobre el comportamiento canino. Como parte de esta investigación, probaron las capacidades olfativas de varias razas colocando un ratón en un campo de 4000 m² y cronometrando cuanto tiempo tardaba cada perro en encontrarlo. Los beagles lo localizaron en menos de un minuto, mientras que los fox terriers necesitaron quince minutos y los terriers escoceses no pudieron encontrarlo. Los beagles son mejores siguiendo un rastro por la tierra que olfateando el aire, por lo que no se incluyen en la mayor parte de los equipos de rescate de montaña, donde se utilizan fundamentalmente collies, que usan la vista además del olfato del aire y son más dóciles.Las largas orejas y labios grandes del beagle probablemente ayudan a atrapar los olores cerca de la nariz.</p>
   </div>
    <div id="page9">
        <h2>Temperamento</h2>
        <br>
        <p>Es un perro apacible, tanto en su carácter como en su disposición. Descrito en varios estándares de raza como «alegre» (merry), son afectuosos y generalmente no son agresivos, pero tampoco tímidos. Disfrutan de la compañía y, aunque puedan mostrarse inicialmente fríos con los extraños, los aceptan con facilidad, lo que hace de ellos unos perros guardianes poco adecuados, aunque su tendencia a ladrar o aullar cuando avistan desconocidos los convierta en posibles perros de vigilancia. En un estudio del año 1985 dirigido por Ben y Lynette Hart, otorgaron al beagle la posición de excitabilidad más alta, junto con el Yorkshire terrier, el cairn terrier, el schnauzer miniatura, el West Highland white terrier y el fox terrier.
        <br>
        Los beagles son inteligentes pero, al ser una raza criada para largas persecuciones, son decididos y resueltos, lo que puede hacerlos difíciles de entrenar. Son generalmente obedientes, pero puede ser difícil hacerles retroceder una vez que han percibido un rastro, y pueden distraerse con facilidad por olores a su alrededor. Por lo general no se presentan a concursos de obediencia en exhibiciones caninas; mientras están atentos o en alerta, responden bien al entrenamiento mediante recompensas de comida, y están impacientes por complacer, aunque se distraen o aburren con facilidad. Están clasificados en el puesto 72 en el libro The Intelligence of Dogs (La inteligencia de los perros) de Stanley Coren, ya que Coren los sitúa en el grupo con el nivel más bajo de inteligencia trabajo/obediencia; sin embargo esta escala no mide la comprensión o asimilación, la independencia o la creatividad.
        <br>
        Estos perros tienen un excelente comportamiento con los niños, y quizás este sea uno de los motivos por los que es uno de los animales domésticos más populares en las familias, pero son animales de jauría y pueden ser propensos a la llamada «ansiedad por separación».No todos los beagles aullarán, pero la mayoría ladrará cuando se enfrente a situaciones extrañas, y algunos darán aullidos cuando perciban el rastro de una presa potencial.55 Por lo general se comportan bien ante otros perros. No son exigentes en cuanto al ejercicio; su resistencia innata implica que no se cansan fácilmente cuando realizan ejercicio, pero no deben ejercitarse hasta el agotamiento antes de darles un descanso, aunque el ejercicio regular ayuda a evitar el aumento de peso al que esta raza es propensa.</p>
   </div>
   <div id="page10">
        <h2>Crianza</h2>
        <br>
        <p>La longevidad típica de los beagles es de entre diez y quince años,una esperanza de vida habitual para los perros de su talla.
        <br>
        Los beagles pueden ser propensos a la epilepsia, pero puede controlarse mediante medicación; también pueden sufrir hipotiroidismo y varios tipos de enanismo. Hay dos enfermedades en concreto que son particulares de esta raza: la llamada «funny puppy» (cachorro gracioso), en la que el cachorro crece de forma lenta y se desarrolla con piernas débiles y la espalda torcida y, aunque normalmente esté sano, es propenso a diversas enfermedades;y la displasia de cadera, común en harriers y en algunas razas más grandes, pero que raramente se considera un problema en los beagles. Por sus patas cortas, que hacen que al andar se balanceen más que los perros de patas largas, están considerados una raza condrodistrófica, y son propensos a varios tipos de afecciones de los discos intervertebrales.
        <br>
        En casos raros, pueden desarrollar artritis poligénica, una inflamación de las articulaciones provocada por una disfunción del sistema inmunológico, incluso cuando son jóvenes. Los síntomas pueden aliviarse en ocasiones con tratamientos a base de esteroides.
        <br>
        Sus orejas caídas, largas y amplias pueden hacer que el canal auricular no se airee lo suficiente o que retengan aire húmedo, lo que puede conllevar infecciones de oído.También pueden sufrir diversos problemas en los ojos; dos afecciones oculares comunes en los beagles son el glaucoma y la distrofia corneal. </p>
   </div>
   <div id="page11">
        <h2>Caza</h2>
        <br>
        <p>Los beagles fueron desarrollados principalmente para cazar liebres y conejos. Fueron considerados como compañeros de caza ideales para las personas de edad que podrían seguirlos a caballo sin esfuerzo, para cazadores jóvenes que podrían mantenerse junto a ellos en ponis, y para cazadores más pobres que no podían permitirse mantener una cuadra de buenos caballos de caza.Antes de la llegada de la moda de la caza del zorro en el siglo XIX, la caza era un acontecimiento para todo el día que consistía fundamentalmente en la persecución, más que en la muerte del animal perseguido. En este contexto el pequeño beagle se adaptaba bien a la liebre y, a diferencia de perros como los harriers, no terminaban rápidamente la caza, pero debido a su resistencia y a su excelente habilidad para rastrear mediante el olfato eran una garantía para capturar finalmente a la liebre. Las jaurías de beagles corrían con todos los perros muy juntos («tan cerca que podrían cubrirse con una hoja»") lo que era útil en una caza de larga duración, ya que impedía a los perros extraviados ofuscar el rastro. También se les prefería durante la caza del faisán para actuar entre la maleza espesa, en lugar de perros como los spaniel.Con la introducción de la moda de cacerías más rápidas, el beagle cayó en desgracia como cazador de liebres, aunque todavía se utilizaba para la caza del conejo.</p>
   </div>
   <div id="page12">
        <h2>Perro de Deteccion</h2>
        <br>
        <p>Los beagles son usados como perros de detección de importaciones agrícolas prohibidas y productos alimenticios en cuarentena en la «Beagle Brigade» del Servicio de Inspección Sanitaria de Animales y Plantas del Departamento de Agricultura de los Estados Unidos; estos perros se utilizan para descubrir alimentos en los equipajes de viajeros en los Estados Unidos. Tras la realización de diversas pruebas, además de por su fino olfato se eligió a los beagles por ser relativamente pequeños y por no intimidar a las personas que se sienten incómodas cuando se les acercan perros, por ser inteligentes y por trabajar bien con el sistema de recompensas.También se utilizan para este fin por el Ministerio de Agricultura y Silvicultura de Nueva Zelanda, el Servicio de Cuarentena e Inspección de Australia, y en países como Canadá, Japón y la República Popular China.Para la detección de explosivos se utilizan generalmente las variedades de mayor tamaño, ya que para esta tarea a menudo es necesario subirse a grandes cintas transportadoras de equipaje, una tarea poco adecuada para los perros más pequeños.</p>
   </div>
   <div id="page13">
        <h2>Medicacion medica</h2>
        <br>
        <p>Los beagles son la raza de perro que más se utiliza en el Reino Unido en el campo de la experimentación con animales, debido a su talla y su naturaleza pasiva. De las 7595 pruebas realizadas con perros en ese país en 2006 y las 5923 realizadas en 2009, 7402 y 5864 respectivamente (más del 97%) fueron con beagles.80 81 La Ley de Procedimientos Científicos con Animales británica de 1986 otorgó un estatus especial a primates, équidos, gatos y perros, y en el año 2005 el Comité de Procedimientos con Animales (establecido por la Ley de 1986) dictaminó que eran preferibles las pruebas con ratones, aunque esto implicara la utilización de un mayor número de animales.Aunque los beagles fueron los más utilizados, en 2005 los perros estuvieron implicados en menos del 0,3% del total de los experimentos realizados con animales en el Reino Unido.La mayor parte de estos perros son criados expresamente con ese objetivo por compañías como Harlan; estas compañías que crían animales para la investigación deben estar previamente autorizadas de acuerdo con la Ley de Procedimientos Científicos con Animales de 1986.
        <br>
        Las pruebas de productos cosméticos con animales están prohibidas en los Estados miembros de la Unión Europea,aunque Francia protestó por la prohibición y realizó esfuerzos para revocarla.Aunque en Estados Unidos están permitidas, no son obligatorias para garantizar la seguridad de un producto cosmético si esta puede determinarse por otros métodos, y la especie sujeto de la experimentación no está restringida por la Administración de Alimentos y Medicamentos estadounidense (FDA).
        <br>
        En las pruebas de toxicidad de aditivos alimentarios, contaminantes de alimentos y algunos medicamentos y productos químicos, la FDA utiliza beagles y cerdos enanos como sustitutos para las pruebas directas en humanos.</p>
   </div>
   <div id="page14">
        <h2>Otras</h2>
        <br>
        <p>Aunque desarrollado desde sus orígenes para la caza, son una raza versátil y hoy en día se emplean para otros papeles como detección, búsqueda y rescate, terapia y como animales domésticos familiares.En Australia se utilizan como perros olfateadores para la localización de termitas,y se les menciona como posibles candidatos para la detección de drogas y explosivos.Por su naturaleza apacible y no imponente, también se utilizan con frecuencia en la zooterapia, visitando a enfermos y ancianos en hospitales. En junio de 2006, un beagle entrenado para la asistencia ganó un premio por haber salvado la vida de su dueño después de usar su teléfono móvil para marcar el número de emergencias, lo que alertó a los servicios médicos.Después del terremoto de Haití de 2010, un beagle del departamento de perros de búsqueda y rescate de un escuadrón de rescate colombiano, localizó al dueño de un hotel que posteriormente fue rescatado tras pasar cien horas sepultado bajo escombros.</p>
   </div>
</body>
</html>
