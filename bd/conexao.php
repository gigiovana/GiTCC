<?php
function conectar(){
  $conecta = new PDO('sqlite:tcc.db');
  // $conecta = mysqli_connect('sql110.epizy.com', 'epiz_22889561', 'H8KbAEiNSH', 'epiz_22889561_tcc');
  // Link do phpmyadmin:
  // http://185.27.134.10/login.php?2=epiz_22889561wejghelqwdtg3e54gVG5wcmVVOVVSWHBOUkZFeFRWaDNhRWxUUldoSldIZzRaa2g0T0daSWVEaG1TSGhKVlRBMWNGSlZSbWxUZW1oSg==wejghelqwdtg3e54gsql110.epizy.comwejghelqwdtg3e54gepiz_22889561_tcc&db=epiz_22889561_tcc
  // $conecta = mysqli_connect('locahost', 'root', '', 'GiTCC');

    return $conecta;
}

 ?>
