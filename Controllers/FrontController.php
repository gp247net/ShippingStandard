<?php
#App\GP247\Plugins\ShippingStandard\Controllers\FrontController.php
namespace App\GP247\Plugins\ShippingStandard\Controllers;

use App\GP247\Plugins\ShippingStandard\AppConfig;
use GP247\Front\Controllers\RootFrontController;

class FrontController extends RootFrontController
{
    public $plugin;

    public function __construct()
    {
        parent::__construct();
        $this->plugin = new AppConfig;
    }

    public function index() {
        return view($this->plugin->appPath.'::Front',
            [
                //
            ]
        );
    }
}
