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

    'accepted' => 'Необхідно прийняти атрибут :attribute.',
    'accepted_if' => ':attribute має прийматися, коли :other є :value.',
    'active_url' => ':attribute не є дійсною URL-адресою.',
    'after' => ':attribute має бути датою після :date.',
    'after_or_equal' => ':attribute має бути датою після або дорівнювати :date.',
    'alpha' => ':attribute має містити лише літери.',
    'alpha_dash' => ':attribute має містити лише літери, цифри, тире та підкреслення.',
    'alpha_num' => ':attribute має містити лише літери та цифри.',
    'array' => ':attribute має бути масивом.',
    'before' => ':attribute має бути датою перед :date.',
    'before_or_equal' => ':attribute має бути датою, що передує або дорівнює :date.',
    'between' => [
        'array' => ':attribute має містити між елементами :min і :max.',
        'file' => ':attribute має бути між :min і :max кілобайтами.',
        'numeric' => ':attribute має бути між :min та :max.',
        'string' => ':attribute має бути між символами :min і :max.',
    ],
    'boolean' => 'Поле :attribute має мати значення true або false.',
    'confirmed' => 'Підтвердження :attribute не збігається.',
    'current_password' => 'Пароль неправильний.',
    'date' => ':attribute не є дійсною датою.',
    'date_equals' => ':attribute має бути датою, що дорівнює :date.',
    'date_format' => ':attribute не відповідає формату :format.',
    'declined' => ':attribute має бути відхилено.',
    'declined_if' => ':attribute має бути відхилено, якщо :other є :value.',
    'different' => ':attribute та :other мають бути різними.',
    'digits' => ':attribute має бути :digits цифрами.',
    'digits_between' => ':attribute має бути між :min та :max цифрами.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'email' => ':attribute має бути дійсною електронною адресою.',
    'ends_with' => ':attribute має закінчуватися одним із таких: :values.',
    'enum' => 'Вибраний :attribute недійсний.',
    'exists' => 'Вибраний :attribute недійсний.',
    'file' => ':attribute має бути файлом.',
    'filled' => 'Поле :attribute має містити значення.',
    'gt' => [
        'array' => ':attribute має містити більше ніж :value елементів.',
        'file' => ':attribute має бути більшим за :value кілобайт.',
        'numeric' => ':attribute має бути більшим за :value.',
        'string' => ':attribute має бути більшим за :value.',
    ],
    'gte' => [
        'array' => ':attribute повинен містити елементи :value або більше.',
        'file' => ':attribute має бути більшим або дорівнювати :value кілобайтам.',
        'numeric' => ':attribute має бути більшим або дорівнювати :value.',
        'string' => ':attribute має бути більше або дорівнювати символам :value.',
    ],
    'image' => ':attribute має бути зображенням.',
    'in' => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => ':attribute має бути цілим числом.',
    'ip' => ':attribute має бути дійсною IP-адресою.',
    'ipv4' => ':attribute має бути дійсною адресою IPv4.',
    'ipv6' => ':attribute має бути дійсною адресою IPv6.',
    'json' => ':attribute має бути дійсним рядком JSON.',
    'lt' => [
        'array' => ':attribute має містити менше ніж :value елементів.',
        'file' => ':attribute має бути меншим за :value кілобайт.',
        'numeric' => ':attribute має бути меншим за :value.',
        'string' => ':attribute має містити менше ніж :value символів.',
    ],
    'lte' => [
        'array' => ':attribute не може містити більше ніж :value елементів.',
        'file' => ':attribute має бути меншим або дорівнювати :value кілобайтам.',
        'numeric' => ':attribute має бути меншим або дорівнювати :value.',
        'string' => ':attribute має бути менше або дорівнювати символам :value.',
    ],
    'mac_address' => ':attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => ':attribute не може містити більше ніж :max елементів.',
        'file' => ':attribute не має перевищувати :max кілобайт.',
        'numeric' => ':attribute не має бути більшим за :max.',
        'string' => ':attribute не має перевищувати :max символів.',
    ],
    'mimes' => ':attribute має бути файлом типу: :values.',
    'mimetypes' => ':attribute має бути файлом типу: :values.',
    'min' => [
        'array' => '',
        'file' => ':attribute має містити принаймні :min елементів.',
        'numeric' => ':attribute має бути принаймні :min.',
        'string' => ':attribute має містити принаймні :min символів.',
    ],
    'multiple_of' => ':attribute має бути кратним :value.',
    'not_in' => 'Вибраний :attribute недійсний.',
    'not_regex' => 'Формат :attribute недійсний.',
    'numeric' => ':attribute має бути числом.',
    'present' => 'Поле :attribute має бути присутнім.',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, якщо :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не міститься в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат :attribute недійсний.',
    'required' => 'Поле :attribute є обов’язковим.',
    'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
    'required_if' => 'Поле :attribute є обов’язковим, якщо :other дорівнює :value.',
    'required_unless' => 'Поле :attribute є обов’язковим, якщо :other не міститься в :values.',
    'required_with' => 'Поле :attribute є обов’язковим, якщо присутній :values.',
    'required_with_all' => 'Поле :attribute є обов’язковим, якщо присутні :values.',
    'required_without' => 'Поле :attribute є обов’язковим, якщо немає :values.',
    'required_without_all' => 'Поле :attribute є обов’язковим, якщо немає жодного з :values.',
    'same' => ':attribute та :other мають збігатися.',
    'size' => [
        'array' => ':attribute повинен містити елементи :size.',
        'file' => ':attribute має бути :size кілобайт.',
        'numeric' => ':attribute має бути :size.',
        'string' => ':attribute має бути символами :size.',
    ],
    'starts_with' => ':attribute має починатися з одного з наступного: :values.',
    'string' => ':attribute має бути рядком.',
    'timezone' => ':attribute має бути дійсним часовим поясом.',
    'unique' => ':attribute уже використано.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'url' => ':attribute має бути дійсною URL-адресою.',
    'uuid' => ':attribute має бути дійсним UUID.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
