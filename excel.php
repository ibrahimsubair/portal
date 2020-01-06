<?php 

// $servername = "localhost";
// $username = "username";
// $password = "password";

// Create connection

// $conn = new mysqli($results, $username, $password);

// Check connection

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";

// header('Content-Type: application/vnd.ms-excel');
// header('Content-Disposition: attachment;filename="file.xlsx"');
// header('Cache-Control: max-age=0');
// $writer->save('php://output');


// $connect = mysql_connect("localhost", "root", "", "results");
// $output = '';

// if(isset($_POST["export_excel"]))
// {
// 	$sql = "SELECT * FROM myresults ORDER BY id DESC ";
// 	$result = mysql_query($connect, $sql);
// 	if (mysqli_num_rows($result)>0) {
// 		$output .='
// 		<table class = "table" bordered = "1">
// 		<tr>
// 		<th>id</th>
// 		<th>First_Name </th>
// 		<th>Last_Name </th>
// 		<th>Scores </th>
// 		</tr>';
// 		while ($row = mysqli_fetch_array($result)) {

// 			$output.='
// 			<tr>
// 				<td>'.$row["id"].'</td>
// 				<td>'.$row["First_Name"].'</td>
// 				<td>'.$row["Last_Name"].'</td>
// 				<td>'.$row["Scores"].'</td>
// 			</tr>';
			
// 		}
// 		$output .='</table>';
// 		header("Content-Type: application/xls");
// 		header("Content-Disposition: attachment; filename = download.xls");
// 		echo $output;
// 	}
// }
?>
<?php

include "connect.php";



$DB_TBLName = "users"; 
$filename = "excelfilename";  //your_file_name
$file_ending = "csv";   //file_extention

header("Content-Type: text/csv");    
header("Content-Disposition: attachment; filename=$filename.".$file_ending);  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = ",";

$sql="SELECT * FROM users"; 
$resultt = $conn->query($sql);
while ($property = mysqli_fetch_field($resultt)) { //fetch table field name
    echo $property->name.",";
}

print("\n");    

while($row = mysqli_fetch_row($resultt))  //fetch_table_data
{
    $schema_insert = "";
    for($j=0; $j< mysqli_num_fields($resultt);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= ",";
    print(trim($schema_insert));
    print "\n";
}
?>


