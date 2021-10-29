<?php
   session_start();
   require_once '../util/Session.php';
   $n1 = Session::getAttribute2("num1");
   $n2 = Session::getAttribute2("num2");
   $rpta = Session::getAttribute2("rpta");
   $action = Session::getAttribute2("action");
?>

<html>
   <head>
      <title>Operaciones Simples</title>
   </head>
   <body>
      <h1>Operaciones Simples</h1>
      <form method="post" action="../controller/Controller.php">
         <div>
            <label>Operacion</label>
            <select name="action">
               <option value="sumar">Suma</option>
               <option value="restar">Resta</option>
               <option value="multiplicar">Producto</option>
               <option value="dividir">Division</option>
               <option value="factorial">Factorial</option>
               <option value="potencia">Potencia</option>
               <option value="seno">Seno</option>
               <option value="coseno">Coseno</option>
               <option value="tangente">Tangente</option>
               <option value="raiz">Raiz</option>
            </select>
         </div>
         <div>
            <label>Número 1</label>
            <input type="text" name="num1">
         </div>
         <div>
            <label>Número 2</label>
            <input type="text" name="num2">
         </div>
         <div>
            <input type="submit" value="Procesar">
         </div>
      </form>
      <div>
         <table>
            <tr>
               <td>Action :</td>
               <td><?php echo($action); ?></td>
            </tr>
            <tr>
               <td>Num 1 :</td>
               <td><?php echo($n1); ?></td>
            </tr>
            <tr>
               <td>Num 2 :</td>
               <td><?php echo($n2); ?></td>
            </tr>
            <tr>
               <td>Rpta :</td>
               <td><?php echo($rpta); ?></td>
            </tr>
         </table>
      </div>
   </body>
</html>