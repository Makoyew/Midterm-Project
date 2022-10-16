<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'user_id' => 1,
            'acct_name' => 'Jane',
            'init_invest' => 23456789.23,
            'start_date' => '2002-03-13',
            'remarks' => 'true',
        ],
        [
            'user_id' => 2,
            'acct_name' => 'John',
            'init_invest' => 27584000.13,
            'start_date' => '2022-10-17',
            'remarks' => 'or',
        ],
        [
            'user_id' => 3,
            'acct_name' => 'Chester',
            'init_invest' => 23823862.11,
            'start_date' => '2019-06-22',
            'remarks' => 'true',
        ],
    ];

    foreach($data as $act) {
        \App\Account::create($act);
    }
    }
}
