<x-relationshipmanager-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Investent Ideas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


    <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Investmant Ideas</th>
                <!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Abstract</th> -->
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Risk Rating</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Product Type </th>
                <!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Instruments</th> -->
                <!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Currency</th> -->
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Major Sector</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @foreach($investmantideas as $row)
            <tr class="bg-gray-100 border border-grey-500 md:border-none block md:table-row border-separate border-spacing-2">

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->investmant_idea }}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->risk }}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->product }}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> {{ $row ->sector }}</td>

                <!-- <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                    <a href="{{ route('admin.posts.edit',$row->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</x-relationshipmanager-layout>
