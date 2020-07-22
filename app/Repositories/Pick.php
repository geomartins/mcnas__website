<?php

namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class Pick{

    public static function getFaq(){
        $datas = collect([
            (object) [
                'id' => '1',
                'question' => 'How can i contact you',
                'answer' => 'Please visit contact us page for all your queries and redressal of grievances. You can also contact us on 07033000090 number.'
            ],
            (object) [
                'id' => '2',
                'question' => 'Can i cancel my appoitment',
                'answer' => 'Sometimes the unexpected happens and you need to cancel your appointment make sure you call us or email us 1 day ago before cancellation.'
            ],

        ])->all();

        return $datas;

    }


    public static function getGallery(){
        $datas = collect([
            (object) [
                'id' => '1',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/01.jpg'
            ],
            (object) [
                'id' => '2',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/01.jpg'
            ],
            (object) [
                'id' => '3',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/01.jpg'
            ],
            (object) [
                'id' => '4',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/01.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/01.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/01.jpg'
            ],

        ])->all();

        return $datas;

    }
}