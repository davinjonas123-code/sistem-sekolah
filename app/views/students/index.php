 <div class="mt-8 space-y-2">
            <!-- Card Header Start -->
             <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
             </div>
             <!-- Card Header End -->
 
             <!-- Card Body Start -->
 
 <div class="bg white shadow rounded-lg">
    <table class="w-full">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 text-left">No</th>
            <th class="px-4 py-2 text-left">Nama</th>
            <th class="px-4 py-2 text-left">NIS</th>
            <th class="px-4 py-2 text-left">Kelas</th>
            <th class="px-4 py-2 text-left">No telepon</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
 
    <tbody>
        <?php foreach($students as $index => $student): ?>
            <tr>
        <td class="px-4 py-2 text-align">
            <?= $index + 1?>
        </td>
        <td class="px-4 py-2 text-align">
            <?= $student['name']?>
        </td>
        <td class="px-4 py-2 text-align">
            <?= $student['nis']?>
        </td>    
        <td class="px-4 py-2 text-align">XI TKJ 2</td>  
        <td class="px-4 py-2 text-align">08123456789</td>
        <td class="px-4 py-2">
            <div class="flex justify-center items-center gap-4">
                <a href="/students/1" class="text-green-500">Detail</a>
                 <a href="/students/1/edit" class="text-yellow-500">Edit</a>
                 <a href="" class="text-red-500">Hapus</a>
            </div>
        </td>
 
        </tr>
        <?php endforeach ?>
 
    </tbody>
    </table>
 </div>
 
             <!-- Card Body End -->
        </div>
 
 <div class="mt-8 space-y-2">
            <!-- Card Header Start -->
             <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
             </div>
             <!-- Card Header End -->
 
             <!-- Card Body Start -->
 
 <div class="bg white shadow rounded-lg">
    <table class="w-full">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 text-left">No</th>
            <th class="px-4 py-2 text-left">Nama</th>
            <th class="px-4 py-2 text-left">NIS</th>
            <th class="px-4 py-2 text-left">Kelas</th>
            <th class="px-4 py-2 text-left">No telepon</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
 
    <tbody>
        <?php foreach($students as $index => $student): ?>
            <tr>
        <td class="px-4 py-2 text-align">
            <?= $index + 1?>
        </td>
        <td class="px-4 py-2 text-align">
            <?= $student['name']?>
        </td>
        <td class="px-4 py-2 text-align">
            <?= $student['nis']?>
        </td>    
        <td class="px-4 py-2 text-align">
            <?= $student['class']?>
        </td>  
        <td class="px-4 py-2 text-align">
            <?= $student['phone_number']?>
        </td>
        <td class="px-4 py-2">
            <div class="flex justify-center items-center gap-4">
                <a href="/students/1" class="text-green-500">Detail</a>
                 <a href="/students/1/edit" class="text-yellow-500">Edit</a>
                 <a href="" class="text-red-500">Hapus</a>
            </div>
        </td>
 
        </tr>
        <?php endforeach ?>
 
    </tbody>
    </table>
 </div>
 
             <!-- Card Body End -->
        </div>
 