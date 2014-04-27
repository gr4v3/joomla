<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of extras
 *
 * @author grave
 */
if(!function_exists('Debug')) {
    function Debug($content = NULL, $die = FALSE) { 
        if (!empty($_GET['debug'])) {
            $_GET['debug']?setcookie('debugging',1,time()+3600):setcookie('debugging',0,time()-3600);
        }
        if (!empty($_COOKIE['debugging']) && $_COOKIE['debugging'] == 1) {
            $txt = '<pre>';
            $txt.= print_r($content, TRUE);
            $txt.= '</pre>';
            if ($die) die($txt); else echo $txt;
        }
    }
}