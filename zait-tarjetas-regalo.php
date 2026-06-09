<?php
/**
 * Plugin Name: Zait - Banner Informativo de Citas
 * Version: 1.3.0
 * Description: Componente CI/CD 3: Inyecta un aviso de prueba global en la cabecera del documento web.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Forzamos la inyección al principio de la carga de la página
add_action( 'wp_head', 'zait_alerta_global_tesis' );
function zait_alerta_global_tesis() {
    ?>
    <script type="text/javascript">
        alert("¡Pipeline CI/CD Exitoso! El plugin de Tarjetas de Regalo se ha desplegado correctamente.");
    </script>
    <?php
}
