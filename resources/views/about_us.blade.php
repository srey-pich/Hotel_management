@extends('frontlayout')
@section('content')
<style>
    body {
      padding: 25px;
      background-color: hsl(333, 23%, 92%);
      color: rgb(31, 29, 29);
      font-size: 15px;
    }
    .dark-mode {
      background-color: black;
      color: rgb(230, 157, 157);
    }
    #border{
            border: 2px solid rgb(38, 37, 37);
            border-radius: 5px;
            /* width: 500px; */
        }
        #text{
                text-align:justify;
                font-family:Roboto Condensed;
                font-style:normal;
                line-height:28px;
        }
    </style>
<div class="container my-4">
    <div align="right">
        <button onclick="myFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
              </svg>
        </button>
        <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>
    </div>
    <h1 id="text">About us</h1>
    <p >
        <h2><b>The Hotels booking & Resorts</b></h2>
        <h5 id="text">also known as Sokha Hotel Group is a Phnom Penh-based hotel and resort company, the hospitality division under the Sokimex Investment Group. The company was founded in 2004 by Neak Oknha Sok Kong. Today, Sokha Hotels & Resort has five (06) hotel properties located in four (04) main cities and provinces in Cambodia.

SOKHA as a brand was found in 1997 by its Chairman, Neak Okhna SOK Kong. Today, Sokha Hotels & Resorts has six (06) hotel properties located in fours (04) main cities and provinces and is the largest luxury hospitality chain in Cambodia under the management of the parent company, Sokimex Investment Group.

Sokha Beach Resort (including Moha Mohori and Lakeside) was the first property of the Sokha Hotels & Resorts and was a flagship 5-star hotel opened in 2004 at the beachfront of beautiful Sokha Beach, Preah SihanoukVille. Sokha Beach Resort has started with 180 rooms and suites, and then extended to 210 in 2009 and to 391 room and suites in 2010 including 69 exclusive water chalets.

In 2005, Sokha Hotels & Resorts add another feather on its cap with Sokha Angkor Resort located in the heart of Siem Reap, boosting with 275 room and suites with a unique salty water swimming pool. The 4-star property, Thansur Bokor Highland Resort, opened in 2012 with 564 rooms and suites situated amid the famous Bokor National Park. It is the
one and only highland resort in the Mekong sub-region with distinctive mountain beauty and year-round cool weather.

The latest 5-star Sokha Phnom Penh Hotel & Residence located on Chroy Changvar peninsula. The hotel is situated opposite to the Royal Palace and approximately 13 km from Phnom Penh International Airport boasts 549 guestroom and 195 high-rise condominiums with the contrast view of extensive greenery Mekong River and stunning city’s skyscrapers.

As a Cambodia Hospitality Operator, SOKHA is well known of its 5-star Cambodia service – a Cambodia proud. Our success is driven by our people and their commitment to reach the mission of providing guests the most memorable experience and unforgettable smile of Cambodian.</h5>

        <h2><b>Our Mission Statement - Booking Hotels & Resorts</b></h2>
    <h5 id="text">Our mission is to provide a truly memorable Khmer hospitality experience that makes a lasting difference to people's lives by creating the feelings that their heart longs for.

Our Overall Goal - Sokha Hotels & Resorts
To be recognized as providing the warmest and most uplifting guest experience and for being the first choice for travelers in the Kingdom of Cambodia

The Guest Experience - Our Commitment
A dream-fulfilling true Khmer hospitality for a treasured one-of-a kind Southeast Asian Experience. The hearts of the guests are touched by the love and care of the employees and every interaction is a memorable experience.

Leadership
Our leaders are inspirational and create a motivating environment in which the core values, initiative and the sharing of ideas and experiences flourish. We are passionate about the vision, and exemplify the core values.

The Team Members
We are extremely warm, loving, and caring, professional, very creative, focused on making the guests happy, and committed to the vision. They anticipate the guests' needs and are intuitive about the guests' feelings and dreams.</h5>
 </p>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://images.pexels.com/photos/2907196/pexels-photo-2907196.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" width="100px" height="250px">
            <div class="card-body">
              <h5 class="card-title">Pool party</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://th.bing.com/th/id/OIP.EHkOkOQcMloWfrd2qDWn9wHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sleeping Room</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://images.pexels.com/photos/2029698/pexels-photo-2029698.jpeg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">Rest Room</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
      <ul class="list-group">
       <h2> <li class="list-group-item">list Service In hotel</li></h2>

        <li class="list-group-item list-group-item-info"></li>
        <li class="list-group-item list-group-item-light"></li>
        <li class="list-group-item list-group-item-dark"></li>
      </ul>
    @endsection
