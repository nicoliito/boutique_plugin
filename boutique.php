<?php
/*
Plugin Name: boutique
Description: un plugin pour inciter à aller dans la boutique
Version: 1.0
Author: Pablito
*/

add_shortcode( 'boutique', 'boutique_shortcode' );
if (!function_exists( 'boutique_shortcode')) {

    function boutique_shortcode()  {
        
        $text = '<hr/>';
        $text .= '<p>' ;
        $text .= 'Si vous aussi vous souhaitez découvrir notre nouvelle gamme, rendez vous dans notre boutique et 
        bénéficiez de 20% de remise sur votre première commande.';
        $text .= '</p>';
        $text .= '<a href="https://thegoodvibe.go.yo.fr/boutique/">Découvrir la boutique</a>'; 
        $text .= '<hr/>';
        return $text ;

    
}}

?>
