<?php

use Illuminate\Database\Seeder;
use App\Listing;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::create([
            "restaurent_name" => 'Reddys Biryani Zone',
            "rating" => 4.0,
            "description" => 'Indian',
            "name" => 'Roasted Chicken Biryani',
            "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/ylkrbzvqollrxfc5kp53',
            "cost" => 190
        ]);
        Listing::create([
                "restaurent_name" => 'Mad Momos',
                "rating" => 3.8,
                "description" => 'Indian',
                "name" => 'Chicken Momos',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/jjvieg2ytl9l0y0fhtri',
                "cost" => 69
            ]);
        Listing::create([
                "restaurent_name" => 'Kabablo',
                "rating" => 3.2,
                "description" => 'Indian',
                "name" => 'Cajun Spiced Chicken',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/vx4uld2hyksrrlrmqpmg',
                "cost" => 260
            ]);
        Listing::create([
                "restaurent_name" => 'Mandarin Oak',
                "rating" => 4.0,
                "description" => 'Asian, Chinese, Thai',
                "name" => 'Steamed Chicken Dumplings',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/j0uxiukml9jzpxvxbt0w',
                "cost" => 150
            ]);
        Listing::create([
                "restaurent_name" => 'The Good Bowl',
                "rating" => 3.0,
                "description" => 'Fast Food, North Indian',
                "name" => 'Immunity Booster Chole Rice Bowl',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/nqw2klwsqyfnjow5x2fy',
                "cost" => 200
            ]);
        Listing::create([
                "restaurent_name" => 'Cafe Peter',
                "rating" => 3.7,
                "description" => 'Korean, Continental, Bakery',
                "name" => 'Cheese Chilli Toast',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/wjfwo0mpmfs7fub7ykvp',
                "cost" => 250
            ]);
        Listing::create([
                "restaurent_name" => 'Home Kitchen Services',
                "rating" => 4.5,
                "description" => 'North Indian',
                "name" => 'Chicken Fry',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/yktmfporzgu0jatkevqr',
                "cost" => 125
            ]);
        Listing::create([
                "restaurent_name" => 'Hotel Malabar',
                "rating" => 4.3,
                "description" => 'Chinese, North Indian',
                "name" => 'Chicken Pakora',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/gjuhuccffbwnonxanyl9',
                "cost" => 145
            ]);
        Listing::create([
                "restaurent_name" => 'Hotel Shalimar',
                "rating" => 3.2,
                "description" => 'Indian',
                "name" => 'Chicken Dry Fry',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/d59qdvgdq2caad7nhipx',
                "cost" => 100
            ]);
        Listing::create([
                "restaurent_name" => 'Tandoor Point',
                "rating" => 3.0,
                "description" => 'Mughlai, North Indian, Chinese',
                "name" => 'Chicken Kadai',
                "image_url" => 'https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_366,h_240,c_fill/onlp7ojjmh1qhivm0yxv',
                "cost" => 230
            ]);
    }
}