<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.2.1.min.js"></script>

    <title>GYM CAMPEONES</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="src/css/estilos.css">

</head>
<body>
    
<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>GYM</span>CAMPEONES </a>
    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">Acerca De</a>
        <a href="#features">Galeria</a>
        <a href="#pricing">Precios</a>
        <a href="#trainers">Entrenamientos</a>
        <a href="#blogs">blogs</a>
    </nav>

</header>
<!-- header section ends     -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(imagenes/home-bg-1.jpg) no-repeat;">
                <div class="content">
                   
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <a href="#" class="btn">Únete</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(imagenes/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    
                    
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <a href="#" class="btn">Únete</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(imagenes/home-bg-3.jpg) no-repeat;">
                <div class="content">
                   
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <a href="#" class="btn">Únete</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="imagenes/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>Sobre nosotros</span>
        <h3 class="title">Cada día es una oportunidad para ser mejor</h3>
        <p>El ejercicio puede ayudar a prevenir el aumento de peso excesivo o ayudar a mantener la pérdida de peso. Cuando realizas actividad física, quemas calorías. Mientras más intensa sea la actividad, más calorías quemarás.</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>Cuerpo y mente</h3>
                <p>Para conseguir un cuerpo y mente sana, la dieta de una persona debe incluir vitaminas y minerales como zinc, magnesio, omega 3, vitamina B y vitamina D3.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Vida Saludable</h3>
                <p>Prevención de enfermedades cardiovasculares, diabetes, osteoporosis.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Estrategias</h3>
                <p>Crea tu propia motivación, entrena duro.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Ejecicio</h3>
                <p>Sin dolor no hay ganancia.</p>
            </div>
        </div>
        <a href="#" class="btn">Leer más...</a>
    </div>

</section>

<!-- about section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>Galeria</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="imagenes/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="imagenes/icon-1.png" alt="">
                <h3>Culturismo</h3>
              
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="imagenes/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="imagenes/icon-2.png" alt="">
                <h3>Gymnacio para hombres</h3>
                
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="imagenes/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="imagenes/icon-3.png" alt="">
                <h3>Gym para mujeres</h3>
              
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>
<!-- features section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>PLANES DE SUSCRIPCIÓN</span>
        <h3>precios accecibles para ti</h3>
        <p>Pide tu membresía, tenemos los mejores planes para ti.</p>
        <p> <i class="fas fa-check"></i> cardio </p>
        <p> <i class="fas fa-check"></i> pesas</p>
        <p> <i class="fas fa-check"></i> dietas</p>
        <p> <i class="fas fa-check"></i> resultados generales </p>
        <a href="#" class="btn">todos los precios</a>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
        <div class="price"><span>$</span>299<span>/mes</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> instructor personal </p>
        <p> <i class="fas fa-check"></i> ejercisios de cardio</p>
        <p> <i class="fas fa-check"></i> pesas</p>
        <p> <i class="fas fa-check"></i> dieta </p>
        <p> <i class="fas fa-check"></i> resultados generales </p>
       </div>
       <a href="#" class="btn">comienza ahora</a>
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span>$</span>350<span>/mes</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> Instructor personal</p>
        <p> <i class="fas fa-check"></i> cardio ejercicio</p>
        <p> <i class="fas fa-check"></i> pesas </p>
        <p> <i class="fas fa-check"></i> planes de dietas</p>
        <p> <i class="fas fa-check"></i> resultados generales</p>
        <p> <i class="fas fa-check"></i> crosfit</p>
       </div>
       <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>los mejores entrenadores</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="imagenes/trainer-1.jpg" alt="">
            <div class="content">
                <span>instructor</span>
                <h3>juan hernández</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/trainer-2.jpg" alt="">
            <div class="content">
                <span>instructora</span>
                <h3>perla macías</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/trainer-3.jpg" alt="">
            <div class="content">
                <span>instructor</span>
                <h3>Guillermo mejía</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/trainer-4.jpg" alt="">
            <div class="content">
                <span>instructora</span>
                <h3>Flor Romo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- trainers section ends -->

<!-- banner section starts  -->

<section class="banner">

    <span>únete ahora</span>
    <h3>obtén un 50% de descuento</h3>
    <p>Suscríbete con nosotros.</p>
    <a href="#" class="btn">obtener descuento</a>

</section>


<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>Posts</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="imagenes/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">Usuario</a> <span>|</span> <a href="#">21st may, 2022</a> </div>
                    <h3>el fitness no se trata de ser mejor que otra persona</h3>
                    <p></p>
                    <a href="#" class="btn">Continuar</a>
                </div>
            </div>
            
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="imagenes/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">usuario</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>Ser fitness no se trata de ser mejor personal</h3>
                    
                    <a href="#" class="btn">continuar</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="imagenes/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>Si no duele no hay ganancia</h3>
                    
                    <a href="#" class="btn">continuar</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="imagenes/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>Siempre apoyando a todos los que quieren cambiar y mejorar.</h3>
                    
                    <a href="#" class="btn">continuar</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="imagenes/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>En el gym siempre; sangre, sudor y lágrimas.</h3>
               
                    <a href="#" class="btn">continuar</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Links</h3>
            <a class="links" href="#home">home</a>
            <a class="links" href="#about">acerca de</a>
            <a class="links" href="#features">galeria</a>
            <a class="links" href="#pricing">precios</a>
            <a class="links" href="#trainers">entrenadores</a>
            <a class="links" href="#blogs">blogs</a>
        </div>

        <div class="box">
            <h3>horarios</h3>
            <p> lunes : <i> 7:00am - 10:30pm </i> </p>
            <p> martes : <i> 7:00am - 10:30pm </i> </p>
            <p> miércoles : <i> 7:00am - 10:30pm </i> </p>
            <p> jueves: <i> 7:00am - 10:30pm </i> </p>
            <p> viernes : <i> 7:00am - 10:30pm </i> </p>
            <p> sábado : <i> 7:00am - 10:30pm </i> </p>
            <p> domingo : <i> cerrado </i> </p>
        </div>

        <div class="box">
            <h3>horarios</h3>
            <p> <i class="fas fa-phone"></i> +52844-494-2502 </p>
            <p> <i class="fas fa-phone"></i> +52844-494-2502 </p>
            <p> <i class="fas fa-envelope"></i> gym@correo.com </p>
            <p> <i class="fas fa-map"></i> saltillo, coahuila - 25169 </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>

        <!--div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="email" class="email" placeholder="enter your email" id="email">
                <input type="button" value="suscribe" class="btn"  onclick="mensaje()">
            </form>
            
        </div>

    </div>

</section-->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Suscribete</h3>
            <form id="frmajax" method="POST">
                <input type="email" name="email" class="email" placeholder="enter your email" id="email" style="width: 250px;"><br>
                <input type="text" name="name" class="email" placeholder="enter your name" id="name" style="width: 250px;"><br>
                <button id="btnguardar"  class="btn">Suscrube<br>
             
            </form>
            
        </div>

    </div>

</section>







<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="src/js/script.js"></script>
<script src="src/js/peticion.js"></script>

</body>
</html>

<!-- custom js file link  -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("agregado con exito");
						
					}else{
						alert("Fallo el server");
						

					}
				}
			});

			return false;
		});
	});
</script>