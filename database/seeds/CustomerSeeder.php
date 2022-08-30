<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\Invoice;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // factory(App\Customer::class)->count(25)->hasInvoices(10)->create();

        // Alternative syntax
        $customers = factory(App\Customer::class, 5)->create()->each(function($customer) {
            $customer->invoices()->createMany(factory(App\Invoice::class, 3)->make()->toArray());
        });


    }
}
