<x-relationshipmanager-layout>
    <!-- <x-slot name="header">

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
                            <a href="{{ route('relationshipmanager.dashboard') }}">Explore Clients Profiles & Assign </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                            </svg>

                            <a href="{{ route('relationshipmanager.investmantideas.index') }}"> Accepted Investment Ideas </a>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <a href="{{ route('relationshipmanager.suggested') }}"> Explore Suggested Investment Ideas </a>
                        </li>

                        <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>

                            <a href="{{ route('relationshipmanager.clientsSummary') }}">View Client & Investment Ideas Summary </a>
                        </li>
                    </ul>
                </div>
        </div>
    </section>

    <section id="interface">
        <h3 class="i-name"> &nbsp View Idea </h3>

        <div class="values">
            <div class="board">
                <h3> Detailed View </h3>
                <form method="GET" action="{{route('admin.view',$investmantideas->id)}}">
                    @csrf
                    @method('put')
                    <table class="add_ideas">
                        <tr>
                            <td>Title:</td>
                            <td><input type="text" name="title" id="title" value="{{ $investmantideas->investmant_idea}}" disabled></td>
                        </tr>
                        <tr>
                            <td>Abstract:</td>
                            <td><textarea name="abstract" id="abstract" disabled> {{$investmantideas->abstract}} </textarea></td>
                            <td> Expiry Date: </td>
                            <td> <input type="date" name="exp_date" id="exp_date" value="{{ date('Y-m-d', strtotime($investmantideas->expire_at)) }}" disabled> </td>
                        </tr>
                        <tr>
                            <td>Created At:</td>
                            <td><input type="date" name="created" id="created" value="{{ date('Y-m-d', strtotime($investmantideas->created_at)) }}" disabled> </td>
                            <td> Updated At: </td>
                            <td> <input type="date" name="updated" id="upd_date" value="{{ date('Y-m-d', strtotime($investmantideas->updated_at)) }}" disabled> </td>
                        </tr>
                        <tr>
                            <td> Content: </td>
                            <td><textarea name="content" rows="5" cols="40" id="content" disabled> {{ $investmantideas->content}}</textarea></td>
                        </tr>
                        <tr>
                            <td> Risk Rating Level: </td>
                            <td> <select name="risk" id="risk" disabled>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </td>
                            <td> Product Type: </td>
                            <td> <input type="text" name="prod_type" id="prod_type" value="{{ $investmantideas-> product}}" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td> Instruments: </td>
                            <td> <input type="text" name="instruments" id="instruments" value="{{ $investmantideas->instruments}}" disabled> </td>
                            <td> Currency: </td>
                            <td> <input type="text" name="currency" id="currency" value="{{ $investmantideas->Currency}}" disabled> </td>
                        </tr>
                        <tr>
                            <td> Major Sector: </td>
                            <td> <input type="text" name="maj_sector" id="maj_sector" value="{{ $investmantideas->Major_Sector}}" disabled> </td>
                            <td> Minor Sector: </td>
                            <td> <input type="text" name="min_sector" id="min_sector" value="{{ $investmantideas->Minor_Sector}}" disabled> </td>
                        </tr>
                        <tr>
                            <td> Region: </td>
                            <td> <input type="text" name="region" id="region" value="{{ $investmantideas->Region}}" disabled> </td>
                            <td> Country: </td>
                            <td> <input type="text" name="country" id="country" value="{{ $investmantideas->Country}}" disabled> </td>
                        </tr>
                    </table>
                    <br>
                    <!-- &nbsp<input type="submit" class ="button1" value="Submit"> -->
                </form>



            </div>
        </div>


    </section>



    </div>

</x-relationshipmanager-layout>
