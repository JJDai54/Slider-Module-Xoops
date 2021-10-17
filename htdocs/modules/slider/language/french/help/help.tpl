<div id="help-template" class="outer">
<h1 class="head">Help: <a class="ui-corner-all tooltip" href="%3C%7B$xoops_url%7D%3E/modules/slider/admin/index.php" title="Back to the administration of slider - Slides management">
slider - Slides management <img src="%3C%7BxoAdminIcons%20home.png%7D%3E" alt="Back to the Administration of slider - Slides management"> </a>
</h1>
<!-- ------------------ Content ------------------------- --><br>
<h4 class="odd">Description</h4>
<br>
Ce module permet de gérer les slides de la page d'accueil pour les
thèmes utilisés<br>
Il ne fonctionne qu'avec les thèmes de type "xbootstrap" v3 et v4 (xswatch4).<br>
Le fichier "tpl/slider.tpl" doit exister.<br>
Il <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">sera
peut-être
nécessaire </span> de la mettre en écriture pour permettre sa
modification.<br>
<br><h4 class="odd"><b><span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">Fonctionnalités
</span></b>:</h4>
<ul>
  <li>Ajout, Suppression de slides aus thèmes actifs</li>
  <li>Activation, désactivation des slides, sans <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">suppression</span></li>
  <li>Défini le type d'affichage: avec ou sans période d'affichage</li>
  <li>Définition de l'ordre d'affichage des slides</li>
  <li>Définition d'une période d'affichage pour anticiper un <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">événement</span></li>
  <li>Pour les <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">périodes
    </span> fixes possibilité de reporter cette dernière dès que la
date de fin est dépassée. </li>
  <li>Par exemple le 1er mai 2021 sera <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">reporté
    </span> au 1er mai 2022. Ce report peut être sur la semaine, le
mois, l'année, ...<br>
  </li>
  <li>Chaque slide peut être affecté à un thème en particulier ou bien
à  tous les thèmes actifs<br>
  </li>
</ul>
<h4 class="odd">Installation / Désinstallation</h4>
Aucune mesure particulière n'est nécessaire, suivez le processus
d'installation standard et copiez le contenu du dossier htdocs à la racine de votre site puis Installez le module via Admin =&gt; Module système =&gt;
Modules.<br>
Des instructions détaillées sur l'installation des modules sont
disponibles dans le "XOOPS Operations Manual".<br>
<br>

<h4 class="odd">Caractéristiques</h4>
Le module "slider" continue d'évoluer. Pour cette raison, j'invite
tous les développeurs à  signaler et envoyer sur le SVN tout changement
ou ajout à ce module, afin que nous puissions contribuer conjointement
au développement<br>
<br>
<h4 class="odd">Didacticiel</h4>
    Installation standard  de module<br>
    Ajouter des slides aux thèmes utilisés (voir "Ajout
d'un nouveau slide)""<br>Si des périodicité sont définies, il faut activer le block <span style="font-weight: bold;">"slider - slides aléatoires" </span>du module, peu importe sa place il
restera invisible<br>
    <span style="font-weight: bold;">Important</span> :
Le block "Slider - Slides courants" doit rester inactif , il est utilisé uniquement en mode développement.
               
<br>
<h4 class="odd">Préférences</h4>
<br>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr><td style="vertical-align: top; background-color: rgb(204, 255, 255); text-align: center;">Config<br></td><td style="vertical-align: top; background-color: rgb(204, 255, 255); text-align: center;">Description<br></td></tr><tr>
      <td style="vertical-align: top;">Editeur admin<br>
      </td>
      <td style="vertical-align: top;">Choix de léditeur pour les champs
"titre" et "description" des slides.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Taille
maximale de l'image</span></td>
      <td style="vertical-align: top;">Taille maximale en "mb" des slides
à télécharger.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Image
de largeur maximale</span></td>
      <td style="vertical-align: top;">Défini la largeur maximale des
images.<br>
1920 px pour les slides des thèmes "xbootstrap".</td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Image
de hauteur maximale</span></td>
      <td style="vertical-align: top;">Défini la haueur maximale des
images.<br>
500 px pour les slides des thèmes "xbootstrap".<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Admin
pages</span></td>
      <td style="vertical-align: top;">Nombre de lignes dans la liste de
l'admin.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Framework
"highslide"</span></td>
      <td style="vertical-align: top;">Dossier d'installation du
framework <a href="http://highslide.com/">Highslide</a><br>
Il permet de zoomer sur les slides dans liste de l'admin.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Reconstruction
du template des slides</span></td>
      <td style="vertical-align: top;">Force la reconstruction des
templates, à utiliser pendant le développement.<br>
<span style="color: rgb(204, 0, 0);">Laissez 'Non' en production.</span></td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><span class="caption-text">Extra
(CSS &amp; HTML)</span></td>
      <td style="vertical-align: top;">Code CSS ou HTML ajouté après la
liste des slides dans le fichier "<span style="font-weight: bold;">tpl/slider.tpl".</span><br>
Ce code n'est affiché que sur la page d'accueil comme les slides.<br>
Il permet d'ajouter un ou des éléments qui apparaitront sur tous les
slides.<br>
Exemple un icone avec un lien externe:<br>
      <br>
&lt;style&gt;<br>
#logo-bidon {<br>
 position : absolute;<br>
 top : 50px;<br>
 left : 50px;<br>
}<br>
&lt;/style&gt;<br>
&lt;a href="https://github.com/JJDai54/Slider-Module-Xoops"
target="blank"&gt;<br>
&lt;img id="logo-bidon"  name="logo-bidon" 
src="modules/slider/assets/images/logoModule.png" title="GitHub"/&gt;<br>
&lt;/a&gt;<br>

      </td>
    </tr>
  </tbody>
</table>
<h4 class="odd"><br></h4><h4 class="odd">Ajout d'un nouveau slide</h4>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="vertical-align: top; background-color: rgb(204, 255, 255); text-align: center;">Titre<br>
      </td>
      <td style="vertical-align: top; background-color: rgb(204, 255, 255); text-align: center;">Champ<br>
      </td>
      <td style="vertical-align: top; background-color: rgb(204, 255, 255); text-align: center;">Description<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Nom court</td>
      <td style="vertical-align: top;">sld_short_name</td>
      <td style="vertical-align: top;">Expression pour affichage dans
ladmin. Utilisé pour les tris, mais inutilisé pour laffichage sur les
slides.</td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Image</td>
      <td style="vertical-align: top;">sld_image</td>
      <td style="vertical-align: top;">Image du slide. Attention
véifiez la taille des fichiers (1920 x 500 px pour xbootstrap). Tous
les slides doivent avoir la même taille.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Titre</td>
      <td style="vertical-align: top;">sld_title</td>
      <td style="vertical-align: top;">Message principal affiché sur le
slide. Avec TinyMCE il est possible de rendre le titre plus visible sur
certains slide.</td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Sous-titre</td>
      <td style="vertical-align: top;">sld_subtitle</td>
      <td style="vertical-align: top;">Message affiché sous le titre
sur le slide. Avec TinyMCE il est
possible de rendre la description plus visible sur certains slide.</td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Titre du bouton<br>
      </td>
      <td style="vertical-align: top;">sld_button</td>
      <td style="vertical-align: top;">Ce bouton n'est affiché que si
une url est définie dans le champ "en savoir plus". Valeur par défaut
"Lire la suite ..."<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">En savoir plus</td>
      <td style="vertical-align: top;">sld_read_more</td>
      <td style="vertical-align: top;">URL du bouton affiché sur le
slide. Si cette zone n'est pas renseignée le bouton ne sera pas
affiché. Optionnelle, il permet d'accéder à  un article ou une page
d'informations.</td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Thème</td>
      <td style="vertical-align: top;">sld_theme</td>
      <td style="vertical-align: top;">Nom du thème sur lequel les
slide seront affichés. Le fichier "tpl/slides.tpl" sera modifié. Il est
possible de choisir tous les thèmes.<br>
Seuls les thèmes actifs définis dans les préféences du site seront
affichés.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Poids</td>
      <td style="vertical-align: top;">sld_weight</td>
      <td style="vertical-align: top;">Défini l'ordre d'affichage des
slides.<br>
Dans le bloc il est possible de définir un ordre <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">aléatoire</span>,
voir les options du bloc "update_theme".<br>
Si plusieurs slides ont le même poids l'ordre alphabétique des noms
courts est appliqué.</td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Actif</td>
      <td style="vertical-align: top;">sld_actif</td>
      <td style="vertical-align: top;">Oui : Le slide sera toujours
visible si aucune <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">période
      </span> n'est définie, ou si la période est <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">d'actualité.</span><br>
non = Le slide ne sera jamais afficher. Permet dactiver un slide pour
une utilisation ultéieure sans le supprimer, par exemple pour les évènements récurrents.</td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Péiodicité<br>
      </td>
      <td style="vertical-align: top;">sld_periodicity</td>
      <td style="vertical-align: top;">Permet de <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">définir
      </span> une période d'affichage:<br>
Toujours : Le slide sera toujours affiché si le champ est actif<br>
période flottante : Affiche le slide selon la période de début et de
fin.<br>
Semaine, Mois Trimestre, An : Affiche le slide pendant la période
définie. Ces options permettent de réactualiser automatiquement les
périodes une fois celle-ci passée.<br>
Exemple "1er mai 2021"  de début = 1er mai 2021 à 00h00 et date de
fin 1er mai 2021 à 23h 50. <br>
Le 2 mai 2021 à 00h00 la période sera reportée au 1er mai de l'année
suivante.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Date et heure de début<br>
      </td>
      <td style="vertical-align: top;">sld_date_begin</td>
      <td style="vertical-align: top;">A définir si une Périodicité a 
été sélectionnée<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Date et heure de fin<br>
      </td>
      <td style="vertical-align: top;">sld_date_end</td>
      <td style="vertical-align: top;">A définir si une Périodicité à
été sélectionnée; Doit-être supéieure à la date de début.<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Style du titre<br>
      </td>
      <td style="vertical-align: top;">sld_style_title</td>
      <td style="vertical-align: top;">Bien que l'on puisse mettre en
forme le titre avec un éditeur comme TinyMCE, il est possible à  la
place <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">d'utiliser
      </span> du CSS.<br>
Cela permet de rendre plus lisible la lecture du titre et la
description qui peuvent être <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">difficiles
      </span> sur certains slides.<br>
Mettre dans le champ uniquement les commande CSS sans le nom de la
classe ni les <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">accolades</span>.<br>
exemple:<br>
      <br>
      <span style="color: red;">color : red;</span><br style="color: red;">
      <span style="color: red;">background : yellow;</span><br style="color: red;">
      <span style="color: red;">padding : 25px;</span><br style="color: red;">
      <span style="color: red;">border-radius : 30px;</span><br style="color: red;">
      <span style="color: red;">margin-left : 150px:</span><br style="color: red;">
      <span style="color: red;">margin-right : 150px;</span><br style="color: red;">
      <span style="color: red;">width : 350px;</span><br style="color: red;">
      <span style="color: red;">position : absolute;</span><br style="color: red;">
      <span style="color: red;">left : 50px;</span><br>
      <br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Style de la description<br>
      </td>
      <td style="vertical-align: top;">sld_style_subtitle</td>
      <td style="vertical-align: top;">Idem pour la description<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Style du bouton<br>
      </td>
      <td style="vertical-align: top;">sld_style_button</td>
      <td style="vertical-align: top;">Idem pour le bouton et le titre
du bouton "En savoir plus"<br>
      </td>
    </tr>
  </tbody>
</table>
 <br>
<br>
<br>
<h4 class="odd">Onglet "Thème"</h4>La table des thèmes est automatiquement alimentée avec les thème actifs.<br>Fonctionalités :<br>&nbsp;- Génération des sliders avec les slides téléchagés<br>- Réinitialisation de slides originaux<br>- Suppression automatique des caches des thèmes&nbsp; pour actualiser l'affichage
immédiatement<br>
- Pour les thèmes xbootstrap 4, selection du style css parmi les 21 défini dans xswatch<br>- Pour les thèmes xbootstrap 4, sélection de la transition "verticale" ou "horizontale"'<br>
 Champs de la table des thèmes:<br><br>
<h4 class="odd">Blocks "Slider - Aléatoires"<br>
</h4>
Si des périodicité sont utilisées, il faut activer ce block. Il reste invisible, mais il vérifie régulièrement si le slider doit être actualisé..<br><br>
<h4 class="odd">Blocks "random_slider"<br>
</h4>
Utilisé uniquement en phase de développement pour valider la liste des slides qui devraient s'afficher.<br>Laisser ce block invisible.<br><br><h4 class="odd">Fonctionnement :</h4><ul><li>Génération des "sliders"</li></ul>Le fichier "tpl/slider.tpl" d'origine du thème est <span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;">renommé
</span> "<span style="font-weight: bold;">tpl/slider-old.tpl</span>".<br>Un nouveau fichier est généré avec les slides téléchargés.<br>Un fichiers du nom du thème est aussi générés dans le dossier "uploads/slider/images/slides/theme.txt".<br>Il contient les index des slides en cours et permet le renouvellement du
slider si la liste des slides courant à changés (slides périodiques)<br>Les caches du tème sont supprimés pour forcer leur regénération et rafraichir l'affichage immédiatement.<br><br><ul><li>Réinitialistion des sliders d'origines.</li></ul>Le fichier "tpl/slider.tpl" généré par le module est supprimé et le fichier&nbsp;<span style="font-size: 12pt; line-height: 107%; font-family: &quot;Times New Roman&quot;,serif;"></span>"<span style="font-weight: bold;">tpl/slider-old.tpl</span>". est renomé "tpl/slide.tpl"<br>Le fichier "uploads/slider/images/slides/theme.txt" est supprimés<br>Les caches du thème sont supprimés pour forcer leur regénération et rafraichir l'affichage immédiatement.<br>L'ajout
ou la suppression de slide forcera la génération des slider en
supprimant le fichier "uploads/slider/images/slides/theme.txt".<br><br>
<br>
 <br>
<br>
</div>
