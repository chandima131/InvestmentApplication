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
                                    <div class="rounded-full">
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
                                        action="{{ route('relationshipmanager.relationshipmanagerlogin') }}">
                                        @csrf
                                        <div class="flex">
                                            <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer  "
                                                for="inlineRadio2">Gender :</label>
                                            <div class="flex justify-center  ml-5">

                                                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                                    <input
                                                        class="relative float-left mt-0.5 mr-1 -ml-[1.5rem] h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 dark:border-neutral-600 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary dark:checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary dark:checked:after:border-primary dark:checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary dark:checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                                                        type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                        value="option1" />
                                                    <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                        for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                                    <input
                                                        class="relative float-left mt-0.5 mr-1 -ml-[1.5rem] h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 dark:border-neutral-600 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary dark:checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary dark:checked:after:border-primary dark:checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary dark:checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                                                        type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                                        value="option2" />
                                                    <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                        for="inlineRadio2">Female</label>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Email Address -->
                                        <div>
                                            <x-label for="Date" :value="__('Date of Birth')" />

                                            <x-input id="date" class="block mt-1 w-full" type="date"
                                                name="date" :value="old('DOB')" required autofocus />
                                        </div>
                                        <!-- Email Address -->
                                        <div>
                                            <x-label for="Address" :value="__('Address')" />

                                            <textarea id="Address" class="block mt-1 w-full" name="Address"
                                                :value="old('address')" required autofocus ></textarea>
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
