<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $questions =
        [
            [
                'question' => 'Vous avez des difficultés à vous présenter à d’autres personnes.',
            ],
            [
                'question' => 'Vous êtes souvent si perdu(e) dans vos pensées que vous ignorez ou oubliez votre entourage.',
            ],
            [
                'question' => 'Vous essayez de répondre dès que possible à vos e-mails et ne supportez pas d’avoir une boîte de messagerie mal organisée.'
            ],
            [
                'question' => 'Vous essayez de répondre dès que possible à vos e-mails et ne supportez pas d’avoir une boîte de messagerie mal organisée.',
            ],
            [
                'question' => 'Vous avez des facilités à rester serein(e) et concentré(e), même lorsque certaines situations donnent lieu à une certaine pression.',
            ],
            [
                'question' => 'Habituellement, vous ne lancez pas les conversations.',
            ],
            [
                'question' => 'Vous entreprenez rarement des actions par simple curiosité.',
            ],
            [
                'question' => 'Vous vous sentez supérieur(e) aux autres.',
            ],
            [
                'question' => 'Pour vous, être organisé(e) est plus important qu’être flexible.',
            ],
            [
                'question' => 'Vous êtes généralement très motivé(e) et plein(e) d’énergie.',
            ],
            [
                'question' => 'Gagner un débat vous importe moins que d’avoir la certitude que personne n’est contrarié.',
            ],
            [
                'question' => 'Vous avez souvent l’impression de devoir vous justifier auprès de vos pairs.',
            ],
            [
                'question' => 'Au travail et au domicile, votre environnement de vie est assez ordonné.',
            ],
            [
                'question' => 'Cela ne vous dérange pas d’être le centre de l’attention.',
            ],
            [
                'question' => 'Vous considérez votre esprit comme plus pratique que créatif.',
            ],
            [
                'question' => 'Les gens peuvent rarement vous contrarier.',
            ],
            [
                'question' => 'Vos itinéraires de voyage sont généralement planifiés à l’avance.',
            ],
            [
                'question' => 'Vous avez des difficultés à ressentir de l’empathie pour les sentiments des autres.',
            ],
            [
                'question' => 'Votre humeur peut changer très rapidement.',
            ],
            [
                'question' => 'Au cours d’une discussion, la vérité doit passer avant la susceptibilité de chacun.',
            ],
            [
                'question' => 'Vous vous inquiétez rarement des conséquences de vos actions sur vos pairs.',
            ],
            [
                'question' => 'otre style de travail s’approche plus de pics d’énergie aléatoires que d’une approche méthodique et organisée.',
            ],
            [
                'question' => 'Vous êtes souvent envieux(-se) des autres.',
            ],
            [
                'question' => 'Un livre ou un jeu vidéo de qualité sont souvent mieux qu’une soirée mondaine.',
            ],
            [
                'question' => 'Être capable de développer un plan et de s’y tenir est la partie la plus importante de chaque projet.',
            ],
            [
                'question' => 'Vous ne vous laissez distraire que rarement par vos rêves et pensées.',
            ],
            [
                'question' => 'Vous êtes souvent perdu(e) dans vos pensées lorsque vous marchez dans la nature.',
            ],
            [
                'question' => 'Si quelqu’un ne répond pas rapidement à votre e-mail, vous vous inquiétez et vous demandez si vous avez dit quelque chose de mal.',
            ],
            [
                'question' => 'En tant que parent, vous préféreriez voir votre enfant devenir gentil plutôt qu’intelligent.',
            ],
            [
                'question' => 'Vous ne laissez pas les autres influencer vos actions.',
            ],
            [
                'question' => 'Vos rêves ont tendance à se concentrer sur le monde réel et ses événements.',
            ],
            [
                'question' => 'Il vous faut peu de temps pour vous impliquer dans les activités sociales de votre nouveau lieu de travail.',
            ],
            [
                'question' => 'Vous êtes plus du genre à improviser naturellement qu’à tout planifier minutieusement.',
            ],
            [
                'question' => 'Vos émotions vous contrôlent plus que vous ne les contrôlez.',
            ],
            [
                'question' => 'Vous appréciez d’aller à des soirées déguisées ou de participer à des jeux de rôle.',
            ],
            [
                'question' => 'Vous passez souvent du temps à explorer des idées irréalistes et irréalisables, mais aussi intriguantes.',
            ],
            [
                'question' => 'Vous préféreriez improviser que passer de temps sur la construction d’un plan détaillé.',
            ],
            [
                'question' => 'Vous êtes une personne relativement calme et réservée.',
            ],
            [
                'question' => 'Si vous aviez une entreprise, vous trouveriez difficile de licencier des employés loyaux mais qui n’atteignent pas leurs objectifs.',
            ],
            [
                'question' => 'Vous réfléchissez souvent aux raisons de l’existence humaine.',
            ],
            [
                'question' => 'La logique est généralement plus importante que les sentiments lorsqu’il s’agit de prendre des décisions importantes.',
            ],
            [
                'question' => 'Il est plus important de maintenir un choix de possibilités ouvert plutôt que d’avoir une liste de choses à faire.',
            ],
            [
                'question' => 'Si vos amis sont vraiment tristes à propos d’une situation, vous êtes plus susceptible de leur offrir un soutien émotionnel que de leur suggérer des solutions au problème.',
            ],
            [
                'question' => 'Vous vous sentez rarement inquiet(-ète).',
            ],
            [
                'question' => 'Vous n’avez aucune difficulté à établir un programme personnel et à vous y tenir.',
            ],
            [
                'question' => 'En travail d’équipe, il est plus important d’avoir raison que d’être coopératif.',
            ],
            [
                'question' => 'Vous pensez que les opinions de tous doivent être respectées, indépendamment du fait qu’elles soient justifiées ou non par des faits.',
            ],
            [
                'question' => 'Votre énergie est multipliée si vous avez passé du temps avec un groupe.',
            ],
            [
                'question' => 'Vous perdez fréquemment vos affaires.',
            ],
            [
                'question' => 'Vous vous considérez comme très stable au niveau émotionnel.',
            ],
            [
                'question' => 'Votre esprit regorge constamment d’idées et de plans à explorer.',
            ],
            [
                'question' => 'Vous ne vous considérez pas comme un rêveur / une rêveuse.',
            ],
            [
                'question' => 'Vous avez des difficultés à vous détendre lorsque vous parlez devant de nombreuses personnes.',
            ],
            [
                'question' => 'Généralement, vous vous fiez davantage à votre expérience qu’à votre imagination.',
            ],
            [
                'question' => 'Vous vous souciez trop de ce que pensent les gens.',
            ],
            [
                'question' => 'Si la pièce est remplie de monde, vous restez près des murs et évitez le centre.',
            ],
            [
                'question' => 'Vous avez tendance à tout remettre à plus tard jusqu’à ce qu’il ne reste plus assez de temps pour tout faire.',
            ],
            [
                'question' => 'Vous vous sentez très anxieux(-se) dans les situations stressantes.',
            ],
            [
                'question' => 'Vous croyez qu’il est plus gratifiant d’être apprécié(e) par les autres que d’être puissant(e).',
            ],

            [
                'question' => 'Vous avez toujours été intéressé(e) par les sujets ambigus et atypiques (par ex. : livres, art, films indépendants).',
            ],

            [
                'question' => 'Vous prenez souvent l’initiative dans les situations sociales.',
            ],

        ];


        foreach($questions as $question)
        {
            DB::table('questions')->insert([
                'question' => $question['question'],
            ]);
        }
    }
}
