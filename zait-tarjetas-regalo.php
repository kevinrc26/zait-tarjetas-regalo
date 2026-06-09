<?php
/**
 * Plugin Name: Zait - Mensaje Tarjetas de Regalo
 * Version: 1.0.0
 * Description: Componente CI/CD 3: Despliega un aviso informativo dinámico en el carrito para incentivar el uso de cupones de regalo.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'woocommerce_before_cart', 'zait_mensaje_tarjeta_regalo_cart' );
function zait_mensaje_tarjeta_regalo_cart() {
    echo '<div class="woocommerce-info" style="border-top-color: #00a0d2; background-color: #f7fcfe;">🎁 ¿Tienes una Tarjeta de Regalo Digital? Introduce el código de tu cupón en la sección de abajo para aplicar el saldo a tu sesión de spa.</div>';
}
