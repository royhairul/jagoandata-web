import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Pastikan manifest diaktifkan
        outDir: "public/build", // Direktori output
    },
    base: "/", // Sesuaikan base path
});
