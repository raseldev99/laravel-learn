<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Personal Info') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between items-center py-2">
                            <a href="{{route('persons')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Back</a>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                <form action="{{route('add')}}" method="POST">
                                    @csrf
                                    <div class="overflow-hidden shadow sm:rounded-md">
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input value="{{old('name')}}" type="text" name="name" placeholder="Rasel" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('name')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                    <input value="{{old('email')}}" type="email" placeholder="rasel@info.com" name="email" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('email')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="profile-img" class="block text-sm font-medium text-gray-700">Profile pic url</label>
                                                    <input value="{{old('profile_img')}}" type="url" placeholder="https://profileImage.com/img.png" name="profile_img" id="profile-img"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('profile_img')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                        <option {{old('country') == "Bangladesh"? "selected":''}} value="Bangladesh">Banngladesh</option>
                                                        <option {{old('country') == "Canada"? "selected":''}} value="Canada">Canada</option>
                                                        <option {{old('country') == "India"? "selected":''}} value="India">India</option>
                                                        <option {{old('country') == "Brazil"? "selected":''}} value="Brazil">Brazil</option>
                                                        <option {{old('country') == "Argentina"? "selected":''}} value="Argentina">Argentina</option>
                                                        <option {{old('country') == "Mexico"? "selected":''}} value="Mexico">Mexico</option>
                                                    </select>
                                                    @error('country')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6">
                                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                                                    <input placeholder="fulgazi health complex, feni, feni, 3900" type="text" value="{{old('street_address')}}" name="street_address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('street_address')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                                    <input placeholder="Dhaka" value="{{old('city')}}" type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('city')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                    <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                                                    <input placeholder="Dhaka" value="{{old('region')}}" type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('region')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                                                    <input placeholder="5260" value="{{old('postal_code')}}" type="number" name="postal_code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    @error('postal_code')
                                                    <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
