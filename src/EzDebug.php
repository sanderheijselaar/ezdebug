<?php
namespace SanderHeijselaar\EzDebug;
use SanderHeijselaar\EzDebug\Diff;

/**
 * ezDebug is a class for easy debugging without x-debug
 *
 * @version 0.1.0
 */
Class EzDebug
{
    const CBlueViolet           = 'BlueViolet';
    const CBrown                = 'Brown';
    const CDarkCyan             = 'DarkCyan';
    const CDarkGoldenRod        = 'DarkGoldenRod';
    const CDarkGray             = 'DarkGray';
    const CDarkGreen            = 'DarkGreen';
    const CDarkKhaki            = 'DarkKhaki';
    const CDarkMagenta          = 'DarkMagenta';
    const CDarkOliveGreen       = 'DarkOliveGreen';
    const CDarkOrange           = 'DarkOrange';
    const CDarkOrchid           = 'DarkOrchid';
    const CDarkRed              = 'DarkRed';
    const CDarkSeaGreen         = 'DarkSeaGreen';
    const CDarkSlateBlue        = 'DarkSlateBlue';
    const CDarkSlateGray        = 'DarkSlateGray';
    const CDarkViolet           = 'DarkViolet';
    const CMaroon               = 'Maroon';
    const CPurple               = 'Purple';

    const CAliceBlue            = 'AliceBlue';
    const CAntiqueWhite         = 'AntiqueWhite';
    const CAqua                 = 'Aqua';
    const CAquamarine           = 'Aquamarine';
    const CAzure                = 'Azure';
    const CBeige                = 'Beige';
    const CBisque               = 'Bisque';
    const CBlanchedAlmond       = 'BlanchedAlmond';
    const CBurlyWood            = 'BurlyWood';
    const CCadetBlue            = 'CadetBlue';
    const CChartreuse           = 'Chartreuse';
    const CChocolate            = 'Chocolate';
    const CCoral                = 'Coral';
    const CCornflowerBlue       = 'CornflowerBlue';
    const CCornsilk             = 'Cornsilk';
    const CCrimson              = 'Crimson';
    const CCyan                 = 'Cyan';
    const CDarkSalmon           = 'DarkSalmon';
    const CDarkTurquoise        = 'DarkTurquoise';
    const CDeepPink             = 'DeepPink';
    const CDeepSkyBlue          = 'DeepSkyBlue';
    const CDimGray              = 'DimGray';
    const CDodgerBlue           = 'DodgerBlue';
    const CFireBrick            = 'FireBrick';
    const CFloralWhite          = 'FloralWhite';
    const CForestGreen          = 'ForestGreen';
    const CFuchsia              = 'Fuchsia';
    const CGainsboro            = 'Gainsboro';
    const CGhostWhite           = 'GhostWhite';
    const CGold                 = 'Gold';
    const CGoldenRod            = 'GoldenRod';
    const CGray                 = 'Gray';
    const CGreen                = 'Green';
    const CGreenYellow          = 'GreenYellow';
    const CHoneyDew             = 'HoneyDew';
    const CHotPink              = 'HotPink';
    const CIndianRed            = 'IndianRed';
    const CIvory                = 'Ivory';
    const CKhaki                = 'Khaki';
    const CLavender             = 'Lavender';
    const CLavenderBlush        = 'LavenderBlush';
    const CLawnGreen            = 'LawnGreen';
    const CLemonChiffon         = 'LemonChiffon';
    const CLightBlue            = 'LightBlue';
    const CLightCoral           = 'LightCoral';
    const CLightCyan            = 'LightCyan';
    const CLightGoldenRodYellow = 'LightGoldenRodYellow';
    const CLightGray            = 'LightGray';
    const CLightGreen           = 'LightGreen';
    const CLightPink            = 'LightPink';
    const CLightSalmon          = 'LightSalmon';
    const CLightSeaGreen        = 'LightSeaGreen';
    const CLightSkyBlue         = 'LightSkyBlue';
    const CLightSlateGray       = 'LightSlateGray';
    const CLightSteelBlue       = 'LightSteelBlue';
    const CLightYellow          = 'LightYellow';
    const CLime                 = 'Lime';
    const CLimeGreen            = 'LimeGreen';
    const CLinen                = 'Linen';
    const CMagenta              = 'Magenta';
    const CMediumAquaMarine     = 'MediumAquaMarine';
    const CMediumOrchid         = 'MediumOrchid';
    const CMediumPurple         = 'MediumPurple';
    const CMediumSeaGreen       = 'MediumSeaGreen';
    const CMediumSlateBlue      = 'MediumSlateBlue';
    const CMediumSpringGreen    = 'MediumSpringGreen';
    const CMediumTurquoise      = 'MediumTurquoise';
    const CMediumVioletRed      = 'MediumVioletRed';
    const CMintCream            = 'MintCream';
    const CMistyRose            = 'MistyRose';
    const CMoccasin             = 'Moccasin';
    const CNavajoWhite          = 'NavajoWhite';
    const COldLace              = 'OldLace';
    const COlive                = 'Olive';
    const COliveDrab            = 'OliveDrab';
    const COrange               = 'Orange';
    const COrangeRed            = 'OrangeRed';
    const COrchid               = 'Orchid';
    const CPaleGoldenRod        = 'PaleGoldenRod';
    const CPaleGreen            = 'PaleGreen';
    const CPaleTurquoise        = 'PaleTurquoise';
    const CPaleVioletRed        = 'PaleVioletRed';
    const CPapayaWhip           = 'PapayaWhip';
    const CPeachPuff            = 'PeachPuff';
    const CPeru                 = 'Peru';
    const CPink                 = 'Pink';
    const CPlum                 = 'Plum';
    const CPowderBlue           = 'PowderBlue';
    const CRed                  = 'Red';
    const CRosyBrown            = 'RosyBrown';
    const CRoyalBlue            = 'RoyalBlue';
    const CSaddleBrown          = 'SaddleBrown';
    const CSalmon               = 'Salmon';
    const CSandyBrown           = 'SandyBrown';
    const CSeaGreen             = 'SeaGreen';
    const CSeaShell             = 'SeaShell';
    const CSienna               = 'Sienna';
    const CSilver               = 'Silver';
    const CSkyBlue              = 'SkyBlue';
    const CSlateBlue            = 'SlateBlue';
    const CSlateGray            = 'SlateGray';
    const CSnow                 = 'Snow';
    const CSpringGreen          = 'SpringGreen';
    const CSteelBlue            = 'SteelBlue';
    const CTan                  = 'Tan';
    const CTeal                 = 'Teal';
    const CThistle              = 'Thistle';
    const CTomato               = 'Tomato';
    const CTurquoise            = 'Turquoise';
    const CViolet               = 'Violet';
    const CWheat                = 'Wheat';
    const CWhite                = 'White';
    const CWhiteSmoke           = 'WhiteSmoke';
    const CYellow               = 'Yellow';
    const CYellowGreen          = 'YellowGreen';

    const BtFormatCompact =  'compact';
    const BtFormatFull    =  'full';
    /**
     * Debug function to display data
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function pr($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display data and flush after it
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prd($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color);
        @ob_flush();
        @flush();
    }

    /**
     * Debug function to display data and flush it directly
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prx($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color);
        exit();
    }

    /**
     * Debug function to display data with var_export
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prv($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color, 1);
    }

    /**
     * Debug function to display data with var_export and flush it directly
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prvd($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color, 1);
        @ob_flush();
        @flush();
    }

    /**
     * Debug function to display data with var_export and exit directly
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prvx($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color, 1);
        exit();
    }

    /**
     * Debug function to display data with htmlentities
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prhe($data, $label = '', $bgcolor = '', $color = '')
    {
        $data = self::_htmlentities($data);
        self::pr($data, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display data with htmlentities and exit after it
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prhex($data, $label = '', $bgcolor = '', $color = '')
    {
        $data = self::_htmlentities($data);
        self::prx($data, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display the debug backtrace data
     *
     * @param string $format  The format of the returned data (self::BtFormatCompact, self::BtFormatFull)
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prbt($format = '', $label = '', $bgcolor = '', $color = '')
    {
        if (empty($format)) {
            $format = self::BtFormatCompact;
        }
        if (empty($label)) {
            $label = 'BACKTRACE';
        }
        $data = debug_backtrace();
        array_shift($data);
        $data = self::format_debug_backtrace($data, $format);
        self::pr($data, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display the debug backtrace data and exit after it
     *
     * @param string $format  The format of the returned data (self::BtFormatCompact, self::BtFormatFull)
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prbtx($format = '', $label = '', $bgcolor = '', $color = '')
    {
        if (empty($format)) {
            $format = self::BtFormatCompact;
        }
        if (empty($label)) {
            $label = 'BACKTRACE';
        }
        $data = debug_backtrace();
        array_shift($data);
        $data = self::format_debug_backtrace($data, $format);
        self::prx($data, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_GET data
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prg($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_GET';
        }
        self::pr($_GET, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_GET data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prgx($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_GET';
        }
        self::prx($_GET, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_POST data
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prp($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_POST';
        }
        self::pr($_POST, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_POST data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prpx($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_POST';
        }
        self::prx($_POST, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_SESSION data
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prs($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SESSION';
        }
        self::pr($_SESSION, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_SESSION data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prsx($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SESSION';
        }
        self::prx($_SESSION, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_COOKIE data
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prc($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_COOKIE';
        }
        self::pr($_COOKIE, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_COOKIE data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prcx($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_COOKIE';
        }
        self::prx($_COOKIE, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_FILES data
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prf($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_FILES';
        }
        self::pr($_FILES, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_FILES data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prfx($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_FILES';
        }
        self::prx($_FILES, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_SERVER data
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prsvr($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SERVER';
        }
        self::pr($_SERVER, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display $_SERVER data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prsvrx($label = '', $bgcolor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SERVER';
        }
        self::prx($_SERVER, $label, $bgcolor, $color);
    }

    /**
     * Debug function to display data in a <textarea>
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prta($data, $label = '', $bgcolor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgcolor, $color, 2);
    }

    /**
     * Debug function to display data in a <textarea> and exit
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prtax($data, $label = '', $bgcolor = '', $color = '')
    {
        self::prta($data, $label, $bgcolor, $color);
        exit();
    }

    /**
     * Debug function to display the line number it's on
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prl($label = '', $bgcolor = '', $color = '')
    {
        $debug_data = debug_backtrace();
        self::_print_debug($debug_data[0]['line'], $label, $bgcolor, $color);
    }

    /**
     * Debug function to display the line number it's on and flush
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prld($label = '', $bgcolor = '', $color = '')
    {
        $debug_data = debug_backtrace();
        self::_print_debug($debug_data[0]['line'], $label, $bgcolor, $color);
        @ob_flush();
        @flush();
    }

    /**
     * Debug function to display the line number it's on and exit
     *
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prlx($label = '', $bgcolor = '', $color = '')
    {
        $debug_data = debug_backtrace();
        self::_print_debug($debug_data[0]['line'], $label, $bgcolor, $color);
        exit();
    }

    /**
     * Internal debug print function
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgcolor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    protected static function _print_debug($data, $label, $bgcolor, $color, $dump_type = 0)
    {
        if (empty($bgcolor)) {
            $bgcolor = 'LightGray';
        }
        if (empty($color)) {
            $color = self::prgetcolors($bgcolor);
        }

        $debug_data = debug_backtrace();

        // CLI
        if (php_sapi_name() == "cli") {
            if ('object' === gettype($data)) {
                $var_dump = self::print_r_object($data, $dump_type);
            } else
            if ($dump_type === 1) {
                $var_dump = $var_dump = "\033[32m" . "@" . $debug_data[1]['file'] . ' line ' . $debug_data[1]['line'] . "\n" . "\033[37m";
                $var_dump .= var_export($data, true) . "\n";
            } else {
                $var_dump = $var_dump = "\033[32m" . "@" . $debug_data[1]['file'] . ' line ' . $debug_data[1]['line'] . "\n" . "\033[37m";
                $var_dump .= print_r($data, true) . "\n";
            }
            echo "\n" . $var_dump;
        } else {
            // HTML
            if ('object' === gettype($data)) {
                $var_dump = self::print_r_object($data, $dump_type);
            } else
            if ($dump_type === 1) {
                $var_dump = var_export($data, true);
            } else
            if ($dump_type === 2) {
                $var_dump = '<textarea>' . var_export($data, true) . '</textarea>';
            } else {
                $var_dump = print_r($data, true);
            }

            echo "\n" .
                    '<div title="' .
                    $debug_data[1]['file'] .
                    ' line ' .
                    $debug_data[1]['line'] .
                    '" style="font: normal 12px Courier New !important; color: ' .
                    $color .
                    '; border: 1px solid #CCC; background-color: ' .
                    $bgcolor .
                    '; padding: 5px; margin: 5px; text-align: left !important; display: inline-block; vertical-align: top;">' .
                    (!empty($label) ? '<strong>' . $label . '</strong>' : '') .
                    '<pre>' . "\n" .
                    $var_dump . "\n" .
                    '</pre></div>';
        }
    }

    /**
     * Internal debug function to convert preform htmlentities on any data type
     *
     * @param mixex $data The data that needs to be htmlentities
     * @return mixex      same type as $data
     */
    protected static function _htmlentities($data)
    {
        if (in_array(gettype($data), array('boolean', 'integer', 'double', 'string', 'resource', 'NULL', 'unknown'))) {
            $data = htmlentities($data);
        } else
        if ('array' == gettype($data)) {
            foreach ($data as $key => $value) {
                $data[$key] = self::_htmlentities($value);
            }
        } else
        if ('object' == gettype($data)) {
            foreach ($data as $key => $value) {
                $data->$key = self::_htmlentities($value);
            }
        } else {
            exit('UNKNOWN DATA TYPE (' . gettype($data)) . ') IN DEBUG FUNCTION ' . __FUNCTION__ . ', ' . __FILE__ . ' line ' . __LINE__;
        }

        return $data;
    }

    /**
     * Function for formatting debug_backtrace data
     *
     * @param array $data    Data array returned by debug_backtrace()
     * @param string $format The format of the returned data (self::BtFormatCompact, self::BtFormatFull)
     * @return array         An array containing the formatted data
     */
    protected static function format_debug_backtrace($data, $format)
    {

        if (self::BtFormatFull == $format) {
            // Leave data as it is
        } else {
            // Default formatting self::BtFormatCompact
            foreach ($data as &$line) {
                $target = '';
                if (!empty($line['function']) && 'include' == $line['function'] && !empty($line['args'][0])) {
                    $target = $line['function'] . '(' . $line['args'][0] . ')';
                } else {
                    $target = (isset($line['class']) ? $line['class'] : '') . (isset($line['type']) ? $line['type'] : '') . (isset($line['function']) ? $line['function'] : '');
                }

                if (empty($line['file']) && empty($line['class']) === false) {
                    $line = array(
                        'source' => $line['class'] . ':' . $line['function'],
                        'target' => $target,
                    );
                } else {
                    $line = array(
                        'source' => $line['file'] . ':' . $line['line'],
                        'target' => $target,
                    );
                }
            }
            unset($line);
        }

        return $data;
    }

    /**
     * Write debug data to a file. Previous data in this file will be erased
     *
     * @param string $filename The filename to which the data should be written to
     * @param mixed  $data     The data
     */
    public static function prfile($filename, $data)
    {
        $debug_data = debug_backtrace();
        $data = print_r($data, true);
        file_put_contents($filename, "-----------------------------------------\n" . date("H:i:s") . "\t" . $debug_data[0]['file'] . ' line ' . $debug_data[0]['line'] . "\n" . $data . "\n");
    }

    /**
     * Write debug data to a file in append mode
     *
     * @param string $filename The filename to which the data should be written to
     * @param mixed  $data     The data
     */
    public static function prfilea($filename, $data)
    {
        $debug_data = debug_backtrace();
        $data = print_r($data, true);
        file_put_contents($filename, "-----------------------------------------\n" . date("H:i:s") . "\t" . $debug_data[0]['file'] . ' line ' . $debug_data[0]['line'] . "\n" . $data . "\n", FILE_APPEND);
    }

    /**
     * Function to create the print_r functionality for objects
     *
     * @param  mixed  $data      The data to display
     * @param  int    $depth     The current depth in the object (for indents)
     * @param  int    $dump_type 0 = print_r, 1 = var_export
     * @return string            The dumped data
     */
    protected static function print_r_object($data, $depth = 1, $dump_type = false)
    {
        foreach ($data as $key => $value) {
            if ('object' === gettype($value)) {
                $value = print_r_object($value, $depth + 1, $dump_type);
                $value = str_replace("\n", "\n\t", $value);
            } else {
                if ($dump_type == 1) {
                    $value = var_export($value, true);
                } else {
                    $value = print_r($value, true);
                }
            }


            $data->$key = $value;
        }

        return print_r($data, true);
    }

    public static function prcolors()
    {
        $colors = self::prgetcolors();

        foreach ($colors as $textColor => $textBackgroundColors) {
            foreach ($textBackgroundColors as $textBackgroundColor) {
                self::prd('EzDebug::C' . $textBackgroundColor, '', $textBackgroundColor, $textColor);
            }
        }
    }

    protected static function prgetcolors($bgColor = '')
    {
        $colors = array(
            '#fff' => array(
                self::CBlueViolet,
                self::CBrown,
                self::CDarkCyan,
                self::CDarkGoldenRod,
                self::CDarkGray,
                self::CDarkGreen,
                self::CDarkKhaki,
                self::CDarkMagenta,
                self::CDarkOliveGreen,
                self::CDarkOrange,
                self::CDarkOrchid,
                self::CDarkRed,
                self::CDarkSeaGreen,
                self::CDarkSlateBlue,
                self::CDarkSlateGray,
                self::CDarkViolet,
                self::CMaroon,
                self::CPurple,
            ),
            '#000' => array(
                self::CAliceBlue,
                self::CAntiqueWhite,
                self::CAqua,
                self::CAquamarine,
                self::CAzure,
                self::CBeige,
                self::CBisque,
                self::CBlanchedAlmond,
                self::CBurlyWood,
                self::CCadetBlue,
                self::CChartreuse,
                self::CChocolate,
                self::CCoral,
                self::CCornflowerBlue,
                self::CCornsilk,
                self::CCrimson,
                self::CCyan,
                self::CDarkSalmon,
                self::CDarkTurquoise,
                self::CDeepPink,
                self::CDeepSkyBlue,
                self::CDimGray,
                self::CDodgerBlue,
                self::CFireBrick,
                self::CFloralWhite,
                self::CForestGreen,
                self::CFuchsia,
                self::CGainsboro,
                self::CGhostWhite,
                self::CGold,
                self::CGoldenRod,
                self::CGray,
                self::CGreen,
                self::CGreenYellow,
                self::CHoneyDew,
                self::CHotPink,
                self::CIndianRed,
                self::CIvory,
                self::CKhaki,
                self::CLavender,
                self::CLavenderBlush,
                self::CLawnGreen,
                self::CLemonChiffon,
                self::CLightBlue,
                self::CLightCoral,
                self::CLightCyan,
                self::CLightGoldenRodYellow,
                self::CLightGray,
                self::CLightGreen,
                self::CLightPink,
                self::CLightSalmon,
                self::CLightSeaGreen,
                self::CLightSkyBlue,
                self::CLightSlateGray,
                self::CLightSteelBlue,
                self::CLightYellow,
                self::CLime,
                self::CLimeGreen,
                self::CLinen,
                self::CMagenta,
                self::CMediumAquaMarine,
                self::CMediumOrchid,
                self::CMediumPurple,
                self::CMediumSeaGreen,
                self::CMediumSlateBlue,
                self::CMediumSpringGreen,
                self::CMediumTurquoise,
                self::CMediumVioletRed,
                self::CMintCream,
                self::CMistyRose,
                self::CMoccasin,
                self::CNavajoWhite,
                self::COldLace,
                self::COlive,
                self::COliveDrab,
                self::COrange,
                self::COrangeRed,
                self::COrchid,
                self::CPaleGoldenRod,
                self::CPaleGreen,
                self::CPaleTurquoise,
                self::CPaleVioletRed,
                self::CPapayaWhip,
                self::CPeachPuff,
                self::CPeru,
                self::CPink,
                self::CPlum,
                self::CPowderBlue,
                self::CRed,
                self::CRosyBrown,
                self::CRoyalBlue,
                self::CSaddleBrown,
                self::CSalmon,
                self::CSandyBrown,
                self::CSeaGreen,
                self::CSeaShell,
                self::CSienna,
                self::CSilver,
                self::CSkyBlue,
                self::CSlateBlue,
                self::CSlateGray,
                self::CSnow,
                self::CSpringGreen,
                self::CSteelBlue,
                self::CTan,
                self::CTeal,
                self::CThistle,
                self::CTomato,
                self::CTurquoise,
                self::CViolet,
                self::CWheat,
                self::CWhite,
                self::CWhiteSmoke,
                self::CYellow,
                self::CYellowGreen,
            ),
        );

        if (empty($bgColor)) {
            return $colors;
        }

        foreach ($colors as $colorKey => $colorsInKey) {
            // in_array but case insensitive
            if (in_array($bgColor, $colorsInKey) === true) {
                return $colorKey;
            }
        }

        // Return default color
        return 'black';
    }

    public static function prdiff($data1, $data2, $label = '', $bgcolor = '', $color = '')
    {
        echo '<style>
            div.diff del {background-color: lightcoral; text-decoration: none;}
            div.diff ins {background-color: lightgreen; text-decoration: none;}
            </style>';

        self::_print_debug('<div class="diff">' . Diff::toHTML(Diff::compare(var_export($data1, true), var_export($data2, true))) . '</div>', $label, $bgcolor, $color);
    }

    public static function prdiffx($data1, $data2, $label = '', $bgcolor = '', $color = '')
    {
        self::prdiff($data1, $data2, $label, $bgcolor, $color);
        exit();
    }

}
