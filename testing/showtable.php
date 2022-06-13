<?php
$table="";
if(($_SERVER["REQUEST_METHOD"] == "POST")){
    print_r( $_POST);
    $data=$_POST;
     $table='<table>
        <tr>
            <th>
                COURSE
            </th>
            <th>
                DAYS
            </th>
            <th>
                FEES
            </th>
        
        <tr>';
        $total=count($data["data"]);
        echo $total;
        for($x=0;$x<$total;$x++){
            $table.='<tr><td>'.$data["data"][$x]["course"].'</td>';
            $table.='<td>'.$data["data"][$x]["days"].'</td>';
            $table.='<td>'.$data["data"][$x]["fees"].'</td></tr>';
        } 
        
    
    $table.='</table>';
    echo $table;
}
?>