<?php

namespace Modules\Iqreable\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class IqreableModuleTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    $columns = [
      ['config' => 'cmsPages', 'name' => 'cms_pages'],
      ['config' => 'cmsSidebar', 'name' => 'cms_sidebar'],
      ['config' => 'config', 'name' => 'config'],
      ['config' => 'permissions', 'name' => 'permissions'],
    ];

    $moduleRegisterService = app("Modules\Isite\Services\RegisterModuleService");

    $moduleRegisterService->registerModule('iqreable', $columns, 1);
  }
}
