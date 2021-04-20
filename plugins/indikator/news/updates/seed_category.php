<?php namespace Indikator\News\Updates;

use October\Rain\Database\Updates\Migration;
use DB;

class SeedCategory extends Migration
{
    public function up()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Tin tức',
                'slug' => 'tin-tuc',
                'content' => '',
                'image' => '',
                'hidden' => '2',
                'status' => '1',
                'sort_order' => '1',
            ], [
                'id' => 2,
                'name' => 'Khách hàng',
                'slug' => 'khach-hang',
                'content' => '',
                'image' => '',
                'hidden' => '2',
                'status' => '1',
                'sort_order' => '2',
            ], [
                'id' => 3,
                'name' => 'Tour',
                'slug' => 'tour',
                'content' => '',
                'image' => '',
                'hidden' => '2',
                'status' => '1',
                'sort_order' => '3',
            ], [
                'id' => 4,
                'name' => 'Combo tour',
                'slug' => 'combo-tour',
                'content' => '',
                'image' => '',
                'hidden' => '2',
                'status' => '1',
                'sort_order' => '4',
            ],
        ];
        DB::table('indikator_news_categories')->insert($data);
    }

    public function down()
    {
        
    }
}
