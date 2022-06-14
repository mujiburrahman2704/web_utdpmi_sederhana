<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/output.css">
    <title>Document</title>
</head>

<body>
    <div class="py-6">
        <h2 class="font-serif font-bold text-center">Table Data</h2>
    </div>
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
            <tbody class="text-left">
                <?php
                    include '../../../database/database.php';
                    $sql = 'SELECT * FROM data';
                    $data = mysqli_query($conn,$sql);
					$no = 1;
					while ($hasil = mysqli_fetch_array($data)) 
	   				{
				?>
                <tr class="">
                    <td class="py-3 px-5 border-b">
                        <?php echo $hasil[0] ?>
                    </td>
                    <td class="py-3 px-5 border-b">
                        <?php echo $hasil[1] ?>
                    </td>
                    <td class="py-3 px-5 border-b">
                        <?php echo $hasil[2] ?>
                    </td>
                    <td class="py-3 px-5 border-b">
                        <?php echo $hasil[3] ?>
                    </td>
                    <td class="py-3 px-5 border-b">
                        <?php echo $hasil[4] ?>
                    </td>
                    <td class="py-3 px-5 border-b">
                        <?php echo $hasil[5] ?>
                    </td>
                    <td class="py-3 px-5 border-b">
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
    <script>
    window.print();
    </script>
</body>

</html>