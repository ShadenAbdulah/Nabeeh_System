<x-head session_name="{{$sample->id.'/train'}}">

    <body class="p-10 font-[Tajawal]" x-data="{ show: true}">
    <div class="w-1/3 mx-auto my-32 bg-[#D9D9D9]/30 px-7 py-3 grid justify-items-center gap-y-5 rounded-2xl"
         x-show="show">
        <div
            class="border-[5px] border-[#6E65E8] bg-white w-16 h-16 -mt-10 rounded-full text-center text-lg p-4 font-bold mb-2">
            <div
                x-data="{ countdown: 20 }"
                x-init="() => {setInterval(() => {countdown--; if (countdown < 0){ countdown = 0; show=false;}}, 1000);}">
                <span x-text="countdown"></span>
            </div>
        </div>

        <div class="flex gap-x-0.5">
            @for($i=0; $i<6; $i++)
                <div class="w-2 h-2 rounded-full bg-[#D9D9D9]"></div>
            @endfor
        </div>

        <h1 class="font-semibold">تهيئـــة</h1>
        <p class="font-medium text-justify">
            مهمة البداية ليست ضمن الاختبار، وهي للتدريب على آلية الاختبار والتعرف على بيئة الاختبار قبل البدء. ستظهر
            صفحة تحتوي على رسومات والمطلوب منك هو اعادة رسم ما هو موجود خلال 5 دقائق كحد أقصى.
        </p>
    </div>

    <div x-show="!show">
        <img src="{{asset('images/train.png')}}" class="mt-10">
        <canvas id="canvas" class="w-full h-full absolute top-0 right-0"></canvas>
        <form method="post" action="{{route('object.test', [$test, $sample])}}"
              id="submit_form"
              class="w-1/6 grid justify-items-end top-10 left-10 absolute"
              x-data="{countdown: 320}"
              x-init="setInterval(() => {countdown--;
          if(countdown===0) {document.getElementById('submit_btn').click();}}, 1000);">
            @method('get')
            @csrf
            <x-primary-button class="w-full" type="submit" id="submit_btn">
                {{ __('بدء الاختبــار') }}
            </x-primary-button>
        </form>
    </div>
    </body>
</x-head>
