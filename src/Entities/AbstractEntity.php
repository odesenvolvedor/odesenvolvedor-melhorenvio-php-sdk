<?php

namespace MelhorEnvio\Entities;

use MelhorEnvio\Interfaces\MelhorEnvioInterface;
use MelhorEnvio\Interfaces\MelhorEnvioSerializable;

abstract class AbstractEntity implements MelhorEnvioInterface, MelhorEnvioSerializable
{
    /**
     * @param $json
     *
     * @return self
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);
        $self = new self();
        $self->populate($object);

        foreach ($self as $k => $v) {
            if (empty($v)) {
                unset($self->$k);
            }
        }
        return $self;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $dataProps = get_object_vars($data);

        if (!empty($dataProps)) {
            foreach ($dataProps as $k => $v) {
                $this->$k = $v;
            }
        }
    }

    public function jsonSerialize()
    {
        $arr = get_object_vars($this);
        foreach ($arr as $k => $v) {
            if (!is_bool($v) && $v !== 0 && empty($v)) {
                unset($arr[$k]);
            }
        }
        return $arr;
    }
}