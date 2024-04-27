<x-head
    session_name="{{$user->id.'/train'}}"
    user_id="{{$user->id}}"
    test_id="none">

    @dd($test)

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

        <h1 class="font-semibold">{{__('extra.Pre')}}</h1>
        <p class="font-medium text-justify">{{__('extra.Pre_content')}}</p>
    </div>

    <div x-show="!show">
        <img src="{{asset('images/train.png')}}" class="mt-10">
        <canvas id="canvas" class="w-full h-full absolute top-0 right-0"></canvas>
        <form method="post" action="{{route('user.test', [$test, $user])}}"
              id="submit_form"
              class="w-1/6 grid justify-items-end top-10 left-10 absolute"
              x-data="{countdown: 320}">
            @method('get')
            @csrf
            <x-primary-button class="w-full" type="submit" id="submit_btn">
                {{ __('extra.start_test') }}
            </x-primary-button>
        </form>
    </div>
    </body>
</x-head>
