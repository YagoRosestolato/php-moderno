<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas</h1>
    </header>

    <main>
        <?php 
            // Função para obter os dados da API
            function getBTCPrice() {
                $url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=brl';
                $response = file_get_contents($url);
                $data = json_decode($response, true);
                return $data['bitcoin']['brl'];
            }

            $numero = $_GET["numero"];
            $btc = getBTCPrice();
            $conversao = $numero / $btc;
            $btc_formatado = number_format($btc, 2, ',', '.');


            echo "<p>Seus R$ $numero equivalem $$conversao em Bitcoin (BTC)</p>";
            echo "<b>A cotação fixa de 1 BTC em reais é R$ $btc_formatado</b>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>
