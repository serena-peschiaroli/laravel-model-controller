import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //modifichiamo il percorso del css usando sass
            'resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    //aggiungere un alias per la cartela /resources/
    resolve: {
        alias: {
            '~resources' : '/resources/',
            '~bootstrap' : resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
