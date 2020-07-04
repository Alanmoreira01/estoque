<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Admin</title>

<link rel="stylesheet" href="areaadmin/css/all.css">
<link rel="stylesheet" href="areaadmin/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="areaadmin/plugins/fontawesome/css/all.min.css">


</head>
<body>

<div class="flex-dashboard">
    <sidebar id="sidebar">
<br>
        <div class="sidebar-title">
<img src="areaadmin/imagens/logo.png"/>
<h2>Sistema Estoque</h2>
        </div>

        <div class="menu">
            <i class="fab fa-ubuntu"></i>
           <input type="checkbox" id="chec1">
           <label class="l" for="chec1">TIPO PRODUTO</label>
<ul>
   <li>
       <i class="fab fa-ubuntu"></i>
       <a href="{{url('/tipo_prod_listar')}}">Listar tipo Produto</a>
   </li>
   <li>
       <i class="fab fa-fedora"></i>
       <a href="#">Expedição</a>
   </li>
   <li>
       <i class="fab fa-suse"></i>
       <a href="#">Operacional</a>
   </li>
   <li>
       <i class="fab fa-apple"></i>
       <a href="#">Suporte</a>
   </li>
</ul>
       </div>







       <div class="menu">
           <i class="fab fa-ubuntu"></i>
          <input type="checkbox" id="chec2">
          <label class="l" for="chec2">Menu</label>
<ul>
  <li>
      <i class="fab fa-ubuntu"></i>
      <a href="#">Administrativo</a>
  </li>
  <li>
      <i class="fab fa-fedora"></i>
      <a href="#">Expedição</a>
  </li>
  <li>
      <i class="fab fa-suse"></i>
      <a href="#">Operacional</a>
  </li>
  <li>
      <i class="fab fa-apple"></i>
      <a href="#">Suporte</a>
  </li>
</ul>
      </div>



        <div class="menu">
            <i class="fab fa-ubuntu"></i>
           <input type="checkbox" id="chec3">
           <label class="l" for="chec3">Menu</label>
<ul>
   <li>
       <i class="fab fa-ubuntu"></i>
       <a href="#">Administrativo</a>
   </li>
   <li>
       <i class="fab fa-fedora"></i>
       <a href="#">Expedição</a>
   </li>
   <li>
       <i class="fab fa-suse"></i>
       <a href="#">Operacional</a>
   </li>
   <li>
       <i class="fab fa-apple"></i>
       <a href="#">Suporte</a>
   </li>
</ul>
       </div>


       <div class="menu">
           <i class="fab fa-ubuntu"></i>
          <input type="checkbox" id="chec4">
          <label class="l" for="chec4">Menu</label>
<ul>
  <li>
      <i class="fab fa-ubuntu"></i>
      <a href="#">Administrativo</a>
  </li>
  <li>
      <i class="fab fa-fedora"></i>
      <a href="#">Expedição</a>
  </li>
  <li>
      <i class="fab fa-suse"></i>
      <a href="#">Operacional</a>
  </li>
  <li>
      <i class="fab fa-apple"></i>
      <a href="#">Suporte</a>
  </li>
</ul>
      </div>






        </sidebar>
        <main  id="mainContent">
            <header>
        <i id="icoMenu" onclick="responsiveSidebar()"  class="fas fa-bars"></i>
          <a href="{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"> {{ Auth::user()->name }} <i class="fas fa-sign-out-alt"></i></a>





            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>









            </header>
            <div  class="main-content" >


                @yield('content')

                </div>



            </div>
        </main>

</div>







    <!--<script src="plugins/bootstrap/js/bootstrap.min.js"></script>-->
    <script src="areaadmin/plugins/fontawesome/js/all.min.js"></script>
    <script src="areaadmin/js/menu.js"></script>
</body>
</html>
