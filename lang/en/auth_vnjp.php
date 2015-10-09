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
 * Strings for component 'auth_vnjp', language 'en'.
 *
 * @package   auth_vnjp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'VNJP Database Login';

$string['auth_vnjpcantconnect'] = 'Could not connect to the specified authentication database...';
$string['auth_vnjpdebugauthdb'] = 'Debug ADOdb';
$string['auth_vnjpdebugauthdbhelp'] = 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites.';
$string['auth_vnjpdeleteuser'] = 'Deleted user {$a->name} id {$a->id}';
$string['auth_vnjpdeleteusererror'] = 'Error deleting user {$a}';
$string['auth_vnjpdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_vnjpextencoding'] = 'External db encoding';
$string['auth_vnjpextencodinghelp'] = 'Encoding used in external database';
$string['auth_vnjpextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <b>external database fields</b> that you specify here. <p>If you leave these blank, then defaults will be used.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>';
$string['auth_vnjpfieldpass'] = 'Name of the field containing passwords';
$string['auth_vnjpfieldpass_key'] = 'Password field';
$string['auth_vnjpfielduser'] = 'Name of the field containing usernames';
$string['auth_vnjpfielduser_key'] = 'Username field';
$string['auth_vnjphost'] = 'The computer hosting the database server. Use a system DSN entry if using ODBC.';
$string['auth_vnjphost_key'] = 'Host';

$string['auth_vnjpchangepasswordurl_key'] = 'Password-change URL';
$string['auth_vnjpinsertuser'] = 'Inserted user {$a->name} id {$a->id}';
$string['auth_vnjpinsertuserduplicate'] = 'Error inserting user {$a->username} - user with this username was already created through \'{$a->auth}\' plugin.';
$string['auth_vnjpinsertusererror'] = 'Error inserting user {$a}';
$string['auth_vnjpname'] = 'Name of the database itself. Leave empty if using an ODBC DSN.';
$string['auth_vnjpname_key'] = 'DB name';
$string['auth_vnjppass'] = 'Password matching the above username';
$string['auth_vnjppass_key'] = 'Password';
$string['auth_vnjppasstype'] = '<p>Specify the format that the password field is using. MD5 hashing is useful for connecting to other common web applications like PostNuke.</p> <p>Use \'internal\' if you want to the external DB to manage usernames &amp; email addresses, but Moodle to manage passwords. If you use \'internal\', you <i>must</i> provide a populated email address field in the external DB, and you must execute both admin/cron.php and auth/db/cli/sync_users.php regularly. Moodle will send an email to new users with a temporary password.</p>';
$string['auth_vnjppasstype_key'] = 'Password format';
$string['auth_vnjpreviveduser'] = 'Revived user {$a->name} id {$a->id}';
$string['auth_vnjprevivedusererror'] = 'Error reviving user {$a}';
$string['auth_vnjpsaltedcrypt'] = 'Crypt one-way string hashing';
$string['auth_vnjpsalted'] = 'VNJP Crypt one-way string hashing';
$string['auth_vnjpsetupsql'] = 'SQL setup command';
$string['auth_vnjpsetupsqlhelp'] = 'SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_vnjpsuspenduser'] = 'Suspended user {$a->name} id {$a->id}';
$string['auth_vnjpsuspendusererror'] = 'Error suspending user {$a}';
$string['auth_vnjpsybasequoting'] = 'Use sybase quotes';
$string['auth_vnjpsybasequotinghelp'] = 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!';
$string['auth_vnjptable'] = 'Name of the table in the database';
$string['auth_vnjptable_key'] = 'Table';
$string['auth_vnjptype'] = 'The database type (See the <a href="http://phplens.com/adodb/supported.databases.html" target="_blank">ADOdb documentation</a> for details)';
$string['auth_vnjptype_key'] = 'Database';
$string['auth_vnjpupdatinguser'] = 'Updating user {$a->name} id {$a->id}';
$string['auth_vnjpuser'] = 'Username with read access to the database';
$string['auth_vnjpuser_key'] = 'DB user';
$string['auth_vnjpusernotexist'] = 'Cannot update non-existent user: {$a}';
$string['auth_vnjpuserstoadd'] = 'User entries to add: {$a}';
$string['auth_vnjpuserstoremove'] = 'User entries to remove: {$a}';
