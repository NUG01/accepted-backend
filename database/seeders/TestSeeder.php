<?php

namespace Database\Seeders;

use App\Models\TestType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        // DB::table('tests')->insert([
        //     'test_types_id' => TestType::first()->id,
        //     'type' => 'verbal',
        //     'category' => 'logic',
        //     'number' => 1,
        //     'introduction' => '1',
        //     'conditions' => ['first_coondition', 'second_condition'],
        //     'question' => 'Why cant we not be sober?',
        //     'answers' => [
        //         'ა' => 'lets get redy to rumble',
        //         'ბ' => 'lets get redy to rumble',
        //         'გ' => 'lets get redy to rumble',
        //     ],
        //     'correct' => 'ბ',
        //     'image' => 'image',

        // ]);
        DB::table('tests')->insert([
            'test_types_id' => TestType::find(1)['id'],
            'type' => 'verbal',
            'category' => 'logic',
            'number' => 1,
            'introduction' => '
            კინოფესტივალზე სხვადასხვა ჟანრის – კომედიურ, დეტექტიურ, სათავგადასავლო და ანიმაციურ – ფილმებს
            აჩვენებენ. ამასთან, კინოფესტივალი ოთხ დღეს (ხუთშაბათი-კვირა) გრძელდება და თითოეულ ჟანრს თითო დღე ეთმობა.
            ფესტივალის პროგრამის შედგენისას ორგანიზატორებმა შემდეგი პირობები უნდა დაიცვან:',

            'conditions' => json_encode([
                'კომედიური ფილმები უნდა აჩვენონ ხუთშაბათს ან პარასკევს.',
                'დეტექტიური ფილმები უნდა აჩვენონ პარასკევს ან შაბათს.',
                'სათავგადასავლო ფილმები უნდა აჩვენონ შაბათს ან კვირას.',
                'ანიმაციური ფილმები უნდა აჩვენონ ხუთშაბათს ან კვირას.',
            ]),
            'question' => 'ქვემოთ ჩამოთვლილთაგან რომელი განაწილება აკმაყოფილებს ოთხივე პირობას?',
            'answers' => json_encode([
                'ა' => 'ხუთშაბათს – ანიმაციური, პარასკევს – კომედიური, შაბათს – სათავგადასავლო, კვირას – დეტექტიური',
                'ბ' => 'ხუთშაბათს – ანიმაციური, პარასკევს – კომედიური, შაბათს – დეტექტიური, კვირას – სათავგადასავლო',
                'გ' => 'ხუთშაბათს – კომედიური, პარასკევს – დეტექტიური, შაბათს – ანიმაციური, კვირას – სათავგადასავლო',
                'დ' => 'ხუთშაბათს – კომედიური, პარასკევს – ანიმაციური, შაბათს – სათავგადასავლო, კვირას – დეტექტიური',
                'ე' => 'ხუთშაბათს – კომედიური, პარასკევს – სათავგადასავლო, შაბათს – დეტექტიური, კვირას – ანიმაციური.',
            ]),
            'correct' => 'ბ',
            'image' => 'image',

        ]);
    }
}
