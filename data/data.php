<?php



//Combine them together and print out the result.

function randomName() {

    //PHP array containing forenames.
    $names = array(
        'Christopher',
        'Ryan',
        'Ethan',
        'John',
        'Zoey',
        'Sarah',
        'Michelle',
        'Samantha',
    );

    //PHP array containing surnames.
    $surnames = array(
        'Walker',
        'Thompson',
        'Anderson',
        'Johnson',
        'Tremblay',
        'Peltier',
        'Cunningham',
        'Simpson',
        'Mercado',
        'Sellers'
    );

    //Generate a random forename.
    $random_name = $names[mt_rand(0, sizeof($names) - 1)];

    //Generate a random surname.
    $random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

    echo $random_name . ' ' . $random_surname;

}

function randomFirst() {

    //PHP array containing forenames.
    $names = array(
        'Christopher',
        'Ryan',
        'Ethan',
        'John',
        'Zoey',
        'Sarah',
        'Michelle',
        'Samantha',
    );

    //Generate a random forename.
    $random_name = $names[mt_rand(0, sizeof($names) - 1)];

    echo $random_name;

}

$myName = 'Stephen Haynult';
$myFirstName = 'Stephen';

?>
