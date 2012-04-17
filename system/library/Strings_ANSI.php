<?php
/**
 *	FVAL PHP Framework for Web Applications\n
 *	Copyright (c) 2007-2009 FVAL Consultoria e Inform�tica Ltda.
 *
 *	\warning Este arquivo � parte integrante do framework e n�o pode ser omitido
 *
 *	\version 1.0.0
 *
 *	\brief Classe para tratamento de strings em formato ANSI
 */

class Strings_ANSI {

	/**
	 *	\brief Troca caracteres acentuados por n�o acentuado
	 */
	public static function remove_accented_chars($txt) {
		$txt = mb_ereg_replace('[�����������]', 'a', $txt);
		$txt = mb_ereg_replace('[��������]', 'e', $txt);
		$txt = mb_ereg_replace('[��������]', 'i', $txt);
		$txt = mb_ereg_replace('[�����������]', 'o', $txt);
		$txt = mb_ereg_replace('[��������]', 'u', $txt);
		$txt = mb_ereg_replace('[��]', 'n', $txt);
		$txt = mb_ereg_replace('[��]', 'c', $txt);
		$txt = mb_ereg_replace('[�]', 'y', $txt);
		$txt = mb_ereg_replace('[�]', '1', $txt);
		$txt = mb_ereg_replace('[�]', '2', $txt);
		$txt = mb_ereg_replace('[�]', '3', $txt);

		return $txt;
	}
}
?>