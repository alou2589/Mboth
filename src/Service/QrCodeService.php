<?php

namespace App\Service;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;

class QrCodeService
{
    protected $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder=$builder;
    }

    public function qrcode($recherche, $nom_qr)
    {
        $url='https://192.168.1.10:8000/admin/maison/';
        $path= dirname(__DIR__,2).'/public/assets/';
        $result=$this->builder
        ->data($url.$recherche)
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
        ->size(400)
        ->margin(10)
        ->backgroundColor(new Color(239, 155, 15))
        ->logoPath($path.'img/logo-mini.png')
        ->logoResizeToHeight(100)
        ->logoResizeToWidth(100)
        ->build()
        ;
        $namePng=$nom_qr.'.png';
        $result->saveToFile($path.'qrcodes/'.$namePng);
        return $result->getDataUri();
    }
}
