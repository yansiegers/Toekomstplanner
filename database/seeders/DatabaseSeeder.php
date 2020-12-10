<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('page_texts')->insert([
            'page_id' => 1,
            'subtitle' => 'Over de Toekomstplanner',
            'heading' => 'h2',
            'text' => 'Als CMD\'er weet ik maar al te goed hoe het is om je eigen studieloopbaan te bepalen. Hoewel dat bij mij van een leien dakje is gegaan, is dat voor veel studenten wel anders. Daar kwam ik achter tijdens de introductie van de minor Concepting (semester 1, 2020/2021), waarbij elke student ging nadenken over hun toekomst.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('page_texts')->insert([
            'page_id' => 1,
            'subtitle' => 'Weten wat je wilt is niet gemakkelijk',
            'heading' => 'h2',
            'text' => 'Daarom kwam ik met het plan om daar een oplossing voor te bedenken. Wat zou er gebeuren als studenten wat hulp zouden krijgen bij het uitvogelen van hun toekomstplan? Waar hebben ze precies hulp bij nodig? En hoe zou ik dat dan kunnen aanpakken?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('page_texts')->insert([
            'page_id' => 1,
            'heading' => 'none',
            'text' => 'Allereerst zou de Toekomstplanner een vermindering van studievertraging teweeg kunnen brengen. Door dat studenten oefeningen doen waarbij ze inzicht krijgen in hun toekomst kunnen zij veel gerichter hun studie doorlopen. Natuurlijk zijn die oefeningen erg persoonlijk, en zouden zij die op een centrale plek moeten kunnen invullen. Wat is er dan beter dan een speciale online tool die hen daarbij helpt? Daar gaat dit project over.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $ikigai_questions = '[
            "Waar ben je goed in? Vraag het ook aan anderen, wat zien zij als jouw grootste kwaliteit en kunde?",
            "Wat vind je heerlijk om te doen? Je hoeft ergens niet goed in te zijn om het leuk te vinden!",
            "Waar kun je je inkomen mee verdienen / verzorgen? Welk vak heb je geleerd of kun je leren dat past bij jou?",
            "Wat heeft de wereld nodig? Met jouw ikigai heb je impact. Waar kun jij impact hebben en is dat volgens jou het hardste nodig?"
        ]';

        DB::table('exercises')->insert([
            'questions' => $ikigai_questions,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('exercise_intros')->insert([
            'exercise_id' => 1,
            'title' => 'Ikigai',
            'text' => 'Ikigai is een Japans concept dat staat voor datgene waar jij je bed voor uitkomt en waard is om voor te leven. Het is je passie waarin vier elementen samenkomen: hetgeen waar je van houdt, wat de wereld nodig heeft, waarvoor je betaald kunt worden en waar je goed in bent. Zodoende overlappen je passie, missie, beroep en roeping en heb je je ikigai gevonden. Het Japanse geheim voor een lang en gelukkig leven! kunt aanvragen?',
            'category' => 'personal',
            'duration' => rand(1, 60),
            'difficulty' => 'medium',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        foreach (json_decode($ikigai_questions) as $ikigai_question) {
            DB::table('exercise_results')->insert([
                'exercise_id' => 1,
                'question' => $ikigai_question,
                'answer' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
