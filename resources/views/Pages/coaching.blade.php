<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Said Rahati - Coaching</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <header class="h-[15vh] bg-white flex items-center justify-between px-20 py-10 fixed top-0 left-0 z-[2] shadow-center-gray xs:px-4 xs:py-0 xs:h-[6vh] sm:px-12 sm:h-[10vh] md:h-[15vh] md:px-16">
            <div class="w-1/5">
                <a href="{{ route('home') }}"><img class="w-full" src="{{ asset('Images/Logo.png') }}" alt="Logo"></a>
            </div>
            <nav class="w-2/5 xs:w-8/12 sm:w-4/6 md:w-8/12 lg:w-7/12 xl:w-5/12">
                <ul class="ms-auto flex justify-between items-center">
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('home') }}">Accueil</a></li>
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4] xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('coaching') }}">Coaching</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('massotherapie') }}">massothérapie</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
        <section id="perte-poids" class="w-full pt-1 mt-[15vh] pb-20 xs:pb-5 xs:min-h-[50vh] xs:mt-[6vh] sm:mt-[10vh] md:mt-[15vh]">
            <div class="w-5/6 mx-auto">
                <h1 class="font-[300] text-6xl mt-10 xs:text-xs xs:mb-14 md:text-2xl lg:text-3xl">Coaching</h1>
                <div class="w-full grid grid-rows-1 grid-cols-2 gap-y-32 gap-x-8 xs:my-5 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-2 md:my-32">
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
                    <div class="flex items-center">
                        <img class="shadow-center-gray mx-auto xs:w-9/12 sm:w-full" src="{{ asset('Images/coaching-1.jpg') }}" alt="La perte du poids image">
                    </div>
                </div>
            </div>
        </section>
        <section id="prise-masse" class="w-full pt-1 bg-[#f5fafd] pb-20 xs:pb-5 xs:min-h-[50vh]">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 gap-x-8 xs:my-5 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-2 md:my-32">
                    <div class="flex items-center">
                        <img class="shadow-center-gray mx-auto xs:w-9/12 sm:w-full" src="{{ asset('Images/coaching-2.jpg') }}" alt="Prise de masse image">
                    </div>
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
                <div class="w-full grid grid-rows-1 grid-cols-2 gap-y-32 gap-x-8 xs:my-5 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-2 md:my-32">
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
                    <div class="flex items-center">
                        <img class="shadow-center-gray mx-auto xs:w-9/12 sm:w-full" src="{{ asset('Images/coaching-1.jpg') }}" alt="La remise en forme image">
                    </div>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-screen mx-auto flex justify-center items-center py-5 bg-[#0d678f]">
            <div class="w-11/12 grid grid-rows-1 grid-cols-1">
                <div class="w-full bg-white flex xs:block sm:flex md:flex">
                    <div class="w-1/6 bg-[#03a9f4] flex justify-center items-center xs:w-full xs:pt-5 sm:w-2/6 sm:pt-0 md:w-2/6 md:w-pt-0">
                        <div class="text-white text-center">
                            <p class="text-[20px] uppercase font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[18px]">Contact direct</p>
                            <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-regular fa-envelope flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                            <p class="text-[20px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[18px]">Je suis à votre disposition</p>
                            <div class="grid grid-rows-1 grid-cols-3">
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-linkedin flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-instagram flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-facebook flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                            </div>
                        </div>
                    </div>
                    <form class="w-5/6 grid grid-cols-1 grid-rows-1 gap-10 p-10 xs:w-full sm:w-4/6 sm:p-2 md:w-5/6 md:p-5" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="nom">Nom <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" placeholder="Par exemple : Jean" id="nom" name="nom" type="text" value="{{ old('nom') }}">
                            @error('nom')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="email">Adresse de messagerie  <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" placeholder="Par exemple : jacques@martin.com" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="tele">Numéro de téléphone <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" placeholder="Par exemple : +1 02 03 04 05" id="tele" name="tele" type="tel" value="{{ old('tele') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[18px] font-semibold mb-4 xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="message">Message <span class=" text-red-600">*</span></label>
                            <textarea class="text-black border-b border-black focus:outline-0 px-4 py-1 resize-none xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" name="message" id="message" cols="30" rows="5" maxlength="180" placeholder="Saisissez votre message…">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <input class="text-white uppercase bg-[#03a9f4] px-8 py-4 block m-auto cursor-pointer hover:bg-cyan-700 xs:text-[10px] xs:px-5 xs:py-2 sm:text-[10px] sm:px-4 sm:py-2 md:text-[12px] md:px-5 md:py-2" type="submit" value="Envoyer le message">
                    </form>
                </div>
            </div>
        </footer>
        @if (session()->has('success'))
            <div id="alert" class="w-1/4 h-[8vh] items-center z-20 fixed right-10 bottom-8 bg-green-600 text-white font-bold rounded-md xs:w-1/2 xs:right-3 xs:h-[7vh] sm:w-2/5 sm:right-5 md:w-2/5 md:right-8 lg:w-1/4">
                <p class="ms-5">{{ session('success') }}</p>
                <div class="alert-time-bar w-full bg-white opacity-50 h-2 absolute bottom-0 rounded-bl-3xl xs:h-1"></div>
            </div>
        @endif
    </body>
</html>
