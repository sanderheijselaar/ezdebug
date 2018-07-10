<?php
namespace SanderHeijselaar\EzDebug;

/**
 * ezDebug is a class for easy debugging without x-debug
 *
 * @version 0.1.3
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

    protected static $sessionError = 'Session not started! use session_start()';

    /**
     * Debug function to display data
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function pr($data, $label = '', $bgColor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgColor, $color);
    }

    /**
     * Debug function to display data and flush after it
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prd($data, $label = '', $bgColor = '', $color = '')
    {
        self::pr($data, $label, $bgColor, $color);
        @ob_flush();
        @flush();
    }
    /**
     * Debug function to display data and flush it directly
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prx($data, $label = '', $bgColor = '', $color = '')
    {
        self::pr($data, $label, $bgColor, $color);
        exit();
    }

    /**
     * Debug function to display data with var_export
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prv($data, $label = '', $bgColor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgColor, $color, 1);
    }

    /**
     * Debug function to display data with var_export and flush it directly
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prvd($data, $label = '', $bgColor = '', $color = '')
    {
        self::prv($data, $label, $bgColor, $color);
        @ob_flush();
        @flush();
    }
    /**
     * Debug function to display data with var_export and exit directly
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prvx($data, $label = '', $bgColor = '', $color = '')
    {
        self::prv($data, $label, $bgColor, $color);
        exit();
    }

    /**
     * Debug function to display data with htmlentities
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prhe($data, $label = '', $bgColor = '', $color = '')
    {
        $data = self::_htmlentities($data);
        self::pr($data, $label, $bgColor, $color);
    }

    /**
     * Debug function to display data with htmlentities and exit after it
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prhex($data, $label = '', $bgColor = '', $color = '')
    {
        $data = self::_htmlentities($data);
        self::prx($data, $label, $bgColor, $color);
    }

    /**
     * Debug function to display the debug backtrace data
     *
     * @param string $format  The format of the returned data (self::BtFormatCompact, self::BtFormatFull)
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prbt($format = 'compact', $label = '', $bgColor = '', $color = '')
    {
        if (empty($format)) {
            $format = self::BtFormatCompact;
        }
        if (empty($label)) {
            $label = 'BACKTRACE';
        }
        $data = debug_backtrace();
        foreach ($data as $itemIndex => $item) {
            if (empty($item['file']) || $item['file'] === __FILE__) {
                unset($data[$itemIndex]);
            }
        }
        $data = self::format_debug_backtrace($data, $format);
        self::pr($data, $label, $bgColor, $color);
    }

    /**
     * Debug function to display the debug backtrace data and exit after it
     *
     * @param string $format  The format of the returned data (self::BtFormatCompact, self::BtFormatFull)
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prbtx($format = 'compact', $label = '', $bgColor = '', $color = '')
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
        self::prx($data, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_GET data
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prg($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_GET';
        }
        self::pr($_GET, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_GET data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prgx($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_GET';
        }
        self::prx($_GET, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_POST data
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prp($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_POST';
        }
        self::pr($_POST, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_POST data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prpx($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_POST';
        }
        self::prx($_POST, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_SESSION data
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prs($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SESSION';
        }

        self::pr((empty($_SESSION)) ? self::$sessionError : $_SESSION, $label, $bgColor, $color);
    }
    /**
     * Debug function to display $_SESSION data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prsx($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SESSION';
        }
        self::prx((empty($_SESSION)) ? self::$sessionError : $_SESSION, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_COOKIE data
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prc($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_COOKIE';
        }
        self::pr($_COOKIE, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_COOKIE data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prcx($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_COOKIE';
        }
        self::prx($_COOKIE, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_FILES data
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prf($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_FILES';
        }
        self::pr($_FILES, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_FILES data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prfx($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_FILES';
        }
        self::prx($_FILES, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_SERVER data
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prsvr($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SERVER';
        }
        self::pr($_SERVER, $label, $bgColor, $color);
    }

    /**
     * Debug function to display $_SERVER data and exit after it
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prsvrx($label = '', $bgColor = '', $color = '')
    {
        if (empty($label)) {
            $label = '_SERVER';
        }
        self::prx($_SERVER, $label, $bgColor, $color);
    }

    /**
     * Debug function to display data in a <textarea>
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prta($data, $label = '', $bgColor = '', $color = '')
    {
        self::_print_debug($data, $label, $bgColor, $color, 2);
    }

    /**
     * Debug function to display data in a <textarea> and exit
     *
     * @param mixed  $data    The data to display
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prtax($data, $label = '', $bgColor = '', $color = '')
    {
        self::prta($data, $label, $bgColor, $color);
        exit();
    }

    /**
     * Debug function to display the line number it's on
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prl($label = '', $bgColor = '', $color = '')
    {
        $debug_data = self::getSource();
        self::_print_debug($debug_data['line'], $label, $bgColor, $color);
    }

    /**
     * Debug function to display the line number it's on and flush
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prld($label = '', $bgColor = '', $color = '')
    {
        self::prl($label, $bgColor, $color);
        @ob_flush();
        @flush();
    }
    /**
     * Debug function to display the line number it's on and exit
     *
     * @param string $label   Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color   Option font color. Both #eee and lightgreen are valid input.
     */
    public static function prlx($label = '', $bgColor = '', $color = '')
    {
        self::prl($label, $bgColor, $color);
        exit();
    }

    public static function prxml($data, $label = '', $bgColor = '', $color = '')
    {
        $doc = new \DomDocument('1.0');
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $doc->loadXML($data);
        self::_print_debug(self::_htmlentities($doc->saveXML()), $label, $bgColor, $color);
    }

    public static function prxmld($data, $label = '', $bgColor = '', $color = '')
    {
        self::prxml($data, $label, $bgColor, $color);
        @ob_flush();
        @flush();
    }

    public static function prxmlx($data, $label = '', $bgColor = '', $color = '')
    {
        self::prxml($data, $label, $bgColor, $color);
        exit();
    }

    /**
     * Internal debug print function
     *
     * @param mixed $data The data to display
     * @param string $label Optional label above the data
     * @param string $bgColor Optional alternative bgcolor. Both #eee and lightgreen are valid input.
     * @param string $color Option font color. Both #eee and lightgreen are valid input.
     * @param int $dumpType 0 = print_r, 1 = var_export
     */
    protected static function _print_debug($data, $label, $bgColor, $color, $dumpType = 0)
    {
        if (empty($bgColor)) {
            $bgColor = 'LightGray';
        }
        if (empty($color)) {
            $color = self::prgetcolors($bgColor);
        }

        $debug_data = self::getSource();

        if (php_sapi_name() == "cli") {
            // CLI
            $var_dump = $var_dump = "\033[32m" . "@" . $debug_data['file'] . ' line ' . $debug_data['line'] . "\n" . "\033[37m";
            if ('object' === gettype($data)) {
                $var_dump .= self::print_r_object($data, $dumpType);
            } else
                if ($dumpType === 1) {
                    $var_dump .= var_export($data, true) . "\n";
                } else {
                    $var_dump .= print_r($data, true) . "\n";
                }
            echo "\n" . $var_dump;
        } else {
            // HTML
            if ('object' === gettype($data)) {
                $var_dump = self::print_r_object($data, $dumpType);
            } else
                if ($dumpType === 1) {
                    $var_dump = var_export($data, true);
                } else
                    if ($dumpType === 2) {
                        $var_dump = '<textarea>' . var_export($data, true) . '</textarea>';
                    } else {
                        $var_dump = print_r($data, true);
                    }
            echo "\n" .
                '<div title="' .
                $debug_data['file'] .
                ' line ' .
                $debug_data['line'] .
                '" style="font: normal 12px Courier New !important; color: ' .
                $color .
                '; border: 1px solid #CCC; background-color: ' .
                $bgColor .
                '; padding: 5px; margin: 5px; text-align: left !important; display: inline-block; vertical-align: top;">' .
                (!empty($label) ? '<strong>' . $label . '</strong>' : '') .
                '<pre>' . "\n" .
                $var_dump . "\n" .
                '</pre></div>';
        }
    }

    protected static function getSource()
    {
        $data = array('file' => 'UNKNOWN', 'line' => '0');
        $debug_data = debug_backtrace();

        foreach ($debug_data as $debug_item) {
            if (empty($debug_item['file']) || $debug_item['file'] === __FILE__) {
                continue;
            }

            $data['file'] = $debug_item['file'];
            $data['line'] = $debug_item['line'];

            break;
        }

        return $data;
    }

    /**
     * Internal debug function to convert preform htmlentities on any data type
     *
     * @param mixed $data The data that needs to be htmlentities
     * @return mixed      same type as $data
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
            exit('UNKNOWN DATA TYPE (' . gettype($data) . ') IN DEBUG FUNCTION ' . __FUNCTION__ . ', ' . __FILE__ . ' line ' . __LINE__);
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
                } else
                if (empty($line['file'])) {
                    $line = array(
                        'source' => $line['function'],
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
        $debug_data = self::getSource();
        $data = print_r($data, true);
        file_put_contents($filename, "-----------------------------------------\n" . date("H:i:s") . "\t" . $debug_data['file'] . ' line ' . $debug_data['line'] . "\n" . $data . "\n");
    }

    /**
     * Write debug data to a file in append mode
     *
     * @param string $filename The filename to which the data should be written to
     * @param mixed  $data     The data
     */
    public static function prfilea($filename, $data)
    {
        $debug_data = self::getSource();
        $data = print_r($data, true);
        file_put_contents($filename, "-----------------------------------------\n" . date("H:i:s") . "\t" . $debug_data['file'] . ' line ' . $debug_data['line'] . "\n" . $data . "\n", FILE_APPEND);
    }
    /**
     * Function to create the print_r functionality for objects
     *
     * @param  mixed  $data      The data to display
     * @param  int    $depth     The current depth in the object (for indents)
     * @param  int    $dump_type 0 = print_r, 1 = var_export
     * @return string            The dumped data
     */
    protected static function print_r_object($data, $depth = 1, $dump_type = 0)
    {
        foreach ($data as $key => $value) {
            if ('object' === gettype($value)) {
                $value = self::print_r_object($value, $depth + 1, $dump_type);
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

    public static function prdiff($data1, $data2, $label = '', $bgColor = '', $color = '')
    {
        if (php_sapi_name() == "cli") {
            // CLI
            $data = Diff::toString(Diff::compare(var_export($data1, true), var_export($data2, true)));
            $data = explode("\n", $data);
            foreach ($data as &$line) {
                if (substr($line, 0, 2) === '- ') {
                    $line = "\033[31m" . $line . "\033[37m";
                }else
                if (substr($line, 0, 2) === '+ ') {
                    $line = "\033[32m" . $line . "\033[37m";
                }

            }
            unset($line);
            $data = implode("\n", $data);
            self::_print_debug($data, $label, $bgColor, $color);
        } else {
            echo '<style>
            div.diff del {background-color: lightcoral; text-decoration: none;}
            div.diff ins {background-color: lightgreen; text-decoration: none;}
            </style>';

            self::_print_debug('<div class="diff">' . Diff::toHTML(Diff::compare(var_export($data1, true), var_export($data2, true))) . '</div>', $label, $bgColor, $color);
        }
    }

    public static function prdiffx($data1, $data2, $label = '', $bgColor = '', $color = '')
    {
        self::prdiff($data1, $data2, $label, $bgColor, $color);
        exit();
    }
}

/**
 * Make all method accessible without the class name
 */
if (! function_exists('pr')) {
    function pr($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::pr($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prd')) {
    function prd($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prd($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prx')) {
    function prx($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prx($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prv')) {
    function prv($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prv($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prvd')) {
    function prvd($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prvd($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prvx')) {
    function prvx($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prvx($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prhe')) {
    function prhe($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prhe($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prhex')) {
    function prhex($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prhex($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prbt')) {
    function prbt($format='', $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prbt($format, $label, $bgColor, $color);
    }
}
if (! function_exists('prbtx')) {
    function prbtx($format='', $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prbtx($format, $label, $bgColor, $color);
    }
}
if (! function_exists('prg')) {
    function prg($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prg($label, $bgColor, $color);
    }
}
if (! function_exists('prgx')) {
    function prgx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prgx($label, $bgColor, $color);
    }
}
if (! function_exists('prp')) {
    function prp($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prp($label, $bgColor, $color);
    }
}
if (! function_exists('prpx')) {
    function prpx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prpx($label, $bgColor, $color);
    }
}
if (! function_exists('prs')) {
    function prs($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prs($label, $bgColor, $color);
    }
}
if (! function_exists('prsx')) {
    function prsx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prsx($label, $bgColor, $color);
    }
}
if (! function_exists('prc')) {
    function prc($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prc($label, $bgColor, $color);
    }
}
if (! function_exists('prcx')) {
    function prcx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prcx($label, $bgColor, $color);
    }
}
if (! function_exists('prf')) {
    function prf($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prf($label, $bgColor, $color);
    }
}
if (! function_exists('prfx')) {
    function prfx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prfx($label, $bgColor, $color);
    }
}
if (! function_exists('prsvr')) {
    function prsvr($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prsvr($label, $bgColor, $color);
    }
}
if (! function_exists('prsvrx')) {
    function prsvrx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prsvrx($label, $bgColor, $color);
    }
}
if (! function_exists('prta')) {
    function prta($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prta($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prtax')) {
    function prtax($format, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prtax($format, $label, $bgColor, $color);
    }
}
if (! function_exists('prl')) {
    function prl($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prl($label, $bgColor, $color);
    }
}
if (! function_exists('prld')) {
    function prld($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prld($label, $bgColor, $color);
    }
}
if (! function_exists('prlx')) {
    function prlx($label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prlx($label, $bgColor, $color);
    }
}
if (! function_exists('prxml')) {
    function prxml($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prxml($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prxmlx')) {
    function prxmlx($data, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prxmlx($data, $label, $bgColor, $color);
    }
}
if (! function_exists('prfile')) {
    function prfile($filename, $data) {
        \SanderHeijselaar\EzDebug\EzDebug::prfile($filename, $data);
    }
}
if (! function_exists('prfilea')) {
    function prfilea($filename, $data) {
        \SanderHeijselaar\EzDebug\EzDebug::prfilea($filename, $data);
    }
}
if (! function_exists('prdiff')) {
    function prdiff($data1, $data2, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prdiff($data1, $data2, $label, $bgColor, $color);
    }
}
if (! function_exists('prdiffx')) {
    function prdiffx($data1, $data2, $label = '', $bgColor = '', $color = '') {
        \SanderHeijselaar\EzDebug\EzDebug::prdiffx($data1, $data2, $label, $bgColor, $color);
    }
}
