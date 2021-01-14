<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Prose extends Tags
{
    public function index()
    {
        $backgroundColor = (string) $this->context->get('bg_color');
        if($backgroundColor !== "") {
            $searchString = $backgroundColor . ' {  --bg-opacity: 1;  background-color: ';
            $file = str_replace(["\r", "\n"], "", file_get_contents(public_path('css/tailwind.css')));
            $postition = strpos($file, $searchString);

            $color = substr($file, $postition + strlen($searchString), 7);
            return $this->whichIsBetter($color);
        }

        return 'prose';
    }

    public function dark()
    {
        $backgroundColor = $this->context->raw('bg_color');
        if($backgroundColor === null || $backgroundColor === 'bg-gray-200') {
            return 'dark:prose-dark';
        }
    }

    private function whichIsBetter($color) {
        list($r1, $g1, $b1) = sscanf($color, "#%02x%02x%02x");
        list($r2, $g2, $b2) = sscanf('#ffffff', "#%02x%02x%02x"); // white
        list($r3, $g3, $b3) = sscanf('#000000', "#%02x%02x%02x"); // black

        $lightText = $this->luminosityContrast($r1, $g1, $b1, $r2, $g2, $b2);
        $darkText = $this->luminosityContrast($r1, $g1, $b1, $r3, $g3, $b3);

        if($lightText > $darkText) {
            return 'prose prose-dark'; // contrast is better with light text, thus dark prose
        } else {
            return 'prose'; // contrast is better with dark text, thus normal prose
        }
    }

    private function luminosityContrast($R1,$G1,$B1,$R2,$G2,$B2){
        $L1 = 0.2126 * pow($R1/255, 2.2) +
              0.7152 * pow($G1/255, 2.2) +
              0.0722 * pow($B1/255, 2.2);

        $L2 = 0.2126 * pow($R2/255, 2.2) +
              0.7152 * pow($G2/255, 2.2) +
              0.0722 * pow($B2/255, 2.2);

        if($L1 > $L2){
            return ($L1+0.05) / ($L2+0.05);
        }else{
            return ($L2+0.05) / ($L1+0.05);
        }
    }
}
