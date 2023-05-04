Stack docker générique
======================

Cette stack docker permet d'installer un environnement de développement complet pour une application web PHP/Symfony.

L'environnement installé comprend :
- Un serveur web Nginx
- Un environnement PHP comprenant une application Symfony prête à l'emploi
- Une base de données MySQL
- Un environnement NodeJS permettant de gérer le build des assets

Spécifications techniques
-------------------------

| Image    | Version              |
|:---------|:---------------------|
| Nginx    | 1.24.0-alpine        |
| PHP      | 8.2.5-fpm-alpine3.17 |
| Composer | 2.5.5                |
| MySQL    | 8                    |
| NodeJS   | 18.15.0-alpine3.17   |

Utilisation
-----------
Toutes les commandes nécessaires pour l'utilisation et l'exploitation de la stack sont disponibles dans le fichier `Makefile` du projet

### Installation initiale
1. Créer le fichier `infra/.env.local` à partir du fichier `infra/.env` et modifier les variables selon vos besoins (Voir partie [Variables d'environnement](#variables-denvironnement))
2. Si besoin, créer un fichier `infra/docker/docker-compose.override.yml` pour ajouter des éléments de configuration docker ou surcharger celle de base (Labels Traefik, Mailhog, Container SMTP etc...)
3. Lancer la commande `make init` pour initialiser l'environnement global (Création des images, lancement des containers, installation de Symfony etc...)

#### Variables d'environnement

| Variable             | Description                                                                                                      | Exemple                  |
|----------------------|------------------------------------------------------------------------------------------------------------------|--------------------------|
| COMPOSE_PROJECT_NAME | Nom du projet docker compose. (Utilisé pour les noms des containers, et le nom du réseau docker)                 | onboarding-service       |
| TIMEZONE             | Fuseau horaire utiliser dans la configuration PHP                                                                | Europe/Paris             |
| SERVER_NAME          | URL locale permettant d'accéder à l'application dans un navigateur. (Utilisé avec docker-hostmanager ou Traefik) | onboarding-service.local |
| MYSQL_DATABASE       | Nom de la base de données à créer dans le container MySQL                                                        | onboarding-database      |
| MYSQL_ROOT_PASSWORD  | Mot de passe à configurer pour le compte `root` du container MySQL                                               | `M0td3P4223C0mpI3x3`     |

Makefile
--------
[Entrées liées à Docker](docs/docker.md)<br>
[Entrées liées à l'environnement de développement](docs/dev_env.md)
