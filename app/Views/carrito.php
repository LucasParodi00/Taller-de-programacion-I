
<div class="contenedorCarrito2">
    <div class="containerCarrito">
        <div class="consultasdepersonas"><br>
            <h2 class=" verlasconsultas text-center ">CARRITO DE COMPRAS</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="vaciarloscarros">

                    <a class="btn btn-warning btn1" href="productos_view"><i class="fa-solid fa-arrow-left"></i>Volver atrás</a>
                    <a class="btn btn-danger btn1" href="<?php echo base_url('vaciarCarrito')?>"><i class="fa-solid fa-check"></i>Vaciar carrito</a>
                    
                </div>
                
                <table class="table table-bordered  "id="dataTable" cellspacing="0">
                    <thead class="cabezera text-center">
                        <th>#</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidades</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Operación</th>
                    </thead>
                    <tbody class="tablas">
                       

                        <?php 
                        $total = 0; //acumulador para mostrar el total
                        $i = 1;  //variable para contar los items del producto

                        foreach($cart->contents() as $carrito) { ?>
                        <tr>
                            <td class="text-center "><?php echo $i++; ?></td>
                            <td class="text-center"><?php echo $carrito['name'] ?></td>
                            <td class="text-center">$<?php echo $carrito['price'] ?></td>
                            <td class="text-center"><?php echo $carrito['qty']?></td>
                            <td> <input type="number"></td>
                            <td class="text-center">$<?php echo $carrito['subtotal']; $total = $total + $carrito['subtotal']?></td>
                            

                            <td class="text-center"><a href="<?php  echo base_url('eliminarCarrito?rowid='.$carrito['rowid']); ?>" class="btn btn-danger"><i class="fa-solid fa-xmark"></i>Eliminar</a></td>


                        <?php } ?>
                        </tr>
                    </div>

                    </tbody>
                </table>

            </div>                  
            <div class="totalcompra">
            <h4>Total de compra: $<?php echo $total ?> 
            <td class="text-center"><a href="" class="btn btn-danger"><i class="fa-solid fa-xmark"></i>Confirmar compra</a></td> </h4>
            </div>
    </div>
</div>