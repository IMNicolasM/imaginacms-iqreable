<?php

namespace Modules\Iqreable\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class Qr extends CrudModel
{
  use Translatable;

  protected $table = 'iqreable__qrs';
  public $transformer = 'Modules\Iqreable\Transformers\QrTransformer';
  public $repository = 'Modules\Iqreable\Repositories\QrRepository';
  public $requestValidation = [
    'create' => 'Modules\Iqreable\Http\Requests\CreateQrRequest',
    'update' => 'Modules\Iqreable\Http\Requests\UpdateQrRequest',
  ];
  //Instance external/internal events to dispatch with extraData
  public $dispatchesEventsWithBindings = [
    //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
    'created' => [],
    'creating' => [],
    'updated' => [],
    'updating' => [],
    'deleting' => [],
    'deleted' => []
  ];
  public $translatedAttributes = ['title'];
  protected $fillable = ['content', 'entity_type', 'entity_id', 'code'];
}
