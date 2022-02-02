<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('review')->insert([
            [
                'Review_Id'=> '1',
                'User_Id'=> '21',
                'P_Id'=> '1',
                'R_Rating'=> '5',
                'R_Comment'=> 'This is so delicious. I love it',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2022-01-29 05:20:55.000000',
                'updated_at'=> '2022-01-29 05:20:55.000000',
            ],
            [
                'Review_Id'=> '2',
                'User_Id'=> '24',
                'P_Id'=> '2',
                'R_Rating'=> '5',
                'R_Comment'=> 'A lot of lauk you will get rambang mata for sure. Also variety of bubur, sate and kerepek. My advise is dont come at peak time. Difficult to get parking.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2022-01-30 05:20:55.000000',
                'updated_at'=> '2022-01-30 05:20:55.000000',
            ],
            [
                'Review_Id'=> '3',
                'User_Id'=> '16',
                'P_Id'=> '3',
                'R_Rating'=> '5',
                'R_Comment'=> 'Good spot for breakfast - variety of food such as roti canai, lontong, nasi lemak and etc...good choice of kuih melayu as well..',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-12-16 05:20:55.000000',
                'updated_at'=> '2021-12-16 05:20:55.000000',
            ],
            [
                'Review_Id'=> '4',
                'User_Id'=> '10',
                'P_Id'=> '4',
                'R_Rating'=> '5',
                'R_Comment'=> 'Always a good choice for breakfast and lunch.. Plenty of choices to choose from..',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-12-17 05:20:55.000000',
                'updated_at'=> '2021-12-17 05:20:55.000000',
            ],
            [
                'Review_Id'=> '5',
                'User_Id'=> '9',
                'P_Id'=> '5',
                'R_Rating'=> '5',
                'R_Comment'=> 'Good taste for malay local food',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-05-04 05:20:55.000000',
                'updated_at'=> '2021-05-04 05:20:55.000000',
            ],
            [
                'Review_Id'=> '6',
                'User_Id'=> '1',
                'P_Id'=> '6',
                'R_Rating'=> '5',
                'R_Comment'=> 'Nice place with many choices of food and sweet',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-05-06 05:20:55.000000',
                'updated_at'=> '2021-05-06 05:20:55.000000',
            ],
            [
                'Review_Id'=> '7',
                'User_Id'=> '2',
                'P_Id'=> '7',
                'R_Rating'=> '5',
                'R_Comment'=> 'Always delicious. Price is affordable. Parking limited.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-07-01 05:20:55.000000',
                'updated_at'=> '2021-07-01 05:20:55.000000',
            ],
            [
                'Review_Id'=> '8',
                'User_Id'=> '3',
                'P_Id'=> '8',
                'R_Rating'=> '5',
                'R_Comment'=> 'Always spoiled by their choices 69f local breakfast delicacies. Reasonable price, choices are abundant.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-07-03 05:20:55.000000',
                'updated_at'=> '2021-07-03 05:20:55.000000',
            ],
            [
                'Review_Id'=> '9',
                'User_Id'=> '14',
                'P_Id'=> '9',
                'R_Rating'=> '3',
                'R_Comment'=> 'Food is nice but service a bit slow.',
                'R_Sentiment'=> 'Negative',
                'created_at'=> '2022-01-29 05:20:55.000000',
                'updated_at'=> '2022-01-29 05:20:55.000000',
            ],
            [
                'Review_Id'=> '10',
                'User_Id'=> '29',
                'P_Id'=> '10',
                'R_Rating'=> '2',
                'R_Comment'=> 'Overcrowded and no social distancing. Food overpriced.',
                'R_Sentiment'=> 'Negative',
                'created_at'=> '2022-01-30 05:20:55.000000',
                'updated_at'=> '2022-01-30 05:20:55.000000',
            ],
            [
                'Review_Id'=> '11',
                'User_Id'=> '21',
                'P_Id'=> '11',
                'R_Rating'=> '2',
                'R_Comment'=> 'The food was tasteless and poor service. Not recommended at all. Go and find another better place.',
                'R_Sentiment'=> 'Negative',
                'created_at'=> '2021-12-27 05:20:55.000000',
                'updated_at'=> '2021-12-27 05:20:55.000000',
            ],
            [
                'Review_Id'=> '12',
                'User_Id'=> '9',
                'P_Id'=> '12',
                'R_Rating'=> '3',
                'R_Comment'=> 'table order slow, missing order but their mee goreng mamak acceptable',
                'R_Sentiment'=> 'Negative',
                'created_at'=> '2021-01-01 05:20:55.000000',
                'updated_at'=> '2021-01-01 05:20:55.000000',
            ],
            [
                'Review_Id'=> '13',
                'User_Id'=> '18',
                'P_Id'=> '13',
                'R_Rating'=> '4',
                'R_Comment'=> 'Varieties of malay delicacies but price is on high side. Furthermore, no receipt issued when payment made thus unable to check the price charged.',
                'R_Sentiment'=> 'Neutral',
                'created_at'=> '2021-01-01 05:20:55.000000',
                'updated_at'=> '2021-01-01 05:20:55.000000',
            ],
            [
                'Review_Id'=> '14',
                'User_Id'=> '12',
                'P_Id'=> '14',
                'R_Rating'=> '4',
                'R_Comment'=> 'Big portion but the taste is ....not as expected',
                'R_Sentiment'=> 'Neutral',
                'created_at'=> '2021-06-25 05:20:55.000000',
                'updated_at'=> '2021-06-25 05:20:55.000000',
            ],
            [
                'Review_Id'=> '15',
                'User_Id'=> '29',
                'P_Id'=> '15',
                'R_Rating'=> '4',
                'R_Comment'=> 'The food is OK but the price is confusing',
                'R_Sentiment'=> 'Neutral',
                'created_at'=> '2022-01-29 05:20:55.000000',
                'updated_at'=> '2022-01-29 05:20:55.000000',
            ],
            [
                'Review_Id'=> '16',
                'User_Id'=> '30',
                'P_Id'=> '16',
                'R_Rating'=> '4',
                'R_Comment'=> 'Plenty of choices to choose from. Only they need to improve service',
                'R_Sentiment'=> 'Neutral',
                'created_at'=> '2021-09-23 05:20:55.000000',
                'updated_at'=> '2021-09-23 05:20:55.000000',
            ],
            [
                'Review_Id'=> '17',
                'User_Id'=> '26',
                'P_Id'=> '17',
                'R_Rating'=> '4',
                'R_Comment'=> 'Cheap and cozy. Limited parking.',
                'R_Sentiment'=> 'Neutral',
                'created_at'=> '2021-09-24 05:20:55.000000',
                'updated_at'=> '2021-09-24 05:20:55.000000',
            ],
            [
                'Review_Id'=> '18',
                'User_Id'=> '24',
                'P_Id'=> '18',
                'R_Rating'=> '5',
                'R_Comment'=> 'Sedap / Delicious.variety of choices.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-07-01 05:20:55.000000',
                'updated_at'=> '2021-07-01 05:20:55.000000',
            ],
            [
                'Review_Id'=> '19',
                'User_Id'=> '12',
                'P_Id'=> '19',
                'R_Rating'=> '5',
                'R_Comment'=> 'The varieties of tradional dishes will satisfy just about everyone.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-12-30 05:20:55.000000',
                'updated_at'=> '2021-12-30 05:20:55.000000',
            ],
            [
                'Review_Id'=> '20',
                'User_Id'=> '28',
                'P_Id'=> '7',
                'R_Rating'=> '5',
                'R_Comment'=> 'The Prices are affordable and the services are so good.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-07-15 05:20:55.000000',
                'updated_at'=> '2021-07-15 05:20:55.000000',
            ],
            [
                'Review_Id'=> '21',
                'User_Id'=> '18',
                'P_Id'=> '7',
                'R_Rating'=> '5',
                'R_Comment'=> 'A great dining place. They have variety of food. Breakfast & lunch. Price is affordable. Great place to bring your family. Highly recommended.',
                'R_Sentiment'=> 'Positive',
                'created_at'=> '2021-12-15 05:20:55.000000',
                'updated_at'=> '2021-12-15 05:20:55.000000',
            ],
            [
                'Review_Id'=> '22',
                'User_Id'=> '18',
                'P_Id'=> '7',
                'R_Rating'=> '3',
                'R_Comment'=> 'Price quite mahal and the food taste just ok',
                'R_Sentiment'=> 'Neutral',
                'created_at'=> '2022-02-02 05:20:55.000000',
                'updated_at'=> '2022-02-02 05:20:55.000000',

            ]

            
        ]);
        
    }
}
