<!doctype html>
<head>
    <title>
    matrix calculator
</title>
</head>
<?php
$result1="";
$result2="";
$result3="";
$result4="";
if (isset($_POST['oparetor'])){
    $array1 = $_POST['a1'];
    $array2 = $_POST['a2'];
    $array3 = $_POST['a3'];
    $array4 = $_POST['a4'];
    $array5 = $_POST['a5'];
    $array6= $_POST['a6'];
    $array7 = $_POST['a7'];
    $array8 = $_POST['a8'];

    $oparetor=$_POST['oparetor'];
    if(is_numeric($array1)&& is_numeric($array2)){
    if($oparetor=="Add"){
        $result1 = $array1 + $array2;
        $result2 = $array3 + $array4;
        $result3 = $array5 + $array6;
        $result4 = $array7 + $array8;
    

    }
    
       else if($oparetor=="Sub"){
        $result1 = $array1 - $array2;
        $result2 = $array3 - $array4;
        $result3 = $array5 - $array6;
        $result4 = $array7 - $array8;
       }
    
    
           else if($oparetor=="Multi"){
            $result1 = $array1 * $array2;
            $result2 = $array3 * $array4;
            $result3 = $array5 * $array6;
            $result4 = $array7 * $array8;
           }
    
          }
}

?>
<body>
    <h2>lets build a calculator</h2>
    <form method ="POST">
        <label>
          Array1
        </label>
    <input type= "number" name="a1" value="<?php echo $array1;?>">
        <label>
          Array2
        </label>
    <input type= "number" name =a2 value="<?php echo $array2;?>">
        <label>
          Result1
        </label>
    <input name= "result1" value="<?php echo $result1;?>" ><br>
       <label>
          Array3
        </label>
    <input type= "number" name =a3 value="<?php echo $array3;?>">
        <label>
          Array4
        </label>
   <input type= "number" name =a4 value="<?php echo $array4;?>">
        <label>
          Result2
        </label>
    <input name= "result2" value="<?php echo $result2;?>" ><br>
        <label>
          Array5
        </label>
   <input type= "number" name =a5 value="<?php echo $array5;?>">
        <label>
          Array6
        </label>
   <input type= "number" name =a6 value="<?php echo $array6;?>">
        <label>
          Result3
        </label>
    <input name= "result3" value="<?php echo $result3;?>" ><br>
        <label>
          Array7
        </label>
   <input type= "number" name =a7 value="<?php echo $array7;?>">
        <label>
          Array8
        </label>
   <input type= "number" name =a8 value="<?php echo $array8;?>">
        <label>
          Result4
        </label>
    <input name= "result4" value="<?php echo $result4;?>" ><br>


    <input type= "submit" value ="Add" name="oparetor" >
    <input type= "submit" value ="Sub" name="oparetor">
    <input type= "submit" value= "Multi" name="oparetor">
    
</from>
</body>


