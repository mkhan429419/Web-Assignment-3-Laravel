import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/styles.css",
                "resources/css/About.css",
                "resources/css/Contact.css",
                "resources/css/services.css",
                "resources/js/app.js",
                "resources/js/Contact.js",
                "resources/js/services.js",
                "resources/js/Home.js",
            ],
            refresh: true,
        }),
    ],
});
