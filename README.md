# 💰 Gestion Bancaire - Projet de Fin de Module

Application web développée dans le cadre d'un projet de fin de module. Elle permet la gestion de comptes bancaires et le suivi des opérations financières (dépôts, retraits, virements).

## 📚 Contexte du projet

Ce projet a été réalisé en fin de module dans le cadre de ma formation. L'objectif était de mettre en pratique les compétences acquises en développement web back-end et front-end, à travers la création d'une application fonctionnelle de gestion bancaire.

## ✨ Fonctionnalités

### Gestion des comptes
- ➕ **Ajouter un compte** - Création de nouveaux comptes bancaires
- 🔍 **Rechercher un compte** - Consultation et recherche de comptes existants
- ✏️ **Modifier un compte** - Mise à jour des informations d'un compte

### Gestion des opérations
- 💸 **Saisir une opération** - Enregistrement de nouvelles transactions
- 📊 **Pointer une opération** - Validation et rapprochement des opérations
- 📝 **Modifier une opération** - Correction d'opérations existantes

## 🛠️ Technologies utilisées

- **Backend** : PHP
- **Frontend** : HTML5, CSS3
- **Base de données** : MySQL / MariaDB

## 📁 Structure du projet
```
gestion-d-une-baque/
├── index.php # Page d'accueil
├── index.html # Page d'accueil alternative
├── connexion.php # Gestion de la connexion à la BDD
├── head.php # Header / éléments communs
├── style.css # Feuille de style principale
│
├── Gestion comptes/
│ ├── ajouter_compte.html
│ ├── AjouterCompte.php
│ ├── Saisir_AjouterCompte.php
│ ├── RechercherCompte.html
│ ├── RechercheCompte.php
│ └── ModifierOperation.php
│
└── Gestion opérations/
├── SaisirOperation.php
├── AjouterOperation.php
├── PointerOperation.php
└── ModifierOperation.php
text
```

## 🚀 Installation

### Prérequis
- Serveur web local (XAMPP / WAMP / MAMP)
- PHP 7.0 ou supérieur
- MySQL / MariaDB

### Étapes d'installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/BSwil/gestion-d-une-baque.git

Placez ensuite le dossier dans le répertoire de votre serveur web (ex: htdocs/ pour XAMPP)

    Configurer la base de données

        Lancez phpMyAdmin

        Créez une base de données

        Importez le schéma SQL (fourni par l'enseignant ou à créer selon le cahier des charges)

        Modifiez le fichier connexion.php avec vos identifiants

    Accéder à l'application

        Ouvrez votre navigateur

        Rendez-vous sur http://localhost/gestion-d-une-baque

📖 Fonctionnement
Page	Rôle
ajouter_compte.html	Formulaire de création de compte
RechercherCompte.html	Interface de recherche de comptes
SaisirOperation.php	Saisie d'une nouvelle opération
PointerOperation.php	Validation et pointage des opérations
👨‍🎓 Auteur

BSwil - Projet réalisé dans le cadre d'un module de formation
🙏 Remerciements

À mon enseignant / formateur pour l'encadrement et les compétences transmises tout au long de ce module.
