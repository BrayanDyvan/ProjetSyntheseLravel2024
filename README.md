# Plateforme de gestion de jeux – Projet Laravel

Ce projet est une application web développée avec Laravel, permettant la gestion complète d’un catalogue de jeux, incluant :

    Gestion des jeux
    
    Gestion des versions
    
    Gestion des images
    
    Gestion des catégories
    
    Gestion des équipes
    
    Gestion des usagers (professeurs, étudiants, etc.)
    
    Système d’authentification
    
    Interface d’administration
    
# Fonctionnalités principales

- Gestion des usagers
  
      Création, modification et suppression d’usagers
      
      Rôles disponibles : professeur, etudiant, etudiantInfo
      
      Upload d’avatar
      
      Association à une équipe et à un professeur
- Gestion des jeux
  
      Ajout, modification et suppression de jeux
      
      Upload d’image de pochette
      
      Ajout d’une vidéo (lien)
      
      Description du jeu
      
      Association à un professeur et une équipe
- Gestion des catégories
  
      Ajout de catégories à un jeu
      
      Suppression de catégories
      
      Interface dédiée pour l’ajout et la suppression
- Gestion des images
  
      Upload d’images supplémentaires pour un jeu
      
      Suppression d’images via modale de confirmation
  
- Gestion des versions
  
      Ajout de versions (nom, lien, qualité)
      
      Suppression de versions
  
- Gestion des équipes
  
      Création d’équipes
      
      Association à un professeur, un groupe et une année
- Technologies utilisées

      Laravel 10+
    
      Blade (templates)
      
      Bootstrap 5
      
      MySQL
      
      Eloquent ORM
      
      Middleware d’authentification
      
      JavaScript (gestion des modales, interactions)

- Installation

      git clone https://github.com/tProjetSyntheseLravel2024.git
      cd ProjetSyntheseLravel2024
- Installer les dépendances

        composer install
        npm install
        npm run build
- Configurer l’environnement

      cp .env.example .env
      php artisan key:generate
- Lancer les migrations

      php artisan migrate --seed
- Démarrer le serveur

      php artisan serve
- Authentification

      Le système utilise le middleware Laravel auth pour protéger les pages sensibles.
      Les rôles permettent de restreindre certaines actions (ex : étudiants ne peuvent pas choisir une équipe).
  
- Structure réelle des vues
  
app/
 ├── Http/
 │    ├── Controllers/
 │    ├── Middleware/
 │    └── Requests/
 ├── Models/
resources/
 └── views/
      ├── jeux/
      │     ├── index.blade.php
      │     ├── create.blade.php
      │     ├── edit.blade.php
      │     ├── modifierCategorie.blade.php
      │     ├── modifierImage.blade.php
      │     ├── modifierVersion.blade.php
      │     ├── show.blade.php
      │     ├── formVersion.blade.php
      │     ├── formImage.blade.php
      │     ├── formCategorie.blade.php
      │     ├── formUsager.blade.php
      │     ├── formEquipe.blade.php
      │     └── etc.
      │
      ├── layouts/
      │     ├── app.blade.php
      │     ├── form.blade.php
      │     └── formModification.blade.php
      │
      └── welcome.blade.php
 ├── views/
 │    ├── jeux/
 │    ├── usagers/
 │    ├── categories/
 │    ├── versions/
 │    └── images/
public/
 ├── img/
 │    ├── jeux/
 │    └── usagers/
routes/
 ├── web.php
