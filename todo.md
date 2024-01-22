Ajouter les informations suivantes pour un user :

- nom
- prenom
- age
- telephone
- adresse

Ajouter des fixtures pour user.

Ajout le crud pour les users au dashboard.

Récupérer un projet symfony:
-fork en prenant toutes les branches
-clone-créer le .env et le remplir
-composer install
-composer update
-symfony console doctrine:database:create
-supprimer les migrations
-symphony console make:migrations
-symphony console doctrine:migrations:migrate

Si on souhaite remplir les tables de fausses données:
-symphony console database:fixtures:load

## Mise à jour de symfony CLI avec scoop:
`scoop update symfony-cli`

## Supprimer la base de données:
`doctrine:database:drop`

## Pour avoir l'aide d'une commande:
`symfony console commande` (par exemple, symfony console make)

## Bundle pour paginer:
`composer require knplabs/knp-paginator-bundle`
## Bundle easyAdmin:
`composer require easycorp/easyadmin-bundle`