<?php
   session_start();
   require_once '../model/matematica.php';
   require_once '../util/session.php';
   $action = $_REQUEST["action"];

   $obj = new Controller();
   $target = call_user_func(array($obj,$action));
   header("location: $target");
   return;

   class Controller
   {
      public function sumar()
      {
         $n1 = $_REQUEST["num1"];
         $n2 = $_REQUEST["num2"];
         $mate = new Matematica();
         $rpta = $mate->suma($n1, $n2);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("num2", $n2);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Sumar");
         return "../view/main.php";
      }

      public function restar()
      {
         $n1 = $_REQUEST["num1"];
         $n2 = $_REQUEST["num2"];
         $mate = new Matematica();
         $rpta = $mate->resta($n1, $n2);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("num2", $n2);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Restar");
         return "../view/main.php";
      }

      public function multiplicar()
      {
         $n1 = $_REQUEST["num1"];
         $n2 = $_REQUEST["num2"];
         $mate = new Matematica();
         $rpta = $mate->producto($n1, $n2);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("num2", $n2);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Multiplicar");
         return "../view/main.php";
      }

      public function dividir()
      {
         $n1 = $_REQUEST["num1"];
         $n2 = $_REQUEST["num2"];
         $mate = new Matematica();
         $rpta = $mate->divide($n1, $n2);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("num2", $n2);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Dividir");
         return "../view/main.php";
      }

      public function factorial()
      {
         $n1 = $_REQUEST["num1"];
         $mate = new Matematica();
         $rpta = $mate->fact($n1);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Factorial");
         return "../view/main.php";
      }

      public function potencia()
      {
         $n1 = $_REQUEST["num1"];
         $n2 = $_REQUEST["num2"];
         $mate = new Matematica();
         $rpta = $mate->pot($n1, $n2);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("num2", $n2);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Potencia");
         return "../view/main.php";
      }

      public function seno()
      {
         $n1 = $_REQUEST["num1"];
         $mate = new Matematica();
         $rpta = $mate->sen($n1);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Seno");
         return "../view/main.php";
      }

      public function coseno()
      {
         $n1 = $_REQUEST["num1"];
         $mate = new Matematica();
         $rpta = $mate->cos($n1);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Coseno");
         return "../view/main.php";
      }

      public function tangente()
      {
         $n1 = $_REQUEST["num1"];
         $mate = new Matematica();
         $rpta = $mate->tang($n1);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Tangente");
         return "../view/main.php";
      }

      public function raiz()
      {
         $n1 = $_REQUEST["num1"];
         $mate = new Matematica();
         $rpta = $mate->raiz($n1);
         Session::setAttribute("num1", $n1);
         Session::setAttribute("rpta", $rpta);
         Session::setAttribute("action", "Raiz");
         return "../view/main.php";
      }
   }
?>