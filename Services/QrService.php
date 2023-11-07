<?php

namespace Modules\Iqreable\Services;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrService
{
  private $format;

  public function __construct()
  {
    $this->format = 'png';
  }

  public function generate($content)
  {
    $color = $this->getQrColor();
    $eyeColor = $this->getQrEyeColor();
    //Generate QR
    $qr = QrCode::format($this->format)
      ->size($this->getQrSize())
      ->color($color['r'], $color['g'], $color['b'])
      ->style($this->getQrStyle())
      ->eye($this->getQrEyeStyle())
      ->eyeColor(0, $eyeColor['r'], $eyeColor['g'], $eyeColor['b'], $eyeColor['r'], $eyeColor['g'], $eyeColor['b'])
      ->eyeColor(1, $eyeColor['r'], $eyeColor['g'], $eyeColor['b'], $eyeColor['r'], $eyeColor['g'], $eyeColor['b'])
      ->eyeColor(2, $eyeColor['r'], $eyeColor['g'], $eyeColor['b'], $eyeColor['r'], $eyeColor['g'], $eyeColor['b'])
      ->generate($content);
    //Return as base64
    return 'data:image/png;base64,' . base64_encode($qr);
  }

  /**
   * Return an array with the RGB color for QR
   *
   * @return array
   */
  private function getQrColor()
  {
    $hex = setting('iqreable::qrColor') ?? "#000000";
    list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    return ['r' => $r, 'g' => $g, 'b' => $b];
  }

  /**
   * Return the QR Style
   * @return mixed|string
   */
  private function getQrStyle()
  {
    return setting('iqreable::qrStyle') ?? "square";
  }

  /**
   * Return QR Eye Color
   *
   * @return mixed|string
   */
  private function getQrEyeColor()
  {
    $hex = setting('iqreable::qrEyeColor') ?? "#000000";
    list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    return ['r' => $r, 'g' => $g, 'b' => $b];
  }

  /**
   * Return QR Eye Style
   *
   * @return mixed|string
   */
  private function getQrEyeStyle()
  {
    return setting('iqreable::qrEyeStyle') ?? "square";
  }

  /**
   * Return QR Eye Style
   *
   * @return mixed|string
   */
  private function getQrSize()
  {
    return setting('iqreable::qrSize') ?? 256;
  }
}
