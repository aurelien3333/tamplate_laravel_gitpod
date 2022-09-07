<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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


        $qestions =
        [
            [
                'quesiton' => 'Vous avez des difficultés à vous présenter à d’autres personnes.',
            ],
            [
                'quesiton' => 'Vous êtes souvent si perdu(e) dans vos pensées que vous ignorez ou oubliez votre entourage.',
            ],
            [
                'quesiton' => 'Vous essayez de répondre dès que possible à vos e-mails et ne supportez pas d’avoir une boîte de messagerie mal organisée.'
            ],
            [
                'quesiton' => 'Vous essayez de répondre dès que possible à vos e-mails et ne supportez pas d’avoir une boîte de messagerie mal organisée.',
            ],
            [
                'quesiton' => 'Vous avez des facilités à rester serein(e) et concentré(e), même lorsque certaines situations donnent lieu à une certaine pression.',
            ],
            [
                'quesiton' => 'Habituellement, vous ne lancez pas les conversations.',
            ],
            [
                'quesiton' => 'Vous entreprenez rarement des actions par simple curiosité.',
            ],
            [
                'quesiton' => 'Vous vous sentez supérieur(e) aux autres.',
            ],
            [
                'quesiton' => 'Pour vous, être organisé(e) est plus important qu’être flexible.',
            ],
            [
                'quesiton' => 'Vous êtes généralement très motivé(e) et plein(e) d’énergie.',
            ],
            [
                'quesiton' => 'Gagner un débat vous importe moins que d’avoir la certitude que personne n’est contrarié.',
            ],
            [
                'quesiton' => 'Vous avez souvent l’impression de devoir vous justifier auprès de vos pairs.',
            ],
            [
                'quesiton' => 'Au travail et au domicile, votre environnement de vie est assez ordonné.',
            ],
            [
                'quesiton' => 'Cela ne vous dérange pas d’être le centre de l’attention.',
            ],
            [
                'quesiton' => 'Vous considérez votre esprit comme plus pratique que créatif.',
            ],
            [
                'quesiton' => 'Les gens peuvent rarement vous contrarier.',
            ],
            [
                'quesiton' => 'Vos itinéraires de voyage sont généralement planifiés à l’avance.',
            ],
            [
                'quesiton' => 'Vous avez des difficultés à ressentir de l’empathie pour les sentiments des autres.',
            ],
            [
                'quesiton' => 'Votre humeur peut changer très rapidement.',
            ],
            [
                'quesiton' => 'Au cours d’une discussion, la vérité doit passer avant la susceptibilité de chacun.',
            ],
            [
                'quesiton' => 'Vous vous inquiétez rarement des conséquences de vos actions sur vos pairs.',
            ],
            [
                'quesiton' => 'otre style de travail s’approche plus de pics d’énergie aléatoires que d’une approche méthodique et organisée.',
            ],
            [
                'quesiton' => 'Vous êtes souvent envieux(-se) des autres.',
            ],
            [
                'quesiton' => 'Un livre ou un jeu vidéo de qualité sont souvent mieux qu’une soirée mondaine.',
            ],
            [
                'quesiton' => 'Être capable de développer un plan et de s’y tenir est la partie la plus importante de chaque projet.',
            ],
            [
                'quesiton' => 'Vous ne vous laissez distraire que rarement par vos rêves et pensées.',
            ],
            [
                'quesiton' => 'Vous êtes souvent perdu(e) dans vos pensées lorsque vous marchez dans la nature.',
            ],
            [
                'quesiton' => 'Si quelqu’un ne répond pas rapidement à votre e-mail, vous vous inquiétez et vous demandez si vous avez dit quelque chose de mal.',
            ],
            [
                'quesiton' => 'En tant que parent, vous préféreriez voir votre enfant devenir gentil plutôt qu’intelligent.',
            ],
            [
                'quesiton' => 'Vous ne laissez pas les autres influencer vos actions.',
            ],
            [
                'quesiton' => 'Vos rêves ont tendance à se concentrer sur le monde réel et ses événements.',
            ],
            [
                'quesiton' => 'Il vous faut peu de temps pour vous impliquer dans les activités sociales de votre nouveau lieu de travail.',
            ],
            [
                'quesiton' => 'Vous êtes plus du genre à improviser naturellement qu’à tout planifier minutieusement.',
            ],
            [
                'quesiton' => 'Vos émotions vous contrôlent plus que vous ne les contrôlez.',
            ],
            [
                'quesiton' => 'Vous appréciez d’aller à des soirées déguisées ou de participer à des jeux de rôle.',
            ],
            [
                'quesiton' => 'Vous passez souvent du temps à explorer des idées irréalistes et irréalisables, mais aussi intriguantes.',
            ],
            [
                'quesiton' => 'Vous préféreriez improviser que passer de temps sur la construction d’un plan détaillé.',
            ],
            [
                'quesiton' => 'Vous êtes une personne relativement calme et réservée.',
            ],
            [
                'quesiton' => 'Si vous aviez une entreprise, vous trouveriez difficile de licencier des employés loyaux mais qui n’atteignent pas leurs objectifs.',
            ],
            [
                'quesiton' => 'Vous réfléchissez souvent aux raisons de l’existence humaine.',
            ],
            [
                'quesiton' => 'La logique est généralement plus importante que les sentiments lorsqu’il s’agit de prendre des décisions importantes.',
            ],
            [
                'quesiton' => 'Il est plus important de maintenir un choix de possibilités ouvert plutôt que d’avoir une liste de choses à faire.',
            ],
            [
                'quesiton' => 'Si vos amis sont vraiment tristes à propos d’une situation, vous êtes plus susceptible de leur offrir un soutien émotionnel que de leur suggérer des solutions au problème.',
            ],
            [
                'quesiton' => 'Vous vous sentez rarement inquiet(-ète).',
            ],
            [
                'quesiton' => 'Vous n’avez aucune difficulté à établir un programme personnel et à vous y tenir.',
            ],
            [
                'quesiton' => 'En travail d’équipe, il est plus important d’avoir raison que d’être coopératif.',
            ],
            [
                'quesiton' => 'Vous pensez que les opinions de tous doivent être respectées, indépendamment du fait qu’elles soient justifiées ou non par des faits.',
            ],
            [
                'quesiton' => 'Votre énergie est multipliée si vous avez passé du temps avec un groupe.',
            ],
            [
                'quesiton' => 'Vous perdez fréquemment vos affaires.',
            ],
            [
                'quesiton' => 'Vous vous considérez comme très stable au niveau émotionnel.',
            ],
            [
                'quesiton' => 'Votre esprit regorge constamment d’idées et de plans à explorer.',
            ],
            [
                'quesiton' => 'Vous ne vous considérez pas comme un rêveur / une rêveuse.',
            ],
            [
                'quesiton' => 'Vous avez des difficultés à vous détendre lorsque vous parlez devant de nombreuses personnes.',
            ],
            [
                'quesiton' => 'Généralement, vous vous fiez davantage à votre expérience qu’à votre imagination.',
            ],
            [
                'quesiton' => 'Vous vous souciez trop de ce que pensent les gens.',
            ],
            [
                'quesiton' => 'Si la pièce est remplie de monde, vous restez près des murs et évitez le centre.',
            ],
            [
                'quesiton' => 'Vous avez tendance à tout remettre à plus tard jusqu’à ce qu’il ne reste plus assez de temps pour tout faire.',
            ],
            [
                'quesiton' => 'Vous vous sentez très anxieux(-se) dans les situations stressantes.',
            ],
            [
                'quesiton' => 'Vous croyez qu’il est plus gratifiant d’être apprécié(e) par les autres que d’être puissant(e).',
            ],

            [
                'quesiton' => 'Vous avez toujours été intéressé(e) par les sujets ambigus et atypiques (par ex. : livres, art, films indépendants).',
            ],

            [
                'quesiton' => 'Vous prenez souvent l’initiative dans les situations sociales.',
            ],










        ];
    }
}
