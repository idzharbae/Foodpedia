<div id="testimoni" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Testimoni</h2>
            <p class="lead main text-center">Apa kata mereka tentang Foodpedia?</p>

            <div class="row text-center chefs">

                @foreach($testimoni as $testi)
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src={{$testi->image}}>
                        </div>
                        <h3>{{$testi->name}}</h3>
                        <p>{{$testi->message}}</p>
                    </div>
                </div>
                @endforeach
                
            </div>

        </div>
        <!-- /.container -->
    </div><!-- /#chefs -->
