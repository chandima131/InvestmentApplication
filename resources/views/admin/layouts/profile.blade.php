<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6   border-b border-gray-200">
                    <div class="grid grid-flow-col gap-3">
                        <div class=" bg-white overflow-hidden shadow-sm sm:rounded-lg  col-span-2">
                            <div class="p-8">
                                <div>

                                </div>
                                <div class="flex items-center justify-center  ">
                                    <div class="rounded-full oiii">
                                        <img src={{ asset('images/so.jpg') }} alt="Your image description"
                                            class=" imground rounded-full">
                                    </div>
                                </div>
                                <div class=" ">
                                    <h1 class="nameh1">
                                        {{ Auth::user()->name }}
                                    </h1>
                                </div>

                            </div>

                        </div>
                        <div class=" bg-white    overflow-hidden shadow-sm sm:rounded-lg  col-span-4 ">
                            <div class="p-8">

                                <div class="p-8">
                                    <form method="POST"
                                        action="{{ route('relationshipmanager.Register_update', Auth::user()->id) }}">
                                        @csrf
                                        <div>
                                            <x-label for="name" :value="__('name')" />
                                            <x-input id="name" class="block mt-1 w-full" type="text"
                                                name="name" :value="old('name')" required autofocus />

                                        </div>
                                        <div>
                                            <x-label for="email" :value="__('email')" />
                                            <x-input id="email" class="block mt-1 w-full" type="text"
                                                name="email" :value="old('email')" required autofocus />

                                        </div>
                                        <div>
                                            <x-label for="address" :value="__('address')" />
                                            <x-input id="address" class="block mt-1 w-full" type="text"
                                                name="address" :value="old('address')" required autofocus />

                                        </div>
                                        <div>
                                            <x-label for="age" :value="__('age')" />

                                            <x-input id="age" class="block mt-1 w-full" type="text"
                                                name="age" :value="old('age')" required autofocus />

                                        </div>
                                        <div class="transititext-primary" data-te-toggle="tooltip"
                                         title="You can rank Risk using different levels, such as level 1 and level 2....">

                                            <x-label for="risk_rate" :value="__('risk_rate')" />


                                            <x-input id="risk_rate" class="block mt-1 w-full" type="text"
                                                name="risk_rate" :value="old('risk_rate')" required autofocus />

                                        </div>
                                        <div   class="transititext-primary" data-te-toggle="tooltip"
                                         title="Add interested product type such as Equity, Structured Products">
                                            <x-label for="preferred_product" :value="__('preferred_product')" />

                                            <x-input id="preferred_product" class="block mt-1 w-full" type="text"
                                                name="preferred_product" :value="old('preferred_product')" required autofocus />

                                        </div>
                

                                        <x-button class="mt-3">
                                            {{ __('Update profile') }}
                                        </x-button>
                                </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
