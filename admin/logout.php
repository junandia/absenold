<?php
include 'csession.php';
session_destroy();
echo"<script>alert('berhasil logout!'); window.location='login.php';</script>";
?>