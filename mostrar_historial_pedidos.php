<?php
// Verificar si la cookie 'historialPedidos' está definida antes de intentar acceder a ella
if (isset($_COOKIE['historialPedidos'])) {
    // Cookie ya existe, no es necesario actualizarla
} else {
    // Recupera el historial de pedidos de localStorage (aquí deberías usar $_SESSION)
    $datosLocalStorage = $_SESSION['historialPedidos'] ?? '';

    // Establece la cookie con los datos de localStorage
    setcookie('historialPedidos', $datosLocalStorage, time() + (86400 * 30), "/"); // 86400 = 1 día
}

// Continuar con el resto del código...
if (isset($_COOKIE['historialPedidos'])) {
    // Obtener el historial de pedidos desde localStorage
    $historial = json_decode($_COOKIE['historialPedidos'], true);

    if ($historial && isset($historial['items']) && isset($historial['total'])) {
        $itemsEnCarrito = $historial['items'];
        $totalCarrito = $historial['total'];

        // Mostrar la tabla
        echo '<div class="container">';
        echo '<table class="table">';
        echo '<caption>Historial de Pedidos</caption>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nombre</th>';
        echo '<th>Cantidad</th>';
        echo '<th>Precio</th>';
        echo '<th>Subtotal</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Iterar sobre los pedidos
        foreach ($itemsEnCarrito as $pedido) {
            echo '<tr>';
            echo '<td data-label="Nombre">' . $pedido['nombre'] . '</td>';
            echo '<td data-label="Cantidad">' . $pedido['cantidad'] . '</td>';
            echo '<td data-label="Precio">$' . $pedido['precio'] . '</td>';
            echo '<td data-label="Subtotal">$' . number_format($pedido['subtotal'], 2, ',', '.') . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';

        // Mostrar el total del carrito
        echo '<div class="historial-total">';
        echo '<p>Total: $' . number_format($totalCarrito, 2, ',', '.') . '</p>';
        echo '</div>';
    } else {
        // Manejar el caso donde no hay historial de pedidos
        echo '<p>No hay historial de pedidos disponible.</p>';
    }
}
?>
