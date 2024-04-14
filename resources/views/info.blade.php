@extends('layouts.app')
@section('content')

    <div class="w-5/6 flex items-center my-20 mx-auto justify-between">
        <img src="{{asset('images/logo_bg.png')}}"
             alt="bg"
             class="w-1/2 -z-50"/>

        <form class="w-2/5 shadow-2xl shadow-[#6E65E8]/10 p-10 rounded-3xl content-center"
              method="POST" action="{{ route('object.store') }}"
              translate="yes"
              novalidate>
            @method("post") @csrf
            <h1 class="font-bold text-2xl text-center mb-16">البيانات الشخصية</h1>
            <x-text-input id="name"
                          class="block mt-1 w-full my-16"
                          value="{{(old('name'))?old('name'):null}}"
                          type="text"
                          name="name"
                          placeholder="{{__('extra.name_optional')}}"/>

            <div class="flex my-16">
                <div class="flex justify-between w-full tracking-wide">
                    <label class="font-semibold ml-5">{{__('extra.gender')}}</label>
                    <div>
                        <input type="radio"
                               id="female"
                               name="gender"
                               value="female"
                        >
                        <label for="female"
                               class="mr-1 ml-5">{{__('extra.female')}}</label></div>
                    <div>
                        <input type="radio"
                               id="male"
                               name="gender"
                               value="male">
                        <label for="male"
                               class="mr-1">{{__('extra.male')}}</label>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('gender')"
                               class="absolute mt-8"/>
            </div>

            <div class="flex justify-between">
                <div class="flex w-2/6">
                    <x-text-input id="age"
                                  name="age"
                                  value="{{(old('age'))?old('age'):null}}"
                                  class="block w-full"
                                  required
                                  type="number"
                                  min="1" max="100"
                                  step="1"
                                  placeholder="{{__('extra.age')}}"/>

                    <x-input-error :messages="$errors->get('age')"
                                   class="absolute my-14"/>
                </div>

                <div class="w-3/6">
                    <x-primary-button class="w-full flex justify-between font-medium">
                        {{__('extra.')}}
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-1/5 fill-white">
                            <title/>
                            <g data-name="Layer 2" id="Layer_2">
                                <path
                                    d="M10.1,23a1,1,0,0,0,0-1.41L5.5,17H29.05a1,1,0,0,0,0-2H5.53l4.57-4.57A1,1,0,0,0,8.68,9L2.32,15.37a.9.9,0,0,0,0,1.27L8.68,23A1,1,0,0,0,10.1,23Z"/>
                            </g>
                        </svg>
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
@endsection
