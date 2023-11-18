<?php

return [
    'label' => [
        'new' => 'New QR code',
        'view' => 'View QR code',
        'download' => 'Download QR code',
        'update' => 'Update QR code',
        "createQr" => "Generate a QR code",
    ],
    'form' => [
      "id" => "ID",
      "title" => "Title",
      "content" => "Content",
      "entityType" => "Entity Type",
      "entityId" => "Entity Id",
      "zone" => "Zone",
      "bannerInfo" => "Prefixes make it easier to define the type of content contained in each QR code. Here are common examples you can use when entering your content:<br><br><li>Website URL: enter \"<b>http://</b>\" or \"<b>https://</b>\" followed by the Website URL. Example: \"<b>https://www.imaginacolombia.com\"</b></li><li>Email: enter \"<b>mailto:</b>\" followed by the Email. Example: \"<b>mailto:support@imaginacolombia.com</b>\"</li><li>Phone number: Enter \"<b>tel:</b>\" followed by the Phone number. Example: <b>tel:555-555-5555</b></li><li>Text Message (SMS)  With Pretyped Message and Number: Enter \"<b>sms:</b>\" Combine number \"<b>:</b>\" message. Example: <b>sms:555-555-5555:I am a pretyped message</b></li><li>Geo Address: Enter \"<b>geo:</b>\". Example: <b>geo:-78.400364,-85.916993</b></li><li>MeCard: Enter \"<b>mecard:</b>\". Example: <b>MECARD:Simple, Software;Some Address, Somewhere, 20430;TEL:555-555-5555;EMAIL:support@imaginacolombia.com</b></li>"
    ],
    'messages' => [
      "sureCreateQr" => "Do you want to generate a QR code for this record?"
    ]
];
