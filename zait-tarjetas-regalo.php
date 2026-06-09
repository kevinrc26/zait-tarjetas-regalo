<?php
/**
 * Plugin Name: Zait - Módulo Tarjetas Regalo (Insignia Absoluta)
 * Version: 1.0.4
 * Description: Fuerza una insignia flotante de regalo en la pantalla con alta prioridad.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_footer', 'zait_insignia_tarjetas_regalo', 9999 );
function zait_insignia_tarjetas_regalo() {
    ?>
    <div id="zait-badge-regalo" style="position: fixed !important; bottom: 30px !important; right: 30px !important; background-color: #a47c5c !important; color: #ffffff !important; padding: 12px 24px !important; box-shadow: 0 10px 25px rgba(0,0,0,0.2) !important; z-index: 9999999 !important; border-radius: 50px !important; font-family: Arial, sans-serif !important; font-size: 13px !important; font-weight: bold !important; display: block !important;">
        🎁 ¡Obtén una Tarjeta de Regalo!
    </div>
    <?php
}
