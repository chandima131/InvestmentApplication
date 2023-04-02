<x-relationshipmanager-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Assign Investment Idea
        </h2>
    </x-slot> -->

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <section id="menu">
        <div class="sidebar">
            <section id="menu">
                <div class="items">
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.investmantideas.index') }}"> Dashboard </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.dashboard') }}">Explore Clients Profiles </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.suggested') }}"> Explore Investment Ideas </a>
                        </li>

                    </ul>
                </div>
        </div>
    </section>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('relationshipmanager.update',$clients->client_id) }}">
                        @csrf
                        @method('put')

                        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Profile Details</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Name: </b>{{$clients->name}}</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Age: </b>{{$clients->age}}</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Risk rate: </b>{{$clients->risk_rate}}</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Gender: </b>Female</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Location: </b>Asia</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Interest Products: </b>Equity, Structured Products</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Interest Currency: </b>USD, Euro</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400"><b>Already Accepted Investment Ideas: </b>Biotech</p>
                        </a>
                        <div class="flex-col flex py-3">
                            <label class="pb-2 text-gray-700 font-semibold">Investment Suggestion </label>
                            <select id="id" name="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose a Investment Idea for the Client</option>
                                @foreach($investmantideas as $row)
                                <option value="{{$row->id}}">{{$row->investmant_idea}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex-col flex py-3">
                            <label class="pb-2 text-gray-700 font-semibold">Give More Investment Suggestions </label>
                            <!-- <select id="id" name="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose More Investment Ideas for the Client</option>
                                @foreach($investmantideas as $row)
                                <option value="{{$row->id}}">{{$row->investmant_idea}}</option>
                                @endforeach
                            </select> -->
                        </div>

                        <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Assign Suggestion</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</x-relationshipmanager-layout>
