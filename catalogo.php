<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogo</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png">
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
      <hr>
      <br><br>
      </nav>
      <header class="showcase">
        <h2>Libreria SAGH Comparte libros online Colombia Libros, e-books</h2>
        <p>En esta libreria vas a poder encontrar una gran variedad de libros de todos los gustos, y tambien compartir
          todos los que ya hayas leido !!!!!! Seguramente si estás aquí es porque algún libro te ha llevado a un mundo fascinante y tienes amor por la lectura, pues si es así ¡Felicidades! estás en el lugar correcto, porque somos unos apasionados por los libros.
          Compartimos múltiples recursos para que el hábito de la lectura sea mucho más divertido de asimilar en la vida cotidiana. «Leer es para la mente lo que el ejercicio físico es para el cuerpo». Esta frase de Joseph Addison, ensayista, poeta y guionista inglés (1672 – 1719) representa muy bien los beneficios de leer.
        </p>

      </header>
	<br><br>
  <h1>Lista de Libros Disponibles</h1>
  <br><br><br>
  <ul class="catalogo" id="catalogo"></ul>

  <div class="pagination">
    <button class="prev">Anterior</button>
    <button class="next">Siguiente</button>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const itemsPerPage = 6;
      let currentPage = 1;
      let totalPages = 1;

      fetch('libros.json')
        .then(response => response.json())
        .then(libros => {
          const catalogo = document.getElementById('catalogo');
          totalPages = Math.ceil(libros.length / itemsPerPage);

          function showPage(page) {
            catalogo.innerHTML = '';
            const start = (page - 1) * itemsPerPage;
            const end = page * itemsPerPage;
            libros.slice(start, end).forEach(libro => {
              const li = document.createElement('li');
              li.innerHTML = `<a href="${libro.archivo}"><img src="${libro.imagen}" alt="${libro.titulo}" height="200" width="150"></a>`;
              catalogo.appendChild(li);
            });
          }

          function updateButtons() {
            document.querySelector(".prev").disabled = currentPage === 1;
            document.querySelector(".next").disabled = currentPage === totalPages;
          }

          document.querySelector(".prev").addEventListener("click", function() {
            if (currentPage > 1) {
              currentPage--;
              showPage(currentPage);
              updateButtons();
            }
          });

          document.querySelector(".next").addEventListener("click", function() {
            if (currentPage < totalPages) {
              currentPage++;
              showPage(currentPage);
              updateButtons();
            }
          });

          // Inicializa la primera página y los botones.
          showPage(currentPage);
          updateButtons();
        });
    });
  </script>
</nav>
      <br><br><br>
  </header>

  <br><br><br>
  <h1>Asóciate Aquí</h1>
  <br><br>
  <form method="post" action="">
    <fieldset>
        <legend>Datos Personales</legend>

        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>

        <label for="email">Correo</label>
        <input type="email" name="correo" id="correo" required>

        <label for="comentarios">Comentarios</label>
        <textarea name="comentarios" id="comentarios" cols="30" rows="5"></textarea>

        <input type="submit" value="Enviar formulario" class="enviar">
    </fieldset>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si los campos existen en el arreglo $_POST
        $nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';

        // Conexión a la base de datos
        $conn = mysqli_connect('localhost', 'root', '', 'libreria_sagh');

        // Verificar conexión
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        // Escapar caracteres especiales para evitar inyecciones SQL
        $nombres = mysqli_real_escape_string($conn, $nombres);
        $apellidos = mysqli_real_escape_string($conn, $apellidos);
        $fecha_nacimiento = mysqli_real_escape_string($conn, $fecha_nacimiento);
        $correo = mysqli_real_escape_string($conn, $correo);
        $comentarios = mysqli_real_escape_string($conn, $comentarios);

        // Inserción de datos en la tabla
        $sql = "INSERT INTO asociados (nombres, apellidos, fecha_nacimiento, correo, comentarios)
                VALUES ('$nombres', '$apellidos', '$fecha_nacimiento', '$correo', '$comentarios')";

        if (mysqli_query($conn, $sql)) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Cerrar la conexión
        mysqli_close($conn);
    }
?>

  <br><br><br>
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


  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>
</html>
