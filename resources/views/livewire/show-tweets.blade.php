<div>
    Show Tweets
    <p>{{$content}}</p>


    <form action="" method="post" wire:submit.prevent="create">
    @csrf
        <input type="text" name="content" id="content" wire:model="content">
        @error('content'){{$message}} @enderror
        <button type="submit">Criar Tweet</button>

    </form>


   <hr>

   @foreach($tweets as $tweet)
    
   {{$tweet->user->name }} -- {{$tweet->content}} 
  
   @if($tweet->likes->count())

     <a href="">Descurti</a><br>

     @else
     <a href="">Curti</a><br>
     @endif

   @endforeach
   
   <hr>
   <div>
        {{$tweets->links()}}
   </div>
</div>
