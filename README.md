# Portfolio Kylian DEBONNE

## Description du projet
Ce projet est un portfolio réalisé avec WordPress Bedrock. Il inclut un thème enfant basé sur **Kubio**, un Custom Post Type (CPT) "Portfolio", ainsi que des champs personnalisés gérés avec **ACF**.
https://github.com/So1anum/Portfolio/
---

## Étapes réalisées
### **1. Installation et Configuration**
- Installation de WordPress avec **Roots/Bedrock**.
- Gestion des dépendances avec **Composer**.
- Choix du thème **Kubio** et création d'un **thème enfant**.

### **2. Création du Custom Post Type (CPT)**
- Déclaration du CPT "Portfolio".
- Ajout des supports : titre, éditeur, image mise en avant.
- Configuration des permaliens et des catégories personnalisées.

### **3. Ajout des Champs Personnalisés avec ACF**
- Installation et configuration d'**ACF** via Composer.
- Création de champs : client, date, lien, galerie d'images.
- Intégration de ces champs dans les templates.

### **4. Affichage des Réalisations**
- Création des fichiers **single-portfolio.php** et **archive-portfolio.php**.
- Affichage dynamique des réalisations avec ACF.
- Personnalisation du CSS du thème enfant.

### **5. Gestion et Livraison du Projet**
- Ajout d'un fichier **.gitignore** pour exclure les fichiers sensibles.
- Hébergement du projet sur un **dépôt GitHub**.
- Export des fichiers et de la base de données.

---

## Difficultés rencontrées et solutions

### **1. Problème d'installation de Bedrock avec Composer**
- **Erreur OpenSSL manquant** → Activation de l'extension PHP OpenSSL.
- **Problème avec Composer** → Utilisation de `composer install` après correction.

### **2. Erreur "No composer.json present" lors de l'installation de plugins**
- Oubli d’exécuter la commande dans le bon dossier.
- Vérification que Bedrock était bien installé.

### **3. Problèmes d'accès à localhost et erreurs de chemins**
- Mauvaise configuration des variables `WP_HOME` et `WP_SITEURL` dans `.env`.
- Correction en ajustant les chemins dans `config/application.php`.

### **4. Messages "Deprecated" liés à PHP 8.4 et Kubio**
- Utilisation de `error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);` dans `wp-config.php`.
- Désinstallation de Kubio lorsque les erreurs étaient trop nombreuses.

### **5. Images et champs ACF non affichés**
- Vérification de l’ajout du support `thumbnail` pour les CPT.
- Vérification des appels `get_field()` dans les templates.
- Ajout de `the_post_thumbnail()` pour l'affichage de l'image mise en avant.

---

## Installation et lancement du projet
### **Prérequis**
- PHP (>=8.0)
- Composer
- MySQL ou MariaDB
- Un serveur local type **Local by Flywheel**, **MAMP**, **XAMPP**, ou **Laragon**.

### **Installation**
```sh
# Cloner le projet
git clone https://github.com/So1anum/Portfolio.git
cd Portfolio_Kylian_DEBONNE

# Installer les dépendances
composer install

# Configurer les variables d'environnement
cp .env.example .env
nano .env   # Modifier les accès à la base de données

# Générer les clés de sécurité
wp dotenv salts regenerate
```

### **Création de la base de données**
Créer une base de données MySQL nommée `portfolio_debonne`.
```sh
mysql -u root -p -e "CREATE DATABASE portfolio_debonne;"
```

### **Lancer le serveur local**
```sh
wp server --host=localhost --port=8080
```
Accéder au site : [http://localhost:8080](http://localhost:8080)

### **Importer la base de données**
```sh
mysql -u root -p portfolio_debonne < portfolio_debonne.sql
```

### **Finalisation**
- Se connecter à l'admin : `/wp/wp-admin`
- Configurer les permaliens.
- Vérifier les fichiers envoyés (uploads non gérés par Git).

---

## Contact
Si vous avez des questions, n’hésitez pas à me contacter via GitHub ! 😊

