<?php

namespace Database\Seeders;

use App\Models\TestType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('texts')->insert([
            'test_type_id' => TestType::find(1)->value('id'),
            'texts' => json_encode(
                [
                    'I' => 'მგელსა და პრეისტორიულ ადამიანს მსგავსი ეკოლოგიური ნიშები ეკავათ, თუმცა, სხვადასხვა კონტინენტზე:
                    პირველი ჩრდილოეთ ნახევარსფეროში ბატონობდა, მეორე კი – სამხრეთში (აფრიკაში). ადრეული ადამიანი ახალი
                    ტერიტორიების ასათვისებლად ჩრდილოეთისკენ წამოვიდა. იქ მას დახვდა შედარებით მკაცრი და, მოგვიანებით უკვე,
                    სეზონური კლიმატი, პოტენციური მსხვერპლით სავსე ტყე-ველი და მთავარი მტაცებელი მგელი. ახალმა გარემომ ახალი
                    პირობები წაუყენა ადამიანს და, შესაძლოა, ის ფაქტი, რომ მგელი უკვე მყარად ბატონობდა მოცემულ ეკოლოგიურ
                    ნიშაში, ადამიანისთვის შემდგომი განვითარების სტიმულად იქცა. ამის ერთ-ერთ მაგალითად, შეიძლება, მგლის
                    მოშინაურება მივიჩნიოთ',
                    'II' => 'მრავალი წლის განმავლობაში ადრეული ადამიანი და მგელი იძულებულნი იყვნენ, ერთსა და იმავე მსხვერპლზე
                    ენადირათ. ზომიერ სარტყელში ნადირობისთვის, ალბათ, მგელი უფრო ადაპტირებული იყო, ვიდრე ადამიანი. ადამიანმა
                    მგელს „მიმართა“ დასახმარებლად და ზოგიერთი მისი თანამოძმე „დაიმეგობრა“. სწორედ ძაღლი გახდა მას შემდეგ ჩვენი
                    დამცველიც და შეუცვლელი პარტნიორიც ნადირობისას. გარდა ამისა, ძაღლის მოშინაურება უზარმაზარი ნახტომი იყო
                    ადამიანის შემდგომ განვითარებაში. ჯერ კიდევ კონრად ლორენცმა, ავსტრიელმა ზოოფსიქოლოგმა, საკუთარი წიგნის
                    („ადამიანი პოულობს ძაღლს“) ერთ-ერთ თავს „შეთანხმება“ დაარქვა. ამ თავში აღწერილია, თუ როგორ „შეთანხმდნენ“
                    ადამიანი და მგელი (შემდგომში ძაღლი), რომ ერთად გაეგრძელებინათ ცხოვრება. გავრცელებული მოსაზრებით,
                    ადამიანმა ძაღლი 15 000 წლის წინ მოიშინაურა. ზოგადად, სელექციური სამუშაოები დაახლოებით XVIII საუკუნიდან
                    იწყება და მანამდე მიმდინარე ცვლილებები ძაღლებში, დიდი ალბათობით, ბუნებრივად ხდებოდა. შესაძლოა, თავად
                    ძაღლი ადაპტირდა ადამიანის გარემოსთან, რადგან აგრესიული ცხოველის მოკვლის შანსი გაცილებით მაღალი
                    იქნებოდა. მოშინაურებულმა ძაღლმა სხვადასხვა ახალი თვისება შეიძინა',
                    'III' => 'ცხოველების სხვა სახეობებისგან განსხვავებით, ძაღლები მუდმივად ითხოვენ ადამიანებთან თვალებით კონტაქტს.
                    ასეთი გამომეტყველების მიღება ძაღლებს სწორედ იმიტომ შეუძლიათ, რომ ჩვენ მათი თვალების უგულებელყოფა თავს
                    დამნაშავედ გვაგრძნობინებს. ძაღლის სახეზე არსებული მიმიკური კუნთები ისეთი გამომეტყველების მიღების
                    საშუალებას იძლევა, როგორის მიღებაც მგლებს არ შეუძლიათ. წარბების აწევასა და ჩვენთვის თავის შეცოდებას ძაღლები
                    თვალების გარშემო არსებული სპეციალური წყვილი კუნთის საშუალებით ახერხებენ. ეს პირველი ბიოლოგიური
                    მტკიცებულებაა იმისა, რომ ძაღლებს მოშინაურების პროცესში ეს კუნთები ერთი კონკრეტული მიზნით, ადამიანებთან
                    კომუნიკაციისთვის ჩამოუყალიბდათ. ეს ორი კუნთი თვალებს უფრო დიდსა და მეტყველს აჩენს. ცნობილია, რომ
                    თავშესაფრებიდან უფრო ხშირად მიჰყავთ ის ძაღლები, რომლებსაც მიმიკური კუნთები კარგად აქვთ განვითარებული.',
                    'IV' => 'ძაღლები წარბებს ამოძრავებენ ადამიანის ყურადღების მისაქცევად, მასთან ურთიერთობისას. ეს უნარი მათ
                    ათასობით წლის განმავლობაში ადამიანთან ერთად ცხოვრების კვალდაკვალ ჩამოუყალიბდათ. ამის გადამოწმება კი
                    მგლების შესწავლით შეგვიძლია. მეცნიერებმა თვალის ირგვლივ კუნთის პოვნა ოთხი ჯიშის მგელში სცადეს, მაგრამ
                    უშედეგოდ. ხოლო ძაღლების შერჩეული ექვსი ჯიშიდან წარბის კუნთები ხუთში იპოვეს. გამონაკლისი იყო ციმბირული
                    ჰასკი, რომელიც ჯგუფში ყველაზე ძველ ჯიშს წარმოადგენდა',
                    'V' => 'როგორც ჩანს, ძაღლებს აქვთ იმის უნარი, რომ ადამიანებს მოგვბაძონ და ჩვენგან გარკვეული ქცევები დაისწავლონ.
                    ასეთი ქცევა მათ რეალურ უპირატესობას ანიჭებს. ფაქტია, რომ ძაღლებს ადამიანების მიმიკების მიბაძვით ჩვენით
                    მანიპულირება მშვენივრად გამოსდით და ჩვენც მათ ამის საშუალებას სიამოვნებით ვაძლევთ.',
                ]
            ),
            'part' => 1,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => TestType::find(1)->value('id'),
            'texts' => json_encode(
                [
                    'I' => 'პირველი მულტიპლიკაციური ფილმი მე-20 საუკუნის დასაწყისში შეიქმნა. სიტყვა „მულტიპლიკაცია“ ლათინური
                    წარმოშობისაა და გამრავლებას ნიშნავს. მართლაც, ეკრანზე ნახატი რომ ამოძრავდეს, ამისათვის ერთი გამოსახულება
                    უამრავი სახეცვლილებით უნდა დაიხატოს, შემდეგ საპროექციო აპარატში მას სწრაფად გაატარებენ და ნახატიც
                    ამოძრავდება. მულტიპლიკაციური ნაწარმოები იქმნება სპეციალურად მოწყობილ დანადგარზე ნახატი ფიგურის
                    მოძრაობის ცალკეული ფაზების თანმიმდევრული გადაღებით. ნახატ ფილმებს ანიმაციურსაც უწოდებენ. „ანიმაცია“
                    ლათინური სიტყვაა და „გასულიერებას“, „გაცოცხლებას“ ნიშნავს.',
                    'II' => 'ადამიანი უხსოვარი დროიდან ცდილობს თავისი ნაკეთობების – ნახატებისა თუ გამოქანდაკებული ფიგურების –
                    გაცოცხლებას. ამის ნიმუშებს ვხვდებით პალეოლითის ხანის კედლის მხატვრობაშიც. ნახატებზე ცხოველების
                    კიდურების ჭარბი რაოდენობა ამ გამოსახულებების ამოძრავების მცდელობა უნდა იყოს. რეჟისორი მარკ აზემა
                    მსოფლიოს პირველ ანიმატორებად გამოქვაბულის მხატვრებს ასახელებს. ბნელ მღვიმეში მოციმციმე ცეცხლის შუქზე
                    შექმნილი კომპოზიციები მართლაც ბადებდა მოძრაობის ილუზიას. აზემამ გააკეთა გამოქვაბულის რამდენიმე ნახატის
                    ციფრული ვერსია, რომელიც ამ ეფექტის ილუსტრაციას წარმოადგენს. შოვე პონ-დ’არკის გამოქვაბულის (საფრანგეთი,
                    ზედა პალეოლითი) კედელზე დახატულია ათი ლომი, ყველა თითქოს ნადავლს დაეძებს. თუმცა ჩირაღდნის შუქზე ეს
                    ათივე ლომი, შესაძლოა, მხოლოდ ერთი ან ორი ლომის თანმიმდევრულ გამოსახულებად გაერთიანდეს, ამ
                    კომპოზიციაში კადრებივით რომ მოძრაობენ. ლომების გვერდით მარტორქები დგანან. ერთი მარტორქის თავი და რქა
                    ექვსჯერ მეორდება ერთიმეორის ზემოთ – იქმნება თავის აქნევის ეფექტი.',
                    'III' => 'კადრების სწრაფი მონაცვლეობა ქმნის ოპტიკურ ილუზიას. ჩვენ შეგვიძლია მარტივი ცდა ჩავატაროთ:
                    ცეცხლმოკიდებული ჯოხი წრიულად სწრაფად დავატრიალოთ ჰაერში. მალე ჩვენ დავინახავთ მანათობელ წრეს,
                    სინამდვილეში კი მანათობელი წრე არ არსებობს. ჩვენ იმიტომ ვხედავთ ასეთ წრეს, რომ ჯოხს ვატრიალებთ უფრო
                    სწრაფად, ვიდრე მას თვალი აღიქვამს. მანათობელი წერტილის ერთი მდგომარეობის გამოსახულება ვერ ასწრებს
                    თვალის ბადურაზე გაქრობას, რომ მის გვერდით ჩნდება უკვე მეორე ასეთივე გამოსახულება. ორი მსგავსი გამოსახულება
                    უერთდება ერთმანეთს, შემდეგ მას ემატება მესამე, მეოთხე... და ასე წარმოიქმნება ერთი მთლიანი ცეცხლის წრე.',
                    'IV' => 'პირველად 1824 წელს ინგლისელი ექიმის პეტერ მარკ როჯეტის გამოკვლევებმა დაამტკიცა, რომ ადამიანის თვალი
                    მხედველობით შთაბეჭდილებას მოვლენის გაქრობის შემდეგ 0,1 წამის განმავლობაში ინარჩუნებს. თუ ორ მხედველობით
                    შთაბეჭდილებას შორის ინტერვალი 0,3 წამს არ აღემატება, მაშინ ეს ორი შთაბეჭდილება ერთმანეთს ერწყმის და ერთი
                    სახეშეცვლილი საგანი მიიღება. ამ თვისების გამოყენების პრინციპს ეფუძნება არაერთი ოპტიკური სათამაშო.',
                    'V' => 'ოპტიკურ ილუზიაზე გათვლილი სათამაშო ჯერ კიდევ ჩვენი წელთაღრიცხვით 180 წელს შეიქმნა ჩინეთში. ამ
                    ხელსაწყოს ზოოტროპი ეწოდება. იგი წარმოადგენს თავღია დისკოს, რომლის შიდა კედლებზე გამოსახულია
                    ცხოველები განსხვავებულ პოზიციებში. დისკოს ბრუნვა ქმნის შთაბეჭდილებას, რომ შიგ ჩახატული ცხოველები
                    მოძრაობენ. XIX საუკუნის დასაწყისში კი ასტროფიზიკოსმა ჯონ ჰერშელმა შექმნა ოპტიკური სათამაშო ნახატების
                    გამოყენებით. მან მუყაოზე დახატა წრე და გამოჭრა. შემდეგ ერთ მხარეს დახატა 2 ჩიტი, მეორე მხარეს კი – გალია.
                    მუყაოს ორივე მხარეს მიამაგრა ძაფები და მუყაო დაატრიალა. სწრაფი ტრიალის დროს სხვადასხვა მხარეს გამოსახული
                    ჩიტები და გალია ერთ ნახატად ერთდებოდა. ადამიანს ისეთი შთაბეჭდილება რჩებოდა, თითქოს ფრინველები გალიაში
                    ისხდნენ და გამოფრინდნენ. ჰერშელმა ამ სათამაშოს ტაუმატროპი უწოდა. ამას მოჰყვა პრაქსინოსკოპი, რომელიც
                    თანამედროვე პროექტორის „წინაპარია“. XIX საუკუნეში შექმნილი აპარატები საბოლოოდ კინოკამერის შექმნით
                    დასრულდა, რასაც მოჰყვა კინოს დაბადება.',
                ]
            ),
            'part' => 2,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => TestType::find(1)->value('id'),
            'image' => env('IMAGE_URL') . '/images/general-version-1-data-1.png',

            'texts' => json_encode(
                [
                    '' => 'დიაგრამაზე მოცემულია უმაღლეს საგანმანათლებლო დაწესებულებებში სტუდენტთა განაწილება პროგრამების
                    მიხედვით და თითოეული პროგრამისთვის სტუდენტთა განაწილება სქესის მიხედვით. თითოეულ საგანმანათლებლო
                    პროგრამას შეესაბამება საერთო გვერდის
                    მქონე მუქი და ღია ფერის
                    მართკუთხედები, რომელთა სიმაღლე
                    გვიჩვენებს იმ სტუდენტების
                    რაოდენობას, რომლებმაც ეს პროგრამა
                    აირჩიეს, ხოლო სიგრძე – ამ
                    სტუდენტების პროცენტულ განაწილებას
                    სქესის მიხედვით (მუქი მართკუთხედები
                    შეესაბამება ქალების პროცენტულ
                    მაჩვენებლებს, ხოლო ღია ფერის
                    მართკუთხედები – კაცების პროცენტულ
                    მაჩვენებლებს).
                    დიაგრამის მიხედვით უპასუხეთ
                    შემდეგ 4 შეკითხვას:',
                ]
            ),
            'part' => 3,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => 2,
            'texts' => json_encode(
                [
                    'I' => 'XVI-XVII საუკუნეების ვენეციის რესპუბლიკაში პოლიტიკური და სოციალური სტაბილურობა სუფევდა. თვით
                    ვენეციელები ამ სტაბილურობას მარადიულად მიიჩნევდნენ და ხსნიდნენ „დაბალანსებული კონსტიტუციით“, რომელშიც
                    მონარქიული ელემენტი დოჟის სახით იყო წარმოდგენილი, არისტოკრატიული ელემენტი – სენატით, ხოლო ე. წ.
                    დემოკრატიული ელემენტი – დიდი საბჭოთი, რომელიც 2000-მდე წარჩინებული მამაკაცისგან შედგებოდა. ვენეციას,
                    პრაქტიკულად, 200-მდე უმთავრესი წარჩინებულისაგან შემდგარი ოლიგარქია მართავდა. მათ უწოდებდნენ გრანდის
                    (დიდებულებს), რომელთაც ხელთ ეპყრათ უმთავრესი პოლიტიკური დაწესებულებების გასაღებები. ასე რომ,
                    „დაბალანსებული კონსტიტუცია“ სისტემას არსებულ მდგომარეობაში ინარჩუნებდა.',
                    'II' => 'ვენეციაში თითქოს ლოიალურობის (რეალურად კი ურთიერთსაპირისპირო და ხშირად კონფლიქტური)
                    გამოვლინებები მჭიდრო სოციალური კავშირების შენარჩუნებას ემსახურებოდა. წვრილი არისტოკრატები
                    მოქმედებდნენ, ერთი მხრივ, კლასობრივი სოლიდარობის, ხოლო, მეორე მხრივ, პატრონაჟის ინტერესების
                    გათვალისწინებით. ეს ინტერესები კი თითოეულ მათგანს რომელიმე „გრანდისთან“ აკავშირებდა. ინტერესთა ამ
                    კონფლიქტში მომწყვდეულებს, ბუნებრივია, კომპრომისიღა რჩებოდათ. მცხოვრებთა ყველაზე გამოკვეთილი ნაწილი,
                    რომელსაც ვენეციური ოლიგარქიისათვის წინააღმდეგობის გაწევა შეეძლო, ე. წ. მოქალაქეებისგან შედგებოდა (2000-
                    3000 მამაკაცი). ისინი გარკვეული პრივილეგიებით სარგებლობდნენ იმის სანაცვლოდ, რომ დიდი საბჭოს გარეთ
                    იყვნენ დარჩენილნი. ზოგი ადმინისტრაციული თანამდებობა მხოლოდ მათთვის იყო გათვალისწინებული.
                    წარჩინებულები არცთუ იშვიათად ცოლად ირთავდნენ მათ ქალიშვილებს. სავარაუდოდ, პრივილეგიები
                    აგრძნობინებდა მოქალაქეებს, რომ ისინი წარჩინებულთაგან დიდად არ განსხვავდებოდნენ, მდაბიოთაგან კი
                    აშკარად იყვნენ გამიჯნულნი.',
                    'III' => 'მდაბიონი (დაახლოებით 150 000 კაცი) ისევე, როგორც ანტიკური რომის მოსახლეობა, პურითა და სანახაობით
                    იყვნენ დაკმაყოფილებულნი. ხელისუფლება უზრუნველყოფდა მოსახლეობას საკვებით და აწყობდა ნაირგვარ საჯარო
                    რიტუალებს. ცნობილი იყო ვენეციური კარნავალი, რომელიც გაზაფხულზე, დიდმარხვის დაწყებამდე, ყველიერის
                    კვირაში იმართებოდა. კარნავალის მთავარი ატრიბუტი, ნიღაბი, მნიშვნელოვან სოციალურ როლს ასრულებდა. ნიღბიანი
                    მსახური შეიძლებოდა დოჟად ან სენატორად გამოეცხადებინათ, მასხარა – მეფედ, კეთილშობილი ვენეციელი – ავაზაკად
                    და ა.შ. ვენეციელებს კარნავალში მაყურებლის ფუნქცია კი არ ჰქონდათ, არამედ ისინი კარნავალში ცხოვრობდნენ.
                    კარნავალი შლიდა ყველანაირ ზღვარს, აკრძალვას, ნორმას, პრივილეგიას. ფერმკრთალდებოდა მიჯნები სოციალურ
                    ფენებს შორის, რითაც კარნავალი ამკვიდრებდა ერთგვარად გათანაბრებულ, ეგალიტარულ* საზოგადოებას. კარნავალის
                    გროტესკი და იუმორი, ერთი მხრივ, კიცხავდა სამყაროს არასრულყოფილებას და, მეორე მხრივ, ცდილობდა, მხიარული
                    ემოციებით გარდაექმნა ეს არასრულყოფილი სამყარო. ჩვეულებრივ დღეებშიც ბევრი ირგებდა ნიღაბს. თითქოს ვენეციის
                    მთელი ცხოვრებაც კარნავალი იყო.',
                    'IV' => 'ვენეციელ მეთევზეებს საკუთარი დოჟის არჩევის უფლება ჰქონდათ. ნამდვილი დოჟი კი მათ საზეიმოდ
                    იღებდა თავის დარბაზში და ერთგვარად თეატრალური, გადაჭარბებული პატივისცემით ესალმებოდა. ამ რიტუალის
                    ახსნა შეიძლება იმ მოტივით, რომ უბრალო ხალხს არწმუნებდნენ, თითქოს ისინი მონაწილეობდნენ პოლიტიკურ
                    სისტემაში, საიდანაც სინამდვილეში გამოდევნილნი იყვნენ. ვენეციას ექვემდებარებოდა ჩრდილო იტალიის
                    მნიშვნელოვანი ქალაქები: ვიჩენცა, ვერონა, პადუა, ბერგამო... ამ ქალაქების პატრიციები** გრძნობდნენ თავიანთ
                    დამოკიდებულ მდგომარეობას, მაგრამ ამის სანაცვლოდ მათ ვენეციის ჯარში ოფიცრებად სამსახურის უფლება
                    ჰქონდათ. უბრალო ხალხს კი საკუთარი პატრიციების მიმართ მტრული განწყობა ხშირად ვენეციის მომხრეებად
                    აქცევდა. ასე რომ, სისტემის სტაბილურობა დამყარებული იყო ძალაუფლებათა რთულ ბალანსზე.',
                    'V' => 'ეს სისტემა მარადიული არ ყოფილა. ვენეციის რესპუბლიკა გაუქმდა 1797 წელს.
                    *ეგალიტარული – გამათანასწორებელი; თანაბარი უფლებების მქონე;
                    **პატრიციები – დიდგვაროვანნი, რომლებიც მონაწილეობას იღებდნენ ქალაქის მართვაში',
                ]
            ),
            'part' => 1,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => 2,
            'texts' => json_encode(
                [
                    'I' => '1861 წელს, ჩარლზ დარვინის „სახეობათა წარმოშობის“ გამოცემიდან ორი წლის შემდეგ, გერმანიაში ყვავის ზომის
                    ნამარხი ფრინველი იპოვეს. მას არქეოპტერიქსი ეწოდა. ეს არსება დაახლოებით 150 მილიონი წლის წინ ცხოვრობდა. მას
                    ბუმბული და ფრინველისთვის დამახასიათებელი სხვა ნიშნები ჰქონდა, თუმცა, რეპტილიური წარსულის კვალიც
                    ეტყობოდა (კბილები, ბრჭყალები ფრთებზე და ძვლოვანი კუდი). დარვინის თქმით, „ეს აღმოჩენა ევოლუციის
                    თეორიისთვის უძლიერესი მტკიცებულება უნდა ყოფილიყო... ევოლუციური მეტამორფოზების რიგში არქეოპტერიქსმა
                    თითქოს კრიტიკული მომენტი დააფიქსირა“. სავარაუდოდ, ფრინველთა წინაპრების (რეპტილიების) ქერცლი დროთა
                    განმავლობაში სიგრძეში ,,გაიჭიმა“. მოგვიანებით მათი კიდეები გაცვდა, გაიპო და პირველ ბუმბულად იქცა. ეს
                    ცვლილება ფრენისთვის აუცილებელი ადაპტაცია იყო. ზოგიერთი მკვლევრის აზრით, ბუმბულის ევოლუცია ფრენის
                    ევოლუციასთან ერთად მოხდა. ფრინველების წინაპრები პატარა, ოთხფეხა ქერცლიანი ქვეწარმავლები იყვნენ და ხეებზე
                    დახტოდნენ. როგორც ჩანს, პროტოფრინველებს წინა კიდურები ფრთებად ექცათ, რამაც ეს არსებები პლანერივით
                    მოძრავი ცხოველებიდან ნამდვილ ფრინველებად აქცია.',
                    'II' => 'ეს თეორია კიდევ უფრო საგულისხმო გახდა, როცა პალეონტოლოგმა ჯონ ოსტრომმა ფრინველებისა და
                    თეროპოდების (ხმელეთის დინოზავრების) ჩონჩხებს შორის საოცარი მსგავსება შენიშნა. ოსტრომს ეჭვი არ ეპარებოდა,
                    რომ ფრინველები თეროპოდების შთამომავლები იყვნენ. მისი ჰიპოთეზა გაამყარა ჩინელი პალეონტოლოგების აღმოჩენამ.
                    ეს იყო 125 მილიონი წლის განამარხებული თეროპოდი − სინოზაუროპტერიქსი − პატარა და მოკლე წინა კიდურებით,
                    რომელსაც ერთი განსაკუთრებული ნიშანი ჰქონდა: ზურგი და კუდი დაფარული ჰქონდა თხელი, ძაფისებრი ბოჭკოების
                    ფენით. მეცნიერების ხელთ აღმოჩნდა ნამდვილი პრიმიტიული ბუმბული, თუმცა, სინოზაუროპტერიქსს - ხმელეთის
                    დინოზავრს - ფრენა არ შეეძლო. ამგვარად, ბუმბულის წარმოშობასა და ფრენის დაწყებას არც არაფერი ჰქონია საერთო.
                    ზოგიერთი პალეონტოლოგის ვარაუდით, ბუმბულის საწყის ფუნქციას თერმოიზოლაცია წარმოადგენდა.',
                    'III' => 'მალე პალეონტოლოგებმა ასეულობით შებუმბლული თეროპოდი აღმოაჩინეს. გაჩნდა ნამარხების შედარების
                    შესაძლებლობა და დეტალურად დაიწყეს ბუმბულის ისტორიის შესწავლა. როგორც აღმოჩნდა, თავდაპირველად გაჩნდა
                    მარტივი ბოჭკოები. მოგვიანებით, თეროპოდების სხვადასხვა ევოლუციურ საფეხურზე ბუმბულის ნაირსახეობები
                    განვითარდა. ზოგი დღევანდელი ფრინველის ღინღლს წააგავდა, ზოგსაც სიმეტრიულად განლაგებული ტოტები ჰქონდა.
                    ბოჭკომ ევოლუცია განიცადა. მრავალი ცვლილების შედეგად მისგან უფრო რთული სტრუქტურის ბუმბული წარმოიშვა.',
                    'IV' => 'როგორ განხორციელდა საბოლოო ტრანსფორმაცია? ამაზე კვლავ კამათობენ: შებუმბლულმა დინოზავრებმა მიწიდან
                    აფრენა გარბენის დროს კიდურების ქნევით დაიწყეს? ან იქნებ პროტოფრინველები ბუმბულებს ხიდან ხეზე
                    გადასახტომად და პლანირებისთვის იყენებდნენ, საბოლოოდ კი, ფრენა დაიწყეს? მიწიდან...? თუ ხეებიდან...? ფრენის
                    მექანიზმის მკვლევარი კენ დაიალი ვარაუდობს: მრავალი სახეობის ფრინველის ბარტყი თავის რუდიმენტულ ფრთებს
                    სიჩქარის ასაკრეფად იქნევს, როცა მტაცებლებისგან დასხლტომას ციცაბოზე ასვლით ცდილობს. ფრთების ქნევა მას
                    სიმაღლიდან სწრაფად დაშვებაშიც ეხმარება. ზრდის პროცესში ამგვარი კონტროლირებადი დაშვება თანდათან მართვად
                    ფრენას უთმობს ადგილს. დაიალის თქმით, ბარტყის განვითარების გზა მისი წინაპრების ევოლუციურ გზას უნდა
                    ასახავდეს.',
                    'V' => 'დღეს მკვლევართათვის აშკარაა, რომ ფრინველის სხეულის თითქმის ყველა ნაწილი საფრენად არის
                    კონსტრუირებული. მას აქვს ლულოვანი (ღრუ) ძვლები, სპეციფიკური სასუნთქი სისტემა და ფრთების ასამოძრავებელი
                    კუნთები. ფრინველს აქვს ისეთი კუნთებიც, რომლებიც თითოეული ბუმბულის მდგომარეობას განსაზღვრავს. ყოველი
                    კუნთი შეიცავს ნერვულ დაბოლოებებს, რომლებიც სიგნალს გადასცემენ ფრინველის ტვინს. ტვინი კი წინასწარ არის
                    „დაპროგრამებული“, რათა მთლიანობაში, ავტომატურად და აბსოლუტური სიზუსტით აკონტროლოს ეს საოცრად
                    რთული სისტემა. ასე რომ, ფრენისთვის საჭიროა მთელი სისტემა და არა მხოლოდ ბუმბული.',
                ]
            ),
            'part' => 2,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => 2,
            'image' => env('IMAGE_URL') . '/images/general-version-2-data-1.png',

            'texts' => json_encode(
                [
                    '' => 'დიაგრამაზე წერტილების
                    საშუალებით მოცემულია
                    დაწესებულებაში მომუშავე
                    თითოეული
                    თანამშრომლის ასაკი და
                    ხელფასი (სხვადასხვა
                    თანამშრომელს სხვადასხვა
                    წერტილი შეესაბამება).
                    დიაგრამის მიხედვით უპასუხეთ შემდეგ 3 შეკითხვას:',
                ]
            ),
            'part' => 3,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => 3,
            'texts' => json_encode(
                [
                    'I' => 'XVI-XVII საუკუნეების ვენეციის რესპუბლიკაში პოლიტიკური და სოციალური სტაბილურობა სუფევდა. თვით
                    ვენეციელები ამ სტაბილურობას მარადიულად მიიჩნევდნენ და ხსნიდნენ „დაბალანსებული კონსტიტუციით“, რომელშიც
                    მონარქიული ელემენტი დოჟის სახით იყო წარმოდგენილი, არისტოკრატიული ელემენტი – სენატით, ხოლო ე. წ.
                    დემოკრატიული ელემენტი – დიდი საბჭოთი, რომელიც 2000-მდე წარჩინებული მამაკაცისგან შედგებოდა. ვენეციას,
                    პრაქტიკულად, 200-მდე უმთავრესი წარჩინებულისაგან შემდგარი ოლიგარქია მართავდა. მათ უწოდებდნენ გრანდის
                    (დიდებულებს), რომელთაც ხელთ ეპყრათ უმთავრესი პოლიტიკური დაწესებულებების გასაღებები. ასე რომ,
                    „დაბალანსებული კონსტიტუცია“ სისტემას არსებულ მდგომარეობაში ინარჩუნებდა.',
                    'II' => 'ვენეციაში თითქოს ლოიალურობის (რეალურად კი ურთიერთსაპირისპირო და ხშირად კონფლიქტური)
                    გამოვლინებები მჭიდრო სოციალური კავშირების შენარჩუნებას ემსახურებოდა. წვრილი არისტოკრატები მოქმედებდნენ,
                    ერთი მხრივ, კლასობრივი სოლიდარობის, ხოლო, მეორე მხრივ, პატრონაჟის ინტერესების გათვალისწინებით. ეს
                    ინტერესები კი თითოეულ მათგანს რომელიმე „გრანდისთან“ აკავშირებდა. ინტერესთა ამ კონფლიქტში
                    მომწყვდეულებს, ბუნებრივია, კომპრომისიღა რჩებოდათ. მცხოვრებთა ყველაზე გამოკვეთილი ნაწილი, რომელსაც
                    ვენეციური ოლიგარქიისათვის წინააღმდეგობის გაწევა შეეძლო, ე. წ. მოქალაქეებისგან შედგებოდა (2000-3000 მამაკაცი).
                    ისინი გარკვეული პრივილეგიებით სარგებლობდნენ იმის სანაცვლოდ, რომ დიდი საბჭოს გარეთ იყვნენ დარჩენილნი.
                    ზოგი ადმინისტრაციული თანამდებობა მხოლოდ მათთვის იყო გათვალისწინებული. წარჩინებულები არცთუ
                    იშვიათად ცოლად ირთავდნენ მათ ქალიშვილებს. სავარაუდოდ, პრივილეგიები აგრძნობინებდა მოქალაქეებს, რომ
                    ისინი წარჩინებულთაგან დიდად არ განსხვავდებოდნენ, მდაბიოთაგან კი აშკარად იყვნენ გამიჯნულნი.',
                    'III' => 'მდაბიონი (დაახლოებით 150 000 კაცი) ისევე, როგორც ანტიკური რომის მოსახლეობა, პურითა და სანახაობით
                    იყვნენ დაკმაყოფილებულნი. ხელისუფლება უზრუნველყოფდა მოსახლეობას საკვებით და აწყობდა ნაირგვარ საჯარო
                    რიტუალებს. ცნობილი იყო ვენეციური კარნავალი, რომელიც გაზაფხულზე, დიდმარხვის დაწყებამდე, ყველიერის კვირაში
                    იმართებოდა. კარნავალის მთავარი ატრიბუტი, ნიღაბი, მნიშვნელოვან სოციალურ როლს ასრულებდა. ნიღბიანი მსახური
                    შეიძლებოდა დოჟად ან სენატორად გამოეცხადებინათ, მასხარა – მეფედ, კეთილშობილი ვენეციელი – ავაზაკად და ა.შ.
                    ვენეციელებს კარნავალში მაყურებლის ფუნქცია კი არ ჰქონდათ, არამედ ისინი კარნავალში ცხოვრობდნენ. კარნავალი
                    შლიდა ყველანაირ ზღვარს, აკრძალვას, ნორმას, პრივილეგიას. ფერმკრთალდებოდა მიჯნები სოციალურ ფენებს შორის,
                    რითაც კარნავალი ამკვიდრებდა ერთგვარად გათანაბრებულ, ეგალიტარულ* საზოგადოებას. კარნავალის გროტესკი და
                    იუმორი, ერთი მხრივ, კიცხავდა სამყაროს არასრულყოფილებას და, მეორე მხრივ, ცდილობდა, მხიარული ემოციებით
                    გარდაექმნა ეს არასრულყოფილი სამყარო. ჩვეულებრივ დღეებშიც ბევრი ირგებდა ნიღაბს. თითქოს ვენეციის მთელი
                    ცხოვრებაც კარნავალი იყო.',
                    'IV' => 'ვენეციელ მეთევზეებს საკუთარი დოჟის არჩევის უფლება ჰქონდათ. ნამდვილი დოჟი კი მათ საზეიმოდ იღებდა
                    თავის დარბაზში და ერთგვარად თეატრალური, გადაჭარბებული პატივისცემით ესალმებოდა. ამ რიტუალის ახსნა
                    შეიძლება იმ მოტივით, რომ უბრალო ხალხს არწმუნებდნენ, თითქოს ისინი მონაწილეობდნენ პოლიტიკურ სისტემაში,
                    საიდანაც სინამდვილეში გამოდევნილნი იყვნენ. ვენეციას ექვემდებარებოდა ჩრდილო იტალიის მნიშვნელოვანი
                    ქალაქები: ვიჩენცა, ვერონა, პადუა, ბერგამო... ამ ქალაქების პატრიციები** გრძნობდნენ თავიანთ დამოკიდებულ
                    მდგომარეობას, მაგრამ ამის სანაცვლოდ მათ ვენეციის ჯარში ოფიცრებად სამსახურის უფლება ჰქონდათ. უბრალო
                    ხალხს კი საკუთარი პატრიციების მიმართ მტრული განწყობა ხშირად ვენეციის მომხრეებად აქცევდა. ასე რომ, სისტემის
                    სტაბილურობა დამყარებული იყო ძალაუფლებათა რთულ ბალანსზე.',
                    'V' => 'ეს სისტემა მარადიული არ ყოფილა. ვენეციის რესპუბლიკა გაუქმდა 1797 წელს.',
                ]
            ),
            'part' => 1,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => 3,
            'texts' => json_encode(
                [
                    'I' => 'ფრინველთა ფრენის მექანიზმის ჩამოყალიბება ევოლუციის რთულად ამოსაცნობი საიდუმლო აღმოჩნდა. ბევრი
                    მეცნიერი ფრენის უნარის განვითარებას ბუმბულის წარმოშობას უკავშირებდა. პალეონტოლოგმა ჯონ ოსტრომმა
                    ფრინველებისა და თეროპოდების (ხმელეთის დინოზავრების) ჩონჩხებს შორის საოცარი მსგავსება შენიშნა. ოსტრომს ეჭვი
                    არ ეპარებოდა, რომ ფრინველები თეროპოდების შთამომავლები იყვნენ. მალე მეცნიერებმა ასეულობით შებუმბლული
                    თეროპოდი აღმოაჩინეს. ფრენის უნარი ხმელეთზე მოსიარულე დინოზავრებს „გვერდითი მოვლენის“ სახით
                    განუვითარდათ, კერძოდ, წინა კიდურების ქნევით. ფრინველთა წინაპრები შებუმბლულ კიდურებს იყენებდნენ სირბილის
                    დროს სიჩქარის მოსამატებლად ან მკვეთრი მოხვევისას წონასწორობის დასაცავად. როგორიც უნდა ყოფილიყო ბუმბულის
                    თავდაპირველი დანიშნულება, დიდია იმის ალბათობა, რომ მისი წარმოქმნა მრავალი მილიონი წლით უსწრებდა
                    დინოზავრების ფრენას.',
                    'II' => 'როგორ მოხდა თეროპოდების ტრანსფორმირება? პალეონტოლოგებისთვის უმნიშვნელოვანესი იყო 1861 წელს
                    გერმანიაში აღმოჩენილი 150 მილიონი წლის წინანდელი ყვავის ზომის ნამარხი ფრინველი, რომელსაც არქეოპტერიქსი
                    ეწოდა. მას ბუმბული და ფრინველისთვის დამახასიათებელი სხვა ნიშნები ჰქონდა, შეეძლო ფრენა, თუმცა, რეპტილიური
                    წარსულის კვალიც ეტყობოდა: კბილები, ბრჭყალები ფრთებადქცეულ წინა კიდურებზე და გრძელი, ძვლოვანი კუდი.
                    რამდენიმე წლის წინ კი 150 მილიონი წლის ნამარხი თეროპოდი − ანჩიორნისი აღმოაჩინეს. ქათმის ზომის არსების ფრთები
                    ფრენისთვის გამოუსადეგარი იყო. მას ოთხივე კიდურზე უამრავი ბუმბული ჰქონდა. ანჩიორნისის ჭარბი შებუმბვლის
                    მიმართულებით წასული ევოლუციის მამოძრავებელი ძალა, შესაძლოა, სქესობრივი გადარჩევაც იყო. მაგრამ ამდენი
                    ბუმბული მისთვის მაინც მძიმე ტვირთი უნდა ყოფილიყო. როგორ უნდა ეტარებინა ეს „ტვირთი“ ანჩიორნისს?',
                    'III' => 'მკვლევარმა კორვინ სალივანმა ეს მოვლენა ასე ახსნა: თანამედროვე ფრინველების მონათესავე თეროპოდების წინა
                    კიდურის (მაჯის) ერთ-ერთ ძვალს სოლის ფორმა ჰქონდა, რაც კიდურებს მოხრის საშუალებას აძლევდა. ანჩიორნისის
                    მაჯის ძვლებიც სოლისებური იყო. მას შეეძლო, კიდურები გვერდებზე დაეკეცა ისე, რომ სიარულის დროს კიდურების
                    ბუმბულები მიწაზე არ ეთრია. თანამედროვე ფრინველები ფრენის დროს ანალოგიურ ძვალს იყენებენ და აფრენისას ყოველ
                    მოქნევაზე ფრთებს ტანზე იკრავენ. თუ ეს ჰიპოთეზა მართალია, მაშინ შეიძლება ვიფიქროთ, რომ ფრენისათვის
                    აუცილებელი ეს ფუნქციური ნაწილი ფრინველებს ფრენის დაწყებამდე ბევრად უფრო ადრე განუვითარდათ.',
                    'IV' => 'ზოგიერთი პალეონტოლოგის ვარაუდით, ბუმბულის საწყისი ფუნქცია თერმოიზოლაცია უნდა ყოფილიყო. გარდა
                    ამისა, სხვადასხვა ფრინველი ფრთებს ხმაურის გამოსაწვევად ან ჩასახშობად იყენებს, აგრეთვე, ცურავს, სრიალებს
                    თოვლზე, აშენებს ბუდეს. ფრთები მათ საჭმლის მონელებაში, წყლის ტარებასა და მტაცებლებისგან გაქცევაშიც ეხმარება.
                    თუმცა, ევოლუციის პროცესი განსაკუთრებით შემოქმედებითია, როცა ის რეპროდუქციულ ფუნქციებს უკავშირდება. ამ
                    დროს ფერადი ბუმბული, „მოხატული“ ფრთები განსაკუთრებულ როლს ასრულებს, მაგალითად, ფარშავანგი თავის მძიმე,
                    გრძელ, ნაირფერ კუდს მდედრის მოსაზიდად შლის. სწორედ სქესობრივი გადარჩევით შეიძლება ავხსნათ, ბუნებრივ
                    გადარჩევას რომ გადაურჩა ფარშავანგის კუდი − საოცრად ლამაზი, თუმცა ფრენისთვის ძალზე დამაბრკოლებელი.',
                    'V' => 'ამ თვალსაზრისით საინტერესოა ჩინეთში აღმოჩენილი 160 მილიონი წლის განამარხებული ეპიდექსიპტერიქსი −
                    მტრედის ზომის დინოზავრი. მას ოთხი კიდური აქვს და კუდის ნაცვლად ოთხი ისრისებური, წვრილი და სხეულზე
                    ორჯერ უფრო გრძელი ბუმბული − თითოეული ბოლოვდება ფარშავანგის ფრთებზე მოხატული „თვალების“ მსგავსი
                    გამოსახულებით. ეპიდექსიპტერიქსს იურულ* ფარშავანგსაც უწოდებენ. მისი ისრისებური ბუმბულები აჭრელებულია
                    წითელი, ლურჯი და ყვითელი ზოლებით. ასეთი ექსტრავაგანტური შებუმბვლა უთუოდ არაპრაქტიკული იქნებოდა
                    თერმოიზოლაციისა თუ ფრენისთვის, სამაგიეროდ, შეიძლებოდა შეუდარებელად ეფექტური ყოფილიყო მეწყვილის
                    მოსაზიდად ან ერთმანეთის სხვებისგან გამოსარჩევად.',
                ]
            ),
            'part' => 2,
        ]);
        DB::table('texts')->insert([
            'test_type_id' => 3,
            'image' => env('IMAGE_URL') . '/images/general-version-3-data-1.png',

            'texts' => json_encode(
                [
                    '' => 'დიაგრამაზე წერტილების
                    საშუალებით მოცემულია
                    დაწესებულებაში მომუშავე
                    თითოეული
                    თანამშრომლის ასაკი და
                    ხელფასი (სხვადასხვა
                    თანამშრომელს სხვადასხვა
                    წერტილი შეესაბამება).
                    დიაგრამის მიხედვით უპასუხეთ შემდეგ 3 შეკითხვას:',
                ]
            ),
            'part' => 3,
        ]);
    }
}
