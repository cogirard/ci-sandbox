Entrées du Makefile en lien avec l'environnement de développement
=================================================================

[Retour au README](../README.md)

Back
----

#### `make init`
Initialisation de l'environnement de développement
<br>
<br>

##### `make fixtures`
Réinitialisation de la base de données de l'application puis hydratation de celle-ci avec les fixtures du projet
<br>
<br>

##### `make grumphp`
Exécution de l'outil GrumPHP pour analyser le code du projet
<br>
<br>

##### `make phpunit`
Exécution des tests unitaire grâce à PHPUnit
<br>
<br>

##### `make fix-permissions`
Application des paramètres de propriété nécessaires à ce que NGINX puisse lire et écrire dans les dossiers `var` et `public`
<br>
<br>

#### `make vendor`
Installation des dépendances PHP du projet (`composer install`)
<br>
<br>

#### `make migration`
Génération d'un fichier de migration permettant de mettre à jour le schéma de base de données en fonction
<br>
<br>

#### `make migrate`
Mise à jour du schéma de base de données à partir des fichiers de migration

Front
-----

#### `make node`
Lancement d'un container NodeJS éphémère et connexion à son terminal `sh`
<br>
<br>

#### `make yarn-install`
Installation des dépendances front du projet
<br>
<br>

#### `make assets-build`
Installation des dépendances front du projet puis compilation des assets front selon la configuration Webpack du projet

- `env` : Environnement pour lequel les assets seront compilés (Par défaut: `dev`)

Exemple :<br>
`make assets-build` => Compilation des assets en mode dev<br>
`make assets-build env=prod` => Compilation des assets en mode prod
<br>
<br>

#### `make assets-watch`
Compilation des assets front en temps réels, à chaque modification d'un fichier suivi par Webpack, une nouvelle compilation aura lieu