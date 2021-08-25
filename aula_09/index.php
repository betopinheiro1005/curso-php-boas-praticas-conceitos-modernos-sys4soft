<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF8" />
    <title>Aspas simples e aspas duplas</title>
  </head>
  <body>

    <p>
      <?php echo '<h3>Esta frase usa single quotes.</h3>' ?>
    </p>

    <p>
      <?php echo "<h3>Esta frase usa double quotes.</h3>" ?>
    </p>

    <p>======================================</p>

    <p>
      <?php
        $nome1 = 'João';
        echo 'Nome: $nome1';
      ?>
    </p>

    <p>
      <?php
        $nome2 = 'Maria';
        echo "Nome: $nome2";
      ?>
    </p>

    <p>======================================</p>

    <p>
      <?php
        echo 'O\'Reilly';
      ?>
    </p>

    <p>
      <?php
        echo "O'Reilly";
      ?>
    </p>

    <p>======================================</p>

    <p>
      <?php
        echo 'texto \n texto';
      ?>
    </p>

    <p>
      <?php
        echo "texto \n texto";
      ?>
    </p>




  </body>
</html>
