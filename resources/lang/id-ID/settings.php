<?php

return [

    'company' => [
        'name'              => 'Nama',
        'email'             => 'Email',
        'phone'             => 'Telpon',
        'address'           => 'Alamat',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Lokalisasi',
        'financial_start'   => 'Tahun Mulai Perhitungan',
        'timezone'          => 'Zona Waktu',
        'date' => [
            'format'        => 'Format Tanggal',
            'separator'     => 'Pemisah Tanggal',
            'dash'          => 'Strip (-)',
            'dot'           => 'Titik (.)',
            'comma'         => 'Koma (,)',
            'slash'         => 'Garis Miring (/)',
            'space'         => 'Spasi ( )',
        ],
        'percent' => [
            'title'         => 'Persen (%) Posisi',
            'before'        => 'Sebelum Nomor',
            'after'         => 'Sesudah Nomor',
        ],
    ],
    'invoice' => [
        'tab'               => 'Faktur',
        'prefix'            => 'Prefix Nomor',
        'digit'             => 'Digit nomor',
        'next'              => 'Nomor Berikutnya',
        'logo'              => 'Logo',
        'custom'            => 'Personalisasi',
        'item_name'         => 'Nama Barang',
        'item'              => 'Barang',
        'product'           => 'Produk',
        'service'           => 'Layanan',
        'price_name'        => 'Nama Harga',
        'price'             => 'Harga',
        'rate'              => 'Kurs',
        'quantity_name'     => 'Nama Kuantitas',
        'quantity'          => 'Kuantitas',
    ],
    'default' => [
        'tab'               => 'Standar',
        'account'           => 'Akun Utama',
        'currency'          => 'Mata Uang Utama',
        'tax'               => 'Kurs Pajak Utama',
        'payment'           => 'Metode Pembayaran Utama',
        'language'          => 'Bahasa Utama',
    ],
    'email' => [
        'protocol'          => 'Protokol',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Port',
            'username'      => 'Nama Pengguna SMTP',
            'password'      => 'Kata Sandi SMTP',
            'encryption'    => 'Keamanan SMTP',
            'none'          => 'Tidak ada',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail Path',
        'log'               => 'Log Email',
    ],
    'scheduling' => [
        'tab'               => 'Penjadwalan',
        'send_invoice'      => 'Kirim Pengingat Faktur',
        'invoice_days'      => 'Kirim Setelah Jatuh Tempo',
        'send_bill'         => 'Kirim Pengingat Tagihan',
        'bill_days'         => 'Kirim Sebelum Jatuh Tempo',
        'cron_command'      => 'Perintah Cron',
        'schedule_time'     => 'Waktu untuk Menjalankan',
        'send_item_reminder'=> 'Kirim Pengingat Item',
        'item_stocks'       => 'Kirim Saat Item Tersedia',
    ],
    'appearance' => [
        'tab'               => 'Tampilan',
        'theme'             => 'Tema',
        'light'             => 'Terang',
        'dark'              => 'Gelap',
        'list_limit'        => 'Data Per Laman',
        'use_gravatar'      => 'Gunakan Gravatar',
    ],
    'system' => [
        'tab'               => 'Sistem',
        'session' => [
            'lifetime'      => 'Batas Waktu Session (Menit)',
            'handler'       => 'Pemegang Session',
            'file'          => 'File',
            'database'      => 'Database',
        ],
        'file_size'         => 'Ukuran Maksimal File (MB)',
        'file_types'        => 'Jenis File Yang Diperbolehkan',
    ],

];
