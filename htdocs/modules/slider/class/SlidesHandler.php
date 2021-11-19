<?php

namespace XoopsModules\Slider;

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

use XoopsModules\Slider;


/**
 * Class Object Handler Slides
 */
class SlidesHandler extends \XoopsPersistableObjectHandler
{
    /**
     * Constructor
     *
     * @param \XoopsDatabase $db
     */
    public function __construct(\XoopsDatabase $db)
    {
        parent::__construct($db, 'slider_slides', Slides::class, 'sld_id', 'sld_short_name');
    }

    /**
     * @param bool $isNew
     *
     * @return object
     */
    public function create($isNew = true)
    {
        return parent::create($isNew);
    }

    /**
     * retrieve a field
     *
     * @param int $i field id
     * @param null fields
     * @return mixed reference to the {@link Get} object
     */
    public function get($i = null, $fields = null)
    {
        return parent::get($i, $fields);
    }

    /**
     * get inserted id
     *
     * @param null
     * @return int reference to the {@link Get} object
     */
    public function getInsertId()
    {
        return $this->db->getInsertId();
    }

    /**
     * Get Count Slides in the database
     * @param int    $start
     * @param int    $limit
     * @param string $sort
     * @param string $order
     * @return int
     */
    public function getCountSlides($criteria = null, $start = 0, $limit = 0, $sort = 'sld_id ASC, sld_short_name', $order = 'ASC')
    {
    	$crCountSlides = ($criteria) ? $criteria: new \CriteriaCompo();
        $crCountSlides = $this->getSlidesCriteria($crCountSlides, $start, $limit, $sort, $order);
        return $this->getCount($crCountSlides);
    }

    /**
     * Get All Slides in the database
     * @param int    $start
     * @param int    $limit
     * @param string $sort
     * @param string $order
     * @return array
     */
    public function getAllSlides($criteria = null, $start = 0, $limit = 0, $sort = 'sld_id ASC, sld_short_name', $order = 'ASC')
    {
    	$crAllSlides = ($criteria) ? $criteria: new \CriteriaCompo();
        $crAllSlides = $this->getSlidesCriteria($crAllSlides, $start, $limit, $sort, $order);
        return $this->getAll($crAllSlides);
    }

    /**
     * Get Criteria Slides
     * @param        $crSlides
     * @param int    $start
     * @param int    $limit
     * @param string $sort
     * @param string $order
     * @return int
     */
    private function getSlidesCriteria($crSlides, $start, $limit, $sort, $order)
    {
        $crSlides->setStart($start);
        $crSlides->setLimit($limit);
        $crSlides->setSort($sort);
        $crSlides->setOrder($order);
        return $crSlides;
    }
    
    /* ////////////////////////////////////////////////////////////////// */


/**
 * Renvoioe un tableau des slides actif pour le theme courant
 *
 */
function getSlidesActifs($theme = '', $rnd = false) {
global $xoopsConfig, $helper;

    $helper      = Helper::getInstance();


    
    //recupe du theme actif
    if ($theme == '') $theme = $xoopsConfig['theme_set'];
                
    // selection des slides actifs
    $now = time();
    
    //-------------------------------------------------------------------------
    //Selectionne les slides actifs pour le theme courant
    $crSlidesActif = new \CriteriaCompo();    
    $crSlidesActif->add(new \Criteria('sld_actif', 1, '='));
 
 
    $crSlidesTheme = new \CriteriaCompo();    
    $crSlidesTheme->add(new \Criteria('sld_theme', $theme, '='));
    $crSlidesTheme->add(new \Criteria('sld_theme',  0, '=', '', "LENGTH(sld_theme)" ), 'OR');
 
 
 
    
    //-------------------------------------------------------------------------
    //Selectionne les slides qui n'utilisent pas une periode
    $crSlidesHasPeriode = new \CriteriaCompo();
    $crSlidesHasPeriode->add(new \Criteria('sld_periodicity', Constants::PERIODICITY_ALWAYS, '='));
    
    //pour les slides qui utilisent une p�riode 
    //s�lectionne ceux qui concordent avec la date en cours
    $crSlidesperiode = new \CriteriaCompo();    
    $crSlidesperiode->add(new \Criteria('sld_periodicity', Constants::PERIODICITY_ALWAYS, '>'));
    $crSlidesperiode->add(new \Criteria('sld_date_end', $now, '>='));
    $crSlidesperiode->add(new \Criteria('sld_date_begin', $now, '<='));
    //$crSlidesperiode->add(new \Criteria('sld_date_begin', $now + 86400, '<='));
    
    $crSlidesAP = new \CriteriaCompo();    
    $crSlidesAP->add($crSlidesHasPeriode);    
    $crSlidesAP->add($crSlidesperiode, "OR");    
    //-------------------------------------------------------------------------
    //criteria = (actif AND theme courant) AND (sans periode OR (utilise periode AND (date_debut < date courante AND date_fin > date courante))) 
    $crSlides0 = new \CriteriaCompo();    
    $crSlides0->add($crSlidesActif);    
    $crSlides0->add($crSlidesTheme, 'AND');    
    $crSlides0->add($crSlidesAP, "AND");  
    
    //-------------------------------------------------------------------------
    //defini l'ordre d'affichage  
    if ($rnd){
      $crSlides0->setSort('RAND()');
      //$crSlides0->setOrder('ASC');
    }else{
      $crSlides0->setSort('sld_weight,sld_short_name');
      $crSlides0->setOrder('ASC');
    }
  
    $slidesAll = $this->getAll($crSlides0);
    unset($crSlides);
    $slides = array();
    $Slide_Ids = [];
    
    if (\count($slidesAll) > 0) {
        foreach (\array_keys($slidesAll) as $i) {
            $id = $slidesAll[$i]->getVar('sld_id'); // pas utile mais il y avait un doute sur la cl� du recordset, a verifier
            $slides[$id] = $slidesAll[$i]->getValuesSlides();

        }
    }

//echo "<hr><pre>" . print_r ($slidesAll, true). "</pre><hr>";
//echo "<hr><pre>" . print_r ($slides, true). "</pre><hr>";
    
    return $slides;
}
    
} // ----- FIN DE LA CLASSE -----
