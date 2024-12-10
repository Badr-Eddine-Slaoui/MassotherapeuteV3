@extends('Layouts.container')

@section('meta')
    <meta name="title" content="Said Rahati Massothérapeute Et Coach Sportif | Votre Guide pour Bien-être et Fitness">
    <meta name="description" content="Découvrez nos services de massage thérapeutique, relaxant, sportif, anti-stress, et coaching personnel pour la perte de poids, prise de masse, et remise en forme. Contactez-nous pour en savoir plus.">
    <meta name="keywords" content="Said Rahati, Massothérapeute, Coach sportif, Bien-être, fitness, Massage thérapeutique, Massage relaxant, Massage sportif, Massage anti-stress, Coaching personnel, Perte de poids, Prise de masse, Remise en forme, Services de massage, Coach de remise en forme, Santé et bien-être, Massage pour sportifs, Gestion du stress, Plan d'entraînement personnalisé, Massage musculaire, Réduction des tensions musculaires, Fitness sur mesure, Transformation physique">
    <meta property="og:title"content="Said Rahati Massothérapeute Et Coach Sportif | Votre Guide pour Bien-être et Fitness">
    <meta property="og:description" content="Découvrez nos services de massage thérapeutique, relaxant, sportif, anti-stress, et coaching personnel pour la perte de poids, prise de masse, et remise en forme. Contactez-nous pour en savoir plus.">
    <meta name="twitter:title"content="Said Rahati Massothérapeute Et Coach Sportif | Votre Guide pour Bien-être et Fitness">
    <meta name="twitter:description" content="Découvrez nos services de massage thérapeutique, relaxant, sportif, anti-stress, et coaching personnel pour la perte de poids, prise de masse, et remise en forme. Contactez-nous pour en savoir plus.">
@endsection

@section('title', 'Accueil')

@section('content')
    <main class="w-full mt-[15vh] min-h-[150vh] bg-HomeBg bg-no-repeat bg-center bg-cover relative xs:min-h-[40vh] xs:mt-[6vh] sm:min-h-[60vh] sm:mt-[10vh] md:mt-[15vh] md:min-h-[70vh] lg:min-h-[80vh] xl:min-h-[100vh]">
        <div class="w-full h-full bg-black bg-opacity-10 text-black absolute z-[1] flex items-center justify-center">
            <div class="w-full text-center">
                <div class="w-full flex justify-between h-[35vh] mt-40 xs:h-[25vh] xs:mt-0 sm:h-[36vh] md:h-[35vh] md:mt-16">
                    <h1 class="text-[3.375em] w-4/12 font-[300] leading-[1.23] flex justify-center items-center xs:text-[0.8em] xs:ms-5 sm:ms-20 sm:text-[1.6em] md:text-[2em] lg:text-[3em]">MASSOTHÉRAPEUTE COACH SPORTIF</h1>
                    <div class="w-4/12 my-auto sm:w-3/12">
                        <button class="block mx-auto bg-[#03a9f4] py-3 px-7 text-[18px] rounded-full my-5 uppercase shadow-center xs:text-[7px] xs:py-1 xs:px-1 xs:my-2 sm:text-[11px] sm:py-1 sm:px-3 md:text-[14px] md:px-5 md:py-2 md:my-5 lg:text-[16px] lg:my-5"><a loading="lazy" href="{{ route('massotherapie') }}">- massothérapie -</a></button>
                        <button class="block mx-auto border-2  border-black  py-3 px-7 text-[18px] rounded-full my-5 uppercase shadow-center xs:text-[7px] xs:py-1 xs:px-1 xs:my-2 sm:text-[11px] sm:py-1 sm:px-3 md:text-[14px] md:px-5 md:py-2 md:my-5 lg:text-[16px] lg:my-5"><a loading="lazy" href="{{ route('contact') }}">- contactez-nous -</a></button>
                    </div>
                </div>
                <h2 class="w-1/2 text-3xl font-[300] m-auto leading-[1.23] uppercase xs:text-xs xs:mt-0 sm:text-sm sm:mt-0 md:text-xl lg:text-3xl lg:mt-5">Said Rahati</h2>
                <svg class="w-1/12 m-auto mt-20 mb-10 xs:mt-5 sm:mt-10 md:mt-14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map-marker" viewBox="0 0 512 545.5"><path fill="black" d="M256 80c79.336 0 144 64.664 144 144 0 22.5-9.116 48.313-21.5 76.5s-28.314 58.098-44.5 86C301.628 442.306 269 489 269 489l-13 19-13-19s-32.628-46.694-65-102.5c-16.186-27.902-32.116-57.813-44.5-86S112 246.5 112 224c0-79.336 64.664-144 144-144zm0 32c-62.04 0-112 49.96-112 112 0 12.844 6.884 37.06 18.5 63.5s27.686 55.738 43.5 83c25.155 43.364 40.74 66.3 50 80 9.26-13.7 24.845-36.636 50-80 15.815-27.262 31.884-56.56 43.5-83S368 236.844 368 224c0-62.04-49.96-112-112-112zm0 80c17.673 0 32 14.327 32 32s-14.327 32-32 32-32-14.327-32-32 14.327-32 32-32z"></path></svg>
                <a loading="lazy" href="#apropos"><i class="text-3xl mt-40 fa-solid fa-chevron-down animate-bounce-100 xs:text-xs xs:mt-0 sm:text-sm sm:mt-1 md:text-xl md:mt-2 lg:text-2xl lg:mt-3"></i></a>
            </div>
        </div>
    </main>
    <section id="apropos" class="w-4/5 my-10 mx-auto flex justify-center items-center py-20 xs:py-0 xs:min-h-[50vh] sm:min-h-[65vh] md:min-h-[80vh] lg:min-h-[95vh] xl:min-h-screen">
        <div class="w-full grid grid-rows-1 xs:grid-cols-1 sm:grid-cols-2">
            <div class="w-full rounded-xl p-20 shadow-center-gray text-justify xs:p-4 sm:w-[125%] sm:p-5 md:w-[120%] md:p-6 lg:p-16 xl:w-[110%]">
                <p class="text-[18px] font-bold xs:text-[8px] sm:text-[12px] md:text-[16px]">À propos</p>
                <p class="text-5xl my-5 font-[300] xs:text-xs sm:text-xl md:text-3xl lg:text-4xl">Said Rahati</p>
                <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[8px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">Plus de 20 ans d'expérience professionnelle en tant que masseur-thérapeute et coach personnel dans différents centres de santé et clubs de fitness en Suisse.</p>
                <p class="text-[18px] font-bold xs:text-[8px] sm:text-[12px] md:text-[16px]">FORMATION</p>
                <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[8px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">Certifié par la Fédération Internationale des Sports Aérobics et Fitness (FISAF) au module "Personal Trainer" en Suisse.
                    Diplômé de l'Académie des Thérapeutes à l’École Esclre Monde à Genève.
                    Formé aux cours collectifs Les Mills : Body Balance, Body Combat et Body Pump.
                </p>
                <p class="text-[18px] font-bold xs:text-[8px] sm:text-[12px] md:text-[16px]">EXPÉRIENCE</p>
                <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[8px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">18 ans de pratique du football professionnel au Maroc, en France et en Suisse.
                    Champion de Suisse en Body Fitness.
                    3e place au Championnat du Monde Amateur.
                    2e place au Championnat International de Massage Thérapeutique en Suisse.
                </p>
            </div>
            <div class="flex justify-center items-center relative">
                <img class="w-full rounded-xl shadow-center-gray xs:-mt-4 xs:w-3/4 sm:absolute sm:mt-0 sm:w-full sm:left-12 md:left-12 xl:left-5 xl:w-4/6" src="{{ asset('Images/Said-Rahati.webp') }}" alt="Said Rahati Pic">
            </div>
        </div>
    </section>
    <section class="w-full min-h-screen mx-auto flex justify-center items-center py-20 bg-[#f5fafd] xs:pt-0 sm:pt-20 md:pt-20">
        <div class="w-5/6 text-center">
            <h2 class="text-5xl my-5 font-[300] xs:text-xs sm:text-xl md:text-3xl lg:text-4xl">Massothérapie</h2>
            <p class="text-[20px] my-10 xs:text-[8px] sm:text-[12px] md:text-[16px] lg:text-[18px]">
                Voici en quelques lignes les séances de massothérapie que je vous propose. N'hésitez pas à cliquer pour découvrir davantage, et à me contacter pour plus d'informations.</p>
            <div class="grid grid-rows-1 grid-cols-2 gap-x-5 my-5 xs:w-2/3 xs:m-auto xs:grid-cols-1 xs:gap-y-10 sm:w-full sm:grid-cols-2 sm:gap-y-5 md:w-full md:grid-cols-2 md:gap-y-5">
                <div class="bg-[#cd3126] text-center h-[40vh] relative xs:h-[20vh] xs:px-4 sm:h-[25vh] sm:px-6 md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">thérapeutique</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Le massage thérapeutique combine des techniques comme l’effleurage et le pétrissage pour agir en profondeur sur les muscles, tendons, et fascias. Il est utilisé pour soulager des douleurs ciblées et rétablir l'équilibre du corps.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-therapeutique">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="bg-[#117086] text-center h-[40vh] relative xs:h-[20vh] xs:px-4 sm:h-[25vh] sm:px-6 md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">relaxant</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Ce type de massage favorise la détente en utilisant des mouvements doux et harmonieux tels que l’effleurage et le pétrissage. Il soulage les tensions musculaires, améliore la circulation sanguine, et procure une sensation de bien-être global.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-relaxant">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="bg-[#11862a] text-center h-[40vh] relative xs:h-[20vh] xs:px-4 sm:h-[25vh] sm:px-6 md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">sportif</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Conçu pour les sportifs, ce massage prépare le corps à l'effort et aide à la récupération. Il vise à préserver la mobilité articulaire et à réduire les douleurs musculo-articulaires dues à l'activité physique.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-sportif">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="bg-[#861178] text-center h-[40vh] relative xs:h-[20vh] xs:px-4 sm:h-[25vh] sm:px-6 md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">anti-stress</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Ce massage se concentre sur les points de tension dans les muscles, soulageant les douleurs musculaires et articulaires. Particulièrement bénéfique pour les personnes souffrant de douleurs chroniques, il relâche les "nœuds" musculaires tenaces</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-anti-stress">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
            </div>
            <h2 class="text-5xl mt-20 mb-5 font-[300] xs:text-xs sm:text-xl md:text-3xl lg:text-4xl">Personal training</h2>
            <p class="text-[20px] my-10 xs:text-[8px] sm:text-[12px] md:text-[16px] lg:text-[18px]">
                Voici en quelques lignes les séances de coaching que je vous propose. N’hésitez pas à cliquer dessus pour en savoir davantage, et à me contacter pour plus d’informations.</p>
            <div class="grid grid-rows-1 grid-cols-2 gap-x-5 my-5 xs:w-2/3 xs:m-auto xs:grid-cols-1 xs:gap-y-10 sm:w-full sm:grid-cols-2 sm:gap-y-5 md:w-full md:grid-cols-2 md:gap-y-5">
                <div class="bg-[#484b4b] text-center h-[40vh] relative xs:h-[20vh] xs:px-4 sm:h-[25vh] sm:px-6 md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">La perte</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">du poids</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La perte de poids durable consiste à adopter une alimentation équilibrée et une activité physique régulière, avec des conseils professionnels pour éviter les régimes dangereux et l'effet yo-yo.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#perte-poids">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="bg-[#800000] text-center h-[40vh] relative xs:h-[20vh] xs:px-4 sm:h-[25vh] sm:px-6 md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Prise</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">de masse</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La prise de masse musculaire nécessite un entraînement régulier et un apport calorique suffisant, soutenus par un programme nutritionnel et d'entraînement adaptés </p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#prise-masse">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="bg-[#ffbb00] px-10 text-center h-[40vh] relative xs:h-[20vh] xs:w-full xs:px-4 sm:px-6 sm:w-1/2 sm:mx-auto sm:col-span-2 sm:h-[25vh] md:h-[30vh] md:px-8 lg:px-10 lg:h-[35vh] xl:h-[40vh]">
                    <div class="w-full h-full text-white flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-semibold capitalize xs:text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">La remise</p>
                            <p class="text-[18px] font-semibold uppercase tracking-[0.3em] xs:text-[10px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">en forme</p>
                            <p class="text-[18px] font-[300] xs:text-[8px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La remise en forme varie selon vos objectifs et condition physique, en combinant exercices cardio, renforcement musculaire et flexibilité pour des résultats optimaux.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#remise-forme">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
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
        "description": "Découvrez nos services de massage thérapeutique, relaxant, sportif, anti-stress, et coaching personnel pour la perte de poids, prise de masse, et remise en forme. Contactez-nous pour en savoir plus.",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('Images/Logo.webp') }}",
        "image": "{{ asset('Images/À propos Pic.webp') }}",
        "telephone": "+41 79 574 95 25",
        "sameAs": [
            "https://web.facebook.com/said.rahati",
            "https://www.instagram.com/saidrahati",
        ]
        }
    </script>
@endsection
