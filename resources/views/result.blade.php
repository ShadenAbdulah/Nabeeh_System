
@extends('layouts.app')
@section('content')
<div id="spinner" class="w-3/5 my-5 mx-auto grid grid-rows-3 gap-16 shadow-2xl shadow-[#6D6AB1]/10 p-10 rounded-3xl content-center text-center">
    <h1 class="font-extrabold text-4xl">النتيجــــــــة</h1>
    <div role="status">
    <svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-purple-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
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
            if (data.error) {
                $('#result').html(`<h1 class="font-extrabold text-4xl">خطـــــــأ</h1>
                                   <h1 class="font-medium text-2xl">نعتذر حدث خطأ اثناء معالجة البيانات: ${data.error}</h1>`).show();
            } else if (data.result === 'ADHD') {
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
            $('#result').html(`<h1 class="font-extrabold text-4xl">خطـــــــأ</h1>
                               <h1 class="font-medium text-2xl">Error occurred while fetching data: ${errorThrown}</h1>`).show();
        }
    });
});

</script>

@endsection
