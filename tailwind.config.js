/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins"],
                dmsans: ["DM Sans"],
            },
            colors: {
                "deep-purple": "#2B3674",
                "blue-gray": "#626777",
                "blue-soap": "#D0D8F0",
                "yellow-orange": "#E59934",
            },
        },
    },
    plugins: [],
};
