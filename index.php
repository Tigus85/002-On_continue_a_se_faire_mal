<?php

// Créer la fonction deleteWithKey() qui va nous permettre de supprimer une valeur d’un tableau, en y précisant uniquement sa clé, qu’elle soit nominative ou par son index.


// décommenter pour l'exercice 1 ligne 8 a 15

// $blabla = ["fdsf","fdsfs","fqfsdqzasd",4554,7874];

// function deleteWithKey(array $array, $key){
// 	array_splice($array, $key,1);
//     return $array;
// };

// var_dump(deleteWithKey($blabla,2)) ;



// N'oubliez pas de créer des tableaux pour tester :)

// Dans la continuité de l’exercice précédent, nous allons lui utiliser le tableau suivant :


$monArray = [
	[
		"ref" => "A0001",
		"hash" => "b8sftlc"
	],
	[
		"ref" => "A0002",
		"hash" => "c7pszt5"
	],
	"bouh" => [
		"ref" => "A0003",
		"hash" => "tpmez87"
	],
];


// L’objectif va donc consister à ajouter un troisième paramètre à notre fonction qui doit contenir la clé de vérification, déterminée par la valeur de la clé “hash” de chaque référence du tableau. 
// Ainsi l'élément de tableau à supprimer ne le sera que si la paire de valeurs ref + hash correspond. Si aucun hash n’est passé dans notre fonction, alors aucune valeur ne sera supprimée.

// Ex : la ref 10002, ne pourra être supprimée que si la chaine “c7pszt5” lui est passée en paramètre ($hash).

function deleteWithKey(array $array, $key, $hash){
    if($array[$key]["hash"] === $hash){
        array_splice($array, $key,1);
        return $array;
    }else {
        return $array;
    }
    
};

//var_dump( deleteWithKey($monArray, 1 , "tpmez87"));

// Après avoir défini ce que les nombres suivants possèdent en commun :
// NOMBRES A ANALYSER
// 2, 3, 5, 7, 11, ... 23, 29, 31, 37, 41, 43, ... 61, 67, 71, 73, ... 89, 97

// Créer une fonction vous permettant de lister au travers d’une boucle tous les nombres ayant la particularité trouvée précédemment, d’un nombre de départ à un nombre d’arrivée.

// Exemple :
function listNumbers(int $begin, int $end){
	$result = [];
    for($i=2; $i>=$end; $i++){
       
        var_dump($result)
        $result[] += $i;
        return $result;
    }
    
}
var_dump(listNumbers(1,150)) ; // Affichera [2, 3, 5, 7, 11, ... ]