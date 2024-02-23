<x-app-layout session_name="none">
    <table class="w-full divide-y divide-gray-200 overflow-x-auto mt-16 mx-auto">
        <thead class="bg-gray-50 border-b-2 border-b-[#6D6AB1] font-semibold text-sm text-right  text-gray-500">
        <tr>
            <th scope="col" class="px-6 py-3">
                اسم العينة
            </th>
            <th scope="col" class="px-6 py-3">
                اسم المشرف
            </th>
            <th scope="col" class="px-6 py-3">
                التشخيص
            </th>
            <th scope="col" class="px-6 py-3">
                التاريخ
            </th>
            <th scope="col" class="px-6 py-3">
                الوقت
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($samples as $sample)
            <tr class="text-sm">
                <td class="px-6 py-4">
                    {{$sample->name}}
                </td>
                <td class="px-6 py-4">
                    {{$sample->supervisor_name}}
                </td>
                <td class="px-6 py-4">
                <span
                    class="px-4 py-1.5 font-semibold rounded-full {{($sample->type == 'ADHD') ? 'bg-[#6D6AB1]/50' : 'bg-gray-200'}}">
                    {{$sample->type}}
                </span>
                </td>
                <td class="px-6 py-4">
                    {{$sample->created_at->format(('d-m-Y'))}}
                </td>
                <td class="px-6 py-4">
                    {{$sample->created_at->format(('H:i'))}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('object.create')}}">
        @method('get')
        <div class="flex mx-auto my-5">
            <svg class="fill-[#6D6AB1] my-auto" height="35" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h48v48H0z" fill="none"/>
                <path
                    d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm10 22h-8v8h-4v-8h-8v-4h8v-8h4v8h8v4z"/>
            </svg>

            <h1 class="my-auto mx-2 font-semibold">عينة جديدة</h1>
        </div>
    </a>

    <div class="w-fit mx-auto mt-10">
        {{$samples->links('pagination::tailwind-arabic')}}
    </div>

    @if(session()->has('done'))
        <div x-data="{show: true}"
             x-init="setTimeout(() => show = false, 5000)"
             x-show="show"
             class="w-1/4 absolute bottom-5 left-5 bg-[#6E65E8] rounded-md p-2 text-center font-medium text-white">
            <p> لقد تم جمــــع العينـــــة بنجــاح
                <span class="font-semibold">, شكرًا لمساهمتك</span></p>
        </div>
    @endif
</x-app-layout>
