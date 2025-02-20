<?php
function convertCurrency(int $amount, string $fromCurrency, string $toCurrency) {
    $data = include('api.php');

    $fromRate = $data['data'][$fromCurrency];
    $toRate = $data['data'][$toCurrency];
    
    $convertedAmount = $amount * ($toRate / $fromRate);

    return number_format($convertedAmount, 2);
}