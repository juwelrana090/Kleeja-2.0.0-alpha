<?php
//
// kleeja language, admin
// French
// By: 2lo.in , Email: webmaster@2lo.in 

if (!defined('IN_COMMON'))
        exit;

if (empty($lang) || !is_array($lang))
        $lang = array();


$lang = array_merge($lang, array(
        'U_NOT_ADMIN'                   => 'Vous n\'avez pas les permissions Administration',
        'UPDATE_CONFIG'                 => 'Mise à jour de la config',
        'NO_CHANGE'                     => 'Aucun changement',
        'CHANGE_MD5'                    => 'Changer en MD5',
        'CHANGE_TIME'                   => 'Changer en HEURE',
        'SITENAME'                              => 'Nom du Service',
        'SITEMAIL'                              => 'Adresse Email',
        'SITEMAIL2'                     => 'Email pour les Rapports',
        'SITEURL'                               => 'URL du Service avec / à la fin',
        'FOLDERNAME'                    => 'Dossier pour les fichiers téléchargés',
        'PREFIXNAME'                    => 'Préfixe Fichiers <small>( vous pouvez aussi utiliser {rand:4} , {date:d_Y})</small>',
        'FILESNUM'                              => 'Nombre de champs pour les transferts',
        'FILESNUM_SHOW'                 => 'Afficher tous les champs',
        'SITECLOSE'                     => 'Arrêté le Service',
        'CLOSEMSG'                              => 'Message du Service',
        'DECODE'                                => 'Changer le nom du fichier',
        'SEC_DOWN'                              => 'Secondes avant de télécharger',
        'STATFOOTER'                    => 'Statistiques en bas de page',
        'GZIP'                                  => 'utiliser gzip',
        'GOOGLEANALYTICS'               => '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
        'WELCOME_MSG'                   => 'Messsage de Bienvenue',
        'USER_SYSTEM'                   => 'Système Utilisateurs',
        'ENAB_REG'                              => 'Autoriser les inscriptions',
        'TOTAL_SIZE'                    => 'Quota Maximum du service [Mo]',
        'THUMBS_IMGS'                   => 'Activer les vignettes images',
        'WRITE_IMGS'                    => 'Activer le filigrame',
        'ID_FORM'                               => 'Form ID',
        'IDF'                                   => 'ID du fichier dans la Base',
        'IDFF'                                  => 'Nom du fichier',
        'IDFD'                                  => 'Direct',
        'DEL_URL_FILE'                  => 'Activer la suppression des fichiers par URL',
        'WWW_URL'                               => 'Activer le téléchargement par URL',
        'ALLOW_STAT_PG'                 => 'Activer les statistiques',
        'ALLOW_ONLINE'                  => 'Activer qui est en ligne',
        'MOD_WRITER'                    => 'Mod Rewrite',
        'MOD_WRITER_EX'                 => 'Liens HTML..',
        'DEL_F_DAY'                     => 'Supprimer les fichiers non télécharger dans',
        'NUMFIELD_S'                    => 'Vous ne pouvez utiliser des numéros de certains champs !!',
        'CONFIGS_UPDATED'               => 'Mise à Jour de la configuration réussie.',
        'UPDATE_EXTS'                   => 'Mise à Jour des Extensions',
        'SIZE_G'                                => 'Taille [ <font style="color:red">Visiteur</font> ]',
        'SIZE_U'                                => 'Taille [ <font style="color:green">Utilisateur</font> ]',
        'ALLOW_G'                               => 'Autoriser <br />[Visiteur]',
        'ALLOW_U'                               => 'Autoriser <br />[Utilisateur]',
        'E_EXTS'                                => 'Note : Les tailles sont en Kilo-Octets .</i>',
        'UPDATED_EXTS'                  => 'Mise à Jour des Extensions réussie.',
        'UPDATE_REPORTS'                => 'Mise à Jour des Rapports',
        'E_CLICK'                               => 'Sélectionnez ce que vous voulez afficher',
        'REPLY'                                 => '[ Répondre ]',
        'REPLY_REPORT'                  => 'Répondre au Rapport',
        'U_REPORT_ON'                   => 'Pour votre rapport sur ',
        'BY_EMAIL'                              => 'PAr email ',
        'ADMIN_REPLIED'                 => 'Réponse Admin',
        'CANT_SEND_MAIL'                => 'Impossible de répondre par Email',
        'IS_SEND_MAIL'                  => 'La réponse a été envoyée.',
        'REPORTS_UPDATED'               => 'Mise à Jour des Rapports réussie.',
        'UPDATE_CALSS'                  => 'Mettre à Jour des Commentaires',
        'REPLY_CALL'                    => 'Répondre au commentaire',
        'REPLIED_ON_CAL'                => 'A propos du commenataire ',
        'CALLS_UPDATED'                 => 'Mise à Jour des commentaires réussie.',
        'IS_ADMIN'                              => 'Admin',
        'UPDATE_USERS'                  => 'Mettre à Jour des Utilisateurs',
        'USERS_UPDATED'                 => 'Mise à Jour des Utilisateurs réussie.',
        'E_BACKUP'                              => 'Sélectionnez les Tables que vous voulez sauvegardées (BACK-UP):',
        'TAKE_BK'                               => 'Back-Up (Sauvegarde)',
        'REPAIRE_TABLE'                 => '[Tables] Réparées. ',
        'REPAIRE_F_STAT'                => '[stats] Réparation des fichiers.',
        'REPAIRE_S_STAT'                => '[stats] Réparation du Quota des fichiers.',
        'REPAIRE_CACHE'                 => '[Cache] Supprimé pour  ..',
        'KLEEJA_CP'                     => '[ Kleeja ] Administration',
        'GENERAL_STAT'                  => 'Statistiques Générales',
        'OTHER_INFO'                    => 'Autres Infos',
        'AFILES_NUM'                    => 'Nombre total de fichiers',
        'AFILES_SIZE'                   => 'Taille totale des fichiers',
        'AFILES_SIZE_SPACE'     => 'Espace disque déjà utilisé',
        'AUSERS_NUM'                    => 'Total Utilisateurs',
        'LAST_GOOGLE'                   => 'Dernière visite de Google',
        'GOOGLE_NUM'                    => 'Visites Google',
        'LAST_YAHOO'                    => 'Dernière visite Yahoo!',
        'YAHOO_NUM'                     => 'Visites Yahoo!',
        'KLEEJA_CP_W'                   => 'Bonjour ! [ %s ] , Bienvenue sur <b>Kleeja</b> panneau de contrôle administration',
        'PHP_VER'                               => 'Version php',
        'MYSQL_VER'                     => 'Version mysql',
        'LOGOUT_CP_OK'                  => 'La session administration a été effacée ..',
        'R_CONFIGS'                     => 'Configuration Générale',
        'R_CPINDEX'                     => 'Index Admin',
        'R_EXTS'                                => 'Gestion des Extensions',
        'R_FILES'                               => 'Contôle des fichiers',
        'R_REPORTS'                     => 'Rapports',
        'R_CALLS'                               => 'Messages',
        'R_USERS'                               => 'Contrôle des Utilisateurs',
        'R_BCKUP'                               => 'Back-Up',
        'R_REPAIR'                              => 'Réparation Totale',
        'R_LGOUTCP'                     => 'Effacer la Session',
        'R_BAN'                                 => 'Contôle IP',
        'BAN_EXP1'                              => 'Editer les IP à Bannir, ajouter les ici ..',
        'BAN_EXP2'                              => 'Utiliser le symbole (*) pour remplacer les chiffres si vous voulez bannir plusieurs IP.... et utiliser (|) pour séparer les IP',
        'UPDATE_BAN'                    => 'Sauver les changements',
        'BAN_UPDATED'                   => 'La modification a été réussie.',
        'R_RULES'                               => 'Termes',
        'RULES_EXP'                     => 'Pous pouvez éditer les Termes et Conditions d\'utilisation du service ici.',
        'UPDATE_RULES'                  => 'Mettre à Jour',
        'RULES_UPDATED'                 => 'Mise à Jour des Termes et conditions réussie ..',
        'R_SEARCH'                              => 'Recherche Avancée',
        'SEARCH_FILES'                  => 'Recherche du fichier',
        'SEARCH_SUBMIT'                 => 'Chercher',
        'LAST_DOWN'                     => 'Dernier téléchargement',
        'WAS_B4'                                => 'Depuis',
        'SEARCH_USERS'                  => 'Recherche utilisateurs',
        'R_IMG_CTRL'                    => 'Contrôle des images',
        'ENABLE_USERFILE'               => 'Activer les fichiers utilisateurs',
        'R_EXTRA'                               => 'Templates Extra',
        'EX_HEADER_N'                   => 'Extra header ... Ce qui va s\'afficher en haut de votre page web',
        'EX_FOOTER_N'                   => 'Extra footer ... Ce qui va s\'afficher au bas de votre page web',
        'UPDATE_EXTRA'                  => 'Mettre à jour les ajouts de template',
        'EXTRA_UPDATED'                 => 'L\'ajout de Template a été mis à jour',
        'R_STYLES'                              => 'Styles',
        'STYLES_EXP'                    => 'Sélectionnez un style pour le supprimer ou le mettre à jour',
        'SHOW_TPLS'                     => 'Afficher les Templates',
        'TPL_UPDATED'                   => 'Mise à Jour du Template réussie...',
        'TPL_DELETED'                   => 'Suppression du Template ...',
        'NO_TPL_SHOOSED'                => 'Vous n\'avez pas sélectionné un Template!',
        'NO_TPL_NAME_WROTE'     => 'Veuillez entrer le nom de ce template!',
        'ADD_NEW_STYLE'                 => 'Créer un nouveau style',
        'EXPORT_AS_XML'                 => 'Exporter en xml',
        'NEW_STYLES_EXP'                => 'Télécharger un style depuis un fichier XML',
        'NEW_STYLE_ADDED'               => 'Mise à Jour du Style réussie',
       
        'ERR_IN_UPLOAD_XML_FILE'                => '(ERR:XML) Erreur téléchargement...',
        'ERR_UPLOAD_XML_FILE_NO_TMP'    => '(ERR:NOTMP) Erreur téléchargement...',
        'ERR_UPLOAD_XML_NO_CONTENT'     => 'Le fichier sélectionné est vide!',
        'ERR_XML_NO_G_TAGS'                     => 'Certaines balises requises sont manquantes à partir du fichier!',
        'STYLE_DELETED'                                 => 'Le Style a été supprimé avec succès',
        'STYLE_1_NOT_FOR_DEL'                   => 'Vous ne pouvez pas supprimer le Style par défaut!',
        'ADD_NEW_TPL'                                   => 'Ajouter un nouveau template',
        'ADD_NEW_TPL_EXP'                               => 'Entrer le nom du Template',
        'TPL_CREATED'                                   => 'Le Nouveau Template a été créé avec succès...',
        'R_LANGS'                                               => 'mots et phrases',
        'WORDS_UPDATED'                                 => 'Les mots ont été enregistrés avec succès...',
        'R_PLUGINS'                                       => 'Plugins',
        'PLUGINS_EX'                            => 'Delete or updated plugins here...',
        'ADD_NEW_PLUGIN'                        => 'Ajouter des plugins',
        'ADD_NEW_PLUGIN_EXP'            => 'Télécharger le plugin depuis un fichier XML',
        'PLUGIN_DELETED'                        => 'Plugin supprimé...',
        'PLGUIN_DISABLED_ENABLED'       => 'Plugin Activer / Désactiver',
        'NO_PLUGINS'                            => 'Aucun Plugin trouvé',
        'NEW_PLUGIN_ADDED'                      => 'Plugin ajouté ... <br /> Note: certains plugins sont livrés avec des fichiers supplémentaires, vous aurez besoin de les transférer dans le dossier racine de Kleeja.',
        'PLUGIN_EXISTS_BEFORE'          => 'Ce plugin existe dans cette même version ou plus, donc pas besoin de le mettre à jour!.',
        'PLUGIN_UPDATED_SUCCESS'        => 'Mise à Jour du Plugin réussie...',
        'R_CHECK_UPDATE'                        => 'Vérifier les mises à jour',
        'ERROR_CHECK_VER'                       => 'Erreur: Impossible de faire des mises à jour pour le momoent, réessayez plus tard !',
        'UPDATE_KLJ_NOW'                        => 'Vous devez mettre à jour votre version maintenant!. visiter Kleeja.com pour plus d\'inforamtion',
        'U_LAST_VER_KLJ'                        => 'Vous utilisez la dernière version de Kleeja...',
        'U_USE_PRE_RE'                          => 'Vous utilisez une Pré-version, <a href="http://www.kleeja.com/bugs/">Cliquez ici</a> pour faire des rapports sur les éventuels BUGS.',
        'STYLE_IS_DEFAULT'                      => 'Style par défaut',
        'MAKE_AS_DEFAULT'                       => 'Mettre par défaut',
        'TPLS_RE_BASIC'                         =>      'Templates Basic',
        'TPLS_RE_MSG'                           =>      'Notification templates',
        'TPLS_RE_USER'                          =>      'Templates utilisateurs',
        'TPLS_RE_OTHER'                         =>      'Autres templates',
        'STYLE_NOW_IS_DEFAULT'          => 'Le style "%s" a été mis par défaut',
        'STYLE_DIR_NOT_WR'                      =>      'Le dossier Styles %s n\est pas ré-inscriptible, vous ne pouvez pas l\'éditer (effectuer un CHMOD en 777).',
        'TPL_PATH_NOT_FOUND'            => 'Template %s introuvable !',
        'NO_CACHED_STYLES'                      => 'Aucun style actuellement en mémoire cache !',
        'SEARCH_FOR'                            => 'Cherche ',
        'REPLACE_WITH'                          => 'Replace avec',
        'REPLACE_TO_REACH'                      => 'Jusqu\'à ce que vous atteigniez le code suivant',
        'ADD_AFTER'                                     => 'Ajouter après',
        'ADD_AFTER_SAME_LINE'           => 'Ajouter après dans la même ligne',
        'ADD_BEFORE'                            => 'Ajouter avant',
        'ADD_BEFORE_SAME_LINE'          => 'Ajouter avant dans la même ligne',
        'ADD_IN'                                        => 'Ajouter à cela après création',
        'CACHED_STYLES_DELETED'         =>'Cache styles supprimé.',
        'CACHED_STYLES'                         =>' Styles cache',
        'DELETE_CACHED_STYLES'          =>'Supprimer le cache Styles',
        'CACHED_STYLES_DISC'            =>      'Les modèles stockés sont les modifications qui restent des ajouts qui ne sont pas appliquées, soit parce que les autorisations ou l\'absence d\'une recherche appropriée mot-clés. Par conséquent, il doit être réglé manuellement %s .',
        'UPDATE_NOW_S'                          =>      'Vous utilisez une ancienne version de Kleeja. Veuillez faire la mise à jour. Votre version actuelle est la %1$s et la dernière version en cours est la %2$s',
        'ADD_NEW_EXT'                           => 'Ajouter une nouvelle extension',
        'ADD_NEW_EXT_EXP'                       => 'Entrer l\'extension et sélectionnez une catégorie',
        'EMPTY_EXT_FIELD'                       =>      'Le champ de l\'extension est vide!',
        'NEW_EXT_ADD'                           =>      'La nouvelle extension a été ajoutée. ',
        'NEW_EXT_EXISTS_B4'                     =>      'L\'extension %s existe déjà!.',
        'NOT_SAFE_FILE'                         => 'Le fichier "%s" ne semble pas être très sécurisant pour les pirates !',
        'CONFIG_WRITEABLE'                      => 'Le fichier config.php est inscriptible, il est fortement recommendé de le modifier en 640 ou 644 (CHMOD).',
        'NO_KLEEJA_COPYRIGHTS'          => 'Vous semblez avoir accidentellement supprimé les droits d\'auteurs (copyright) au bas de la page, s\'il vous plaît veuillez le remettre pour que nous puissions continuer à développer Kleeja gratuitement, vous pouvez acheter une licence de droit d\'auteur %s .',
        'USERS_NOT_NORMAL_SYS'          => 'Le système actuel utilisateurs ne semble par normal, ce qui signifie que les utilisateurs ne actuels peuvent pas être modifiées d\'ici, mais à partir du script qui a été intégré avec Kleeja, les utilisateurs utilisent le système d\'adhésion normale.',
        'DIMENSIONS_THMB'                       => 'Dimension des vignettes',
     	'ADMIN_DELETE_FILE_ERR'		=> 'Une Erreur s\'est produite tout en essayant de supprimer les fichiers des utilisateurs . ',
		'ADMIN_DELETE_FILE_OK'		=> 'OK ! ',
		'ADMIN_DELETE_FILES'		=> 'Supprimer tous les fichiers',
       
      	'KLJ_MORE_PLUGINS'			=> array('Télécharger d\'autres plugins dans le Centre des Plugins Kleeja ,<a target="_blank" href="http://www.kleeja.com/plugins/">Cliquer ici</a> .',
								'تtes-vous un developpeur? Si vous avez créé des plugins pour Kleeja & que vous voulez les publier dans le centre des plugins Kleeja? <a target="_blank" href="http://www.kleeja.com/plugins/">cliquez  ici</a>. ',
								),
		'KLJ_MORE_STYLES'			=> array('Télécharger d\'autres Styles dans la galerie des styles Kleeja ,<a target="_blank" href="http://www.kleeja.com/styles/">cliquer ici</a> .',
								'تtes-vous un graphiste? envoyez vos styles dans la gelerie des styles Kleeja pour les autres utilisateurs? <a target="_blank" href="http://www.kleeja.com/styles/">cliquer ici</a> .',
								),
							 
        'BCONVERTER'                            => 'Convertisseur d\'Octets',
        'NO_HTACCESS_DIR_UP'            => 'Aucun fichier .htaccess trouvé dans le dossier "%s", Ce qui signifie que si les codes malveillants ont été injectés, un pirate peut faire des dégâts à votre site Web!',
        'NO_HTACCESS_DIR_UP_THUMB'      => 'Aucun fichier .htaccess trouvé dans le dossier "%s", Ce qui signifie que si les codes malveillants ont été injectés, un pirate peut faire des dégâts à votre site Web!',
        'COOKIE_DOMAIN'                         => 'Domaine du Cookie',
        'COOKIE_NAME'                           => 'Préfixe du Cookie',
        'COOKIE_PATH'                           => 'Chemin du Cookie',
        'COOKIE_SECURE'                         => 'Sécurisé le Cookie',
        'ADMINISTRATORS'                        => 'Administrateurs',
        'DELETEALLRES'                          => 'Supprimer tous les résultats',
        'ADMIN_DELETE_FILES_OK'     => 'Le fichier %s a été supprimé avec suucès',
        'ADMIN_DELETE_FILES_NOF'        => 'Aucun fichier a supprimer',
        'NOT_EXSIT_USER'                        => 'Désolé, l\'utilisateur que vous recherché n\'existe pas dans notre base de données ... peut-être que vous essayez d\'atteindre un membre supprimé !!!!',
        'ADMIN_DELETE_NO_FILE'          => 'Cet utilisateur n\'a aucun fichier a supprimé ! .',
        'CONFIG_KLJ_MENUS_OTHER'        => 'Autres configurations',
        'CONFIG_KLJ_MENUS_GENERAL'      => 'COnfiguration Générale',
        'CONFIG_KLJ_MENUS_ALL'          => 'Afficher toutes les configs',
        'CONFIG_KLJ_MENUS_UPLOAD'       => 'Gestion des Transferts',
        'CONFIG_KLJ_MENUS_INTERFACE'=> 'Gestion de l\'Interface',
        'CONFIG_KLJ_MENUS_ADVANCED' => 'Configuration Avancée',
        'DELF_CAUTION'                          => '<span class="delf_caution">Note: cette fonction peut être dangereuse lors de l\'utilisation de petits nombres .</span>',
        'PLUGIN_N_CMPT_KLJ'                     => 'Ce Plugin n\'est pas compatible avec cette version de Kleeja.',
        'PHPINI_FILESIZE_SMALL'         => 'Le quota maximum pour le stockage des fichiers est de "%1$s", veuillez modifier la fonction upload_max_filesize dans les paramètres PHP. Elle est réglée sur "%2$s".',
        'PHPINI_MPOSTSIZE_SMALL'        => 'Vous avez permis le téléchargement pour vos fichiers : "%1$s", vous devez utiliser une valeur plus grande pour post_max_size dans votre serveur PHP, quelque chose comme "%2$s" pour une meilleure performance.',
        'NUMPER_REPORT'                         => 'Nombre de rapports',
        'NO_UP_CHANGE_S'                        => 'Aucun changement ...',
        'ADD_HEADER_EXTRA'                      => 'Extra Header',
        'ADD_FOOTER_EXTRA'                      => 'Extra footer',
        'ADMIN_USING_IE6'                       => 'Vous utilisez le navigateur IE6, veuillez faire une mise à jour ou bien utiliser FireFox maintenant!!',
        'FOOTER_TXTS'                           => array('PLUGINS'=> 'Plugins', 'STYLES'=>'Styles', 'BUGS'=>'Rapports BUGS'),
        'T_ISNT_WRITEABLE'                      => 'Impossible d\'éditer le template <strong>%s</strong>. Il n\'est pas (ré-inscriptible)',
        'T_CLEANING_FILES_NOW'          => 'Suppression des fichiers temporaires, le processus pourrait prendre un certain temps en fonction de la taille des fichiers.',
        'HOW_UPDATE_KLEEJA'                     => 'Comment mettre à niveau Kleeja?',
        'HOW_UPDATE_KLEEJA_STEP1'       => 'Visiter le site officiel <a target="_blank" href="http://www.kleeja.com/">Kleeja.com</a> puis passez à la page de téléchargement et de télécharger la dernière version du script, ou télécharger une copie mise à niveau si elle est disponible.',
        'HOW_UPDATE_KLEEJA_STEP2'       => 'Décompressez le fichier et de le transférer sur votre site Web pour les remplacer avec les anciens fichiers <b>Sauf le fichier config.php</b>.',
        'HOW_UPDATE_KLEEJA_STEP3'       => 'Lorsque vous avez terminé, allez à l\'adresse url suivante pour mettre à jour la base de données.',
        'RETURN_TEMPLATE_BK'            => 'Restaurer la sauvagarde (back-up) des templates',
        'RETURN_TEMPLATE_BK_EXP'        => 'Choisissez un modèle de sauvegarde pour restaurer à l\'original, ces modèles appartiennent au style par défaut.',
        'TPL_BK_RETURNED'                       => 'Copie de sauvegarde restaurée pour le Template %s.',
        'REPLACE_WHOLW_TPL'                     => 'Remplacer l\'ensemble du Template',
        'DEPEND_ON_NO_STYLE_ERR'        => 'Ce style est basé sur le style "%s". Ce que vous ne semblez pas avoir',
        'PLUGINS_REQ_NO_STYLE_ERR'      => 'Ce style demande que le plugin [ %s ] soit installé , veuillez l\'installer et essayer à nouveau !.',
        'PLUGIN_REQ_BY_STYLE_ERR'       => 'Le style par défaut actuelle exige le présent plugin pour pouvoir être supprimé ou désactivé. Vous devez d\'abord changer de style.',
        'KLJ_VER_NO_STYLE_ERR'          => 'Ce style requis la version %s ou supérieure',
        'KLJ_STYLE_INFO'                        => 'Info du Style',
        'STYLE_NAME'                            => 'Nom Style',
        'STYLE_COPYRIGHT'                       => 'Copyrights',
        'STYLE_VERSION'                         => 'Version du Style',
        'STYLE_DEPEND_ON'                       => 'Basé sur',
        'MESSAGE_NONE'                          => 'Pas encore de messages ...',
        'KLEEJA_TEAM'                           => 'Equipe de développement Kleeja',
        'ERR_SEND_MAIL'                         => 'Erreur sur l\'envoi du message Mail, veuillez recommencer plus tard !',
        'FIND_IP_FILES'                         => 'Trouvé',
        'ALPHABETICAL_ORDER_FILES'      => 'Trié les fichiers par ordre alphabetique',
        'ORDER_SIZE'                            => 'Trié les fichiers par taille du plus grand au plus petit',
        'ORDER_TOTAL_DOWNLOADS'         => 'Trié les fichiers par nombre de téléchargements',
        'COMMA_X'                                       => '<p class="live_xts">Séparé par des virgules (<font style="font-size:large"> , </font>)</p>',
        'NO_SEARCH_WORD'                        => 'Vous n\'avez rien mis dans le formulaire de recherche !',
        'GUESTSECTOUPLOAD'                      => 'Temps (nombre de secondes) entre chaque processus de téléchargement pour les visiteurs',
        'USERSECTOUPLOAD'                       => 'Temps (nombre de secondes) entre chaque processus de téléchargement pour les utilisateurs',
		'ADM_UNWANTED_FILES'		=> 'Il semble que vous avez mis à niveau à partir d\'une version ultérieure, et parce que les différents noms de certains fichiers, vous remarquerez la présence de fréquentes touches du panneau de contrôle. <br /> Pour résoudre le problème, supprimez tous les fichiers dans le dossier "includes/adm" et ré-essayez de nouveau.',
		'ADVANCED_SETTINGS_CATUION' => 'Attention: vous devez savoir ce que ces paramètres vont être modifiés!',
		'HTML_URLS_ENABLED_NO_HTCC'	=> 'J\'ai mis des liens HTML, mais vous devez transférer un fichier situé dans le dossier docs/.htaccess.txt. Renommez le en ". Htaccess". Si vous ne comprenez pas quelque chose, demandez un appui technique par Klija ou désactiver les liens HTML.',	
		'PLUGIN_FTP_EXP'			=> 'Nous ne pouvons pas faire la modification de fichiers qui sont actuellement sans permis d\'accès par FTP.',
		'PLUGIN_FTP_HOST'			=> 'Serveur FTP',
		'PLUGIN_FTP_USER'			=> 'Nom d\'utilisateur FTP',
		'PLUGIN_FTP_PASS'			=> 'Mot de passe FTP',
		'PLUGIN_FTP_PATH'			=> 'Chemin du script sur le FTP',
		'PLUGIN_FTP_PORT'			=> 'Port <small>FTP (souvent 21, si vous n\'êtes pas sûr de le laisser comme il est.)</ Small>',
		'PLUGIN_CONFIRM_ADD'		=> 'Attention, les ajouts de plugins peuvent être parfois nuisibles, de sorte que si vous n\'êtes pas sûr de la source du plugin si il n\'a pas été téléchargé sur le site Klija, il est péférable de vous retirer maintenant. Voulez-vous vraiment effectuer l\'installation?',
		'PLUGIN_ADDED_ZIPPED'		=> 'Vous avez installé un plugin zip, pour compléter le processus d\'installation de votre %1$s et pour télécharger %2$, remplacer les fichiers modifiés manuellement. Ne pas remplacer les fichiers modifiés si vous ne faites pas d\'installation',
		'PLUGIN_ADDED_ZIPPED_INST'	=> 'Vous avez installé un plugin zip, pour compléter le processus d\'installation de votre %1$s et pour télécharger %2$, remplacer les fichiers modifiés manuellement. Ne pas remplacer les fichiers modifiés si vous ne faites pas d\'installation.<br />veuillez lire les instructions du plugin pour plus d\'informations. Ajoutez les instructions peuvent être lues plus tard.',
		'PLUGIN_DELETED_ZIPPED'		=> 'Le plugin a &eacute;t&eacute; supprim&eacute;, pour terminer la suppression de votre %1$s, télécharger %2$ et remplacer les fichiers modifiés manuellement.', 
		'PLUGIN_DELETED_ZIPPED'         => 'Le plugin a été supprimé, pour terminer la suppression de 1%$sdownload2%$s les fichiers modifiés et les remplacer par les fichiers actuels dans Kleeja manuellement.',
        'PLUGINS_CHANGES_FILES'         => 'Fichiers à partir des plugins installés',
        'PLUGINS_CHANGES_FILES_EXP'     => 'Ces fichiers sont des fichiers compressés contenant les fichiers qui ont été modifiés spécifiquement pour certains ajouts, vous devez les télécharger à partir d\'ici et remplacer les fichiers Kleeja, vous pouvez le supprimer lorsque vous aurez terminé.',

));

