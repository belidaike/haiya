@extends('base')

@section('content')

<br>
<div class="idk">
  <div class="roar">
    <h1>Welcome to Earth!</h1>
    <h5>This is where earthians live!</h5>
    <br>
    <p>In this enermous time, Earthians haven't travel across universe due to having limited brain cells.</p>
  </div>
</div>



<h1 class="text-center text-white">Users</h1>


  <div class="row">
  @foreach($users as $user)

                
            <div class="d-flex justify-content-center color">
                @if($user['gender'] == 'male')

                  <div class="male">
                    <div>{{ $user['fname'] }}</div>
                    <div>{{ $user['gender'] }}</div>
                  </div>

                  @else

                  <div class="female">
                    <div>{{ $user['fname'] }}</div>
                    <div>{{ $user['gender'] }}</div>
                  </div>

                  @endif
                </div>



        @endforeach
  </div>



<style scoped>

  .idk {
    color: white;
  }
  .roar {
    margin-top: 90px;
    text-align: center;
  }
  .color{
    color: white;
  }
  .male{
    background-color: #01A6EA;
    border-radius: 50%;
    padding: 10px;
  }
  .female{
    background-color: #FFB1CB;
    padding: 10px;
    color: black;
    border-radius: 50%;
  }

</style>
@endsection
