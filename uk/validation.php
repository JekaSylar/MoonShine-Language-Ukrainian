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

    'accepted' => ':attribute має бути прийнятий.',
    'accepted_if' => ':attribute має бути прийнятий, якщо :other дорівнює :value.',
    'active_url' => ':attribute не є дійсною URL-адресою.',
    'after' => ':attribute має бути датою після :date.',
    'after_or_equal' => ':attribute має бути датою після або рівною :date.',
    'alpha' => ':attribute може містити лише літери.',
    'alpha_dash' => ':attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => ':attribute може містити лише літери та цифри.',
    'array' => ':attribute має бути масивом.',
    'before' => ':attribute має бути датою до :date.',
    'before_or_equal' => ':attribute має бути датою до або рівною :date.',
    'between' => [
        'array' => ':attribute має містити від :min до :max елементів.',
        'file' => ':attribute має бути від :min до :max кілобайт.',
        'numeric' => ':attribute має бути між :min та :max.',
        'string' => ':attribute має містити від :min до :max символів.',
    ],
    'boolean' => ':attribute має бути true або false.',
    'confirmed' => 'Підтвердження для :attribute не співпадає.',
    'current_password' => 'Пароль є неправильним.',
    'date' => ':attribute не є дійсною датою.',
    'date_equals' => ':attribute має бути датою, рівною :date.',
    'date_format' => ':attribute не відповідає формату :format.',
    'declined' => ':attribute має бути відхилений.',
    'declined_if' => ':attribute має бути відхилений, якщо :other дорівнює :value.',
    'different' => ':attribute та :other мають бути різними.',
    'digits' => ':attribute має складатися з :digits цифр.',
    'digits_between' => ':attribute має бути між :min та :max цифрами.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => ':attribute має повторюване значення.',
    'email' => ':attribute має бути дійсною електронною адресою.',
    'ends_with' => ':attribute має закінчуватися одним із наступного: :values.',
    'enum' => 'Обраний :attribute є недійсним.',
    'exists' => 'Обраний :attribute є недійсним.',
    'file' => ':attribute має бути файлом.',
    'filled' => ':attribute має мати значення.',
    'gt' => [
        'array' => ':attribute має містити більше ніж :value елементів.',
        'file' => ':attribute має бути більше ніж :value кілобайт.',
        'numeric' => ':attribute має бути більше ніж :value.',
        'string' => ':attribute має бути більше ніж :value символів.',
    ],
    'gte' => [
        'array' => ':attribute має містити :value елементів або більше.',
        'file' => ':attribute має бути більше або дорівнювати :value кілобайт.',
        'numeric' => ':attribute має бути більше або дорівнювати :value.',
        'string' => ':attribute має бути більше або дорівнювати :value символів.',
    ],
    'image' => ':attribute має бути зображенням.',
    'in' => 'Обраний :attribute є недійсним.',
    'in_array' => ':attribute не існує у :other.',
    'integer' => ':attribute має бути цілим числом.',
    'ip' => ':attribute має бути дійсною IP-адресою.',
    'ipv4' => ':attribute має бути дійсною IPv4-адресою.',
    'ipv6' => ':attribute має бути дійсною IPv6-адресою.',
    'json' => ':attribute має бути дійсним JSON рядком.',
    'lt' => [
        'array' => ':attribute має містити менше ніж :value елементів.',
        'file' => ':attribute має бути менше ніж :value кілобайт.',
        'numeric' => ':attribute має бути менше ніж :value.',
        'string' => ':attribute має бути менше ніж :value символів.',
    ],
    'lte' => [
        'array' => ':attribute не має містити більше ніж :value елементів.',
        'file' => ':attribute має бути менше або дорівнювати :value кілобайт.',
        'numeric' => ':attribute має бути менше або дорівнювати :value.',
        'string' => ':attribute має бути менше або дорівнювати :value символів.',
    ],
    'mac_address' => ':attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => ':attribute не має містити більше ніж :max елементів.',
        'file' => ':attribute не має перевищувати :max кілобайт.',
        'numeric' => ':attribute не має перевищувати :max.',
        'string' => ':attribute не має перевищувати :max символів.',
    ],
    'mimes' => ':attribute має бути файлом одного з наступних типів: :values.',
    'mimetypes' => ':attribute має бути файлом одного з наступних типів: :values.',
    'min' => [
        'array' => ':attribute має містити щонайменше :min елементів.',
        'file' => ':attribute має бути щонайменше :min кілобайт.',
        'numeric' => ':attribute має бути не менше :min.',
        'string' => ':attribute має містити щонайменше :min символів.',
    ],
    'multiple_of' => ':attribute має бути кратним :value.',
    'not_in' => 'Обраний :attribute є недійсним.',
    'not_regex' => 'Формат :attribute є недійсним.',
    'numeric' => ':attribute має бути числом.',
    'present' => ':attribute має бути присутнім.',
    'prohibited' => ':attribute є забороненим.',
    'prohibited_if' => ':attribute є забороненим, якщо :other дорівнює :value.',
    'prohibited_unless' => ':attribute є забороненим, якщо :other не входить до :values.',
    'prohibits' => ':attribute забороняє наявність :other.',
    'regex' => 'Формат :attribute є недійсним.',
    'required' => 'Поле :attribute є обов’язковим.',
    'required_array_keys' => ':attribute має містити записи для: :values.',
    'required_if' => 'Поле :attribute є обов’язковим, якщо :other дорівнює :value.',
    'required_unless' => 'Поле :attribute є обов’язковим, якщо :other не входить до :values.',
    'required_with' => 'Поле :attribute є обов’язковим, якщо :values присутній.',
    'required_with_all' => 'Поле :attribute є обов’язковим, якщо всі :values присутні.',
    'required_without' => 'Поле :attribute є обов’язковим, якщо :values відсутній.',
    'required_without_all' => 'Поле :attribute є обов’язковим, якщо жоден із :values не присутній.',
    'same' => ':attribute і :other мають збігатися.',
    'size' => [
        'array' => ':attribute має містити :size елементів.',
        'file' => ':attribute має бути розміром :size кілобайт.',
        'numeric' => ':attribute має бути :size.',
        'string' => ':attribute має містити :size символів.',
    ],
    'starts_with' => ':attribute має починатися з одного з наступного: :values.',
    'string' => ':attribute має бути рядком.',
    'timezone' => ':attribute має бути дійсним часовим поясом.',
    'unique' => ':attribute вже зайнятий.',
    'uploaded' => ':attribute не вдалося завантажити.',
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