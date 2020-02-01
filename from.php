<?php include 'baza.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="POST">
    <?php foreach($my_array as $key=>$value):?>
    <div>
        <label for="">
           <b style="font-family:san-serif;"><?=++$key.") ".$value['question']?></b>       
         </label>
         <br>
<?php foreach($value["answers"] as $key1=>$val):?>
        <label for=""><b><?=($key1)?>)</b></label>
        <label for=""><?=$val?></label>
        <input type="radio" name="name<?=$key?>" value="<?=$key1?>">
        <br>
<?php endforeach;?>
    </div>
    <br>
<?php  endforeach;?>
<input type="submit">
</form>
</body>
</html>