<?php
//prisijungimas prie db
function connect()
{
    global $host, $db, $username, $password, $options;
    $dns = "mysql:host=$host;dbname=$db";
    try {
        $conn = new PDO($dns, $username, $password, $options);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
    return $conn;
}

//visi filmai + ju zanras
function allFilms()
{
    $conn = connect();
    try {
        if ($conn) {
            $stmt = $conn->query("SELECT filmai.pavadinimas, filmai.id, filmai.aprasymas, 
                              filmai.trukme,  filmai.rezisierius, kategorijos.pavadinimas AS kategorijosPavadinimas
                              FROM filmai 
                              INNER JOIN kategorijos ON filmai.kategorijos_id=kategorijos.id");
            $filmai = $stmt->fetchAll();
            $conn = null;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
    return $filmai;
}
?>