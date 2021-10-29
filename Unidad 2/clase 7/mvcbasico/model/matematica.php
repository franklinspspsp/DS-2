<?php
   class Matematica
   {
      public function suma($n1, $n2)
      {
         $su = $n1 + $n2;
         return $su;
      }

      public function resta($n1, $n2)
      {
         $pr = $n1 - $n2;
         return $pr;
      }

      public function producto($n1, $n2)
      {
         $pr = $n1 * $n2;
         return $pr;
      }

      public function divide($n1, $n2)
      {
         $pr = $n1 / $n2;
         return $pr;
      }

      public function fact($n1)
      {
         $factorial = 1;
         for ($i = 1; $i <= $n1; $i++)
         {
            $factorial = $factorial * $i;
         }
         return $factorial;
      }

      public function pot($n1, $n2)
      {
         return pow($n1, $n2);
      }

      public function sen($n1)
      {
         return sin(deg2rad($n1));
      }

      public function cos($n1)
      {
         return cos(deg2rad($n1));
      }

      public function tang($n1)
      {
         return (tan((($n1) * pi())/180));
      }

      public function raiz($n1)
      {
         return sqrt($n1);
      }
   }
?>