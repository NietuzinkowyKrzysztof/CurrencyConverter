<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
    <h1>Currency Converter</h1>

    <form action="index.php" method="post">
        <label>From:</label>
        <select name="currency1" id="currency1">
            <?php
            $fromCurrency = $_POST['currency1'] ?? '';
            $toCurrency = $_POST['currency2'] ?? '';
            
            $currencies = [
                "AUD" => "Australian Dollar",
                "BGN" => "Bulgarian Lev",
                "BRL" => "Brazilian Real",
                "CAD" => "Canadian Dollar",
                "CHF" => "Swiss Franc",
                "CNY" => "Chinese Yuan",
                "CZK" => "Czech Koruna",
                "DKK" => "Danish Krone",
                "EUR" => "Euro",
                "GBP" => "British Pound",
                "HKD" => "Hong Kong Dollar",
                "HRK" => "Croatian Kuna",
                "HUF" => "Hungarian Forint",
                "IDR" => "Indonesian Rupiah",
                "ILS" => "Israeli Shekel",
                "INR" => "Indian Rupee",
                "ISK" => "Icelandic Krona",
                "JPY" => "Japanese Yen",
                "KRW" => "South Korean Won",
                "MXN" => "Mexican Peso",
                "MYR" => "Malaysian Ringgit",
                "NOK" => "Norwegian Krone",
                "NZD" => "New Zealand Dollar",
                "PHP" => "Philippine Peso",
                "PLN" => "Polish Zloty",
                "RON" => "Romanian Leu",
                "RUB" => "Russian Ruble",
                "SEK" => "Swedish Krona",
                "SGD" => "Singapore Dollar",
                "THB" => "Thai Baht",
                "TRY" => "Turkish Lira",
                "USD" => "US Dollar",
                "ZAR" => "South African Rand"
            ];

            foreach ($currencies as $code => $name) {
                $selected = ($fromCurrency === $code) ? 'selected' : '';
                echo "<option value=$code $selected>$code - $name</option>";
            }
            ?>
        </select>
        <input type="number" name="num1" required step="0.01">

        <label>To:</label>
        <select name="currency2" id="currency2">
            <?php
            foreach ($currencies as $code => $name) {
                $selected = ($toCurrency === $code) ? 'selected' : '';
                echo "<option value=$code $selected>$code - $name</option>";
            }
            ?>
        </select>
        <input type="submit" value="Convert" name='Convert' class="button">
    </form>
    </div>
</body>

</html>
