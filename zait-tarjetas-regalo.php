<?php
/**
 * Plugin Name: Zait - Banner Informativo de Citas
 * Version: 1.2.0
 * Description: Componente CI/CD 3: Inyecta dinámicamente un aviso informativo sobre tarjetas de regalo dentro del agendamiento.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_footer', 'zait_inyectar_aviso_amelia' );
function zait_inyectar_aviso_amelia() {
    ?>
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // Ejecutar un bucle para esperar a que Amelia termine de cargar el formulario en pantalla
        var comprobarAmelia = setInterval(function() {
            var formulario = document.querySelector('.am-select-service');
            if (formulario) {
                clearInterval(comprobarAmelia);
                
                // Crear el contenedor del banner de regalo
                var avisoHtml = document.createElement('div');
                avisoHtml.innerHTML = '🎁 <strong>Nota del Spa:</strong> ¿Tienes una Tarjeta de Regalo Digital? Infórmalo al asistente antes de iniciar tu sesión para aplicar tu saldo.';
                avisoHtml.style.cssText = "background-color: #e6f7ff; color: #0050b3; border: 1px solid #91d5ff; padding: 12px; margin-bottom: 15px; border-radius: 4px; font-family: sans-serif; font-size: 14px; text-align: center;";
                
                // Insertar el aviso en la parte superior del cuadro blanco de Amelia
                formulario.insertBefore(avisoHtml, formulario.firstChild);
            }
        }, 500); // Comprueba cada medio segundo
    });
    </script>
    <?php
}
