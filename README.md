# Plugin KKASA pour Jeedom 🏠
### (Correctif PHP 8.2 & Python 3.11)

Ce dépôt est un **fork** du plugin original `kkasa` (développé par `kavod/kkasa`). Il intègre des correctifs critiques pour assurer la compatibilité avec les versions récentes de Jeedom et des environnements système modernes (Debian 12+).

---

## 🚀 Améliorations et Correctifs

Cette version a été mise à jour pour résoudre les problèmes majeurs suivants :

* **Compatibilité PHP 8.2+** : Correction des erreurs de syntaxe et de typage générant des "Pages Blanches" ou des erreurs `500 Internal Server Error`.
* **Compatibilité Python 3.11+** : Mise à jour des dépendances et des scripts pour les distributions Linux récentes (notamment Debian 12 Bookworm).
* **Stabilité Jeedom 4.4.x / 4.5.x** : Testé et validé sur les dernières versions du core.
* **Fix Environnement (PEP 668)** : Adaptation du script d'installation des dépendances pour respecter les nouvelles contraintes Python sur les environnements managés.

---

## 🛠 Environnement de test

Le plugin a été confirmé opérationnel dans la configuration suivante :

| Composant | Version |
| :--- | :--- |
| **Jeedom** | v4.5.2 |
| **PHP** | v8.2.30 |
| **Python** | v3.11.2 |
| **Matériel** | TP-Link HS100, HS110 |

---

## 📦 Installation

1.  Téléchargez l'archive du plugin (`.zip`) depuis la section [Releases](https://github.com/VOTRE_NOM_UTILISATEUR/kkasa/releases) de ce dépôt.
2.  **Via l'interface Jeedom** : Utilisez l'outil "Ajouter un plugin depuis un fichier" (si activé dans les réglages).
3.  **Via FTP/SSH** : Transférez le contenu du dossier dans le répertoire `/var/www/html/plugins/kkasa/`.
4.  **Droits** : Assurez-vous que les droits sont corrects (propriétaire `www-data`).

### Aperçu de la configuration
<p align="center">
  <img width="727" alt="Configuration KKasa" src="https://github.com/user-attachments/assets/6159fc47-79fc-4839-baf5-34f125ffccc7">
</p>

### Liste des équipements
<p align="center">
  <img width="683" alt="Liste équipements" src="https://github.com/user-attachments/assets/e4399b4e-05b9-4b8e-9c0d-eccd774ef90a">
</p>

---

## 📝 Changelog

* **Version actuelle** : 
    * Correction du bug d'Error 500 au chargement de l'interface.
    * Repackaging des librairies Python pour éviter les conflits d'environnements virtualisés.
    * Mise à jour des chemins d'icônes vers `/core/img/`.

---

## ⚖️ Licence et Crédits

* **Licence** : Ce projet est distribué sous licence [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html).
* **Auteur original** : [kavod](https://github.com/kavod)
* **Contributeur (Fix PHP/Python)** : `duy_31`

---
_Note : Ce plugin est fourni tel quel, sans garantie de support officiel de la part de l'auteur original._
