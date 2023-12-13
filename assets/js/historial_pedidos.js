document.addEventListener('DOMContentLoaded', function() {
    mostrarHistorialPedidos();
});

function mostrarHistorialPedidos() {
    var historialPedidos = localStorage.getItem('historialPedidos');
    if (historialPedidos) {
        var { items, total } = JSON.parse(historialPedidos);
        var historialContainer = document.getElementById('historial-pedidos');

        for (var i = 0; i < items.length; i++) {
            var pedido = items[i];
            var pedidoHTML = `
                <p>${pedido.nombre} <span>( ${pedido.precio} x ${pedido.cantidad} ) Subtotal: ${pedido.subtotal}</span></p>
            `;
            historialContainer.innerHTML += pedidoHTML;
        }

        // Muestra el total al final
        var totalHTML = `<p>Total: $${total.toLocaleString("es")},00</p>`;
        historialContainer.innerHTML += totalHTML;
    }
}
