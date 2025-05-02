<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $projects = [
        'brand-identity' => [
            'title' => 'Brand Identity',
            'projects' => [
                [
                    'title' => 'Keystone Brand Identity',
                    'description' => '',
                    'img' => 'assets/img/KEYSTONE REALTY-02.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/KEYSTONE1.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/image2.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/KEYSTONE REALTY_KEYSTON 1.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/KEYSTONE REALTY_KEYSTON 1 copy-05.jpg'
                        ]
                    ]
                ],
                [
                    'title' => 'Axam Brand Identity',
                    'description' => '',
                    'img' => 'assets/img/AXAM/axam csrd.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/AXAM/Truck.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/AXAM/axam csrd.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/AXAM/axam frame.jpg'
                        ],
                    ]
                ],
                [
                    'title' => 'Rapidique Brand Identity',
                    'description' => '',
                    'img' => 'assets/img/image12.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/image10.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/image11.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/image13.jpg'
                        ],
                    ]
                ],
                [
                    'title' => 'Chronova Company',
                    'description' => '',
                    'img' => 'assets/img/CHRONOVA.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/CHRONOVA2.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/CHRONOVA3.jpg'
                        ]
                    ]
                ],
                [
                    'title' => 'Dernan Salt Brand Identity',
                    'description' => '',
                    'img' => 'assets/img/Dernan/Dernan Salt2.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/Dernan/Dernan Salt1.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/Dernan/Cap.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/Dernan/Door.jpg'
                        ]
                    ]
                ],
            ]
        ],
        'print' => [
            'title' => 'Commercial Printing',
            'projects' => [
                [
                    'title' => 'T-Shirt Printing',
                    'description' => '',
                    'img' => 'assets/img/COMMERCIAL/HustleBean.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/Adolecent.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/BLUE BLACK SHIRT.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/Blue Black.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/BLUE SHIRTS.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/MAM ACA STAFF.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/MAM NOLOGO.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/Orange.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/SAFO HALL.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/COMMERCIAL/WHITE.jpg'
                        ]
                    ]
                ],
                [
                    'title' => '',
                    'description' => '',
                    'img' => 'assets/img/flyer2.jpg',
                    'sub_projects' => []
                ],
                [
                    'title' => '',
                    'description' => '',
                    'img' => 'assets/img/flyer3.jpg',
                    'sub_projects' => []
                ],
                [
                    'title' => '',
                    'description' => '',
                    'img' => 'assets/img/commercial.jpg',
                    'sub_projects' => []
                ]
            ]
        ],
        'web-design' => [
            'title' => 'Web & Mobile Apps',
            'projects' => [
                [
                    'title' => 'Website Design',
                    'description' => '',
                    'img' => 'assets/img/Mockup2.jpg',
                    'sub_projects' => [
                        // [
                        //     'title' => 'Keystone Mobile App',
                        //     'description' => 'Property management app with interactive features',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'Corporate Website',
                        //     'description' => 'Responsive design with content management system',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'E-commerce Platform',
                        //     'description' => 'Custom shopping experience with inventory management',
                        //     'img' => '/api/placeholder/400/320'
                        // ]
                    ]
                ]
            ]
        ],
        'ui-ux' => [
            'title' => 'UI/UX Design',
            'projects' => [
                [
                    'title' => 'UI / UX Design',
                    'description' => '',
                    'img' => 'assets/img/Logistics.png',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/Mac Studio.png'
                        ],
                        // [
                        //     'title' => 'Wireframe Prototypes',
                        //     'description' => '',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'Design System',
                        //     'description' => '',
                        //     'img' => '/api/placeholder/400/320'
                        // ]
                    ]
                ]
            ]
        ],
        'event' => [
            'title' => 'Event & Campaign Branding',
            'projects' => [
                [
                    'title' => 'The SELLERS SHOP Company',
                    'description' => '',
                    'img' => 'assets/img/THESELLERSSHOP/SELLERS SHOP PULL UPS 2.jpg',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/THESELLERSSHOP/SELLERS SHOP PULL UPS 2.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/THESELLERSSHOP/SELLERSSHOP_Brand.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/THESELLERSSHOP/SELLERSSHOP_Brand2.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/THESELLERSSHOP/SELLERSSHOP_Brand3.jpg'
                        ],
                    ]
                ],
                [
                    'title' => 'Priceless Packages',
                    'description' => '',
                    'img' => 'assets/img/Mockup 1.png',
                    'sub_projects' => [
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/image6.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/image9.jpg'
                        ],
                        [
                            'title' => '',
                            'description' => '',
                            'img' => 'assets/img/7.jpg'
                        ]
                    ]
                ]
            ]
        ],
        'strategy' => [
            'title' => 'Creative Strategy & Consulting',
            'projects' => [
                [
                    'title' => 'Construction Company',
                    'description' => '',
                    'img' => 'assets/img/Stationary.jpg',
                    'sub_projects' => [
                        // [
                        //     'title' => '',
                        //     'description' => '',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'White Hard Hat Engineering',
                        //     'description' => 'Clean, minimalist logo for engineering firm',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'Keystone Realty',
                        //     'description' => 'Property development company logo with gold accents',
                        //     'img' => '/api/placeholder/400/320'
                        // ]
                    ]
                ]
            ]
        ],
        'social' => [
            'title' => 'Social Media Marketing',
            'projects' => [
                [
                    'title' => 'Social Media Marketing',
                    'description' => '',
                    'img' => 'assets/img/social.jpg',
                    'sub_projects' => [
                        // [
                        //     'title' => '',
                        //     'description' => '',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'White Hard Hat Engineering',
                        //     'description' => 'Clean, minimalist logo for engineering firm',
                        //     'img' => '/api/placeholder/400/320'
                        // ],
                        // [
                        //     'title' => 'Keystone Realty',
                        //     'description' => 'Property development company logo with gold accents',
                        //     'img' => '/api/placeholder/400/320'
                        // ]
                    ]
                ]
            ]
        ]
    ];

    public function portfolio() {
        $projects = $this->projects;
        return view('pages.portfolio', compact('projects'));
    }
}
