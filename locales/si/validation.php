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
    'accepted'             => 'මෙම :attribute පිළිගත යුතුය.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'මෙම :attribute වලංගු සබැඳි එකක් නොවේ.',
    'after'                => 'මෙම :attribute පසු දිනය විය යුතුය :date.',
    'after_or_equal'       => 'මෙම :attribute පසුව හෝ ඊට සමාන දිනයකි :date.',
    'alpha'                => 'මෙම :attribute අක්ෂර පමණක් අඩංගු විය හැක.',
    'alpha_dash'           => 'මෙම :attribute අක්ෂර, ඉලක්කම්, ඉරුම් සහ යටිඅඩර්ස් අඩංගු විය හැක..',
    'alpha_num'            => 'මෙම :attribute අක්ෂර, ඉලක්කම් පමණක් අඩංගු විය හැක.',
    'array'                => 'මෙම :attribute අරාව විය යුතුය.',
    'attached'             => 'මේ :attribute මේ වන විටත් අමුණා ඇත.',
    'before'               => 'මෙම :attribute පෙර දින විය යුතුය :date.',
    'before_or_equal'      => 'මෙම :attribute පෙර හෝ ඊට සමාන දිනයකි :date.',
    'between'              => [
        'array'   => 'මෙම :attribute අතර තිබිය යුතුය :min සහ :max අයිතම.',
        'file'    => 'මෙම :attribute අතර විය යුතුය :min සහ :max කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute අතර විය යුතුය :min සහ :max.',
        'string'  => 'මෙම :attribute අතර විය යුතුය :min සහ :max ප්රමාණය.',
    ],
    'boolean'              => 'මෙම :attribute ක්ෂේත්ර සත්ය හෝ අසත්ය විය යුතුය.',
    'confirmed'            => 'මෙම :attribute තහවුරු කිරීම නොගැලපේ.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'මෙම :attribute වලංගු දිනය නොවේ.',
    'date_equals'          => 'මෙම :attribute දිනකට සමාන විය යුතුය :date.',
    'date_format'          => 'මෙම :attribute ආකෘතියට ගැළපෙන්නේ නැත :format.',
    'different'            => 'මෙම :attribute සහ :other වෙනස් විය යුතුය.',
    'digits'               => 'මෙම :attribute විය යුතුය :digits ඉලක්කම්.',
    'digits_between'       => 'මෙම :attribute විය යුතුය අතර :min සහ :max ඉලක්කම්.',
    'dimensions'           => 'මෙම :attribute වලංගු නොවන පිළිබිඹුවක් ඇත.',
    'distinct'             => 'මෙම :attribute ක්ෂේත්රයේ අනුපිටපත් වටිනාකමක් ඇත.',
    'email'                => 'මෙම :attribute වලංගු විද්යුත් තැපැල් ලිපිනයක් විය යුතුය.',
    'ends_with'            => 'මෙම :attribute අවසන් විය යුතුය සමග එක් පහත සඳහන්: :values.',
    'exists'               => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'file'                 => 'මෙම :attribute ගොනුවක් විය යුතුය.',
    'filled'               => 'මෙම :attribute ක්ෂේත්රයේ වටිනාකමක් තිබිය යුතුය.',
    'gt'                   => [
        'array'   => 'මෙම :attribute වඩා වැඩි විය යුතුය :value අයිතම.',
        'file'    => 'මෙම :attribute වඩා විශාල විය යුතුය :value කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute වඩා විශාල විය යුතුය :value.',
        'string'  => 'මෙම :attribute වඩා විශාල විය යුතුය :value ප්රමාණය.',
    ],
    'gte'                  => [
        'array'   => 'මෙම :attribute තිබිය යුතු :value අයිතම හෝ ඊට වැඩි.',
        'file'    => 'මෙම :attribute වඩා වැඩි හෝ සමාන විය යුතුයl :value කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute වඩා වැඩි හෝ සමාන විය යුතුය :value.',
        'string'  => 'මෙම :attribute වඩා වැඩි හෝ සමාන විය යුතුය :value ප්රමාණය.',
    ],
    'image'                => 'මෙම :attribute රූපයක් විය යුතුය.',
    'in'                   => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'in_array'             => 'මෙම :attribute ක්ෂේත්රයේ නොපවතින :other.',
    'integer'              => 'මෙම :attribute පූර්ණ සංඛ්යාවක් විය යුතුය.',
    'ip'                   => 'මෙම :attribute වලංගු IP ලිපිනයක් තිබිය යුතුය.',
    'ipv4'                 => 'මෙම :attribute වලංගු IPv4 ලිපිනය විය යුතුය.',
    'ipv6'                 => 'මෙම :attribute වලංගු IPv6 ලිපිනය විය යුතුය.',
    'json'                 => 'මෙම :attribute වලංගු JSON පේළියකි විය යුතුය.',
    'lt'                   => [
        'array'   => 'මෙම :attribute වඩා අඩු විය යුතුය :value අයිතම.',
        'file'    => 'මෙම :attribute වඩා අඩු විය යුතුය :value කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute වඩා අඩු විය යුතුය :value.',
        'string'  => 'මෙම :attribute වඩා අඩු විය යුතුය :value ප්රමාණය..',
    ],
    'lte'                  => [
        'array'   => 'මෙම :attribute වඩා වැඩි නොවිය යුතුය :value අයිතම.',
        'file'    => 'මෙම :attribute අඩු හෝ සමාන විය යුතුය :value කිලෝ බයිට ගණන..',
        'numeric' => 'මෙම :attribute අඩු හෝ සමාන විය යුතුය :value.',
        'string'  => 'මෙම :attribute අඩු හෝ සමාන විය යුතුය :value ප්රමාණය..',
    ],
    'max'                  => [
        'array'   => 'මෙම :attribute වඩා වැඩි නොවිය හැක :max අයිතම.',
        'file'    => 'මෙම :attribute වඩා විශාල විය නොහැකිය :max කිලෝ බයිට ගණන..',
        'numeric' => 'මෙම :attribute වඩා විශාල විය නොහැකිය :max.',
        'string'  => 'මෙම :attribute වඩා විශාල විය නොහැකිය :max ප්රමාණය..',
    ],
    'mimes'                => 'මෙම :attribute වර්ගයේ ගොනුවක් විය යුතුය: :values.',
    'mimetypes'            => 'මෙම :attribute වර්ගයේ ගොනුවක් විය යුතුය: :values.',
    'min'                  => [
        'array'   => 'මෙම :attribute අවම වශයෙන් තිබිය යුතුය :min අයිතම.',
        'file'    => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min කිලෝ බයිට ගණන..',
        'numeric' => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min.',
        'string'  => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min ප්රමාණය..',
    ],
    'multiple_of'          => 'මෙම :attribute බහු විය යුතුය :value',
    'not_in'               => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'not_regex'            => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'numeric'              => 'මෙම :attribute අංකයක් විය යුතුය.',
    'password'             => 'මුරපදය වැරදිය.',
    'present'              => 'මෙම :attribute ක්ෂේත්රයයි තිබිය යුතුය.',
    'prohibited'           => 'මෙම :attribute ක්ෂේත්රයේ තහනම් කර තිබේ.',
    'prohibited_if'        => 'මෙම :attribute ක්ෂේත්රයේ තහනම් කර තිබේ විට :other වන අතර, :value.',
    'prohibited_unless'    => 'මෙම :attribute ක්ෂේත්රයේ තහනම් කර තිබේ නම් :other වේ :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'relatable'            => 'මේ :attribute නොහැකි විය හැක, මෙම සමඟ සංෙයෝජිත ෙ කෙර් සම්පත්.',
    'required'             => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි.',
    'required_if'          => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :other මෙය :value.',
    'required_unless'      => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි මිස :other මෙය :values.',
    'required_with'        => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_with_all'    => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_without'     => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_without_all' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය කිසිවක් of :values තිබිය යුතුය.',
    'same'                 => 'මෙම :attribute සහ :other ගැලපිය යුතුයි.',
    'size'                 => [
        'array'   => 'මෙම :attribute must contain :size අයිතම.',
        'file'    => 'මෙම :attribute විය යුතුය :size කිලෝ බයිට ගණන..',
        'numeric' => 'මෙම :attribute විය යුතුය :size.',
        'string'  => 'මෙම :attribute විය යුතුය :size ප්රමාණය..',
    ],
    'starts_with'          => 'මෙම :attribute පහත සඳහන් එකක් සමඟ ආරම්භ කළ යුතුය: :values',
    'string'               => 'මෙම :attribute පේළියකි විය යුතුය.',
    'timezone'             => 'මෙම :attribute වලංගු කලාපයකි විය යුතුය.',
    'unique'               => 'මෙම :attribute දැනටමත් අරගෙන තියෙන්නේ.',
    'uploaded'             => 'මෙම :attribute උඩුගත කිරීම අසාර්ථක විය.',
    'url'                  => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'uuid'                 => 'මෙම :attribute වලංගු UUID විය යුතුය.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'address'               => 'ලිපිනය',
        'age'                   => 'වයස',
        'available'             => 'ලබා ගත හැකිය',
        'body'                  => 'කරුණු',
        'city'                  => 'නගරය',
        'content'               => 'අන්තර්ගතය',
        'country'               => 'රට',
        'date'                  => 'දිනය',
        'day'                   => 'දවස',
        'description'           => 'විස්තර',
        'email'                 => 'විද්යුත් තැපෑල',
        'excerpt'               => 'උපුටාගන්නා ලදි',
        'first_name'            => 'මුල් නම',
        'gender'                => 'ස්ත්රී පුරුෂ භාවය',
        'hour'                  => 'පැය',
        'last_name'             => 'අවසන් නම',
        'message'               => 'පණිවුඩය',
        'minute'                => 'විනාඩියක්',
        'mobile'                => 'ජංගම දුරකථන',
        'month'                 => 'මාසය',
        'name'                  => 'නාමය',
        'password'              => 'රහස් පදය',
        'password_confirmation' => 'මුරපදය තහවුරු කිරීම',
        'phone'                 => 'දුරකථන',
        'second'                => 'දෙවැනි',
        'sex'                   => 'ස්ත්රී පුරුෂ භාවය',
        'size'                  => 'ප්රමාණය',
        'subject'               => 'විෂය',
        'time'                  => 'වේලාව',
        'title'                 => 'ශීර්ෂය',
        'username'              => 'පරිශීලක නාමය',
        'year'                  => 'වර්ෂය',
    ],
];
