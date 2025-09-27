<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dosen Info</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin:20px;
            }
            table {
                width: 50%;
                margin: 0 auto;
                border-collapse: collapse;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                background-color: #fff;
            }
            th {
                background-color: #4CAF50;
                color: white;
                text-transform: uppercase;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #ddd;
            }
            caption {
                font-size: 1.5em;
                margin-bottom: 10px;
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];

        ?>
        
        <table>
            <caption>Dosen Information</caption>
            <thead>
                <tr>
                    <th>Attribute</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $Dosen['nama']; ?></td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td><?php echo $Dosen['domisili']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>