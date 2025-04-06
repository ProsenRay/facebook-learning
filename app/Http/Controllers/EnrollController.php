<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index($type){
        $course = [
          'facebook' =>[
              'title'=>'Facebook Ads Masterclass & Career Guidline',
              'description'=>'Learn how to master Facebook Ads and grow your business!',
              'price' =>3000,
          ],
            'digital-marketing' =>[
                'title'=>'Digital marketing Masterclass & Career Guidline',
                'description'=>'Comprehensive guide to SEO, Social Media, and Email Marketing.',
                'price' =>4000,
            ],
        ];
        if(!array_key_exists($type,$course)){
            abort(404);
        }
        return view('Frontend.Enroll.enroll-form', [
            'data' => $course[$type],
        ]);
    }
}
