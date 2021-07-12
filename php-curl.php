
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
 CURLOPT_URL => 'https://funnel-api.extsrv.com/api/customers/30890329/documents/OTHER',
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => '',
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 0,
 CURLOPT_FOLLOWLOCATION => true,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => 'POST',
 CURLOPT_POSTFIELDS => array('document'=> new CURLFILE('/C:/Users/igora/Downloads/1589531267267 (1).jpg')),
 CURLOPT_HTTPHEADER => array(
'x-auth-access-token: jk0OTIsImV4cCI6MTYyNTU3MDM5MiwiYXVkIjoiYXBpLXRlc3QtbWFya2V0cyJ9.bO6410TIu4jqAPxxn62LyD2nfywiI1smqmK5i7wqNVXnO6zpRApPN-OHFM4xS0U3wUMc6cBqA2Yq_WK4WpXyrw',
'Content-Type: application/json'
 
 ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
