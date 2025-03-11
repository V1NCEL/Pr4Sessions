
<?php

session_start();

//Checking if the session variable numeros is set Comprueba que la Variable de sesión 'numeros' este definida.
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [10, 20, 30]; 
}

$modifiedIndex = null;
$media = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['pos']) && isset($_POST['valor'])) {
        //Recupera 'pos' y 'valor' del formulario 
        $pos = $_POST['pos'];
        $valor = $_POST['valor'];

        //Ensures pos is within valid bounds (0 to array length - 1) Valida que 'pos' este entre los valores del array.
        if ($pos >= 0 && $pos < count($_SESSION['numeros'])) {
            $_SESSION['numeros'][$pos] = $valor;
            $modifiedIndex = $pos;
        }
    }
    
    if (isset($_POST['calcular_media'])) {
        //Operacion para calcular la media de los numeros.
        $media = array_sum($_SESSION['numeros']) / count($_SESSION['numeros']);
    }
    
    if (isset($_POST['reset'])) {
        //Funcion que reestablece los parametros iniciales.
        $_SESSION['numeros'] = [10, 20, 30];
        $modifiedIndex = null;
        $media = null;
    }
}

?>
    <h1>Modify array saved in session</h1>
        <form method="post">
            <label>Position to modify:</label>
            <select name="pos">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <br>
            <label>New  :</label>
            <br><br>

            <input type="number" name="valor" required>
            <br><br>
            <button type="submit" name="modify">Modify</button>
            <button type="submit" name="calcular_media">Average</button>
            <button type="submit" name="reset">Reset</button>
        </form>
        
        <p>Current array: 
            <?php 
                foreach ($_SESSION['numeros'] as $index => $num) {
                    echo $index === $modifiedIndex ? $num : $num;
                    echo $index < count($_SESSION['numeros']) - 1 ? ", " : "";
                }
            ?>
        </p>
        
        <?php if (isset($media)): ?>
            <p class="result">Average: <?php echo number_format($media, 2); ?></p>
        <?php endif; ?>
   
</body>
</html>