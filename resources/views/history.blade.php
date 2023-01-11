@extends('layout.main')

@section('container')
    <div class="row justify-content-center p-2">
        <div class="col-md-10">
            <h1 class="display-3 fw-semibold text-center">My Transaction</h1>
            @if($transactionProducts->count())
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
  
              </div>
            @else
            <div class="col-md-10 p-3">
                <h3 class="text-warning display-3 text-center fw-semibold">Transaction History is Empty! Lets go shopping</h3>
            </div>
            @endif
        </div>
    </div>
@endsection