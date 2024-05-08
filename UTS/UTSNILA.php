<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piala Asia U-23 Qatar Group C</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: auto;
            display: inline-block;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Klasemen Piala Asia U-23 Qatar Group C</h1>
        <p>Per <?php echo date("d F Y H:i:s"); ?></p>
        <p>NILA SEFTYANI/211011401658</p>

        <table>
            <tr>
                <th>Negara</th>
                <th>P</th>
                <th>M</th>
                <th>S</th>
                <th>K</th>
                <th>Poin</th>
            </tr>
            <?php
            // Data klasemen
            $klasemen = array(
                "Irak U-23" => array("P" => 3, "M" => 2, "S" => 0, "K" => 1, "Poin" => 6),
                "Arab Saudi U-23" => array("P" => 3, "M" => 2, "S" => 0, "K" => 1, "Poin" => 6),
                "Tajikistan U-23" => array("P" => 3, "M" => 1, "S" => 0, "K" => 2, "Poin" => 3),
                "Thailand U-23" => array("P" => 3, "M" => 1, "S" => 0, "K" => 2, "Poin" => 0)
            );

            // Menampilkan data klasemen
            foreach ($klasemen as $negara => $data) {
                echo "<tr>";
                echo "<td>{$negara}</td>";
                echo "<td>{$data['P']}</td>";
                echo "<td>{$data['M']}</td>";
                echo "<td>{$data['S']}</td>";
                echo "<td>{$data['K']}</td>";
                echo "<td>{$data['Poin']}</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Input Data Poin Klasemen Piala Asia U-23 Qatar Group C</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nama_negara">Nama Negara:</label>
            <select id="nama_negara" name="nama_negara">
                <option value="Irak U-23">Irak U-23</option>
                <option value="Arab Saudi U-23">Arab Saudi U-23</option>
                <option value="Tajikistan U-23">Tajikistan U-23</option>
                <option value="Thailand U-23">Thailand U-23</option>
            </select><br>
            <label for="jumlah_pertandingan">Jumlah Pertandingan (P):</label>
            <input type="number" id="jumlah_pertandingan" name="jumlah_pertandingan"><br>
            <label for="jumlah_menang">Jumlah Menang (M):</label>
            <input type="number" id="jumlah_menang" name="jumlah_menang"><br>
            <label for="jumlah_seri">Jumlah Seri (S):</label>
            <input type="number" id="jumlah_seri" name="jumlah_seri"><br>
            <label for="jumlah_kalah">Jumlah Kalah (K):</label>
            <input type="number" id="jumlah_kalah" name="jumlah_kalah"><br>
            <label for="nama_operator">Nama Operator:</label>
            <input type="text" id="nama_operator" name="nama_operator"><br>
            <label for="nim_mahasiswa">NIM Mahasiswa:</label>
            <input type="text" id="nim_mahasiswa" name="nim_mahasiswa"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
