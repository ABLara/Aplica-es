
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_URL => "https://apisandbox.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n   'MerchantOrderId':'2014111703',\r\n   'Payment':{\r\n     'Type':'CreditCard',\r\n     'Amount':16784,\r\n     'Installments':1,\r\n     'SoftDescriptor':'123456789ABCD',\r\n     'CreditCard':{\r\n         'CardNumber':'4551870000000183',\r\n         'Holder':'Teste Holder',\r\n         'ExpirationDate':'12/2021',\r\n         'SecurityCode':'123',\r\n         'Brand':'Visa'\r\n     }\r\n   }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 377",
    "Content-Type: application/json",
    "Host: apisandbox.cieloecommerce.cielo.com.br",
    "MerchantId: 81d4a545-4e51-4ab6-aa73-746e3595d42e",
    "MerchantKey: TQGPYFNQXSHAYYTEYJUTLXYSZLEFIPOZDZLXJOPZ"
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


?>