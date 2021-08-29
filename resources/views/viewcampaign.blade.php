
<style>
    .nomargin{
        margin: 0 !important;
    }

    .nopadding{
        padding:0 !important;
    }

    html, body. div{
    margin: 0 !important;
    padding: 0 !important;
    width: 100%;
}


</style>
@extends('layouts.app')
@section('content')

<div class="container-fluid" >
    <div class="row px-2 mx-1" style="border: 1px solid rgb(155, 146, 155); ">
      <div class="col px-3 py-3">
          <div class="mb-2 ratio ratio-16x9">
        <iframe  src="https://www.youtube.com/embed/{{$fin}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
{{-- https://www.youtube.com/watch?v=Miwv0EifRYM --}}
          {{-- <center>
              <a href=""><img src="images/north_shore_sunset_beach6869.jpg" style="height:4em" class="img-fluid pl-1" alt="..."></a>
              <a href=""><img src="images/north_shore_sunset_beach6869.jpg" style="height:4em" class="img-fluid pl-1" alt="..."></a>
              <a href=""><img src="images/north_shore_sunset_beach6869.jpg" style="height:4em" class="img-fluid pl-1" alt="..."></a>
              <a href=""><img src="images/north_shore_sunset_beach6869.jpg" style="height:4em" class="img-fluid pl-1" alt="..."></a>
              <a href=""><img src="images/north_shore_sunset_beach6869.jpg" style="height:4em" class="img-fluid pl-1" alt="..."></a>
              <a href=""><img src="images/north_shore_sunset_beach6869.jpg" style="height:4em" class="img-fluid pl-1" alt="..."></a>
          </center> --}}
    </div>
   <div class="col  px-3 py-3" >
  <h3 style="color: turquoise"><b>Funding</b></h3>
  <h3 style="text-transform: uppercase;"><b>{{ $camp->title }}</b></h3>
  @if ($camp->business_cate)
     <h3 style="text-transform: capitalize;">{{ $camp->business_cate }}</h3>
  @elseif ($camp->project_type)
    <h3 style="text-transform: capitalize;">{{ $camp->project_type }}</h3>
  @elseif ($camp->cause)
    <h3 class="d-inline-block text-truncate" style="max-width:200px; text-transform:capitalize;" >{{ $camp->cause}}</h3>
    @else
    <h3>Health And Wellbeing</h3>
  @endif
  <div class="container pt-3 pb-3">
    <div class="row">
      <div class="col-2">
        <img src="{{asset('storage/covers/'. $camp->cover_img)}}" style="height:4em" class="img-fluid" alt="...">
      </div>
      <div class="col">
       <h4><b>{{ $camp->full_name }}<b></h4>
        <h4> {{$elem->campaign_num }} Campaign | {{ $elem->city }}, {{$elem->country}}</h4>
      </div>
    </div>
  </div>
  @if ($amount)
  <a>GHC {{$amount}}</a>
  @else
  <a>GHC 0</a>
  @endif
  @if ($backers)
  <a style="float: right">{{$backers}} backers</a>
  @else
  <a style="float: right">0 backers</a>
  @endif
  <div class="progress">
    <div class="progress-bar bg-info" role="progressbar" style="width: {{$perc}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  @if ($perc)
  <a>{{$perc}}% of GHC {{ $camp->target }}</a>
  @else
  <a>0% of GHC {{ $camp->target }}</a>
  @endif
  <a style="float: right">{{ \Carbon\Carbon::parse($camp->updated_at)->addDays($camp->duration)->diffInDays() }} days left</a>


  <div class="container mt-3 ">
      <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="mr-5 px-4 py-2" style="background-color: rgb(65, 39, 151); color:white; text-decoration:none;">Contribute</a>
      <button id="follow-btn1" onclick="document.getElementById('follow-btn2').style.display = 'inline'; this.style.display = 'none';" class="mr-5 px-3 py-2" style="background-color: whitesmoke; color:black; border:1px solid; text-decoration:none; display:inline;" ><i class="far fa-heart"></i> Follow</button>
      <button id="follow-btn2" onclick="document.getElementById('follow-btn1').style.display = 'inline'; this.style.display = 'none';" class="mr-5 px-3 py-2" style="background-color: whitesmoke; color:red; border:1px solid; text-decoration:none; display:none" ><i class="fas fa-heart"></i> Following</button>
      <a href="" class="mr-1 px-1 py-2" style="color:rgb(51, 51, 248); font-size: 1.5em"><i class="fab fa-facebook-f"></i></a>
      <a href="" class="mr-2 px-1 py-2" style="color:rgb(66, 201, 241); font-size: 1.5em"><i class="fab fa-twitter"></i></a>
      <a href="" class="mr-2 px-1 py-2" style="color:rgb(116, 119, 121); font-size: 1.5em"><i class="fas fa-link"></i></a>
  </div>

  <script>
follow(){
    console.log('follow')
}
  </script>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title " id="exampleModalLabel"><b>Back this Campaign</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div>
            <h4>Make a Contribution</h4>
            <div class="container px-2 py-2" style="border: solid 1px">



              <form id="paymentForm">
                <div class="form-group">

                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email-address" required />
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                </div>

                 <div class="form-group">
                    <div class="mb-3">
                  <label for="amount" class="form-label">Amount</label>
                  <input type="tel" class="form-control" id="amount" required />
                </div>
                </div>

                <div class="form-group">
                 <div class="mb-3">
                  <label for="first-name" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="first-name" />
                </div>
                </div>


                <div class="form-group">
                  <label for="last-name" class="form-label">Last Name</label>
                  <input class="form-control" type="text" id="last-name" />
                </div>

                <div class="form-submit">
                <center>  <button class="btn btn-success" type="submit" onclick="payWithPaystack()"> Pay </button> </center>
                </div>
              </form>
               <div id="dom-target"  style="display: none;">
                    <?php
                        $output = $camp->id; // Again, do some operation, get the output.
                       echo $output //  htmlspecialchars($output);
                    ?>
                </div>
               <script>
               var div = document.getElementById("dom-target");
                var campaignId = div.textContent;
                  </script>
              <script src="https://js.paystack.co/v1/inline.js"></script>

              <script>

                var paymentForm = document.getElementById('paymentForm');
                if(paymentForm)
                paymentForm.addEventListener("submit", payWithPaystack, false);
            function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
              key: 'pk_test_21e06242bcedd353065b56a55c5ad3b369750ab3', // Replace with your public key
              email: document.getElementById("email-address").value,
              amount: document.getElementById("amount").value * 100,
              currency: "GHS",
              first_name: document.getElementById("first-name").value,
              last_name: document.getElementById("last-name").value,
              ref: 'TF'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
              // label: "Optional string that replaces customer email"
              onClose: function(){
                //    window.history.go(-1);
                alert('Transaction cancelled.');
              },
              callback: function(response){
                let message = 'Payment complete! Reference: ' + response.reference;
                alert(message);
                window.location.href = "/verify_transaction?reference="+ response.reference + "=" + campaignId;
              }
            });
            handler.openIframe();
            }
            </script>


              </div>
        </div>

        </div>
        <div class="modal-footer">
         <br>
        </div>
      </div>
    </div>
  </div>

    </div>

    </div>
  </div>

<div class="container mt-5">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><b>Story</b></button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><b>Updates</b></button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><b>Comments</b></button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="container-fluid px-3" style="border: 1px solid">
            <div class="pt-1">
               <h3><b>Design Summary</b></h3>
               <p>
                   <h4>
                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, natus incidunt! Quidem id sit quasi beatae repellendus error qui, adipisci mollitia non placeat quae facilis neque dicta sapiente optio ex?
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas et, ullam, a magni reiciendis tenetur ut pariatur laudantium repudiandae molestiae quisquam excepturi quos obcaecati fugit at nostrum. Alias, eum!
                   </h4>
                </p>
            </div>
           </div>

           <figure class="figure pt-5">
            <img src="/images/crop1.svg" class="img-fluid" alt="...">
            <figcaption class="figure-caption">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil asperiores porro tempore explicabo iure suscipit tenetur, id obcaecati voluptates officia nisi, amet voluptatum, qui ipsa autem quo dolor dolorem. Id!
                lore
            </figcaption>
           </figure>

           <div class="my-3">
               <h3>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repellat tempora fuga architecto placeat inventore temporibus consequuntur dignissimos! Libero perspiciatis corrupti facere ducimus nostrum consectetur impedit dolores asperiores enim sed! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sit autem dolor molestias? Dicta doloremque beatae iste voluptatem architecto accusamus nam amet corrupti corporis non possimus, consequatur quod voluptas laborum.
               </h3>
           </div>

           <figure class="figure pt-5">
            <img src="/images/crop2.svg" class="img-fluid" alt="...">
            <figcaption class="figure-caption">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil asperiores porro tempore explicabo iure suscipit tenetur, id obcaecati voluptates officia nisi, amet voluptatum, qui ipsa autem quo dolor dolorem. Id!
                lore
            </figcaption>
           </figure>

           <div class="my-3">
               <h3>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repellat tempora fuga architecto placeat inventore temporibus consequuntur dignissimos! Libero perspiciatis corrupti facere ducimus nostrum consectetur impedit dolores asperiores enim sed! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sit autem dolor molestias? Dicta doloremque beatae iste voluptatem architecto accusamus nam amet corrupti corporis non possimus, consequatur quod voluptas laborum.
               </h3>
           </div>

        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="container-fluid px-3" style="border: 1px solid">
                <div class="pt-1">
                   <h3><b>Production Update</b></h3>
                   <p>
                       <h4>
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, natus incidunt! Quidem id sit quasi beatae repellendus error qui, adipisci mollitia non placeat quae facilis neque dicta sapiente optio ex?
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas et, ullam, a magni reiciendis tenetur ut pariatur laudantium repudiandae molestiae quisquam excepturi quos obcaecati fugit at nostrum. Alias, eum!
                       </h4>
                    </p>
                </div>
               </div>

               <figure class="figure pt-5">
                <img src="/images/crop1.svg" class="img-fluid" alt="...">
                <figcaption class="figure-caption">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil asperiores porro tempore explicabo iure suscipit tenetur, id obcaecati voluptates officia nisi, amet voluptatum, qui ipsa autem quo dolor dolorem. Id!
                    lore
                </figcaption>
               </figure>

               <div class="my-3">
                   <h3>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repellat tempora fuga architecto placeat inventore temporibus consequuntur dignissimos! Libero perspiciatis corrupti facere ducimus nostrum consectetur impedit dolores asperiores enim sed! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sit autem dolor molestias? Dicta doloremque beatae iste voluptatem architecto accusamus nam amet corrupti corporis non possimus, consequatur quod voluptas laborum.
                   </h3>
               </div>

               <figure class="figure pt-5">
                <img src="/images/crop2.svg" class="img-fluid" alt="...">
                <figcaption class="figure-caption">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil asperiores porro tempore explicabo iure suscipit tenetur, id obcaecati voluptates officia nisi, amet voluptatum, qui ipsa autem quo dolor dolorem. Id!
                    lore
                </figcaption>
               </figure>

               <div class="my-3">
                   <h3>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repellat tempora fuga architecto placeat inventore temporibus consequuntur dignissimos! Libero perspiciatis corrupti facere ducimus nostrum consectetur impedit dolores asperiores enim sed! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sit autem dolor molestias? Dicta doloremque beatae iste voluptatem architecto accusamus nam amet corrupti corporis non possimus, consequatur quod voluptas laborum.
                   </h3>
               </div>


        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


            <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row my-2">
                <div class="col-sm-2 py-1">
                    <img src="/images/Sebastiaan_ter_Burg_profile@2x.jpg" style="border-radius: 50%" class="img-fluid" alt="...">
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Kofi Sternberg</b>
                      <a style="float: right">25 minutes ago</a>
                     </h5>
                      <p class="card-text">This is where backers of the campaign can comment and make certain suggestions on the campaign
                          Users who are not backers are not eiligible to comment on campaigns  </p>
                      <a style="font-size: 1.5em; color:rgb(52, 130, 233)"><i class="far fa-thumbs-up"></i> 87 </a>
                      <a style="font-size:1.5em;"> | </a>
                      <a style="font-size: 1.5em; color:rgb(250, 36, 36)" ><i class="far fa-thumbs-down"></i> 420</a>
                    </div>
                  </div>
                </div>

              </div>
        </div>
      </div>
</div>
<br>


@endsection



<script>
    var paymentForm = document.getElementById('paymentForm');
    if(paymentForm)
    paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
e.preventDefault();
let handler = PaystackPop.setup({
  key: 'pk_test_21e06242bcedd353065b56a55c5ad3b369750ab3', // Replace with your public key
  email: document.getElementById("email-address").value,
  amount: document.getElementById("amount").value * 100,
  currency: "GHS",
  ref: 'TF'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
  // label: "Optional string that replaces customer email"
  onClose: function(){
      window.location = "http://127.0.0.1:8000/campaign";
    alert('Transaction cancelled.');
  },
  callback: function(response){
    let message = 'Payment complete! Reference: ' + response.reference;
    alert(message);
    window.location = "http://127.0.0.1:8000/verify_transaction.php?reference=" + response.reference;
  }
});
handler.openIframe();
}
</script>
