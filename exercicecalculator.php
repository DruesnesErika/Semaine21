<!DOCTYPE html>
<head> 

  <title>Calculatrice</title>
  <?php
          switch ($_POST['operateur'])
          {
              case "addition":
                  $r = $_POST['nombre1'] + $_POST['nombre2'];
                  echo "'Le résultat est: '.$r";
                  break;
              case "soustraction":
                  $r = $_POST['nombre1'] - $_POST['nombre2'];
                  echo "'Le résultat est: '.$r";
                  break;
              case "multiplication":
                  $r = $_POST['nombre1'] * $_POST['nombre2'];
                  echo "'Le résultat est: '.$r";
                  break;
              case "division":
                  $r = $_POST['nombre1'] / $_POST['nombre2'];
                  echo "'Le résultat est: '.$r";
                  break;
             
          }
    ?> 
</head>
<body>

  <h2>Calculatrice</h2>

  <div class="container">
    <form action="#" method="post">
      <label for="nbr1">Nombre 1</label>
      <input type="text" id="nbr1" name="nombre1" placeholder="Entrer un chiffre">

      <label for="nbr2">Nombre 2</label>
      <input type="text" id="nbr2" name="nombre2" placeholder="Entrer un chiffre">

      <label for="operateur">Opérateur</label>
      <select id="operateur" name="operateur" value="Choisissez un opérateur">
        <option value="addition">Addition</option>
        <option value="soustraction">Soustraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
      </select>
  
      <input type="submit" name="validation" value="CALCULER">
    </form> 
    </div>

</body>
</html>