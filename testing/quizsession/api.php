<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://opentdb.com/api.php?amount=3');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
// $result=json_encode($result);
// $result=json_decode($result,true);
$array = json_decode($result,true);
return $array['results'];
// for($i=0;$i<3;$i++){
//   $que =  $result['results'][$i]['question'];
//   echo $que;
// }
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

?>
