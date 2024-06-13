<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Tabla de productos</title>
  
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
    .bg-custom-primary {
      background-color: #28a745; /* Verde */
    }
    .bg-custom-secondary {
      background-color: #6c757d; /* Gris */
    }
    .btn-custom-primary {
      background-color: #28a745;
      border-color: #28a745;
    }
    .btn-custom-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }
    footer {
      background-color: #2d2d2d;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
  </style>
</head>

<body>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="piña.jpg" class="d-block w-100" style="max-width: 100%; max-height: 600px;" alt="...">
      </div>
    </div>
  </div>

  <header>
    <nav class="navbar bg-custom-primary" data-bs-theme="dark">
      <button type="button" class="btn btn-custom-secondary" data-bs-toggle="modal" data-bs-target="#InsertProducto"
        data-bs-whatever="@getbootstrap">Insertar productos</button>
    </nav>
  </header>

  <section id='tabla123'>
    <table class="table table-striped mb-4">
      <thead>
        <tr>
          <th>No Producto</th>
          <th>Nombre de Producto</th>
          <th>Precio Producto</th>
          <th>Unidades Producto</th>
          <th>Descripción Producto</th>
          <th>Actualizar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="tablaProductos"></tbody>
    </table>
  </section>

  <div class="modal fade" id="InsertProducto" tabindex="-1" aria-labelledby="InsertProducto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="InsertProducto">Nuevo Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form name="InsertProducto" id="insertForm" method="post" action="insertProduct.php">
            <div class="mb-3">
              <label for="recipient-numeroProducto" class="col-form-label">Numero Producto:</label>
              <input type="text" class="form-control" id="recipient-numeroProducto" name="numeroProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-nombreProducto" class="col-form-label">Nombre Producto:</label>
              <input type="text" class="form-control" id="recipient-nombreProducto" name="nombreProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-precioProducto" class="col-form-label">Precio Producto:</label>
              <input type="text" class="form-control" id="recipient-precioProducto" name="precioProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-unidadesProducto" class="col-form-label">Unidades Producto:</label>
              <input type="text" class="form-control" id="recipient-unidadesProducto" name="unidadesProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-descripcionProducto" class="col-form-label">Descripción Producto:</label>
              <input type="text" class="form-control" id="recipient-descripcionProducto" name="descripcionProducto">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-custom-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-custom-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="updateProducto" tabindex="-1" aria-labelledby="updateProducto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateProducto">Actualizacion producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form name="" method="post" action="updateProducts.php">
            <div class="mb-3">
              <label for="update-numeroProducto" class="col-form-label">Numero Producto:</label>
              <input type="text" class="form-control" id="update-numeroProducto" name="numeroProducto">
            </div>
            <div class="mb-3">
              <label for="update-nombreProducto" class="col-form-label">Nombre Producto:</label>
              <input type="text" class="form-control" id="update-nombreProducto" name="nombreProducto">
            </div>
            <div class="mb-3">
              <label for="update-precioProducto" class="col-form-label">Precio Producto:</label>
              <input type="text" class="form-control" id="update-precioProducto" name="precioProducto">
            </div>
            <div class="mb-3">
              <label for="update-unidadesProducto" class="col-form-label">Unidades Producto:</label>
              <input type="text" class="form-control" id="update-unidadesProducto" name="unidadesProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-descripcionProducto" class="col-form-label">Descripción Producto:</label>
              <input type="text" class="form-control" id="update-descripcionProducto" name="descripcionProducto">
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteProducto" tabindex="-1" aria-labelledby="deleteProducto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteProducto">Eliminación producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que deseas eliminar este producto?</p>
          <input type="hidden" id="numeroProducto" name="numeroProducto">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-custom-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-custom-primary" id="confirmDelete">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <script src='JavaScript/app.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
  </script>
</body>
<footer>
  <div style="max-width: 1200px; margin: 0 auto;">
    <p>© 2024. @Todos los derechos reservados.</p>
  </div>
</footer>

</html>
