<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            ['title' => 'Curiosidades sobre Dragon Ball',
            'slug' => 'curiosidades-sobre-dragon-ball',
            'excerpt' =>'Explora el icónico universo de Dragon Ball, desde las raíces de la serie en la mitología china hasta su evolución en una franquicia global. Descubre cómo las artes marciales y la búsqueda de automejoramiento definen esta saga épica',
            'body' =>'Dragon Ball, más que un simple anime, es una obra que ha marcado a generaciones enteras. Desde las aventuras iniciales de un joven Goku en búsqueda de las místicas esferas del dragón, hasta los emocionantes combates en Dragon Ball Z, la serie ha evolucionado manteniendo su esencia. Uno de los aspectos más fascinantes es cómo Akira Toriyama mezcla elementos de la mitología tradicional china con un estilo de arte y narrativa moderna, creando un universo único y lleno de personajes memorables.
            <br><br>En el mundo de Dragon Ball, las artes marciales toman un papel central, representando no solo la fuerza física, sino también el crecimiento interior y la búsqueda constante del automejoramiento. La serie ha trascendido más allá de la pantalla, inspirando cómics, videojuegos y una vasta gama de productos, convirtiéndose en un icono cultural global. Cada saga introduce nuevos desafíos y personajes, manteniendo a la audiencia siempre enganchada y expectante de lo que vendrá.'
            ],
            ['title' => 'Datos interesantes de Berserk',
            'slug' => 'datos-interesantes-de-berserk',
            'excerpt' =>'Sumérgete en el mundo oscuro y detallado de Berserk, una obra maestra del manga que profundiza en temas de soledad y desesperación a través del viaje de Guts. Conoce cómo este manga ha influenciado a generaciones y se ha convertido en un pilar del género de fantasía oscura.',
            'body' =>'Berserk, el oscuro y profundo manga creado por Kentaro Miura, es conocido por su narrativa intensa y su arte detallado. La historia sigue a Guts, un guerrero marcado por un trágico destino, y su lucha contra fuerzas sobrenaturales en un mundo medieval implacable. Lo que hace a Berserk especialmente intrigante es su exploración de temas como la soledad, la desesperación y la lucha por encontrar sentido en un mundo cruel y caótico.
            <br><br>El estilo de Miura es excepcionalmente detallado, dando vida a un mundo oscuro y aterrador lleno de monstruos y entidades malignas. La serie no solo es una exhibición de combates brutales y acción desenfrenada, sino que también profundiza en la psicología de sus personajes, haciendo que el lector se involucre emocionalmente en su viaje. Berserk ha influenciado a numerosos creadores de juegos, cómics y películas, y continúa siendo un referente en el género de fantasía oscura.'
            ],
            ['title' => 'Análisis profundo de One Piece',
            'slug' => 'analisis-profundo-de-one-piece',
            'excerpt' =>'One Piece no es solo una historia de piratas, sino un viaje épico que explora la libertad, la amistad y los sueños. Descubre el vasto y diverso mundo creado por Eiichiro Oda y cómo ha capturado los corazones de fans en todo el mundo.',
            'body' =>'One Piece no es solo una serie de aventuras sobre piratas; es una exploración de la libertad, la amistad y la búsqueda de un sueño. Creado por Eiichiro Oda, One Piece nos lleva al viaje de Monkey D. Luffy y su tripulación en busca del tesoro legendario del mismo nombre. A lo largo de su viaje, se encuentran con diversas culturas, gobiernos corruptos y otros piratas, entrelazando historias llenas de emoción, humor y drama.
            <br><br>Lo que distingue a One Piece es su mundo increíblemente vasto y detallado, lleno de islas únicas, cada una con su propia cultura y ecosistema. Oda ha creado un universo donde cada personaje, incluso los secundarios, tiene una historia que contar. Las batallas épicas, acompañadas de momentos emotivos y lecciones de vida, han capturado los corazones de millones de fans en todo el mundo, convirtiendo a One Piece en una de las series de manga y anime más exitosas de todos los tiempos.'
            ],

            ['title' => 'Saint Seiya y su impacto cultural',
            'slug' => 'saint-seiya-y-su-impacto-cultural',
            'excerpt' =>'Descubre el impacto cultural de Saint Seiya, una serie que combina mitología, constelaciones y artes marciales para crear una narrativa única. Este análisis explora su influencia en el género del anime y su legado duradero entre los aficionados.',
            'body' =>'Saint Seiya, conocido en Occidente como Los Caballeros del Zodiaco, ha dejado una marca indeleble en el mundo del anime y el manga. Esta serie, creada por Masami Kurumada, se destaca por su innovadora combinación de mitología griega, leyendas de constelaciones y emocionantes batallas de artes marciales. Cada caballero, representando una constelación diferente, lucha defendiendo sus ideales y la justicia, enfrentando poderosos adversarios y dioses antiguos en su camino.
            <br><br>Además de su emocionante trama, Saint Seiya se ha destacado por su impactante banda sonora y un diseño de personajes que ha trascendido generaciones. La serie no solo ha inspirado numerosas adaptaciones y spin-offs, sino que también ha influenciado a otros creadores en el género del anime. Con temas de amistad, sacrificio y resiliencia, Saint Seiya continúa siendo una obra fundamental para entender la evolución del anime a nivel global.'
            ],

            ['title' => 'Explorando el mundo de Shingeki no Kyojin',
            'slug' => 'explorando-el-mundo-de-shingeki-no-kyojin',
            'excerpt' =>'Profundiza en el fascinante mundo de Shingeki no Kyojin, donde la lucha por la supervivencia se entrelaza con secretos y traiciones. Este resumen destaca las temáticas clave y la complejidad narrativa que han hecho de esta serie un fenómeno global.',
            'body' =>'Shingeki no Kyojin, conocido internacionalmente como Attack on Titan, es una obra que ha revolucionado el mundo del anime y manga con su historia oscura y compleja creada por Hajime Isayama. La serie narra la lucha de la humanidad contra los titanes, criaturas gigantes que han llevado a los humanos al borde de la extinción. Lo que inicialmente parece ser una simple batalla por la supervivencia se convierte en una intrincada red de secretos, traiciones y revelaciones impactantes sobre la verdadera naturaleza del mundo y los titanes.
            <br><br>Lo que hace a Shingeki no Kyojin particularmente cautivante es su habilidad para mezclar acción intensa, desarrollo profundo de personajes y temas filosóficos sobre libertad, opresión y la naturaleza humana. La serie desafía constantemente a sus personajes y a los espectadores con dilemas morales y decisiones difíciles, lo que ha generado amplios debates y análisis entre su audiencia. A medida que avanza la trama, se desvelan las capas de su rica narrativa, manteniendo a los espectadores en constante anticipación y asombro.'
            ]
        ];

        foreach ($topics as $topic) {
            Post::create([
                'title' => $topic['title'],
                'slug' => $topic['slug'],
                'excerpt' => $topic['excerpt'],
                'body' => $topic['body'],
                'published' => true,
                'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
                'user_id' => \App\Models\User::inRandomOrder()->first()->id
            ]);
        }
    }
}
