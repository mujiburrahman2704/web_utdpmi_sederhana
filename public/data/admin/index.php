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
                    <div class="border-2 rounded-lg">
                        <div class="border p-2 bg-green-200 text-center">
                            <p class="font-serif font-bold text-center">FORM REGISTRASI</p>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="flex flex-col space-y-2 my-2">
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    NIK :
                                    <input type="text" placeholder="Masukkan NIK" class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                </h2>
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    Nama Lengkap
                                    <input type="text" placeholder="Masukkan Nama Lengkap" class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                </h2>
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    Nomor Handphone
                                    <input type="text" placeholder="Masukkan Nomor Hp" class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                </h2>
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    Alamat
                                    <input type="text" class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                </h2>
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    Tanggal Lahir
                                    <input type="text" class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                </h2>
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    Jenis kelamin
                                    <input type="text" class="border w-full mx-auto py-1 px-2 hover:bg-gray-200">
                                </h2>
                                <h2 class="mx-4 space-x-2 font-mono font-bold">
                                    Golongan Darah
                                    <select class="form-select form-control w-full mx-auto py-1 px-2 border" name="jeniskelamin" id="text1">
                                        <option selected>Pilih golongan darahmu</option>
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
                                class="bg-green-200 hover:bg-green-300 text-black font-semibold py-2 px-4 border rounded-lg">
                                Tambah
                            </button>
                        </div>
                    </div>
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
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                                <div class="flex items-center">
                                    <button type="button"
                                        class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                        <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                        1
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                        2
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border-t border-b text-base text-gray-600 bg-white hover:bg-gray-100">
                                        3
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                        4
                                    </button>
                                    <button type="button"
                                        class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                        <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>