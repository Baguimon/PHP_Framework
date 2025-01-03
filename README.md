# **Mon Projet Symfony**

Bienvenue dans mon projet Symfony ! Ce guide vous explique étape par étape comment cloner ce projet, l'installer et le lancer sur votre machine locale.

## **Prérequis**

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :
- **PHP** (version 8.1 ou supérieure)
- **Composer** (gestionnaire de dépendances PHP)
- **Symfony CLI** (optionnel mais recommandé)
- **Serveur web local** (Apache, Nginx ou le serveur Symfony intégré)
- **MySQL** ou tout autre système de gestion de base de données compatible

---

## **Étapes d'installation**

### 1. **Cloner le dépôt Git**
Commencez par cloner ce projet depuis GitHub :

```bash  
git clone https://github.com/ton-compte/nom-du-projet.git  
cd nom-du-projet  
```

### 2. **Installer les dépendances**
Une fois dans le dossier du projet, installez les dépendances nécessaires :

```bash  
composer install  
```

### 3. **Créer la base de données**
Créez la base de données et appliquez les migrations :

```bash  
php bin/console doctrine:database:create  
php bin/console doctrine:migrations:migrate  
```

### 4. **Lancer le serveur Symfony**
Vous pouvez lancer le projet avec le serveur intégré de Symfony :

```bash  
symfony serve  
```

Le projet sera accessible à l'adresse [http://localhost:8000](http://localhost:8000).  

---

## **Tests**
Pour exécuter les tests (si disponibles) :

```bash  
php bin/phpunit  
```

## **Contribution**
Si vous souhaitez contribuer à ce projet, n'hésitez pas à :  
1. Forker le projet  
2. Créer une branche (`git checkout -b feature/nom-fonctionnalite`)  
3. Soumettre une pull request  

---

## **Contact**
Pour toute question ou suggestion, vous pouvez me contacter à l'adresse suivante : **timothe.winkler@next-u.fr**  

Merci de votre intérêt pour ce projet ! 😊
