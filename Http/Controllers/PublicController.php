<?php

namespace Modules\Iqreable\Http\Controllers;


use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Http\Request;
use Modules\Iqreable\Entities\Qr;

class PublicController extends BasePublicController
{
  public function redirectToContentQR (Request $request, $qrId)
  {
    $modelQr = Qr::where('id', $qrId)->first();

    if($modelQr) {
      return redirect()->away($modelQr->content);
    } else {
      return abort(404);
    }
  }
}