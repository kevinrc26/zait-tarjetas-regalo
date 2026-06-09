<?php
/**
 * Plugin Name: Zait - Banner Informativo de Citas
 * Version: 1.4.0
 * Description: Componente CI/CD 3: Inyecta un texto de auditoría de tesis en el footer global de WordPress.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_footer', 'zait_texto_auditoria_footer' );
function zait_texto_auditoria_footer() {
    ?>
    <div id="test-tesis-cd" style="background-color: #ffcc00; color: #000000; text-align: center; padding: 15px; font-weight: bold; font-size: 18px; width: 100%; position: relative; z-index: 99999; font-family: sans-serif;">
        ⚠️ DEMOSTRACIÓN TESIS: Despliegue Continuo (CD) Exitoso con GitHub Actions.
    </div>
    <?php
}
