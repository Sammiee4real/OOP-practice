<?php
  function isPalindrome($string){
      return boolval(strrev($string) === $string);
  }
  echo isPalindrome('abba');
?>