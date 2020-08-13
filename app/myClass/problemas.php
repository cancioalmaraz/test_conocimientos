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

    public function resolverProblema_2($text){
    	if ($text != ''){
    		return $text." 2";
    	}
    }
}