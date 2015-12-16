#EZ DEBUG
For easy debugging without x-debug. Works both in the browser aswel as in the terminal. 

##Installation
Install the composer package (https://packagist.org/packages/sanderheijselaar/ezdebug)
or download and include the ezDebug.php file in your project

##Quick Usage

	use SanderHeijselaar\EzDebug\EzDebug;
		
	$data1 = array(
	    'id' => 1,
	    'name' => 'Sander Heijselaar',
	    'country' => 'NL'
	);

	EzDebug::pr($data1, 'Array dump with pr');

Which will output the following:

![Alt text](http://www.ezdebug.dev/raw/img/first-example.png?raw=true "First example")

As you can see the data is dumped on screen and when you hover on a dump, it will tell you where the location of this dump is. This way you'll never have to search though your code to find all debug lines. 

All methods, except for prdiff & prdiffx will also work on the CLI. 

![Alt text](http://www.ezdebug.dev/raw/img/first-cli-example.png?raw=true "First example")


##Methods

Below is a list of the available methods that are at your disposal. 

For almost every method there's method with the same name with an x behind it. This method will do exactly the same as the method without the x but will also exit at the end of the method.     

The same applies for methods that end with an extra d at the end. Those methods do the same thing as the method without the d but will flush the output at the end of the method.

###Arguments
Almost every method has the same arguments, for example:

	pr($data, $label = '', $bgcolor = '', $color = '')

- $data is the data that needs to be dumped
- $label is the optional label that's shown on top of the data
- $bgcolor is the optional background color. See all the available colors below
- $color is the optional text color. See all the available colors below

###pr, prd & prx
**pr**int the debug data on the screen using print_r

	pr($data, $label = '', $bgcolor = '', $color = '')
![Alt text](http://www.ezdebug.dev/raw/img/pr-example.png?raw=true "pr, prd & prx example") 

###prv, prvd & prvx
print the debug data on the screen using **v**ar_export

	prv($data, $label = '', $bgcolor = '', $color = '')
![Alt text](http://www.ezdebug.dev/raw/img/prv-example.png?raw=true "prv, prvd & prvx example") 

###prhe & prhex
print the debug data on the screen using **h**tml**e**ntities

	prhe($data, $label = '', $bgcolor = '', $color = '')
![Alt text](http://www.ezdebug.dev/raw/img/prhe-example.png?raw=true "prhe & prhex example") 

###prbt & prbtx
print the backtrace on the screen using debug_backtrace()

	prbt($format = '', $label = '', $bgcolor = '', $color = '')

The format is eighter EzDebug::BtFormatFull EzDebug::BtFormatCompact. The compact option is default. 
![Alt text](http://www.ezdebug.dev/raw/img/prbt-example.png?raw=true "prbt & prbtx example") 

###prg & prgx
print the $_GET var on the screen

	prg($label = '', $bgcolor = '', $color = '')

There's no $data parameter because this method is dedicated to the use the $_GET as the $data. When no $label is provided, '__GET' will be displayed.

![Alt text](http://www.ezdebug.dev/raw/img/prg-example.png?raw=true "prg & prgx example")
 
###prp & prpx
print the $_POST var on the screen

	prp($label = '', $bgcolor = '', $color = '')

There's no $data parameter because this method is dedicated to the use the $_POST as the $data. When no $label is provided, '__POST' will be displayed.
 
![Alt text](http://www.ezdebug.dev/raw/img/prp-example.png?raw=true "prp & prpx example")
 
###prs & prsx
print the $_SESSION var on the screen

	prs($label = '', $bgcolor = '', $color = '')

There's no $data parameter because this method is dedicated to the use the $_SESSION as the $data. When no $label is provided, '__SESSION' will be displayed.
 
![Alt text](http://www.ezdebug.dev/raw/img/prs-example.png?raw=true "prs & prsx example")
 
###prc & prcx
print the $_COOKIE var on the screen

	prc($label = '', $bgcolor = '', $color = '')

There's no $data parameter because this method is dedicated to the use the $_COOKIE as the $data. When no $label is provided, '__COOKIE' will be displayed.
 
![Alt text](http://www.ezdebug.dev/raw/img/prc-example.png?raw=true "prc & prcx example")
 
###prf & prfx
print the $_FILES var on the screen

	prf($label = '', $bgcolor = '', $color = '')

There's no $data parameter because this method is dedicated to the use the $_FILES as the $data. When no $label is provided, '__FILES' will be displayed.
 
![Alt text](http://www.ezdebug.dev/raw/img/prf-example.png?raw=true "prf & prfx example")
 
###prsvr & prsvrx
print the $_SERVER var on the screen

	prf($label = '', $bgcolor = '', $color = '')

There's no $data parameter because this method is dedicated to the use the $_SERVER as the $data. When no $label is provided, '__SERVER' will be displayed.
 
![Alt text](http://www.ezdebug.dev/raw/img/prsvr-example.png?raw=true "prsvr & prsvrx example")
 
###prta & prtax
*pr**int the debug data on the screen using a < **t**ext**a**rea >

	prta($data, $label = '', $bgcolor = '', $color = '')
![Alt text](http://www.ezdebug.dev/raw/img/prta-example.png?raw=true "prta & prtax example") 

###prl, prld & prlx
*pr**int the current **l**ine on the screen

	prta($data, $label = '', $bgcolor = '', $color = '')
![Alt text](http://www.ezdebug.dev/raw/img/prl-example.png?raw=true "prl, prld & prlx example") 

###prfile & prfilea
*pr**int the data to a **file** instead of the screen. prfile will clear the file before writing the data to it. prfilea will append the dato the bottom of the file.

	prfile($filename, $data)
![Alt text](http://www.ezdebug.dev/raw/img/prfile-example.png?raw=true "prl, prld & prlx example") 

###prdiff & prdiffx

	prdiff($data1, $data2)
![Alt text](http://www.ezdebug.dev/raw/img/prdiff-example.png?raw=true "prl, prld & prlx example") 

##Colors
To distinguish the dumps when you have a screen filled with them, it's possible to pass any background and/or foreground color. My most used colors are:

![Alt text](http://www.ezdebug.dev/raw/img/selectedColors.png?raw=true "All colors")

	EzDebug::prd('EzDebug::C' . EzDebug::CLightGreen, 'OK', EzDebug::CLightGreen);
	EzDebug::prd('EzDebug::C' . EzDebug::COrange, 'NOTIFICATION', EzDebug::COrange);
	EzDebug::prd('EzDebug::C' . EzDebug::CLightCoral, 'ERROR', EzDebug::CLightCoral);

You can use the pre defined colors, but any other color code (#fff or green) will work. 


###All available colors
	There are alot of predefined colors in the class

	EzDebug::prcolors();    
![Alt text](http://www.ezdebug.dev/raw/img/allColors.png?raw=true "All colors")



##Acknowledgements

* I'm using Stephen Morley's Diff Class, which you can find more about at http://code.stephenmorley.org/php/diff-implementation/

**Licensed under MIT**
