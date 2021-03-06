<?php
/*  ------------------------------------------------------------------------------------ --- -- -
    FVAL PHP Framework for Web Sites

    Copyright (c) 2007-2009 FVAL - Consultoria e Informática Ltda.
    Copyright (C) 2009 Fernando Val

    http://www.fval.com.br

    Developer team:
        Fernando Val  - fernando.val@gmail.com

    Framework version:
        1.0.0

    Script version:
        0.1.1

    This script:
        Script para alteração de senha
    ------------------------------------------------------------------------------------ --- -- - */

class Chpasswd_Controller
{
    public function __construct()
    {
        if (!FW\CMS::logged_in_user()) {
            FW\URI::redirect('/'.FW\URI::relativePathPage().'/login');

            return false;
        }

        FW\Template::start();
    }

    public function _default()
    {
        $Error = false;
        if (!empty($_POST)) {
            if (empty($_POST['password'])) {
                $Error = 'Você precisa definir uma nova senha.';
            } elseif (empty($_POST['passwor2'])) {
                $Error = 'Você precisa preencher o campo de confirmação.';
            } elseif ($_POST['password'] != $_POST['passwor2']) {
                $Error = 'Senha não confere.';
            } elseif (strlen(trim($_POST['password'])) == 0) {
                $Error = 'Você não pode definir uma senha contendo apenas espaços.';
            } else {
                $user = FW\CMS::logged_in_user();
                FW\Kernel::debug($user);
                if (FW\CMS::updateUserById($user['user_id'], '', trim($_POST['password']))) {
                    FW\Template::assign('Success', 'Senha alterada com sucesso');
                }
            }
        }
        FW\Template::assign('Error', $Error);
    }
}
