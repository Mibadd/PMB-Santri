import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/admin/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                outfit: ["Outfit", "sans-serif"],
            },
            colors: {
                brand: {
                    25: "#f2f7ff",
                    50: "#ecf3ff",
                    100: "#dde9ff",
                    200: "#c2d6ff",
                    300: "#9cb9ff",
                    400: "#7592ff",
                    500: "#465fff",
                    600: "#3641f5",
                    700: "#2a31d8",
                    800: "#252dae",
                    900: "#262e89",
                    950: "#161950",
                },
            },
        },
    },

    plugins: [forms],
};
