<?php

/**
 * Bootstrap I/O files
 */
if ( !FILE_WRITEABLE ) return;

/**
 * Current theme I/O files
 */

$themeInput  = TEMPLATEPATH .'/less/style.less';
$themeOutput = TEMPLATEPATH .'/src/style.css';


/**
 * Auto Compiling LESS files (cache)
 * @param  string $inputFile  path to the less (input) file
 * @param  string $outputFile path to the css (output) file
 */
function auto_less_compile( $inputFile, $outputFile ) {
	global $variablesArray;

	//cherryVariables();
	if ( empty( $variablesArray ) ) $variablesArray = array();

	// load the cache
	$cacheFile = $inputFile.".cache";

	if ( file_exists( $cacheFile ) ) {
		$cache = unserialize( file_get_contents( $cacheFile ) );
	} else {
		$cache = $inputFile;
	}

	// custom formatter
	$formatter = new lessc_formatter_classic;
	$formatter->indentChar = "\t";

	$less = new lessc;
	$less->setVariables($variablesArray);
	$less->setFormatter($formatter);

	try {
		// create a new cache object, and compile
		$newCache = $less->cachedCompile($cache);
		

		// the next time we run, write only if it has updated
		if ( !is_array($cache) || $newCache["updated"] > $cache["updated"] ) {
			file_put_contents($cacheFile, serialize($newCache));
			file_put_contents($outputFile, $newCache['compiled']);
		}
	} catch (Exception $ex) {
		echo "lessphp fatal error: ".$ex->getMessage();
	}
}
auto_less_compile( $themeInput, $themeOutput );

/**
 * Simple Compiling LESS files
 * @param  string $inputFile  path to the less (input) file
 * @param  string $outputFile path to the css (output) file
 */
function simple_less_compile( $inputFile, $outputFile ) {
	global $variablesArray;

	//cherryVariables();
	if ( empty( $variablesArray ) ) $variablesArray = array();

	// custom formatter
	$formatter = new lessc_formatter_classic;
	$formatter->indentChar = "\t";

	$less = new lessc;
	$less->setVariables($variablesArray);
	$less->setFormatter($formatter);

	try {
		$less->compileFile($inputFile, $outputFile);
	} catch (Exception $ex) {
		echo "lessphp fatal error: ".$ex->getMessage();
	}
}
simple_less_compile( $themeInput, $themeOutput );