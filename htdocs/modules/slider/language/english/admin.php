<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * slider - Slides management module for xoops
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        slider
 * @since          1.0
 * @min_xoops      2.5.9
 * @author         JJDai - Email:<jjdelalandre@orange.fr> - Website:<http://jubile.fr>
 */

include_once __DIR__ . '/common.php';
//include_once __DIR__ . '/main.php';

// ---------------- Admin Index ----------------
define('_AM_SLIDER_STATISTICS', 'Statistics');
// There are
define('_AM_SLIDER_THEREARE_SLIDES', "Il y a <span class='bold'>%s</span> slides dans la base");
// ---------------- Admin Files ----------------
// There aren't
define('_AM_SLIDER_THEREARENT_SLIDES', "Il n'y a pas de slide");
// Save/Delete
define('_AM_SLIDER_FORM_OK', 'Enregistrement r�ussi');
define('_AM_SLIDER_FORM_DELETE_OK', 'Suppression r�ussie');
define('_AM_SLIDER_FORM_SURE_DELETE', "Etes-vous sur de vouloir supprimer : <b><span style='color : Red;'>%s </span></b>");
define('_AM_SLIDER_FORM_SURE_RENEW', "Etes-vous sur de vouloir mettre � jour: <b><span style='color : Red;'>%s </span></b>");
// Buttons
define('_AM_SLIDER_ADD_SLIDE', 'Ajouter un nouveau Slide');
// Lists
define('_AM_SLIDER_SLIDES_LIST', 'Liste des Slides');
// ---------------- Admin Classes ----------------
// Slide add/edit
define('_AM_SLIDER_SLIDE_ADD', 'Ahouter le Slide');
define('_AM_SLIDER_SLIDE_EDIT', 'Editer le  Slide');
// Elements of Slide
define('_AM_SLIDER_ID', 'Id');
define('_AM_SLIDER_SLIDE_TITLE', 'Titre');
define('_AM_SLIDER_SLIDE_DESCRIPTION', 'Description');
define('_AM_SLIDER_SLIDE_WEIGHT', 'Poids');
define('_AM_SLIDER_SLIDE_DATE_BEGIN', 'Date de d�but');
define('_AM_SLIDER_SLIDE_DATE_END', 'Date de fin');
define('_AM_SLIDER_SLIDE_ACTIF', 'Actif');
define('_AM_SLIDER_SLIDE_ACTIF_DESC', 'Active ou non le slide quelque soit les options suivantes.<br>Cela �vite de la supprimer pour le r�utiliser plus tard');
define('_AM_SLIDER_SLIDE_SELECT_THEME', "Selectioner le th�me � modifier");
define('_AM_SLIDER_SLIDE_SELECT_THEME_DESC', "Le fichier original 'slide.tlp' sera sauvegard� avec l'extension '_old'");
define('_AM_SLIDER_SLIDE_IMAGE', 'Image');
define('_AM_SLIDER_SLIDE_IMAGE_UPLOADS', 'Image in %s :');
// General
define('_AM_SLIDER_FORM_UPLOAD', 't�l�charger un slide');
define('_AM_SLIDER_FORM_UPLOAD_NEW', 'T�l�charger un nouveau slide: ');
define('_AM_SLIDER_FORM_UPLOAD_SIZE', 'Poids maximum des images: ');
define('_AM_SLIDER_FORM_UPLOAD_SIZE_MB', 'MB');
define('_AM_SLIDER_FORM_UPLOAD_IMG_WIDTH', 'Largeur max des images: ');
define('_AM_SLIDER_FORM_UPLOAD_IMG_HEIGHT', 'Hauteur max des imagest: ');
define('_AM_SLIDER_FORM_IMAGE_PATH', 'Fichiers in %s :');
define('_AM_SLIDER_FORM_ACTION', 'Action');
define('_AM_SLIDER_FORM_EDIT', 'Modification');
define('_AM_SLIDER_FORM_DELETE', 'Suppprimer');
// ---------------- Admin Others ----------------
define('_AM_SLIDER_SLIDE_HAS_PERIODE', 'D�finir une p�riode');
define('_AM_SLIDER_SLIDE_HAS_PERIODE_DESC', 'Non : Visible quelque soit la p�riode d�finie si "actif" est oui');
define('_AM_SLIDER_ABOUT_MAKE_DONATION', 'Faire une donation');
define('_AM_SLIDER_SUPPORT_FORUM', 'Support Forum');
define('_AM_SLIDER_DONATION_AMOUNT', 'Montant de donation');
define('_AM_SLIDER_MAINTAINEDBY', ' is maintained by ');
define('_AM_SLIDER_SLIDE_TO_LOAD', 'Selectionner le slide � t�l�charger ');
define('_AM_SLIDER_SLIDE', 'Slide');
define('_AM_SLIDER_UPLOADSIZE', "Taille maximum du slide %s mo");
define('_AM_SLIDER_SLIDE_THEME', "Th�me");
define('_AM_SLIDER_ABOUT_CONTRIBUTION', "Contribution");
define('_AM_SLIDER_ABOUT_BY', "par");
define('_AM_SLIDER_ABOUT_WHY_DONATE', "Faire une donation c'est contribuer � maintenir le projet, et � aider l'auteur � le maintenir.<br>Merci � tous ceux qui feront un donation, si petite soit-elle.");
define('_AM_SLIDER_ACTIVATE', "Activation");
define('_AM_SLIDER_DESACTIVATE', "D�sactivation");

define('_AM_SLIDER_CLEAN_DIR', "Th�mes");
define('_AM_SLIDER_CLEAN_DIR_DESC', "Rinitialise les fichiers 'slider.tpl' d'origine de chaque th�me");
define('_AM_SLIDER_BLOCK', "Slider Block");
define('_AM_SLIDER_BLOCK_DESC', "Active le block qui permet la mise � jour des slides");
define('_AM_SLIDER_TRAITEMENTS', "Traitements");
define('_AM_SLIDER_SLIDE_SHORT_NAME', "Nom");
define('_AM_SLIDER_SLIDE_SHORT_NAME_DESC', "Si le nom n'est pas renseign�, c'est le nom de l'image originale qui sera utilis�.");
define('_AM_SLIDER_SLIDE_TITLE_DESC', "Titre principal affich� sur le slide");
define('_AM_SLIDER_SUBTITLE_DESC', "Texte ou sous-titre affich� sur le slide");
define('_AM_SLIDER_BUTTON_URL', "URL du bouton");
define('_AM_SLIDER_SLIDE_READ_MORE_DESC', "Lien sur un article ou une page avec plus d'informations");
define('_AM_SLIDER_SLIDE_PROCESSING_OK', "Traitement effectu�");
define('_AM_SLIDER_REFRESH_SLIDERS', "Rafraichir les sliders");
define('_AM_SLIDER_REFRESH_SLIDERS_DESC', "R�initialise tous les th�mes et force la reconstruction des sliders");
define('_AM_SLIDER_SLIDE_CURRENT_STATUS', "En cours");
define('_AM_SLIDER_UP', "Monter");
define('_AM_SLIDER_DOWN', "Descendre");
define('_AM_SLIDER_HIGHSLIDE_0', "<span style=\"color:red;\">Le framework \"<a href=\"http://highslide.com/\">Highslide</a>\" n'est pas install�.</span>");
define('_AM_SLIDER_HIGHSLIDE_1', "<span style=\"color:green;\">Le framework \"<a href=\"http://highslide.com/\">Highslide</a>\" est install�.</span>");
define('_AM_SLIDER_TRIER_TABLEAU_HTML_0', "<span style=\"color:red;\">Le framework \"<a href=\"https://github.com/JJDai54/trierTableauHTML\"> trierTableauHTML </a>\" n'est pas install�.</span>");
define('_AM_SLIDER_TRIER_TABLEAU_HTML_1', "<span style=\"color:green;\">Le framework \"<a href=\"https://github.com/JJDai54/trierTableauHTML\"> trierTableauHTML </a>\" est install�.</span>");

define('_AM_SLIDER_SLIDE_BUTTON_CAPTION', "Titre du bouton");
define('_AM_SLIDER_SLIDE_BUTTON_CAPTION_DESC', "Le bouton n'apparait que si une url est d�finie.<br>exemples de titres : Lire plus | En savoir plus ...");

define('_AM_SLIDER_FIRST', "Premier");
define('_AM_SLIDER_LAST', "Dernier");

define('_AM_SLIDER_SLIDE_STYLE_TITLE', "Style du titre");
define('_AM_SLIDER_SLIDE_STYLE_SUBTITLE', "Style du sous-titre");
define('_AM_SLIDER_SLIDE_STYLE_BUTTON', "Style du bouton");
define('_AM_SLIDER_SLIDE_STYLE_DESC', "Utiliser les styles CSS sans le nom de la classe ni les accolades. Exemple :<br><span style='color:blue'>color:red;<br>background:yellow;<br>opacity: 0.8;<br>padding: 0px 25px 0px 25px;<br>border-radius: 50px 50px 50px 50px;</span>");

define('_AM_SLIDER_PERIODICITY', "P�riodicit�");
define('_AM_SLIDER_PERIODICITY_DESC', "D�fini la p�riodicit� de renouvellement d'affichage apr�s une p�riode expir�e<br>'Toujours' : aucune pr�riodicit�.<br>pour les autres options d�finir une date de d�but et de fin.");

define('_AM_SLIDER_PERIODICITE_ALWAYS', 'Toujours');
define('_AM_SLIDER_PERIODICITE_FLOAT', 'P�riode flottante');
define('_AM_SLIDER_PERIODICITE_CYCLIQUE', 'P�riode cyclique');
define('_AM_SLIDER_PERIODICITE_WEEK', 'Toutes les semaines');
define('_AM_SLIDER_PERIODICITE_MONTH', 'Tous les mois');
//define('_AM_SLIDER_PERIODICITE_BIMONTHLY', 'Une fois tous les deux mois');
define('_AM_SLIDER_PERIODICITE_QUATER', 'Tous les trimestres');
//define('_AM_SLIDER_PERIODICITE_SEMESTER', 'Une fois par semestre');
define('_AM_SLIDER_PERIODICITE_YEAR', 'Tous les ans');
define('_AM_SLIDER_UPDATE_PERIODICITY', 'Mettre � jour la p�riodicit�');
define('_AM_SLIDER_PERIODICITY_UPDATED', "Les p�riodes de %s slides ont �t� mises � jour");
define('_AM_SLIDER_NO_PERIODICITY_TO_UPDATE', "Il n'y a pas de p�riode � mettre � jour");
define('_AM_SLIDER_INACTIF', "Inactif");
define('_AM_SLIDER_ACTIF', "Actif");
define('_AM_SLIDER_CURRENT_DATE', "Date courante");
// define('_AM_SLIDER_SLIDE_SELECT_THEME', "Choix du ou des th�mes");
// define('_AM_SLIDER_SLIDE_SELECT_THEME_DESC', "Date courante");
define('_AM_SLIDER_THEME', "Th�mes");

define('_AM_SLIDER_ALL_THEMES_ARE_VISIBLE', "Visible dans tous les th�mes");
define('_AM_SLIDER_ALL_THEMES', "Tous les th�mes");
define('_AM_SLIDER_TITLE', "Titre principal");
define('_AM_SLIDER_SUBTITLE', "Sous-titre");
define('_AM_SLIDER_BUTTON', "Bouton");
define('_AM_SLIDER_OPTIONS', "Options");

define('_AM_SLIDER_THEME_TRANSITION', "D�filement");
define('_AM_SLIDER_THEME_TRANSITION_DESC', "Cette option n'est disponible que pour les th�mes xbootstrap 4 (xswatch4)");
define('_AM_SLIDER_THEME_TRANSITION_VERTICAL', "Vertical");
define('_AM_SLIDER_THEME_TRANSITION_HORIZONTAL', "Horizontal");

define('_AM_SLIDER_NAME', "Nom");
define('_AM_SLIDER_THEME_WHITE_CSS', "CSS");
define('_AM_SLIDER_THEME_WHITE_CSS_DESC', "Style CSS du th�me.<br>Dossiers pr�fix�s \"css_\" des th�mes xbootstrap 4 (xswatch4)");
define('_AM_SLIDER_THEME_DARK_CSS', "CSS sombre");
define('_AM_SLIDER_THEME_DARK_CSS_DESC', "Style CSS sombre pour les themes \"xswatch 4E\".");

define('_AM_SLIDER_THEME_VERSION', "Version");
define('_AM_SLIDER_THEME_VERSION_DESC', "V�rifiez la vesion du th�me bottstrap avent de changer cette valeur");
define('_AM_SLIDER_REFRESH_TBL_THEME', "Initialiser la table");
define('_AM_SLIDER_THEME_TPL_SLIDER', "Template");
define('_AM_SLIDER_THEME_TPL_SLIDER_DESC', "Template � utiliser pour la g�n�ration du slider.<br>utiliez \"slider_theme_xbootstrap_4.tpl\" pour les th�mes xbootstrap 4 (xswatch4)");
define('_AM_SLIDER_FOLDER', "Dossier");
define('_AM_SLIDER_THEMES_LIST', "Retour � la liste des th�mes");
define('_AM_SLIDER_EDIT_MYCSS', "Edit mycss.css");
define('_AM_SLIDER_THEME_EDIT_MYCSS', "Edition du fichier \"my_css.css\" du th�me : %s");
define('_AM_SLIDER_THEME_EDIT_MYCSS_DESC', "Permet de surcharger le style du th�me.<br>Ce fichier est charg� apr�s les CSS du th�me");
define('_AM_SLIDER_SLIDE_IMG_DESC', "S�lectionnez une image existante ou t�l�chargez une nouvelle image.<br>Laissez vide pour garder l'image existante.");
define('_AM_SLIDER_IMG_UPLODED', "Images t�l�charg�es : ");
define('_AM_SLIDER_IMG_DELETED_1', "%s images inutils�es ont �t� suprim�es.");
define('_AM_SLIDER_IMG_DELETED_0', "Aucune imges a supprimer.");
define('_AM_SLIDER_PURGER_IMG', "Purger les \"slides\" inutilis�s");
define('_AM_SLIDER_PURGER_IMG_DESC', "Les \"slides\" inutilis�es de tous les th�mes seront dfinitement supprim�es.");

define('_AM_SLIDER_THEME_DESACTIVER', "Rinitialiser les slides d'origine");
define('_AM_SLIDER_GENERER_SLIDER', "G�n�rer le Slider");
define('_AM_SLIDER_GENERER_SLIDER_2', "G�n�rer de nouveau le Slider");
define('_AM_SLIDER_THEME_SURCHARGER', "Surcharger my_css.css");
define('_AM_SLIDER_ALLOW_UPDATE', "MAJ");
define('_AM_SLIDER_GENERER', 'G�n�rer');

define('_AM_SLIDER_PERIODICITE_RND_NEVER', 'Jamais (Conseill�)');
define('_AM_SLIDER_PERIODICITE_RND_RANDOM', 'Al�atoire � chaque rafraichissement de la page (D�conseill�)');
define('_AM_SLIDER_PERIODICITE_RND_HOUR', 'Une fois par heure');
define('_AM_SLIDER_PERIODICITE_RND_MINUTE', 'Une fois par minute');
define('_AM_SLIDER_PERIODICITE_RND_DAY', 'Une fois par jour');
define('_AM_SLIDER_PERIODICITE_RND_WEEK', 'Une fois par semaine');
define('_AM_SLIDER_PERIODICITE_RND_MONTH', 'Une fois par mois');
define('_AM_SLIDER_PERIODICITE_RND_BIMONTHLY', 'Une fois tous les deux mois');
define('_AM_SLIDER_PERIODICITE_RND_QUATER', 'Une fois par trimestre');
define('_AM_SLIDER_PERIODICITE_RND_SEMESTER', 'Une fois par semestre');
define('_AM_SLIDER_PERIODICITE_RND_YEAR', 'Une fois par an');

define('_AM_SLIDER_THEME_RANDOM', 'MAJ al�atoire');
define('_AM_SLIDER_PURGER_SLIDES', "Purger le(s) %s slide(s) inutilis�(s)");
define('_AM_SLIDER_THEMES_STATS1', "Th�me %s : %s slide(s) d�fini(s) dont %s en cours");
define('_AM_SLIDER_THEMES_STATS2', "<tr><td>%s %s : </td><td>%s slide(s) d�fini(s)</td><td> dont %s en cours</td></tr>");
define('_AM_SLIDER_THEME_XSWATCH4E', "xswatch 4E");
define('_AM_SLIDER_THEME_SLIDER', "Slider");

define('_AM_SLIDER_THEME_DESACTIVER_SLIDER', "D�sactiver le slider");
define('_AM_SLIDER_THEME_ACTIVER_SLIDER', "Activer le slider");
define('_AM_SLIDER_STATUS', "Etat");
define('_AM_SLIDER_DEL_IMG', "Supprimer l'image");
define('_AM_SLIDER_NONE', "Aucun");
define('_AM_SLIDER_CURRENT_LOGO', "Logo courant");
define('_AM_SLIDER_NEW_LOGO', "Nouveau logo");
define('_AM_SLIDER_THEME_LOGO', "Logo");
define('_AM_SLIDER_BLOCKS_INFO', "Blocks du module");

define('_AM_SLIDER_THEME_MYCSS', "Fichier CSS � modifier");
define('_AM_SLIDER_THEME_MYCSS_DESC', "Fichier de surchage des attributs background, color, ...<br>Selon le theme: reset.css , my_xoops.css, ...");

define('_AM_SLIDER_ADD_STYLE', "Ajouter un style");
define('_AM_SLIDER_STYLE_ADD', "Ajouter un style");
define('_AM_SLIDER_THEREARENT_STYLES', "Il n'y a aucun style ans la base");
define('_AM_SLIDER_LIST_STYLES', "Liste des styles");
define('_AM_SLIDER_STYLE_NAME', "Nom");
define('_AM_SLIDER_STYLE_NAME_DESC', "Nom unique");
define('_AM_SLIDER_STYLE_CSS', "CSS");
define('_AM_SLIDER_STYLE_EDIT', "Edit style");
define('_AM_SLIDER_STYLE_OBJECT', "Objet");
define('_AM_SLIDER_STYLE_NONE', "Aucun");
define('_AM_SLIDER_STYLE_TITLE', "Style du titre");
define('_AM_SLIDER_STYLE_SUBTITLE', "Style du sous-titre");
define('_AM_SLIDER_STYLE_BUTTON', "Style du bouton");

define('_AM_SLIDER_THEME_BACKCOLOR', "Couleur de fond du th�me");
define('_AM_SLIDER_THEME_BACKIMAGE', "Image de fond du th�me");
define('_AM_SLIDER_THEME_COLOR', "Couleur du texte");
define('_AM_SLIDER_THEME_LINK_COLOR', "Couleur des liens");
define('_AM_SLIDER_THEME_LINK_HOVER_COLOR', "Couleur de survol des liens");
define('_AM_SLIDER_THEME_NAVBBAR_BACKCOLOR', "Couleur de la barre de menu");

define('_AM_SLIDER_THEME_JUMBOTRON', "Jumbotron");
define('_AM_SLIDER_THEME_DESACTIVER_JUMBOTRON', "D�sactiver Jumbotron (A propos de nous)");
define('_AM_SLIDER_THEME_ACTIVER_JUMBOTRON', "Activer Jumbotron (A propos de nous)");
define('_AM_SLIDER_ALL_SLIDES', "Total slides");

// ---------------- End ----------------
