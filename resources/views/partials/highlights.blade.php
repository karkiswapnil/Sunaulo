
<div class="col-8" >
  @php
    $i=0;
  @endphp
  @foreach($articles as $article)
  @if($i<=2) 
  <h2 class="box_header_title">
  @if(!empty($article->video_url))
  @php
    $url = $article->video_url;
      preg_match(
              '/[\\?\\&]v=([^\\?\\&]+)/',
              $url,
              $matches
          );
      $id = $matches[1];
       
      
      echo '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $id . '"frameborder="0" allowfullscreen class="vid1"></iframe>';
  @endphp
  @endif<br>
  <a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a> </h2>
  @endif  
  @php
    $i=$i+1;
  @endphp
  @endforeach
</div>

<div class="col-3 right" style="padding-top: 10px;">
 <div>
    <h4 class="box_header"> खुल्दुली </h4>
    <ul id="special">
    	

    </ul>

 </div>
</div>
