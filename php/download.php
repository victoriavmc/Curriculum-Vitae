<?php
require '../vendor/autoload.php'; // Asegúrate de que la ruta sea correcta

use Dompdf\Dompdf;
use Dompdf\Options;

// Crear instancia de las opciones
$options = new Options();
$options->set('isImageEnabled', true); // Habilitar imágenes

// Crear instancia de Dompdf con las opciones
$dompdf = new Dompdf($options);

// Iniciar el buffer de salida y cargar el archivo HTML (puede ser un archivo o una cadena HTML)
ob_start();
include '../cv.html'; // Ruta al archivo HTML que contiene el contenido del CV
$html = ob_get_clean();

// Cargar el HTML en Dompdf
$dompdf->loadHtml($html);

// Renderizar el PDF
$dompdf->render();

// Nombre del archivo que se descargará
$nombreArchivo = "CV-VictoriaVMC.pdf";

// Enviar el PDF directamente al navegador como un archivo descargable
$dompdf->stream($nombreArchivo, array("Attachment" => true));
