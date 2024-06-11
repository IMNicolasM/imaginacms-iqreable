<?php

namespace Modules\Iqreable\Repositories\Eloquent;

use Modules\Iqreable\Repositories\QrRepository;
use Modules\Core\Icrud\Repositories\Eloquent\EloquentCrudRepository;
use Modules\Iqreable\Services\QrService;

class EloquentQrRepository extends EloquentCrudRepository implements QrRepository
{
  /**
   * Filter names to replace
   * @var array
   */
  protected $replaceFilters = [];

  /**
   * Relation names to replace
   * @var array
   */
  protected $replaceSyncModelRelations = [];

  /**
   * Filter query
   *
   * @param $query
   * @param $filter
   * @param $params
   * @return mixed
   */
  public function filterQuery($query, $filter, $params)
  {

    /**
     * Note: Add filter name to replaceFilters attribute before replace it
     *
     * Example filter Query
     * if (isset($filter->status)) $query->where('status', $filter->status);
     *
     */

    //Response
    return $query;
  }

  /**
   * Method to sync Model Relations
   *
   * @param $model ,$data
   * @return $model
   */
  public function syncModelRelations($model, $data)
  {
    //Get model relations data from attribute of model
    $modelRelationsData = ($model->modelRelations ?? []);

    /**
     * Note: Add relation name to replaceSyncModelRelations attribute before replace it
     *
     * Example to sync relations
     * if (array_key_exists(<relationName>, $data)){
     *    $model->setRelation(<relationName>, $model-><relationName>()->sync($data[<relationName>]));
     * }
     *
     */

    //Response
    return $model;
  }

  /**
   * Before create
   *
   * @param $data
   * @return void
   */
  public function beforeCreate(&$data)
  {
    if(!isset($data['base_64'])) $data['base_64'] = '';
  }

  /**
   * After create
   *
   * @param $model, $data
   * @return void
   */
  public function afterCreate(&$model, &$data)
  {
    $url = route('qr.public.redirect', ['qrId' => $model->id]);
    $service = new QrService();
    $qrBase64 = $service->generate($url);
    $data['base_64'] = $qrBase64;
    $model->update(['base_64' => $qrBase64]);
  }
}
