<?php namespace Indikator\News\Updates;

use October\Rain\Database\Updates\Migration;
use DB;

class SeedClassPost extends Migration
{
    public function up()
    {
        DB::table('system_settings')->where('item', 'backend_editor_settings')->delete();
        DB::table('system_settings')->insert([
            'item' => 'backend_editor_settings',
            'value' => '{"html_allow_empty_tags":"textarea, a, iframe, object, video, style, script","html_allow_tags":"a, abbr, address, area, article, aside, audio, b, base, bdi, bdo, blockquote, br, button, canvas, caption, cite, code, col, colgroup, datalist, dd, del, details, dfn, dialog, div, dl, dt, em, embed, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, hr, i, iframe, img, input, ins, kbd, keygen, label, legend, li, link, main, map, mark, menu, menuitem, meter, nav, noscript, object, ol, optgroup, option, output, p, param, pre, progress, queue, rp, rt, ruby, s, samp, script, style, section, select, small, source, span, strike, strong, sub, summary, sup, table, tbody, td, textarea, tfoot, th, thead, time, title, tr, track, u, ul, var, video, wbr","html_no_wrap_tags":"figure, script, style","html_remove_tags":"script, style","html_line_breaker_tags":"figure, table, hr, iframe, form, dl","html_custom_styles":"\/*\r\n * Text\r\n *\/\r\n.oc-text-gray {\r\n    color: #AAA !important;\r\n}\r\n.oc-text-bordered {\r\n    border-top: solid 1px #222;\r\n    border-bottom: solid 1px #222;\r\n    padding: 10px 0;\r\n}\r\n.oc-text-spaced {\r\n    letter-spacing: 1px;\r\n}\r\n.oc-text-uppercase {\r\n    text-transform: uppercase;\r\n}\r\n\r\n\/*\r\n * Links\r\n *\/\r\na.oc-link-strong {\r\n    font-weight: 700;\r\n}\r\na.oc-link-green {\r\n    color: green;\r\n}\r\n\r\n\/*\r\n * Table\r\n *\/\r\ntable.oc-dashed-borders td,\r\ntable.oc-dashed-borders th {\r\n    border-style: dashed;\r\n}\r\ntable.oc-alternate-rows tbody tr:nth-child(2n) {\r\n    background: #f5f5f5;\r\n}\r\n\r\n\/*\r\n * Table cell\r\n *\/\r\ntable td.oc-cell-highlighted,\r\ntable th.oc-cell-highlighted {\r\n    border: 1px double red;\r\n}\r\ntable td.oc-cell-thick-border,\r\ntable th.oc-cell-thick-border {\r\n    border-width: 2px;\r\n}\r\n\r\n\/*\r\n * Images\r\n *\/\r\nimg.oc-img-rounded {\r\n    border-radius: 100%;\r\n    background-clip: padding-box;\r\n}\r\nimg.oc-img-bordered {\r\n    border: solid 10px #CCC;\r\n    box-sizing: content-box;\r\n}","html_style_image":[{"class_label":"Rounded","class_name":"oc-img-rounded"},{"class_label":"Bordered","class_name":"oc-img-bordered"}],"html_style_link":[{"class_label":"Green","class_name":"oc-link-green"},{"class_label":"Strong","class_name":"oc-link-strong"}],"html_style_paragraph":[{"class_label":"Bordered","class_name":"oc-text-bordered"},{"class_label":"Gray","class_name":"oc-text-gray"},{"class_label":"Spaced","class_name":"oc-text-spaced"},{"class_label":"Uppercase","class_name":"oc-text-uppercase"},{"class_label":"List Number","class_name":"list-number"},{"class_label":"List Check","class_name":"list-check"},{"class_label":"List Check Blue","class_name":"list-check-blue"},{"class_label":"Box Detail","class_name":"nvh-tag-box-detail"}],"html_style_table":[{"class_label":"Dashed Borders","class_name":"oc-dashed-borders"},{"class_label":"Alternate Rows","class_name":"oc-alternate-rows"},{"class_label":"Table Detail Tour","class_name":"table-list"}],"html_style_table_cell":[{"class_label":"Highlighted","class_name":"oc-cell-highlighted"},{"class_label":"Thick Border","class_name":"oc-cell-thick-border"}],"html_toolbar_buttons":""}'
        ]);
    }

    public function down()
    {
        
    }
}
