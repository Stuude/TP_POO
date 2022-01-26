<?php 

/* TP PHP ORIENTE OBJET*/

// Expliquez les concepts POO suivants en expliquant dans quel cas nous pouvons utiliser ces éléments et comment techniquement ils s’utilisent : 

/* L'héritage */

// C'est lorsqu'on apporte les propriétés d'une classe à une autre, on l'utilise avec extends

exemple:

class Parents {
    $yeux;
    $cheveux;
}

class Enfants extends Parents { La class Enfants hérite des propriétés de parents
    "$yeux";
    "$cheveux";
}


/* L’interface */

// L'interface est un ensemble de fonction qu'on définit et qu'on veut appliquer dans une class + on est obligé de mettre les fonctions dedans

exemple:

interface Monstre {
    function Griffe();
    function Morsure();
}

class Gobelin implements Monstre {
    $Vol;

    function Griffe(){
    }
    function Morsure(){
    }
}
// vu qu'on a ajouté l'interface dans notre classe on est obligé d'utiliser les fonctions présentes dans celle ci 

/* La méthode abstraite */

// C'est lorsqu'on marque une méthode avec celle ci 

/* Les propriété privée / protected */

// Propriété privée

// La propriété privée est lorsque qu'on définit des propriétés
// des classes qui restent dans la class sans modification, 
// cela permet aussi de proteger sa class contre toute modification exterieure

// Propriété protected 

// Les propriétés protégés sont limités a leurs propres classes

/* Les méthodes statiques */

// le fait de déclarer une méthode en méthode statique nous permettra de l'utiliser sans instancier une class




?>