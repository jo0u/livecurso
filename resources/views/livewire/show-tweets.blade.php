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
    @if($tweet->user->profile_photo_path)
        <img src="{{url('storage/{$tweet->user->profile_photo_path}')}}" alt="{{$tweet->user->name }}">
    @else
    <img src="{{url('imgs/no-perfil.png')}}" alt=" {{$tweet->user->name }}">
    @endif


   {{$tweet->user->name }} -- {{$tweet->content}} 
  
   @if($tweet->likes->count())

   <a href="#" wire:click.prevent="unLike({{$tweet->id}})">Descurti</a><br>

     @else
     <a href="#" wire:click.prevent="like({{$tweet->id}})">Curti</a><br>
     @endif

   @endforeach
   
   <hr>
   <div>
        {{$tweets->links()}}
   </div>
</div>
