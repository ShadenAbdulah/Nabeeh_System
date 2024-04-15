@extends('layouts.app')
@section('content')

    <form action="{{route('pdf')}}" method="post" target="_blank">
        @method('get') @csrf
        <x-primary-button></x-primary-button>
    </form>

    <div class="w-full flex items-center mt-28 phones:my-16 justify-between phones:flex-row">
        <div class="phones:w-full tablet:w-1/2 tablet:space-y-28 phones:space-y-10 justify-between items-center">
            <p class="text-xl font-normal text-justify tracking-wide">
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

            <div class="tablet:w-1/2 phones:w-full mx-auto">
                <a href="{{route('object.train')}}"
                   class="phones:hidden">
                    <x-primary-button class="w-full font-semibold">
                        {{ __('extra.entering_to_test') }}
                    </x-primary-button>
                </a>

                <div class="flex gap-2 mx-auto mt-6 tablet:w-fit phones:w-full phones:justify-center">
                    <svg class="tablet:w-6 phones:w-10"
                         data-name="Layer 1"
                         id="Layer_1"
                         viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"
                            fill="#6D6AB1"/>
                    </svg>
                    <h1 class="tablet:block phones:hidden font-normal text-base mt-1.5">{{__('extra.use_instructions')}}</h1>
                    <h1 class="phones:block tablet:hidden font-normal text-base mt-1.5">
                        لإجراء الإختبار، نرجو إستعمال جهاز
                        <br>
                        <span class="font-bold">Galaxy Tab S6 Lite</span>
                    </h1>
                </div>
            </div>
        </div>
        <img src="{{asset('images/logo_bg.png')}}"
             alt="bg"
             class="phones:hidden tablet:block w-1/2 -z-50 "/>
    </div>

@endsection
