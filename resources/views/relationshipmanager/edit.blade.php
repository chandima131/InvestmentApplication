<x-relationshipmanager-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Assign Investment Idea
        </h2>
    </x-slot>

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

                        <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Assign Suggestion</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</x-relationshipmanager-layout>
