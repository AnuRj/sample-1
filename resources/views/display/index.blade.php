@extends('layouts.app')

@section('content')
    <div class="container">
          
        <div class="card ">
            <div class="card-header">
                <select class="form-select" aria-label="Default select example" id="colors" onchange="change()">
                    <option value="" selected>Select Colour</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                </select>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control" id="myText" placeholder="" name="name" disabled>
                </div>
            </div>
           
        </div>     
    </div>


    <script>
        function change()
         {
            document.getElementById("myText").value = colors.value;

                if (colors.value == "Red")
                {
                 
                  document.getElementById("myText").style.color = "Red";
                }
                else if(colors.value == "Blue") 
                {
                  document.getElementById("myText").style.color = "Blue";
                }
                else if(colors.value == "Yellow") 
                {
                  document.getElementById("myText").style.color = "Yellow";
                }

                else
                {
                    document.getElementById("myText").style.color = "green";
                }
         }
    </script>
@endsection


