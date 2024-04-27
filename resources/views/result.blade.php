@extends('layouts.app')
@section('content')
    <div
        class="w-3/5 my-5 mx-auto grid gap-10 shadow-2xl shadow-[#6D6AB1]/10 p-10 rounded-3xl content-center text-center transition ease-in-out delay-150">
        <h1 class="font-extrabold text-4xl">{{__('extra.result')}}</h1>
        <div role="status" id="spinner">
            <svg aria-hidden="true" class="inline w-10 h-10 text-gray-200 animate-spin fill-[#6D6AB1]"
                 viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="currentColor"/>
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentFill"/>
            </svg>
        </div>
        <div id="result" class="my-10"></div>

    </div>

    <div class="mx-auto w-3/5 p-5 flex justify-between items-center">
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
            <span class="text-[#6D6AB1] font-bold">
                {{__('extra.Nabeeh')}}
            </span>
            {{__('extra.note')}}
        </h1>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var attempts = 0; // Counter to keep track of polling attempts

            function pollResults() {
                $.ajax({
                    url: '{{ route("fetch-results") }}',
                    type: 'GET',
                    timeout: 300000,
                    success: function (data) {
                        console.log(data);
                        $('#spinner').hide();
                        $('#result').html(`
                    <x-result width=${data.prop} value=${data.value}></x-result>
                `).show();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log('ERRROOOOR');
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);

                        attempts++;

                        if (attempts < 3) { // If attempts are less than 3, retry polling after 1:30 minutes
                            setTimeout(pollResults, 90000); // 1:30 minutes in milliseconds
                        } else {
                            $('#spinner').hide();
                            var errorResponse = jqXHR.responseJSON; // Get JSON response if available
                            var errorMessage = errorResponse ? errorResponse.error : textStatus; // Use server-provided message if available
                            $('#result').html(`
                        <h1 class="font-extrabold text-4xl">خطـــــــأ</h1>
                        <h1 class="font-medium text-2xl">نعتذر، حدث خطأ أثناء معالجة البيانات: ${errorMessage}</h1>
                        <a href="{{route('welcome')}}" class="phones:hidden">
                            <x-primary-button class="w-full font-semibold">
                            {{ __('العودة للصفحة الرئيسية') }}
                            </x-primary-button>
                        </a>
                    `).show();
                            console.error('AJAX Error: ', textStatus, errorThrown);
                        }
                    }
                });
            }

            // Initial polling call
            pollResults();
        });
    </script>
@endsection
