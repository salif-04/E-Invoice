<?php
@include('inc/phpinvoice.php');
$invoice = new phpinvoice();
/* Header Settings */
$invoice->setLogo( asset('img/sample1.jpg') );
$invoice->setColor("#007fff");
$invoice->setType("Sale Invoice");
$invoice->setReference("INV-55033645");
$invoice->setDate(date('M dS ,Y', time()));
$invoice->setTime(date('h:i:s A', time()));
$invoice->setDue(date('M dS ,Y', strtotime('+3 months')));
$invoice->setFrom(array("Seller Name", "Sample Company Name", "128 AA Juanita Ave", "Glendora , CA 91740", "United States of America"));
$invoice->setTo(array("Purchaser Name", "Sample Company Name", "128 AA Juanita Ave", "Glendora , CA 91740", "United States of America"));
/* Adding Items in table */
$invoice->addItem((string)$data["item1"], "", 6, 0, 580.55, 0, 3480);
$invoice->addItem((string)$data["item2"], "", 4, 0, 645, 0, 2580);
$invoice->addItem((string)$data["item3"], "", 10, 0, 230, 0, 2300);
// $invoice->addItem("HP LaserJet 5200", "", 1, 0, 1100, 55, 1100);

/* Add totals */
$invoice->addTotal("Total", $invoice->items_total);
$invoice->addTotal("VAT 21%", $invoice->GetPercentage(21));
$invoice->addTotal("Discount 10%", $invoice->GetPercentage(10), false, true);
$invoice->addTotal("Previous due", 1000, array(255,0,0));
$invoice->addTotal("Grand Total", $invoice->GetGrandTotal(), true);
/* Set badge */
$invoice->addBadge("Payment Paid");
/* Add title */
$invoice->addTitle("Important Notice");
/* Add Paragraph */
$invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you. You can refund within 2 days of purchase.");
/* Set footer note */
$invoice->setFooternote("My Company Name Here");

/*Footer Image*/
$invoice->setFooterImage( asset('img/stamp.png') );

$inv_id = 'INV000111';
$dir = 'user_pdfs/';
$file_name = $inv_id . '.pdf';

/* Render */
$invoice->render($dir.$file_name, 'F'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */

echo "<script>location='http://localhost/E-Invoice/Einvoice/public/mail/kiodeba11@gmail.com'</script>";

?>