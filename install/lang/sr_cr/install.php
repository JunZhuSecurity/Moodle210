<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle 2.1 installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/en/Development:Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['admindirname'] = 'Администраторски директоријум';
$string['availablelangs'] = 'Списак доступних језика';
$string['chooselanguagehead'] = 'Изаберите језик';
$string['chooselanguagesub'] = 'Молимо изаберите језик који ће се користити само током инсталације. Касније ћете моћи да изаберете језичка подешавања на нивоу сајта и корисника.';
$string['clialreadyinstalled'] = 'Датотека config.php већ постоји. Употребите команду admin/cli/upgrade.php ако желите да ажурирате свој сајт.';
$string['cliinstallheader'] = 'Moodle {$a} програм за инсталацију из командне линије';
$string['databasehost'] = 'Сервер базе података :';
$string['databasename'] = 'Има базе података :';
$string['databasetypehead'] = 'Изабери драјвер базе података';
$string['dataroot'] = 'Директоријум података';
$string['dbprefix'] = 'Префикс табеле';
$string['dirroot'] = 'Moodle директоријум';
$string['environmenthead'] = 'Проверавање Вашег окружења...';
$string['environmentsub2'] = 'Свака верзија Moodlea има минимум захтева по питању одговарајуће PHP верѕије и неколико обавезних PHP екстензија.
Пуна провера окружења се врши пре сваке инсталације или ажурирања постојеће верзије. Уколико не знате како да инсталирате нову верзију или омогућите PHP ектензије контактирајте Вашег сервер администратора.';
$string['errorsinenvironment'] = 'Грешке у окружењу';
$string['installation'] = 'Инсталација';
$string['langdownloaderror'] = 'Нажалост језик "{$a}" није инсталиран. Процес инсталације биће настављен на енглеском језику.';
$string['memorylimithelp'] = '<p>PHP ограничење меморије за Ваш сервер је тренутно подешено на {$a}.</p>

<p>Ово може да проузрокује касније меморијске проблеме Вашег Moodle система, посебно ако имате много дозвољених модула и/или много корисника.</p>

<p>Препоручујемо да конфигуришете PHP са вишим ограничењем ако је могуће, рецимо 16М. Постоји неколико начина да се то уради. Покушајте:</p><ol>
<li>Ако можете, рекомпајлирајте PHP са <i>--enable-memory-limit</i>. Ово ће дозволити Moodle систему да постави меморијско ограничење сам за себе.</li>
<li>Ако имате приступ Вашој php.ini датотеци, можете променити <b>memory_limit</b> подешавање у рецимо 16М. Ако немате приступ тој датотеци можете питати свог администратора да то уради за Вас.</li>
<li>На неким PHP серверима можете креирати .htaccess датотеку у Moodle директоријуму која садржи ред:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Какогод, на неким серверима ће то спречити приказивање <b>свих</b> PHP страница (биће Вам приказана порука о грешци уместо сваке странице), па ћете са њих морати уклонити .htaccess датотеку.</p></li>
</ol>';
$string['paths'] = 'Путање';
$string['pathserrcreatedataroot'] = 'Инсталциона процедура не може да креира директоријум базе података ({$a->dataroot})';
$string['pathshead'] = 'Потврди путање';
$string['pathsrodataroot'] = 'У директоријум за податке није могућ упис';
$string['pathsroparentdataroot'] = 'У надређени директоријум ({$a->parent}) није могућ упис. Директоријум за податке ({$a->dataroot}) не може креирати инсталациони програм.';
$string['pathssubadmindir'] = 'Неколико сајтова за вебхостинг користи /admin као специјални УРЛ за приступ контролном панелу. На жалост, то може да да доведе до конфликта са стандардним директоријумом у којем су смештен Moodle администраторске странице. Овај проблем можете решити тако што ћете током инсталације преименовати admin директоријум у, на пример <em>moodleadmin</em>.';
$string['pathssubdataroot'] = 'Потребан вам је простор где ће Moodle чувати поставњене датотеке. Овај директоријум би требало да буде подешен тако да се може читати и у њега уписивати од стране корисника веб сервера (обично \'nobody\' или \'apache\'), али истовремено мора бити доступан директно преко веба. Уколико овај директоријум не постоји Moodle ће пикушати да га креира током инсталације,';
$string['pathssubdirroot'] = 'Пуна путања до директотијума за инсталацију Moodlea. Промените само уколико желите да користите синболичне линкове.';
$string['pathssubwwwroot'] = 'Пуна вер адреса преко које ће се приступати Moodleu. Није могуће приступати Moodleu користећи вишњ адреса. Уколико Ваш сајт има више јавних адреса онда на свима морате да подесите перманентну дирекцију ка једној адреси. Уколико је Ваш сајт доступам са Интернета али и из Интранет окружеања користите јавну адресу и подесите ДНС тако да и Интранет корисници могу да користе ту јавну адресу.';
$string['pathsunsecuredataroot'] = 'Dataroot локација није безбедна';
$string['pathswrongadmindir'] = 'Админ директоријум не постоји';
$string['phpextension'] = '{$a} PHP екстенѕија';
$string['phpversion'] = 'PHP верзија';
$string['phpversionhelp'] = '<p>Moodle захтева најмање PHP верзију 4.3.0 или 5.1.0 (5.0.x функционише уз бројне уочене проблеме).</p>
<p>Тренутно имате верзију {$a}</p>
<p>Морате надоградити PHP или преместити Moodle инсталацију на web сервер са новијом верзијом PHP-a!</br>
(У случају верзије 5.0.x било би добро да је снизите на 4.4.x верзију)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Приказана Вам је ова страница јер сте успешно инсталирали и покренули <strong>{$a->packname} {$a->packversion}</strong> пакет на Вашем рачунару. Честитамо!';
$string['welcomep30'] = 'Ово издање <strong>{$a->installername}</strong> укључује апликације за креирање окружења у ком ће <strong>Moodle</strong> успешно функционисати, конкретно:';
$string['welcomep40'] = 'Овај пакет обухвата и <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Коришћење апликација из овог пакета је условљено њховим лиценцама. Комплетан <strong>{$a->installername}</strong> пакет је <a href="http://www.opensource.org/docs/definition_plain.html">отвореног кода</a> и дистрибуира се под <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> лиценцом.';
$string['welcomep60'] = 'Наредне странице ће Вас провести кроз неколико једноставних корака током којих ћете конфигурисати <strong>Moodle</strong> на Вашем рачунару. Можете прихватити подразумевана подешавања или их, опционо, прилагодити сопственим потребама.';
$string['welcomep70'] = 'Кликните на дугме за наставак да бисте даље подешавали <strong>Moodle</strong>.';
$string['wwwroot'] = 'Веб адреса';
