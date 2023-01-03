<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '172.16.10.14';
$CFG->dbname    = 'lms';
$CFG->dbuser    = 'jericho';
$CFG->dbpass    = 'kamucantik';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => 0,
    'dbport' => '',
    'dbsocket' => '',
);

$CFG->wwwroot   = 'http://172.16.10.38';
$CFG->dataroot  = '/var/www/html/NFS/MoodleData';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!