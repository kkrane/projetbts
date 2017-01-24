<?php

require "models/historique.php";

$historique=getHistorique();

include_once("views/historique.php");