<!doctype html>
<html>
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pribadi.css">
</head>

<body class="pmi">
    <form action="ceklogin.php" method="post">
        <div class="flex h-screen relative">
            <div class="m-auto">
                <div class="bg-white border  rounded-lg shadow-lg w-96">
                    <div class="flex items-center border-red-500 border-b-2 flex-col py-6">
                        <img src="img/pmi.png" class="w-16" alt="logo">
                        <p class="font-serif font-bold text-red-500">UTD PMI</p>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="flex flex-col space-y-2 my-2  w-full">
                            <h2 class="mx-4 space-x-2 font-mono font-bold">
                                Username :
                                <div class="mx-4">
                                    <input type="text" name="username" class="border rounded-lg w-full py-1 hover:bg-gray-200">
                                </div>
                            </h2>
                            <h2 class="mx-4 space-x-2 font-mono font-bold">
                                Password :
                                <div class="mx-4">
                                    <input type="text" name="username" class="border rounded-lg w-full py-1 hover:bg-gray-200">
                                </div>
                            </h2>
                        </div>
                    </div>
                    <div class="flex justify-end mx-2 my-2">
                        <button type="submit"
                            class="bg-green-200 hover:bg-green-300 text-black font-semibold py-2 px-4 border rounded-lg">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>