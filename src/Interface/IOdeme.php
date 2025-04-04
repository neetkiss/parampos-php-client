<?php

namespace Param\PhpSdk\Interface;


enum GuvenlikTipi: string {
    case TreeD = '3D';
    case NS = 'NS';
}

interface IOdeme
{
    public function setKK_Sahibi($sahibi);
    public function setKK_No($numara);
    public function setKK_SK_Ay($ay);
    public function setKK_SK_Yil($yil);
    public function setKK_CVC($cvc);
    public function setKK_Sahibi_GSM($gsm);
    public function setHata_URL($url);
    public function setBasarili_URL($url);
    public function setSiparis_ID($id);
    public function setSiparis_Aciklama($aciklama);
    public function setTaksit($taksit);
    public function setIslem_Tutar($tutar);
    public function setToplam_Tutar($tutar);
    public function setIslem_Guvenlik_Tip($tip); 
    public function setIPAdr($ip);
    public function setIslem_ID($Islem_ID);
    public function setRef_URL($Ref_URL);
    public function setData1($Data1);
    public function setData2($Data2);
    public function setData3($Data3);
    public function setData4($Data4);
    public function setData5($Data5);
}