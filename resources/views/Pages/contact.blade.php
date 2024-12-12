@extends('Layouts.container')

@section('meta')
    <meta name="title" content="Said Rahati Massothérapeute Et Coach Sportif | Contactez-nous">
    <meta name="description" content="Contactez-nous pour toute demande d'information, service de massothérapie, ou coaching. Nous sommes à votre disposition pour répondre à vos besoins.">
    <meta name="keywords" content="Contact Said Rahati, Contact massothérapeute, Contact coach sportif, Demande d’information massothérapie, Demande d’information coaching sportif, Réserver une séance de massage, Prendre rendez-vous avec Said Rahati, Services de coaching et massothérapie">
    <meta property="og:title"content="Said Rahati Massothérapeute Et Coach Sportif | Contactez-nous">
    <meta property="og:description" content="Contactez-nous pour toute demande d'information, service de massothérapie, ou coaching. Nous sommes à votre disposition pour répondre à vos besoins.">
    <meta name="twitter:title"content="Said Rahati Massothérapeute Et Coach Sportif | Contactez-nous">
    <meta name="twitter:description" content="Contactez-nous pour toute demande d'information, service de massothérapie, ou coaching. Nous sommes à votre disposition pour répondre à vos besoins.">
@endsection

@section('title', 'Contactez-nous')

@section('content')
    <section class="w-full pt-1 mt-[15vh] pb-20 xs:pb-5 xs:min-h-[50vh] bg-[#f5fafd] xs:mt-[6vh] sm:mt-[10vh] md:mt-[15vh]">
        <div class="w-5/6 mx-auto pb-20">
            <h1 class="font-[300] text-6xl mt-10 mb-28 xs:text-xs xs:mb-14 md:text-2xl lg:text-3xl">Contactez-nous</h1>
            <div class="w-full bg-white flex shadow-center-gray rounded-md xs:block sm:flex md:flex">
                <div class="w-2/6 bg-[#03a9f4] rounded-s-md flex justify-center items-center xs:rounded-s-none xs:w-full xs:pt-5 sm:w-2/6 sm:pt-0 md:w-2/6 md:w-pt-0">
                    <div class="text-white text-center">
                        <p class="text-[20px] uppercase font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[18px]">Contact direct</p>
                        <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-regular fa-envelope flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                        <p class="text-[20px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[18px]">Je suis à votre disposition</p>
                        <div class="grid grid-rows-1 grid-cols-4 gap-x-4">
                            <a class="relative" href="tel:+41795749525">
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-solid fa-phone flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                                <img loading="lazy" class="absolute right-0 w-1/2 xs:bottom-4 lg:bottom-3" src="{{ asset('Images/switzerland.webp') }}" alt="">
                            </a>
                            <a class="relative" href="tel:+212615450093">
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-solid fa-phone flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                                <img loading="lazy" class="absolute right-0 w-1/2 xs:bottom-4 lg:bottom-3" src="{{ asset('Images/Morocco.webp') }}" alt="">
                            </a>
                            <a href="https://www.instagram.com/saidrahati" target="_blank" rel="noopener noreferrer"><i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-instagram flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i></a>
                            <a href="https://web.facebook.com/said.rahati" target="_blank" rel="noopener noreferrer"><i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-facebook flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i></a>
                        </div>
                    </div>
                </div>
                <form class="w-4/6 grid grid-cols-1 grid-rows-1 gap-10 p-10 xs:w-full sm:w-4/6 sm:p-2 md:w-4/6 md:p-5" action="{{ route('contact.store') }}" method="POST">
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
    </section>
@endsection

@section('json')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Said Rahati",
        "description": "Contactez-nous pour toute demande d'information, service de massothérapie, ou coaching. Nous sommes à votre disposition pour répondre à vos besoins.",
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
