<?php session_start(); ?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="celular.css" />
  <meta charset="UTF-8">
  <title>Controle de Estoque</title>
 </head>
<SCRIPT LANGUAGE="JAVASCRIPT">
<!--

var now = new Date();
var mName = now.getMonth() +1 ;
var dName = now.getDay() +1;
var dayNr = now.getDate();
var yearNr=now.getYear();
if(dName==1) {Day = "Domingo";}
if(dName==2) {Day = "Segunda-feira";}
if(dName==3) {Day = "Terça-feira";}
if(dName==4) {Day = "Quarta-feira";}
if(dName==5) {Day = "Quinta-feira";}
if(dName==6) {Day = "Sexta-feira";}
if(dName==7) {Day = "Sábado";}
if(mName==1){Month = "Janeiro";}
if(mName==2){Month = "Fevereiro";}
if(mName==3){Month = "Março";}
if(mName==4){Month = "Abril";}
if(mName==5){Month = "Maio";}
if(mName==6){Month = "Junho";}
if(mName==7){Month = "Julho";}
if(mName==8){Month = "Agosto";}
if(mName==9){Month = "Setembro";}
if(mName==10){Month = "Outubro";}
if(mName==11){Month = "Novembro";}
if(mName==12){Month = "Dezembro";}
if(yearNr < 2000) {Year = 1900 + yearNr;}
else {Year = yearNr;}
var todaysDate =(" " + Day + ", " + dayNr + " de " + Month + " de " + Year);

document.write('  '+todaysDate);

//-->
</SCRIPT>
  <body>
 
 
  <div id="fundo">
  <img width="100%" height="100%" src="imgs/fundo.jpg">
  </div>
   <div id="lateral">
   <h2>Controle de Estoque</h2>
   <hr>
   <center>
   <table id="usuario">
   <tr>
     <td><b>Seja Bem-Vindo <?php echo $_SESSION['usuario']; ?><br>
	 São exatamente <span id="Clock">00:00:00</SPAN><br>Hoje é
	 <SCRIPT LANGUAGE="JavaScript">
<!--
  var Elem = document.getElementById("Clock");
  function Horario(){ 
    var Hoje = new Date(); 
    var Horas = Hoje.getHours(); 
    if(Horas < 10){ 
      Horas = "0"+Horas; 
    } 
    var Minutos = Hoje.getMinutes(); 
    if(Minutos < 10){ 
      Minutos = "0"+Minutos; 
    } 
    var Segundos = Hoje.getSeconds(); 
    if(Segundos < 10){ 
      Segundos = "0"+Segundos; 
    } 
    Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
    } 
    window.setInterval("Horario()",1000);
	document.write('  '+todaysDate);
//-->
</SCRIPT>
<br></b></td>
   </tr>
	</table>
	</center>
	<div id="menu">
	<ul id="listamenu">
	<a href="sistema.php"><li>Página Principal</li></a><br><br><br><br>
	<a href="buscanr.php"><li>Estoque</li></a><br><br><br><br>
	<a href="cadprod.php"><li>Cadastro de Produtos</li></a><br><br><br><br>
    <a href="movimentacoes.php"><li>Operações Realizadas</li></a><br><br><br><br>
	<a href="cadfunc.php"><li>Cadastro de Funcionários</li></a><br><br><br><br>
	<a href="logout.php"><li>Sair</li></a>
	</ul>
	</div>
   </div>  
 
  
  </body>
</html>