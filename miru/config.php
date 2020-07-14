<?php 

/**
 * MiruGoogle, pequeño y simple plataforma
 * 
 * @author     Mask7OfDragon
 * @version    1.0
 */


/**
 * Archivo de carga de MiruGoogle, librerias y sistemas.
 */


# Variables de MiruGoogle. Principales

	# Modulos de Jwplayer 
	define('LJ_KEY','cLGMn8T20tGvW+0eXPhq4NNmLB57TrscPjd1IyJF84o=');
	define('LJ_URL','https://ssl.p.jwpcdn.com/player/v/8.6.2/jwplayer.js');

	# Modulos de MiruGoogle
	define('MD_API','ab14a56c06616cabdfbc6b4b15b3ac77');



/**
 * Librerias y archivos requeridos para el funcionamiento de MiruGoogle.
 */

# Extenciones de MiruGoogle

	# Extenciones de Google
	require(dirname(__FILE__) . '/extensions/GooglePhotos.php');
	require(dirname(__FILE__) . '/extensions/GoogleDrive.php');

# Modulos de MiruGoogle
	
	# Modulo de Kitsu.io
	require(dirname(__FILE__) . '/modules/AnimeApi.php');	
	# Modulo de Themoviedb.org
	require(dirname(__FILE__) . '/modules/MoviesApi.php');	


# Componentes de MiruGoogle

	# Componente de Streaming
	require(dirname(__FILE__) . '/components/Streaming.php');

?>
