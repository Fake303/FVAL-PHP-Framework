<?php
/**  \file
 *  FVAL PHP Framework for Web Applications.
 *
 *  \copyright Copyright (c) 2007-2016 FVAL Consultoria e Inform�tica Ltda.\n
 *  \copyright Copyright (c) 2007-2016 Fernando Val\n
 *  \copyright Copyright (c) 2014 Allan Marques
 *
 *  \brief     Test case for Classe com m�todos para diversos tipos de tratamento e valida��o de dados string
 *  \warning   Este arquivo � parte integrante do framework e n�o pode ser omitido
 *  \version   0.2
 *  \author    Allan Marques - allan.marques@ymail.com
 *  \ingroup   tests
 */
use FW\Utils\Strings;

class StringsTest extends PHPUnit_Framework_TestCase
{
    public function testEmailGetsValidateSuccessfully()
    {
        $this->assertTrue(Strings::validateEmailAddress('fernando@fval.com.br'));
        $this->assertTrue(Strings::validateEmailAddress('fernando@fval.com.br', false));

        $this->assertFalse(Strings::validateEmailAddress('fernando@fval', false));
        $this->assertFalse(Strings::validateEmailAddress('fernandofval.com.br', false));
        $this->assertFalse(Strings::validateEmailAddress('fernando@fval.nonexiuuste'));
        $this->assertFalse(Strings::validateEmailAddress('fernando@fval.nonexiuuste', false));
    }

    public function testThatDateGetsValidatedSuccessfully()
    {
        $this->assertTrue(Strings::data('25/01/1987'));
        $this->assertFalse(Strings::data('31d/f02/gg2014'));
        $this->assertFalse(Strings::data('31/02/2014'));
    }
}
