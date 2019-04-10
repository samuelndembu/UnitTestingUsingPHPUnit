<?php 
class Brace {

  public function validBraces($braces) {
    if ($braces === "") {
      return true;
    } elseif (!is_string($braces)) {
      throw new InvalidArgumentException("Not a string");
    }

    $matching = array();

    for ($i = 0; $i < strlen($braces); $i++) {
      //allowed chars  (){}[]
      if (!($braces[$i] === "(" || $braces[$i] === ")" 
           || $braces[$i] === "{" || $braces[$i] === "}" 
           || $braces[$i] === "[" || $braces[$i] === "]")) {
        throw new InvalidArgumentException("Invalid string");
      } elseif ($braces[$i] === "(" || $braces[$i] === "{" || $braces[$i] === "[") {
        array_push($matching, $braces[$i]);
      } elseif ($braces[$i] === ")") {
        if (array_pop($matching) !== "(") {
          return false;
        }
      } elseif ($braces[$i] === "}") {
        if (array_pop($matching) !== "{") {
          return false;
        }
      } elseif ($braces[$i] === "]") {
        if (array_pop($matching) !== "[") {
          return false;
        }
      }
    }

    if (count($matching) == 0) {
      return true;
    }

    return false;
  }
}

?>