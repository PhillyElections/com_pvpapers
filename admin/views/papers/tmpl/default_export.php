<?php defined('_JEXEC') or die('Restricted access');

//      JToolBarHelper::back();

$exportFilename = date('Y-m-d') . '_papers_export' . '.csv';

JResponse::clearHeaders();

JResponse::setHeader('Pragma', 'public', true);
JResponse::setHeader('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT', true); // Date in the past
JResponse::setHeader('Last-Modified', gmdate('D, d M Y H:i:s') . ' GMT', true);
JResponse::setHeader('Cache-Control', 'no-store, no-cache, must-revalidate', true); // HTTP/1.1
JResponse::setHeader('Cache-Control: pre-check=0, post-check=0, max-age=0', true); // HTTP/1.1
JResponse::setHeader('Pragma', 'no-cache', true);
JResponse::setHeader('Expires', '0', true);
JResponse::setHeader('Content-Transfer-Encoding', 'none', true);
JResponse::setHeader('Content-Type', 'application/csv', true); // joomla will overwrite this...
JResponse::setHeader('Content-Disposition', 'attachment; filename="' . $exportFilename . '"', true);

// joomla overwrites content-type, we can't use JResponse::setHeader()
$d = JFactory::getDocument();
$d->setMimeEncoding('application/csv');

// stop output buffering or we will run out of memory with large tables.
ob_end_flush();

JResponse::sendHeaders();
$output = fopen('php://output', 'w');
fputcsv($output,
    array('ID', 'PARTY', 'CREATOR', 'ADDRESS', 'APT/UNIT', 'ZIP', 'PHONE', 'IP', 'CREATED',
    )
);

$subheader = array('-','-','NAME', 'OFFICE', 'DISTRICT', 'ADDRESS', 'OCCUPATION','-','-',);
$field_1_default = 'candidate_name_';
$field_2_default = 'candidate_office_';
$field_3_default = 'candidate_district_';
$field_4_default = 'candidate_address_';
$field_5_default = 'candidate_occupation_';

$k = 0;
for ($i = 0, $n = count($this->items); $i < $n; $i++) {
    $row = &$this->items[$i];
    if ($row->published) {
        fputcsv($output,
            array(
                $row->id,
                $row->candidate_party,
                $row->candidate_name,
                $row->candidate_address,
                $row->candidate_address2,
                $row->candidate_zip,
                $row->candidate_phone,
                $row->user_ip,
                $row->created,
            )
        );

        $extra_data = json_decode($row->extra_data);
        if ($extra_data->candidate_name_1) {
            fputcsv($output,
                $subheader
            );
        }
        for ($ii = 1; $ii < 8; $ii++) {
            $field1 = $field_1_default . $ii;
            $field2 = $field_2_default . $ii;
            $field3 = $field_3_default . $ii;
            $field4 = $field_4_default . $ii;
            $field5 = $field_5_default . $ii;

            if ($extra_data->$field1) {
                fputcsv($output,
                    array(
                        '-',
                        '-',
                        $extra_data->$field1,
                        $extra_data->$field2,
                        $extra_data->$field3,
                        $extra_data->$field4,
                        $extra_data->$field5,
                        '-',
                        '-',
                    )
                );
            }
        }
    }
    $k = 1 - $k;
}
