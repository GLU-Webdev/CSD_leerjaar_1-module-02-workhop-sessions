<?php
$productenarray = [
    "products" => [
        [
            "id" => "1",
            "title" => "Product 1",
            "category" => "Category 1",
            "price" => 10.00,
			"sale" => false,
            "photos" => [
                "photo1" => "image1-1.jpg",
                "photo2" => "image1-2.jpg",
                "photo3" => "image1-3.jpg"
            ]
        ],
        [
            "id" => "2",
            "title" => "Product 2",
            "category" => "Category 1",
            "price" => 20.00,
						"sale" => 14.99,
            "photos" => [
                "photo1" => "image2-1.jpg",
                "photo2" => "image2-2.jpg",
                "photo3" => "image2-3.jpg"
            ]
        ],
	    [
            "id" => "3",
            "title" => "Product 3",
            "category" => "Category 2",
            "price" => 30.00,
						"sale" => 18.99,
            "photos" => [
                "photo1" => "image3-1.jpg",
                "photo2" => "image3-2.jpg",
                "photo3" => "image3-3.jpg"
            ]
            ],
	    [
            "id" => "4",
            "title" => "Product 4",
            "category" => "Category 2",
            "price" => 33.00,
						"sale" => 29.99,
            "photos" => [
                "photo1" => "image4-1.jpg",
                "photo2" => "image4-2.jpg",
                "photo3" => "image4-3.jpg"
            ]
        ]

    ],
	"navigation" => [
        [
            "title" => "Home",
            "url" => "/"
        ],
        [
            "title" => "Producten",
            "url" => "/producten"
        ],
        [
            "title" => "Contact",
            "url" => "/contact"
        ]
    ]
];