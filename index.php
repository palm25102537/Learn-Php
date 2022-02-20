"<!DOCTYPE html>
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
    <?php
    if(!false){
      echo "hello";
    }elseif(true){
      echo "bravo";
    };

    $numbers = [["id"=>1,"name"=>"palm"],["id"=>2,"name"=>"wasin"],["id"=>3,"name"=>"opal"]];

    // $numbers = [1,2,3,4]

    echo "<br>";

    // $numbers = array(1,2,3,4);

    foreach($numbers as $number){
      echo $number["name"]."&nbsp;";
    };
     
    function sayHello(){
      echo "hello";
    }

 

    sayHello()
    ?>
  </div>

</body>

</html>