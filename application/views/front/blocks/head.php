<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php 
        if($this->uri->segment(1) == '') echo 'Strona główna - '.$settings->meta_title;
        else echo ucfirst(str_replace('_', ' ', $this->uri->segment(1))).' - '.$settings->meta_title;

   ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" async>
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700i,800,800i,900,900i&display=swap" rel="stylesheet" async>

  <link href="<?= base_url() ?>assets/front/css/bootstrap.min.css" rel="stylesheet" async>
  <link href="<?= base_url() ?>assets/front/css/mdb.min.css" rel="stylesheet" async>
  <link href="<?= base_url() ?>assets/front/css/style.css" rel="stylesheet" async>

  <link rel="stylesheet" href="<?= base_url() ?>assets/front/css/lc_lightbox.css" async />
  <link rel="stylesheet" href="<?= base_url() ?>assets/front/skins/minimal.css" async />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"  async />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"  async></script>


  	<?php if($this->uri->segment(1) != ''){echo '<style type="text/css">.navbar {background-color: #1C2331!important;}</style>';} ?>
  <style type="text/css">
    .no-webp{
      display: none;
    }
  </style>
</head>

