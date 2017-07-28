<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

    
     <?= css('assets/css/app.css') ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?= css('assets/css/font-awesome.css') ?>
    <?= css('assets/css/layout.css') ?>
    <?= css('assets/css/normalize.css') ?>

    <!-- font css start -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600,600italic,700" rel="stylesheet" type="text/css">
  </head>
  <body>
      <!-- Welcome section start Here -->
      <section class="welcome" id="welcom">
          <header>
              <?php snippet('menu') ?>
           
              
              <div class="row">
                  <div class="small-12 columns">
                      <div class="welcome-text">
                       <?= $page->intro()->kirbytext() ?>
                          <!-- <a href="#" title="Work with us" class="big-button">Work with us</a>-->
                      </div>
                  </div>
              </div>
        </header>
      </section>
