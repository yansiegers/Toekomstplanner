<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => 'Plan de toekomst van je studie',
            'slug' => '',
            'view' => 'home',
            'meta_description' => Str::random(10),
            'meta_keywords' => Str::random(10),
        ]);

        DB::table('page_texts')->insert([
            'page_id' => 1,
            'subtitle' => 'Over de Toekomstplanner',
            'heading' => 'h2',
            'text' => 'Als CMD\'er weet ik maar al te goed hoe het is om je eigen studieloopbaan te bepalen. Hoewel dat bij mij van een leien dakje is gegaan, is dat voor veel studenten wel anders. Daar kwam ik achter tijdens de introductie van de minor Concepting (semester 1, 2020/2021), waarbij elke student ging nadenken over hun toekomst.'
        ]);

        DB::table('page_texts')->insert([
            'page_id' => 1,
            'subtitle' => 'Weten wat je wilt is niet gemakkelijk',
            'heading' => 'h2',
            'text' => 'Daarom kwam ik met het plan om daar een oplossing voor te bedenken. Wat zou er gebeuren als studenten wat hulp zouden krijgen bij het uitvogelen van hun toekomstplan? Waar hebben ze precies hulp bij nodig? En hoe zou ik dat dan kunnen aanpakken?'
        ]);

        DB::table('page_texts')->insert([
            'page_id' => 1,
            'heading' => 'none',
            'text' => 'Allereerst zou de Toekomstplanner een vermindering van studievertraging teweeg kunnen brengen. Door dat studenten oefeningen doen waarbij ze inzicht krijgen in hun toekomst kunnen zij veel gerichter hun studie doorlopen. Natuurlijk zijn die oefeningen erg persoonlijk, en zouden zij die op een centrale plek moeten kunnen invullen. Wat is er dan beter dan een speciale online tool die hen daarbij helpt? Daar gaat dit project over.'
        ]);

        DB::table('exercises')->insert([
            'questions' => Str::random(10)
        ]);

        DB::table('exercise_intros')->insert([
            'exercise_id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit mauris ex, sit amet fermentum est tincidunt aliquet. Maecenas feugiat, tellus vitae consectetur facilisis, augue eros luctus quam, vitae rhoncus dui quam non tortor. Aliquam ullamcorper placerat viverra. Proin pulvinar leo enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis vel leo a dictum. Nullam non lobortis nibh. Aenean enim mi, efficitur et pharetra ac, tristique auctor elit.

Ut gravida elementum ligula. Vestibulum dictum justo ligula, sit amet egestas est tempor quis. Aenean imperdiet neque ipsum, a aliquam lorem sodales at. Integer id facilisis tortor. Donec id finibus tellus. Cras convallis vehicula cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris vel velit in metus efficitur placerat eget a lectus. Sed tempor accumsan dui quis venenatis.',
            'category' => 'future',
            'duration' => rand(1, 60),
            'difficulty' => 'medium',
        ]);

        DB::table('exercise_results')->insert([
            'exercise_id' => 1,
            'question' => 'vraag_1',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit mauris ex, sit amet fermentum est tincidunt aliquet. Maecenas feugiat, tellus vitae consectetur facilisis, augue eros luctus quam, vitae rhoncus dui quam non tortor. Aliquam ullamcorper placerat viverra. Proin pulvinar leo enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis vel leo a dictum. Nullam non lobortis nibh. Aenean enim mi, efficitur et pharetra ac, tristique auctor elit.',
        ]);

        DB::table('exercise_results')->insert([
            'exercise_id' => 1,
            'question' => 'vraag_2',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit mauris ex, sit amet fermentum est tincidunt aliquet. Maecenas feugiat, tellus vitae consectetur facilisis, augue eros luctus quam, vitae rhoncus dui quam non tortor. Aliquam ullamcorper placerat viverra. Proin pulvinar leo enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis vel leo a dictum. Nullam non lobortis nibh. Aenean enim mi, efficitur et pharetra ac, tristique auctor elit.',
        ]);

        DB::table('exercise_results')->insert([
            'exercise_id' => 1,
            'question' => 'vraag_3',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit mauris ex, sit amet fermentum est tincidunt aliquet. Maecenas feugiat, tellus vitae consectetur facilisis, augue eros luctus quam, vitae rhoncus dui quam non tortor. Aliquam ullamcorper placerat viverra. Proin pulvinar leo enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis vel leo a dictum. Nullam non lobortis nibh. Aenean enim mi, efficitur et pharetra ac, tristique auctor elit.',
        ]);
    }
}
