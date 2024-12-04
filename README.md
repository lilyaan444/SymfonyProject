# 🎮 Minecraft Shop - Symfony Project - Lilyan MULLER

> **Note :** Ce projet est un site d'e-commerce sur la thématique de Minecraft, conçue pour un projet durant ma troisième année de BUT Informatique.

---

## 📹 Présentation Vidéo


https://github.com/user-attachments/assets/5b444e83-fbba-44f8-8bc4-3d499066af15



---

## 📝 Table des matières
1. [Aperçu du projet](#-aperçu-du-projet)
2. [Fonctionnalités](#-fonctionnalités)
3. [Installation](#-installation)
5. [Utilisation](#-utilisation)
6. [Technologies utilisées](#-technologies-utilisées)

---

## 🌟 Aperçu du Projet

Ce projet est une boutique en ligne inspirée de l'univers de Minecraft, réalisée avec Symfony. Elle permet aux utilisateurs de naviguer dans une interface reprenant le style de l'inventaire de Minecraft, avec des éléments interactifs pour afficher les détails des produits et les ajouter au panier.

---

## ✨ Fonctionnalités

- 🔍 **Recherche dynamique** avec affichage en temps réel des résultats
- 🛒 **Gestion du panier** avec ajout, suppression et visualisation des produits
- 📖 **Catalogue de produits** avec catégories et détails complets
- 📦 **Gestion des stock** détail du nombre de produit en stock, de son indisponibilité...
- 📒 **Système de traduction** implementation de traduction en Français/ Anglais avec possibilité d'ajout
- ⚙️ **Tableau de bord d'administration** pour la gestion des produits et des utilisateurs (backend) avec des statistiques détaillées 
- 🎨 **Interface personnalisée** rappelant l'inventaire de Minecraft
- 💳 **Carte de crédit** Possibilité d'ajouter une carte de crédit fictive

---

## 🚀 Installation

### Installation avec IDX

1. **Forker le projet**  
   Forkez-le dépot actuel sur votre compte GitHub.

2. **Importer le projet sur IDX**  
   Connectez-vous à IDX et importez votre fork du projet depuis votre dépôt GitHub.
   
4. **Changer de branch**  
   Dans le terminal de votre projet :
   - git checkout -b MinecraftShop origin/MinecraftShop

5. **Démarrer le projet**  
   Une fois le projet importé et le checkout effectuer, il devrait être automatiquement lancé sur IDX. Accédez à l'onglet "Terminal", cliquez sur `start`, puis ouvrez le lien localhost pour visualiser l'application.

6. **Installer les dépendances**  
   Dans le terminal de votre projet :
   - Lancez la commande : `composer install` pour installer les dépendances PHP.  

7. **Configurer la base de données**  
   - Connectez-vous à MySQL en utilisant : `mysql -u root`.  
   - Créez la base de données :  
     ```sql
     CREATE DATABASE MC;
     ```
   - Exécutez les commandes suivantes pour configurer les tables et charger les données de test :  
     ```bash
     php bin/console doctrine:schema:update --force
     php bin/console doctrine:fixtures:load
     ```

8. **Configurer les variables d'environnement**  
   Créez un fichier `.env.local` à la racine du projet et ajoutez la ligne suivante pour configurer l'accès à la base de données :  
   ```
   DATABASE_URL="mysql://root:@127.0.0.1:3306/MC?serverVersion=10.11.2-MariaDB&charset=utf8mb4"
   ```
---

## 📖 Utilisation

1. **Connexion ** : Accédez à l'interface utilisateur pour vous connecter *(liste des compte dans FixturesApp)*.
2. **Naviguez dans le catalogue** : Parcourez les produits, visualisez les détails et ajoutez-les au panier.
3. **Gestion des commandes** : Passez des commandes en utilisant le panier.
4. **Admin** : Connecter vous avec le compte admin pour gérer le catalogue et les utilisateurs *(réservé aux administrateurs)*.

---

## 💻 Technologies utilisées

- **Backend** : Symfony 5, Doctrine ORM
- **Frontend** : Twig, CSS (thème personnalisé inspiré de Minecraft)
- **Base de données** : MariaDB
- **Recherche en direct** : Symfony UX/ Live Components (par ex. pour l'autocomplétion et la mise à jour en temps réel)
- **Pagination** : knplabs

---
