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
                'title' => 'Classic Pack',
                'featured_image' => 'images/portfolio/gallery_1.jpg'
            ],
            (object) [
                'id' => '2',
                'title' => 'Medal',
                'featured_image' => 'images/portfolio/gallery_2.jpg'
            ],
            (object) [
                'id' => '3',
                'title' => 'Desk Biro',
                'featured_image' => 'images/portfolio/gallery_3.jpg'
            ],
            (object) [
                'id' => '4',
                'title' => '3D Dome Sticker',
                'featured_image' => 'images/portfolio/gallery_4.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Lapel, Cufflinks & Tie Clip',
                'featured_image' => 'images/portfolio/gallery_5.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Mug',
                'featured_image' => 'images/portfolio/gallery_6.jpg'
            ],

            (object) [
                'id' => '4',
                'title' => 'Promo Pack',
                'featured_image' => 'images/portfolio/gallery_7.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Royal Branded Hamper',
                'featured_image' => 'images/portfolio/gallery_8.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Keyring',
                'featured_image' => 'images/portfolio/gallery_9.jpg'
            ],

            (object) [
                'id' => '4',
                'title' => 'Acrylic Award',
                'featured_image' => 'images/portfolio/gallery_10.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Facial Tissue Box',
                'featured_image' => 'images/portfolio/gallery_11.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => '6-in-1 Executive Pack',
                'featured_image' => 'images/portfolio/gallery_12.jpg'
            ],

            (object) [
                'id' => '4',
                'title' => 'Call Card Case & Wristband',
                'featured_image' => 'images/portfolio/gallery_13.jpg'
            ],

            (object) [
                'id' => '5',
                'title' => 'Point Of Sales',
                'featured_image' => 'images/portfolio/gallery_14.jpg'
            ],
            (object) [
                'id' => '6',
                'title' => 'Set of Pen',
                'featured_image' => 'images/portfolio/gallery_15.jpg'
            ],

        ])->all();

        return $datas;

    }
}