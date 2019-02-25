<?php

jimport('mpdf.mpdf.mpdf');
jimport('mpdf.mpdf.vendor.autoload');
//jimport('fpdi/src/autoload.php');
$filename = 'Nomination_Petition.pdf';

// chars to keep in mind (in the template): á|é|í|ó|ú|ñ|ü|¡|«|»|¿

//Create an instance of the class:
$mpdf = new mPDF();

$mpdf->SetTitle('Nomination Petition');
$mpdf->showWatermarkText = true;
// Add styles
$mpdf->WriteHTML($this->css, 1);

// Write some HTML code:
$mpdf->WriteHTML($this->html, 2);

// only show additional pages based on presence of filenames
if ( $this->data->template_affidavit || $this->data->template_instructions || $this->data->template_statement ) {
	$mpdf->SetImportUse();
}
if ( $this->data->template_affidavit ) {
	$mpdf->SetSourceFile(JPATH_COMPONENT.'/assets/pdf/'.$this->data->template_affidavit);
	$tplId = $mpdf->ImportPage(1);
	$mpdf->UseTemplate($tplId);
	// add a page back
	$mpdf->addPage();
	$mpdf->SetSourceFile(JPATH_COMPONENT.'/assets/pdf/blank_page.pdf');
	$tplId = $mpdf->ImportPage(1);
	$mpdf->UseTemplate($tplId);
}

if ( $this->data->template_instructions ) {
	$mpdf->addPage();
	$mpdf->SetSourceFile(JPATH_COMPONENT.'/assets/pdf/'.$this->data->template_instructions);
	$tplId = $mpdf->ImportPage(1);
	$mpdf->UseTemplate($tplId);
	$mpdf->addPage();
	$tplId = $mpdf->ImportPage(2);
	$mpdf->UseTemplate($tplId);
	$mpdf->addPage();
	$tplId = $mpdf->ImportPage(3);
	$mpdf->UseTemplate($tplId);
	$mpdf->addPage();
	$tplId = $mpdf->ImportPage(4);
	$mpdf->UseTemplate($tplId);
}
if ( $this->data->template_statement ) {
	$mpdf->addPage();
	$mpdf->SetSourceFile(JPATH_COMPONENT.'/assets/pdf/'.$this->data->template_statement);
	$tplId = $mpdf->ImportPage(1);
	$mpdf->UseTemplate($tplId);
	$mpdf->addPage();
	$tplId = $mpdf->ImportPage(2);
	$mpdf->UseTemplate($tplId);
	$mpdf->addPage();
	$tplId = $mpdf->ImportPage(3);
	$mpdf->UseTemplate($tplId);
	$mpdf->addPage();
	$tplId = $mpdf->ImportPage(4);
	$mpdf->UseTemplate($tplId);
}
// Output a PDF file directly to the browser
$mpdf->Output($filename, JRequest::getVar('download') == 'true' ? 'D' : 'I');

exit();
