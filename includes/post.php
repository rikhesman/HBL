<?php

/*
 * Post alle functies hier
 * 
 * Naam: Ramon Kerpershoek
 * Datum: 6-12-2016
 * 
 */
 
 //Account management
 if (Input::has('opslaan')) accountManagement::register(); //registreren
 if (Input::has('login')) accountManagement::login(); // In loggen
 

