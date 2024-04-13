<x-head session_name="{{$sample->id.'/'.$test->id.'-'.$test->session_name}}"
        sample_id="{{$sample->id}}"
        test_id="{{$test->id}}">
    <body class="p-10 font-[Tajawal]" x-data="{show: true}" id="body">
    <div class="w-1/3 mx-auto mt-32 bg-[#D9D9D9]/30 px-7 py-3 grid justify-items-center gap-y-5 rounded-2xl"
         x-show="show">
        <div
            class="border-[5px] border-[#6E65E8] bg-white w-16 h-16 -mt-10 rounded-full text-center text-lg p-4 font-bold mb-2">
            <div
                x-data="{ countdown: 20}"
                x-init="() => {setInterval(() => {countdown--; if (countdown < 0){ countdown = 0; show=false;}}, 1000);}">
                <span x-text="countdown"></span>
            </div>
        </div>
        <div class="flex gap-x-0.5">
            @for($i=0; $i<6; $i++)
                @if($i<$test->dots)
                    <div class="w-2 h-2 rounded-full bg-[#6E65E8]"></div>
                @else
                    <div class="w-2 h-2 rounded-full bg-[#D9D9D9]"></div>
                @endif
            @endfor
        </div>
        <h1 class="font-semibold"><span class="text-[#6E65E8]">{{$test->type}}</span>{{$test->title}}</h1>
        <p class="font-medium text-justify">{{$test->content}} سيظهر لك خط متعرج والمطلوب منك هو إعادة رسم
            الخط دون رفع القلم عن الجهاز اللوحي وتكرار ذلك على السطور الخمسة التي ستظهر لك على الشاشة، خلال 30
            ثانية.</p>
    </div>

    <form
        id="test_form"
        method="post"
        action="{{($test->id+1 === 2)? route('result'): route('object.test', [$test->id+1, $sample])}}"
        x-show="!show"
        x-data="{ countdown: 30 }">
        @method('get')
        @csrf
        <canvas id="canvas" class="w-full h-full absolute top-0 right-0 z-50"></canvas>
        <img src="{{asset('images/'.$test->session_name.'.svg')}}" class="w-full h-full absolute top-0 right-0" alt="">
        <button id="submit_btn" hidden type="submit"></button>
    </form>

    </body>
</x-head>
