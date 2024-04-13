
@extends('layouts.app')
@section('content')
<div id="spinner" class="w-3/5 my-5 mx-auto grid grid-rows-3 gap-16 shadow-2xl shadow-[#6D6AB1]/10 p-10 rounded-3xl content-center text-center">
    <h1 class="font-extrabold text-4xl">النتيجــــــــة</h1>
    <div class="d-flex justify-content-center">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div id="result" class="w-3/5 my-5 mx-auto grid grid-rows-3 gap-16 shadow-2xl shadow-[#6D6AB1]/10 p-10 rounded-3xl content-center text-center" style="display: none;">
    <!-- Results will be populated here via JavaScript -->
</div>

    <div class="mx-auto w-3/5 p-10 flex justify-between items-center">
        <svg class="w-1/12"
             data-name="Layer 1"
             id="Layer_1"
             viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"
                fill="#6D6AB1"/>
        </svg>
        <h1 class="font-medium w-5/6 tracking-wide text-justify">
                <span
                    class="text-[#6D6AB1] font-bold">
                    نَبِيـــه
                </span>
            هو أداة مساعدة
            للتشخيص
            ولا
            يمكن
            الاعتماد
            عليه لوحده
            لإثبات
            تشخيص الاصابة بالاضطراب،
            إذا كان التقييم ايجابيًا ننصحك بزيارة مختص في العيادة النفسية للاطمئنان واتخاذ
            الاجراء اللازم.</h1>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $.ajax({
    url: '{{ route("fetch-results") }}',
    type: 'GET',
    success: function(data) {
        console.log(data);
        $('#spinner').hide();
        // success logic here
        if (data.result === 'ADHD') {
                $('#result').html(`
                    <h1 class="font-extrabold text-4xl">النتيجــــــــة</h1>
                    <h1 class="font-extrabold text-6xl text-[#6D6AB1]">ADHD</h1>
                    <h1 class="font-medium text-2xl">التقييم الأولي يشير الى ان احتمالية اصابتك بـADHD عالية ${data.probability}%</h1>
                `).show();
            } else {
                $('#result').html(`
                    <h1 class="font-extrabold text-4xl">النتيجــــــــة</h1>
                    <h1 class="font-medium text-2xl">التقييم الأولي يشير الى ان احتمالية اصابتك بـADHD منخفضة ${data.probability}%</h1>
                `).show();
            }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        $('#spinner').hide();
        console.error('AJAX Error: ', textStatus, errorThrown);
        $('#result').html('<h1>Error occurred while fetching data: ' + errorThrown + '</h1>').show();
    }
});
});
</script>

@endsection
