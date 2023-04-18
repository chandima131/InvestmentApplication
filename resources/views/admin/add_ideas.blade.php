<x-admin-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @role('admin')
                {{ __('Admin Dashboard') }}
                <a href="{{ route('admin.admintest')}}" class="px-5 py-2 bg-green-400 text-white cursor-pointer">Link</a>
            @endrole

            @role('editor')
                {{ __('Editor Dashboard') }}
                <a href="{{ route('admin.editortest')}}" class="px-5 py-2 bg-green-400 text-white cursor-pointer">Link</a>
            @endrole


            {{-- check permission --}}
            @permission('add-post')
                <button type="button" class="px-5 py-2 bg-green-400 text-white">Add Post</button>
            @endpermission

            @permission('delete-post')
                <button type="button" class="px-5 py-2 bg-red-400 text-white">Delete Post</button>
            @endpermission

            <a href="{{ route('admin.posts.index') }}" class="px-5 py-2 bg-red-400 text-white">Posts</a>
        </h2>
    </x-slot> -->

<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{asset('js/form-validation.js')}}" ></script>





<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <section id="menu">
    <div class="sidebar">
        <section id="menu">
            <div class="items">
                <ul>
                    <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
</svg>
                    <a href="{{url('admin/dashboard')}}"> Dashboard </a> </li>
                    <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
                    <a href="{{ url('/admin/add_ideas')}}"> Add New Idea </a> </li>
                    <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
                    <a href="{{ url('/aboutus')}}"> About Us </a> </li>
                    <!-- <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>

                    <a href="#"> Settings </a> </li> -->
                </ul>
            </div>
    </div>
    </section>

    <section id="interface">
<h3 class="i-name"> &nbsp Add New Idea </h3>

<div class= "values">
    <div class="board">
    <h3> Please Enter Following Details </h3>
    <form method="POST" id="myForm" action="{{ route('admin.save') }} ">
    @csrf
    @method('put')

    <table class="add_ideas">
    <tr>
      <td>Title:</td>
      <td><input type="text" name="title" id="title" ></td>
    </tr>
    <tr>
      <td> Abstract: </td>
      <td><textarea name="abstract" id="abstract"> </textarea></td>
      <td> Created At: </td>
      <td> <input type="date" name="created" id="created"> </td>
    </tr>
    <tr>
      <td> Expiry Date: </td>
      <td> <input type="date" name="exp_date" id="exp_date"> </td>
      <!-- <td> Updated At: </td> -->
       <input type="date" name="updated" id="updated" hidden>
    </tr>
    <tr>
        <td> Content: </td>
        <td><textarea name="content" rows="5" cols="40" id="content"> </textarea></td>
    </tr>
    <tr>
        <td> Risk Rating Level: </td>
        <td> <select name="risk" id="risk">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </td>
        <td> Product Type: </td>
        <td> <input type="text" name="prod_type" id="prod_type">
        </td>
    </tr>
    <tr>
        <td> Instruments: </td>
        <td> <input type="text" name="instruments" id="instruments"> </td>
        <td> Currency: </td>
        <td> <input type="text" name="currency" id="currency"> </td>
    </tr>
    <tr>
        <td> Major Sector: </td>
        <td> <input type="text" name="maj_sector" id="maj_sector"> </td>
        <td> Minor Sector: </td>
        <td> <input type="text" name="min_sector" id="min_sector"> </td>
    </tr>
    <tr>
        <td> Region: </td>
        <td> <input type="text" name="region" id="region"> </td>
        <td> Country: </td>
        <td> <input type="text" name="country" id="country"> </td>
    </tr>
  </table>
  <br>
  &nbsp<input type="submit" name="btnSubmit" class ="button1" value="Add Idea">
</form>



    </div>
</div>


</section>



    </div>
</x-admin-layout>
