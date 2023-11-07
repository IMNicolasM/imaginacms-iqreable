<?php

namespace Modules\Iqreable\Repositories\Cache;

use Modules\Iqreable\Repositories\QrRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheQrDecorator extends BaseCacheCrudDecorator implements QrRepository
{
    public function __construct(QrRepository $qr)
    {
        parent::__construct();
        $this->entityName = 'iqreable.qrs';
        $this->repository = $qr;
    }
}
