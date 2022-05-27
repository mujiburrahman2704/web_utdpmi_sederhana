<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen">
        <div class="lg:w-1/3 my-auto mx-2">
            <div class="container mx-auto">
                <div class="mx-auto">

                    <!-- registrasi start -->
                    <form action="tambah/tambahdata.php" method="post">
                        <div class="border-2 rounded-lg h-screen">
                            <div class="border p-4 bg-green-200 text-center">
                                <p class="font-serif font-bold text-center">FORM REGISTRASI</p>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="flex flex-col space-y-2 my-2">
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        NIK :
                                        <input type="text" placeholder="Masukkan NIK" name="nik"
                                            class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                    </h2>
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        Nama Lengkap
                                        <input type="text" placeholder="Masukkan Nama Lengkap" name="namalengkap"
                                            class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                    </h2>
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        Nomor Handphone
                                        <input type="text" placeholder="Masukkan Nomor Hp" name="nomorhp"
                                            class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                    </h2>
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        Alamat
                                        <input type="text" placeholder="Masukkan Alamat" name="alamat"
                                            class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                    </h2>
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        Tanggal Lahir
                                        <input type="date" placeholder="Masukkan tanggal lahir" name="tanggallahir"
                                            class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                    </h2>
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        Jenis kelamin
                                        <select name="jeniskelamin" id="jeniskelamin"
                                            class="w-full mx-auto py-1 px-2 border hover:bg-gray-200">
                                            <option value="" selected>Pilih jenis kelamin</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </h2>
                                    <h2 class="mx-4 space-x-2 font-mono font-bold">
                                        Golongan Darah
                                        <select
                                            class="form-select form-control w-full mx-auto py-1 px-2 border hover:bg-gray-200"
                                            name="golongandarah" id="text1">
                                            <option value="" selected>Pilih golongan darahmu</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </h2>
                                </div>
                            </div>
                            <div class="flex justify-end mx-2 my-2">
                                <button
                                    class="bg-green-200 hover:bg-green-300 hover:text-white text-black font-semibold py-2 px-4 border rounded-lg"
                                    type="submit">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End Registrasi -->


                </div>
            </div>
        </div>
        <div class="lg:w-2/3">
            <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                <div class="py-8">
                    <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                        <h2 class="text-2xl leading-tight">
                            Table Data
                        </h2>
                        <div class="text-end">
                            <form
                                class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                                <div class=" relative ">
                                    <input type="text" id="&quot;form-subscribe-Filter"
                                        class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-transparent"
                                        placeholder="Gol darah" />
                                </div>
                                <button
                                    class="flex-shrink-0 px-4 py-2 text-black font-semibold hover:text-white bg-green-200 rounded-lg shadow-md hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-300"
                                    type="submit">
                                    Filter
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php
                        include '../../../database/database.php';
                        $sql = "select * from data";
                        $data = mysqli_query($conn,$sql);
                    ?>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            NIK
                                        </th>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            Nama
                                        </th>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            Nomor Hp
                                        </th>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            Tanggal lahir
                                        </th>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            Jenis Kelamin
                                        </th>
                                        <th scope="col"
                                            class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            Gol Darah
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
									$no = 1;
									while ($hasil = mysqli_fetch_array($data)) 
				    				{
								?>
                                    <tr class="">
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[0] ?>
                                        </td>
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[1] ?>
                                        </td>
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[2] ?>
                                        </td>
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[3] ?>
                                        </td>
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[4] ?>
                                        </td>
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[5] ?>
                                        </td>
                                        <td class="py-2 border-b">
                                            <?php echo $hasil[6] ?>
                                        </td>
                                        
                                    </tr>
                                    <?php
										$no++;
									}
									?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>