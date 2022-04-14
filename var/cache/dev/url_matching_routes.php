<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/cellule' => [[['_route' => 'app_cellule_index', '_controller' => 'App\\Controller\\CelluleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cellule/new' => [[['_route' => 'app_cellule_new', '_controller' => 'App\\Controller\\CelluleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/classe' => [[['_route' => 'app_classe_index', '_controller' => 'App\\Controller\\ClasseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/classe/new' => [[['_route' => 'app_classe_new', '_controller' => 'App\\Controller\\ClasseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/ecole' => [[['_route' => 'app_ecole_index', '_controller' => 'App\\Controller\\EcoleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ecole/new' => [[['_route' => 'app_ecole_new', '_controller' => 'App\\Controller\\EcoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/eleve' => [[['_route' => 'app_eleve_index', '_controller' => 'App\\Controller\\EleveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/eleve/new' => [[['_route' => 'app_eleve_new', '_controller' => 'App\\Controller\\EleveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/maison' => [[['_route' => 'app_maison_index', '_controller' => 'App\\Controller\\MaisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/maison/new' => [[['_route' => 'app_maison_new', '_controller' => 'App\\Controller\\MaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/niveauetude' => [[['_route' => 'app_niveau_etude_index', '_controller' => 'App\\Controller\\NiveauEtudeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/niveauetude/new' => [[['_route' => 'app_niveau_etude_new', '_controller' => 'App\\Controller\\NiveauEtudeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/personne' => [[['_route' => 'app_personne_index', '_controller' => 'App\\Controller\\PersonneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/personne/new' => [[['_route' => 'app_personne_new', '_controller' => 'App\\Controller\\PersonneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/quartier' => [[['_route' => 'app_quartier_index', '_controller' => 'App\\Controller\\QuartierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/quartier/new' => [[['_route' => 'app_quartier_new', '_controller' => 'App\\Controller\\QuartierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/secteur' => [[['_route' => 'app_secteur_index', '_controller' => 'App\\Controller\\SecteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/secteur/new' => [[['_route' => 'app_secteur_new', '_controller' => 'App\\Controller\\SecteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/statistique' => [[['_route' => 'app_statistique', '_controller' => 'App\\Controller\\StatistiqueController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:48)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:90)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:129)'
                    .'|wdt/([^/]++)(*:149)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:195)'
                            .'|router(*:209)'
                            .'|exception(?'
                                .'|(*:229)'
                                .'|\\.css(*:242)'
                            .')'
                        .')'
                        .'|(*:252)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ellule/([^/]++)(?'
                            .'|(*:294)'
                            .'|/(?'
                                .'|ed(?'
                                    .'|it(*:313)'
                                    .'|ucation(*:328)'
                                .')'
                                .'|delete(*:343)'
                                .'|liste(?'
                                    .'|secteur(*:366)'
                                    .'|personnes(*:383)'
                                .')'
                                .'|newsecteur(*:402)'
                            .')'
                        .')'
                        .'|lasse/([^/]++)(?'
                            .'|(*:429)'
                            .'|/(?'
                                .'|edit(*:445)'
                                .'|delete(*:459)'
                                .'|listeeleve(*:477)'
                                .'|neweleve(*:493)'
                            .')'
                        .')'
                    .')'
                    .'|e(?'
                        .'|cole/([^/]++)(?'
                            .'|(*:524)'
                            .'|/(?'
                                .'|edit(*:540)'
                                .'|delete(*:554)'
                                .'|listeclasse(*:573)'
                                .'|newclasse(*:590)'
                                .'|classe/([^/]++)/listeeleve(*:624)'
                            .')'
                        .')'
                        .'|leve/([^/]++)(?'
                            .'|(*:650)'
                            .'|/(?'
                                .'|edit(*:666)'
                                .'|delete(*:680)'
                            .')'
                        .')'
                    .')'
                    .'|maison/([^/]++)(?'
                        .'|(*:709)'
                        .'|/(?'
                            .'|edit(*:725)'
                            .'|delete(*:739)'
                            .'|listepersonne(*:760)'
                            .'|newpersonne(*:779)'
                            .'|maison/education(*:803)'
                        .')'
                    .')'
                    .'|niveauetude/([^/]++)(?'
                        .'|(*:836)'
                        .'|/(?'
                            .'|edit(*:852)'
                            .'|delete(*:866)'
                            .'|listeecole(*:884)'
                            .'|newecole(*:900)'
                        .')'
                    .')'
                    .'|personne/([^/]++)(?'
                        .'|(*:930)'
                        .'|/(?'
                            .'|edit(*:946)'
                            .'|delete(*:960)'
                        .')'
                    .')'
                    .'|quartier/([^/]++)(?'
                        .'|(*:990)'
                        .'|/(?'
                            .'|ed(?'
                                .'|it(*:1009)'
                                .'|ucation(*:1025)'
                            .')'
                            .'|delete(*:1041)'
                            .'|liste(?'
                                .'|quartier(*:1066)'
                                .'|personnes(*:1084)'
                            .')'
                            .'|newcellule(*:1104)'
                        .')'
                    .')'
                    .'|secteur/([^/]++)(?'
                        .'|(*:1134)'
                        .'|/(?'
                            .'|ed(?'
                                .'|it(*:1154)'
                                .'|ucation(*:1170)'
                            .')'
                            .'|delete(*:1186)'
                            .'|liste(?'
                                .'|maison(*:1209)'
                                .'|personnes(*:1227)'
                            .')'
                            .'|newmaison(*:1246)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:1273)'
                        .'|/(?'
                            .'|edit(*:1290)'
                            .'|delete(*:1305)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        90 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        129 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        149 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        209 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        229 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        242 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        252 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        294 => [[['_route' => 'app_cellule_show', '_controller' => 'App\\Controller\\CelluleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'app_cellule_edit', '_controller' => 'App\\Controller\\CelluleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'app_cellule_education', '_controller' => 'App\\Controller\\CelluleController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        343 => [[['_route' => 'app_cellule_delete', '_controller' => 'App\\Controller\\CelluleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        366 => [[['_route' => 'app_cellule_liste_secteur', '_controller' => 'App\\Controller\\CelluleController::listesecteur'], ['id'], ['GET' => 0], null, false, false, null]],
        383 => [[['_route' => 'app_cellule_personne', '_controller' => 'App\\Controller\\CelluleController::societe'], ['id'], ['GET' => 0], null, false, false, null]],
        402 => [[['_route' => 'app_cellule_new_secteur', '_controller' => 'App\\Controller\\CelluleController::new_secteur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        429 => [[['_route' => 'app_classe_show', '_controller' => 'App\\Controller\\ClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_classe_edit', '_controller' => 'App\\Controller\\ClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'app_classe_delete', '_controller' => 'App\\Controller\\ClasseController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'app_classe_liste_eleve', '_controller' => 'App\\Controller\\ClasseController::listeeleve'], ['id'], ['GET' => 0], null, false, false, null]],
        493 => [[['_route' => 'app_classe_new_eleve', '_controller' => 'App\\Controller\\ClasseController::neweleve'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        524 => [[['_route' => 'app_ecole_show', '_controller' => 'App\\Controller\\EcoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        540 => [[['_route' => 'app_ecole_edit', '_controller' => 'App\\Controller\\EcoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'app_ecole_delete', '_controller' => 'App\\Controller\\EcoleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        573 => [[['_route' => 'app_ecole_liste_classe', '_controller' => 'App\\Controller\\EcoleController::listeclasse'], ['id'], ['GET' => 0], null, false, false, null]],
        590 => [[['_route' => 'app_ecole_new_classe', '_controller' => 'App\\Controller\\EcoleController::newclasse'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        624 => [[['_route' => 'app_ecole_liste_eleve', '_controller' => 'App\\Controller\\EcoleController::students'], ['id', 'id_classe'], ['GET' => 0], null, false, false, null]],
        650 => [[['_route' => 'app_eleve_show', '_controller' => 'App\\Controller\\EleveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        666 => [[['_route' => 'app_eleve_edit', '_controller' => 'App\\Controller\\EleveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        680 => [[['_route' => 'app_eleve_delete', '_controller' => 'App\\Controller\\EleveController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        709 => [[['_route' => 'app_maison_show', '_controller' => 'App\\Controller\\MaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        725 => [[['_route' => 'app_maison_edit', '_controller' => 'App\\Controller\\MaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        739 => [[['_route' => 'app_maison_delete', '_controller' => 'App\\Controller\\MaisonController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        760 => [[['_route' => 'app_maison_liste_personne', '_controller' => 'App\\Controller\\MaisonController::listepersonne'], ['id'], ['GET' => 0], null, false, false, null]],
        779 => [[['_route' => 'app_maison_new_personne', '_controller' => 'App\\Controller\\MaisonController::new_personne'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        803 => [[['_route' => 'app_maison_education', '_controller' => 'App\\Controller\\MaisonController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        836 => [[['_route' => 'app_niveau_etude_show', '_controller' => 'App\\Controller\\NiveauEtudeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_niveau_etude_edit', '_controller' => 'App\\Controller\\NiveauEtudeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        866 => [[['_route' => 'app_niveau_etude_delete', '_controller' => 'App\\Controller\\NiveauEtudeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        884 => [[['_route' => 'app_niveau_etude_liste_ecole', '_controller' => 'App\\Controller\\NiveauEtudeController::listeecole'], ['id'], ['GET' => 0], null, false, false, null]],
        900 => [[['_route' => 'app_niveau_etude_new_ecole', '_controller' => 'App\\Controller\\NiveauEtudeController::newecole'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        930 => [[['_route' => 'app_personne_show', '_controller' => 'App\\Controller\\PersonneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        946 => [[['_route' => 'app_personne_edit', '_controller' => 'App\\Controller\\PersonneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        960 => [[['_route' => 'app_personne_delete', '_controller' => 'App\\Controller\\PersonneController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        990 => [[['_route' => 'app_quartier_show', '_controller' => 'App\\Controller\\QuartierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1009 => [[['_route' => 'app_quartier_edit', '_controller' => 'App\\Controller\\QuartierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1025 => [[['_route' => 'app_quartier_education', '_controller' => 'App\\Controller\\QuartierController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        1041 => [[['_route' => 'app_quartier_delete', '_controller' => 'App\\Controller\\QuartierController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1066 => [[['_route' => 'app_quartier_liste_cellule', '_controller' => 'App\\Controller\\QuartierController::listecellule'], ['id'], ['GET' => 0], null, false, false, null]],
        1084 => [[['_route' => 'app_quartier_personne', '_controller' => 'App\\Controller\\QuartierController::societe'], ['id'], ['GET' => 0], null, false, false, null]],
        1104 => [[['_route' => 'app_quartier_new_cellule', '_controller' => 'App\\Controller\\QuartierController::new_personne'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1134 => [[['_route' => 'app_secteur_show', '_controller' => 'App\\Controller\\SecteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1154 => [[['_route' => 'app_secteur_edit', '_controller' => 'App\\Controller\\SecteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1170 => [[['_route' => 'app_secteur_education', '_controller' => 'App\\Controller\\SecteurController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        1186 => [[['_route' => 'app_secteur_delete', '_controller' => 'App\\Controller\\SecteurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1209 => [[['_route' => 'app_secteur_liste_maison', '_controller' => 'App\\Controller\\SecteurController::listemaison'], ['id'], ['GET' => 0], null, false, false, null]],
        1227 => [[['_route' => 'app_secteur_personnes', '_controller' => 'App\\Controller\\SecteurController::societe'], ['id'], ['GET' => 0], null, false, false, null]],
        1246 => [[['_route' => 'app_secteur_new_maison', '_controller' => 'App\\Controller\\SecteurController::newmaison'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1273 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1290 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1305 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
