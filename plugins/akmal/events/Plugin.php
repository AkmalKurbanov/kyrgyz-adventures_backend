<?php namespace Akmal\Events;

use System\Classes\PluginBase;

use Lang;
use Carbon\Carbon;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'rudate' => function($time, $format) {
                    if(! $time instanceof Carbon) {
                        $time = Carbon::parse($time);
                    }

                    if(Lang::getLocale() == 'rus') {
                        $monthsPlural = array('Янв', 'Фев', 'Мар', 'Апр', 'Мая', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
                        $format = str_replace('%BP', $monthsPlural[$time->month-1], $format);

                        $months = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
                        $format = str_replace('%B', $months[$time->month-1], $format);
                    }
                     elseif (Lang::getLocale() == 'de') {
                       $monthsPlural = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
                        $format = str_replace('%BP', $monthsPlural[$time->month-1], $format);

                        $months = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
                        $format = str_replace('%B', $months[$time->month-1], $format);
                    } 
                
                     else {
                        $format = str_replace('%BP', '%B', $format); // remove extra "P"
                    }

                    return $time->formatLocalized($format);
                },
                
            ]
        ];
    }
}



