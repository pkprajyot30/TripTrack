<?php
session_start();


session_unset();
echo "<script>
alert('Thank You for Visiting');
window.location.href='signin.html';
</script>";
?>