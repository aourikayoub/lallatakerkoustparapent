<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function servicesDetailsPage($services_name) {
        $services = [
            'adrinaline-paragliding' => [
                'image' => 'images/items_2/adrinaline.jpg',
                'title_key' => 'cards.title_adr_para',
                'desc_key' => 'cards.text_adr_para',
            ],
            'discovery-paragliding' => [
                'image' => 'images/items_1/img para 2.jpg',
                'title_key' => 'cards.title_adv_para',
                'desc_key' => 'cards.text_adv_para',
            ],
            'quad-buggy' => [
                'image' => 'images/items_1/IMG_20221126_205957-scaled.jpg',
                'title_key' => 'cards.title_quad',
                'desc_key' => 'cards.text_quad',
            ],
            'camel-ride' => [
                'image' => 'images/items_1/OIP.webp',
                'title_key' => 'cards.title_camel',
                'desc_key' => 'cards.text_camel',
            ],
            'tea-break' => [
                'image' => 'images/items_1/IMG-20241231-WA0006.jpg',
                'title_key' => 'cards.title_tea',
                'desc_key' => 'cards.text_tea',
            ],
            'lunch' => [
                'image' => 'images/items_1/photo_2025-08-31_06-53-49.jpg',
                'title_key' => 'cards.title_lanch',
                'desc_key' => 'cards.text_lanch',
            ],
            'transport' => [
                'image' => 'images/items_2/img 5.jpg',
                'title_key' => 'cards.title_transport',
                'desc_key' => 'cards.text_transport',
            ],
            'media' => [
                'image' => 'images/items_2/img-3.jpg',
                'title_key' => 'cards.title_media',
                'desc_key' => 'cards.text_media',
            ]
        ];

        if (!array_key_exists($services_name, $services)) {
            abort(404);
        }

        $service_data = $services[$services_name];

        return view('pages.details_services', compact('services_name', 'service_data'));
    }
}
