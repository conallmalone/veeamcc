<?php
function currencyCalc() {
    $req_url = 'https://open.er-api.com/v6/latest/CZK';
    $response_json = file_get_contents($req_url);
    $response = json_decode($response_json);

    $eur_price = round($response->rates->EUR, 2);
    $usd_price = round($response->rates->USD, 2);
    $gbp_price = round($response->rates->GBP, 2);

    $array['eur'] = $response->rates->EUR;
    $array['usd'] = $response->rates->USD;
    $array['gbp'] = $response->rates->GBP;

    return $array;
}

$data = currencyCalc();
echo "<ul><li>CZK: 1</li>
<li>EUR: " .  $data['eur'] . "</li>" . 
"<li>USD: " . $data['usd'] . "</li>" . 
"<li>GBP: " . $data['gbp'] . "</li><ul>";

