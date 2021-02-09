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
            ]);
        }
    }
