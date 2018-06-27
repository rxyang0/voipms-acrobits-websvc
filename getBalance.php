<?

$currency = "USD";

$postfields = array(
    'api_username'=>$_GET['api_username'],
    'api_password'=>$_GET['api_password'],
    'method'=>'getBalance'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($ch, CURLOPT_URL, "https://voip.ms/api/v1/rest.php");
$data = json_decode(curl_exec($ch), true);
curl_close($ch);

if ($data['status'] != "success") {
    $result = '{"balanceString" : "' . $currency . ' ' . round($data['balance']['current_balance'], 2) . '"}';
} else {
    $result = '{"balanceString" : "BAL ERROR"}';
}

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
echo $result;
