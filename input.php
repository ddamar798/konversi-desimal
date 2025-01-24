<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <fieldset class="mb-6">
            <legend class="text-lg font-semibold mb-4">Form Bilangan</legend>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="decimal" class="block text-gray-700 mb-2">Bilangan Desimal</label>
                    <input type="text" name="decimal" id="decimal" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <input type="submit" name="proses" value="PROSES" 
                        class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600">
                </div>
            </form>
        </fieldset>

        <fieldset>
            <legend class="text-lg font-semibold mb-4">Output Biner, Oktal, Hexa</legend>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
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
                        echo "<tr>
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
