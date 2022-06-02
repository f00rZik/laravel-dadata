<?php

namespace f00rzik\Dadata\Response;

abstract class AbstractResponse
{
    /**
     * @var string Исходная строка
     */
    public $source;

    /**
     * @var integer Код качества (see QC_* constants)
     */
    public $qc;
}
