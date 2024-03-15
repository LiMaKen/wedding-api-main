<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => ':email atau :password salah.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'năm',
        'm' => 'tháng',
        'd' => 'ngày',
        'h' => 'giờ',
        'i' => 'phút',
        's' => 'giây',

        'ago' => 'trước.',
        'recently' => 'vừa xong.',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [

        'request' => [
            'required' => ':field dibutuhkan!.',
            'email' => ':field tidak valid!.',
            'dns' => ':field tidak valid!.',
            'url' => ':field tidak valid!.',
            'uuid' => ':field bukan uuid!.',
            'int' => ':field harus angka!.',
            'float' => ':field harus desimal!.',
            'min' => ':field panjang minimal: :attribute',
            'max' => ':field panjang maxsimal: :attribute',
            'sama' => ':field tidak sama dengan :attribute',
            'unik' => ':field sudah ada!.',
        ],

        'file' => [
            'required' => ':field dibutuhkan!.',
            'min' => ':field panjang minimal: :attribute',
            'max' => ':field panjang maxsimal: :attribute',
            'mimetypes' => ':field diperbolehkan: :attribute',
            'mimes' => ':field diperbolehkan: :attribute',
            'unsafe' => ':field terindikasi tidak aman!.',
            'corrupt' => ':field tidak terupload dengan benar!.',
        ],
    ]
];
