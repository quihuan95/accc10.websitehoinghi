<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        $hotels = [
            [
                "name" => "MÖVENPICK LIVING WEST HANOI",
                "address" => "21 Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam",
                "description" => "1.1km from the conference venue – 26km from the Noi Bai International Airport",
                "table" => [
                    "header" => [
                        [
                            "label" => "Room type",
                            "col" => 6
                        ],
                        [
                            "label" => "Rate via Agoda",
                            "col" => 2
                        ],
                        [
                            "label" => "Rate via HBG",
                            "col" => 2
                        ],
                        [
                            "label" => "",
                            "col" => 2
                        ]
                    ],
                    "content" => [
                        [
                            "room_type" => [
                                "main" => "Superior Single - 25sqm - City View",
                                "sub" => "01 King bed for maximum 01 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "125.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "115.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Superior Double - 25sqm - City View",
                                "sub" => "01 King bed for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "141.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "125.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Superior Twin - 25sqm - City View",
                                "sub" => "02 Single beds for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "125.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "141.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                    ]
                ]
            ],
            [
                "name" => "SHERATON HANOI WEST",
                "address" => "36 Le Duc Tho Street, My Dinh 2 Ward, Nam Tu Liem District, Hanoi, Vietnam",
                "description" => "2.7km from the conference venue – 26km from the Noi Bai International Airport",
                "table" => [
                    "header" => [
                        [
                            "label" => "Room type",
                            "col" => 6
                        ],
                        [
                            "label" => "Rate via Agoda",
                            "col" => 2
                        ],
                        [
                            "label" => "Rate via HBG",
                            "col" => 2
                        ],
                        [
                            "label" => "",
                            "col" => 2
                        ]
                    ],
                    "content" => [
                        [
                            "room_type" => [
                                "main" => "Deluxe Single - 34sqm - City View",
                                "sub" => "01 King bed for maximum 01 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "159.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "145.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Deluxe Double - 34sqm - City View",
                                "sub" => "01 King bed for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "174.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "160.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Deluxe Twin - 34sqm - City View",
                                "sub" => "02 Single beds for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "174.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "160.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                    ]
                ]
            ],
            [
                "name" => "NOVOTEL SUITES HANOI",
                "address" => "5 Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam",
                "description" => "1.4km from the conference venue – 26km from the Noi Bai International Airport",
                "table" => [
                    "header" => [
                        [
                            "label" => "Room type",
                            "col" => 6
                        ],
                        [
                            "label" => "Rate via Agoda",
                            "col" => 2
                        ],
                        [
                            "label" => "Rate via HBG",
                            "col" => 2
                        ],
                        [
                            "label" => "",
                            "col" => 2
                        ]
                    ],
                    "content" => [
                        [
                            "room_type" => [
                                "main" => "Superior Studio Single - 32sqm - City View",
                                "sub" => "01 King bed for maximum 01 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "114.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "105.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Superior Studio Double - 32sqm - City View",
                                "sub" => "01 King bed for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "124.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "115.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Superior Studio Twin - 32sqm - City View",
                                "sub" => "02 Single beds for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "124.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "115.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                    ]
                ]
            ],
            [
                "name" => "LUXEDEN HOTEL HANOI",
                "address" => "78 Tran Thai Tong Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam",
                "description" => "1km from the conference venue – 26km from the Noi Bai International Airport",
                "table" => [
                    "header" => [
                        [
                            "label" => "Room type",
                            "col" => 6
                        ],
                        [
                            "label" => "Rate via Agoda",
                            "col" => 2
                        ],
                        [
                            "label" => "Rate via HBG",
                            "col" => 2
                        ],
                        [
                            "label" => "",
                            "col" => 2
                        ]
                    ],
                    "content" => [
                        [
                            "room_type" => [
                                "main" => "Superior King - 24sqm - City View",
                                "sub" => "01 Queen bed for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "69.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "60.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Superior Twin - 24sqm - City View",
                                "sub" => "02 Single beds for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "69.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "60.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "name" => "WESTERN HANOI HOTEL",
                "address" => "75 Tran Thai Tong Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam",
                "description" => "1.2km from the conference venue – 26km from the Noi Bai International Airport",
                "table" => [
                    "header" => [
                        [
                            "label" => "Room type",
                            "col" => 6
                        ],
                        [
                            "label" => "Rate via Agoda",
                            "col" => 2
                        ],
                        [
                            "label" => "Rate via HBG",
                            "col" => 2
                        ],
                        [
                            "label" => "",
                            "col" => 2
                        ]
                    ],
                    "content" => [
                        [
                            "room_type" => [
                                "main" => "Standard King - 25sqm - City View",
                                "sub" => "01 King bed for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "36.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "33.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ],
                        [
                            "room_type" => [
                                "main" => "Standard Twin - 25sqm - City View",
                                "sub" => "02 Single beds for maximum 02 occupancies"
                            ],
                            "rate_agoda" => [
                                "main" => "36.00++",
                                "sub" => "USD/room/night"
                            ],
                            "rate_hbg" => [
                                "main" => "33.00++",
                                "sub" => "USD/room/night"
                            ],
                            "link" => [
                                "label" => "BOOK NOW",
                                "link" => "#"
                            ]
                        ]
                    ]
                ]
            ]
        ];
        return view('pages.accommodation.index', compact('hotels'));
    }
}
