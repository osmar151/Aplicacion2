{include file="templates/Cabeceras/header.tpl"}
    <div class="row">
        <div class="input-field col s12">
            <h1 class="center-align blue-text">INVENTARIO OSMARH</h1>
        </div>
    </div>
    <br>
    <br>
        <div class="row">
        {include file='Navs/BarraLateral.tpl'}
        <div class="col s8">
            <form method="post" action="?class=Inventario&method=IngresoInventario">
                <div class="input-field col s8">
                    <input id="nombre" type="text" name="nombre"/>
                    <label for="nombre">Nombre del producto</label>
                </div>
                <div class="input-field col s8">
                    <textarea id="descripcion" name="descripcion"></textarea>
                    <label for="descripcion">Descripcion del producto</label>
                </div>
                <div class="input-field col s8">
                    <input id="cantidad" type="number" name="cantidad"/>
                    <label for="cantidad">Cantidad del producto</label>
                </div>
                <div class="input-field col s8">
                    <input id="precio" type="number" name="precio"/>
                    <label for="precio">Precio del producto</label>
                </div>
                <div class="input-field col s8">
                    <input id="fecha" type="date" name="fecha"/>
                    <label for="fecha">Fecha de registro</label>
                </div>
                <div class="row">
                <div class="input-field col s8 center-align">
                  <input class="waves-effect waves-light btn" type="submit"value="Guardar Producto"/>
                </div>
              </div>
    </div>

{include file="templates/Cabeceras/footer.tpl"}