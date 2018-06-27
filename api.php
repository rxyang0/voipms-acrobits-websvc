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

header('Content-Type: application/json');
echo json_encode($data);
