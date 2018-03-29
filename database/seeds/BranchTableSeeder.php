<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dates')->insert([
            /*['name' => '2018'],
            ['name' => '2019'],
            ['name' => '2020'],
            ['name' => '2021'],
            ['name' => '2022'],
            ['name' => '2023'],
            ['name' => '2024'],
            ['name' => '2025'],
            ['name' => '2026'],
            ['name' => '2027'],
            ['name' => '2028'],
            ['name' => '2029'],
            ['name' => '2030'],
            ['name' => '2031'],
            ['name' => '2032'],*/
            ['month' => 'January', 'year' => '2018'],
            ['month' => 'February', 'year' => '2018'],
            ['month' => 'March', 'year' => '2018'],
            ['month' => 'April', 'year' => '2018'],
            ['month' => 'May', 'year' => '2018'],
            ['month' => 'June', 'year' => '2018'],
            ['month' => 'July', 'year' => '2018'],
            ['month' => 'August', 'year' => '2018'],
            ['month' => 'September', 'year' => '2018'],
            ['month' => 'October', 'year' => '2018'],
            ['month' => 'November', 'year' => '2018'],
            ['month' => 'December', 'year' => '2018'],
            /*['name' => 'Iyana-Ipaja'],
            ['name' => 'Onihale'],
            ['name' => 'Mushin'],
            ['name' => 'Ope-Ilu'],
            ['name' => 'Pleasure'],
            ['name' => 'Itele'],
            ['name' => 'Kajola'],
            ['name' => 'Oja-odan'],
            ['name' => 'Badagry 1'],
            ['name' => 'Badagry 2'],
            ['name' => 'Ayobo'],
            ['name' => 'Abeokuta'],
            ['name' => 'Mountain of Solution'],
            ['name' => 'Aramoko-Ekiti'],
            ['name' => 'Ikorodu 1'],
            ['name' => 'Ikorodu 2'],
            ['name' => 'Iju'],
            ['name' => 'Ibadan'],
            ['name' => 'Jakande'],
            ['name' => 'Mountain of Mercy to Solution'],
            ['name' => 'Adjahonore'],
            ['name' => 'Bayelsa']*/

        ]);
    }
}
