<?php
   class Session
   {
      public static function existsAttribute($name)
      {
         $rpta = FALSE;
         if( isset($_SESSION[$name]))
         {
            $rpta = TRUE;
         }
         return $rpta;
      }

      public static function getAttribute($name)
      {
         $rpta = null;
         if( self::existsAttribute($name) )
         {
            $rpta = $_SESSION[$name];
         }
         return $rpta;
      }

      public static function getAttribute2($name)
      {
         $rpta = null;
         if( self::existsAttribute($name) )
         {
            $rpta = $_SESSION[$name];
            unset( $_SESSION[$name] );
         }
         return $rpta;
      }

      public static function setAttribute($name, $value)
      {
         $_SESSION[$name] = $value;
      }
   }
?>