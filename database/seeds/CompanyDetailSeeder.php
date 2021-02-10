<?php

use App\CompanyDetail;
use Illuminate\Database\Seeder;

class CompanyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_detail = CompanyDetail::create([
            'company_name' => 'Rictech Supplies',
            'email' => 'info@rictec.com',
            'mobile' => '071111111',
            'facebook' => 'www.facebook.com/page',
            'twitter' => 'www.twitter.com/page',
            'instagram' => 'www.instagram/page',
            'slogan' => 'We supply you with the IT supplies you need to keep your business going',
            'about_us_image' => 'default.jpg',
            'about_us_heading' => 'We are an industry leader in the supply of Office and IT supplies',
            'about_us_description' => '
                                <p>
                                    We are committed to making quality IT supplies available to all. We supply all the major brands of 
                                    computers, networking equipment, and office supplies. Our Supplies come with warranty to give our clients peace of mind.
                                </p>
                                <p>
                                    In Addition, we perform contracted services such as network maintenance, server maintenance, installation
                                    of windows and antivirus, among others.
                                </p>
                                ',
            ]);
        }
    }
