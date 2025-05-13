# L'Atelier du Bois - Site Vitrine

<p align="center">
  <img src="./assets/logo-orange.svg" width="150" height="150" alt="Logo">
</p>

## Présentation du projet

"L'Atelier du Bois" est un site vitrine développé dans le cadre d'une situation professionnelle pour une entreprise artisanale spécialisée dans la menuiserie sur mesure : meubles, escaliers, placards et agencements intérieurs. Le projet répond à un cahier des charges précis et se compose d'une page d'accueil responsive et d'un formulaire de contact fonctionnel avec validation front-end et sécurisation des données.

## Objectifs du projet

- Créer une présence en ligne simple et efficace pour valoriser le savoir-faire artisanal
- Présenter l'entreprise et ses prestations avec une page d'accueil claire et attractive
- Permettre aux visiteurs de prendre contact facilement via un formulaire sécurisé
- Offrir une navigation simple et un design responsive adapté à tous les appareils
- Travailler sur la sécurité des formulaires selon les recommandations OWASP

## Public cible

- Particuliers souhaitant des aménagements sur mesure
- Architectes et décorateurs d'intérieur cherchant un artisan local
- Professionnels du bâtiment souhaitant collaborer avec un menuisier de confiance

## Périmètre fonctionnel

- **Page d'accueil responsive** : Nom de l'entreprise, présentation courte, mise en avant des prestations, visuel, bouton d'appel à action
- **Formulaire de contact** : Interface intuitive avec champs nom, email et message
- **Validation front-end** : Vérification des données en JavaScript (regex email, champs obligatoires)
- **Traitement back-end** : Simulation de l'envoi avec message de confirmation
- **Sécurisation** : Implémentation des bonnes pratiques OWASP

## Technologies utilisées

Le projet a été développé sans CMS, intégralement codé depuis zéro avec les technologies suivantes :

| Frontend | Backend | Autres |
|----------|---------|--------|
| HTML5    | PHP     | Git    |
| CSS3     | -       | GitHub |
| JavaScript | -     | -      |

## Charte graphique

- Palette de couleurs : tons bois naturel (beige, brun)
- Typographie sobre et lisible
- Design épuré mettant en valeur le savoir-faire artisanal
- Optimisation pour l'accessibilité (contrastes, tailles de police)

## Structure du projet

```bash
📁 Atelier-du-Bois
├── 📝 README.md                            # Documentation du projet
├── 📝 index.php                            # Page d'accueil du site
├── 📁 assets/                              # Répertoire des ressources
│   ├── 📁 css/                             # Feuilles de styles CSS
│   │   ├── 🎨 components.css               # Styles pour les composants UI
│   │   ├── 🎨 globals.css                  # Styles globaux du site
│   │   ├── 🎨 layout.css                   # Styles de mise en page
│   │   └── 🎨 utilities.css                # Classes utilitaires réutilisables
│   ├── 📁 fonts/                           # Polices personnalisées
│   │   ├── 🅰️ BDGrotesk-VF.ttf              # Police BD Grotesk variable
│   │   └── 🅰️ BricolageGrotesque-VF.ttf     # Police Bricolage Grotesque variable
│   ├── 📁 img/                             # Images et illustrations
│   │   ├── 🖼️ image-hero-1.jpg              # Image  1
│   │   ├── 🖼️ image-hero-2.jpg              # Image  2
│   │   └── 🖼️ image-hero-3.jpg              # Image  3
│   ├── 📁 js/                              # Scripts JavaScript
│   │   └── ⚙️ script.js                     # Script principal du site
│   ├── 🌟 favicon.ico                      # Favicon du site
│   ├── 🟧 logo-orange.svg                   # Logo version orange
│   └── ⚪ logo-white.svg                    # Logo version blanche
├── 📁 partials/                            # Fichiers partiels réutilisables
│   ├── 🧩 header.php                       # En-tête du site
│   ├── 🧩 footer.php                       # Pied de page du site
├── 📨 contact.php                          # Formulaire de contact
```

## Instructions de test

Pour tester le formulaire de contact:
1. Essayez de soumettre le formulaire sans remplir les champs obligatoires
   - Vérifiez que des messages d'erreur apparaissent
2. Testez avec une adresse email invalide
   - Vérifiez que la validation rejette le format incorrect
3. Remplissez correctement tous les champs
   - Vérifiez que le message de confirmation s'affiche

## Contraintes techniques respectées

- Développement from scratch sans CMS
- Structure de code en PHP/CSS/JS uniquement
- Responsive design (ordinateur, tablette, mobile)
- Validation front-end en JavaScript
- Bonnes pratiques d'accessibilité
- Sécurisation selon les recommandations OWASP

## Délai de réalisation

Ce projet a été réalisé en 2 jours conformément au cahier des charges.

## Auteurs
Développé par [**@Antonin**](https://github.com/HeyAnto) et [**@Fanny**](https://github.com/fannysaez)

## Licence
Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus d'informations.

## Installation et déploiement

### Prérequis
- Serveur web avec PHP (WAMP)
- Navigateur web moderne

### Installation locale
1. Clonez ce dépôt sur votre machine locale :
   ```bash
   git clone https://github.com/fannysaez/AtelierDuBois.git
   ```


### Déploiement
Le site est actuellement hébergé via GitHub :
[Atelier du Bois](https://github.com/fannysaez/AtelierDuBois.git)
