<?php
include('src/function.php');
include('template/layout.php');

if (isset($_POST['Convert'])) {
    $amount = $_POST['num1'] ?? null;
    $fromCurrency = $_POST['currency1'];
    $toCurrency = $_POST['currency2'];

    $convertedAmount = convertCurrency($amount, $fromCurrency, $toCurrency);

    echo "<h2>Result:</h2><br>";
    echo "<p>$amount $fromCurrency = $convertedAmount $toCurrency</p>";
}