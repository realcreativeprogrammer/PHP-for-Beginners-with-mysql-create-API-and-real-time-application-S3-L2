<?php
class Car{

  function __construct($value,$secondval){
    echo $secondval.' hi iam from construct '.$value;
  }
}

$firstobj=new Car('php','dsad');
echo '<br>';
$second=new Car('js','dsddsa');

?>