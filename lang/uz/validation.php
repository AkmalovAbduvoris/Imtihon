<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tasdiqlash xabarlari
    |--------------------------------------------------------------------------
    |
    | Quyidagi satrlar tasdiqlovchi sinf tomonidan ishlatiladigan standart
    | xatolik xabarlarini o'z ichiga oladi. Ba'zi qoidalar bir nechta versiyalarga
    | ega, masalan, o'lcham qoidalari. Har bir xabarni bu yerda o'zgartirishingiz mumkin.
    |
    */

    'accepted' => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':other :value bo‘lsa, :attribute maydoni qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni yaroqli URL bo‘lishi kerak.',
    'after' => ':attribute maydoni :date dan keyingi sana bo‘lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date dan keyingi yoki teng sana bo‘lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflarni o‘z ichiga olishi kerak.',
    'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, chiziqlar va pastki chiziqlarni o‘z ichiga olishi kerak.',
    'alpha_num' => ':attribute maydoni faqat harflar va raqamlarni o‘z ichiga olishi kerak.',
    'array' => ':attribute maydoni massiv bo‘lishi kerak.',
    'ascii' => ':attribute maydoni faqat bitta baytli alfanumerik belgilar va belgilarni o‘z ichiga olishi kerak.',
    'before' => ':attribute maydoni :date dan oldingi sana bo‘lishi kerak.',
    'before_or_equal' => ':attribute maydoni :date dan oldingi yoki teng sana bo‘lishi kerak.',
    'between' => [
        'array' => ':attribute maydoni :min va :max elementlar orasida bo‘lishi kerak.',
        'file' => ':attribute maydoni :min va :max kilobayt orasida bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :min va :max orasida bo‘lishi kerak.',
        'string' => ':attribute maydoni :min va :max belgilar orasida bo‘lishi kerak.',
    ],
    'boolean' => ':attribute maydoni ha yoki yo‘q bo‘lishi kerak.',
    'confirmed' => ':attribute tasdiqlanishi mos kelmadi.',
    'date' => ':attribute maydoni yaroqli sana bo‘lishi kerak.',
    'date_equals' => ':attribute maydoni :date ga teng sana bo‘lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos kelishi kerak.',
    'different' => ':attribute va :other farqli bo‘lishi kerak.',
    'digits' => ':attribute maydoni :digits raqamdan iborat bo‘lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max raqamlar orasida bo‘lishi kerak.',
    'dimensions' => ':attribute maydoni noto‘g‘ri rasm o‘lchamlariga ega.',
    'distinct' => ':attribute maydoni takroriy qiymatga ega.',
    'email' => ':attribute maydoni yaroqli elektron pochta manzili bo‘lishi kerak.',
    'exists' => 'Tanlangan :attribute noto‘g‘ri.',
    'file' => ':attribute maydoni fayl bo‘lishi kerak.',
    'filled' => ':attribute maydoni qiymatga ega bo‘lishi kerak.',
    'gt' => [
        'array' => ':attribute maydoni :value elementdan ko‘p bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgidan katta bo‘lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute maydoni :value element yoki undan ko‘p bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobayt yoki undan katta bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value yoki undan katta bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgi yoki undan katta bo‘lishi kerak.',
    ],
    'image' => ':attribute maydoni rasm bo‘lishi kerak.',
    'in' => 'Tanlangan :attribute noto‘g‘ri.',
    'in_array' => ':attribute maydoni :other da mavjud emas.',
    'integer' => ':attribute maydoni butun son bo‘lishi kerak.',
    'ip' => ':attribute maydoni yaroqli IP manzil bo‘lishi kerak.',
    'ipv4' => ':attribute maydoni yaroqli IPv4 manzil bo‘lishi kerak.',
    'ipv6' => ':attribute maydoni yaroqli IPv6 manzil bo‘lishi kerak.',
    'json' => ':attribute maydoni yaroqli JSON satri bo‘lishi kerak.',
    'lt' => [
        'array' => ':attribute maydoni :value elementdan kam bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgidan kichik bo‘lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute maydoni :value elementdan ko‘p bo‘lmasligi kerak.',
        'file' => ':attribute maydoni :value kilobayt yoki undan kichik bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value yoki undan kichik bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgi yoki undan kichik bo‘lishi kerak.',
    ],
    'max' => [
        'array' => ':attribute maydoni :max elementdan ko‘p bo‘lmasligi kerak.',
        'file' => ':attribute maydoni :max kilobaytdan ko‘p bo‘lmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan ko‘p bo‘lmasligi kerak.',
        'string' => ':attribute maydoni :max belgidan ko‘p bo‘lmasligi kerak.',
    ],
    'mimes' => ':attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'mimetypes' => ':attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'min' => [
        'array' => ':attribute maydoni kamida :min elementga ega bo‘lishi kerak.',
        'file' => ':attribute maydoni kamida :min kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute maydoni kamida :min bo‘lishi kerak.',
        'string' => ':attribute maydoni kamida :min belgi bo‘lishi kerak.',
    ],
    'not_in' => 'Tanlangan :attribute noto‘g‘ri.',
    'not_regex' => ':attribute maydoni formati noto‘g‘ri.',
    'numeric' => ':attribute maydoni raqam bo‘lishi kerak.',
    'present' => ':attribute maydoni mavjud bo‘lishi kerak.',
    'regex' => ':attribute maydoni formati noto‘g‘ri.',
    'required' => ':attribute maydoni to‘ldirilishi shart.',
    'required_if' => ':other :value bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_unless' => ':other :values da bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'required_with' => ':values mavjud bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_with_all' => ':values mavjud bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without' => ':values mavjud bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'required_without_all' => ':values lardan hech biri mavjud bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'same' => ':attribute va :other mos kelishi kerak.',
    'size' => [
        'array' => ':attribute maydoni :size elementga ega bo‘lishi kerak.',
        'file' => ':attribute maydoni :size kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :size bo‘lishi kerak.',
        'string' => ':attribute maydoni :size belgi bo‘lishi kerak.',
    ],
    'starts_with' => ':attribute maydoni quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute maydoni satr bo‘lishi kerak.',
    'timezone' => ':attribute maydoni yaroqli vaqt zonasi bo‘lishi kerak.',
    'unique' => ':attribute allaqachon olingan.',
    'uploaded' => ':attribute yuklab bo‘lmadi.',
    'url' => ':attribute maydoni yaroqli URL bo‘lishi kerak.',
    'uuid' => ':attribute maydoni yaroqli UUID bo‘lishi kerak.',
];
