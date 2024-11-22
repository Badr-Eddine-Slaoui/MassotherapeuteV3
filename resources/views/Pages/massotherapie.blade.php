@extends('Layouts.container')

@section('meta')
    <meta name="title" content="Said Rahati Massothérapeute Et Coach Sportif | Massothérapie">
    <meta name="description" content="Découvrez nos massages thérapeutiques, relaxants, sportifs, et anti-stress pour soulager les tensions, améliorer la circulation et favoriser la détente. Réservez une séance avec Said Rahati Massothérapie.">
    <meta name="keywords" content="Massothérapie, Said Rahati massothérapeute, Massage thérapeutique, Massage relaxant, Massage sportif, Massage anti-stress, Soulager les tensions, Améliorer la circulation sanguine, Détente et relaxation, Réserver une séance de massage, Thérapie par le massage, Bienfaits de la massothérapie, Techniques de massage, Réduction stress par le massage, Massage pour douleurs musculaires, Massage pour récupération sportive, Massothérapie professionnelle">
    <meta property="og:title"content="Said Rahati Massothérapeute Et Coach Sportif | Massothérapie">
    <meta property="og:description" content="Découvrez nos massages thérapeutiques, relaxants, sportifs, et anti-stress pour soulager les tensions, améliorer la circulation et favoriser la détente. Réservez une séance avec Said Rahati Massothérapie.">
    <meta name="twitter:title"content="Said Rahati Massothérapeute Et Coach Sportif | Massothérapie">
    <meta name="twitter:description" content="Découvrez nos massages thérapeutiques, relaxants, sportifs, et anti-stress pour soulager les tensions, améliorer la circulation et favoriser la détente. Réservez une séance avec Said Rahati Massothérapie.">
@endsection

@section('title', 'Massothérapie')

@section('content')
    <main class="w-full mt-[15vh] min-h-[150vh] bg-MassotherapieBg bg-no-repeat bg-center bg-cover relative xs:min-h-[40vh] xs:mt-[6vh] sm:min-h-[60vh] sm:mt-[10vh] md:mt-[15vh] md:min-h-[70vh] lg:min-h-[80vh] xl:min-h-[100vh]">
        <div class="w-full h-full bg-black bg-opacity-30 absolute z-[1]">
        </div>
    </main>
    <section id="massage-thérapeutique " class="w-full pt-1 mt-[15vh] pb-20 xs:pb-5 xs:min-h-[50vh] xs:mt-[6vh] sm:mt-[10vh] md:mt-[15vh]">
        <div class="w-5/6 mx-auto">
            <h1 class="font-[300] text-6xl mt-10 xs:text-xs xs:mb-14 md:text-2xl lg:text-3xl">Massothérapie</h1>
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-y-32 gap-x-8 xs:my-5 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">Massage thérapeutique</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage thérapeutique est une technique manuelle visant à améliorer la santé et le bien-être global en traitant des zones spécifiques du corps. Il combine des gestes précis tels que l’effleurage, le pétrissage, les frictions, les percussions et les vibrations, permettant d’agir directement sur les muscles, les tendons, les ligaments et les fascias. Cette approche est particulièrement efficace pour soulager les douleurs musculaires chroniques, les tensions accumulées, les contractures, ainsi que pour réduire les inflammations locales.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Grâce à son action en profondeur, le massage thérapeutique stimule la circulation sanguine et lymphatique, favorisant ainsi une meilleure oxygénation des tissus et une élimination rapide des toxines. Il contribue également à l'amélioration de la souplesse articulaire et musculaire, ce qui est essentiel pour les personnes souffrant de rigidité ou récupérant après une blessure ou un effort physique intense.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">En plus de ses bienfaits physiques, ce type de massage joue un rôle significatif dans la réduction du stress et de l’anxiété, favorisant un état de relaxation profonde et un équilibre corporel et mental. Il est cependant crucial de consulter un praticien qualifié pour évaluer vos besoins spécifiques et adapter les techniques employées à votre condition, qu’il s’agisse de douleurs localisées, de troubles musculo-squelettiques ou de simples tensions liées au mode de vie. Le massage thérapeutique constitue ainsi un outil précieux pour améliorer la qualité de vie de manière naturelle et personnalisée.</p>
                    <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="massage-relaxant" class="w-full pt-1 bg-[#f5fafd] pb-20 xs:pb-5 xs:min-h-[50vh]">
        <div class="w-5/6 mx-auto">
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-x-8 xs:my-5 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl">Massage relaxant</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage relaxant est une pratique douce et apaisante qui vise à procurer une profonde sensation de bien-être, tant physique que mental. Il repose sur des mouvements fluides et harmonieux tels que l’effleurage, le pétrissage, les pressions légères et les étirements, effectués avec un rythme lent et régulier. Ces techniques permettent de relâcher les tensions musculaires accumulées, d'apaiser les douleurs légères et de stimuler la circulation sanguine, favorisant ainsi une meilleure oxygénation des tissus et l’élimination des toxines.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Ce type de massage est idéal pour réduire le stress et l’anxiété, en aidant le corps et l’esprit à atteindre un état de relaxation profonde. Il agit également sur le système nerveux en diminuant la production de cortisol, l’hormone du stress, et en favorisant la libération d’endorphines, les hormones du bien-être.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">En plus de ses bienfaits immédiats, le massage relaxant contribue à améliorer la qualité du sommeil, à renforcer le système immunitaire et à rétablir un équilibre émotionnel. Il s’adresse à toutes les personnes souhaitant s’accorder un moment de détente et de soin, dans un cadre calme et serein. Réalisé par un professionnel, ce massage constitue une véritable pause bien-être, permettant de retrouver énergie et sérénité au quotidien.</p>
                    <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="massage-sportif" class="w-full pt-1 pb-20 xs:pb-5 xs:min-h-[50vh]">
        <div class="w-5/6 mx-auto">
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-y-32 gap-x-8 xs:my-5 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">Massage sportif</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage sportif est une pratique spécifiquement adaptée aux besoins des sportifs, qu’ils soient amateurs ou professionnels, pour optimiser leurs performances physiques et leur récupération. Il utilise des techniques ciblées et dynamiques, comme le pétrissage, les frictions profondes, les étirements et les percussions, qui sont ajustées en fonction des objectifs du moment : préparation à l’effort, récupération ou rééducation.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Avant une activité physique, le massage sportif prépare le corps en améliorant la circulation sanguine, en augmentant la souplesse des muscles et en échauffant les tissus. Cette préparation réduit les risques de blessures et améliore les capacités musculaires pendant l’effort. Après l’exercice, il contribue à éliminer les toxines accumulées, comme l'acide lactique, tout en apaisant les tensions et les douleurs musculo-articulaires liées à une activité intense.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Ce type de massage est également efficace pour accélérer la récupération en réduisant les courbatures, les crampes et les contractures musculaires. En maintenant la souplesse des muscles et la mobilité des articulations, il prévient les blessures à long terme et améliore la capacité du corps à gérer des efforts répétés.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage sportif s’intègre parfaitement dans une routine d’entraînement et s’adresse aussi bien aux sportifs avant ou après une compétition qu’aux personnes actives souhaitant préserver leur corps en bonne santé. Réalisé par un massothérapeute qualifié, il contribue à améliorer les performances physiques, tout en offrant un moment de soin et de prévention essentiel pour les athlètes.</p>
                    <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="massage-anti-stress" class="w-full pt-1 bg-[#f5fafd] pb-20 xs:pb-5 xs:min-h-[50vh]">
        <div class="w-5/6 mx-auto">
            <div class="w-full grid grid-rows-1 grid-cols-1 gap-x-8 xs:my-5 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-1 md:my-32">
                <div>
                    <p class="text-4xl font-semibold mb-5 xs:text-xs sm:text-xl md:text-xl">Massage anti-stress (Trigger Point)</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage anti-stress (Trigger Point) est une technique spécialisée qui se concentre sur les points de tension localisés dans les muscles, également appelés « points gâchettes ». Ces zones de tension sont souvent responsables de douleurs musculaires persistantes, de raideurs ou de sensations d’inconfort irradiant dans d'autres parties du corps.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Ce type de massage utilise des pressions ciblées et soutenues, appliquées directement sur les points de tension, afin de dénouer les « nœuds » musculaires profonds. Ces tensions accumulées, souvent causées par le stress, une mauvaise posture ou un effort physique excessif, peuvent engendrer des douleurs chroniques ou des restrictions de mobilité. En relâchant ces points spécifiques, le massage Trigger Point permet de restaurer la souplesse musculaire et de réduire significativement les douleurs articulaires et musculaires.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">En plus de ses effets thérapeutiques, ce massage offre une détente profonde et aide à réduire considérablement le stress. Il agit également sur le système nerveux en apaisant les tensions psychologiques, ce qui favorise un bien-être global. Adapté aux personnes sujettes à des douleurs chroniques, à des troubles liés au stress ou simplement à un besoin de relaxation intense, le massage anti-stress est une méthode efficace pour rééquilibrer le corps et l’esprit.</p>
                    <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Réalisé par un professionnel expérimenté, il s’inscrit parfaitement dans une démarche de soin visant à améliorer la qualité de vie et à retrouver un état de sérénité durable.</p>
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
        "description": "Découvrez nos massages thérapeutiques, relaxants, sportifs, et anti-stress pour soulager les tensions, améliorer la circulation et favoriser la détente. Réservez une séance avec Said Rahati Massothérapie.",
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
