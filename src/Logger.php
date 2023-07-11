<?php

namespace Komodo\Logger;

/*******************************************************************************************
 Komodo Lib - Logger
 ____________________________________________________________________________________________
 *
 * Desenvolvido por: Jhonnata Paixão (Líder de Projeto)
 * Iniciado em: 15/10/2022
 * Arquivo: Logger.php
 * Data da Criação Sun May 14 2023
 * Copyright (c) 2023
 *
 *********************************************************************************************/


class Logger
{
    private $name;
    private $especial;
    public static function BreackAndLog($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }

    public static function BreackAndLogAPI($log, $msg = 'Houve uma falha na requisição')
    {
        echo json_encode([
            'error' => true,
            'error_msg' => $msg

        ]);
        die();
    }

    public static function error($data, $msg = null)
    {
    }

    public static function info($data, $msg = null)
    {
    }

    public static function warn($data, $msg = null)
    {
    }

    public static function trace($data, $msg = null)
    {
    }

    public static function all($data, $msg = null)
    {
    }

    public static function debug($data, $msg = null)
    {
    }

    public function register($name)
    {
        $this->name = $name;
    }
}
