<?php

namespace Komodo\Logger\Transports;

use Komodo\Logger\LogData;

/*
|-----------------------------------------------------------------------------
| Komodo Logger
|-----------------------------------------------------------------------------
|
| Desenvolvido por: Jhonnata Paixão (Líder de Projeto)
| Iniciado em: 15/10/2022
| Arquivo: HTMLTransport.php
| Data da Criação Tue Aug 01 2023
| Copyright (c) 2023
|
|-----------------------------------------------------------------------------
|*/

class FakeTransport implements Transport
{

    /**
     * @param LogData $data
     *
     * @return string
     */
    public function log($data)
    {
        return $this->parse($data);
    }

    /**
     * @param LogData $data
     *
     * @return string
     */
    public function parse($data)
    {
        $name = $data->name;
        $msg = $data->msg;
        $oringi = $data->oringin;
        $content = '| ' . json_encode($data->content, true);
        $level = $data->level;
        $timestamp = $data->timestamp;
        return "[$level][$oringi][$name][$timestamp]:: $msg $content";
    }
}
