<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue santé</title>
    <link rel="stylesheet" href="../css/catalogue_sante.css">
</head>
<body>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sante extends CI_Controller {

	
	public function index()
	{
		$this->load->view('catalogue_sante');
	}

}

?>

</body>
</html>