<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda telah keluar dari sistem aplikasi ini'); window.location = './.'</script>";
?>
