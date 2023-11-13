<?php
function calculer($num1, $num2, $operation)
{
    switch ($operation) {
        case "addition":
            return $num1 + $num2;
            break;

        case "soustraction":
            return $num1 - $num2;
            break;

        case "multiplication":
            return $num1 * $num2;
            break;

        case "division":

            // Vérifie si le diviseur n'est pas zéro

            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erreur : Division par zéro";
            }
            break;

        default:
            return "Opération non valide";
            break;
    }
}

// Vérifie si les champs ont été remplit 

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Appelle de la fonction et affichage de résultat

    $result = calculer($num1, $num2, $operation);
    echo "$num1 $operation $num2 = $result";
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
}
