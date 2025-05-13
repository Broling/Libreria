<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libros Online</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <div class="menu-btn">
      <i class="fas fa-bars fa-2x"></i>
    </div>

    <div class="container">

      <nav class="nav-main">
        <ul class="nav-menu">
          <li>
            <a href="./index.php">Inicio</a>
          </li>
          <li>
            <a href="./catalogo.php">Catalogo</a>
          </li>
          <li>
            <a href="./librosonline.php">Libros Online</a>
          </li>

        </ul>

        <ul class="nav-menu-right">
          <li>
            <a href="#">
              <i class="fas fa-search"></i>
            </a>
          </li>
        </ul>
      </nav>
      <br><br>
      <header class="showcase">
        <h2>Liberia SAGH Comparte libros online Colombia Libros, e-books</h2>
        <p>En esta libreria vas a poder encontrar una gran variedad de libros de todos los gustos, y tambien compartir
          todos los que ya hayas leido !!!!!! Seguramente si estás aquí es porque algún libro te ha llevado a un mundo fascinante y tienes amor por la lectura, pues si es así ¡Felicidades! estás en el lugar correcto, porque somos unos apasionados por los libros.
          Compartimos múltiples recursos para que el hábito de la lectura sea mucho más divertido de asimilar en la vida cotidiana. «Leer es para la mente lo que el ejercicio físico es para el cuerpo». Esta frase de Joseph Addison, ensayista, poeta y guionista inglés (1672 – 1719) representa muy bien los beneficios de leer.
        </p>
      </header>
      <br><br><br>
      <p>
      <div class="form-container">
        <h2>Si Tienes Libros para compartir, Súbelos acá</h2>
        <form action="/ruta-de-tu-servidor" method="post" enctype="multipart/form-data">
          <label for="archivo">Selecciona un archivo:</label><br>        
          <input type="file" id="archivo" name="archivo" required><br>
          <input type="submit" class="enviar">
        </form>
      </div>
      <br><br>
      <img src="./img/compartir-conocimiento.jpg" alt="Comartir" height="400" width="700">
      </p>
      <br><br><br><br>

      <h1>LIBRERIAS GRATIS ONLINE</h1>
      <br><br><br>
      <div class="news-cards">
        <div>
          <img src="img/ealejandria.jpg" alt="" />
          <h3>EALEJANDRIA</h3>
          <p>¡Descarga libros gratis sin registarte! Descubre nuestro amplio catálogo, ya sea mediante el listado
            alfabético, ordenados en categorías o agrupados en colecciones
          </p>
          <a href="https://www.elejandria.com/">Vamos !<i class="fas fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="img/Wikisource-logo.png" alt="" />
          <h3>Wikisource</h3>
          <p>La biblioteca libre que todos pueden editar
            con 114 695 textos en español
          </p>
          <a href="https://es.wikisource.org/wiki/Portada">Vamos ! <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="img/free e-books.jpg" alt="" />
          <h3>Free-Ebooks.net</h3>
          <p>Esta plataforma ofrece 40.000 ebooks gratuitos, muchos de ellos en español, y la mayoría modernos.
            Pero para poder disfrutarlos tienes que crear una cuenta gratuita, y solo puedes descargar un máximo de 5
            libros al mes.
          </p>
          <a href="https://www.free-ebooks.net/">Vamos ! <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="img/tuslibros.jpg" alt="" />
          <h3>TusLibros.com</h3>
          <p>Descargue y disfrute de una lectura sin límites, descubra excelentes libros electrónicos gratis de ficción,
            romance, misterio, comercio, auto-ayuda y más. Busque por categoría, autor o por título.
          </p>
          <a href="https://www.tuslibros.com/">Vamos ! <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>


  </header>
  <br><br><br><br>
  <section class="social">
    <p>Sigenos en Redes Sociales</p>
    <div class="links">
      <a href="https://facebook.com">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://x.com">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://linkedin.com/">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://www.instagram.com/?hl=es">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </section>
  </div>



  <footer class="footer">
    <h3>Created By SAGH</h3>
    <p class="copyrigth">&copy Copyright</p>
  </footer>
</body>

</html>