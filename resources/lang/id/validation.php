<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    // 'required'             => 'The :attribute field is required.',
    'required'             => 'Kolom :attribute harus diisi.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        // 'attribute-name' => [
        //     'rule-name' => 'custom-message',
        // ],

        'nisn' => [
            'required' => 'Kolom NISN harus diisi.',
            'string'   => 'Kolom NISN harus berupa string.',
            'size'     => 'Kolom NISN harus :size angka.',
            'unique'   => 'NISN sudah terpakai.',
        ],

        'nama_siswa' => [
            'required' => 'Kolom NAMA SISWA harus diisi.',
            'string'   => 'Kolom NAMA SISWA harus berupa string.',
            'max'      => 'Kolom NAMA SISWA tidak boleh lebih dari :max karakter.',
        ],

        'jenis_kelamin' => [
            'required' => 'Kolom JENIS KELAMIN harus diisi.',
            'in'       => 'Kolom JENIS KELAMIN harus diisi L atau P.',
        ],

        'tanggal_lahir' => [
            'required' => 'Kolom TANGGAL LAHIR harus diisi.',
            'date'     => 'Kolom TANGGAL LAHIR harus diisi format tanggal yang benar.',
        ],
        'nomor_telepon' => [
            'numeric'        => 'Kolom NOMOR TELEPON harus diisi angka.',
            'digits_between' => 'Kolom NOMOR TELEPON harus 10 sampai 15 digit.',
            'unique'         => 'NOMOR TLEPON sudah terdaftar.',
        ],
        'id_kelas' => [
            'required'        => 'Kolom KELAS harus diisi.',
        ],
        'foto' => [
            'image' => 'Kolom FOTO hanya boleh berisi file gambar.',
            'max'   => 'Kolom FOTO tidak boleh lebih dari 500 KB',
            'mimes' => 'Kolom FOTO hanya boleh disi file *.jpg, *.jpeg, *.bmp, *.png.',
        ],
        'nama_kelas' => [
            'required'  => 'Nama Kelas harus diiisi.',
            'string'    => 'Nama Kelas harus string.',
            'max'       => 'Nama Kelas Maksimum 20 karakter.',
        ],
        'nama_hobi' => [
            'required'  => 'Nama Hobi harus diiisi.',
            'string'    => 'Nama Hobi harus string.',
            'max'       => 'Nama Kelas Maksimum 30 karakter.',
        ],
        'email' => [
            'required' => 'Nama Email harus diiisi.',
            'email'    => 'Email harus valid.',
            'max'      => 'Email Maksimum 100 karakter.',
            'unique'   => 'Email sudah terdaftar.',
        ],
        'password' => [
            'confirmed' => 'Password tidak cocok dengan kolom konfirmasi password.',
            'min'       => 'Password minimal 6 karakter.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
