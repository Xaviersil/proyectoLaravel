<?php
require("conexion.php");
$con = conectar();

if (isset($_POST['numeroProducto']) && !empty($_POST['numeroProducto'])) {
    $noProducto = mysqli_real_escape_string($con, $_POST['numeroProducto']);

    // Validar que $noProducto es un número
    if (is_numeric($noProducto)) {
        $sql = "DELETE FROM producto WHERE numeroProducto = $noProducto";
        if (mysqli_query($con, $sql)) {
            echo json_encode(['status' => 'success', 'message' => 'Producto eliminado exitosamente']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error al eliminar el producto: ' . mysqli_error($con)]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Número de producto inválido.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Número de producto no especificado.']);
}

mysqli_close($con);
?>
