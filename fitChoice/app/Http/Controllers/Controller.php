<?php

namespace App\Http\Controllers;

class Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function index2()
    {
        // Get the search parameter from the request
        $search = request()->query('search');
        
        // Example gym data - in a real app, this would come from a database
        $gyms = [
            [
                'id' => 1,
                'name' => 'PowerFit Gym',
                'address' => '123 Fitness Street, Downtown, New York, NY 10001',
                'timings' => 'Mon-Fri: 6am-10pm, Sat-Sun: 8am-8pm',
                'location' => 'Downtown',
                'rating' => 4.5,
                'image' => 'images/gym1.jpeg'
            ],
            [
                'id' => 2,
                'name' => 'Iron Works Fitness',
                'address' => '456 Muscle Avenue, Uptown, New York, NY 10021',
                'timings' => 'Mon-Fri: 5am-11pm, Sat-Sun: 7am-9pm',
                'location' => 'Uptown',
                'rating' => 4.2,
                'image' => 'images/gym2.jpeg'
            ],
            [
                'id' => 3,
                'name' => 'CrossFit Elite',
                'address' => '789 Training Blvd, Midtown, New York, NY 10018',
                'timings' => 'Mon-Fri: 6am-9pm, Sat: 8am-6pm, Sun: Closed',
                'location' => 'Midtown',
                'rating' => 4.7,
                'image' => 'images/gym3.jpeg'
            ],
            [
                'id' => 4,
                'name' => 'Flex Fitness Center',
                'address' => '101 Wellness Road, Brooklyn, NY 11201',
                'timings' => '24/7',
                'location' => 'Brooklyn',
                'rating' => 4.0,
                'image' => 'images/gym4.jpeg'
            ]
        ];
        
        // Filter gyms if search parameter is provided
        if ($search) {
            $gyms = array_filter($gyms, function($gym) use ($search) {
                return (
                    stripos($gym['name'], $search) !== false || 
                    stripos($gym['address'], $search) !== false || 
                    stripos($gym['location'], $search) !== false
                );
            });
        }
        
        return view('findgym', [
            'gyms' => $gyms,
            'search' => $search
        ]);
    }
    
    public function index3()
    {
        return view('about');
    }
}
