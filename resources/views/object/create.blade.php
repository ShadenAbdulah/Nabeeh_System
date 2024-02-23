<x-head session_name="none">
    <body class="font-[Tajawal] bg-gray-50/50">
    <img src="{{asset('images/Logo.svg')}}" class="w-1/6 mx-auto p-8 my-5">
    <div class="w-5/6 mx-auto shadow-2xl shadow-[#6E65E8]/10 p-5 rounded-3xl bg-white">
        <div class="my-10 w-3/4 mx-auto">

            <form method="POST" action="{{ route('object.store') }}" x-data="{ another_dis: false }">
                @csrf

                <h1 class="font-bold text-2xl text-center mb-16">بيانــات العينــة</h1>

                <div class="flex">
                    <x-text-input id="name" class="block mt-1 w-3/4" type="text" name="name"
                                  placeholder="الاســم" :value="old('name')" value="nabeeh"/>
                    <x-input-error :messages="($errors->get('name'))?'ادخل الاسم!':''"
                                   class="absolute my-14"/>

                    <select id="age" name="age"
                            :value="old('age')"
                            class="border-gray-300 rounded-md shadow-sm mr-5 h-fit my-auto text-center w-1/4"
                            x-data="{show: false}">

                        <option selected disabled>العمــر</option>
                        @for($i=6; $i<19; $i++)
                            <option>{{$i}}</option>
                        @endfor
                        <option @click="!show">
                            <span>أخرى</span>
                            <input type="number" placeholder="ادخل العمر" x-show="show"/>
                        </option>
                    </select>
                    <x-input-error :messages="($errors->get('age'))?'اختر العمر!':''"
                                   class="absolute my-14"/>
                </div>

                <div class="flex my-10 gap-36">
                    <div class="w-1/2">
                        <label class="font-semibold ml-5">الجنس</label>
                        <input type="radio" id="female" name="gender" value="أنثى" checked="checked">
                        <label for="female" class="mr-1 ml-5">أنثى</label>
                        <input type="radio" id="male" name="gender" value="ذكر">
                        <label for="female" class="mr-1">ذكر</label>
                    </div>
                    <x-input-error :messages="($errors->get('gender'))?'اختر الجنس!':''"
                                   class="absolute mt-8"/>

                    <div class="justify-items-end w-1/2">
                        <label class="font-semibold ml-5">نوع العينة</label>
                        <input type="radio" id="ADHD" name="type" value="ADHD" x-on:click="another_dis = true">
                        <label for="ADHD" class="mr-1 ml-5">مصاب</label>
                        <input type="radio" id="NADHD" name="type" value="NADHD" x-on:click="another_dis = false"
                               checked="checked">
                        <label for="NADHD" class="mr-1">غير مصاب</label>

                        <x-input-error :messages="($errors->get('type'))?'اختر النوع!':''"
                                       class="absolute mt-2"/>
                    </div>
                </div>


                <div class="flex my-10 gap-10" x-show="another_dis" x-data="{ name: false }">
                    <div class="w-1/2 my-auto">
                        <label class="font-semibold ml-5">هل لديه اضطراب أخر؟</label>
                        <input type="radio" id="yes" name="another_disorder" value="yes" x-on:click="name = true">
                        <label for="female" class="mr-1 ml-5">نعم</label>
                        <input type="radio" id="no" name="another_disorder" value="no" x-on:click="name = false">
                        <label for="female" class="mr-1">لا</label>
                    </div>
                    <x-input-error :messages="($errors->get('another_disorder'))?'اختر!':''"
                                   class="absolute mt-14"/>

                    <x-text-input id="another_disorder_name" class="my-auto w-1/2" type="text"
                                  x-show="name"
                                  name="another_disorder_name"
                                  placeholder="اسم الاضطراب"/>

                    <x-input-error :messages="($errors->get('another_disorder_name'))?'اكتب اسم الاضطراب الأخر!':''"
                                   class="absolute mt-14"/>
                </div>


                <div class="flex gap-5 mt-20">
                    <x-text-input id="supervisor_name" class="block mt-1 w-2/3" type="text"
                                  name="supervisor_name"
                                  :value="old('supervisor_name')"
                                  value="Me"
                                  placeholder="اسم المشرف"/>
                    <x-input-error :messages="($errors->get('supervisor_name'))?'اكتب اسم المشرف!':''"
                                   class="absolute mt-14"/>

                    <x-primary-button class="my-auto w-1/3">
                        {{ __('بدء التدريـــب') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    </body>
</x-head>
