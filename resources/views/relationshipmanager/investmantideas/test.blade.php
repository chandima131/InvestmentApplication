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
            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">

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
