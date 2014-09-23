<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title> harjutus-7 </title>
</head>
<body >
<?php
    $count = 1;

    while ($count <= 10) {
        echo $count;
        $count += 1;
    }
?>
<h2> While loop </h2>
<?php
    $count = 10;

    while ($count <= 100 ) {
        echo $count . ', ';
        $count += 1;
    }
?>

<!-- <h3> Infinite while loop </h3> -->
<?php
/*    $count = 1;

    while ($count <= 10) {
        echo $count;
        $count = 1;
    }*/
?> 

<h3> If statement in while loop </h3>
<?php
    $count = 1;

    while ($count <=10) {
        if ($count == 3) {
            echo "<script>alert('kolm');</script>";
        } elseif($count == 7) {
            echo "<script>alert('seitse');</script>";
            
        } else {
        	echo $count;
        }

        $count += 1;
    }
?>
<h2> For loop </h2>
<?php
    for ($count = 1; $count <= 20; $count += 1) {
       if ($count % 2 == 0) {
       	echo $count . ' on paarisarv.<br>';}
       	else {echo $count . ' on paarituarv.<br>';}
       }
        
    
?> 

<h2> Foreach loop </h2>
<?php
    $firmad = array("Apple", "Sony", "Samsung", "Nokia", "HTC");
?>
<?php
	echo "<ul>";
    foreach ($firmad as $firma) {
        echo "<li>" . $firma . "</li>";

    };
    echo "</ul>";
?>

<?php
    $ained = array("Serveripoolsete veebirakenduste programmeerimine", "3D alused", "SHSK", "Veebiarendus", "Veebikujundus");
?>
<?php
	echo "<ol>";
    foreach ($ained as $aine) {
        echo "<li>" . $aine . "</li>";

    };
    echo "</ol>";
?>

<table border="1" bgcolor="red"> 
<tbody>
<tr> 
<td bgcolor="lightgray"> First_name </td>
<td bgcolor="white"> Markus </td>
</tr>
<tr> 
<td bgcolor="lightgray"> Last_name </td>
<td bgcolor="white"> J6emets </td>
</tr>
<tr> 
<td bgcolor="lightgray"> E-mail </td>
<td bgcolor="white"> markus@tdl.ee </td>
</tr>
<tr> 
<td bgcolor="lightgray"> Age </td>
<td bgcolor="white"> 20 </td>
</tr>
</tbody>
</table>



</body>
</html>