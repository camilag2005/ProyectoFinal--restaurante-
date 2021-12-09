<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Black Coffee Bar & Bistro</title>
    <link rel="stylesheet" href="{{asset('css/form.css');}}">
    <link rel="stylesheet" href="{{asset('css/style.css');}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Black Coffee Bar & Bistro</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="index.html">
         <i class='bx bx-user' ></i>
         <span class="links_name">Usuarios</span>
       </a>
       <span class="tooltip">Usuarios</span>
     </li>
     <li>
      
     <li>
       <a href="producto.html">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Productos</span>
       </a>
       <span class="tooltip">Productos</span>
     </li>
     <li>
       <a href="clientes.html">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Clientes</span>
       </a>
       <span class="tooltip">Clientes</span>
     </li>
     <li>
       <a href="ventas.html">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Ventas</span>
       </a>
       <span class="tooltip">Ventas</span>
     </li>
     <li>
     <li>
       <a href="proveedor.html">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Proveedor</span>
       </a>
       <span class="tooltip">Proveedor</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
             <div class="name">Logout</div>
             <div class="job"></div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
     <center> <div class="text">Black Coffee Bar & Bistro</div></center>
    <form action="" method="POST" onsubmit="return validar();"> 
      <h1>Productos</h1>
      <div>
        <label for="contraseña">Codigo de producto:</label>
        <input class="controls" type="password" id="contraseña" placeholder="Escriba su Codigo">
                </div>
      <div>
      <label for="nombre">Nombre de Producto:</label>
      <input class="controls" type="text" id="nombre" placeholder="nombre producto">
      </div>
      
      <div>
      <label for="apellido">Stock producto:</label>
      <input class="controls" type="text" id="apellido" placeholder="Stock producto">
              </div>
      
              <div>
      <label for="Correo">Cantidad:</label>
      <input class="controls" type="email" id="correo" placeholder="Cantidad">
              </div>
      
              <div>
      <label for="contraseña">Precio:</label>
      <input class="controls" type="password" id="contraseña" placeholder="Escriba su precio">
              </div>
              <div>
                
              <div class="button"><center>
                      <button type="submit" value="validar" onClick="validar()">Enviar</button></center>
              </div>
              
              <p>
                      <a class="link" href="index.html"></a>
              </p>
              </form>



  </section>


  <script src="{{asset('js/script.js');}}"></script>

</body>
</html>
