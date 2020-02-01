<?php
$x = [ 
		["id"=>"1","F.I.O"=>"Jamshid","tug_s"=>"1999-06-29"],
		["id"=>"2","F.I.O"=>"Temur","tug_s"=>"1998-11-23"],
		["id"=>"3","F.I.O"=>"Ravshan","tug_s"=>"1997-11-23"],
		["id"=>"4","F.I.O"=>"Ravshan","tug_s"=>"1997-11-23"]

	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table</title>
</head>
<body>
	<table border="2">
		<thead>
			<th>#</th>
			<th>F.I.O</th>
			<th>Tug'ilgan sanasi</th>
		</thead>
		<tbody>
			<!-- 
				<?php  foreach ($x as $value):?>
				<tr>
					<td><?= $value['id'] ?></td>
					<td><?= $value['F.I.O'] ?></td>
					<td><?= $value['tug_s'] ?></td>
				</tr>
				<?php endforeach; ?> 
			-->
<!--
			<?php for($value=0; $value<=2; $value++) { ?>
				<tr>
					<td><?php echo $x[$value]["id"]    ?></td>
					<td><?php echo $x[$value]["F.I.O"] ?></td>
					<td><?php echo $x[$value]["tug_s"] ?></td>
				</tr>
			<?php } ?>
-->
            <?php foreach($x as $value) { ?>
				<tr>
					<td><?php echo $value["id"]    ?></td>
					<td><?php echo $value["F.I.O"] ?></td>
					<td><?php echo $value["tug_s"] ?></td>
				</tr>
			<?php } ?>
            
		</tbody>
	</table>
</body>
</html>

<!-- <?php
$a = [4,2,6,8,3,10,11,12];
$c = ["one"=>"Hello","two"=>"Hallo"];
$b = array_merge($a,$c);
// $b=array_values($b);
// $b=array_keys($b);
print_r($a) ;

print_r($b) ;

$b=array_keys($b);

print_r($b);

print_r($c) ;
?>
<?php
$a=[1,2,3,5,6];
echo "Hello world";
for($x=0;$x<count($a);$x++){
    echo "\n"."$a[$x]";
}
foreach($a as $x){
    echo "\n"."$x";
}
?> -->