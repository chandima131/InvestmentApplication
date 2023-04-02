<x-relationshipmanager-layout>

    <x-slot name="header">
            @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session()->get('delete')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <section id="menu">
        <div class="sidebar">
            <section id="menu">
                <div class="items">
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.dashboard') }}"> Dashboard </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.dashboard') }}">Explore Clients Profiles </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.investmantideas.index') }}"> Accepted Investment Ideas </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.suggested') }}"> Explore Suggested Investment Ideas </a>
                        </li>

                    </ul>
                </div>
        </div>
    </section>

    <section id="interface">
        <h3 class="i-name"> &nbsp Client's Details </h3>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2> Clients Information </h2>
                        <table class="min-w-full border-collapse block md:table">
                            <thead class="block md:table-header-group">
                                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Client Name</th>
                                    <!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Abstract</th> -->
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Age</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Preferred Product </th>
                                    <!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Instruments</th> -->
                                    <!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Currency</th> -->
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Risk Rate</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-1500 text-left block md:table-cell">Action</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-1500 text-left block md:table-cell">Delete Client</th>
                                </tr>
                            </thead>
                            <tbody class="block md:table-row-group">
                                @foreach($clients as $row)
                                <tr class="bg-gray-100 border border-grey-500 md:border-none block md:table-row border-separate border-spacing-2">

                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $row ->name}} </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $row ->email}}</td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->age }}</td>
                                   <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->preferred_product}}</td>

                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->risk_rate }}</td>
                                    <td class="p-2 md:border md:border-grey-1500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                                        <a href="{{ url('/relationshipmanager/edit/' . $row->client_id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Assign</a>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-1500 text-left block md:table-cell">
                                    <a href="{{ url('/relationshipmanager/delete/' . $row->client_id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    <script> </script>

    @endsection
</x-relationshipmanager-layout>
