# Descrizione

-   Creare un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
-   Creare poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellire il tutto sfruttando Sass.

> Step per impostare sass e bootstrap

-   Sul terminale installiamo il pacchetto con **_composer require pacificdev/laravel_9_preset_**
-   Sempre sul terminale, eseguire il comando **_php artisan preset:ui bootstrap_**
-   Eliminare dal file package.json la riga **_"type": "module"_**
-   Lanciare i comandi **_npm i_** ed **_npm run dev_**
-   Importare poi gli asset dal file app.js nella head del layout utilizzando la direttiva @vite

Creare più pagine che condividono lo stesso layout
