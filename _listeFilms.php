<?php

//$films = [...];

if (!isset($_SESSION['films'])) {
    $_SESSION['films'] = [
         0 => ['image' => '',   'titre' => 'La communauté de l\'anneau', 'annee' => 2001, 'duree' => 178],
         1 => ['image' => '',   'titre' => 'Les Deux Tours', 'annee' => 2002, 'duree' => 179],
         2 => ['image' => '',   'titre' => 'Le Retour du Roi', 'annee' => 2003, 'duree' => 179],
         3 => ['image' => '',   'titre' => 'Forrest Gump', 'annee' => 1994, 'duree' => 142],
         4 => ['image' => '',   'titre' => 'Fight Club', 'annee' => 1999, 'duree' => 139],
         5 => ['image' => '',   'titre' => 'Django Unchained', 'annee' => 2012, 'duree' => 185],
         6 => ['image' => '',   'titre' => 'Inglourious Basterds', 'annee' => 2009, 'duree' => 153],
         7 => ['image' => '',   'titre' => 'Reservoir Dogs', 'annee' => 1992, 'duree' => 93],
         8 => ['image' => '',   'titre' => 'Kill Bill', 'annee' => 2003, 'duree' => 111],
         9 => ['image' => '',   'titre' => 'Monty Python : Sacré Graal !', 'annee' => 1975, 'duree' => 91],
        10 => ['image' => '',   'titre' => 'Indiana Jones et la dernière croisade', 'annee' => 1989, 'duree' => 127],
        11 => ['image' => '',   'titre' => 'Jurassic Park', 'annee' => 1993, 'duree' => 127],
        12 => ['image' => '',   'titre' => 'Jurassic Park 2', 'annee' => 1995, 'duree' => 127],
        // ...
    ];
}

