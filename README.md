
# Site d'un artiste peintre

Site internet présentant des peintures

## Environnement de développement

### Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker
* Docker-compose
* nodejs et npm

Vous pouvez vérifier les pré-requis (sauf docker et docker-compose) avec la commande suivante (de la CLI Symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
composer install
npm install
npm run build
docker-compose up -d
symfony serve -d
```

## Lancer des tests

```bash
php bin/phpunit --testdox
```

