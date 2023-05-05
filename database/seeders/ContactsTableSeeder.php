<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
        'fullname' =>'山田太郎',
        'gender' =>'1',
        'email' =>'yamada@gmail.com',
        'postcode' =>'111-1111',
        'address' =>'東京都世田谷区東町1-2-3',
        'building_name' =>'世田谷姉妹アパート',
        'opinion' =>'隣人がうるさいです'
        ];
        Contact::create($param);

        $param = [
        'fullname' =>'田中花子',
        'gender' =>'2',
        'email' =>'tanaka@gmail.com',
        'postcode' =>'111-1111',
        'address' =>'東京都世田谷区東町1-2-3',
        'building_name' =>'世田谷姉妹アパート',
        'opinion' =>'隣人が騒がしいです'
        ];
        Contact::create($param);
    }
}
