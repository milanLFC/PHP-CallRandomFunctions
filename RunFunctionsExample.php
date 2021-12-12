<?php

function Func1() {
  echo "In function Func1()<br>";
}

function Func2() {
  echo "In function Func2()<br>";
}

function Func3() {
  echo "In function Func3()<br>";
}

function Func4() {
  echo "In function Func4()<br>";
}

function RunFunctions($FuncArray,$NoOfFunctionsToFind) { 
  $functionsSoFar = array();

  $chosenFunc = $FuncArray[rand(0,count($FuncArray)-1)];
  $functionCount = 0;

  while ($functionCount != $NoOfFunctionsToFind) {
  
    while (in_array($chosenFunc,$functionsSoFar)) {
      $chosenFunc = $FuncArray[rand(0,count($FuncArray)-1)];
    }

    array_push($functionsSoFar, $chosenFunc);
    $chosenFunc();
    $functionCount++;

  }
}

$FuncArray = array("Func1", "Func2", "Func3", "Func4");

?>

<!DOCTYPE html>
<html>
<body>

<h1>My Functions</h1>
<p>My functions</p>

<?php

  RunFunctions($FuncArray,4);  

  echo "<br>finished<br>";
?>

</body>
</html>
