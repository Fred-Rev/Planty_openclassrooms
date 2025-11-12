# Planty – Thème enfant (OpenClassrooms)

Thème enfant WordPress basé sur **Astra**, pour le projet **Planty** (boisson énergisante 100% naturelle).

## 🔧 Prérequis
- WordPress 6.x
- Thème parent : `Astra`
- PHP 8.x recommandé

## 📦 Installation
1. Cloner / copier le dossier `twentytwentyone-child` dans `wp-content/themes/`.
2. Vérifier que le thème parent **Twenty Twenty-One** est installé/actif.
3. Activer **Planty (child)** dans *Apparence > Thèmes*.

## 🧱 Contenu
- `style.css` — métadonnées + styles thème enfant
- `functions.php` — enqueue styles, supports, menus
- `header.php`, `footer.php`, `front-page.php` (ou `page.php`) — surcharges pour la maquette
- `screenshot.png` — aperçu du thème (optionnel)

## 🖋️ Édition du contenu
Le site utilise **Gutenberg** (blocs) pour rendre le contenu éditable :
- Sections héros, goûts, témoignages, CTA.
- Blocs réutilisables / patterns (si présents).

## 🧪 Dév local
- Activer `WP_DEBUG_LOG` (affichage d’erreurs désactivé).
- Styles versionnés via `filemtime()` pour éviter le cache en local.

## ✅ Conformité / bonnes pratiques
- Hiérarchie titres (H1/H2/H3), `alt` images, responsive mobile.
- `wp_enqueue_style()` parent puis enfant, sans toucher aux core files.

## 📸 Captures
Voir `screenshot.png` ou la page d’accueil une fois le thème actif.

## 👤 Auteur
Frédéric Revillon