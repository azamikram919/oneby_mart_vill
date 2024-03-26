<?php

namespace Modules\MenuBuilder\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\MenuBuilder\Database\Seeders\versions\v1_7_0\MenuItemsTableSeeder as V17MenuItemsTableSeeder;

class MenuBuilderDatabaseWithoutDummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableWithoutDummyDataSeeder::class);
        $this->call(AdminMenusTableSeeder::class);
        $this->call(V17MenuItemsTableSeeder::class);
    }
}
