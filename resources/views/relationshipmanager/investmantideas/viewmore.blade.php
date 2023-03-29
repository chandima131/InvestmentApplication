<x-relationshipmanager-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Investent Ideas
        </h2>
    </x-slot> -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


    <section id="interface">
        <h3 class="i-name"> &nbsp More Investment Details </h3>
        <br><br>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Investment Idea</label>
                    <input type="text" class="form-control" id="title" placeholder="{{$investmantideas->investmant_idea}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="{{$investmantideas->author}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Abstract</label>
                <textarea class="form-control" id="abstract" placeholder="{{$investmantideas->abstract}}" rows="5"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Risk Rating</label>
                    <input type="text" class="form-control" id="risk_rate" placeholder="{{$investmantideas->risk}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Region</label>
                    <input type="text" class="form-control" id="region" placeholder="{{$investmantideas->region}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="{{$investmantideas->country}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Currency</label>
                    <input type="text" class="form-control" id="currancy" placeholder="{{$investmantideas->currency}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Major Sector</label>
                    <input type="text" class="form-control" id="major_sector" placeholder="{{$investmantideas->sector}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Minor Sector</label>
                    <input type="text" class="form-control" id="inor_sector" placeholder="{{$investmantideas->minor_sector}}">
                </div>
            </div>

        </form>

    </section>
</x-relationshipmanager-layout>
