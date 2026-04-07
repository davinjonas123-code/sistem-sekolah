<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <title>Tambah Siswa</title>
</head>
 
<body class="min-h-screen flex flex-col">
 
    <!-- Header Start -->
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!-- Header End -->
 
    <!-- Main -->
     <main class="container mx-auto grow">
        <div class="mt-8 space-y-2">
            <!-- Card Header Start -->
             <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold">Tambah Siswa</h1>
                <p>Menambahkan siswa ke dalam sistem</p>
             </div>
             <!-- Card Header End -->
 
             <!-- Card Body Start -->
 
 <div class="bg white shadow rounded-lg p-4">
    <form action="" class="grid grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="block font-bold" for="name">Nama</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan nama" name="name">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="nis">NIS</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="nis" placeholder="Masukkan NIS" name="nis">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="class">Kelas</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="class" placeholder="Masukkan kelas" name="class">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="phone_number">Phone_Number</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="phone_number" placeholder="Masukkan nomor telepon" name="phone_number">
        </div>

        <div class="flex justify-end col-span-2 gap-4">
    <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
    <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg text-white">Simpan</button>
 </div>

    </form>
 
 </div>
 
 
             <!-- Card Body End -->
        </div>
       
    <!-- Main End -->
    </main>
    <!-- Footer Start -->
     <footer class="bg-gray-800 text-white text-center">
        <div class="text-center p-4">
            &copy; <?= date('Y') ?> Sistem Sekolah. SMK Kristen Immanuel
 
        </div>
    </footer>
    <!-- Footer End -->
 
</body>
</html>
 
 
 