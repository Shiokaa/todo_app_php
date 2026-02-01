# Todo App PHP

**Todo App** est un projet d'entraînement pour monter en compétence sur PHP. Cette application est réalisée dans le cadre d'un projet scolaire visant à structurer une application web de A à Z.

## Compétences acquises

Ce projet met en œuvre plusieurs concepts fondamentaux du développement backend :

- **Architecture MVC** : Séparation stricte de la logique (Modèles), du contrôle (Contrôleurs) et de l'affichage (Vues).
- **Pattern Singleton** : Centralisation de l'instance de connexion à la base de données.
- **Injection de Dépendances** : Passage de la connexion PDO aux modèles pour un code plus modulaire.
- **Sécurité & PDO** : Utilisation de requêtes préparées pour se protéger contre les injections SQL et htmlspecialchars contre les failles XSS.
- **Tailwind CSS** : Intégration d'un framework utilitaire pour une interface moderne et responsive.

## Architecture du projet

Le projet suit une structure de Front Controller. Toutes les requêtes sont redirigées vers `index.php` qui sert de routeur.

- `index.php` : Point d'entrée unique et routage.
- `config/` : Configuration de la base de données.
- `controller/` : Logique de traitement des requêtes et lien entre modèles et vues.
- `model/` : Classes gérant les interactions avec la base de données.
- `view/` : Fichiers HTML/PHP gérant l'affichage.

## Prérequis

### Windows :

- **WAMP**, **XAMPP** ou Laragon (pour avoir Apache, PHP 8.x et MySQL d'un coup).
- Git Bash (optionnel, pour utiliser les commandes git).

### Linux :

- **PHP** (>= 8.0) avec l'extension php-mysql.
- Serveur **MySQL**.
- **Apache** ou **Nginx**.

## Installation et Lancement du projet

### 1. Cloner le projet :

```bash
git clone https://github.com/Shiokaa/todo_app_php
cd todo_app_php
```

### 2. Importer la base de données :

- Ouvrez votre outil de gestion (phpMyAdmin, TablePlus, ou terminal).
- Importez le fichier `database/schema.sql` situé dans le projet.

### 3. Configurer la connexion :

- Rendez-vous dans le fichier `config/db.php`.
- Modifiez les identifiants (**host**, **dbname**, **user**, **pass**) pour qu'ils correspondent à votre environnement local.

### 4. Lancer le serveur :

- Avec un outil (**WAMP/XAMPP**) : Placez le projet dans le dossier www ou htdocs et accédez à http://localhost/todo_app_php.
- Via le terminal PHP :

```bash
php -S localhost:8000 -t .
```

Puis ouvrez votre navigateur sur http://localhost:8000.
