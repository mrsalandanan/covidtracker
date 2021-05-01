<x-app-layout>
    <x-slot name="header">
        <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <img src="images1/corona_icon.png" alt=""/>
            </a>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Patient
        </h2>
    </x-slot>
    <link href="css3/app.css" rel="stylesheet">
    <style>
        .buttons {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            text-align: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            /*   padding: 2em 0em; */
        }

        .btn {
            letter-spacing: 0.1em;
            cursor: pointer;
            font-size: 14px;
            font-weight: 400;
            line-height: 45px;
            max-width: 160px;
            position: relative;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
        }
        .btn:hover {
            text-decoration: none;
        }

        /*btn_background*/
        .effect01 {
            color: #FFF;
            border: 4px solid #000;
            box-shadow:0px 0px 0px 1px #000 inset;
            background-color: #000;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease-in-out;
        }
        .effect01:hover {
            border: 4px solid #666;
            background-color: #FFF;
            box-shadow:0px 0px 0px 4px #EEE inset;
        }

        /*btn_text*/
        .effect01 span {
            transition: all 0.2s ease-out;
            z-index: 2;
        }
        .effect01:hover span{
            letter-spacing: 0.13em;
            color: #333;
        }

        /*highlight*/
        .effect01:after {
            background: #FFF;
            border: 0px solid #000;
            content: "";
            height: 155px;
            left: -75px;
            opacity: .8;
            position: absolute;
            top: -50px;
            -webkit-transform: rotate(35deg);
            transform: rotate(35deg);
            width: 50px;
            transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
            z-index: 1;
        }
        .effect01:hover:after {
            background: #FFF;
            border: 20px solid #000;
            opacity: 0;
            left: 120%;
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
        }
    </style>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Patient Information
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Personal details and status.
                    </p>
                </div>
                <form method="post" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="firstname" class="block font-medium text-sm text-gray-700">First Name</label>
                            <input type="text" name="firstname" id="firstname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('firstname', '') }}" />
                            @error('firstname')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="lastname" class="block font-medium text-sm text-gray-700">Last Name</label>
                            <input type="text" name="lastname" id="lastname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('lastname', '') }}" />
                            @error('lastname')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="age" class="block font-medium text-sm text-gray-700">Age</label>
                            <input type="number" name="age" id="age" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('age', '') }}" />
                            @error('age')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                            <input type="text" name="address" id="address" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('address', '') }}" />
                            @error('address')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="symptoms" class="block font-medium text-sm text-gray-700">Symptoms</label>
                            <select class="form-control mb-3" name="symptoms" id="status"  >
                                <option selected>Select Status</option>
                                <option {{old('symptoms','')=="Asymptomatic"? 'selected':''}}  value="Asymptomatic">Asymptomatic</option>
                                <option {{old('symptoms','')=="Symptomatic"? 'selected':''}} value="Symptomatic">Symptomatic</option>
                            </select>
                            @error('symptoms')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                                <select name="status" id="status" class="form-control mb-3">
                                    <option selected>Select Status</option>
                                <option {{old('status','')=="Active"? 'selected':''}}  value="Active">Active</option>
                                <option {{old('status','')=="Recovered"? 'selected':''}} value="Recovered">Recovered</option>
                                    <option {{old('status','')=="Deceased"? 'selected':''}} value="Deceased">Deceased</option>
                            </select>
                            @error('status')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                                </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <div class="buttons">
                                <button class="btn effect01" target="_blank">
                                    Create
                                </button>&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('tasks.index') }}" class="btn effect01" target="_blank"><span>Cancel</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
