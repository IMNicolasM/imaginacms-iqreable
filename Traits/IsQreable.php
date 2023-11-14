<?php

namespace Modules\Iqreable\Traits;

use Illuminate\Support\Str;

trait IsQreable
{
  public function generateQr($params = null)
  {
    $QrRepository = app('Modules\Iqreable\Repositories\QrRepository');
    $data = [
      'content' => $this->url,
      'entity_type' => $this->entity,
      'entity_id' => $this->id,
      'zone' => $params['zone'] ?? 'mainqr'
    ];
    //Create and return the Qr
    return $QrRepository->create($data);
  }
  public function qr()
  {
    return $this->hasMany('Modules\Iqreable\Entities\Qr', 'entity');
  }
}