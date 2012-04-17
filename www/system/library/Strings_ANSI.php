<?php
/**
 *	FVAL PHP Framework for Web Applications\n
 *	Copyright (c) 2007-2009 FVAL Consultoria e Inform�tica Ltda.
 *
 *	\warning Este arquivo � parte integrante do framework e n�o pode ser omitido
 *
 *	\version 1.1.0
 *
 *	\brief Classe para tratamento de strings em formato ANSI
 */

class Strings_ANSI {

	/**
	 *	\brief Troca caracteres acentuados por n�o acentuado
	 */
	public static function remove_accented_chars($txt) {
		$txt = mb_ereg_replace('[����������ê]', 'a', $txt);
		$txt = mb_ereg_replace('[��������]', 'e', $txt);
		$txt = mb_ereg_replace('[��������]', 'i', $txt);
		$txt = mb_ereg_replace('[����������ֺ]', 'o', $txt);
		$txt = mb_ereg_replace('[�������ܵ]', 'u', $txt);
		$txt = mb_ereg_replace('[��]', 'n', $txt);
		$txt = mb_ereg_replace('[��]', 'c', $txt);
		$txt = mb_ereg_replace('[��]', 'y', $txt);
		$txt = mb_ereg_replace('[�]', '1', $txt);
		$txt = mb_ereg_replace('[�]', '2', $txt);
		$txt = mb_ereg_replace('[�]', '3', $txt);
		$txt = mb_ereg_replace('[��]', 'ae', $txt);
		$txt = mb_ereg_replace('[��]', '0', $txt);
		$txt = mb_ereg_replace('[�������߮�����]', '', $txt);

		return $txt;
	}

	/**
	 *	/brief Converte uma string ANSI para Windows-CP-1252
	 */
	public static function convert_to_windowscp1252($string) {
		$chars = array( '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', );
		$cp1252 = array( chr(128), chr(146), chr(163), chr(192), chr(193), chr(194), chr(195), chr(196), chr(197), chr(198), chr(199), chr(200), chr(201), chr(202), chr(203), chr(204), chr(205), chr(206), chr(207), chr(208), chr(209), chr(210), chr(211), chr(212), chr(213), chr(214), chr(215), chr(216), chr(217), chr(218), chr(219), chr(220), chr(221), chr(222), chr(223), chr(224), chr(225), chr(226), chr(227), chr(228), chr(229), chr(230), chr(231), chr(232), chr(233), chr(234), chr(235), chr(236), chr(238), chr(239), chr(241), chr(244), chr(245), chr(251), chr(252), chr(254), chr(255), );

		return str_replace($chars, $cp1252, $string);
	}}
?>