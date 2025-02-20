<?php
$url = "https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_TjWlgdesA8Zxt0SXvYnuPiy3bgriI0FcuJ8EJ2yY";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if ($response === false)
{
echo "An error occurred: " . curl_error($curl) . "<br> Please contact the administrator.";
exit;
}

else {
    $apiCurrencies = json_decode($response, true);
    return $apiCurrencies;
}
curl_close($curl);