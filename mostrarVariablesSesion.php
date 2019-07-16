<?php
session_start();

if(isset($_SESSION['identity'])) {
  echo '<br> Identitity: <br>';
  var_dump($_SESSION['identity']);
  echo '<hr>';
} else echo '<br> NO está establecida identity <br> <hr>';

if(isset($_SESSION['register'])) {
  echo '<br> register: <br>';
  var_dump($_SESSION['register']);
  echo '<hr>';
} else echo '<br> NO está establecida register <br><hr>';

if(isset($_SESSION['fecha_hoja'])) {
  echo '<br> fecha_hoja: <br>';
  var_dump($_SESSION['fecha_hoja']);
  echo '<hr>';
} else echo '<br> NO está establecida fecha_hoja <br><hr>';

if(isset($_SESSION['totalTicketsAnulados'])) {
  echo '<br> totalTicketsAnulados: <br>';
  var_dump($_SESSION['totalTicketsAnulados']);
  echo '<hr>';
} else echo '<br> NO está establecida totalTicketsAnulados <br><hr>';

if(isset($_SESSION['cantidadTicketsAnulados'])) {
  echo '<br> cantidadTicketsAnulados: <br>';
  var_dump($_SESSION['cantidadTicketsAnulados']);
  echo '<hr>';
} else echo '<br> NO está establecida cantidadTicketsAnulados <br><hr>';

if(isset($_SESSION['totalTicketsCompensacion'])) {
  echo '<br> totalTicketsCompensacion: <br>';
  var_dump($_SESSION['totalTicketsCompensacion']);
  echo '<hr>';
} else echo '<br> NO está establecida totalTicketsCompensacion <br><hr>';

if(isset($_SESSION['cantidadDeTicketsCompensacion'])) {
  echo '<br> cantidadDeTicketsCompensacion: <br>';
  var_dump($_SESSION['cantidadDeTicketsCompensacion']);
  echo '<hr>';
} else echo '<br> NO está establecida cantidadDeTicketsCompensacion <br><hr>';

if(isset($_SESSION['totalValesMyTaxi'])) {
  echo '<br> totalValesMyTaxi: <br>';
  var_dump($_SESSION['totalValesMyTaxi']);
  echo '<hr>';
} else echo '<br> NO está establecida totalValesMyTaxi <br><hr>';

if(isset($_SESSION['cantidadValesMyTaxi'])) {
  echo '<br> cantidadValesMyTaxi: <br>';
  var_dump($_SESSION['cantidadValesMyTaxi']);
  echo '<hr>';
} else echo '<br> NO está establecida cantidadValesMyTaxi <br><hr>';

if(isset($_SESSION['totalTarjetaBancaria'])) {
  echo '<br> totalTarjetaBancaria: <br>';
  var_dump($_SESSION['totalTarjetaBancaria']);
  echo '<hr>';
} else echo '<br> NO está establecida totalTarjetaBancaria <br><hr>';

if(isset($_SESSION['cantidadTicketsTarjeta'])) {
  echo '<br> cantidadTicketsTarjeta: <br>';
  var_dump($_SESSION['cantidadTicketsTarjeta']);
  echo '<hr>';
} else echo '<br> NO está establecida cantidadTicketsTarjeta <br><hr>';

if(isset($_SESSION['viajesFinJornada'])) {
  echo '<br> viajesFinJornada: <br>';
  var_dump($_SESSION['viajesFinJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida viajesFinJornada <br><hr>';

if(isset($_SESSION['viajesInicioJornada'])) {
  echo '<br> viajesInicioJornada: <br>';
  var_dump($_SESSION['viajesInicioJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida viajesInicioJornada <br><hr>';

if(isset($_SESSION['recaudacionFinJornada'])) {
  echo '<br> recaudacionFinJornada: <br>';
  var_dump($_SESSION['recaudacionFinJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida recaudacionFinJornada <br><hr>';

if(isset($_SESSION['recaudacionInicioJornada'])) {
  echo '<br> recaudacionInicioJornada: <br>';
  var_dump($_SESSION['recaudacionInicioJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida recaudacionInicioJornada <br><hr>';

if(isset($_SESSION['kmTotalesFinJornada'])) {
  echo '<br> kmTotalesFinJornada: <br>';
  var_dump($_SESSION['kmTotalesFinJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida kmTotalesFinJornada <br><hr>';

if(isset($_SESSION['kmTotalesInicioJornada'])) {
  echo '<br> kmTotalesInicioJornada: <br>';
  var_dump($_SESSION['kmTotalesInicioJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida kmTotalesInicioJornada <br><hr>';

if(isset($_SESSION['kmOcupadoFinJornada'])) {
  echo '<br> kmOcupadoFinJornada: <br>';
  var_dump($_SESSION['kmOcupadoFinJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida kmOcupadoFinJornada <br><hr>';

if(isset($_SESSION['kmOcupadoInicioJornada'])) {
  echo '<br> kmOcupadoInicioJornada: <br>';
  var_dump($_SESSION['kmOcupadoInicioJornada']);
  echo '<hr>';
} else echo '<br> NO está establecida kmOcupadoInicioJornada <br><hr>';

if(isset($_SESSION['hojaTotalEfectivoEntregar'])) {
  echo '<br> hojaTotalEfectivoEntregar: <br>';
  var_dump($_SESSION['hojaTotalEfectivoEntregar']);
  echo '<hr>';
} else echo '<br> NO está establecida hojaTotalEfectivoEntregar <br><hr>';

if(isset($_SESSION['hojaTotalRecaudacionAjustado'])) {
  echo '<br> hojaTotalRecaudacionAjustado: <br>';
  var_dump($_SESSION['hojaTotalRecaudacionAjustado']);
  echo '<hr>';
} else echo '<br> NO está establecida hojaTotalRecaudacionAjustado <br><hr>';

if(isset($_SESSION['utilidad'])) {
  echo '<br> utilidad: <br>';
  var_dump($_SESSION['utilidad']);
  echo '<hr>';
} else echo '<br> NO está establecida utilidad <br><hr>';

if(isset($_SESSION['ganancia_dia'])) {
  echo '<br> ganancia_dia: <br>';
  var_dump($_SESSION['ganancia_dia']);
  echo '<hr>';
} else echo '<br> NO está establecida ganancia_dia <br><hr>';
