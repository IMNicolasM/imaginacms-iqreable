<?php

namespace Modules\Iqreable\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iqreable\Entities\Qr;
use Modules\Iqreable\Repositories\QrRepository;

class QrApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Qr $model, QrRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
