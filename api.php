<?php
$xml = '<listings> 
         <listing> 
         <MerchantSku>'.$ModelKodu.'</MerchantSku> 
 <ProductName>'.$UrunAdi.'</ProductName> 
 <Price>'.$Fiyat'</Price> 
         <AvailableStock>'.$Miktar.'</AvailableStock> 
 <DispatchTime>3</DispatchTime> 
 <CargoCompany1>Aras Kargo</CargoCompany1> 
 <MaximumPurchasableQuantity>0</MaximumPurchasableQuantity> 
 </listing> 
        </listings>'; 
$service_url = 'https://listing-external.hepsiburada.com/listings/merchantid/<<MERCHANT_ID>>/inventory-uploads'; 
$curl = curl_init($service_url); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($curl, CURLOPT_POST, true); 
curl_setopt($curl, CURLOPT_POSTFIELDS, $xml); 
$header = array(     
'Authorization: Basic '. base64_encode('USERNAME:PASWORD'), 
'Content-Type: application/xml' 
); 
curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
echo $curl_response = curl_exec($curl);  
?>