<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org> (2003-2009)
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @author     Tema Smirnov <vk.com/TemaSM> (2015-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Language
 *
 */

$lng['requirements']['title'] = 'Проверка необходимых системных компонентов';
$lng['requirements']['installed'] = 'установлено';
$lng['requirements']['not_true'] = 'нет';
$lng['requirements']['notfound'] = 'не найдено';
$lng['requirements']['notinstalled'] = 'не установлено';
$lng['requirements']['activated'] = 'включено';
$lng['requirements']['phpversion'] = 'PHP версия >= 5.3';
$lng['requirements']['phpmagic_quotes_runtime'] = 'magic_quotes_runtime';
$lng['requirements']['phpmagic_quotes_runtime_description'] = 'PHP setting "magic_quotes_runtime" must be set to "Off". We have disabled it temporary for now please fix the coresponding php.ini.';
$lng['requirements']['phppdo'] = 'PHP PDO и драйвер PDO-MySQL';
$lng['requirements']['phpxml'] = 'PHP XML расширение';
$lng['requirements']['phpfilter'] = 'PHP filter расширение';
$lng['requirements']['phpposix'] = 'PHP posix расширение';
$lng['requirements']['phpbcmath'] = 'PHP bcmath расширение';
$lng['requirements']['phpcurl'] = 'PHP curl расширение';
$lng['requirements']['phpmbstring'] = 'PHP mbstring расширение';
$lng['requirements']['bcmathdescription'] = 'Traffic-calculation related functions will not work correctly!';
$lng['requirements']['curldescription'] = 'Version-check and news-feed may not work correctly!';
$lng['requirements']['openbasedir'] = 'open_basedir';
$lng['requirements']['openbasedirenabled'] = 'Froxlor will not work properly with open_basedir enabled. Please disable open_basedir for Froxlor in the coresponding php.ini';
$lng['requirements']['diedbecauseofrequirements'] = 'Невозможно установить Froxlor! Попробуйте установить/перенастроить необходимые компоненты.';
$lng['requirements']['froxlor_succ_checks'] = 'All requirements are satisfied';

$lng['install']['lngtitle'] = 'Froxlor install - choose language';
$lng['install']['language'] = 'Installation language';
$lng['install']['lngbtn_go'] = 'Change language';
$lng['install']['title'] = 'Froxlor install - setup';
$lng['install']['welcometext'] = 'Thank you for choosing Froxlor. Please fill out the following fields with the required information to start the installation.<br /><b>Attention:</b> If the database you chose for Froxlor already exists on your System, it will be erased with all containing data!';
$lng['install']['database'] = 'Database connection';
$lng['install']['mysql_host'] = 'MySQL-Hostname';
$lng['install']['mysql_database'] = 'Database name';
$lng['install']['mysql_unpriv_user'] = 'Username for the unprivileged MySQL-account';
$lng['install']['mysql_unpriv_pass'] = 'Password for the unprivileged MySQL-account';
$lng['install']['mysql_root_user'] = 'Username for the MySQL-root-account';
$lng['install']['mysql_root_pass'] = 'Password for the MySQL-root-account';
$lng['install']['admin_account'] = 'Administrator Account';
$lng['install']['admin_user'] = 'Administrator Username';
$lng['install']['admin_pass1'] = 'Administrator Password';
$lng['install']['admin_pass2'] = 'Administrator-Password (confirm)';
$lng['install']['serversettings'] = 'Server settings';
$lng['install']['servername'] = 'Server name (FQDN, no ip-address)';
$lng['install']['serverip'] = 'Server IP';
$lng['install']['webserver'] = 'Webserver';
$lng['install']['apache2'] = 'Apache 2';
$lng['install']['lighttpd'] = 'LigHTTPd';
$lng['install']['nginx'] = 'NGINX';
$lng['install']['httpuser'] = 'HTTP username';
$lng['install']['httpgroup'] = 'HTTP groupname';

$lng['install']['testing_mysql'] = 'Checking MySQL-root access';
$lng['install']['testing_mysql_fail'] = 'There seems to be a problem with the database-connection. Cannot continue. Please go back and check your credentials.';
$lng['install']['backup_old_db'] = 'Creating backup of old database';
$lng['install']['backup_binary_missing'] = 'Could not find mysqldump';
$lng['install']['backup_failed'] = 'Could not backup database';
$lng['install']['prepare_db'] = 'Preparing database';
$lng['install']['create_mysqluser_and_db'] = 'Creating database and username';
$lng['install']['testing_new_db'] = 'Testing if database and user have been created correctly';
$lng['install']['importing_data'] = 'Importing data';
$lng['install']['changing_data'] = 'Adjusting settings';
$lng['install']['creating_entries'] = 'Inserting new values';
$lng['install']['adding_admin_user'] = 'Creating admin-account';
$lng['install']['creating_configfile'] = 'Creating configfile';
$lng['install']['creating_configfile_temp'] = 'File was saved in /tmp/userdata.inc.php, please move to lib/.';
$lng['install']['creating_configfile_failed'] = 'Could not create lib/userdata.inc.php, please create it manually with the following content:';
$lng['install']['froxlor_succ_installed'] = 'Froxlor was installed successfully.';

$lng['click_here_to_refresh'] = 'Проверить еще раз';
$lng['click_here_to_goback'] = 'Вернуться обратно';
$lng['click_here_to_continue'] = 'Продолжить';
$lng['click_here_to_login'] = 'Перейти на страницу авторизации.';
