<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Single View') }}
        </h2>
    </x-slot>
        <div class="">
            <div class="overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="flex justify-between items-center py-2">
                                <a href="{{route('persons')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Back</a>
                            </div>
                            <div class="text-center">
                                <img class="w-16 h-16 rounded-full mx-auto block" src="{{$person->image_url}}" alt="Profile img">

                                <h1 class="text-gray-700 font-medium text-2xl py-2">{{$person->name}}</h1>
                            </div>
                            <div>
                                <p class="text-gray-500 text-lg py-1"><span>Email : </span>{{$person->email}}</p>
                                <p class="text-gray-500 text-lg py-1"><span>Country : </span>{{$person->country}}</p>
                                <p class="text-gray-500 text-lg py-1"><span>Street Adresss : </span>{{$person->street_address}}</p>
                                <p class="text-gray-500 text-lg py-1"><span>City : </span>{{$person->city}}</p>
                                <p class="text-gray-500 text-lg py-1"><span>Region : </span>{{$person->state}}</p>
                                <p class="text-gray-500 text-lg py-1"><span>Postal Code : </span>{{$person->post_code}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
