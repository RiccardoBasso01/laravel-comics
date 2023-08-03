# Descrizione

-   Creare un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
-   Creare poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellire il tutto sfruttando Sass.

> Step per impostare sass e bootstrap

-   Sul terminale installiamo il pacchetto con composer require pacificdev/laravel_9_preset
-   Sempre sul terminale, eseguire il comando php artisan preset:ui bootstrap
-   Eliminare dal file package.json la riga "type": "module" 4. Lanciare i comandi npm i ed npm run dev
-   Importare poi gli asset dal file app.js nella head del layout utilizzando la direttiva @vite

Creare più pagine che condividono lo stesso layout
