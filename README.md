Plugin KKASA pour Jeedom (Correctif PHP 8.2 & Python 3.11)
Ce dépôt est un fork du plugin original kkasa (kavod/kkasa). Il intègre des correctifs critiques pour assurer la compatibilité avec les versions récentes de Jeedom et des environnements système modernes.

🚀 Améliorations et Correctifs
Cette version a été mise à jour pour résoudre les problèmes suivants :

Compatibilité PHP 8.2+ : Correction des erreurs générant des "Page Blanche" ou des erreurs 500 Internal Server Error.

Compatibilité Python 3.11+ : Mise à jour des dépendances et scripts pour les distributions Linux récentes (Debian 12 Bookworm, etc.).

Stabilité Jeedom 4.5.x : Testé et validé sur Jeedom 4.5.2.

🛠 Environnement de test
Le plugin a été confirmé opérationnel dans la configuration suivante :

Jeedom : v4.5.2

PHP : v8.2.30

Python : v3.11.2

Matériel testé : Prises TP-Link HS100, HS110.

📦 Installation
Téléchargez l'archive du plugin (.zip) depuis la section Releases de ce GitHub.

Utilisez l'outil de gestion des plugins de Jeedom pour "Ajouter un plugin depuis un fichier" (si activé) ou transférez le dossier via FTP/SSH dans le répertoire /var/www/html/plugins/kkasa/.

<img width="727" height="365" alt="image" src="https://github.com/user-attachments/assets/6159fc47-79fc-4839-baf5-34f125ffccc7" />

<img width="683" height="330" alt="image" src="https://github.com/user-attachments/assets/e4399b4e-05b9-4b8e-9c0d-eccd774ef90a" />

📝 Changelog
Version actuelle : Correction du bug d'Error 500 au chargement de l'interface.

Repackaging des librairies Python pour éviter les conflits d'environnements virtualisés (PEP 668).

⚖️ Licence et Crédits
Ce projet est distribué sous licence GPLv2.

Auteur original : kavod

Contributeur (Fix PHP/Python) : [duy_31]
