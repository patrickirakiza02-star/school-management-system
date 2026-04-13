<?php
/**
 * Index - School Management System
 * Redirects to login or dashboard based on session
 */

require_once 'includes/session.php';

if (isLoggedIn()) {
    redirectByRole();
} else {
    header('Location: login.php');
    exit();
}
