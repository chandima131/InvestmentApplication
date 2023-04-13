<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('What part does this edit?') }}
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
                            <a href="dashboard"> Dashboard </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <a href="#"> Explore </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <a href="/assigned"> Assigned </a>
                    </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <a href="#"> Account </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <a href="{{ url('/aboutus') }}"> About Us </a>
                        </li>
                    </ul>
                </div>
        </div>
    </section>

    <section id="interface">
        <h3 class="i-name"> &nbsp Client Dashboard </h3>
         <div class="values">



            <div class="board">
                <h3> Assigned Investment Idea </h3>
                <table width="100%">
                    <thead>
                        <tr>
                            <td> Investment Idea </td>
                            <td> Abstract </td>
                            <td> Risk Rating Level</td>
                            <td> Product type </td>
                            <td> Major Sector </td>
                            <td> Status </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ideas as $row)

                        <tr>
                            <td> {{$row ->investmant_idea}}</td>
                            <td> {{$row ->abstract}}
                            </td>
                            <td> {{$row ->risk}}
                            </td>
                            <td> {{$row ->product}} </td>
                            <td>  {{$row ->instruments}} </td>
                            <td>  <button class="Assigned">
                                Assigned
                                </button> </td>

                         </tr>
                        @endforeach


                </table>
            </div>
            {{-- <div class="board">
                <h3> Accpted Investment Idea </h3>
                <table width="100%">
                    <thead>
                        <tr>
                            <td> Investment Idea </td>
                            <td> Abstract </td>
                            <td> Risk Rating </td>
                            <td> Product type </td>
                            <td> Major Sector </td>
                            <td> Status </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Biotech</td>
                            <td> The global biotechnology market size was estimated at USD 1,023.92 billion in 2021 and is expected to grow at a compound annual
                                growth rate (CAGR) of 13.9% from 2022 to 2030, reaching $2.44 trillion by 2028, recording a compound annual growth rate of 7.4%.
                                The market is driven by strong government support through initiatives aimed at modernization of regulatory framework,
                                improvements in approval processes & reimbursement policies, as well as standardization of clinical studies.
                            </td>
                            <td> 3 - Suitable for moderate investors </td>
                            <td> Equity </td>
                            <td> Healthcare </td>
                            <td class="status"> Accepted </td>
                        </tr>
                        <tr>

                </table>
            </div> --}}
        </div>
     </section>
    </div>
    </section>


    <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            What part is this?
                <div class="p-6 bg-white border-b border-gray-200">
                    What New Can I Do right here?
                </div>
            </div>
     </div> -->
</x-app-layout>
