<?php
/**	\file
 *	FVAL PHP Framework for Web Applications
 *
 *  \copyright	Copyright (c) 2007-2015 FVAL Consultoria e Inform�tica Ltda.\n
 *  \copyright	Copyright (c) 2007-2015 Fernando Val\n
 *	\copyright Copyright (c) 2009-2013 Lucas Cardozo
 *
 *	\brief		Classe para tratamento de strings em formato ANSI
 *	\warning	Este arquivo � parte integrante do framework e n�o pode ser omitido
 *	\version	1.5.6
 *  \author		Fernando Val  - fernando.val@gmail.com
 *  \author		Lucas Cardozo - lucas.cardozo@gmail.com
 *	\ingroup	framework
 */

namespace FW\Utils;

/**
 *  \brief Classe para tratamento de strings em formato ANSI
 *  
 *  \note Esta classe extende a classe Strings
 */
class Strings_ANSI extends Strings
{
	/**
	 *	\brief Troca caracteres acentuados por n�o acentuado
	 */
	public static function removeAccentedChars($txt)
	{
		$txt = preg_replace('/[����������ê]/u', 'a', $txt);
		$txt = preg_replace('/[��������]/u',      'e', $txt);
		$txt = preg_replace('/[��������]/u',      'i', $txt);
		$txt = preg_replace('/[����������ֺ]/u',  'o', $txt);
		$txt = preg_replace('/[�������ܵ]/u',     'u', $txt);
		$txt = preg_replace('/[��]/u',            'n', $txt);
		$txt = preg_replace('/[��]/u',            'c', $txt);
		$txt = preg_replace('/[�]/u',             'd', $txt);
		$txt = preg_replace('/[��]/u',            's', $txt);
		$txt = preg_replace('/[��]/u',            'y', $txt);
		$txt = preg_replace('/[��]/u'             'z', $txt);
		$txt = preg_replace('/[�]/u',             '1', $txt);
		$txt = preg_replace('/[�]/u',             '2', $txt);
		$txt = preg_replace('/[�]/u',             '3', $txt);
		$txt = preg_replace('/[��]/u',           'ae', $txt);
		$txt = preg_replace('/[��]/u',            '0', $txt);
		$txt = preg_replace('/[�������߮�����]/u', '', $txt);

		return $txt;
	}

	/**
	 *	/brief Converte uma string ANSI para Windows-CP-1252
	 */
	public static function convertToWindowsCP1252($string)
	{
		$chars = array( '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', );
		$cp1252 = array( chr(128), chr(146), chr(163), chr(192), chr(193), chr(194), chr(195), chr(196), chr(197), chr(198), chr(199), chr(200), chr(201), chr(202), chr(203), chr(204), chr(205), chr(206), chr(207), chr(208), chr(209), chr(210), chr(211), chr(212), chr(213), chr(214), chr(215), chr(216), chr(217), chr(218), chr(219), chr(220), chr(221), chr(222), chr(223), chr(224), chr(225), chr(226), chr(227), chr(228), chr(229), chr(230), chr(231), chr(232), chr(233), chr(234), chr(235), chr(236), chr(238), chr(239), chr(241), chr(244), chr(245), chr(251), chr(252), chr(254), chr(255), );

		return str_replace($chars, $cp1252, $string);
	}
	
	/**
	 *	\brief Retorna um texto com a string fornecida soletrada
	 */
	public static function spell($txt, $separator=' ', $lng='pt')
	{
		$chars = array(
			'0' => 'ZERO',
			'1' => 'UM',
			'2' => 'DOIS',
			'3' => 'TR�S',
			'4' => 'QUATRO',
			'5' => 'CINCO',
			'6' => 'SEIS',
			'7' => 'SETE',
			'8' => 'OITO',
			'9' => 'NOVE',
			'A' => 'A', '�' => 'A-agudo', '�' => 'A-grave', '�' => 'A-circunflexo', '�' => 'A-til',
			'B' => 'B�',
			'C' => 'C�',
			'D' => 'D�',
			'E' => '�', '�' => '�-agudo', '�' => '�-grave', '�' => '�-circunflexo',
			'F' => 'EFE',
			'G' => 'G�',
			'H' => 'AG�',
			'I' => '�',
			'J' => 'JOTA',
			'K' => 'C�',
			'L' => 'ELE',
			'M' => 'EME',
			'N' => 'ENE',
			'O' => '�',
			'P' => 'P�',
			'Q' => 'QUE',
			'R' => 'ERRE',
			'S' => 'ESSE',
			'T' => 'T�',
			'U' => 'U',
			'V' => 'V�',
			'W' => 'D�BLIO',
			'X' => 'XIS',
			'Y' => '�PSILON',
			'Z' => 'Z�',
			'�' => 'CEDILHA',
			' ' => 'ESPA�O',
			',' => 'V�RGULA',
			'.' => 'PONTO',
			'!' => 'EXCLAMA��O',
			'?' => 'INTERROGA��O',
			'@' => 'ARROBA',
			'#' => 'TRALHA',
			'$' => 'CIFR�O',
			'%' => 'PERCENTUAL',
			'�' => 'TREMA',
			'&' => '�-COMERCIAL',
			'*' => 'ASTERISCO',
			'(' => 'PAR�NTESES-ABERTO',
			')' => 'PAR�NTESES-FECHADO',
			'-' => 'MENOS',
			'_' => 'UNDERSCORE',
			'+' => 'MAIS',
			'=' => 'IGUAL',
			'�' => 'PAR�GRAFO',
			'[' => 'COLCHETE-ABERTO',
			']' => 'COLCHETE-FECHADO',
			'{' => 'CHAVES-ABERTA',
			'}' => 'CHAVES-FECHADA',
			'"' => 'ASPAS',
			'\'' => 'AP�STROFO',
			'`' => 'ACENTO GRAVE',
			'�' => 'ACENTO AGUDO',
			'^' => 'ACENTO CIRCUNFLEXO',
			'~' => 'TIL',
			'<' => 'MENOR',
			'>' => 'MAIOR',
			':' => 'DOIS-PONTOS',
			';' => 'PONTO-E-VIRGULA',
			'/' => 'BARRA',
			'\\' => 'CONTRABARRA',
			'|' => 'P�IPE',
			'�' => 'AESC',
			'�' => 'ESZETT',
			'�' => 'ETH',
			'�' => 'ENHE',
			'�' => '�',
			'�' => 'CH',
		);
	}
}