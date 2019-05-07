<?php include('header.php') ?>
<section class="page-header" data-parallax="scroll" data-bleed="0" data-speed="0.2" data-image-src="images/banner1.jpg" data-natural-width="1349">
	<div class="container">
		<div class="caption">
			<h1 class="animated slideInUp">Client Reviews</h1>
			<p class="animated slideInUp"><a href="#">Home</a> > <a href="#">Reviews</a></p>
		</div>
	</div>
</section>

<!-- Reviews -->
<section id="reviews" class="section reviews wow fadeInUp">
  <div class="container">
    <div class="row">
      <main class="col-md-8 col-lg-9">
        <div class="row wow fadeInUp">
          <div class="col-sm-3 text-center">
            <figure>
              <a href="" data-toggle="modal" data-target="#reviewImgModal">
                  <img src="images/item1.jpg" alt="">
                </a>
              </figure>
            <p><strong>Hem Shrestha</strong><br>Thamel, Kathmandu</p>
          </div>
          <div class="col-sm-9">
            <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <span class="date">30  Jun 2017</span>
            <h3>Climbing Expert Guide</h3>
              <p>Dendi Sherpa is originated and grew up from one of the mountain district in Everest region of Nepal Solukhumbu. He has been working as a peak climbing and mountaineering guide since 1997 and associated with Nepal Guide Treks and Expedition since 2011. He has been implemented his interest to be expert in mountaineering field since his childhood thus he started the profession when he was 16 and finally became a pro in the occupation. Personally, he is highly knowledgeable, hard working, friendly and helpful adventure lover individual in Nepal Guide Treks and Expedition Team.</p>
              <p><strong>Experiences: during his 20 years climbing period</strong></p>
          </div>
        </div>
        <hr/>
        <div class="row wow fadeInUp">
          <div class="col-sm-3 text-center">
            <figure>
              <a href="" data-toggle="modal" data-target="#reviewImgModal">
                  <img src="images/item1.jpg" alt="">
                </a>
              </figure>
            <p><strong>Hem Shrestha</strong><br>Thamel, Kathmandu</p>
          </div>
          <div class="col-sm-9">
            <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <span class="date">30  Jun 2017</span>
            <h3>Climbing Expert Guide</h3>
              <p>Dendi Sherpa is originated and grew up from one of the mountain district in Everest region of Nepal Solukhumbu. He has been working as a peak climbing and mountaineering guide since 1997 and associated with Nepal Guide Treks and Expedition since 2011. He has been implemented his interest to be expert in mountaineering field since his childhood thus he started the profession when he was 16 and finally became a pro in the occupation. Personally, he is highly knowledgeable, hard working, friendly and helpful adventure lover individual in Nepal Guide Treks and Expedition Team.</p>
              <p><strong>Experiences: during his 20 years climbing period</strong></p>
          </div>
        </div>
      </main>
      <aside class="col-md-4 col-lg-3">
        <div class="sticky-top sticky-top-info">
            <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                <span class="label-aero"> 5.0 - Excellent</span> 
                <p>Based on 5 Reviews</p>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-edit"></i> Write your own review</button>
                <br/><br/>
          <div class="card shadow-sm ">
              <div class="card-header bg-light"><h4>Company Info</h4></div>
              <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="">About Us</a></li>
              <li class="list-group-item">Our Team</li>
              <li class="list-group-item">Termns & Conditions</li>
              <li class="list-group-item">Why Travel with us?</li>
            </ul>   
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="reviewImgModal" tabindex="-1" role="dialog" aria-labelledby="reviewImgModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reviewImgModalLabel">Img Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="images/banner1.jpg" alt="" class="img-responsive">
      </div>
    </div>
  </div>
</div>

<!-- model for review -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Write your own Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
           <form action="" id="" method="post" name="reviewsTrip" enctype="multipart/form-data">         
          <div class="form-group">
            <label for="Package Name">Review title</label>
            <input class="c-text requiredField form-control" type="text" name="revtitle" id="revtitle" placeholder="Review title highlights" value="">
          </div>
      <div class="form-row">
          <div class="form-group col-md-6">
               <label>Full Name</label>
               <input class="c-text requiredField form-control" type="text" name="fullName" id="fullName" placeholder="Your Full Name" value="">
          </div>
          <div class="form-group col-md-6">
               <label>Email</label>
             <input class="c-text requiredField emails form-control" type="email" id="email" name="email" placeholder="Your Email" value="">
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label>Country</label>
              <select name="country" id="country" class="c-text requiredField form-control" aria-describedby="basic-addon1">
                   <option value="-1">Select Country</option>
              </select>
          </div>
          <div class="form-group col-md-6">
             <label>Phone</label>
              <input class="c-text requiredField phone form-control" type="text" id="phone" name="phone" placeholder="Your phone" value="">   
          </div>
      </div>

      <div class="form-row">
          <div class="form-group col-md-6">
              <label>Upload Image</label>
              <input type="file" name="files[]" accept="image/*" id="imguploads" class="files-data form-control" multiple="">
          </div>
          <div class="form-group col-md-6">
              <label>Travel Year</label>
              <input class="c-text requiredField emails form-control" type="text" id="txttravelyr" name="txttravelyr" value="">  
          </div>
      </div>
      <div class="form-group">
      <label>Rating for your trip: </label>
          
      </div>
      <div class="form-group">
          <label>Your review</label>
           <textarea class="form-control" name="user-entry-contents" id="user-entry-contents" rows="4" placeholder="Review in details"></textarea>
      </div>
      <!--  <div class="form-group">
          <div class="g-recaptcha" data-sitekey="6LfcC-cSAAAAAPsYNtIkrERC1FWCrQMxQJ1I8eRi"></div>
      </div> -->               
      <input type="submit" class="btn btn-dark" name="revbtn" value="Submit">
  </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>
