<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>

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
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4] xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('home') }}">Accueil</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('coaching') }}">Coaching</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('massotherapie') }}">massothérapie</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
        <main class="w-full mt-[15vh] min-h-[150vh] bg-HomeBg bg-cover relative xs:min-h-[40vh] xs:mt-[6vh] sm:min-h-[60vh] sm:mt-[10vh] md:mt-[15vh] md:min-h-[70vh] lg:min-h-[80vh] xl:min-h-[100vh]">
            <div class="w-full h-full bg-black bg-opacity-50 absolute z-[1] flex items-center justify-center">
                <div class="text-white w-3/5 mx-auto text-center xs:w-8/12 sm:w-3/5 md:w-8/12 xl:w-3/5">
                    <div class="flex h-[35vh] mt-40 xs:h-[25vh] xs:mt-0 sm:h-[36vh] md:h-[35vh] md:mt-16">
                        <h1 class="text-[3.375em] w-2/3 font-[300] leading-[1.23] flex justify-center items-center xs:text-[0.8em] sm:text-[1.6em] md:text-[2em] lg:text-[3em]">MASSOTHÉRAPEUTE COACH SPORTIF</h1>
                        <div class="w-2/5 my-auto xs:w-full">
                            <button class="block mx-auto bg-[#03a9f4] py-3 px-7 text-[18px] rounded-full my-5 uppercase shadow-center xs:text-[7px] xs:py-1 xs:px-1 xs:my-2 sm:text-[11px] sm:py-1 sm:px-3 md:text-[14px] md:px-5 md:py-2 md:my-5 lg:text-[16px] lg:my-5"><a href="{{ route('massotherapie') }}">- massothérapie -</a></button>
                            <button class="block mx-auto border-2  border-white py-3 px-7 text-[18px] rounded-full my-5 uppercase shadow-center xs:text-[7px] xs:py-1 xs:px-1 xs:my-2 sm:text-[11px] sm:py-1 sm:px-3 md:text-[14px] md:px-5 md:py-2 md:my-5 lg:text-[16px] lg:my-5"><a href="{{ route('contact') }}">- contactez-nous -</a></button>
                        </div>
                    </div>
                    <h2 class="w-1/2 text-3xl font-[300] m-auto leading-[1.23] uppercase xs:text-xs xs:mt-0 sm:text-sm sm:mt-0 md:text-xl lg:text-3xl lg:mt-5">Said Rahati</h2>
                    <svg class="w-1/12 m-auto mt-20 mb-10 xs:mt-5 sm:mt-10 md:mt-14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map-marker" viewBox="0 0 512 545.5"><path fill="white" d="M256 80c79.336 0 144 64.664 144 144 0 22.5-9.116 48.313-21.5 76.5s-28.314 58.098-44.5 86C301.628 442.306 269 489 269 489l-13 19-13-19s-32.628-46.694-65-102.5c-16.186-27.902-32.116-57.813-44.5-86S112 246.5 112 224c0-79.336 64.664-144 144-144zm0 32c-62.04 0-112 49.96-112 112 0 12.844 6.884 37.06 18.5 63.5s27.686 55.738 43.5 83c25.155 43.364 40.74 66.3 50 80 9.26-13.7 24.845-36.636 50-80 15.815-27.262 31.884-56.56 43.5-83S368 236.844 368 224c0-62.04-49.96-112-112-112zm0 80c17.673 0 32 14.327 32 32s-14.327 32-32 32-32-14.327-32-32 14.327-32 32-32z"></path></svg>
                    <a href="#apropos"><i class="text-3xl mt-40 fa-solid fa-chevron-down animate-bounce-100 xs:text-xs xs:mt-0 sm:text-sm sm:mt-1 md:text-xl md:mt-2 lg:text-2xl lg:mt-3"></i></a>
                </div>
            </div>
        </main>
        <section id="apropos" class="w-4/5 my-10 mx-auto flex justify-center items-center py-20 xs:py-0 xs:min-h-[50vh] sm:min-h-[65vh] md:min-h-[80vh] lg:min-h-[95vh] xl:min-h-screen">
            <div class="w-full grid grid-rows-1 xs:grid-cols-1 sm:grid-cols-2">
                <div class="w-full rounded-xl p-20 shadow-center-gray text-justify xs:p-4 sm:w-[125%] sm:p-5 md:w-[120%] md:p-6 lg:p-16 xl:w-[110%]">
                    <p class="text-[18px] font-bold xs:text-[8px] sm:text-[12px] md:text-[16px]">À propos</p>
                    <p class="text-5xl my-5 font-[300] xs:text-xs sm:text-xl md:text-3xl lg:text-4xl">Said Rahati</p>
                    <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[8px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">Je suis diplômé et certifié dans les domaines du coaching, du fitness et de la thérapie, avec des qualifications reconnues obtenues en France, en Suisse et aux États-Unis. En 2000, j'ai reçu le Brevet d’État d’éducateur sportif en France et un diplôme de coaching et fitness de la FISAF en Suisse en 2002. En 2018, j’ai complété ma formation en préparation physique en Floride. Mon parcours en thérapie inclut un diplôme de l'Académie de Thérapie Esclarmonde (Suisse, 2006), et j’ai exercé comme thérapeute personnel chez Holmes Place de 2004 à 2014. J'ai également suivi une formation de golf à l’Académie SAWGRASS en Floride en 2018.</p>
                    <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[8px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">J'ai été champion national de body fitness en Suisse quatre fois entre 2001 et 2004, ainsi que champion national en couple en 2005. En compétitions internationales, j'ai remporté la 3ᵉ place au championnat d’Europe (Lausanne, 2003) et au championnat du monde de body fitness (Bâle, 2005).</p>
                    <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[8px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">Au cours de ma carrière, j'ai eu l'honneur de travailler avec de nombreuses personnalités et célébrités, telles que George Clooney, Madonna, Jean-Claude Van Damme, et Gary Dourdan. J'ai également été sollicité par des figures du sport comme Michel Platini, des leaders d'entreprises comme Caroline Scheufele de Chopard et Antoine Corinthios des Four Seasons, ainsi que des personnalités influentes telles que John Caldar de Caterpillar. Mes services ont aussi été appréciés par les familles royales du Qatar et d'Arabie Saoudite, comme les familles Al Kattani et Al Saoud.</p>
                </div>
                <div class="flex justify-center items-center relative">
                    <img class="w-full rounded-xl shadow-center-gray xs:-mt-4 xs:w-3/4 sm:absolute sm:mt-0 sm:w-full sm:left-12 md:left-12 xl:left-5 xl:w-4/6" src="{{ asset('Images/À propos Pic.jpg') }}" alt="À propos Pic">
                </div>
            </div>
        </section>
        <section class="w-full min-h-screen mx-auto flex justify-center items-center py-20 bg-[#f5fafd] xs:pt-0 sm:pt-20 md:pt-20">
            <div class="w-5/6 text-center">
                <h2 class="text-5xl my-5 font-[300] xs:text-xs sm:text-xl md:text-3xl lg:text-4xl">Massothérapie</h2>
                <p class="text-[20px] my-10 xs:text-[8px] sm:text-[12px] md:text-[16px] lg:text-[18px]">
                    Voici en quelques lignes les séances de massothérapie que je vous propose. N'hésitez pas à cliquer pour découvrir davantage, et à me contacter pour plus d'informations.</p>
                <div class="grid grid-rows-1 grid-cols-3 gap-x-5 my-5 xs:w-2/3 xs:m-auto xs:grid-cols-1 xs:gap-y-10 sm:w-full sm:grid-cols-3 sm:gap-y-5 md:w-full md:grid-cols-3 md:gap-y-5">
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative xs:h-[20vh] sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Massage thérapeutique </p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Le massage thérapeutique combine des techniques comme l’effleurage et le pétrissage pour agir en profondeur sur les muscles, tendons, et fascias. Il est utilisé pour soulager des douleurs ciblées et rétablir l'équilibre du corps.</p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-thérapeutique ">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative xs:h-[20vh] sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Massage relaxant</p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Ce type de massage favorise la détente en utilisant des mouvements doux et harmonieux tels que l’effleurage et le pétrissage. Il soulage les tensions musculaires, améliore la circulation sanguine, et procure une sensation de bien-être global.</p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-relaxant">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative xs:h-[20vh] sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Massage sportif</p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Conçu pour les sportifs, ce massage prépare le corps à l'effort et aide à la récupération. Il vise à préserver la mobilité articulaire et à réduire les douleurs musculo-articulaires dues à l'activité physique.</p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-sportif">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative mx-auto xs:w-full xs:h-[20vh] sm:col-span-3 sm:w-1/3 sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Massage anti-stress (Trigger Point)</p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Ce massage se concentre sur les points de tension dans les muscles, soulageant les douleurs musculaires et articulaires. Particulièrement bénéfique pour les personnes souffrant de douleurs chroniques, il relâche les "nœuds" musculaires tenaces</p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-anti-stress">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <h2 class="text-5xl mt-20 mb-5 font-[300] xs:text-xs sm:text-xl md:text-3xl lg:text-4xl">Personal training</h2>
                <p class="text-[20px] my-10 xs:text-[8px] sm:text-[12px] md:text-[16px] lg:text-[18px]">
                    Voici en quelques lignes les séances de coaching que je vous propose. N’hésitez pas à cliquer dessus pour en savoir davantage, et à me contacter pour plus d’informations.</p>
                <div class="grid grid-rows-1 grid-cols-3 gap-x-5 my-5 xs:w-2/3 xs:m-auto xs:grid-cols-1 xs:gap-y-10 sm:w-full sm:grid-cols-3 sm:gap-y-0 md:w-full md:grid-cols-3 md:gap-y-0">
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative xs:h-[20vh] sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La perte du poids</p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La perte de poids durable consiste à adopter une alimentation équilibrée et une activité physique régulière, avec des conseils professionnels pour éviter les régimes dangereux et l'effet yo-yo.</p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#perte-poids">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative xs:h-[20vh] sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Prise de masse</p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La prise de masse musculaire nécessite un entraînement régulier et un apport calorique suffisant, soutenus par un programme nutritionnel et d'entraînement adaptés </p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#prise-masse">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative xs:h-[20vh] sm:h-[25vh] md:h-[30vh]">
                        <div class="w-full h-full bg-black text-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5 capitalize xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La remise en forme</p>
                                <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La remise en forme varie selon vos objectifs et condition physique, en combinant exercices cardio, renforcement musculaire et flexibilité pour des résultats optimaux.</p>
                            </div>
                            <a class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#remise-forme">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </a>
                        </div>
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
