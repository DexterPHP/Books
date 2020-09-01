<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Cater extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caters')->insert(['title'=>'Android','title_link'=>'android','description'=>'Android','icon'=>'/images/android.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Database','title_link'=>'database','description'=>'DataBase','icon'=>'/images/database.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Designing And Graphics','title_link'=>'designing-and-graphics','description'=>'Designing And Graphics','icon'=>'/images/android.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Desktop Apps Programming','title_link'=>'desktop-apps-programming','description'=>'Android','icon'=>'/images/desktop-programming.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Hardware','title_link'=>'hardware','description'=>'Hardware','icon'=>'/images/hardware.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'IT Certifications','title_link'=>'IT-certifications','description'=>'Android','icon'=>'/images/it.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Networking','title_link'=>'networking','description'=>'Networking','icon'=>'/images/Networking.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Operating Systems','title_link'=>'operating-systems','description'=>'Operating Systems','icon'=>'/images/os.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Other','title_link'=>'other','description'=>'Other','icon'=>'/images/Other.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Security','title_link'=>'security','description'=>'security','icon'=>'/images/security.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Software','title_link'=>'software','description'=>'software','icon'=>'/images/software.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'WebApps Programming & Internet','title_link'=>'WebApps-Programming-and-Internet','description'=>'WebApps Programming & Internet','icon'=>'/images/webapps.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'For Dummies','title_link'=>'for-Dummies','description'=>'For Dummies','icon'=>'/images/dummies.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Hello world Magazine','title_link'=>'helloworld-magazine','description'=>'Helloworld Magazine','icon'=>'/images/Helloworld.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'Notes For Professionals','title_link'=>'notes-for-professionals','description'=>'Notes For Professionals','icon'=>'/images/Notes.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'اندرويد','title_link'=>'اندرويد','description'=>'اندرويد','icon'=>'/images/android.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'قواعد بيانات','title_link'=>'قواعد-بيانات','description'=>'قواعد بيانات','icon'=>'/images/DB.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'برمجة تطبيقات سطح مكتب','title_link'=>'برمجة-تطبيقات-سطح-مكتب','description'=>'برمجة تطبيقات سطح مكتب','icon'=>'/images/desktop.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'برمجيات','title_link'=>'برمجيات','description'=>'برمجيات','icon'=>'/images/programing.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'شبكات','title_link'=>'شبكات','description'=>'شبكات','icon'=>'/images/networks.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'برمجية تطبيقات ويب وانترنت','title_link'=>'برمجية-تطبيقات-ويب-وانترنت','description'=>'برمجية تطبيقات ويب وانترنت','icon'=>'/images/webapps-program.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'بحوث ومشاريع','title_link'=>'بحوث-ومشاريع','description'=>'بحوث ومشاريع','icon'=>'/images/research.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);
        DB::table('caters')->insert(['title'=>'امن البيانات','title_link'=>'امن-البيانات','description'=>'امن البيانات','icon'=>'/images/sec.png','created_at'=>'2020/06/15 17:46:30','updated_at'=>'2020/06/15 17:47:00']);

    }
}
