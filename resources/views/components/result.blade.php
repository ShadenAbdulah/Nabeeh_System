@props(['value', 'width'])
{{--<div class="my-10">--}}
<div class="w-3/5 tracking-wider font-medium mx-auto text-xl mb-20">
    {{__('extra.initial_evaluation')}}
</div>

<div class="w-4/5 mx-auto">
    <div class="w-full bg-gray-200 rounded-full h-3">
        <div id="progressBar"
             class="bg-[#6D6AB1] h-3 rounded-full relative transition-all ease-out duration-700"
             style="width: {{$width}}%;"> <!-- Initially set to 0% -->
            <div class="absolute z-50 w-6 h-6 rounded-full bg-[#6D6AB1] left-0 -bottom-1.5">
                <h1 id="status"
                    class="absolute top-10 -right-5 font-semibold tracking-wider">
                    {{$value}}
                </h1>
            </div>
        </div>
    </div>
</div>
{{--</div>--}}



