<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Seed Users

        //Seed category
        DB::table('categories')->insert([
            'name' => 'Telecommunication',
            'slug' => 'tlk',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fashion',
            'slug' => 'fsh',
        ]);
        DB::table('categories')->insert([
            'name' => 'Science',
            'slug' => 'sci',
        ]);
        DB::table('categories')->insert([
            'name' => 'Food and Beverage',
            'slug' => 'fnb',
        ]);

        //Seed companys
        DB::table('companies')->insert([
            'company_id' => '1',
            'category_name' => 'Telecommunication',
            'name' => 'PT Telkom Tbk',
            'slug' => 'company-posid',
            'image' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1773&q=80',
            'excerpt' => 'PT Telkom Indonesia (Persero) Tbk adalah perusahaan informasi dan komunikasi ...',
            'desc' => 'PT Telkom Indonesia (Persero) Tbk, biasa disebut Telkom Indonesia atau Telkom saja, adalah perusahaan informasi dan komunikasi serta penyedia jasa dan jaringan telekomunikasi secara lengkap di Indonesia. Telkom mengklaim sebagai perusahaan telekomunikasi terbesar di Indonesia, dengan jumlah pelanggan telepon tetap sebanyak 15 juta dan pelanggan telepon seluler sebanyak 104 juta.',
        ]);
        DB::table('companies')->insert([
            'company_id' => '4',
            'category_name' => 'Food and Beverage',
            'name' => 'PT XL Axiata Tbk',
            'slug' => 'company-pendidikan',
            'image' => 'https://images.unsplash.com/photo-1462206092226-f46025ffe607?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80',
            'excerpt' => 'PT XL Axiata Tbk adalah sebuah perusahaan operator telekomunikasi seluler ...',
            'desc' => 'PT XL Axiata Tbk (IDX: EXCL), (sebelumnya bernama PT Excelcomindo Pratama Tbk) atau disingkat XL adalah sebuah perusahaan operator telekomunikasi seluler di Indonesia.[5] XL mulai beroperasi secara komersial pada tanggal 8 Oktober 1996, dan merupakan perusahaan swasta ketiga yang menyediakan layanan telepon seluler GSM di Indonesia.',
        ]);
        DB::table('companies')->insert([
            'company_id' => '2',
            'category_name' => 'Fashion',
            'name' => 'PT Smartfren Tbk',
            'slug' => 'company-fatahillah',
            'image' => 'https://images.unsplash.com/photo-1512403754473-27835f7b9984?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80',
            'excerpt' => 'PT Smartfren Telecom Tbk adalah operator penyedia jasa telekomunikasi ...',
            'desc' => 'PT Smartfren Telecom Tbk (sebelumnya bernama PT Mobile-8 Telecom Tbk) adalah operator penyedia jasa telekomunikasi berbasis teknologi 4G LTE Advanced yang merupakan pengembangan lanjutan dari 4G. Produk perusahaan ini adalah Smartfren (nama digayakan sebagai smartfren.), dan dahulu bernama Fren.',
        ]);
    }
}
