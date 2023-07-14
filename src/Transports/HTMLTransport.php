<?php

namespace Komodo\Logger\Transports;

/*******************************************************************************************
  Komodo Lib - Logger
 ____________________________________________________________________________________________
 *
 * Desenvolvido por: Jhonnata Paixão (Líder de Projeto)
 * Iniciado em: 15/10/2022
 * Arquivo: HTMLTransport.php
 * Data da Criação Fri Jul 14 2023
 * Copyright (c) 2023
 *
 *********************************************************************************************/

class HTMLTransport implements Transport
{
    /**
     * @var string;
     */
    private $tag;

    public function __construct($tag = null)
    {
        $this->tag = $tag ?: 'pre';
    }

    /**
     * @param array $data
     * 
     * @return void
     */
    public function log($data)
    {
        $name = $data['name'];
        $msg = $data['msg'];
        $oringi = $data['oringi'];
        $content = '| ' . print_r($data['content'], true);
        $level = $data['level'];
        $timestamp = $data['timestamp'];

        $log = "[$level][$oringi][$name][$timestamp]:: $msg $content";

        echo "<{$this->tag}>$log</{$this->tag}>" . PHP_EOL;
    }
}
