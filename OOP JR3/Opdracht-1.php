
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> Hello world </p>
<?php

class person{

    public function __construct(public $name, public $surname, public $age){

    }
}

$john = new person("John", "Doe", 18);
$jake = new person("Jake", "Frans", 21);
$tom = new person("Tom", "Mie", 38);


var_dump($john);
var_dump($jake);
var_dump($tom)

    ?>

</body>
</html>

