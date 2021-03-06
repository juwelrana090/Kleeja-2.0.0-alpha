<?php
//
// kleeja language file, common
// Slovak
// Translated By:emsit , Contact: www.emsit.info , Website: www.emsit.sk
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();



$lang = array_merge($lang, array(
	//language inforamtion
	'DIR' 					=> 'ltr',
	'LANG_SMALL_NAME'		=> 'sk-sk',

	'HOME' 					=> 'Domov',
	'INDEX' 				=> 'Domov',
	'SITE_CLOSED' 			=> 'Tato web stránka je uzavretá',
	'STOP_FOR_SIZE' 		=> 'Služba je pozastavená.',
	'SIZES_EXCCEDED' 		=> 'Bohužiaľ mame málo voľného miesta.. Príďte neskôr prosím.',
	'ENTER_CODE_IMG' 		=> 'Zadajte overovací kód.',
	'SAFE_CODE' 			=> 'Zapnúť bezpečnostný kód pri nahrávaní',
	'LAST_VISIT' 			=> 'Vaša posledná návšteva',
	'FLS_LST_VST_SEARCH' 	=> 'Zobraziť súbory od poslednej návštevy?',
	'IMG_LST_VST_SEARCH' 	=> 'Zobraziť obrázky od poslednej návštevy?',
	'NEXT' 					=> 'Nasledujúca strana &raquo;',
	'PREV' 					=> '&laquo; Predchádzajúca strana',
	'INFORMATION' 			=> 'Inštrukcie',
	'WELCOME' 				=> 'Vitajte',
	'KLEEJA_VERSION' 		=> 'Kleeja verzia',
	'NUMBER_ONLINE' 		=> 'Prihlásených užívateľov',
	'NUMBER_UONLINE' 		=> 'Registrovaných užívateľov',
	'NUMBER_VONLINE' 		=> 'Hostí',
	'USERS_SYSTEM' 			=> 'Užívateľský systém',
	'ERROR_NAVIGATATION' 	=> 'Chyba presmerovania..',
	'LOGIN' 				=> 'Prihlásiť',
	'USERNAME' 				=> 'Užívateľské meno',
	'PASSWORD' 				=> 'Heslo',
	'EMPTY_USERNAME'		=> 'Prosím, zadajte svoje užívateľské meno',
	'EMPTY_PASSWORD' 		=> 'Prosím, zadajte svoje heslo',
	'LOSS_PASSWORD' 		=> 'Zabudli ste heslo?',
	'LOGINED_BEFORE' 		=> 'Už ste prihlásení',
	'LOGOUT' 				=> 'Odhlásiť ',
	'EMPTY_FIELDS' 			=> 'Chyba.. Chýbajúce polia!',
	'LOGIN_SUCCESFUL' 		=> 'Vaše prihlásenie bolo úspešné',
	'LOGIN_ERROR' 			=> 'Nesprávne meno alebo heslo',
	'REGISTER_CLOSED' 		=> 'Ospravedlňujeme sa, registrácia je v súčasnosti uzavretá.',
	'PLACE_NO_YOU' 			=> 'Obmedzený priestor',
	'REGISTERED_BEFORE' 	=> 'už',
	'REGISTER' 				=> 'Registrovať',
	'EMAIL' 				=> 'E-mailová adresa',
	'VERTY_CODE' 			=> 'Bezpečnostný kód',
	'WRONG_EMAIL' 			=> 'Nesprávna e-mailová adresa!',
	'WRONG_NAME' 			=> 'Užívateľské meno musí byť dlhšie ako 4 znaky!',
	'WRONG_LINK' 			=> 'Nesprávny odkaz..',
	'EXIST_NAME' 			=> 'Ľutujeme, ale užívateľské meno je už obsadené!',
	'EXIST_EMAIL' 			=> 'Ľutujeme, ale niekto s touto e-mailovou adresou je už registrovaný!',
	'WRONG_VERTY_CODE' 		=> 'Nesprávny bezpečnostný kód!',
	'CANT_UPDATE_SQL' 		=> 'Nepodarilo sa aktualizovať databázu!',
	'CANT_INSERT_SQL' 		=> 'Nepodarilo sa vložiť dáta do databázy!',
	'REGISTER_SUCCESFUL' 	=> 'Ďakujeme Vám za registráciu.',
	'LOGOUT_SUCCESFUL' 		=> 'Odhlásenie bolo úspešné.',
	'LOGOUT_ERROR' 			=> 'Chyba odhlásenie!',
	'FILECP' 				=> 'Správca súborov',
	'DEL_SELECTED' 			=> 'Zmazať vybrané',
	'EDIT_U_FILES' 			=> 'Aktualizovať súbory',
	'FILES_UPDATED' 		=> 'Súbor bol úspešne aktualizovaný.',
	'PUBLIC_USER_FILES' 	=> 'Užívateľská zložka',
	'FILEUSER' 				=> 'Užívateľská zložka',
	'GO_FILECP' 			=> 'Kliknite sem pre správu súborov',
	'YOUR_FILEUSER' 		=> 'Moje súbory',
	'COPY_AND_GET_DUD' 		=> 'Skopírujte URL a dajte ho svojim priateľom, aby videli Vaše súbory ',
	'CLOSED_FEATURE' 		=> 'Funkcia vypnutá',
	'USERFILE_CLOSED' 		=> 'Užívateľská zložka je uzavretá!',
	'PFILE_4_FORUM' 		=> 'Prejsť na užívateľský ovládací panel pre zmenu vašich údajov',
	'USER_PLACE' 			=> 'Užívateľský priestor',
	'PROFILE' 				=> 'Profil',
	'EDIT_U_DATA' 			=> 'Aktualizovať Vaše údaje',
	'PASS_ON_CHANGE' 		=> 'Heslo (len ak ho chcete zmeniť).',
	'OLD' 					=> 'Staré',
	'NEW' 					=> 'Nové',
	'NEW_AGAIN' 			=> 'Potvrdiť',
	'UPDATE' 				=> 'Aktualizovať',
	'PASS_O_PASS2' 			=> 'Pre zmenu je potrebne zadať staré heslo, a potom nove!',
	'DATA_CHANGED_O_LO' 	=> 'Vaše údaje boli aktualizované',
	'DATA_CHANGED_NO' 		=> 'Neboli vložené žiadne nové údaje.',
	'LOST_PASS_FORUM' 		=> 'Prejsť na Fórum a zmeniť vaše údaje?',
	'GET_LOSTPASS' 			=> 'Získať heslo',
	'E_GET_LOSTPASS' 		=> 'Zadajte svoju e-mailovú adresu a dostanete svoje heslo.',
	'WRONG_DB_EMAIL' 		=> 'Zadanú e-mailovú adresa nie je možné nájsť v našej databáze!',
	'GET_LOSTPASS_MSG' 		=> "Požiadali ste pre obnovu Vášho hesla, ale aby sa zabránilo spamu kliknite na nižšie uvedený odkaz pre potvrdenie : \r\n %1\$s \r\n Nové heslo : %2\$s",
	'CANT_SEND_NEWPASS' 	=> 'Chyba.. nové heslo sa nepodarilo odoslať!',
	'OK_SEND_NEWPASS' 		=> 'Bolo Vám zaslané nové heslo',
	'OK_APPLY_NEWPASS' 		=> 'Nové heslo bolo nastavené. Teraz sa môžete prihlásiť k svojmu účtu.',
	'GUIDE' 				=> 'Povolené súbory',
	'GUIDE_VISITORS' 		=> 'Povolene súbory pre hostí:',
	'GUIDE_USERS' 			=> 'Povolene súbory pre užívateľov:',
	'EXT' 					=> 'Typ súboru',
	'SIZE' 					=> 'Veľkosť',
	'REPORT' 				=> 'Hlásenie',
	'YOURNAME' 				=> 'Vaše meno',
	'URL' 					=> 'Odkaz',
	'REASON' 				=> 'Dôvod',
	'NO_ID' 				=> 'Nebol vybraný žiadny súbor..',
	'NO_ME300RES' 			=> 'Pole dôvodu nemôže mať viac ako 300 znakov!',
	'THNX_REPORTED' 		=> 'Dostali sme Vaše hlásenie, Ďakujem.',
	'RULES' 				=> 'Podmienky',
	'NO_RULES_NOW' 			=> 'V súčasnosti nie sú uvedené žiadne podmienky.',
	'E_RULES' 				=> 'Nižšie sú uvedené podmienky našich služieb',
	'CALL' 					=> 'Kontaktujte nás',
	'SEND' 					=> 'Odoslať',
	'TEXT' 					=> 'Správa',
	'NO_ME300TEXT' 			=> 'Pole so správou nemôže mať viac ako 300 znakov!',
	'THNX_CALLED' 			=> 'Odoslané.. Budeme sa snažiť odpovedať Vám čo najskôr',
	'NO_DEL_F' 				=> 'Je nám ľúto, mazanie súborov cez odkaz je vypnuté',
	'E_DEL_F' 				=> 'Mazanie súborov cez odkaz',
	'WRONG_URL' 			=> 'Nastala chyba s odkazom..',
	'CANT_DEL_F' 			=> 'Chyba: Súbor sa nedá odstrániť.. To môže znamenať že súbor už bol zmazaný!',
	'CANT_DELETE_SQL' 		=> 'Nemôže byť odstránený z databázy!',
	'DELETE_SUCCESFUL' 		=> 'Súbor bol úspešne vymazaný',
	'STATS' 				=> 'Štatistiky',
	'STATS_CLOSED' 			=> 'Stránka štatistík bola uzavretá správcom.',
	'FILES_ST' 				=> 'Nahratých',
	'FILE' 					=> 'Súborov',
	'USERS_ST' 				=> 'Celkový počet užívateľov',
	'USER' 					=> 'Užívateľov',
	'SIZES_ST' 				=> 'Celková veľkosť nahratých súborov',
	'LSTFLE_ST' 			=> 'Posledný nahratý',
	'LSTDELST' 				=> 'Posledná kontrola nestiahnutých súborov',
	'S_C_T' 				=> 'Dnešný hostia',
	'S_C_Y' 				=> 'Včerajší hostia',
	'S_C_A' 				=> 'Celkový počet hostí',
	'LAST_1_H' 				=> 'Štatistiky za poslednú hodinu',
	'DOWNLAOD' 				=> 'Stiahnuť',
	'FILE_FOUNDED' 			=> 'Súbor bol nájdený.. ',
	'WAIT' 					=> 'Čakajte prosím..',
	'CLICK_DOWN' 			=> 'Klikni sem pre stiahnutie',
	'JS_MUST_ON' 			=> 'Povoľte JavaScript vo Vašom prehliadači!',
	'FILE_INFO' 			=> 'Informácie o súbore',
	'FILENAME' 				=> 'Meno súboru',
	'FILESIZE' 				=> 'Veľkosť súboru',
	'FILETYPE' 				=> 'Typ súboru',
	'LAST_DOWN' 			=> 'Posledné stiahnuté',
	'FILEDATE' 				=> 'Dátum nahratia súboru',
	'FILEUPS' 				=> 'Počet stiahnutí',
	'FILEREPORT' 			=> 'Nahlásiť porušenie podmienok',
	'FILE_NO_FOUNDED' 		=> 'Súbor nebol nájdený..',
	'IMG_NO_FOUNDED' 		=> 'Obrázok nebol nájdený..',
	'NOT_IMG' 				=> 'Toto nie je obrázok!',
	'MORE_F_FILES' 			=> 'Bol dosiahnutý maximálny počet vstupných poli pre nahratie súborov',
	'DOWNLOAD_F' 			=> 'Nahrať súbory',
	'DOWNLOAD_T' 			=> 'Stiahnuť z  odkazu',
	'PAST_URL_HERE' 		=> 'Sem vložte odkaz',
	'SAME_FILE_EXIST' 		=> 'Súbor "%s" už existuje, premenujte ho a skúste to znova.',
	'NO_FILE_SELECTED' 		=> 'Najprv vyberte súbor!',
	'WRONG_F_NAME' 			=> 'Názov súboru "%s" obsahuje zakázané znaky.',
	'FORBID_EXT' 			=> 'Typ súboru "%s" nie je podporovaný.',
	'SIZE_F_BIG' 			=> 'Veľkosť súboru "%1$s" musí byť menšia ako %2$s .',
	'CANT_CON_FTP' 			=> 'Nedá sa pripojiť k ',
	'URL_F_DEL' 			=> 'Odkaz pre zmazanie súboru',
	'URL_F_THMB' 			=> 'Odkaz pre miniatúru',
	'URL_F_FILE' 			=> 'Odkaz pre súbor',
	'URL_F_IMG' 			=> 'Odkaz pre obrázok',
	'URL_F_BBC' 			=> 'Odkaz pre Fórum',
	'IMG_DOWNLAODED' 		=> 'Obrázok bol úspešne nahratý.',
	'FILE_DOWNLAODED' 		=> 'Súbor bol úspešne nahratý.',
	'CANT_UPLAOD' 			=> 'Chyba: Z neznámych dôvodov sa nedá nahrať súbor "%s" !',
	'NEW_DIR_CRT' 			=> 'Nová zložka vytvorená',
	'PR_DIR_CRT' 			=> 'Zložke neboli udelene prístupové práva',
	'CANT_DIR_CRT' 			=> 'Zložka nebola vytvorená automaticky, je potrebné ju vytvoriť manuálne.',
	'AGREE_RULES' 			=> 'Súhlasím s podmienkami',
	'CHANG_TO_URL_FILE' 	=> 'Zmeniť spôsob nahrávania',
	'URL_CANT_GET' 			=> 'chyba pri získaní súborov z odkazov..',
	'ADMINCP' 				=> 'Ovládací panel',
	'JUMPTO' 				=> 'Prejsť do',
	'GO_BACK_BROWSER' 		=> 'Vrátiť sa späť',
	'U_R_BANNED' 			=> 'Vaša IP adresa bola zablokovaná.',
	'U_R_FLOODER' 			=> 'Ansti-Spam systém..',
	'YES' 					=> 'Áno',
	'NO' 					=> 'Nie',
	'LANGUAGE' 				=> 'Jazyk',
	'STYLE' 				=> 'Odporúčaný štýl',
	'NORMAL' 				=> 'Normálny',
	'W_PHPBB' 				=> 'Pripojené s phpBB',
	'W_MYSBB' 				=> 'Pripojené s MySmartBB',
	'W_VBB' 				=> 'Pripojené s vb',
	'GROUP' 				=> 'Kategória',
	'UPDATE_FILES' 			=> 'Aktualizácia súborov',
	'BY' 					=> 'Od',
	'FILDER' 				=> 'Zložka',
	'DELETE' 				=> 'Vymazať',
	'GUST' 					=> 'Hosť',
	'NAME' 					=> 'Meno',
	'CLICKHERE' 			=> 'Kliknite sem',
	'TIME' 					=> 'Čas',
	'IP' 					=> 'IP',
	'N_IMGS' 				=> 'Obrázkov',
	'N_ZIPS' 				=> 'Komprimovaných súborov',
	'N_TXTS' 				=> 'Textových súborov',
	'N_DOCS' 				=> 'Dokumentov',
	'N_RM' 					=> 'RealMédia',
	'N_WM' 					=> 'WindowsMédia',
	'N_SWF' 				=> 'Flash súbory',
	'N_QT' 					=> 'QuickTime',
	'N_OTHERFILE' 			=> 'Ostatné súbory',
	'RETURN_HOME' 			=> 'Domov',
	'TODAY' 				=> 'Dnes',
	'DAYS' 					=> 'dňami',
	'BITE' 					=> 'Bytov',
	'SUBMIT' 				=> 'Potvrdiť',
	'EDIT' 					=> 'Upraviť',
	'DISABLE' 					=> 'Vypnúť',
	'ENABLE' 					=> 'Zapnúť',	
	'OPEN'						=> 'Otvoriť',
	'KILOBYTE'					=>	'Kilobajtov',
	'NOTE'						=>	'Poznámka',
	'WARN'						=>	'Varovanie',
	'ARE_YOU_SURE_DO_THIS'		=> 'Ste si istí že chcete zmazať tieto súbory?',
	'SITE_FOR_MEMBER_ONLY'		=> 'Toto služba je len pre členov, zaregistrujte sa alebo sa prihláste pre nahratie súborov.',
	'AUTH_INTEGRATION_N_UTF8_T'	=> '%s nie je kódovaný v UTF-8',
	'AUTH_INTEGRATION_N_UTF8' 	=> '%s Databáza musí byť kódovaná v UTF-8 aby mohla byt integrovaná s Kleeja!',
	'SCRIPT_AUTH_PATH_WRONG'	=> 'Cesta z %s nie je platná, zmeniť ju teraz.',
	'SHOW_MY_FILECP'			=> 'Zobraziť moje súbory',
	'PASS_ON_CHANGE'			=> 'Zmeniť heslo',
	'MOST_EVER_ONLINE'			=> 'Najviac tu bolo súčasne prítomných užívateľov',
	'ON'						=> 'dňa',
	'LAST_REG'					=> 'Najnovším členom',
	'NEW_USER'					=> 'Nový užívateľ',
	'LIVEXTS'					=> 'Aktívne rozšírenia',
	'ADD_UPLAD_A'				=> 'Pridať ďalšie pole',
	'ADD_UPLAD_B'				=> 'Odstrániť pole',
	'COPYRIGHTS_X'				=> 'Všetky práva vyhradené',
	'CHECK_ALL'	 				=> 'Označiť všetky',
	'BROSWERF'					=> 'Užívateľské súbory',
	'REMME'						=> 'Pamätať si ma',
	'HOUR'						=> 'hodinu',
	'5HOURS'					=> '5 hodín',
	'DAY'						=> 'deň',
	'WEEK'						=> 'týždeň',
	'MONTH'						=> 'mesiac',
	'YEAR'						=> 'rok',
	'INVALID_FORM_KEY'			=> 'Neplatný formulár, alebo skončila jeho platnosť',
	'REFRESH_CAPTCHA'			=> 'Kliknite pre získanie nového bezpečnostného obrázku',
	'CHOSE_F'					=> 'Vyberte prosím aspoň jeden súbor',
	'NO_REPEATING_UPLOADING'	=> 'Stránka nemôže byť obnovená počas nahrávania!',
	'NOTE_CODE' 				=> 'Sem napíšte písmena a čísla tak ako ich vidíte na obrázku',
	'USER_LOGIN'				=> ' Prihlásenie',
	'FILES_DELETED' 			=> 'Súbory boli úspešne vymazané.',
	'GUIDE_GROUPS' 			    => 'Skupina',
	'ALL_FILES' 			    => 'Počet súborov vo Vašom účte',
	'NO_FILE_USER'				=> 'Vo Vašom učte neboli nájdené žiadne súbory!',
	'SHOWFILESBYIP'				=> 'Ukázať súbory z IP adresy', 
	'WAIT_LOADING'				=> 'Prosím počkajte, súbory sú nahrávané na náš server..',
	'NOTICECLOSED'				=> 'Upozornenie: webová stránka je zatvorená',
	'UNKNOWN'					=> 'Neznáme',
	'WE_UPDATING_KLEEJA_NOW'	=> 'Uzavreté pre údržbu, skúste neskôr prosím..',
	'ERROR_TRY_AGAIN'			=> 'Chyba, skúste to znova.',
	'VIEW'						=> 'Ukážka',
	'NONE'						=> 'Žiadny',
	'USER_STAT'					=> 'Užívateľské štatistiky',
	'SEARCH_STAT' 				=> 'Štatistiky vyhľadávacích robotov',
	'NOTHING'					=> 'Nie sú žiadne nové súbory ani obrázky!',
	'YOU_HAVE_TO_WAIT'			=> 'Čakajte %s sekúnd.. Potom sa pokúste znovu nahrať súbory',
	'REPEAT_PASS'				=> 'Potvrdiť heslo',
	'PASS_NEQ_PASS2'			=> 'Heslá nie sú rovnaké!',

	//last line of this file ...					 
	'S_TRANSLATED_BY' 			=> 'Translated By <a href="http://www.emsit.sk" target="_blank">emsit</a>. Verzia prekladu 1.0 <br /> Preklad nebol dôkladné otestovaný! V prípade nájdenia akýchkoľvek chyb prosím kontaktujte autora pomocou web stránky <a href="http://www.emsit.info" target="_blank">emsit.info</a>',
	
));

#<-- EOF
