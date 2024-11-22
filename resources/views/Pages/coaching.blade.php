@extends('Layouts.container')

@section('meta')
    <meta name="title" content="Said Rahati Massothérapeute Et Coach Sportif | Séances De Coaching">
    <meta name="description" content="Découvrez les différents types de séances de coaching sportif proposées par Said Rahati. Améliorez votre condition physique et bien-être grâce à des séances personnalisées adaptées à vos besoins.">
    <meta name="keywords" content="Coaching sportif, Coach sportif personnalisé, Said Rahati coach sportif, Séances de coaching sportif, Améliorer sa condition physique, Bien-être et fitness, Entraînement personnalisé, Coaching pour remise en forme, Plan d’entraînement sur mesure, Coaching perte de poids, Entraînement pour prise de masse, Coaching sportif professionnel, Programme fitness personnalisé, Coach sportif en ligne, Transformation physique avec un coach, Entraînement cardio et musculaire, Plan de remise en forme efficace">
    <meta property="og:title"content="Said Rahati Massothérapeute Et Coach Sportif | Séances De Coaching">
    <meta property="og:description" content="Découvrez les différents types de séances de coaching sportif proposées par Said Rahati. Améliorez votre condition physique et bien-être grâce à des séances personnalisées adaptées à vos besoins.">
    <meta name="twitter:title"content="Said Rahati Massothérapeute Et Coach Sportif | Séances De Coaching">
    <meta name="twitter:description" content="Découvrez les différents types de séances de coaching sportif proposées par Said Rahati. Améliorez votre condition physique et bien-être grâce à des séances personnalisées adaptées à vos besoins.">
@endsection

@section('title', 'Coaching')

@section('content')
    <main class="w-full mt-[15vh] min-h-[150vh] bg-CoachingBg bg-no-repeat bg-center bg-cover relative xs:min-h-[40vh] xs:mt-[6vh] sm:min-h-[60vh] sm:mt-[10vh] md:mt-[15vh] md:min-h-[70vh] lg:min-h-[80vh] xl:min-h-[100vh]">
        <div class="w-full h-full bg-black bg-opacity-30 absolute z-[1]">
        </div>
    </main>
    <section id="perte-poids" class="w-full pt-1 pb-20 xs:pb-5 xs:min-h-[50vh] md:mt-[5vh]">
        <div class="w-5/6 mx-auto">
            <h1 class="font-[300] text-6xl mt-10 xs:text-xs xs:mb-14 md:text-2xl lg:text-3xl">Coaching</h1>
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-x-8 xs:my-5 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">La perte du poids</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Absolument ! La perte de poids durable repose sur de saines habitudes plutôt que sur des régimes extrêmes. Voici quelques conseils pour vous aider dans cette démarche :
                        <ul class="list-decimal">
                            <li><strong>Privilégier les aliments naturels et variés :</strong> Optez pour des fruits, légumes, protéines maigres, grains entiers et bonnes graisses. Une alimentation équilibrée aide à contrôler l'appétit et fournit les nutriments nécessaires.</li>

                            <li><strong>Réduire les portions et éviter le grignotage :</strong> La gestion des portions permet de consommer moins de calories sans s'en rendre compte. Choisir des collations saines comme des noix ou des fruits peut aussi aider à éviter les fringales.</li>

                            <li><strong>Rester actif :</strong> L'exercice augmente la dépense calorique et favorise le bien-être. Trouver une activité qui plaît (danse, natation, marche, etc.) aide à s’y tenir régulièrement.</li>

                            <li><strong>Fixer des objectifs réalisables :</strong> Des objectifs progressifs, comme perdre un à deux kilos par mois, sont plus durables et permettent de ne pas s’épuiser.</li>

                            <li><strong>Bien dormir et gérer le stress :</strong> Le sommeil et le stress impactent la faim et la prise de poids, donc prendre soin de son équilibre psychologique est essentiel.</li>
                        </ul>
                    </p>
                    <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="prise-masse" class="w-full pt-1 bg-[#f5fafd] pb-20 xs:pb-5 xs:min-h-[50vh]">
        <div class="w-5/6 mx-auto">
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-x-8 xs:my-5 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl">Prise de masse</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Pour réussir une prise de masse musculaire, plusieurs éléments clés sont nécessaires :
                        <ul class="list-decimal">
                            <li><strong>Programme d'entraînement :</strong> L'entraînement en résistance, comme la musculation, est primordial pour stimuler la croissance musculaire. Un programme structuré et progressif, incluant des exercices polyarticulaires (squats, développé couché, tractions, etc.), est recommandé. L'objectif est d'augmenter progressivement les charges ou le volume d'entraînement pour créer une surcharge progressive.</li>

                            <li><strong>Apport calorique :</strong> La prise de masse exige un surplus calorique, c'est-à-dire consommer plus de calories que le corps n'en dépense. Cet excédent permet au corps de disposer de l'énergie nécessaire pour construire de nouveaux tissus musculaires.</li>

                            <li><strong>Protéines :</strong> Les protéines jouent un rôle fondamental dans la réparation et la croissance des muscles. Il est conseillé d'en consommer entre 1,6 et 2,2 g par kilo de poids corporel par jour, réparties tout au long de la journée.</li>

                            <li><strong>Glucides et lipides :</strong> Les glucides fournissent de l’énergie pour l’entraînement et la récupération, tandis que les lipides contribuent à la santé hormonale. Les deux sont essentiels pour une prise de masse réussie.</li>

                            <li><strong>Repos et récupération :</strong> Le muscle se construit pendant le repos, notamment durant le sommeil. Dormir suffisamment et laisser des jours de repos entre les séances d'entraînement intense sont cruciaux pour éviter le surentraînement et favoriser la croissance musculaire.</li>

                            <li><strong>Suivi et adaptation :</strong> Ajuster régulièrement son programme alimentaire et d'entraînement selon les progrès réalisés permet de continuer à progresser. Un suivi des mensurations, du poids, et de la force peut être utile pour évaluer l’efficacité du plan de prise de masse.</li>
                        </ul>
                    </p>
                    <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="remise-forme" class="w-full pt-1 pb-20 xs:pb-5 xs:min-h-[50vh]">
        <div class="w-5/6 mx-auto">
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-x-8 xs:my-5 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">La remise en forme</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">La remise en forme consiste à améliorer progressivement sa condition physique et son bien-être général. Voici les étapes clés pour une approche complète :
                        <ul class="list-decimal">
                            <li><strong>Définir ses objectifs :</strong> Avant de commencer, il est essentiel d'identifier ses objectifs perte de poids, gain de force, amélioration de l'endurance, etc. afin d'orienter le programme de manière efficace.</li>

                            <li><strong>Évaluer sa condition physique :</strong> Évaluer son niveau de départ permet de définir l'intensité des exercices et d'adapter le programme à ses capacités.</li>

                            <li><strong>Exercices cardiovasculaires :</strong> Intégrer des activités cardio comme la marche rapide, la course, le vélo ou la natation aide à renforcer le système cardiovasculaire, brûler des calories et améliorer l’endurance.</li>

                            <li><strong>Renforcement musculaire :</strong> Les exercices de renforcement comme les squats, pompes, ou exercices avec haltères permettent d'améliorer la force et le tonus musculaire, ce qui contribue à un corps plus ferme et plus résistant.</li>

                            <li><strong>Flexibilité et mobilité :</strong> Les exercices d’étirement, de yoga ou de Pilates améliorent la souplesse et la mobilité, réduisant les risques de blessures et facilitant les mouvements au quotidien.</li>

                            <li><strong>Régularité et progression :</strong> La constance est clé pour obtenir des résultats durables. Il est conseillé de pratiquer plusieurs séances hebdomadaires et d'augmenter progressivement l’intensité et la difficulté.</li>

                            <li><strong>Repos et récupération :</strong> Le repos est essentiel pour permettre aux muscles de récupérer et au corps de se régénérer. Intégrer des jours de repos favorise les progrès sans risque de surentraînement.</li>

                            <li><strong>Suivi et adaptation :</strong> Suivre ses progrès et ajuster le programme en fonction des résultats permet de rester motivé et de continuer à progresser vers ses objectifs.</li>
                        </ul>
                    </p>
                    <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('json')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Said Rahati",
        "description": "Découvrez les différents types de séances de coaching sportif proposées par Said Rahati. Améliorez votre condition physique et bien-être grâce à des séances personnalisées adaptées à vos besoins.",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('Images/Logo.webp') }}",
        "image": "{{ asset('Images/À propos Pic.webp') }}",
        "telephone": "+212 661‑366383",
        "sameAs": [
            "https://web.facebook.com/said.rahati",
            "https://www.instagram.com/saidrahati",
        ]
        }
    </script>
@endsection
