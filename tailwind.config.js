import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Helvetica', 'Arial', 'sans-serif'],
                'serif': ['Georgia', 'Cambria', 'serif'],
                'mono': ['Courier New', 'monospace'],
                'prompt': ['Prompt', 'sans-serif'],
              },
        },
        colors:{
            'text-login':'#048482',
            'but':'#fa9583'

        }
    },

    plugins: [
        forms,
        typography,
        require("flowbite/plugin")({
          charts: true,
        }),

      ],
    };
