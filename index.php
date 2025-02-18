<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi_Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1> Farmacia San Francisco</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim 
                    culpa vel. Sunt, cum assumenda voluptas id aut dolores recusandae ad similique
                     maiores fugit numquam quisquam nemo perspiciatis praesentium. Odit.
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="imagenes/left.png" alt="">
            </div>
        </div>


    </header>

    <section class="about container">
        <div class="about-img">
            <img src="imagenes/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloremque, 
                ducimus explicabo unde eligendi sit voluptate, modi vero, obcaecati expedita 
                distinctio quo facilis officia sequi placeat. Libero non porro cupiditate.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloremque, 
                ducimus explicabo unde eligendi sit voluptate, modi vero, obcaecati expedita 
                distinctio quo facilis officia sequi placeat. Libero non porro cupiditate.
            </p>
        </div>
    </section>

    <main class="Servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pedeatria</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>
        </div>
    </main>

    <div class="formulario-container">

        <Form method="post" autocomplete="off">
            <h2>Agenda consultas</h2>

            <div class="input-group">
            
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFunction()">

            </div>

        </form>
    </div>

    <footer class="footer">

        <div clas="footer-content  container">

            <div class="link">
               <a href="#" class="logo">logo</a> 
            </div>

            <div class="link">
                <url>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </url>
            </div>

        </div>
    </footer>
    <?php
       include("send.php");
    ?>
    <script>
        function myFunction(){
          window.location.href="http://localhost/primero"  
        }
    </script>

</body>
</html>