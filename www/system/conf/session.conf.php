<?php
/** \file
 *	FVAL PHP Framework for Web Applications\n
 *	Copyright (c) 2007-2011 FVAL Consultoria e Inform�tica Ltda.\n
 *	Copyright (c) 2007-2011 Fernando Val\n
 *	Copyright (c) 2009-2011 Lucas Cardozo
 *
 *  \warning Este arquivo � parte integrante do framework e n�o pode ser omitido
 *
 *  \version 1.1.0
 *
 *  \brief Configura��es de sess�o
 *
 *	\c type determina o tipo de tratamento de sess�o.\n
 *		Os seguintes valores s�o aceitos:\n
 *	\li \c 'std' - tratamento de sess�o padr�o utilizando session_start();
 *	\li \c 'db' - tratamento de sess�o em banco de dados;
 *	\li \c 'memcached' - tratamento de sess�o utilizando Memcached (http://www.php.net/manual/en/book.memcached.php)
 */

/**
 *  \addtogroup config Configura��es do sistema
 **/
/*@{*/
	/**
	 *  \addtogroup sessioncfgdevelopment Configura��es para o ambiente de Desenvolvimento
	 **/
	/*@{*/
		/// Define o tipo de sess�o
		$conf['development']['type'] = 'std';
		/// Define o endere�o servidor de banco ou memcadhed
		$conf['development']['server_addr'] = '127.0.0.1';
		/// Define a porta do servidor de banco ou memcadhed
		$conf['development']['server_port'] = 11211;
		/// Define o tempo de validade da sess�o em minutos
		$conf['development']['master_domain'] = "";
		/// Define o tempo de validade da sess�o em minutos
		$conf['development']['expires'] = 120;
		/// Define o nome da tabela para sess�es em banco de dados
		$conf['development']['table_name'] = 'sessao_usuario';
		/// Define o nome da coluna do id da sess�o
		$conf['development']['id_column'] = 'id_sessao';
		/// Define o nome da coluna do valor da sess�o
		$conf['development']['value_column'] = 'valor';
		/// Define o nome da coluna da data de atualiza��o da sess�o
		$conf['development']['update_column'] = 'data_atualizacao';
	/*@}*/

	/**
	 *  \addtogroup sessioncfgproduction Configura��es para o ambiente de Produ��o
	 **/
	/*@{*/
		/// Define o tipo de sess�o
		$conf['production']['type'] = 'std';
		/// Define o servidor de banco ou memcadhed
		$conf['production']['server_addr'] = '127.0.0.1';
		/// Define a porta do servidor de banco ou memcadhed
		$conf['production']['server_port'] = 11211;
		/// Define o tempo de validade da sess�o em minutos
		$conf['production']['master_domain'] = "";
		/// Define o tempo de validade da sess�o em minutos
		$conf['production']['expires'] = 120;
		/// Define o nome da tabela para sess�es em banco de dados
		$conf['production']['table_name'] = 'sessao_usuario';
		/// Define o nome da coluna do id da sess�o
		$conf['production']['id_column'] = 'id_sessao';
		/// Define o nome da coluna do valor da sess�o
		$conf['production']['value_column'] = 'valor';
		/// Define o nome da coluna da data de atualiza��o da sess�o
		$conf['production']['update_column'] = 'data_atualizacao';
	/*@}*/
/*@}*/
