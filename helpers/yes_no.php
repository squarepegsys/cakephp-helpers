<?php
class YesNoHelper extends AppHelper {

    function render($value=0) {

      if ($value) {
          return "Yes";
      }

      return "No";
    }
}
?>
