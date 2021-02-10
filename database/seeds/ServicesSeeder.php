<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $networking = Service::create([
            'header' => 'Networking',
            'description' => 'Our team of highly trained and motivated staff will install cutting edge networks to connect your business to the world',
        ]);
        $server_maintenance = Service::create([
                    'header' => 'Server Maintenace',
                    'description' => 'We supply and install servers of all major brands including HP, Acer, and Dell',
                ]);
        $pbx_installation = Service::create([
                    'header' => 'Phones Installation',
                    'description' => 'Rictech Supplies install and maintain modern pbx devices to improve connectivity within your company.',
                ]);
        $supplies = Service::create([
                    'header' => 'Office Supplies',
                    'description' => 'We supply quality office supplies including printer toners, printing papers, stationary, all at customer friendly prices',
                ]);
    }
}
