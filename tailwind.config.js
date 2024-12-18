/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
              'xs': '320px',
            }
        },
        backgroundImage: {
            'HomeBg': "url('/public/Images/Accueil.webp')",
            'HomeBgMobile': "url('/public/Images/AccueilMobile.jpg')",
            'CoachingBg': "url('/public/Images/coaching.webp')",
            'MassotherapieBg': "url('/public/Images/massotherapie.webp')",
        },
    },
    plugins: [],
}
