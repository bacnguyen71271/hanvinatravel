<?php 
namespace Travel\Trangchu;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Travel\Trangchu\Components\Gioithieu'  => 'gioithieu',
            'Travel\Trangchu\Components\Setting'  => 'setting',
          
        ];
    }

    public function registerSettings()
    {
    }

    public function registerNavigation()
    {
        return [
            'places' => [
                'label'       => 'Địa điểm',
                'url'         => Backend::url('travel/trangchu/places'),
                'icon'        => 'icon-newspaper-o',
                'iconSvg'     => 'plugins/indikator/news/assets/images/news-icon.svg',
                'permissions' => ['*'],
                'order'       => 320,
            ],
            'Gioithieu' => [
                'label'       => 'Giới thiệu',
                'url'         => Backend::url('travel/trangchu/gioithieu'),
                'icon'        => 'icon-info',
                'permissions' => ['*'],
                'order'       => 320,
            ],
            'setting' => [
                'label'       => 'Trang chủ',
                'url'         => Backend::url('travel/trangchu/setting'),
                'icon'        => 'icon-home',
                'permissions' => ['*'],
                'order'       => 320,
            ],
        ];
    }
}
