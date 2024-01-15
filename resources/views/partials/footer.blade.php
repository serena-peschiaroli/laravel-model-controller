<footer>
    <div class="container mt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col d-flex flex-column justify-content-between gap-5">
                <div class="logo">
                    logo here
                </div>
                <div class="btn-sample">
                    <button type="button" class="btn btn-primary">Sign up</button>
                </div>
            </div>
            <div class="col text-center"> 
                <h3> {{$footer_links['Item1']['title']}} </h3>
                <ul class="list-unstyled">
                    @foreach ($footer_links['Item1']['links'] as $link)
                    <li>
                        <a href="" class="list-group-item list-group-item-action">
                            {{ $link }}
                        </a>
                    </li>
                        
                    @endforeach
                </ul>
            </div>
            <div class="col text-center"> 
                <h3> {{$footer_links['Item2']['title']}} </h3>
                <ul class="list-unstyled">
                    @foreach ($footer_links['Item2']['links'] as $link)
                    <li>
                        <a href="" class="list-group-item list-group-item-action">
                            {{ $link }}
                        </a>
                    </li>
                        
                    @endforeach
                </ul>
            </div>
            <div class="col text-center"> 
                <h3> {{$footer_links['Item3']['title']}} </h3>
                <ul class="list-unstyled">
                    @foreach ($footer_links['Item3']['links'] as $link)
                    <li>
                        <a href="" class="list-group-item list-group-item-action">
                            {{ $link }}
                        </a>
                    </li>
                        
                    @endforeach
                </ul>
            </div>
            <div class="col text-center"> 
                <h3> {{$footer_links['Item4']['title']}} </h3>
                <ul class="list-unstyled">
                    @foreach ($footer_links['Item4']['links'] as $link)
                    <li>
                        <a href="" class="list-group-item list-group-item-action">
                            {{ $link }}
                        </a>
                    </li>
                        
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>