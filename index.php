<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>

<body>
  <div>
    <?php
    //$+name of variable = declare variable
    $title = "Palm's Site";
    // $numberList = array(); // old way
    $numberList = [1, 2, 3, 4, '<h1>Hello World</h1>'];
    //numberList use index number as key
    $name = ["first_name" => 'Wasin', "last_name" => 'Hongnak'];
    $test = [["test" => 'test', "bla" => 'test3'], ["bla" => 'test2']];
    //name use first_name and last_name as key and Wasin is value
    print_r($numberList);
    print_r($test[0]["bla"]);
    echo $name['first_name'] . "&nbsp;&nbsp;&nbsp;" . $name['last_name']
    ?>
    <h1>'s Site</h1>
  </div>

</body>

</html>