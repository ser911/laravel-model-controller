  <style>
.db-title{

}
.content{
    display: flex;
    padding-left: 40px;
    background-color: #325288;

}
h3{
 color:snow;
}
ul{
    padding: 10px 20px 10px 0;
}
ul li{
    list-style-type: none;
    color: #f55c47;
}

  </style>
  
  <div class="content">


  <div class="db-title">
                <h3>Title</h3>
                @foreach ($movies as $movie)
                <ul>
                    
                    <li>{{ $movie->Title }}</li>
                    
                </ul>
                @endforeach
            </div>
            <div class="db-author">
                <h3>Author</h3>
                @foreach ($movies as $movie)
                <ul>
                    
                    <li>{{ $movie->author}}</li>
                    
                </ul>
                @endforeach


            </div>
            <div class="db-genre">
        <h3>Genre</h3>
                @foreach ($movies as $movie)
                <ul>
                    
                    <li>{{ $movie->genre}}</li>
                    
                </ul>
                @endforeach

            </div>
            <div class="db-length">
                 <h3>Length</h3>
                @foreach ($movies as $movie)
                <ul>
                    
                    <li>{{ $movie->length}} min</li>
                    
                </ul>
                @endforeach
            </div>
             
              </div>