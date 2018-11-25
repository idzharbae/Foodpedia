<div id="chefs" class="parallax pricing">


  <div class="container inner">
    <h2 class="section-title text-center">FAQ</h2>
    <p class="lead main text-center">Frequently Asked Question</p>

      <div class="panel-group" id="faqAccordion">

        @foreach($faq as $question)
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question{{$loop->iteration}}">
                 <h4 class="panel-title">
                    <p class="ing" style="color:black">Q: {{$question->title}}</p>
              </h4>

            </div>
            <div id="question{{$loop->iteration}}" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color:black">{{$question->description}}</p>
                </div>
            </div>
        </div>
        @endforeach

      </div>
      <!--/panel-group-->
  </div>

        <!-- /.container -->
    </div><!-- /#chefs -->
