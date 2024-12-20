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

    'accepted' => ':attribute повинен бути прийнятий.',
    'accepted_if' => ':attribute повинен бути прийнятий, якщо :other є :value.',
    'active_url' => ':attribute не є дійсною URL-адресою.',
    'after' => ':attribute повинен бути датою після :date.',
    'after_or_equal' => ':attribute повинен бути датою, яка дорівнює або після :date.',
    'alpha' => ':attribute може містити лише літери.',
    'alpha_dash' => ':attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => ':attribute може містити лише літери та цифри.',
    'array' => ':attribute має бути масивом.',
    'before' => ':attribute має бути датою до :date.',
    'before_or_equal' => ':attribute має бути датою, яка дорівнює або до :date.',
    'between' => [
        'array' => ':attribute має містити від :min до :max елементів.',
        'file' => ':attribute має бути від :min до :max кілобайт.',
        'numeric' => ':attribute має бути між :min та :max.',
        'string' => ':attribute має бути від :min до :max символів.',
    ],
    'boolean' => 'Поле :attribute має бути істинним або хибним.',
    'confirmed' => 'Підтвердження для :attribute не збігається.',
    'current_password' => 'Неправильний пароль.',
    'date' => ':attribute не є дійсною датою.',
    'date_equals' => ':attribute має бути датою, рівною :date.',
    'date_format' => ':attribute не відповідає формату :format.',
    'declined' => ':attribute має бути відхилений.',
    'declined_if' => ':attribute має бути відхилений, якщо :other є :value.',
    'different' => ':attribute та :other мають бути різними.',
    'digits' => ':attribute має бути :digits цифр.',
    'digits_between' => ':attribute має бути між :min та :max цифр.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має дублююче значення.',
    'email' => ':attribute має бути дійсною електронною адресою.',
    'ends_with' => ':attribute має закінчуватися одним із наступного: :values.',
    'enum' => 'Обраний :attribute недійсний.',
    'exists' => 'Обраний :attribute недійсний.',
    'file' => ':attribute має бути файлом.',
    'filled' => 'Поле :attribute обов’язкове.',
    'gt' => [
        'array' => ':attribute має містити більше ніж :value елементів.',
        'file' => ':attribute має бути більше ніж :value кілобайт.',
        'numeric' => ':attribute має бути більше ніж :value.',
        'string' => ':attribute має бути більше ніж :value символів.',
    ],
    'gte' => [
        'array' => ':attribute має містити :value елементів або більше.',
        'file' => ':attribute має бути не менше ніж :value кілобайт.',
        'numeric' => ':attribute має бути не менше ніж :value.',
        'string' => ':attribute має бути не менше ніж :value символів.',
    ],
    'image' => ':attribute має бути зображенням.',
    'in' => 'Обраний :attribute недійсний.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => ':attribute має бути цілим числом.',
    'ip' => ':attribute має бути дійсною IP-адресою.',
    'ipv4' => ':attribute має бути дійсною IPv4-адресою.',
    'ipv6' => ':attribute має бути дійсною IPv6-адресою.',
    'json' => ':attribute має бути дійсним рядком JSON.',
    'lt' => [
        'array' => ':attribute має містити менше ніж :value елементів.',
        'file' => ':attribute має бути менше ніж :value кілобайт.',
        'numeric' => ':attribute має бути менше ніж :value.',
        'string' => ':attribute має бути менше ніж :value символів.',
    ],
    'lte' => [
        'array' => ':attribute має містити не більше ніж :value елементів.',
        'file' => ':attribute має бути не більше ніж :value кілобайт.',
        'numeric' => ':attribute має бути не більше ніж :value.',
        'string' => ':attribute має бути не більше ніж :value символів.',
    ],
    'mac_address' => ':attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => ':attribute не може містити більше ніж :max елементів.',
        'file' => ':attribute не може бути більше ніж :max кілобайт.',
        'numeric' => ':attribute не може бути більше ніж :max.',
        'string' => ':attribute не може бути більше ніж :max символів.',
    ],
    'mimes' => ':attribute має бути файлом типу: :values.',
    'mimetypes' => ':attribute має бути файлом типу: :values.',
    'min' => [
        'array' => ':attribute має містити принаймні :min елементів.',
        'file' => ':attribute має бути не менше ніж :min кілобайт.',
        'numeric' => ':attribute має бути не менше ніж :min.',
        'string' => ':attribute має бути не менше ніж :min символів.',
    ],
    'multiple_of' => ':attribute має бути кратним :value.',
    'not_in' => 'Обраний :attribute недійсний.',
    'not_regex' => 'Формат :attribute недійсний.',
    'numeric' => ':attribute має бути числом.',
    'present' => 'Поле :attribute має бути присутнім.',
    'prohibited' => 'Поле :attribute заборонене.',
    'prohibited_if' => 'Поле :attribute заборонене, якщо :other є :value.',
    'prohibited_unless' => 'Поле :attribute заборонене, якщо :other не входить у :values.',
    'prohibits' => 'Поле :attribute забороняє наявність :other.',
    'regex' => 'Формат :attribute недійсний.',
    'required' => 'Поле :attribute обов’язкове.',
    'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
    'required_if' => 'Поле :attribute обов’язкове, якщо :other є :value.',
    'required_unless' => 'Поле :attribute обов’язкове, якщо :other не входить у :values.',
    'required_with' => 'Поле :attribute обов’язкове, якщо :values присутнє.',
    'required_with_all' => 'Поле :attribute обов’язкове, якщо :values присутні.',
    'required_without' => 'Поле :attribute обов’язкове, якщо :values відсутнє.',
    'required_without_all' => 'Поле :attribute обов’язкове, якщо жоден із :values не присутній.',
    'same' => ':attribute та :other мають збігатися.',
    'size' => [
        'array' => ':attribute має містити :size елементів.',
        'file' => ':attribute має бути розміром :size кілобайт.',
        'numeric' => ':attribute має бути розміром :size.',
        'string' => ':attribute має містити :size символів.',
    ],
    'starts_with' => ':attribute має починатися з одного із наступного: :values.',
    'string' => ':attribute має бути рядком.',
    'timezone' => ':attribute має бути дійсним часовим поясом.',
    'unique' => ':attribute вже зайнято.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'url' => ':attribute має бути дійсною URL-адресою.',
    'uuid' => ':attribute має бути дійсним UUID.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'спеціальне повідомлення',
        ],
    ],
    'attributes' => [],
];