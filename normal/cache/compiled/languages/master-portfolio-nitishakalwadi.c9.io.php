<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledLanguages',
    'timestamp' => 1452113695,
    'checksum' => 'da75930087caca545a02141c9f485be2',
    'files' => [
        'system/languages' => [
            'cs' => [
                'file' => 'system/languages/cs.yaml',
                'modified' => 1452113596
            ],
            'de' => [
                'file' => 'system/languages/de.yaml',
                'modified' => 1452113596
            ],
            'en' => [
                'file' => 'system/languages/en.yaml',
                'modified' => 1452113596
            ],
            'es' => [
                'file' => 'system/languages/es.yaml',
                'modified' => 1452113596
            ],
            'fr' => [
                'file' => 'system/languages/fr.yaml',
                'modified' => 1452113596
            ],
            'hr' => [
                'file' => 'system/languages/hr.yaml',
                'modified' => 1452113596
            ],
            'hu' => [
                'file' => 'system/languages/hu.yaml',
                'modified' => 1452113597
            ],
            'it' => [
                'file' => 'system/languages/it.yaml',
                'modified' => 1452113597
            ],
            'nl' => [
                'file' => 'system/languages/nl.yaml',
                'modified' => 1452113597
            ],
            'ru' => [
                'file' => 'system/languages/ru.yaml',
                'modified' => 1452113597
            ],
            'tr' => [
                'file' => 'system/languages/tr.yaml',
                'modified' => 1452113597
            ]
        ],
        'user/plugins' => [
            'plugins/form' => [
                'file' => 'user/plugins/form/languages.yaml',
                'modified' => 1452113535
            ]
        ]
    ],
    'data' => [
        'en' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Form not validated. One or more required fields are missing.',
                'NONCE_NOT_VALIDATED' => 'Oops there was a problem, please check your input and submit the form again.',
                'FILES' => 'Files Upload',
                'ALLOW_MULTIPLE' => 'Allow More than one file',
                'ALLOW_MULTIPLE_HELP' => 'Allows to select more than one file for upload.',
                'DESTINATION' => 'Destination',
                'DESTINATION_HELP' => 'The location where the files should be uploaded to',
                'ACCEPT' => 'Allowed MIME Types',
                'ACCEPT_HELP' => 'A list of MIME Types that are allowed for upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Error validating the Captcha'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'people',
                'man' => 'men',
                'child' => 'children',
                'sex' => 'sexes',
                'move' => 'moves'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'No date provided',
                'BAD_DATE' => 'Bad date',
                'AGO' => 'ago',
                'FROM_NOW' => 'from now',
                'SECOND' => 'second',
                'MINUTE' => 'minute',
                'HOUR' => 'hour',
                'DAY' => 'day',
                'WEEK' => 'week',
                'MONTH' => 'month',
                'YEAR' => 'year',
                'DECADE' => 'decade',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'mo',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'seconds',
                'MINUTE_PLURAL' => 'minutes',
                'HOUR_PLURAL' => 'hours',
                'DAY_PLURAL' => 'days',
                'WEEK_PLURAL' => 'weeks',
                'MONTH_PLURAL' => 'months',
                'YEAR_PLURAL' => 'years',
                'DECADE_PLURAL' => 'decades',
                'SEC_PLURAL' => 'secs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'wks',
                'MO_PLURAL' => 'mos',
                'YR_PLURAL' => 'yrs',
                'DEC_PLURAL' => 'decs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validation failed:</b>',
                'INVALID_INPUT' => 'Invalid input in',
                'MISSING_REQUIRED_FIELD' => 'Missing required field:'
            ]
        ],
        'es' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Falló la validación del formulario. Uno o más campos obligatorios no fueron capturados.',
                'NONCE_NOT_VALIDATED' => 'Oops, hay un problema, por favor revice la información capturada e intente enviar el formulario otra vez.'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'No se proporcionó fecha',
                'BAD_DATE' => 'Fecha erronea',
                'AGO' => 'antes',
                'FROM_NOW' => 'desde ahora',
                'SECOND' => 'segundo',
                'MINUTE' => 'minuto',
                'HOUR' => 'hora',
                'DAY' => 'dia',
                'WEEK' => 'semana',
                'MONTH' => 'mes',
                'YEAR' => 'año',
                'DECADE' => 'decada',
                'SEC' => 'seg',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'sem',
                'MO' => 'mes',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'segundos',
                'MINUTE_PLURAL' => 'minutos',
                'HOUR_PLURAL' => 'horas',
                'DAY_PLURAL' => 'días',
                'WEEK_PLURAL' => 'semanas',
                'MONTH_PLURAL' => 'meses',
                'YEAR_PLURAL' => 'años',
                'DECADE_PLURAL' => 'decadas',
                'SEC_PLURAL' => 'segs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'sem',
                'MO_PLURAL' => 'mes',
                'YR_PLURAL' => 'años',
                'DEC_PLURAL' => 'decs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Falló la validación. </b>',
                'INVALID_INPUT' => 'Dato inválido en: ',
                'MISSING_REQUIRED_FIELD' => 'Falta el campo requerido: '
            ]
        ],
        'fr' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formulaire non validé. Un ou plusieurs champs obligatoires sont manquants.',
                'NONCE_NOT_VALIDATED' => 'Oups, un problème est survenu. Veuillez vérifier votre saisie et soumettre à nouveau le formulaire.',
                'FILES' => 'Fichiers chargés',
                'ALLOW_MULTIPLE' => 'Autoriser plus d\'un fichier',
                'ALLOW_MULTIPLE_HELP' => 'Permet la sélection de plusieurs fichiers pour chargement.',
                'DESTINATION' => 'Destination',
                'DESTINATION_HELP' => 'L\'emplacement où les fichiers doivent être chargés.',
                'ACCEPT' => 'Autoriser les Types MIME',
                'ACCEPT_HELP' => 'Liste des Types MIME autorisés au chargement',
                'ERROR_VALIDATING_CAPTCHA' => 'Erreur lors de la validation du Captcha'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Erreur : Frontmatter invalide

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'équipement',
                1 => 'information',
                2 => 'riz',
                3 => 'argent',
                4 => 'espèces',
                5 => 'séries',
                6 => 'poisson',
                7 => 'mouton'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'personnes',
                'man' => 'hommes',
                'child' => 'enfants',
                'sex' => 'sexes',
                'move' => 'déplacements'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'ème',
                'first' => 'er',
                'second' => 'nd',
                'third' => 'ème'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Aucune date',
                'BAD_DATE' => 'Date erronée',
                'AGO' => 'plus tôt',
                'FROM_NOW' => 'à partir de maintenant',
                'SECOND' => 'seconde',
                'MINUTE' => 'minute',
                'HOUR' => 'heure',
                'DAY' => 'jour',
                'WEEK' => 'semaine',
                'MONTH' => 'mois',
                'YEAR' => 'an',
                'DECADE' => 'décennie',
                'SEC' => 's',
                'MIN' => 'm',
                'HR' => 'h',
                'WK' => 's',
                'MO' => 'm',
                'YR' => 'a',
                'DEC' => 'd',
                'SECOND_PLURAL' => 'secondes',
                'MINUTE_PLURAL' => 'minutes',
                'HOUR_PLURAL' => 'heures',
                'DAY_PLURAL' => 'jours',
                'WEEK_PLURAL' => 'semaines',
                'MONTH_PLURAL' => 'mois',
                'YEAR_PLURAL' => 'années',
                'DECADE_PLURAL' => 'décennies',
                'SEC_PLURAL' => 's',
                'MIN_PLURAL' => 'm',
                'HR_PLURAL' => 'h',
                'WK_PLURAL' => 's',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'a',
                'DEC_PLURAL' => 'd'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>La validation a échoué :</b>',
                'INVALID_INPUT' => 'Saisie non valide',
                'MISSING_REQUIRED_FIELD' => 'Champ obligatoire manquant :'
            ]
        ],
        'hr' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formular nije validiran. Jedan ili više traženih polja nedostaju.',
                'NONCE_NOT_VALIDATED' => 'Ups, došlo je do problema, molimo provjerite svoj unos i pokušajte opet.',
                'FILES' => 'Upload Fajlova',
                'ALLOW_MULTIPLE' => 'Dopusti više od jednog fajla',
                'DESTINATION' => 'Destinacija',
                'DESTINATION_HELP' => 'Lokacija gdje bi fajlovi trebali biti uploadani',
                'ACCEPT' => 'Dopušteni MIME Tipovi',
                'ACCEPT_HELP' => 'Lista dopuštenih MIME Tipova koji su dozvoljeni za upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Greška pri validiranju Captcha'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'Osoba',
                'man' => 'Čovjek',
                'child' => 'Dijete',
                'sex' => 'Spol',
                'move' => 'Pomakni'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Datum nije upisan',
                'BAD_DATE' => 'Pogrešan datum',
                'AGO' => 'prije',
                'FROM_NOW' => 'od sad',
                'SECOND' => 'sekundi',
                'MINUTE' => 'minuta',
                'HOUR' => 'godina',
                'DAY' => 'dan',
                'WEEK' => 'tjedan',
                'MONTH' => 'mjesec',
                'YEAR' => 'godina',
                'DECADE' => 'desetljeće',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'sat',
                'WK' => 't',
                'MO' => 'm',
                'YR' => 'g',
                'DEC' => 'des',
                'SECOND_PLURAL' => 'sekundi',
                'SECOND_PLURAL_MORE_THAN_TWO' => 'sekunde',
                'MINUTE_PLURAL' => 'minuta',
                'MINUTE_PLURAL_MORE_THAN_TWO' => 'minute',
                'HOUR_PLURAL' => 'sati',
                'HOUR_PLURAL_MORE_THAN_TWO' => 'sata',
                'DAY_PLURAL' => 'dana',
                'WEEK_PLURAL' => 'tjedana',
                'WEEK_PLURAL_MORE_THAN_TWO' => 'tjedna',
                'MONTH_PLURAL' => 'mjeseci',
                'MONTH_PLURAL_MORE_THAN_TWO' => 'mjeseca',
                'YEAR_PLURAL' => 'godina',
                'YEAR_PLURAL_MORE_THAN_TWO' => 'godine',
                'DECADE_PLURAL' => 'desetljeća',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'sat',
                'WK_PLURAL' => 't',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'g',
                'DEC_PLURAL' => 'des'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validacija nije uspjela:</b>',
                'INVALID_INPUT' => 'Unos nije valjan'
            ]
        ],
        'hu' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Érvénytelen az űrlap. Egy vagy több kötelező mező nincs kitöltve.',
                'NONCE_NOT_VALIDATED' => 'Upsz, van egy kis probléma, kérlek nézd át az űrlapot, majd küld el újra.',
                'FILES' => 'Fájlok Feltöltése',
                'ALLOW_MULTIPLE' => 'Több fájl feltöltése',
                'ALLOW_MULTIPLE_HELP' => 'Engedélyezi egyszerre több állomány felöltését.',
                'DESTINATION' => 'Feltöltés Helye',
                'DESTINATION_HELP' => 'Ide lesznek feltöltve az állományok',
                'ACCEPT' => 'Engedélyezett MIME-típusok',
                'ACCEPT_HELP' => 'A feltölthető állományok MIME-típusainak listája',
                'ERROR_VALIDATING_CAPTCHA' => 'Hiba lépett fel a Captcha validálása során'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
cím: %1$s
---

# Hiba: Érvénytelen Frontmatter

Elérési út: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_IRREGULAR' => [
                'person' => 'személyek',
                'man' => 'férfiak',
                'child' => 'gyerekek',
                'sex' => 'nemek',
                'move' => 'lépések'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => '.',
                'first' => '.',
                'second' => '.',
                'third' => '.'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nincs dátum megadva',
                'BAD_DATE' => 'Hibás dátum',
                'AGO' => 'elteltével',
                'FROM_NOW' => 'mostantól',
                'SECOND' => 'másodperc',
                'MINUTE' => 'perc',
                'HOUR' => 'óra',
                'DAY' => 'nap',
                'WEEK' => 'hét',
                'MONTH' => 'hónap',
                'YEAR' => 'év',
                'DECADE' => 'évtized',
                'SEC' => 'mp',
                'MIN' => 'p',
                'HR' => 'ó',
                'WK' => 'hét',
                'MO' => 'hó',
                'YR' => 'év',
                'DEC' => 'évt',
                'SECOND_PLURAL' => 'másodperc',
                'MINUTE_PLURAL' => 'perc',
                'HOUR_PLURAL' => 'óra',
                'DAY_PLURAL' => 'nap',
                'WEEK_PLURAL' => 'hét',
                'MONTH_PLURAL' => 'hónap',
                'YEAR_PLURAL' => 'év',
                'DECADE_PLURAL' => 'évtized',
                'SEC_PLURAL' => 'mp',
                'MIN_PLURAL' => 'perc',
                'HR_PLURAL' => 'ó',
                'WK_PLURAL' => 'hét',
                'MO_PLURAL' => 'hó',
                'YR_PLURAL' => 'év',
                'DEC_PLURAL' => 'évt'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>A validáció hibát talált:</b>',
                'INVALID_INPUT' => 'Az itt megadott érték érvénytelen:',
                'MISSING_REQUIRED_FIELD' => 'Ez a kötelező mező nincs kitöltve:'
            ]
        ],
        'it' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Il Form risulta invalido. Uno o più campi risultano omessi.',
                'NONCE_NOT_VALIDATED' => 'Oops è stato riscontrato un errore, si prega di ricontrollare i dati inseriti e provare di nuovo.',
                'FILES' => 'Invio dei Files',
                'ALLOW_MULTIPLE' => 'Consenti più di un file',
                'ALLOW_MULTIPLE_HELP' => 'Permette la selezione di più di un file per l\'upload',
                'DESTINATION' => 'Destinazione',
                'DESTINATION_HELP' => 'La destinazione dove i files vengono uploadati',
                'ACCEPT' => 'Tipi di MIME Concessi',
                'ACCEPT_HELP' => 'Una lista di tipi di MIME che sono permessi per l\'upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Errore durante la validazione del Captcha'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nessuna data fornita',
                'BAD_DATE' => 'Data errata',
                'AGO' => 'fa',
                'FROM_NOW' => 'da adesso',
                'SECOND' => 'secondo',
                'MINUTE' => 'minuto',
                'HOUR' => 'ora',
                'DAY' => 'giorno',
                'WEEK' => 'settimana',
                'MONTH' => 'mese',
                'YEAR' => 'anno',
                'DECADE' => 'decade',
                'SECOND_PLURAL' => 'secondi',
                'MINUTE_PLURAL' => 'minuti',
                'HOUR_PLURAL' => 'ore',
                'DAY_PLURAL' => 'giorni',
                'WEEK_PLURAL' => 'settimane',
                'MONTH_PLURAL' => 'mesi',
                'YEAR_PLURAL' => 'anni',
                'DECADE_PLURAL' => 'decadi'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validazione fallita:</b>',
                'INVALID_INPUT' => 'Input invalido in',
                'MISSING_REQUIRED_FIELD' => 'Campo richiesto mancante:'
            ]
        ],
        'cs' => [
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Datum nebylo vloženo',
                'BAD_DATE' => 'Chybné datum',
                'AGO' => 'zpět',
                'FROM_NOW' => 'od teď',
                'SECOND' => 'sekunda',
                'MINUTE' => 'minuta',
                'HOUR' => 'hodina',
                'DAY' => 'den',
                'WEEK' => 'týden',
                'MONTH' => 'měsíc',
                'YEAR' => 'rok',
                'DECADE' => 'dekáda',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'hod',
                'WK' => 't',
                'MO' => 'm',
                'YR' => 'r',
                'DEC' => 'dek',
                'SECOND_PLURAL' => 'sekundy',
                'MINUTE_PLURAL' => 'minuty',
                'HOUR_PLURAL' => 'hodiny',
                'DAY_PLURAL' => 'dny',
                'WEEK_PLURAL' => 'týdny',
                'MONTH_PLURAL' => 'měsíce',
                'YEAR_PLURAL' => 'roky',
                'DECADE_PLURAL' => 'dekády',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'hod',
                'WK_PLURAL' => 't',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'r',
                'DEC_PLURAL' => 'dek'
            ]
        ],
        'de' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'Personen',
                'man' => 'Menschen',
                'child' => 'Kinder',
                'sex' => 'Geschlecht',
                'move' => 'Züge'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Keine Daten vorhanden',
                'BAD_DATE' => 'Falsches Datum',
                'AGO' => 'her',
                'FROM_NOW' => 'ab jetzt',
                'SECOND' => 'Sekunde',
                'MINUTE' => 'Minute',
                'HOUR' => 'Stunde',
                'DAY' => 'Tag',
                'WEEK' => 'Woche',
                'MONTH' => 'Monat',
                'YEAR' => 'Jahr',
                'DECADE' => 'Dekade',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'std',
                'WK' => 'wo',
                'MO' => 'mo',
                'YR' => 'yh',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'Sekunden',
                'MINUTE_PLURAL' => 'Minuten',
                'HOUR_PLURAL' => 'Stunden',
                'DAY_PLURAL' => 'Tage',
                'WEEK_PLURAL' => 'Wochen',
                'MONTH_PLURAL' => 'Monate',
                'YEAR_PLURAL' => 'Jahre',
                'DECADE_PLURAL' => 'Dekaden',
                'SEC_PLURAL' => 'Sekunden',
                'MIN_PLURAL' => 'Minuten',
                'HR_PLURAL' => 'Stunden',
                'WK_PLURAL' => 'Wochen',
                'MO_PLURAL' => 'Monate',
                'YR_PLURAL' => 'Jahre',
                'DEC_PLURAL' => 'Dekaden'
            ]
        ],
        'nl' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'personen',
                'man' => 'mensen',
                'child' => 'kinderen',
                'sex' => 'geslacht',
                'move' => 'verplaatsen'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'geen datum opgegeven',
                'BAD_DATE' => 'Datumformaat onjuist',
                'AGO' => 'geleden',
                'FROM_NOW' => 'vanaf nu',
                'SECOND' => 'seconde',
                'MINUTE' => 'minuut',
                'HOUR' => 'uur',
                'DAY' => 'dag',
                'WEEK' => 'week',
                'MONTH' => 'maand',
                'YEAR' => 'jaar',
                'DECADE' => 'decenium',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'ma',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'seconden',
                'MINUTE_PLURAL' => 'minuten',
                'HOUR_PLURAL' => 'uren',
                'DAY_PLURAL' => 'dagen',
                'WEEK_PLURAL' => 'weken',
                'MONTH_PLURAL' => 'maanden',
                'YEAR_PLURAL' => 'jaren',
                'DECADE_PLURAL' => 'decennia',
                'SEC_PLURAL' => 'seconden',
                'MIN_PLURAL' => 'minuten',
                'HR_PLURAL' => 'uren',
                'WK_PLURAL' => 'weken',
                'MO_PLURAL' => 'maanden',
                'YR_PLURAL' => 'jaren',
                'DEC_PLURAL' => 'decs'
            ]
        ],
        'ru' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'люди',
                'man' => 'человек',
                'child' => 'ребенок',
                'sex' => 'пол',
                'move' => 'движется'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Дата не указана',
                'BAD_DATE' => 'Неверная дата',
                'AGO' => 'назад',
                'FROM_NOW' => 'теперь',
                'SECOND' => 'секунда',
                'MINUTE' => 'минута',
                'HOUR' => 'час',
                'DAY' => 'день',
                'WEEK' => 'неделя',
                'MONTH' => 'месяц',
                'YEAR' => 'год',
                'DECADE' => 'десятилетие',
                'SEC' => 'с',
                'MIN' => 'мин',
                'HR' => 'ч',
                'WK' => 'нед',
                'MO' => 'мес',
                'YR' => 'г.',
                'DEC' => 'гг.',
                'SECOND_PLURAL' => 'секунды',
                'MINUTE_PLURAL' => 'минуты',
                'HOUR_PLURAL' => 'часы',
                'DAY_PLURAL' => 'дни',
                'WEEK_PLURAL' => 'недели',
                'MONTH_PLURAL' => 'месяцы',
                'YEAR_PLURAL' => 'годы',
                'DECADE_PLURAL' => 'десятилетия',
                'SEC_PLURAL' => 'с',
                'MIN_PLURAL' => 'мин',
                'HR_PLURAL' => 'ч',
                'WK_PLURAL' => 'нед',
                'MO_PLURAL' => 'мес',
                'YR_PLURAL' => 'г.',
                'DEC_PLURAL' => 'гг.'
            ]
        ],
        'tr' => [
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Tarih yok',
                'BAD_DATE' => 'Yanlış tarih',
                'AGO' => 'önce',
                'FROM_NOW' => '(şimdiden)',
                'SECOND' => 'saniye',
                'MINUTE' => 'dakika',
                'HOUR' => 'saat',
                'DAY' => 'gün',
                'WEEK' => 'hafta',
                'MONTH' => 'ay',
                'YEAR' => 'yıl',
                'DECADE' => 'onyıl',
                'SEC' => 'sn',
                'MIN' => 'dk',
                'HR' => 'sa',
                'WK' => 'hft',
                'MO' => 'ay',
                'YR' => 'yl',
                'DEC' => 'onyl',
                'SECOND_PLURAL' => 'saniye',
                'MINUTE_PLURAL' => 'dakika',
                'HOUR_PLURAL' => 'saat',
                'DAY_PLURAL' => 'gün',
                'WEEK_PLURAL' => 'hafta',
                'MONTH_PLURAL' => 'ay',
                'YEAR_PLURAL' => 'yıl',
                'DECADE_PLURAL' => 'onyıl',
                'SEC_PLURAL' => 'sn',
                'MIN_PLURAL' => 'dk',
                'HR_PLURAL' => 'sa',
                'WK_PLURAL' => 'hft',
                'MO_PLURAL' => 'ay',
                'YR_PLURAL' => 'yl',
                'DEC_PLURAL' => 'onyl'
            ]
        ],
        'checksum' => 'da75930087caca545a02141c9f485be2'
    ]
];
