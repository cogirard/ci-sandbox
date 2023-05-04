Entrées du Makefile en lien avec Docker
=======================================

[Retour au README](../README.md)

#### `make up`
Lancer les containers
<br>
<br>

##### `make stop`
Arrêter les containers
<br>
<br>

##### `make down`
Arrêter les containers et les supprimer
<br>
<br>

##### `make build`
Construction des images docker utilisées par le projet
- `service` : Nom du service docker compose (Par défault : vide)


Exemples : <br>
`make build` => Build de tous les services du projet<br>
`make build service=php` => Build du service `php` du projet
<br>
<br>

##### `make exec`
Exécuter une commande au sein d'un container
- `c` : Nom du service docker compose (Par défault : `php`)
- `cmd` : Commande à exécuter (Par défaut: `sh`)

Exemples : <br>
`make exec` => Exécution d'un terminal au sein du container php<br>
`make exec c=mysql` => Exécution d'un terminal au sein du container mysql<br>
`make exec c=nginx cmd='cat /etc/nginx/conf.d/default.conf'` => Affichage du contenu du fichier `/etc/nginx/conf.d/default.conf` du container NGINX
<br>
<br>

##### `make run`
Créer un container éphémère et exécuter une commande au sein de celui-ci.<br>
Une fois la commande exécutée, le container et son/ses volumes seront supprimés automatiquement.
- `c` : Nom du service docker compose (Par défault : `php`)
- `cmd` : Commande à exécuter (Par défaut: `sh`)

Exemples : <br>
`make run` => Exécution d'un terminal au sein d'un container php<br>
`make run c=mysql` => Exécution d'un terminal au sein d'un container mysql<br>
`make run c=nginx cmd='cat /etc/nginx/conf.d/default.conf'` => Affichage du contenu du fichier `/etc/nginx/conf.d/default.conf` d'un container NGINX