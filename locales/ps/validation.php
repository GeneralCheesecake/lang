<?php

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

return [
    'accepted'             => 'باید ومنل شی :attribute.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':attribute یو باوري لینک نه دی.',
    'after'                => 'باید:attribute تر نن ورځې نیټې پورې :date.',
    'after_or_equal'       => ':attribute باید وروستی نیټه وي یا د نیټې سره سمون ولري :date.',
    'alpha'                => 'دا باید شامل نه وي :attribute یوازې په حرفو کې.',
    'alpha_dash'           => 'دا باید شامل نه وي :attribute یوازې په حرفو کې، شمیرې او متره.',
    'alpha_num'            => 'شمیرې او متره :attribute یوازې خطونه او شمیرې.',
    'array'                => 'دا باید وي :attribute ًمیټرکس.',
    'attached'             => 'This :attribute is already attached.',
    'before'               => 'باید:attribute د تاریخ پخوا تاریخ وټاکئ :date.',
    'before_or_equal'      => ':attribute دا باید وي د تیر نیټې یا نیټې سره سمون خوري :date.',
    'between'              => [
        'array'   => 'شمیرې او متره :attribute د عناصرو په منځ کې :min او :max.',
        'file'    => 'د دوتنې اندازه باید وي:attribute ما بين:min او :max كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute ما بين:min او :max.',
        'string'  => 'د متن حروف باید باید وي :attribute ما بين:min او :max.',
    ],
    'boolean'              => 'دا باید ارزښت وي :attribute او یا هم true یا false .',
    'confirmed'            => 'د تایید ساحه د ساحې سره سمون نه لري:attribute.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':attribute نېټه اعتبار نلري .',
    'date_equals'          => 'دا باید وي :attribute د نیټې سره سم:date.',
    'date_format'          => 'مطابقت نلري :attribute د شکل سره:format.',
    'different'            => 'ساحې باید وي :attribute و :other مختلف.',
    'digits'               => 'شمیرې او متره :attribute په :digits شمېر / شمېرې.',
    'digits_between'       => 'شمیرې او متره :attribute ما بين:min و :max شمېر / شمېرې .',
    'dimensions'           => 'د :attribute د ناباوره انځور اړخونه لري.',
    'distinct'             => 'د ساحې څخه :attribute د نقل ارزښت .',
    'email'                => 'دا باید وي :attribute یو باوري بریښلیک پته جوړښت.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'exists'               => 'مشخص ارزښت :attribute شتون نلري.',
    'file'                 => 'د :attribute دا باید یوه فایل وي.',
    'filled'               => ':attribute لازمه ده.',
    'gt'                   => [
        'array'   => 'شمیرې او متره :attribute له زیاتو څخه :value عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute په پرتله ډیر :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute په پرتله ډیر :value.',
        'string'  => 'د متن اوږدوالی باید وي :attribute څخه زیات :value توري/توري.',
    ],
    'gte'                  => [
        'array'   => 'شمیرې او متره :attribute لږ تر لږه :value عنصر / عناصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږترلږه :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute مساوی یا زیات :value.',
        'string'  => 'د متن اوږدوالی باید وي :attribute لږترلږه :value توري/توري.',
    ],
    'image'                => 'دا باید وي :attribute انځور.',
    'in'                   => ':attribute غير موجود.',
    'in_array'             => ':attribute غير موجود في :other.',
    'integer'              => 'دا باید وي:attribute هو عدد صحيح.',
    'ip'                   => 'دا باید وي:attribute عنوان IP ریښتیا.',
    'ipv4'                 => 'دا باید وي:attribute عنوان IPv4 ریښتیا.',
    'ipv6'                 => 'دا باید وي:attribute عنوان IPv6 ریښتیا.',
    'json'                 => 'دا باید وي:attribute د اوریدلو ډول JSON.',
    'lt'                   => [
        'array'   => 'شمیرې او متره :attribute له کم څخه :value عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږ :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute لږ :value.',
        'string'  => 'د متن اوږدوالی باید وي :attribute له کم څخه :value توري/توري.',
    ],
    'lte'                  => [
        'array'   => 'دا باید شامل نه وي :attribute له زیاتو څخه :value عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید له حد نه زیاته نه وي :attribute :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute نسبت برابر یا کوچنی :value.',
        'string'  => 'د متن اوږدوالی باید له زیاتوالی نه وي:attribute :value توري/توري.',
    ],
    'max'                  => [
        'array'   => 'دا باید شامل نه وي :attribute له زیاتو څخه :max عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید له حد نه زیاته وي :attribute :max كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute نسبت برابر یا کوچنی :max.',
        'string'  => 'د متن اوږدوالی باید له زیاتوالی نه وي:attribute :max توري/توري.',
    ],
    'mimes'                => 'دا باید د ډول دوسیه وي : :values.',
    'mimetypes'            => 'دا باید یوه فایل وي: :values.',
    'min'                  => [
        'array'   => 'شمیرې او متره :attribute لږ تر لږه :min عنصر / عناصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږترلږه :min كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute مساوی یا زیات :min.',
        'string'  => 'د متن اوږدوالی باید وي :attribute لږترلږه :min توري/توري.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => ':attribute موجود.',
    'not_regex'            => 'فورمول :attribute غلط.',
    'numeric'              => 'باید:attribute یو شمېره.',
    'password'             => 'The password is incorrect.',
    'present'              => 'باید چمتو شی :attribute.',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'فورمول :attribute .غير صحيح.',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => ':attribute اړینه ده.',
    'required_if'          => ':attribute که چیرې د اړتیا په صورت کې اړتیا وي:other مساو :value.',
    'required_unless'      => ':attribute که نه :other مساو :values.',
    'required_with'        => ':attribute که اړتیا وي شتون لري :values.',
    'required_with_all'    => ':attribute که اړتیا وي شتون لري :values.',
    'required_without'     => ':attribute د اړتیا پرته :values.',
    'required_without_all' => ':attribute که اړتیا شتون نلري :values.',
    'same'                 => 'اړینه ده :attribute سره :other.',
    'size'                 => [
        'array'   => 'شمیرې او متره :attribute په :size عنصر/عناصر په سمه توګه.',
        'file'    => 'د دوتنې اندازه باید وي:attribute :size كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute سره برابر :size.',
        'string'  => 'شمیرې او متره متن :attribute په :size توري/توري په سمه توګه.',
    ],
    'starts_with'          => 'دا باید پیل شي :attribute د لاندې ارزښتونو څخه یو: :values',
    'string'               => 'دا باید وي:attribute متن.',
    'timezone'             => 'دا باید وي:attribute یو باوري نیټه.',
    'unique'               => 'ارزښتونه :attribute کارول شوی.',
    'uploaded'             => 'د پورته کولو توان نلري :attribute.',
    'url'                  => 'د لینک بڼه :attribute غلط.',
    'uuid'                 => ':attribute دا باید غیر رسمي وي UUID غږ.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'address'               => 'د استوګنې پته',
        'age'                   => 'عمر',
        'available'             => 'شته',
        'city'                  => 'ښار',
        'content'               => 'منځپانګې',
        'country'               => 'هېواد',
        'date'                  => 'نېټه',
        'day'                   => 'ورځ',
        'description'           => 'تشریح',
        'email'                 => 'برېښلیک',
        'excerpt'               => 'لنډیز',
        'first_name'            => 'لومړی نوم',
        'gender'                => 'جنس',
        'hour'                  => 'ساعت',
        'last_name'             => 'وروستۍ نوم',
        'minute'                => 'دقیقې',
        'mobile'                => 'ګرځنده',
        'month'                 => 'میاشت',
        'name'                  => 'نوم',
        'password'              => 'پاسورډ',
        'password_confirmation' => 'پاسورډ تایید کړه',
        'phone'                 => 'تلیفون',
        'second'                => 'ثانوي',
        'sex'                   => 'جنس',
        'size'                  => 'اندازه',
        'time'                  => 'وخت',
        'title'                 => 'سرلیک',
        'username'              => 'د کارن نوم',
        'year'                  => 'کال',
    ],
];
