<?php
namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting;
        $setting->name = 'Pizza Haus';
        $setting->logo = 'https://images.unsplash.com/photo-1617655699589-64375e5ad9a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&q=80';
        $setting->delivery_charge = 12;
        $setting->footer = 'Welcome to Pizza Haus';
        $setting->save();
    }
}
