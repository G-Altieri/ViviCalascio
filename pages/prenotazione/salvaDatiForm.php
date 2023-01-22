<?php
$nome_cognome = $email = $telefono = $npersone = $data = $percorso = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cognome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $telefono = test_input($_POST["numTel"]);
    $npersone = test_input($_POST["numPersone"]);
    $percorso = test_input($_POST["percorso"]);
    $data = test_input($_POST["data"]);


    //Creo l oggetto da aggiungere al json
    $newData = array('nome' => $nome_cognome, 'email' => $email, 'numTel' => $telefono, 'numPersone' => $npersone, 'percorso' => $percorso, 'data' => $data);

    //Apro il json
    $jsonString = file_get_contents('../../assets/js/storeData.json');
    $tempArray = json_decode($jsonString, true);

    //Aggiungo i nuovi dati
    array_push($tempArray, $newData);

    //aggiorno il json
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
