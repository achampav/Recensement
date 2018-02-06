<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
</head>
<body>
<table>
<?php
$db_username = "recensement";
$db_password = "recensement";
$db = "oci:dbname=recensement;charset=WE8MSWIN1252";
try{
$conn = new PDO($db,$db_username,$db_password);
$stmt = $conn->prepare("select dep,dep_desc from dep");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_NEXT)){
    printf("<tr><td>%s</td><td>%s</td></tr><br/>\n",$row["DEP"],$row["DEP_DESC"]);
}
}catch(Exception $e){
    echo $e->getMessage(),"\n";
}
?>
</table>
</body>
</html>
