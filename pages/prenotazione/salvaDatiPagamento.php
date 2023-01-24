<?php
$metodoPagamento = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Salvo la request
    $metodoPagamento = test_input($_POST["metodoPagamento"]);
   


    //Apro il json
    $jsonString = file_get_contents('../../assets/js/storeData.json');
    $tempArray = json_decode($jsonString, true);

    //Aggiunge il metodo di pagamento al ultimo elemento del array
    $lenghtArray = count($tempArray);
    $tempArray[$lenghtArray-1]['pagamento']=$metodoPagamento;

    //Aggiorno il json
    $newJsonString = json_encode($tempArray);
    file_put_contents('../../assets/js/storeData.json', $newJsonString);
    echo "Update Fatto";
}

function test_input($dati)
{ //controlla i dati in input
    $dati = trim($dati); //La funzione rimuove i caratteri non necessari (spazio extra, tabulazione, nuova riga) dai dati di input
    $dati = htmlspecialchars($dati); //La funzione converte i caratteri speciali in entità HTML.
    return $dati;
}
