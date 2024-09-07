
# Projet de Site Web

Ce projet est un site web complet permettant aux utilisateurs de s'inscrire, se connecter, demander des devis, acheter des produits, et plus encore. Les administrateurs peuvent gérer les utilisateurs, les produits, les commandes, et accéder à des tableaux de bord pour suivre l'activité du site.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- **Node.js** (version 14.x ou supérieure)
- **npm** (généralement inclus avec Node.js)
- **MySQL** (pour la base de données)
- **Git** (pour cloner le projet depuis GitHub)

## Installation

1. **Clonez le projet depuis GitHub**

   Clonez le dépôt GitHub sur votre machine locale en utilisant la commande suivante :

   ```bash
   git clone https://github.com/Julienlive/DossierProjet.git
   ```

2. **Accédez au dossier du projet**

   Allez dans le répertoire du projet cloné :

   ```bash
   cd DossierProjet
   ```

3. **Installez les dépendances**

   Installez toutes les dépendances nécessaires avec npm :

   ```bash
   npm install
   ```

4. **Configurez la base de données**

   - Créez une base de données MySQL sur votre serveur local (ex : `my_database`).
   - Mettez à jour les informations de connexion dans le fichier de configuration `.env` ou `config.js` avec les paramètres suivants :

     ```env
     DB_HOST=localhost
     DB_USER=root
     DB_PASSWORD=yourpassword
     DB_NAME=my_database
     ```

5. **Initialisez la base de données**

   Utilisez les scripts fournis pour créer les tables et insérer les données initiales :

   ```bash
   npm run migrate   # Pour créer les tables
   npm run seed      # Pour insérer les données de test (optionnel)
   ```

6. **Lancez le serveur**

   Démarrez l'application avec la commande suivante :

   ```bash
   npm start
   ```

   Le serveur devrait démarrer sur `http://localhost:3000` (ou un autre port configuré).

## Utilisation

- **Pour accéder au site web :** Ouvrez votre navigateur et allez à `http://localhost:3000`.
- **Pour accéder en tant qu'administrateur :** Utilisez les identifiants fournis lors de l'installation ou configurez un administrateur directement depuis la base de données.

## Développement

Pour lancer le serveur en mode développement avec hot reload (si disponible) :

```bash
npm run dev
```

## Problèmes connus

- Si vous rencontrez des problèmes de connexion à la base de données, vérifiez vos informations de connexion dans le fichier de configuration.
- Assurez-vous que tous les ports nécessaires sont ouverts et disponibles.

## Contributions

Les contributions sont les bienvenues. Pour contribuer :

1. Forkez le projet
2. Créez une branche de fonctionnalité (`git checkout -b feature/feature-name`)
3. Commitez vos changements (`git commit -m 'Add some feature'`)
4. Pushez vers la branche (`git push origin feature/feature-name`)
5. Ouvrez une Pull Request

## Auteurs

- [Julienlive](https://github.com/Julienlive)

## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.
