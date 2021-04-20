<?php namespace Travel\Trangchu\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Places Back-end Controller
 */
class Places extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Travel.Trangchu', 'trangchu', 'places');
    }
}
