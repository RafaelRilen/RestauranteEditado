<?php
App::uses('AppHelper', 'View/Helper');

use Pdf\MakePdf\PdfDocument;
class DocumentHelper extends AppHelper {

    public function __construct(View $view, $settings = array()) {
        $this->Pdf = new PdfDocument();
        parent::__construct($view, $settings);
    }

    public function create($settings){
        return $this->Pdf->create($settings);
    }
}
