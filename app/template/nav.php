<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<nav class="navbar vs_sidebar justify-content-end">
  <div class="vs_sidenav_header">
    <span class="nav_brand">MECANICASHOW</span>
    <button class="toggle_nav"><i class="fa fa-close"></i></button>
  </div>
  <ul class="nav">
    <li class="nav-item">
      <a  class="nav-link" href="?task=dashboard&_action=launcher">
        <span class="vs_iconc"><i class="fa fa-dashboard"></i></span>Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?task=servico&_action=start">
        <span class="vs_iconc"><i class="fa fa-fire"></i></span>O.S
      </a>
      <li class="nav-item">
      <a class="nav-link" href="?task=estoque&_action=launcher">
       <span  class="vs_iconc"><i class="fa fa-cubes"></i></span>Estoque
     </a>
    <li class="nav-item">
      <a  class="nav-link" href="?task=cliente&_action=list">
        <span class="vs_iconc"><i class="fa fa-users"></i></span>Clientes
      </a>
    </li>
  </ul>
</nav>
