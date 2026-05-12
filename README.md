# Les Archers Illacais — Site web

Site officiel de la compagnie de tir à l'arc Les Archers Illacais, St Jean d'Illac (33).

## Stack

- **WordPress** (thème enfant Astra custom)
- **MySQL 8**
- **Docker + Docker Compose** (déploiement)
- **Nginx** (reverse proxy)
- **GitHub Actions** (CI/CD)

## Structure du repo

```
lesarcherillacais/
├── theme/
│   └── astra-child-lai/        # Thème enfant WordPress
│       ├── style.css            # Styles globaux
│       ├── functions.php        # Hooks et enregistrements WP
│       ├── front-page.php       # Homepage (carousel + sections)
│       ├── page.php             # Template pages intérieures
│       ├── archive.php          # Liste des articles / actualités
│       ├── home.php             # Page des articles (WP)
│       ├── single.php           # Article individuel
│       └── template-parts/
│           ├── nav.php          # Navigation globale
│           └── footer-site.php  # Footer global
├── nginx/
│   └── lai-demo.conf            # Vhost Nginx
├── .github/
│   └── workflows/
│       └── deploy.yml           # CI/CD GitHub Actions
├── .env.example                 # Variables d'environnement (template)
├── .gitignore
├── docker-compose.yml
└── README.md
```

## Développement local

### Prérequis

- [LocalWP](https://localwp.com/) installé
- [VS Code](https://code.visualstudio.com/)
- Node / Git

### Setup

```bash
# Cloner le repo
git clone https://github.com/TON_USER/lesarcherillacais
cd lesarcherillacais

# Créer le symlink vers LocalWP
ln -s $(pwd)/theme/astra-child-lai \
  ~/Local\ Sites/les-archers-illacais/app/public/wp-content/themes/astra-child-lai
```

Activer le thème **Les Archers Illacais** dans WP Admin → Apparence → Thèmes.

Le thème est maintenant lié directement au repo — toute modification dans VS Code est immédiatement visible dans LocalWP.

## Déploiement

### Prérequis VPS

- Docker + Docker Compose installés
- Nginx installé
- Accès SSH avec clé
- DNS `lai-demo.5136.fr` pointant vers le VPS

### Première installation

```bash
# Sur le VPS
git clone https://github.com/TON_USER/lesarcherillacais /opt/lai-demo
cd /opt/lai-demo

# Créer le .env (ne jamais committer ce fichier)
cp .env.example .env
# Remplir les valeurs dans .env

# Lancer la stack
docker compose up -d

# Vhost Nginx
cp nginx/lai-demo.conf /etc/nginx/sites-available/lai-demo.5136.fr
ln -s /etc/nginx/sites-available/lai-demo.5136.fr /etc/nginx/sites-enabled/
nginx -t && systemctl reload nginx
```

### Migration depuis LocalWP

```bash
# 1. Importer la base de données
docker compose exec -T db mysql -u lai_user -p lai_demo < lai-local.sql

# 2. Copier les uploads
docker compose cp uploads/. wordpress:/var/www/html/wp-content/uploads/

# 3. Mettre à jour les URLs
docker compose exec wordpress wp search-replace \
  'http://lesarchersillacais.local' \
  'http://lai-demo.5136.fr' \
  --all-tables --allow-root

# 4. SSL (après vérification que le site répond)
certbot --nginx -d lai-demo.5136.fr
```

### Déploiement continu

Tout push sur `main` déclenche automatiquement le déploiement via GitHub Actions.

Secrets GitHub à configurer (Settings → Secrets → Actions) :

| Secret | Description |
|---|---|
| `VPS_HOST` | IP du VPS |
| `VPS_USER` | Utilisateur SSH |
| `VPS_SSH_KEY` | Clé privée SSH |
| `DB_ROOT_PASSWORD` | Mot de passe root MySQL |
| `DB_PASSWORD` | Mot de passe utilisateur MySQL |

## Maintenance

### Ajouter un article

WP Admin → Articles → Ajouter → remplir titre, contenu, catégorie, image mise en avant → Publier.

Catégories disponibles : `Podiums`, `Vie du club`, `Fédération`, `Événements`.

### Mettre à jour le calendrier

Les événements sont gérés via **Google Calendar**. Ajouter ou modifier un événement dans le calendrier partagé suffit — l'embed sur le site se met à jour automatiquement.

### Ajouter des photos à la galerie

WP Admin → Pages → Galerie → Modifier → ajouter un bloc **Galerie** avec un titre H2 pour le mois/événement.

### Mettre à jour les fichiers PDF (fiches, mandats)

WP Admin → Médias → Ajouter → uploader le PDF → copier l'URL → mettre à jour le lien dans la page concernée.

## Contact technique

Pour toute question sur le code : ouvrir une issue sur GitHub.