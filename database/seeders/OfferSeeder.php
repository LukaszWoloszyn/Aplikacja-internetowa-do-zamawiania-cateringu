<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Offer::truncate();
        Offer::insert(
            [
                [
                    'title' => 'Keto dieta', 'breakfast' => 'Keto placuszki czekoladowe z orzechowym serkiem', 'lunch' => 'Zapiekanka dyniowa',
                    'dinner' => 'Keto musaka z wołowiną, sałatka z oliwkami i ogórkiem', 'tea' => 'Puszysty omlet prosto z USA', 'supper'=>'Bowl z serem halloumi, pieczoną papryką, cukinią i bakłażanem',
                    'image' => 'offer1.jpg', 'price_week' => 300, 'price_month' => 900, 'delivery' => 'powyżej 30 km +15zł'
                ],

                [
                    'title' => 'Comfort', 'breakfast' => 'Ciasto jogurtowe z serkiem jagodowym i karmelizowane gruszki', 'lunch' => 'Sernik waniliowy',
                    'dinner' => 'Zapiekanka makaronowa z cukinią, kiełbaską i serem, sos pomidorowo-śmietanowy', 'tea' => 'Zupa krem z białych warzyw z koperkiem',
                    'supper'=>'Indyjskie kaszotto z kaszą pęczak, zielonym groszkiem, cukinią, serem i natką',
                    'image' => 'offer2.jpg', 'price_week' => 200, 'price_month' => 500, 'delivery' => 'powyżej 30 km +15zł'
                ],

                [
                    'title' => 'Fit & Slim', 'breakfast' => 'Paluch wieloziarnisty z szynką parmeńską, mozzarellą, rukolą, cherry i pesto bazyliowe', 'lunch' => 'Sernik śmietankowy z malinową galaretką i białą czekoladą',
                    'dinner' => 'Pulpeciki z kurczaka w duszonej kapuście z koperkiem i pieczone ziemniaczki', 'tea' => 'Zupa krem pomidorowo-paprykowa z natką pietruszki i krakersami',
                    'supper'=>'Serek z fetą i ricottą z pieczonymi cukinią i papryką, chrupkie paluchy',
                    'image' => 'offer3.jpg', 'price_week' => 400, 'price_month' => 1100, 'delivery' => 'powyżej 30 km +15zł'
                ],

            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
