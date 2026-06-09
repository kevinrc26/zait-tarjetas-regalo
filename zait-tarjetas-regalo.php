<?php
/**
 * Plugin Name: Zait - Banner Informativo de Citas
 * Version: 1.5.0
 * Description: Componente CI/CD 3: Muestra una notificación de auditoría dentro del escritorio de WordPress.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Este hook inyecta código exclusivamente en el escritorio de administración interno
add_action( 'admin_notices', 'zait_notificacion_interna_tesis' );
function zait_notificacion_interna_tesis() {
    echo '<div class="notice notice-warning is-dismissible" style="background-color: #ffcc00; border-left-color: #000000; padding: 15px;"><p style="font-size: 16px; margin: 0; font-weight: bold; color: #000000;">⚠️ PROYECTO DE TESIS: El Pipeline de CI/CD ejecutó el Despliegue Continuo con éxito en el servidor.</p></div>';
}
