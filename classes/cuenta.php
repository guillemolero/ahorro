<?php

/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 29/06/2017
 * Time: 12:40
 */
class cuenta
{
    private $ingresosFijos;
    private $gastosFijos;
    private $ahorro;
    private $vivir;
    private $ocio;

    private $gastadoAhorro;
    private $gastadoVivir;
    private $gastadoOcio;

    private $gasto;
    private $ingreso;

    private $cashAhorrar;
    private $cashVivir;
    private $cashOcio;

    private $ahorradoTotal;

    function __construct($ingresosFijos, $gastosFijos, $ahorro, $vivir, $ocio)
    {
        $this->ingresosFijos = $ingresosFijos;
        $this->gastosFijos = $gastosFijos;
        $this->ahorro = $ahorro;
        $this->vivir = $vivir;
        $this->ocio = $ocio;

        $this->gasto = 0;
        $this->ingreso = 0;

        $this->cashAhorrar = $this->ingresosFijos * ($this->ahorro/100);
        $this->cashVivir = $this->ingresosFijos * ($this->vivir/100);
        $this->cashOcio = $this->ingresosFijos * ($this->ocio/100);
    }

    /**************************************************/
    /**************** Funciones reset *****************/
    /**************************************************/

    function resetGastoActual()
    {
        $this->gasto = $this->gastadoAhorro + $this->gastadoVivir + $this->gastadoOcio;
    }

    function resetIngreso()
    {
        $this->ingreso = 0;
    }

    function resetGastoA()
    {
        $this->gastadoAhorro = 0;
        $this->resetGastoActual();
    }

    function resetGastoV()
    {
        $this->gastadoVivir = 0;
        $this->resetGastoActual();
    }

    function resetGastoO()
    {
        $this->gastadoOcio = 0;
        $this->resetGastoActual();
    }

    function resetGastos()
    {
        $this->resetGastoA();
        $this->resetGastoV();
        $this->resetGastoO();
        $this->resetGastoActual();
    }

    /**************************************************/
    /**************** Funciones maths *****************/
    /**************************************************/

    function sumarTotal($cantidad)
    {
        $this->ahorradoTotal = $this->ahorradoTotal + $cantidad;
    }

    function restarTotal($cantidad)
    {
        $this->ahorradoTotal = $this->ahorradoTotal - $cantidad;
    }

    /**************************************************/
    /*************** Funciones update *****************/
    /**************************************************/

    function actualizarGasto($gasto)
    {
        $this->gasto = $this->gasto + $gasto;
    }

    function actualizarIngreso($ingreso)
    {
        $this->ingreso = $this->ingreso + $ingreso;
    }

    function actualizarAhorrar()
    {
        $this->cashAhorrar = $this->ingresosFijos * ($this->ahorro/100);
    }

    function actualizarVivir()
    {
        $this->cashVivir = $this->ingresosFijos * ($this->vivir/100);
    }

    function actualizarOcio()
    {
        $this->cashOcio = $this->ingresosFijos * ($this->ocio/100);
    }

    function actualizarCash()
    {
        $this->actualizarAhorrar();
        $this->actualizarVivir();
        $this->actualizarOcio();
    }

    function actualizarTotal($gasto, $cash)
    {
        if($gasto > $cash)
        {
            $cantidad = $gasto - $cash;
            $this->restarTotal($cantidad);
        }
        else
        {
            $cantidad = $cash - $gasto;
            $this->sumarTotal($cantidad);
        }
    }

    /**************************************************/
    /***************** Funciones set ******************/
    /**************************************************/

    function setIngresos($ingresosFijos)
    {
        $this->ingresosFijos = $ingresosFijos;
        $this->actualizarCash();
    }

    function setAhorro($ahorro)
    {
        $this->ahorro = $ahorro;
        $this->actualizarAhorrar();
    }

    function setVivir($vivir)
    {
        $this->vivir = $vivir;
        $this->actualizarVivir();
    }

    function setOcio($ocio)
    {
        $this->ocio = $ocio;
        $this->actualizarOcio();
    }

    function setGastadoA($gastadoAhorro)
    {
        $this->gastadoAhorro = $gastadoAhorro;
        $this->actualizarTotal($this->gastadoAhorro, $this->cashAhorrar);
    }

    function setGastadoV($gastadoVivir)
    {
        $this->gastadoVivir = $gastadoVivir;
        $this->actualizarTotal($this->gastadoVivir, $this->cashVivir);
    }

    function setGastadoO($gastadoOcio)
    {
        $this->gastadoOcio = $gastadoOcio;
        $this->actualizarTotal($this->gastadoOcio, $this->cashOcio);
    }

    /**************************************************/
    /***************** Funciones get ******************/
    /**************************************************/

    function getIngresosFijos()
    {
        return $this->ingresosFijos;
    }

    function getAhorro()
    {
        return $this->ahorro;
    }

    function getVivir()
    {
        return $this->vivir;
    }

    function getOcio()
    {
        return $this->ocio;
    }

    function getGastadoA()
    {
        return $this->gastadoAhorro;
    }

    function getGastadoV()
    {
        return $this->gastadoVivir;
    }

    function getGastadoO()
    {
        return $this->gastadoOcio;
    }

    function getCashA()
    {
        return $this->cashAhorrar;
    }

    function getCashV()
    {
        return $this->cashVivir;
    }

    function getCashO()
    {
        return $this->cashOcio;
    }
}