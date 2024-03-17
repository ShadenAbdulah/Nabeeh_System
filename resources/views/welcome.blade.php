@extends('layouts.app')
@section('content')

    <div class="relative w-full flex items-center my-28 justify-between">
        <div class="w-1/2 space-y-28 justify-between h-full items-center">
            <p class="text-xl font-normal text-justify">
                <span class="font-bold text-5xl text-[#6D6AB1]">نَبيــه </span> هو أداة مساعدة أولية للتشخيص عن
                اضطراب فرط الحركة وتشتت الانتباه
                عن طريق تحليل خط اليد باستخدام
                أنماط محددة،
                يستغرق الاختبار 10 دقائق تقريبًا.
                إن النتيجة التي ستظهر لك في
                النهاية هي مجرد احتمالية وتعتمد
                على
                تنبؤات الذكاء الاصطناعي.
            </p>

            <div class="w-1/2 mx-auto">
                <a href="{{route('info')}}">
                    <x-primary-button class="w-full font-semibold">
                        {{ __('الدخول للإختبــــار') }}
                    </x-primary-button>
                </a>

                <div class="flex gap-2 mx-auto mt-6 w-fit">
                    <svg class="w-6"
                         data-name="Layer 1"
                         id="Layer_1"
                         viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"
                            fill="#6D6AB1"/>
                    </svg>
                    <h1 class="font-normal text-base mt-1.5">تعليمات الاستخدام</h1>
                </div>
            </div>
        </div>
        <img src="{{asset('images/logo_bg.png')}}"
             alt="bg"
             class="w-1/2 -z-50"/>
    </div>

@endsection
