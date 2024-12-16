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
    <main class="w-full mt-[15vh] bg-HomeBgMobile bg-no-repeat bg-bottom bg-cover relative min-h-[100vh] xs:mt-[6vh] sm:mt-[10vh] sm:bg-center sm:bg-HomeBg md:mt-[15vh]">
        <div class="w-full h-full bg-black bg-opacity-40 text-white absolute z-[1] sm:flex sm:items-center sm:justify-center">
            <div class="w-full h-full text-center">
                <h2 class="w-1/2 text-xl font-bold m-auto leading-[1.23] uppercase mt-5 sm:text-sm sm:mt-0 md:text-xl lg:text-3xl lg:mt-44">Said Rahati</h2>
                <div class="w-full h-[85vh] mt-40 xs:mt-0 sm:h-[36vh] sm:flex sm:justify-center md:h-[35vh]">
                    <h1 class="font-bold w-7/12 mx-auto leading-[1.23] flex justify-center items-center text-[1.4em] mt-5 sm:w-6/12 sm:mx-0 sm:mt-0 sm:text-[1.6em] md:w-7/12 md:text-[2.4em] lg:text-[3em] lg:w-6/12 xl:w-4/12">MASSOTHÉRAPEUTE COACH SPORTIF</h1>
                    <div class="w-11/12 mx-auto flex mt-[65vh] sm:my-auto sm:block sm:w-3/12 sm:mx-0">
                        <button class="bg-[#03a9f4] block font-semibold mx-auto rounded-full uppercase shadow-center text-[13px] py-2 px-2 sm:text-[11px] sm:py-1 sm:px-3 md:text-[14px] md:px-5 md:py-2 md:my-5 lg:text-[16px] lg:my-5"><a loading="lazy" href="{{ route('massotherapie') }}">- massothérapie -</a></button>
                        <button class="border-2 border-white bg-black bg-opacity-40 block font-semibold mx-auto rounded-full uppercase shadow-center text-[13px] py-2 px-2 sm:text-[11px] sm:py-1 sm:px-3 md:text-[14px] md:px-5 md:py-2 md:my-5 lg:text-[16px] lg:my-5"><a loading="lazy" href="{{ route('contact') }}">- contactez-nous -</a></button>
                    </div>
                </div>
                <a loading="lazy" href="#apropos"><i class="fa-solid fa-chevron-down animate-bounce-100 text-xl md:text-2xl md:mt-14 lg:text-3xl lg:mt-16 xl:text-4xl"></i></a>
            </div>
        </div>
    </main>
    <section id="apropos" class="w-4/5 my-10 mx-auto flex justify-center items-center py-20 xs:py-0 xs:min-h-[50vh] sm:min-h-[65vh] md:min-h-[80vh] lg:min-h-[95vh] xl:min-h-screen">
        <div class="w-full grid grid-rows-1 xs:grid-cols-1 sm:grid-cols-2">
            <div class="w-full p-20 shadow-center-gray text-justify xs:p-4 xs:rounded-t-xl sm:rounded-xl sm:w-[125%] sm:p-5 md:w-[120%] md:p-6 lg:p-16 xl:w-[110%]">
                <p class="text-[18px] font-bold xs:text-[14px] sm:text-[14px] md:text-[16px]">À propos</p>
                <p class="text-5xl my-5 font-[300] xs:text-[14px] sm:text-xl md:text-3xl lg:text-4xl">Said Rahati</p>
                <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[14px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">Plus de 20 ans d'expérience professionnelle en tant que masseur-thérapeute et coach personnel dans différents centres de santé et clubs de fitness en Suisse.</p>
                <p class="text-[18px] font-bold xs:text-[14px] sm:text-[14px] md:text-[16px]">FORMATION</p>
                <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[14px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">Certifié par la Fédération Internationale des Sports Aérobics et Fitness (FISAF) au module "Personal Trainer" en Suisse.
                    Diplômé de l'Académie des Thérapeutes à l’École Esclre Monde à Genève.
                    Formé aux cours collectifs Les Mills : Body Balance, Body Combat et Body Pump.
                </p>
                <p class="text-[18px] font-bold xs:text-[14px] sm:text-[14px] md:text-[16px]">EXPÉRIENCE</p>
                <p class="text-[16px] text-[#46707f] leading-[1.6] my-2 xs:text-[14px] xs:leading-[1.1] sm:text-[11px] sm:leading-[1.6] md:text-[14px] md:leading-[1.6]">18 ans de pratique du football professionnel au Maroc, en France et en Suisse.
                    Champion de Suisse en Body Fitness.
                    3e place au Championnat du Monde Amateur.
                    2e place au Championnat International de Massage Thérapeutique en Suisse.
                </p>
            </div>
            <div class="flex justify-center items-center relative">
                <img class="w-full shadow-center-gray xs:rounded-b-xl sm:rounded-xl sm:absolute sm:mt-0 sm:w-full sm:left-12 md:left-12 xl:left-5 xl:w-4/6" src="{{ asset('Images/Said-Rahati.webp') }}" alt="Said Rahati Pic">
            </div>
        </div>
    </section>
    <section class="w-full min-h-screen mx-auto flex justify-center items-center py-20 bg-[#f5fafd] xs:pt-0 sm:pt-20 md:pt-20">
        <div class="w-5/6 text-center">
            <h2 class="text-[18px] uppercase text-left font-bold xs:ms-8 xs:text-[14px] xs:mt-12 sm:mt-0 sm:ms-11 sm:text-[14px] sm:mb-32 md:text-[16px] md:ms-12 lg:ms-24">Diplômes et Prix</h2>
            <div class="grid grid-rows-1 grid-cols-2 gap-x-5 my-5 xs:w-full xs:m-auto xs:grid-cols-1 sm:grid-cols-2 sm:gap-y-5 md:grid-cols-2 md:gap-y-5">
                <div class="text-center h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <img class="w-full h-full object-contain" src="{{ asset("Images/Diplome/SKM_C30824121218040-1.webp") }}" alt="">
                    </div>
                </div>
                <div class="text-center h-[40vh] relative xs:min-h-[20vh] sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <img class="w-full h-full object-contain" src="{{ asset("Images/Diplome/SKM_C30824121218030-1.webp") }}" alt="">
                    </div>
                </div>
                <div class="text-center h-[40vh] relative xs:min-h-[20vh] sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <img class="w-full h-full object-contain" src="{{ asset("Images/Diplome/SKM_C30824121218010-1.webp") }}" alt="">
                    </div>
                </div>
                <div class="text-center h-[40vh] relative xs:min-h-[20vh] sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <img class="w-full h-full object-contain" src="{{ asset("Images/Diplome/SKM_C30824121218051-1.webp") }}" alt="">
                    </div>
                </div>
                <div class="text-center h-[40vh] relative xs:min-h-[20vh] sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <img class="w-full h-full object-contain" src="{{ asset("Images/Diplome/SKM_C30824121218050-1.webp") }}" alt="">
                    </div>
                </div>
                <div class="text-center h-[40vh] relative xs:min-h-[20vh] sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <img class="w-full h-full object-contain" src="{{ asset("Images/Diplome/SKM_C30824121218041-1.webp") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full min-h-screen mx-auto flex justify-center items-center py-20 bg-[#f5fafd] xs:pt-0 sm:pt-20 md:pt-20">
        <div class="w-5/6 text-center">
            <h2 class="text-5xl my-5 font-bold xs:text-sm sm:text-xl md:text-3xl lg:text-4xl">Massothérapie</h2>
            <p class="text-[20px] my-10 xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px]">
                Voici en quelques lignes les séances de massothérapie que je vous propose. N'hésitez pas à cliquer pour découvrir davantage, et à me contacter pour plus d'informations.</p>
            <div class="grid grid-rows-1 grid-cols-2 gap-x-5 my-5 xs:w-full xs:m-auto xs:grid-cols-1 xs:gap-y-10 sm:grid-cols-2 sm:gap-y-5 md:grid-cols-2 md:gap-y-5">
                <div class="text-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">thérapeutique</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Le massage thérapeutique combine des techniques comme l’effleurage et le pétrissage pour agir en profondeur sur les muscles, tendons, et fascias. Il est utilisé pour soulager des douleurs ciblées et rétablir l'équilibre du corps.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-therapeutique">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="text-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">relaxant</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Ce type de massage favorise la détente en utilisant des mouvements doux et harmonieux tels que l’effleurage et le pétrissage. Il soulage les tensions musculaires, améliore la circulation sanguine, et procure une sensation de bien-être global.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-relaxant">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="text-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">sportif</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Conçu pour les sportifs, ce massage prépare le corps à l'effort et aide à la récupération. Il vise à préserver la mobilité articulaire et à réduire les douleurs musculo-articulaires dues à l'activité physique.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-sportif">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="text-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Massage</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">anti-stress</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">Ce massage se concentre sur les points de tension dans les muscles, soulageant les douleurs musculaires et articulaires. Particulièrement bénéfique pour les personnes souffrant de douleurs chroniques, il relâche les "nœuds" musculaires tenaces.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('massotherapie') }}#massage-anti-stress">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
            </div>
            <h2 class="text-5xl mt-20 mb-5 font-bold xs:text-sm sm:text-xl md:text-3xl lg:text-4xl">Personal training</h2>
            <p class="text-[20px] my-10 xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px]">
                Voici en quelques lignes les séances de coaching que je vous propose. N’hésitez pas à cliquer dessus pour en savoir davantage, et à me contacter pour plus d’informations.</p>
            <div class="grid grid-rows-1 grid-cols-2 gap-x-5 my-5 xs:w-full xs:m-auto xs:grid-cols-1 xs:gap-y-10 sm:grid-cols-2 sm:gap-y-5 md:grid-cols-2 md:gap-y-5">
                <div class="text-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">La perte</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">du poids</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La perte de poids durable consiste à adopter une alimentation équilibrée et une activité physique régulière, avec des conseils professionnels pour éviter les régimes dangereux et l'effet yo-yo.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#perte-poids">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="text-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:px-4 sm:min-h-[25vh] sm:px-6 md:min-h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Prise</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">de masse</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La prise de masse musculaire nécessite un entraînement régulier et un apport calorique suffisant, soutenus par un programme nutritionnel et d'entraînement adaptés.</p>
                        </div>
                    </div>
                    <a class="w-full h-full bg-cyan-400 absolute top-0 left-0 bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500" href="{{ route('coaching') }}#prise-masse">
                        <svg class="w-1/12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                    </a>
                </div>
                <div class="bg-[#ftext-center border border-black h-[40vh] relative xs:min-h-[20vh] xs:w-full xs:px-4 sm:px-6 sm:w-1/2 sm:mx-auto sm:col-span-2 sm:min-h-[25vh] md:h-[30vh] md:px-8 lg:px-10 lg:min-h-[35vh] xl:min-h-[40vh]">
                    <div class="w-full h-full text-black flex items-center justify-center relative">
                        <div class="w-11/12">
                            <p class="text-[18px] font-bold capitalize xs:text-[14px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px]">La remise</p>
                            <p class="text-[18px] font-bold uppercase tracking-[0.3em] xs:text-[14px] xs:mb-1 sm:text-[14px] sm:mb-3 md:text-[18px] md:mb-4 lg:text-[20px] lg:mb-5 xl:text-[24px]">en forme</p>
                            <p class="text-[18px] font-[300] xs:text-[14px] sm:text-[11px] md:text-[12px] lg:text-[16px]">La remise en forme varie selon vos objectifs et condition physique, en combinant exercices cardio, renforcement musculaire et flexibilité pour des résultats optimaux.</p>
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
