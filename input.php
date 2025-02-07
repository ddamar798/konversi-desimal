<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Converterr</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-blue-100 py-10 flex items-center justify-center min-h-screen">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Konversi Bilangan</h2>
        
        <fieldset class="mb-6 border border-gray-300 p-4 rounded-lg">
            <legend class="text-lg font-semibold text-gray-700">Form Bilangan</legend>
            <form action="" method="post" class="mt-4">
                <div class="mb-4">
                    <label for="decimal" class="block text-gray-700 font-medium mb-2">Bilangan Desimal</label>
                    <input type="text" name="decimal" id="decimal" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm">
                </div>
                <div class="text-center">
                    <input type="submit" name="proses" value="PROSES" 
                        class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition-all">
                </div>
            </form>
        </fieldset>

        <fieldset class="border border-gray-300 p-4 rounded-lg">
            <legend class="text-lg font-semibold text-gray-700">Output Konversi</legend>
            <table class="w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr class="bg-blue-200 text-gray-800">
                        <th class="border border-gray-300 px-4 py-2">Decimal</th>
                        <th class="border border-gray-300 px-4 py-2">Biner</th>
                        <th class="border border-gray-300 px-4 py-2">Oktal</th>
                        <th class="border border-gray-300 px-4 py-2">Hexa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['proses'])) {
                        $decimal = $_POST['decimal'];
                        $bin = sprintf("%04d", decbin($decimal));
                        $oct = decoct($decimal);
                        $hex = strtoupper(dechex($decimal));
                        echo "<tr class='text-center bg-white hover:bg-gray-100 transition-all'>
                                <td class='border border-gray-300 px-4 py-2'>$decimal</td>
                                <td class='border border-gray-300 px-4 py-2'>$bin</td>
                                <td class='border border-gray-300 px-4 py-2'>$oct</td>
                                <td class='border border-gray-300 px-4 py-2'>$hex</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
    </div>
</body>
</html>
