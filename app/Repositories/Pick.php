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
                'featured_image' => 'images/portfolio/gallery_1.jpg'
            ],
            (object) [
                'id' => '2',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_2.jpg'
            ],
            (object) [
                'id' => '3',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/gallery_3.jpg'
            ],
            (object) [
                'id' => '4',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_4.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/gallery_5.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_6.jpg'
            ],

            (object) [
                'id' => '4',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_7.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/gallery_8.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_9.jpg'
            ],

            (object) [
                'id' => '4',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_10.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/gallery_11.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_12.jpg'
            ],

            (object) [
                'id' => '4',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_13.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Printing Machine',
                'featured_image' => 'images/portfolio/gallery_14.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Commisioning of Machine',
                'featured_image' => 'images/portfolio/gallery_15.jpg'
            ],

        ])->all();

        return $datas;

    }
}