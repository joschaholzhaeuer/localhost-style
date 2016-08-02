<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Localhost</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../index-custom-style.css">
    </head>
    <body>

        <div class="wrapper">

            <!-- <h1 class="heading">Localhost</h1> -->

            <div class="projekte">
                <nav class="projekte-nav">
                    <a href="http://localhost/dreiqbik/" class="projekte-link">Side-Projects</a>
                    <a href="http://localhost/workspace/" class="projekte-link active">Workspace</a>
                    <a href="http://localhost/phpMyAdmin/" class="link-ext"><em>php</em>MyAdmin</a>
                </nav>
            </div>

            <div class="wrapper-inner">
                <ul class="list">

                   <?php

                   function scan_dir($dir_lm) {
                       $ignored = array('.', '..', '.svn', '.htaccess');

                       $files = array();
                       foreach (scandir($dir_lm) as $file) {
                           if (in_array($file, $ignored)) continue;
                           $files[$file] = filemtime($dir_lm . '/' . $file);
                       }

                       arsort($files);
                       $files = array_keys($files);

                       return ($files) ? $files : false;
                   }

                   $dir = scan_dir(getcwd());

                   ?>

                   <?php foreach ($dir as $file) : ?>

                       <?php if( $file != "." && $file != ".." && $file != "index.php"  ) : ?>

                        <li class="list-item">
                            <a class="link" href="<?php echo $file; ?>"><?php echo $file; ?></a>
                            <a class="link-btn" href="http://<?php echo $file; ?>"><em>v</em>Host</a>
                        </li>

                       <?php endif; ?>

                   <?php endforeach; ?>

                </ul>

                <div class="sites">
                    <h2 class="sites-title">Links</h2>
                    <ul class="sites-items">
                        <li class="sites-item">
                            <a href="https://github.com" class="sites-link">GitHub<br><span class="sites-link-desc">Homepage</span></a>
                        </li>
                        <li class="sites-item">
                            <a href="https://trello.com/login" class="sites-link">Trello<br><span class="sites-link-desc">Login</span></a>
                        </li>
                        <li class="sites-item">
                            <a href="https://developer.wordpress.org/reference/" class="sites-link">Wordpress<br><span class="sites-link-desc">Codex</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>