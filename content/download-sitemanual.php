<?php
header('Content-disposition: attachment; filename=JobFair-Online Website Manual.pdf');
header('Content-type: application/pdf');
readfile('./downloads/manual/JobFair-Online Website Manual.pdf');
?>