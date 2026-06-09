<?php
/**
 * Plugin Name: Zait - Banner Informativo de Citas
 * Version: 1.0.0
 * Description: Componente CI/CD 3: Muestra una barra flotante en la web para promover el agendamiento directo de citas de fisioterapia y spa.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_body_open', 'zait_banner_informativo_spa' );
function zait_banner_informativo_spa() {
    // Solo mostrar a los clientes en la parte pública de la web
    if ( ! is_admin() ) {
        echo '<div style="background-color: #00a0d2; color: #ffffff; text-align: center; padding: 10px; font-weight: bold; font-family: sans-serif; z-index: 9999; position: relative;">
                📅 ¡Reserva tu sesión de Fisioterapia o Spa hoy mismo! Utiliza nuestro sistema de citas en línea haciendo clic en Reservar Cita.
              </div>';
    }
}
