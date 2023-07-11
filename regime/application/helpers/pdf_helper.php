<?php function exportToPdf($data) {
    $CI = &get_instance();

    $html = $CI->load->view('pdf_template', $data, true);

    // Load the Dompdf library
    $CI->load->library('Dompdf');

    // Initialize Dompdf
    $pdf = new Dompdf\Dompdf();
    $pdf->loadHtml($html);

    // Set paper size and orientation
    $pdf->setPaper('A4', 'portrait');

    // Render the PDF
    $pdf->render();

    // Generate the PDF output
    $output = $pdf->output();

    // Set the PDF file name
    $filename = 'exported_data.pdf';

    // Set the PDF file path for saving
    $filepath = FCPATH . 'path/to/save/' . $filename;

    // Save the PDF file on the server
    file_put_contents($filepath, $output);

    // Download the generated PDF
    $CI->load->helper('download');
    force_download($filepath, null);
}

?>
