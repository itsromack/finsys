<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use ERC\Client;
use ERC\User;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::where('email', 'john@doe.com')->first();
        $clients = [
            [
                'first_name' => 'Carlos',
                'last_name' => 'Reis'
            ],
            [
                'first_name' => 'Emmanuele',
                'last_name' => 'Souza'
            ],
            [
                'first_name' => 'Stanislav',
                'last_name' => ''
            ],
            [
                'first_name' => 'Daniel',
                'last_name' => ''
            ],
            [
                'first_name' => 'Allesandro',
                'last_name' => ''
            ],
            [
                'first_name' => 'Katia',
                'last_name' => ''
            ],
            [
                'first_name' => 'Jose',
                'last_name' => ''
            ],
            [
                'first_name' => 'Henrique',
                'last_name' => 'Lopez'
            ],
            [
                'first_name' => 'Deborah',
                'last_name' => ''
            ],
            [
                'first_name' => 'Tatiana',
                'last_name' => ''
            ],
            [
                'first_name' => 'Ricardo',
                'last_name' => ''
            ],
            [
                'first_name' => 'Jadir',
                'last_name' => 'Mattos'
            ],
            [
                'first_name' => 'Sadi Joao',
                'last_name' => 'Guareschi'
            ],
            [
                'first_name' => 'Elizabeth',
                'last_name' => 'Bono'
            ],
            [
                'first_name' => 'Ciao',
                'last_name' => ''
            ],
            [
                'first_name' => 'Celso',
                'last_name' => 'Osmar'
            ],
            [
                'first_name' => 'Vanderoso',
                'last_name' => ''
            ],
            [
                'first_name' => 'Fabiano',
                'last_name' => ''
            ],
            [
                'first_name' => 'Daniela',
                'last_name' => 'Do Carmo'
            ],
            [
                'first_name' => 'Michael',
                'last_name' => ''
            ],
            [
                'first_name' => 'Pedro',
                'last_name' => ''
            ],
            [
                'first_name' => 'Patricia',
                'last_name' => ''
            ],
            [
                'first_name' => 'Gabriela',
                'last_name' => ''
            ],
            [
                'first_name' => 'Sibelle',
                'last_name' => ''
            ],
            [
                'first_name' => 'Paulo',
                'last_name' => ''
            ],
            [
                'first_name' => 'Gabriel',
                'last_name' => 'Notari'
            ],
            [
                'first_name' => 'Barbara',
                'last_name' => ''
            ],
            [
                'first_name' => 'Marcelo',
                'last_name' => ''
            ],
            [
                'first_name' => 'Daniela',
                'last_name' => ''
            ],
            [
                'first_name' => 'Guilherme',
                'last_name' => 'Oliveira'
            ],
            [
                'first_name' => 'Scarleti',
                'last_name' => ''
            ],
            [
                'first_name' => 'Luan',
                'last_name' => ''
            ],
            [
                'first_name' => 'Edson Luceiro',
                'last_name' => 'De Oliveira'
            ],
            [
                'first_name' => 'Elmar',
                'last_name' => 'Walker'
            ],
            [
                'first_name' => 'Fabio',
                'last_name' => 'Noguera'
            ],
            [
                'first_name' => 'Rodolfo',
                'last_name' => 'Vasquez'
            ],
            [
                'first_name' => 'Luciano',
                'last_name' => 'Lucenti'
            ],
            [
                'first_name' => 'Fernando',
                'last_name' => ''
            ],
            [
                'first_name' => 'Ricardo',
                'last_name' => 'Furik'
            ],
            [
                'first_name' => 'Antonio',
                'last_name' => 'Blazquez'
            ],
            [
                'first_name' => 'Natalia Vanessa',
                'last_name' => 'Colombo'
            ],
            [
                'first_name' => 'Hector',
                'last_name' => 'Angel'
            ],
            [
                'first_name' => 'Selva',
                'last_name' => 'Annethe'
            ],
            [
                'first_name' => 'Stephen',
                'last_name' => 'Wolfe'
            ],
            [
                'first_name' => 'Patricia',
                'last_name' => 'Beatriz'
            ],
            [
                'first_name' => 'Elton Fabricio',
                'last_name' => 'Martin'
            ],
            [
                'first_name' => 'Florencia',
                'last_name' => 'Gimenez'
            ],
            [
                'first_name' => 'Pablo',
                'last_name' => 'Lopez'
            ],
            [
                'first_name' => 'Agustin',
                'last_name' => ''
            ],
            [
                'first_name' => 'Pedro',
                'last_name' => 'Wassan'
            ],
            [
                'first_name' => 'Gladys',
                'last_name' => 'Carolina'
            ],
            [
                'first_name' => 'Pedro Luis',
                'last_name' => 'De Moraes Sieiro'
            ],
            [
                'first_name' => 'Nelma',
                'last_name' => 'Baldin'
            ],
            [
                'first_name' => 'Jose',
                'last_name' => 'Goni'
            ],
            [
                'first_name' => 'Pablo',
                'last_name' => 'Guiliano'
            ],
            [
                'first_name' => 'Mario',
                'last_name' => 'Eduardo'
            ],
            [
                'first_name' => 'Marcelo',
                'last_name' => 'Salomone'
            ],
            [
                'first_name' => 'Emilia Ida',
                'last_name' => 'Repak'
            ],
            [
                'first_name' => 'Viviana',
                'last_name' => ''
            ],
            [
                'first_name' => 'Juan Daniel',
                'last_name' => 'Gomez'
            ],
            [
                'first_name' => 'Maria Ludmila',
                'last_name' => 'Sanchez'
            ],
            [
                'first_name' => 'Rodrigo',
                'last_name' => ''
            ],
            [
                'first_name' => 'Parra',
                'last_name' => 'Nancy'
            ],
            [
                'first_name' => 'Sergio Dario',
                'last_name' => 'Di Gioia'
            ],
            [
                'first_name' => 'Ohab',
                'last_name' => 'Ducas'
            ],
            [
                'first_name' => 'Francesco',
                'last_name' => 'Nola'
            ],
            [
                'first_name' => 'Lorenzo',
                'last_name' => 'Nola'
            ],
            [
                'first_name' => 'Myriam Hemilce',
                'last_name' => 'Lavalleto'
            ],
            [
                'first_name' => 'Carlos Ruiz',
                'last_name' => 'Moraes'
            ],
            [
                'first_name' => 'Veronica',
                'last_name' => 'Vela'
            ],
            [
                'first_name' => 'Patricia',
                'last_name' => 'Del Carmen'
            ],
            [
                'first_name' => 'Fernanda Topazzo',
                'last_name' => 'More'
            ],
            [
                'first_name' => 'Francisco Fernandes',
                'last_name' => 'De Souza'
            ],
            [
                'first_name' => 'Jose Luis Garcia',
                'last_name' => 'Gonzales'
            ],
            [
                'first_name' => 'Marcia Regina',
                'last_name' => 'Xavier'
            ],
            [
                'first_name' => 'Rodrigo',
                'last_name' => 'Petchiae'
            ],
            [
                'first_name' => 'Fabio',
                'last_name' => ''
            ]
        ];
        foreach ($clients as $client)
        {
            $first_name = $client['first_name'];
            $last_name = $client['last_name'];
            $gender = rand(0, 1) == 1 ? 'male' : 'female';
            $professions = [
                'doctor',
                'engineer',
                'teacher',
                'politician',
                'accountant',
                'analyst'
            ];
            $profession = $professions[rand(0, count($professions) - 1)];
            error_log('Adding Client - ' . $first_name . ' ' . $last_name);
            Client::create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'title' => $faker->title,
                'gender' => $gender,
                'address' => $faker->address,
                'mobile_number' => $faker->phoneNumber,
                'email' => $faker->email,
                'profession' => $profession,
                'nationality' => 'Brazilian',
                'created_by' => $user->id
            ]);
        }
    }
}
