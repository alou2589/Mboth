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
        '/admin/arbre' => [[['_route' => 'app_arbre_index', '_controller' => 'App\\Controller\\ArbreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/arbre/new' => [[['_route' => 'app_arbre_new', '_controller' => 'App\\Controller\\ArbreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/admin/maladie' => [[['_route' => 'app_maladie_index', '_controller' => 'App\\Controller\\MaladieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/maladie/new' => [[['_route' => 'app_maladie_new', '_controller' => 'App\\Controller\\MaladieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/type/arbre' => [[['_route' => 'app_type_arbre_index', '_controller' => 'App\\Controller\\TypeArbreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/arbre/new' => [[['_route' => 'app_type_arbre_new', '_controller' => 'App\\Controller\\TypeArbreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/maladie' => [[['_route' => 'app_type_maladie_index', '_controller' => 'App\\Controller\\TypeMaladieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/maladie/new' => [[['_route' => 'app_type_maladie_new', '_controller' => 'App\\Controller\\TypeMaladieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:83)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:125)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:165)'
                    .'|wdt/([^/]++)(*:185)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:231)'
                            .'|router(*:245)'
                            .'|exception(?'
                                .'|(*:265)'
                                .'|\\.css(*:278)'
                            .')'
                        .')'
                        .'|(*:288)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|arbre/([^/]++)(?'
                        .'|(*:325)'
                        .'|/(?'
                            .'|edit(*:341)'
                            .'|delete(*:355)'
                        .')'
                    .')'
                    .'|c(?'
                        .'|ellule/([^/]++)(?'
                            .'|(*:387)'
                            .'|/(?'
                                .'|ed(?'
                                    .'|it(*:406)'
                                    .'|ucation(*:421)'
                                .')'
                                .'|delete(*:436)'
                                .'|liste(?'
                                    .'|secteur(*:459)'
                                    .'|personnes(*:476)'
                                .')'
                                .'|newsecteur(*:495)'
                            .')'
                        .')'
                        .'|lasse/([^/]++)(?'
                            .'|(*:522)'
                            .'|/(?'
                                .'|edit(*:538)'
                                .'|delete(*:552)'
                                .'|listeeleve(*:570)'
                                .'|neweleve(*:586)'
                            .')'
                        .')'
                    .')'
                    .'|e(?'
                        .'|cole/([^/]++)(?'
                            .'|(*:617)'
                            .'|/(?'
                                .'|edit(*:633)'
                                .'|delete(*:647)'
                                .'|listeclasse(*:666)'
                                .'|newclasse(*:683)'
                                .'|classe/([^/]++)/listeeleve(*:717)'
                            .')'
                        .')'
                        .'|leve/([^/]++)(?'
                            .'|(*:743)'
                            .'|/(?'
                                .'|edit(*:759)'
                                .'|delete(*:773)'
                            .')'
                        .')'
                    .')'
                    .'|ma(?'
                        .'|ison/([^/]++)(?'
                            .'|(*:805)'
                            .'|/(?'
                                .'|showcode(*:825)'
                                .'|edit(*:837)'
                                .'|delete(*:851)'
                                .'|listepersonne(*:872)'
                                .'|newpersonne(*:891)'
                                .'|maison/education(*:915)'
                                .'|codevalidationmaison(*:943)'
                            .')'
                            .'|(*:952)'
                        .')'
                        .'|ladie/([^/]++)(?'
                            .'|(*:978)'
                            .'|/edit(*:991)'
                            .'|(*:999)'
                        .')'
                    .')'
                    .'|niveauetude/([^/]++)(?'
                        .'|(*:1032)'
                        .'|/(?'
                            .'|edit(*:1049)'
                            .'|delete(*:1064)'
                            .'|listeecole(*:1083)'
                            .'|newecole(*:1100)'
                        .')'
                    .')'
                    .'|personne/([^/]++)(?'
                        .'|(*:1131)'
                        .'|/(?'
                            .'|edit(*:1148)'
                            .'|delete(*:1163)'
                        .')'
                    .')'
                    .'|quartier/([^/]++)(?'
                        .'|(*:1194)'
                        .'|/(?'
                            .'|ed(?'
                                .'|it(*:1214)'
                                .'|ucation(*:1230)'
                            .')'
                            .'|delete(*:1246)'
                            .'|liste(?'
                                .'|quartier(*:1271)'
                                .'|personnes(*:1289)'
                            .')'
                            .'|newcellule(*:1309)'
                        .')'
                    .')'
                    .'|secteur/([^/]++)(?'
                        .'|(*:1339)'
                        .'|/(?'
                            .'|ed(?'
                                .'|it(*:1359)'
                                .'|ucation(*:1375)'
                            .')'
                            .'|delete(*:1391)'
                            .'|liste(?'
                                .'|maison(*:1414)'
                                .'|personnes(*:1432)'
                            .')'
                            .'|newmaison(*:1451)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:1478)'
                        .'|/(?'
                            .'|edit(*:1495)'
                            .'|delete(*:1510)'
                        .')'
                    .')'
                .')'
                .'|/pointfocal/([^/]++)(*:1542)'
                .'|/type/(?'
                    .'|arbre/([^/]++)(?'
                        .'|(*:1577)'
                        .'|/(?'
                            .'|edit(*:1594)'
                            .'|delete(*:1609)'
                            .'|listearbre(*:1628)'
                            .'|newarbre(*:1645)'
                        .')'
                    .')'
                    .'|maladie/([^/]++)(?'
                        .'|(*:1675)'
                        .'|/(?'
                            .'|edit(*:1692)'
                            .'|delete(*:1707)'
                            .'|listearbre(*:1726)'
                            .'|newmaladie(*:1745)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        83 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        125 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        165 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        245 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        265 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        278 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        288 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        325 => [[['_route' => 'app_arbre_show', '_controller' => 'App\\Controller\\ArbreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        341 => [[['_route' => 'app_arbre_edit', '_controller' => 'App\\Controller\\ArbreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        355 => [[['_route' => 'app_arbre_delete', '_controller' => 'App\\Controller\\ArbreController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'app_cellule_show', '_controller' => 'App\\Controller\\CelluleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_cellule_edit', '_controller' => 'App\\Controller\\CelluleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        421 => [[['_route' => 'app_cellule_education', '_controller' => 'App\\Controller\\CelluleController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        436 => [[['_route' => 'app_cellule_delete', '_controller' => 'App\\Controller\\CelluleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'app_cellule_liste_secteur', '_controller' => 'App\\Controller\\CelluleController::listesecteur'], ['id'], ['GET' => 0], null, false, false, null]],
        476 => [[['_route' => 'app_cellule_personne', '_controller' => 'App\\Controller\\CelluleController::societe'], ['id'], ['GET' => 0], null, false, false, null]],
        495 => [[['_route' => 'app_cellule_new_secteur', '_controller' => 'App\\Controller\\CelluleController::new_secteur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [[['_route' => 'app_classe_show', '_controller' => 'App\\Controller\\ClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_classe_edit', '_controller' => 'App\\Controller\\ClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        552 => [[['_route' => 'app_classe_delete', '_controller' => 'App\\Controller\\ClasseController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        570 => [[['_route' => 'app_classe_liste_eleve', '_controller' => 'App\\Controller\\ClasseController::listeeleve'], ['id'], ['GET' => 0], null, false, false, null]],
        586 => [[['_route' => 'app_classe_new_eleve', '_controller' => 'App\\Controller\\ClasseController::neweleve'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        617 => [[['_route' => 'app_ecole_show', '_controller' => 'App\\Controller\\EcoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        633 => [[['_route' => 'app_ecole_edit', '_controller' => 'App\\Controller\\EcoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        647 => [[['_route' => 'app_ecole_delete', '_controller' => 'App\\Controller\\EcoleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'app_ecole_liste_classe', '_controller' => 'App\\Controller\\EcoleController::listeclasse'], ['id'], ['GET' => 0], null, false, false, null]],
        683 => [[['_route' => 'app_ecole_new_classe', '_controller' => 'App\\Controller\\EcoleController::newclasse'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        717 => [[['_route' => 'app_ecole_liste_eleve', '_controller' => 'App\\Controller\\EcoleController::students'], ['id', 'id_classe'], ['GET' => 0], null, false, false, null]],
        743 => [[['_route' => 'app_eleve_show', '_controller' => 'App\\Controller\\EleveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        759 => [[['_route' => 'app_eleve_edit', '_controller' => 'App\\Controller\\EleveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        773 => [[['_route' => 'app_eleve_delete', '_controller' => 'App\\Controller\\EleveController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        805 => [[['_route' => 'app_maison_show', '_controller' => 'App\\Controller\\MaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        825 => [[['_route' => 'app_maison_show_code', '_controller' => 'App\\Controller\\MaisonController::showcode'], ['id'], ['GET' => 0], null, false, false, null]],
        837 => [[['_route' => 'app_maison_edit', '_controller' => 'App\\Controller\\MaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        851 => [[['_route' => 'app_maison_delete', '_controller' => 'App\\Controller\\MaisonController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        872 => [[['_route' => 'app_maison_liste_personne', '_controller' => 'App\\Controller\\MaisonController::listepersonne'], ['id'], ['GET' => 0], null, false, false, null]],
        891 => [[['_route' => 'app_maison_new_personne', '_controller' => 'App\\Controller\\MaisonController::new_personne'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        915 => [[['_route' => 'app_maison_education', '_controller' => 'App\\Controller\\MaisonController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        943 => [[['_route' => 'app_maison_codevalidation', '_controller' => 'App\\Controller\\MaisonController::codevalidation'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        952 => [[['_route' => 'app_maison_information', '_controller' => 'App\\Controller\\MaisonController::infomaison'], ['id'], ['GET' => 0], null, false, true, null]],
        978 => [[['_route' => 'app_maladie_show', '_controller' => 'App\\Controller\\MaladieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        991 => [[['_route' => 'app_maladie_edit', '_controller' => 'App\\Controller\\MaladieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        999 => [[['_route' => 'app_maladie_delete', '_controller' => 'App\\Controller\\MaladieController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1032 => [[['_route' => 'app_niveau_etude_show', '_controller' => 'App\\Controller\\NiveauEtudeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1049 => [[['_route' => 'app_niveau_etude_edit', '_controller' => 'App\\Controller\\NiveauEtudeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1064 => [[['_route' => 'app_niveau_etude_delete', '_controller' => 'App\\Controller\\NiveauEtudeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1083 => [[['_route' => 'app_niveau_etude_liste_ecole', '_controller' => 'App\\Controller\\NiveauEtudeController::listeecole'], ['id'], ['GET' => 0], null, false, false, null]],
        1100 => [[['_route' => 'app_niveau_etude_new_ecole', '_controller' => 'App\\Controller\\NiveauEtudeController::newecole'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1131 => [[['_route' => 'app_personne_show', '_controller' => 'App\\Controller\\PersonneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1148 => [[['_route' => 'app_personne_edit', '_controller' => 'App\\Controller\\PersonneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1163 => [[['_route' => 'app_personne_delete', '_controller' => 'App\\Controller\\PersonneController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1194 => [[['_route' => 'app_quartier_show', '_controller' => 'App\\Controller\\QuartierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1214 => [[['_route' => 'app_quartier_edit', '_controller' => 'App\\Controller\\QuartierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1230 => [[['_route' => 'app_quartier_education', '_controller' => 'App\\Controller\\QuartierController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        1246 => [[['_route' => 'app_quartier_delete', '_controller' => 'App\\Controller\\QuartierController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1271 => [[['_route' => 'app_quartier_liste_cellule', '_controller' => 'App\\Controller\\QuartierController::listecellule'], ['id'], ['GET' => 0], null, false, false, null]],
        1289 => [[['_route' => 'app_quartier_personne', '_controller' => 'App\\Controller\\QuartierController::societe'], ['id'], ['GET' => 0], null, false, false, null]],
        1309 => [[['_route' => 'app_quartier_new_cellule', '_controller' => 'App\\Controller\\QuartierController::new_personne'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1339 => [[['_route' => 'app_secteur_show', '_controller' => 'App\\Controller\\SecteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1359 => [[['_route' => 'app_secteur_edit', '_controller' => 'App\\Controller\\SecteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1375 => [[['_route' => 'app_secteur_education', '_controller' => 'App\\Controller\\SecteurController::education'], ['id'], ['GET' => 0], null, false, false, null]],
        1391 => [[['_route' => 'app_secteur_delete', '_controller' => 'App\\Controller\\SecteurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1414 => [[['_route' => 'app_secteur_liste_maison', '_controller' => 'App\\Controller\\SecteurController::listemaison'], ['id'], ['GET' => 0], null, false, false, null]],
        1432 => [[['_route' => 'app_secteur_personnes', '_controller' => 'App\\Controller\\SecteurController::societe'], ['id'], ['GET' => 0], null, false, false, null]],
        1451 => [[['_route' => 'app_secteur_new_maison', '_controller' => 'App\\Controller\\SecteurController::newmaison'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1478 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1495 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1510 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1542 => [[['_route' => 'app_point_focal_accueil', '_controller' => 'App\\Controller\\PointFocal\\AccueilController::index'], ['id'], null, null, false, true, null]],
        1577 => [[['_route' => 'app_type_arbre_show', '_controller' => 'App\\Controller\\TypeArbreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1594 => [[['_route' => 'app_type_arbre_edit', '_controller' => 'App\\Controller\\TypeArbreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1609 => [[['_route' => 'app_type_arbre_delete', '_controller' => 'App\\Controller\\TypeArbreController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1628 => [[['_route' => 'app_type_arbre_liste_arbre', '_controller' => 'App\\Controller\\TypeArbreController::listearbre'], ['id'], ['GET' => 0], null, false, false, null]],
        1645 => [[['_route' => 'app_type_arbre_new_arbre', '_controller' => 'App\\Controller\\TypeArbreController::new_arbre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1675 => [[['_route' => 'app_type_maladie_show', '_controller' => 'App\\Controller\\TypeMaladieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1692 => [[['_route' => 'app_type_maladie_edit', '_controller' => 'App\\Controller\\TypeMaladieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1707 => [[['_route' => 'app_type_maladie_delete', '_controller' => 'App\\Controller\\TypeMaladieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1726 => [[['_route' => 'app_type_maladie_liste_maladie', '_controller' => 'App\\Controller\\TypeMaladieController::listearbre'], ['id'], ['GET' => 0], null, false, false, null]],
        1745 => [
            [['_route' => 'app_type_maladie_new_maladie', '_controller' => 'App\\Controller\\TypeMaladieController::new_maladie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
