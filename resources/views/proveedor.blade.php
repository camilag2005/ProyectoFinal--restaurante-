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
   <style>
    body{
      position: relative;
      background: url(img/fondo.jpg);
      background-repeat: no-repeat;
     background-size: 1600px 800px;
      left: 78px;
      width: calc(99% - 75px);
      transition: all 0.5s ease;
      z-index: 2;
    }
       </style>
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
        <a href="/index">
          <i class='bx bx-user' ></i>
          <span class="links_name">Usuarios</span>
        </a>
        <span class="tooltip">Usuarios</span>
      </li>
      <li>
       
      <li>
        <a href="/producto">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="links_name">Productos</span>
        </a>
        <span class="tooltip">Productos</span>
      </li>
      <li>
        <a href="/clientes">
          <i class='bx bx-folder' ></i>
          <span class="links_name">Clientes</span>
        </a>
        <span class="tooltip">Clientes</span>
      </li>
      <li>
        <a href="/ventas">
          <i class='bx bx-cart-alt' ></i>
          <span class="links_name">Ventas</span>
        </a>
        <span class="tooltip">Ventas</span>
      </li>
      <li>
      <li>
        <a href="/proveedor">
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
      <h1>Proveedor</h1>
      <div>
      <label for="nombre">Nombre:</label>
      <input class="controls" type="text" id="nombre" placeholder="Escriba su nombre">
      </div>
      
      <div>
      <label for="apellido">Direccion:</label>
      <input class="controls" type="text" id="apellido" placeholder="Escriba su direccion">
              </div>
      <div>
      <label for="apellido">Direccion:</label>
      <input class="controls" type="text" id="apellido" placeholder="Escriba su direccion">
              </div>
                
              <div>
      <label for="Correo">telefono:</label>
      <input class="controls" type="email" id="correo" placeholder="Escriba su telefono">
              </div>
      
              <div>
      <label for="contraseña">Cantidad :</label>
      <input class="controls" type="password" id="contraseña" placeholder="Escriba su cantidad">
              </div>
    
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
