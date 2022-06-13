




    <main class="containerMain">
        <?php  foreach($ventas as $venta):?>
            <div class="list-group">

                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"> Correo del usuario:  <?= $venta ['email_usuario'] ?></h5>
                    <small>Fecha:  <?= $venta['fecha_venta']?></small>
                    </div>
                    <p class="mb-1"> <?= $venta ['descripcion_venta']?>  </p>
                    <small>Gracias rey. </small>
                </a>
            </div>
           
            <hr class="my-4">
          

        <?php endforeach; ?>
    </main>










