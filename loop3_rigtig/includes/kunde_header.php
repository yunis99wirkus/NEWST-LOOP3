<?php
//ob_start koden tænder for 'output-buffering'. Der kan ikke være flere headere i headeren, så derfor skal den anvendes for ikke at få fejlen "header has already been sent"
ob_start();
if (!isset($_SESSION)) session_start();
require_once('conn.php');
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>StrainMonitoring</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.css" rel="stylesheet" />

        <!-- Her overwriter vi med egne styles -->
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
    </head>


    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="kunde_index.php">Strain <span style="color: #FFCC00"> | </span> Monitoring <span style="color: #FFCC00"> - </span>Kunde</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id = "tekstfarvenav" class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="kunde_index.php">Oversigt</a></li>
                            <li class="nav-item"><a class="nav-link" href="kunde_profil.php">Profil</a></li>
                            <li class="nav-item"><a class="nav-link" href="kunde_log_af.php">Log af
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
</svg>
</a></li>
                        </ul>
                    </div>
                </div>
            </nav>