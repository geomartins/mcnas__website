<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Incomparable Signature', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Best digital delivery service in Lagos Nigeria, Affordable digital advertising in Lagos, Affordable gift pack service in Lagos, Best website design in Lagos,	Website design services in Lagos Nigeria,	Design a website in Lagos,	Modern website design,	Good website design, Affordable website design '],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index,follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => 'C9E40CE04FC37ADEA608C2742EBD138C',
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => '0dc350e395d42d8b',
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Incomparable Signature', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website',
            'site_name'   => config('app.name'),
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Incomparable Signature', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
