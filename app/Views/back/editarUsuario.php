
    
 


 

<div class="containerProductos">
    <div class="tituloIngresoProducto">
        <h1>REGISTRAR UN NUEVO USUARIO</h1>
    </div>

    <span class="spanProductos"></span>
    
    <form class="formularioProductos" method="POST" action="<?php echo base_url('/actualizar') ?>" >

        <input type="hidden" name="id" value="<?=$usuario['id']?>">

        <div class="contenedorImput">
            <label for="Productos">CUIT</label>
            <input type="number"placeholder="CUIT"  name="cuit" value="<?=$usuario['cuit'] ?>"> 
        </div>

        <div class="contenedorImput">
            <label for="Seccion">Usuario</label>
            <input type="text" placeholder="Nombre de Usuario" name="usuario" value="<?=$usuario['perfil_id'] ?>">  
        </div>

        <div class="contenedorImput">
            <label for="descripcion">Nombre y Apellido</label>
            <input type="text" placeholder="Nombre y Apellido" name="nomyape" value="<?=$usuario['nombreyapellido'] ?>" > 
        </div>

        <div class="contenedorImput">
            <label for="Precio">Correo Electronico</label>
            <input type="text" placeholder="Correo Electronico" name="email" value="<?=$usuario['email'] ?>">  
        </div>

        <div class="contenedorImput">
            <label for="Precio">Contraseña</label>
            <input type="password" placeholder="Contraseña" name="password" value="<?=$usuario['password'] ?>" > 
        </div>

        <div class="contenedorImput">
            <label for="Precio">Telefono</label>
            <input type="text" placeholder="Telefono" name="tel" value="<?=$usuario['telefono'] ?>" > 
        </div>

        <div class="contenedorImput">
            <label for="Precio">Localidad</label>
            <input type="text" placeholder="Localidad" name="localidad" value="<?=$usuario['localidad'] ?>"> 
        </div>

        <div class="botonImputProducto"><input class="botonCargarProducto" type="submit"  value="Guardar" > </div>

    </form>
</div>
















 
