<?php

namespace MelhorEnvio\Interfaces;

/**
 * Interface MelhorEnvioInterface
 *
 * @author Fernando Campos de Oliveira
 * 
 * @package MelhorEnvio\Interfaces;
 */
interface MelhorEnvioInterface
{

    /**
     * @param $json
     *
     * @return \stdClass
     */
    public static function fromJson($json);

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data);
}