<?php
$paymentId=$_POST['paymentId'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apiquerysandbox.cieloecommerce.cielo.com.br/1/sales/{$paymentId}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: text/json",
    "Host: apiquerysandbox.cieloecommerce.cielo.com.br",
    "MerchantId: 81d4a545-4e51-4ab6-aa73-746e3595d42e",
    "MerchantKey: TQGPYFNQXSHAYYTEYJUTLXYSZLEFIPOZDZLXJOPZ",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo '<pre>';
  // print_r(json_decode($response,true));
  echo $response;
}