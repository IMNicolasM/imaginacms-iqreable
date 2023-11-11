<?php

namespace Modules\Iqreable\Traits;

use Illuminate\Support\Str;

trait IsQreable
{
  public function generateQr()
  {
    $QrRepository = app('Modules\Iqreable\Repositories\QrRepository');
    $data = [
      'content' => $this->url,
      'entity_type' => $this->entity,
      'entity_id' => $this->id,
      'zone' => 'mainqr'
    ];
    //Create and return the Qr
    return $QrRepository->create($data);
  }
}