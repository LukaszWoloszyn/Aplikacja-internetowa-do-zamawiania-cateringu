<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Recipe::truncate();
        });
        Recipe::truncate();
        Recipe::insert(
            [
                [
                    'title' => 'Keto Musaka z Wołowiną', 'time' => '30', 'servings' => '3', 'ingredients' => '500 g mielonej wołowiny 1 średnia
                    cebula, posiekana 3 ząbki czosnku, posiekane 400 g pomidorów z puszki (bez dodatku cukru) 2 łyżki koncentratu pomidorowego 1
                    łyżeczka mielonego cynamonu 1 łyżeczka suszonego oregano 1/2 łyżeczki suszonego tymianku Sól i pieprz do smaku 2 łyżki oliwy
                    z oliwek', 'instructions' => 'Na dnie naczynia żaroodpornego ułóż warstwę bakłażanów. Na bakłażanach rozłóż połowę mięsa.
                     Następnie ułóż warstwę cukinii, a na niej resztę mięsa. Całość polej sosem beszamelowym.',
                    'image' => 'musaka.jpg', 'offers_id' => 1
                ],

                [
                    'title' => 'Zapiekanka Makaronowa z Cukinią, Kiełbaską i Serem w Sosie Pomidorowo-Śmietanowym', 'time' => '30', 'servings' => '4',
                    'ingredients' => '50 g makaronu (najlepiej penne lub fusilli) 2 średnie cukinie, pokrojone w plastry 300 g kiełbaski (np. kiełbasa śląska
                    lub chorizo), pokrojonej w plastry 1 średnia cebula, posiekana 2 ząbki czosnku, posiekane 200 g tartego sera mozzarella 100 g tartego
                    parmezanu 2 łyżki oliwy z oliwek Sól i pieprz do smaku', 'instructions' => 'Rozgrzej piekarnik do 180°C. W dużej misce wymieszaj ugotowany
                    makaron, mieszankę cukinii i kiełbaski oraz sos pomidorowo-śmietanowy. Przełóż wszystko do naczynia żaroodpornego. Posyp wierzch tartą
                    mozzarellą i parmezanem.',
                    'image' => 'zapiekanka.jpg', 'offers_id' => 2
                ],
                [
                    'title' => 'Pulpeciki z Kurczaka w Duszonej Kapuście z Koperkiem i Pieczone Ziemniaczki', 'time' => '90', 'servings' => '3',
                    'ingredients' => '500 g mielonego mięsa z kurczaka 1 średnia cebula, drobno posiekana 2 ząbki czosnku, drobno posiekane 1 jajko,
                    1/2 szklanki bułki tartej 1 łyżeczka suszonego oregano 1 łyżeczka suszonej bazylii Sól i pieprz do smaku 2 łyżki oliwy z oliwek do smażenia',
                    'instructions' => 'W dużej misce wymieszaj mielone mięso z kurczaka, posiekaną cebulę, czosnek, jajko, bułkę tartą, oregano, bazylię, sól i pieprz.
                    Uformuj z masy małe pulpeciki.',
                    'image' => 'pulpeciki.jpg', 'offers_id' => 2
                ],
            ]
        );

    }
}
