<?php

namespace Komodo\Logger\Transports;

/*******************************************************************************************
 Komodo Lib - Logger
 ____________________________________________________________________________________________
 *
 * Desenvolvido por: Jhonnata Paixão (Líder de Projeto)
 * Iniciado em: 15/10/2022
 * Arquivo: Transport.php
 * Data da Criação Fri Jul 14 2023
 * Copyright (c) 2023
 *
 *********************************************************************************************/

interface Transport
{

    /**
     * @param array $data
     * 
     * @return void
     */
    public function log($data);


}
