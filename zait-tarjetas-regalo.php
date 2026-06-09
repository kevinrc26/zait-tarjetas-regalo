<?php
/**
 * Plugin Name: Zait - Banner Informativo de Citas
 * Version: 1.1.0
 * Description: Componente CI/CD 3: Muestra una barra fija global en la parte superior para promover el agendamiento directo de citas.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Cambiamos el hook a wp_footer para asegurar compatibilidad total con Elementor y Amelia
add_action( 'wp_footer', 'zait_banner_informativo_spa_fijo' );
function zait_banner_informativo_spa_fijo() {
    // Solo mostrar a los visitantes en la parte pública de la web
    if ( ! is_admin() ) {
        ?>
        <div style="background-color: #00a0d2; color: #ffffff; text-align: center; padding: 12px 20px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; position: fixed; top: 0; left: 0; width: 100%; z-index: 999999; box-shadow: 0 4px 10px rgba(0,0,0,0.15); box-sizing: border-box;">
            📅 ¡Reserva tu sesión de Fisioterapia o Spa hoy mismo! Utiliza nuestro sistema de citas en línea haciendo clic en Reservar Cita.
        </div>
        <!-- Ajuste estético para que la barra fija no tape la cabecera original -->
        <style>
            body { margin-top: 45px !important; }
            @media (max-width: 782px) { body { margin-top: 45px !important; } }
        </style>
        <?php
    }
}
