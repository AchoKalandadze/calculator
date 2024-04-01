<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="num1">
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2">
        <button type="submit">=</button>
    </form>
    <h1>
        <?php
            if(isset($_POST['num1']) && isset($_POST['num2'])){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $operator=$_POST['operator'];
                // echo $operator;
                if ($operator=="+"){
                    echo $num1+$num2;
                }elseif ($operator=="-"){
                    echo $num1-$num2;
                }elseif ($operator=="*"){
                    echo $num1*$num2;
                }else {
                    if($num2==0){
                        echo "0-ზე გაყოფა დაუშვებელია";
                    } else{
                        echo $num1/$num2;
                    }
                }
            }
            $operator=NULL;
            $num1=NULL;
            $num2=NULL;
    ?>
    </h1>

</body>
</html>