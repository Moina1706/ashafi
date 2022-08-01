@extends('layouts.home')
@section('content')
    <div class="mt-5 ">
        <h2 class="text-center">Demande Information</h2>
        <div class="mt-5 d-flex justify-content-center">

            <form action="/action_page.php">
                <label for="fname">Nom:</label><br>
                <input type="text" id="fname" name="fname" value=""><br>
                <label for="lname">Email:</label><br>
                <input type="text" id="email" name="lname"><br><br>
                <label for="lname">Information:</label><br>
                <!--<input type="textarea" id="info" name="lname" value=""><br><br>-->
                <textarea name="lname" id="info" cols="30" rows="10"></textarea><br><br>
                <input type="submit" value="Submit"><br><br><br><br><br><br>
            </form>
        </div>
    </div>
@endsection
