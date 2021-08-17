#Exercice 01
##Explication

Le but de cet excercice est de mesurer vos compétences en développement HTML / SASS en passant par Gulp et Yarn. 
Il est censé ne pas durer plus d'une heure.

Le but est de reproduire la page comme elle est montrée dans le fichier "résultat attendu".
Vous pouvez consulter tous les informations de cette maquette sur Figma : https://www.figma.com/file/Fz7Wu9fV5fROPdMkhIWlbp/Untitled?node-id=0%3A1

## Installation
####Étape 1 :
- Vous devez ouvrir le dossier excercice-01 avec un serveur web du type MAMP / XAMP.
- Si vous avez PHP d'installé en ligne de commande, vous pouvez également effectuer ``php -S localhost:8888 -t .`` dans le dossier excercice-01.

#####Étape 2 :
- Toujours dans le dossier excercice-01 effectuer un "yarn" dans le dossier "./src"
- Une fois la commande réalisée avec succèes vous pouvez lancer la commande "gulp watch" (toujours dans le dossier ./src)

Cette commande permet d'initier les taches Gulp pour notamment permettre de transformer le SASS en CSS Minifié.

Si vous rencontrez une erreur, il se peut que vous deviez installer gulp 
```yarn add gulp```
#####Étape 3 :
Lancez-vous ! Toutes les ressources d'images dont vous avez besoin sont dans le dossier assets.
Le SASS est à écrire dans le dossier ./src/sass/main.scss (vérfier bien d'avoir lancé au préalable gulp watch)
Vous trouverez dans ce fichier main.scss les deux polices utilisées ainsi que tous les codes couleurs dans le fichier variables.scss
```
# run gulp default
cd ./src 
gulp

# run gulp watch
cd ./src 
gulp watch
```