<?php
namespace Social\Interfaces;

use Social\Interfaces\IDocument;

class DocImplement implements IDocument
{
     public function Id(){
       return 56;
     }

     public function Title()
     {
       return "Injected Text";
     }

     public function CurrentTime(){
       return date("Y/m/d");
     }
}
?>
