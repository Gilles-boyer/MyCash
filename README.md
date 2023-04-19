# MyCash

MyCash est une application de caisse enregistreuse qui permet de gérer les ventes et les encaissements d'argent. L'application est composée de deux fronts : un front-end admin panel pour la gestion et un front-end POS pour les ventes.

## Technologies utilisées

MyCash est développé en utilisant les technologies suivantes :

- Laravel 9 pour le back-end
- Vue.js 2 pour le front-end
- Vuetify pour la conception des composants
- Axios pour les requêtes HTTP

## Installation

Pour installer MyCash, suivez les étapes suivantes :

1. Clonez le dépôt Git :

    ```bash
    git clone https://github.com/{utilisateur}/{mon-projet}.git
    ```

2. Installez les dépendances :

    ```bash
    composer install
    npm install
    ```

3. Configurez l'application :

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Lancez le serveur de développement :

    ```bash
    php artisan serve
    ```

## Utilisation

Pour utiliser MyCash, accédez à l'URL suivante : http://localhost:8000. Vous pouvez ensuite vous connecter avec les identifiants suivants :

- Email : admin@mycash.com
- Mot de passe : password

## Contributeurs

Le projet MyCash est réalisé par Gilles BOYER.

## Licence

MyCash est distribué sous la licence MIT. Consultez le fichier LICENSE pour plus d'informations.
