<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        body {
            background: #787276;
        }

        h1 {
            font-family: 'Bebas Neue';
            text-align: center;
            letter-spacing: 4px;


        }

        th {
            background: #f7f7f7;
        }

        table {
            border-radius: 5px;
        }

        .num {
            background: #e1e1e1;
        }

        .tcon {
            background: #e1e1e1;
        }
    </style>
</head>

<body>
    <div id="header">
        <h1>
            Sebuah Kantor
        </h1>
    </div>
    <div id="content">

        <?php

        class pegawai
        {
            private $nama;
            private $ttl;
            private $jk;

            function __construct($nama, $ttl, $jk)
            {
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->jk = $jk;
            }
            function get_nama()
            {
                return $this->nama;
            }
            function get_ttl()
            {
                return $this->ttl;
            }
            function get_jk()
            {
                return $this->jk;
            }
        }

        class pt extends pegawai
        {
            private $lk;
            private $stat;
            private $gaji;

            public function set_lk($lk)
            {
                if ($lk == 'Junior') {
                    $this->gaji = 2000000 / 2;
                } elseif ($lk == 'Amateur') {
                    $this->gaji = 3500000 / 2;
                } else {
                    $this->gaji = 5000000 / 2;
                }

                $this->lk = $lk;
            }

            public function get_lk()
            {
                return $this->lk;
            }

            public function set_stat($stat)
            {
                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }
        class ft extends pegawai
        {
            private $lk;
            private $stat;
            private $gaji;

            public function set_lk($lk)
            {
                if ($lk == 'Junior') {
                    $this->gaji = 2000000;
                } elseif ($lk == 'Amateur') {
                    $this->gaji = 3500000;
                } else {
                    $this->gaji = 5000000;
                }

                $this->lk = $lk;
            }

            public function get_lk()
            {
                return $this->lk;
            }

            public function set_stat($stat)
            {
                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }

        $darci = new ft('Darci', 'London, 17 April 2002', 'Perempuan');
        $darci->set_lk('Junior');
        $darci->set_stat('Full time');
        $rachel = new ft('Rachel', 'Canada, 5 Mei 1969', 'Perempuan');
        $rachel->set_lk('Amateur');
        $rachel->set_stat('Part time');
        $joey = new ft('Joey', 'New York, 9 Januari 1968', 'Laki-laki');
        $joey->set_lk('Junior');
        $joey->set_stat('Full time');
        $chandler = new ft('Chandler', 'Swedia, 8 April 1968', 'Laki-laki');
        $chandler->set_lk('Junior');
        $chandler->set_stat('Part time');

        $karyawan = array($darci, $rachel, $joey, $chandler);

        ?>
        <table align="center" border="3">
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Tempat Tanggal Lahir
                </th>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                    Level Karyawan
                </th>
                <th>
                    Status
                </th>
                <th>
                    Gaji Karyawan
                </th>
            </tr>
            <?php
            foreach ($karyawan as $index => $value) {
            ?>
                <tr>
                    <td class="num">
                        <?= $index + 1; ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_nama(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_ttl(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_jk(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_lk(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_stat(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_gaji(); ?>
                    </td>
                </tr>
            <?php

            }
            ?>
        </table>
    </div>


</body>

</html>