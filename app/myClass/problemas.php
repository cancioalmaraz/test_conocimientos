<?php

namespace App\myClass;

/**
 *
 */
class problemas
{

    private function composer($char, $array){
        $resp = $array[0];
        unset($array[0]);
        foreach ($array as $word) {
            $resp .= $char.$word;
         }
        return $resp;
    }

    private function invertLine($line){
        $arrayLine = explode(" ", $line);
        return $this->composer(" ", array_reverse($arrayLine));
    }

    private function invertLineAll($text){
        $lines = explode("\r\n", $text);
        foreach ($lines as &$line) {
            $line = $this->invertLine($line);
        }
        return $this->composer("\r\n", $lines);
    }

    private function sortLenLines($lines){
        $len = count($lines);
        for($i = 0; $i < $len; $i++){
            $array[] = array(strlen($lines[$i]), $i);
        }
        rsort($array);
        return $array;
    }

    private function sortedText($text){
        $lines = explode("\r\n", $text);
        $arraySorted = $this->sortLenLines($lines);
        $len = count($lines);
        for($i = 0; $i<$len; $i++){
            $linesSorted[]=$lines[$arraySorted[$i][1]];
        }
        return $this->composer("\r\n", $linesSorted);
    }

    private function sortedParrafo($text){
        $parrafos = explode("\r\n\r\n", $text);

        foreach($parrafos as $parrafo){
            $sortedText[] = $this->sortedText($parrafo);
        }

        $resp = $this->composer("\r\n\r\n", $sortedText);

        return $resp;
    }

    public function resolverProblema_1($text){
    	if ($text != ''){
            return $this->invertLineAll($this->sortedParrafo($text));
    	}
    }

    private function typeRima($arraySil){
        $resp = "DESCONOCIDO";
        $lenSil = count($arraySil);
        if($lenSil == 2){
            if ($arraySil[0] == $arraySil[1]){
                $resp = "PAREADO";
            }
        }
        elseif($lenSil == 3) {
            if ($arraySil[0] == $arraySil[2]){
                $resp = "TERCETO";
            }
        }
        elseif($lenSil == 4){
            if($arraySil[0] == $arraySil[1] and $arraySil[1] == $arraySil[2] and $arraySil[2] == $arraySil[3]){
                $resp = "CUADERNA VIA";
            }
            elseif($arraySil[0] == $arraySil[3] and $arraySil[1] == $arraySil[2] and $arraySil[3] != $arraySil[1]){
                $resp = "CUARTETO";
            }
            elseif($arraySil[0] == $arraySil[2] and $arraySil[1] == $arraySil[3] and $arraySil[2] != $arraySil[1]){
                $resp = "CUARTETA";
            }
        }
        return $resp;
    }

    private function is_valid($letter){
        if($letter != ";" and $letter != "," and $letter != ":" and $letter != " " and $letter != "."){
            return true;
        }
        else{
            return false;
        }
    }

    private function rimaParrafo($text){
        $lines = explode("\r\n", $text);
        $lenLines = count($lines);
        if ($lenLines>=2){
            foreach ($lines as $line) {
                $words = explode(" ", $line);

                for ($i = count($words)-1; $i>=0; $i--){
                    if($words[$i] != ""){
                        $lastWord = $words[$i];
                        break;
                    }
                }

                for ($i = strlen($lastWord)-1; $i>=0; $i--){
                    if( $this->is_valid($lastWord[$i]) ){
                        if ($this->is_valid($lastWord[$i-1])){
                            $finalSilaba[] = $lastWord[$i-1].$lastWord[$i];
                            break;
                        }
                    }
                }
            }
            $resp = $this->typeRima($finalSilaba);
        }
        else {
            $resp = "Porfavor Ingrese un parrafo de dos o mas lineas";
        }
        return $resp;
    }

    private function rimaParrafoAll($text){

        $resp = "";

        $parrafos = explode("\r\n\r\n", $text);

        $resp .= $this->rimaParrafo($parrafos[0]);
        unset($parrafos[0]);
        foreach($parrafos as $parrafo){
            $resp .= "\r\n".$this->rimaParrafo($parrafo);
        }
        return $resp;
    }

    public function resolverProblema_2($text){
    	if ($text != ''){
    		return $this->rimaParrafoAll($text);
    	}
    }
}