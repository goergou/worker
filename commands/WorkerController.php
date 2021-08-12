<?php

namespace app\commands;

use yii\console\Controller;

abstract class WorkerController extends Controller {


    public $d;

    public $q;

    public $g;

    public function options($actionID) {
        $options = parent::options($actionID);
        $options[] = 'd';
        $options[] = 'q';
        $options[] = 'g';
        return $options;
    }

    public function optionAliases() {
        $aliases = parent::optionAliases();
        $aliases['d'] = 'd';
        $aliases['q'] = 'q';
        $aliases['g'] = 'g';
        return $aliases;
    }
}