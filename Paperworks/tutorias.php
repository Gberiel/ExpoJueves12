<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorías</title>
  <link rel="stylesheet" type="text/css" href="./css/pagext.css">
  <link rel="stylesheet" type="text/css" href="./css/tuto.css"/>
  <link rel="icon" href="./img/icono.png" type="image/png">
</head>

<body>
  <header>
    <div class="cabecera">
        <img class="logo" src="./img/logo.png"  alt="logo">
        <h1>IPET N°363</h1>
    </div>
  </header>

  <div id="header">
    <ul class="nav" style="display: inline-flex;">
      <li><a href="pgexterna.php">Inicio</a></li>  
      <li><a href="papeles.php">Papeles</a></li>
      <li><a href="">Horarios</a>
          <ul>
              <li><a href="cursos.php">Cursos</a></li>
              <li><a href="colectivos.php">Colectivos</a></li>
              <li><a href="tutorias.php">Tutorias</a></li>
          </ul>
      </li>
      <li><a href="https://cidi.cba.gov.ar/portal-publico/">Notas</a></li>
      <li><a href="asistencias.php">Asistencias</a></li>
      <li><a href="paicor.php">Paicor</a></li>
      <li><a href="comunicados.php">Comunicados</a></li>
</div>


<section id="horarios">
  <div class="cuadro">
    <h2>Horarios turno mañana</h2>
    <table>
      <tr>
        <th>Día</th>
        <th>Horario</th>
        <th>Materia</th>
        <th>Profesor</th>
        <th>Correo</th>
      </tr>
      <tr>
        <td>Lunes</td>
        <td>11:00HS A 11:40HS</td>
        <td class="materia">Ed. Tecnologica y Economica / Economia y Gestion<span class="symbol">   💵 💲 💰   </span></td>
        <td>Prof. Laura Perez</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td>Martes</td>
        <td>9:00HS A 10:50HS</td>
        <td class="materia">Matemáticas<span class="symbol">   ➕ ➖   </span></td>
        <td>Prof. Martin Andrada</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td></td>
        <td>12:20HS A 13:00</td>
        <td class="materia">Lengua y Literatura<span class="symbol">   🔠 🔤 🔡   </span></td>
        <td>Prof. A. Valdez</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td>Jueves</td>
        <td>9:30HS A 10:50HS</td>
        <td class="materia">Ciencias Naturales<span class="symbol">     🌿 🌍     </span></td>
        <td>Prof. M. Pecorari</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td>Viernes</td>
        <td>10:35HS A 11:35HS</td>
        <td class="materia">Electronica y UPT<span class="symbol">     💡 🖥️    </span></td>
        <td>Prof. Pablo Bulacio</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td></td>
        <td>12:15HS A 12:55HS</td>
        <td class="materia">Ciencias Sociales<span class="symbol">    👥 🌍    </span></td>
        <td>Prof. F. Surita</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
    </table>
  </div>

  <div class="cuadro">
    <h2>Horarios turno tarde</h2>
    <table>
      <tr>
        <th>Día</th>
        <th>Horario</th>
        <th>Materia</th>
        <th>Profesor</th>
        <th>Correo</th> 
      </tr>
      <tr>
        <td>Lunes</td>
        <td>14:10HS A 16:10HS</td>
        <td class="materia">Matemáticas<span class="symbol">    ➕ ➖    </span></td>
        <td>Prof. Ivana Ribodino</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td></td>
        <td>16:20HS A 17:00HS</td>
        <td class="materia">Ciencias Sociales<span class="symbol">     👥 🌍     </span></td>
        <td>Prof. F. Zurita</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td>Martes</td>
        <td>16:00HS A 17:20HS</td>
        <td class="materia">Ciencias Naturales<span class="symbol">      🌿 🌍    </span></td>
        <td>Prof. C.Molina</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td></td>
        <td>17:00HS A 17:40HS</td>
        <td class="materia">Lengua y Literatura<span class="symbol">       🔠 🔤 🔡    </span></td>
        <td>Prof. A. Valdez</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
      <tr>
        <td>Jueves</td>
        <td>15:00HS A 16:00HS</td>
        <td class="materia">Electronica y UPT<span class="symbol">      💡 🖥️     </span></td>
        <td>Prof. Pablo Bulacio</td>
        <td><a href="mailto:profe@gmail.com">profe@gmail.com</a></td>
      </tr>
    </table>
  </div>

  </section>

  <script>
    // Función para mostrar los símbolos relacionados cuando se pasa el puntero por encima
    function mostrarSimbolos(event) {
      var symbol = event.target.getElementsByClassName("symbol")[0];
      symbol.style.display = "inline";
    }

    function ocultarSimbolos(event) {
      var symbol = event.target.getElementsByClassName("symbol")[0];
      symbol.style.display = "none";
    }

    var materias = document.getElementsByClassName("materia");
    for (var i = 0; i < materias.length; i++) {
      materias[i].addEventListener("mouseover", mostrarSimbolos);
      materias[i].addEventListener("mouseout", ocultarSimbolos);
    }
  </script>
    <footer class="footer">
      <div class="content">
        <p>tel: 4918432</p>
        <p>|</p>
        <p>Horarios de atención:</p>
        <p>7:10 a 12:55.</p>
        <p>|</p>
        <p>13:30 a 19:15.</p>
      </div>
    </footer>

</body>
</html>
