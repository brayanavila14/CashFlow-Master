<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="css/productos.css">
</head>
<body>
    <header>
        <h1>Lista de Productos</h1>
        <a href="agregar_producto.html">Agregar Producto</a>
    </header>
    <main>
        <input type="text" id="search" placeholder="Buscar por nombre o código">
        <button id="searchBtn">Buscar</button>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán dinámicamente los productos desde la base de datos -->
                <!-- Ejemplo de un producto -->
                <tr>
                    <td>001</td>
                    <td>Producto 1</td>
                    <td>$19.99</td>
                    <td>50</td>
                    <td>
                        <a href="editar_producto.html?id=1">Editar</a>
                        <a href="#" class="deleteBtn">Eliminar</a>
                    </td>
                </tr>
                <!-- Fin del ejemplo de producto -->
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2023 CashFlow Master</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
