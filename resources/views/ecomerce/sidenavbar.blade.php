<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                        @foreach(App\Category::all() as $cat)
                        <li value="{{$cat->id}}" id="{{$cat->id}}"><a href="">{{$cat->title}}</a></li>
                        
                        @endforeach
                    </ul>
                 </div><!-- /.navbar-collapse -->
            </nav>
        </div>