@extends('/layouts/layout')
@section('content')
                @foreach($personal as $rdata)
                <div class="pdata">
                    <label for="fname" class="ptext">Name</label>
                    <p class="sdata">{{'$rdata->firstname'}} {{'$rdata->lastname'}}</p>
                    
                    <label for="img" class="ptext">Image</label>
                    <p class="sdata">{{'$rdata->image'}}</p>
                   
                    <label for="game" class="ptext">Game</label>
                    <p class="sdata">{{'$rdata->game'}}</p>
        
                    <label for="skill" class="ptext">Skills</label>
                    <p class="sdata">{{'$rdata->skills'}}</p>

                    <label for="rank" class="ptext">Rank</label>
                    <p class="sdata">{{'$rdata->rank'}}</p>
                </div>
 @endsection 