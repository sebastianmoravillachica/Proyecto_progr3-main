<?php include "header.php"; ?>
<link rel="stylesheet" href="assets/css/historial_pedidos.css"> 
<script src="assets/js/historial_pedidos.js" async></script>

<section class="ubicaciones-sec section" id="ubicaciones">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    <p class="sec-sub-title mb-3">Pedidos</p>
                    <h2 class="h2-title">Historial de pedidos</h2>
                </div>
                <div class="container">
                    <h2>Tus Pedidos</h2>
                    <div id="historial-pedidos" class="historial-lista">
                        <?php include "mostrar_historial_pedidos.php"; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
</body>
</html>
