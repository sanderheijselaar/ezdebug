<?php
include_once (__DIR__ . '/vendor/autoload.php');

use SanderHeijselaar\EzDebug\EzDebug;

session_start();

$data1 = array(
    'id' => 1,
    'name' => 'Sander Heijselaar',
    'country' => 'NL'
);

$data2 = array(
    'id' => 1,
    'name' => 'sander heijselaar',
    'country' => 'NLD'
);

// pr, prd & prx
EzDebug::pr($data1, 'Array dump with pr (print_r)');
//EzDebug::prd($data1, 'Title for this data');
//EzDebug::prx($data1, 'lightgreen background color', 'lightgreen');

// prv, prvd & prvx
EzDebug::prv($data1, 'Array dump with prv (var_export)');
//EzDebug::prvd($data1, 'Title for this data');
//EzDebug::prvx($data1, 'lightgreen background color', 'lightgreen');

// prhe & prhex
$html = "<html>
    <body>
        <h1>Title</h1>
        <p>Paragraph</p>
    </body>
</html>";
EzDebug::prhe($html, 'Dump HTML');
//EzDebug::prhex($html);

// prbt & prbtx
function testDebugBacktrace()
{
    EzDebug::prbt();
}
testDebugBacktrace();

// prg & prgx $_GET dump
$_GET['uri'] = '/home/index.html';
EzDebug::prg();
//EzDebug::prgx();

// prp & prpx $_POST dump
$_POST['uri'] = array(
    'id' => 1,
    'username' => 'Sander'
);
EzDebug::prp();
//EzDebug::prpx();

// prs & prsx $_SERVER dump
$_SESSION['data'] = array('a', 'b', 'c');
EzDebug::prs();
//EzDebug::prsx();

// prc & prcx $_COOKIE dump
EzDebug::prc();
//EzDebug::prcx();

// prf & prfx $_FILES dump
$_FILES['uploads'] = array(
    'name' => array('uploadTest.jpg'),
    'type' => array('image/jpeg'),
    'tmp_name' => array('/tmp/SDF43s223'),
    'error' => array(0),
    'size' => array(15476),
);
EzDebug::prf();
//EzDebug::prfx();

// prsvr & prsvrx $_SERVER dump
EzDebug::prsvr();
//EzDebug::prsvrx();

// prta & prtax dump in <textarea>
EzDebug::prta($data1, 'Dump in textarea');
//EzDebug::prtax($data1);

// prl, prld & prlx dump line number & exit
EzDebug::prl('Dump the line number');
//EzDebug::prld();
//EzDebug::prlx();

// prfile & prfilea Dump to file
EzDebug::prfile("/tmp/ezdebug.log", $_SERVER);
EzDebug::prd(file_get_contents("/tmp/ezdebug.log"));
EzDebug::prfilea("/tmp/ezdebug.log", $data1);
EzDebug::prd(file_get_contents("/tmp/ezdebug.log"));

// Display all available colors
EzDebug::prcolors();

// prdiff & prdiffx Display diff
EzDebug::prvd($data1, 'Data #1');
EzDebug::prvd($data2, 'Data #2');
EzDebug::prdiff($data1, $data2, 'A diff of 2 arrays');
//EzDebug::prdiffx($data1, $data2, 'A diff of 2 arrays');

EzDebug::prd('EzDebug::C' . EzDebug::CLightGreen, 'OK', EzDebug::CLightGreen);
EzDebug::prd('EzDebug::C' . EzDebug::COrange, 'NOTIFICATION', EzDebug::COrange);
EzDebug::prd('EzDebug::C' . EzDebug::CLightCoral, 'ERROR', EzDebug::CLightCoral);