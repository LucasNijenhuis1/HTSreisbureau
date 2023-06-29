<?php
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'reis_id' => $_POST['reis_id'],
        'reis_land' => $_POST['reis_land'],
        'reis_prijs' => $_POST['reis_prijs'],
        'reis_beschrijving' => $_POST['reis_beschrijving'],
        'reis_allinclusive' => $_POST['reis_allinclusive'],
        'reis_datum' => $_POST['reis_datum'],
        'reis_dagen' => $_POST['reis_dagen'],
        'reis_rating' => $_POST['reis_rating'],
        'reis_img1' => $_POST['reis_img1'],
        'reis_img2' => $_POST['reis_img2'],
        'rotterdam' => $_POST['rotterdam'],
        'eindhoven' => $_POST['eindhoven'],
        'amsterdam' => $_POST['amsterdam'],
        'dusseldorf' => $_POST['dusseldorf'],
    ];

    $sql = "UPDATE `reizen` SET `reis_land`=:reis_land, `reis_prijs`=:reis_prijs, `reis_beschrijving`=:reis_beschrijving, `reis_allinclusive`=:reis_allinclusive, `reis_datum`=:reis_datum, `reis_dagen`=:reis_dagen, `reis_rating`=:reis_rating, `reis_img1`=:reis_img1, `reis_img2`=:reis_img2, `rotterdam`=:rotterdam, `eindhoven`=:eindhoven, `amsterdam`=:amsterdam, `dusseldorf`=:dusseldorf WHERE reis_id=:reis_id";

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    header("Location: ../adminflights.php");
    exit();
}