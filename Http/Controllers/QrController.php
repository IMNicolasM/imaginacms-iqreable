<?php

namespace Modules\Iqreable\Http\Controllers;


use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Http\Request;
use Modules\Iqreable\Entities\Qr;

class QrController extends BasePublicController
{
  public function redirectToContentQR (Request $request, $qrId)
  {
    $modelQr = Qr::where('id', $qrId)->first();

    if($modelQr) {
      return redirect()->to($modelQr->content);
    } else {
      return abort(404);
    }
  }
}