<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'id' => 0,
                'user_id' => 0,
                'restaurant_name' => 'Osteria Lo Bianco',
                'vat' => 'IT150908010',
                'address' => 'Via Enrico Boito, 18, Milano',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/02/d2/00/42/osteria-lo-bianco.jpg',
                'phone' => '343-7896756',
                'description' => 'La migliore osteria di specialità siciliane a Milano. Provare per credere!',
            ],
            [
                'id' => 1,
                'user_id' => 1,
                'restaurant_name' => 'Pizzeria La Salsiera',
                'vat' => 'IT150908011',
                'address' => 'Via Roma, 184, Milano',
                'image' => 'https://images.deliveryhero.io/image/stores-glovo/stores/c7dadd68744eb18fb539de6d01a55d8b009328047fe579e6971119250f667ca5?t=W3siYXV0byI6eyJxIjoibG93In19LHsicmVzaXplIjp7ImhlaWdodCI6MjI1fX1d',
                'phone' => '345-7896756',
                'description' => "Il nostro motto è semplice: la pizza con l'ananas è tanta roba.",
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'restaurant_name' => 'Al Cantinone',
                'vat' => 'IT150908012',
                'address' => 'Via Agnello, 19, Milano',
                'image' => 'https://www.alcantinone.it/media/widgetkit/TTT2-ecc5912ebb509d049624ce36cb400dc9.jpg',
                'phone' => '345-7896656',
                'description' => "Trattoria storica nel centro di Milano. Dal 1930!",
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'restaurant_name' => 'Taqueria El Sol',
                'vat' => 'IT150508014',
                'address' => 'Via Solferino, 12, Milano',
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/61fafc5bf623496b223ed316/4:3/w_2272,h_1704,c_limit/migliori-ristoranti-messicani-milano-tacos.jpg',
                'phone' => '345-7896856',
                'description' => 'Gustosi tacos, burritos e margarita in un ambiente festoso e colorato.',
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'restaurant_name' => 'Sushi Zen',
                'vat' => 'IT150608015',
                'address' => 'Corso Garibaldi, 88, Milano',
                'image' => 'https://flawless.life/wp-content/uploads/2016/07/migliori-sushi-milano-fingers-garden.jpg',
                'phone' => '345-7896956',
                'description' => 'Autentico sushi giapponese preparato con pesce fresco e ingredienti di prima qualità.',
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'restaurant_name' => 'Il Grottino',
                'vat' => 'IT150708016',
                'address' => 'Via Montenapoleone, 10, Milano',
                'image' => 'https://i0.wp.com/www.umbrianelmondo.com/wp-content/uploads/2022/07/Ristorante-interno-Il-Grottino-1-scaled.jpg?fit=2560%2C1707&ssl=1',
                'phone' => '345-7897056',
                'description' => 'Un angolo di Toscana nel cuore di Milano, con piatti tradizionali e vini pregiati.',
            ],
            [
                'id' => 6,
                'user_id' => 6,
                'restaurant_name' => 'Il Forno Rustico',
                'vat' => 'IT150808017',
                'address' => 'Via Manzoni, 45, Milano',
                'image' => 'https://ilrusticodeiconti.it/wp-content/uploads/2019/07/13-1.jpg',
                'phone' => '345-7897156',
                'description' => 'Pane e pizza sfornati giornalmente, con ricette tradizionali e ingredienti di alta qualità.',
            ],
        ];


        foreach($restaurants as $restaurantData) {

            $Newrestaurant = new Restaurant();

            $Newrestaurant->id = $restaurantData['id'];
            $Newrestaurant->user_id = $restaurantData['user_id'];
            $Newrestaurant->restaurant_name = $restaurantData['restaurant_name'];
            $Newrestaurant->vat = $restaurantData['vat'];
            $Newrestaurant->address = $restaurantData['address'];
            $Newrestaurant->image = $restaurantData['image'];
            $Newrestaurant->phone = $restaurantData['phone'];
            $Newrestaurant->description = $restaurantData['description'];
            $Newrestaurant->save();

        }
    }
}
