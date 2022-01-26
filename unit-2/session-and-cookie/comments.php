<?php
session_start();
if(isset($_SESSION['student_name'])) {
    echo "You can comment here";
} else {
    echo "You are not authorized";
}