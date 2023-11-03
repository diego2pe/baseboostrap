<?php

class LenguajeBean {
    public $CODLENG ;
    public $NOMBLENG ;
    public $CANTPRO;
    public $DESLENG ;
    public function getCODELENG() {
        return $this->CODELENG;
    }

    public function getNOMBLENG() {
        return $this->NOMBLENG;
    }

    public function getCANTPRO() {
        return $this->CANTPRO;
    }

    public function getDESLENG() {
        return $this->DESLENG;
    }

    public function setCODELENG($CODELENG): void {
        $this->CODELENG = $CODELENG;
    }

    public function setNOMBLENG($NOMBLENG):void {
        $this->NOMBLENG = $NOMBLENG;
    }

    public function setCANTPRO($CANTPRO):void {
        $this->CANTPRO = $CANTPRO;
    }

    public function setDESLENG($DESLENG): void {
        $this->DESLENG = $DESLENG;
    }

}
?>