<?php

return [
    'label' => [
        'new' => 'Nuevo Codigo QR',
        'view' => 'Ver codigo QR',
        'download' => 'Descargar codigo QR',
        'update' => 'Actualizar Codigo QR',
        "createQr" => "Genera un Codigo QR",
        "openMobile" => "Accede desde tu dispositivo móvil",
        "scanQrCodeWithCamera" => "Escanea el código QR con la cámara de tu móvil para abrir el enlace",
        "openNewTab" => "Abrir en una nueva pestaña",
    ],
    'form' => [
      "id" => "ID",
      "title" => "Titulo",
      "content" => "Contenido",
      "entityType" => "Tipo de entidad",
      "entityId" => "Id de entidad",
      "zone" => "Zona",
      "bannerInfo" => "Los prefijos facilitan la definición del tipo de contenido que contiene cada código QR. Aquí hay ejemplos comunes que puedes usar al ingresar tu contenido:<br><br><li>Dirección web: ingresa \"<b>http://</b>\" o \"<b>https://</b>\" seguido de la direccion web. Ejemplo: \"<b>https://www.imaginacolombia.com\"</b></li><li>Correo electrónico: ingresa \"<b>mailto:</b>\" seguido de la direccion de correo. Ejemplo: \"<b>mailto:support@imaginacolombia.com</b>\"</li><li>Número de teléfono: Ingresa \"<b>tel:</b>\" seguido del numero telefonico. Ejemplo: <b>tel:555-555-5555</b></li><li>Mensaje de texto (SMS) con mensaje y número predefinidos: Ingresa \"<b>sms:</b>\" Combina número \"<b>:</b>\" mensaje. Ejemplo: <b>sms:555-555-5555:yo soy el mensaje</b></li><li>Ubicacion geográfica: Ingresa \"<b>geo:</b>\". Ejemplo: <b>geo:-78.400364,-85.916993</b></li><li>Tarjeta MeCard: Ingresa \"<b>mecard:</b>\". Ejemplo: <b>MECARD:Simple, Software;Some Address, Somewhere, 20430;TEL:555-555-5555;EMAIL:support@imaginacolombia.com</b></li>"
    ],
    'messages' => [
      "sureCreateQr" => "¿Quieres generar un código QR para este registro?"
    ]
];
