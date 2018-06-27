<?
$postfields = array(
    'api_username'=>'yangrichard@protonmail.com',
    'api_password'=>'&v$PW?2o!s3#dGN*',
    'method'=>'getBalance'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_POST, true );
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($ch, CURLOPT_URL, "https://voip.ms/api/v1/rest.php");
$result = curl_exec($ch);
curl_close($ch);

$data=json_decode($result,true);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
echo json_encode($data);
