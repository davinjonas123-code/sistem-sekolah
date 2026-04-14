<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <title>Daftar Siswa</title>
</head>
 
<body class="min-h-screen flex flex-col  bg-gray-100">
 
    <!-- Header Start -->
<?php require_once "../app/views/layouts/partials/header.php"; ?>
    <!-- Header End -->
 
    <!-- Main -->
     <main class="container mx-auto grow">
       <?php require_once $content?>
       
    <!-- Main End -->
    </main>
    <!-- Footer Start -->
<?php require_once "../app/views/layouts/partials/footer.php"; ?>
    <!-- Footer End -->
 
</body>
</html>
 