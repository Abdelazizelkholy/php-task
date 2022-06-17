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
    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute لا يُمثّل رابطًا صحيحًا.',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array' => 'يجب أن يكون :attribute ًمصفوفة.',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max.',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed' => 'كلمه المرور وتاكيدها يجب ان يتطابقا',
    'date' => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'exists' => 'القيمة المحددة :attribute غير موجودة.',
    'file' => 'الـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image' => 'يجب أن يكون :attribute صورةً.',
    'in' => ':attribute غير موجود.',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
    ],
    'not_in' => ':attribute موجود.',
    'not_regex' => 'صيغة :attribute غير صحيحة.',
    'numeric' => 'يجب على :attribute أن يكون رقمًا.',
    'present' => 'يجب تقديم :attribute.',
    'regex' => 'صيغة :attribute .غير صحيحة.',
    'required' => ':attribute مطلوب.',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'url' => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid' => ':attribute يجب أن يكون بصيغة UUID سليمة.',

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

        'title_en' => [
            'max' => '  يجب  أن لا يتجاوز العنوان (بالانجليزيه) طول النّص 50 حرفًا ',
            'required' => ' الرجاء ملء خانه العنوان(بالانجليزيه)  '

        ],
        'title_ar' => [
            'max' => '  يجب  أن لا يتجاوز العنوان (بالعربيه) طول النّص 50 حرفًا ',
            'required' => ' الرجاء ملء خانه العنوان(بالعربيه)  '

        ],
        'content_en' => [
            'max' => '  يجب  أن لا يتجاوز المحتوى (بالانجليزيه) طول النّص 500 حرفًا ',
            'required' => ' الرجاء ملء خانه المحتوى(بالانجليزيه)  '

        ],
        'content_ar' => [
            'max' => '  يجب  أن لا يتجاوز المحتوى (بالعربيه) طول النّص 500  حرفًا ',
            'required' => ' الرجاء ملء خانه المحتوى(بالعربيه)  '

        ],
        'description_en' => [
            'max' => '  يجب  أن لا يتجاوز الوصف (بالانجليزيه) طول النّص 500 حرفًا ',
            'required' => ' الرجاء ملء خانه الوصف (بالانجليزيه)  '

        ],
        'description_ar' => [
            'max' => '  يجب  أن لا يتجاوز الوصف (بالعربيه) طول النّص 500 حرفًا ',
            'required' => ' الرجاء ملء خانه الوصف (بالعربيه)  '

        ],
        'name_en' => [
            'max' => '  يجب  أن لا يتجاوز الاسم (بالانجليزيه) طول النّص 50  حرفًا ',
            'required' => ' الرجاء ملء خانه الاسم(بالانجليزيه)  '

        ],
        'name_ar' => [
            'max' => '  يجب  أن لا يتجاوز الاسم (بالعربيه) طول النّص 50  حرفًا ',
            'required' => ' الرجاء ملء خانه الاسم(بالعربيه)  '

        ],
        'country_id' => [
            'exists' => ' قيمه الدوله المحدده غير موجوده  ',
            'required' => ' الرجاء ملء خانه الدوله (بالعربيه)  '
        ],
        'city_id' => [
            'exists' => ' قيمه المنطقه المحدده غير موجوده  ',
            'required' => ' الرجاء ملء خانه المنطقه (بالعربيه)  '
        ],
        'role' => [
            'required' => ' الرجاء ملء خانه الشرط  (بالعربيه)  '
        ],
        'name' => [
            'required' => ' الرجاء ملء خانه اسم المستخدم  ',
            'max' => '  يجب  أن لا يتجاوز اسم المستخدم طول النّص 50 حرفًا ',
            'min' => '  يجب  أن لا يقل اسم المستخدم طول النّص 1 حرفًا ',
        ],
        'email' => [
            'required' => ' الرجاء ملء خانه البريد الالكترونى   ',
            'unique' => ' البريد الالكترونى مستخدم من قبل   '
        ],
        'phone' => [
            'required' => ' الرجاء ملء خانه رقم التليفون  ',
            'unique' => ' الهاتف مستخدم من قبل   '
        ],
        'password' => [
            'required' => ' الرجاء ملء خانه كلمه المرور (بالعربيه)  ',
            'regex' => 'يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل بما في ذلك الأحرف الكبيرة والصغيرة والأرقام والأحرف الخاصة.',
        ],
        'lat' => [
            'required' => ' الرجاء ملء خانه خط الطول   '
        ],
        'long' => [
            'required' => ' الرجاء ملء خانه خط العرض   '
        ],
        'street_name' => [
            'max' => '  يجب  أن لا يتجاوز اسم الشارع  (بالعربيه) طول النّص 100   حرفًا ',
            'required' => ' الرجاء ملء خانه اسم الشارع   '
        ],
        'building_num' => [
            'required' => ' الرجاء ملء خانه رقم العمارة '
        ],
        'float_num' => [
            'required' => ' الرجاء ملء خانه رقم الشقه '
        ],
        'user_id' => [
            'exists' => '  القيمة المحددة للمستخدم غير موجود ',
            'required' => ' الرجاء ملء خانه  المستخدم  '
        ],
        'area_id' => [
            'exists' => '  القيمة المحددة للمنطقه غير موجود ',
            'required' => ' الرجاء ملء خانه  المنطقة  '
        ],
        'specialty_id' => [
            'exists' => '  القيمة المحددة للتخصص غير موجود ',
        ],
        'sub_specialties_id' => [
            'exists' => '  القيمة المحددة للتخصص الفرعى غير موجود ',
        ],
        'scientific_titles_id' => [
            'exists' => '  القيمة المحددة المسمى العلمى  غير موجود ',
        ],
        'syndicate_number' => [
            'max' => '  يجب  أن لا يتجاوز رقم النقابه   طول النّص 100   حرفًا ',
            'required' => ' الرجاء ملء خانه  رقم النقابه  '
        ],
        'national_id' => [
            'max' => '  يجب  أن لا يتجاوز رقم البطاقه  طول النّص  14   حرفًا ',
            'required' => ' الرجاء ملء خانه  رقم البطاقه  '
        ],
        'degree_id' => [
            'exists' => '  القيمة المحددة  الدرجة العلميه  غير موجود ',
            'required' => ' الرجاء ملء خانه الدرجة العلميه  '
        ],
        'rejection_reasons' => [
            'required' => ' الرجاء ملء خانه سبب الرفض  '
        ],
        'rejected_process' => [
            'required' => ' الرجاء ملء خانه رقم الشاشه   '
        ],
        'type' => [
            'in' => ' يجب أن يكون النوع اما البريد الألكترونى او رقم التليفون '
        ],
        'value' => [
            'required' => ' الرجاء ملء خانه القيمه '
        ],
        'code' => [
            'required' => ' الرجاء ملء خانه الكود ',
            'digits' => 'يجب  الكود رقم  '
        ],
        'allergies' => [
            'exists' => '  القيمة المحددة للحساسية غير موجود ',
        ],
        'surgeries' => [
            'exists' => '  القيمة المحددة للجراحه غير موجود ',
        ],
        'diseases' => [
            'exists' => '  القيمة المحددة للأمراض غير موجود ',
        ],
        'blood_types' => [
            'exists' => '  القيمة المحددة لنوع الدم غير موجود ',
        ],
        'image' => [
            'required' => ' الرجاء رفع صوره  '
        ],
        'photo' => [
            'required' => ' الرجاء رفع صوره  '
        ],
        'current' => [
            'required' => ' الرجاء التحديد اذا كانت وظيفه حاليه ام سابقة  '
        ],
        'job_title' => [
            'required' => ' الرجاء ملء خانة اسم الوظيفة  '
        ],
        'organization_name' => [
            'required' => ' الرجاء ملء خانة اسم الشركه الخاصه بالوظيفة  '
        ],
        'location' => [
            'required' => ' الرجاء ملء خانة العنوان  '
        ],
        'swift_code' => [
            'required' => ' الرجاء ملء خانة الكود  '
        ],
        'bank_name' => [
            'required' => ' الرجاء ملء  خانة اسم البنك  '
        ],
        'bank_branch' => [
            'required' => ' الرجاء ملء  خانة فرع البنك  '
        ],
        'bank_country' => [
            'required' => ' الرجاء ملء  خانة بلد البنك  '
        ],
        'bank_city' => [
            'required' => ' الرجاء ملء  خانة مدينه البنك  '
        ],
        'address' => [
            'required' => ' الرجاء ملء خانة العنوان  '
        ],
        'personal_name' => [
            'required' => ' الرجاء ملء خانة الاسم   '
        ],
        'medical_type' => [
            'required' => ' الرجاء ملء  خانة النوع الطبي   '
        ], // complaint
        'complaint' => [
            'required' => ' الرجاء ملء  خانة شكوى  '
        ],
        'diagnosis' => [
            'required' => ' الرجاء ملء   خانة تشخيص   '
        ],
        'date' => [
            'required' => ' الرجاء ملء خانة التاريخ   '
        ],
        'treatment' => [
            'required' => ' الرجاء ملء  خانة العلاج   '
        ],
        'visit_type' => [
            'required' => ' الرجاء ملء خانة نوع الزيارة   '
        ],
        'doctor_name' => [
            'required' => ' الرجاء ملء   خانة اسم الطبيب  '
        ],
        'investigation' => [
            'required' => ' الرجاء ملء   خانة التحقيق  '
        ],
        'order_id' => [
            'exists' => ' القيمة المحددة للطلب غير موجود  '
        ],
        'transaction_id' => [
            'required' => ' الرجاء ملء   خانة رقم المعاملة  '
        ],
        'document_id' => [
            'required' => ' الرجاء ملء   خانة الوثيقة  '
        ],
        'relationship_id' => [
            'required' => ' الرجاء ملء   خانة الصلة  '
        ],
        'reason' => [
            'required' => ' الرجاء ملء   خانة السبب  '
        ],
        'service_id' => [
            'required' => ' الرجاء ملء   خانة الخدمة  ' ,
            'exists' => ' القيمة المحددة للخدمة غير موجود  '
        ],
        'price' => [
            'required' => ' الرجاء ملء   خانة السعر  ' ,
        ],
        'from' => [
            'required' => ' الرجاء ملء   خانة بداية التاريخ  ' ,
        ],
        'to' => [
            'required' => ' الرجاء ملء   خانة نهاية التاريخ  ' ,
        ],
        'day' => [
            'required' => ' الرجاء ملء   خانة اليوم  ' ,
        ],
        'active' => [
            'required' => ' الرجاء ملء   خانة التفعيل   ' ,
        ],
        'visits.*.visit_id' => [
            'required' => ' الرجاء ملء   خانة الزيارة '
        ],
        'visits.*.active' => [
            'required' => ' الرجاء ملء   خانة التفعيل '
        ],
        'visits.*.min_price' => [
            'required' => ' الرجاء ملء   خانة أقل سعر '
        ],
        'visits.*.max_price' => [
            'required' => ' الرجاء ملء   خانة أعلى سعر '
        ],
        'visits.*.price' => [
            'required' => ' الرجاء ملء   خانة السعر  '
        ],

    ],

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

    'attributes' => [
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'mobile' => 'الجوال',
        'phone' => 'رقم الهاتف',
        'commercial_registeration_number' => 'رقم التسجيل التجارى',
        'governate_id' => 'المحافظه',
        'region_id' => 'المنطقه',
        'street_id' => 'الشارع',
        'lat' => 'خط الطول',
        'long' => 'خط العرض',
        'discount' => 'الخصم',
        'finish_date' => 'تاريخ نهايه الخصم',
        'start_date' => 'تاريخ بدايه الخصم',
        'busy' => 'مشغول',
        'building_number' => 'رقم المبنى',
        'floor' => 'الطابق',
        'street' => 'الشارع',
        'new_password' => 'كلمه المرور الجديده',
        'name_ar' => 'الاسم باللغه العربيه',
        'name_en' => 'الاسم باللغه الانجليزيه',
        'visits.*.visit_id' => 'الزيارة',
        'visits.*.active' => 'التفعيل',
        'visits.*.min_price' => 'أقل سعر ',
        'visits.*.max_price' => 'أعلى سعر ',
        'visits.*.price' => 'السعر' ,
        'visits.*.id' => 'الزيارة'


    ],

];
