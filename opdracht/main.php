<html>
<body>

<table id="table">
    
<?php 
$tarik = array("voornaam"=>"tarik","achternaam"=>"chemlali","klas"=>"9c","Leeftijd"=>17,"Woonplaats"=>"Mijdrecht");
function maakRij($key,$value){
    
    echo "<tr> <td> $key </td> <td> $value </td> </tr>" ;
}


$bgkleur = $_POST["bgkleur"]; 
$dikte = $_POST["border"];
$padding = $_POST["padding"];
$textkleur = $_POST["txtkleur"];
echo "<style>
td,table,tr,th{
    border: $dikte;
    border-collapse: collapse;
}
td,th{
    padding: $padding;
}
</style>";
echo    "<body style='color:$textkleur;background-color:$bgkleur'>" ;  
 
foreach($tarik as $key => $value){
 maakRij($key,$value);
}

?>
    
</table>
</body>
</hmtl>