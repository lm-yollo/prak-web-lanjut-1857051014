<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Data Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                    <th>Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alice</td>
                    <td>12345</td>
                    <td>Jakarta</td>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode MK</th>
                                    <th>Mata Kuliah</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MK101</td>
                                    <td>Matematika</td>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <td>MK102</td>
                                    <td>Fisika</td>
                                    <td>78</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Bob</td>
                    <td>67890</td>
                    <td>Surabaya</td>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode MK</th>
                                    <th>Mata Kuliah</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MK101</td>
                                    <td>Matematika</td>
                                    <td>92</td>
                                </tr>
                                <tr>
                                    <td>MK103</td>
                                    <td>Kimia</td>
                                    <td>88</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>