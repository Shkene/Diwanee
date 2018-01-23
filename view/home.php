<?php
include "nav.html";
session_start();
echo "Hello ".$_SESSION['username'];
