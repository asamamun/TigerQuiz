@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')
    @include('inc.maincss')
    @stop

@section('content')
@include('inc.nav')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Blog Detail</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Blog Detail</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-8">
          <div class="d-flex flex-column text-left mb-3">
            <p class="section-title pr-5">
              <span class="pr-2">Blog Detail Page</span>
            </p>
            <h1 class="mb-3">Diam dolor est ipsum clita lorem</h1>
            <div class="d-flex">
              <p class="mr-3"><i class="fa fa-user text-primary"></i> Admin</p>
              <p class="mr-3">
                <i class="fa fa-folder text-primary"></i> Web Design
              </p>
              <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p>
            </div>
          </div>
          <div class="mb-5">
            <img
              class="img-fluid rounded w-100 mb-4"
              src="assets/img/img_wel/detail.jpg"
              alt="Image"
            />
            <p>
              Sadipscing labore amet rebum est et justo gubergren. Et eirmod
              ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus
              rebum et lorem magna kasd, stet amet magna accusam consetetur
              eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et.
              Ipsum sit gubergren dolores et, consetetur justo invidunt at et
              aliquyam ut et vero clita. Diam sea sea no sed dolores diam
              nonumy, gubergren sit stet no diam kasd vero.
            </p>
            <p>
              Voluptua est takimata stet invidunt sed rebum nonumy stet, clita
              aliquyam dolores vero stet consetetur elitr takimata rebum
              sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
              sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo
              sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
              clita lorem sit vero amet amet est dolor elitr, stet et no diam
              sit. Dolor erat justo dolore sit invidunt.
            </p>
            <h2 class="mb-4">Est dolor lorem et ea</h2>
            <img
              class="img-fluid rounded w-50 float-left mr-4 mb-3"
              src="assets/img/img_wel/blog-1.jpg"
              alt="Image"
            />
            <p>
              Diam dolor est labore duo invidunt ipsum clita et, sed et lorem
              voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit
              kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos.
              Clita no magna no dolor erat diam tempor rebum consetetur, sanctus
              labore sed nonumy diam lorem amet eirmod. No at tempor sea diam
              kasd, takimata ea nonumy elitr sadipscing gubergren erat.
              Gubergren at lorem invidunt sadipscing rebum sit amet ut ut,
              voluptua diam dolores at sadipscing stet. Clita dolor amet dolor
              ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor
              dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed
              et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et.
              Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo
              est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos
              labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam
              takimata sea kasd dolores diam, amet et est accusam labore eirmod
              vero et voluptua. Amet labore clita duo et no. Rebum voluptua
              magna eos magna, justo gubergren labore sit voluptua eos.
            </p>
            <h3 class="mb-4">Est dolor lorem et ea</h3>
            <img
              class="img-fluid rounded w-50 float-right ml-4 mb-3"
              src="assets/img/img_wel/blog-2.jpg"
              alt="Image"
            />
            <p>
              Diam dolor est labore duo invidunt ipsum clita et, sed et lorem
              voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit
              kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos.
              Clita no magna no dolor erat diam tempor rebum consetetur, sanctus
              labore sed nonumy diam lorem amet eirmod. No at tempor sea diam
              kasd, takimata ea nonumy elitr sadipscing gubergren erat.
              Gubergren at lorem invidunt sadipscing rebum sit amet ut ut,
              voluptua diam dolores at sadipscing stet. Clita dolor amet dolor
              ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor
              dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed
              et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et.
              Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo
              est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos
              labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam
              takimata sea kasd dolores diam, amet et est accusam labore eirmod
              vero et voluptua. Amet labore clita duo et no.
            </p>
          </div>

          <!-- Related Post -->
          <div class="mb-5 mx-n3">
            <h2 class="mb-4 ml-3">Related Post</h2>
            <div class="owl-carousel post-carousel position-relative">
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="assets/img/img_wel/post-1.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="assets/img/img_wel/post-2.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="assets/img/img_wel/post-3.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Comment List -->
          <div class="mb-5">
            <h2 class="mb-4">3 Comments</h2>
            <div class="media mb-4">
              <img
                src="assets/img/img_wel/user.jpg"
                alt="Image"
                class="img-fluid rounded-circle mr-3 mt-1"
                style="width: 45px"
              />
              <div class="media-body">
                <h6>
                  John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                </h6>
                <p>
                  Diam amet duo labore stet elitr ea clita ipsum, tempor labore
                  accusam ipsum et no at. Kasd diam tempor rebum magna dolores
                  sed sed eirmod ipsum. Gubergren clita aliquyam consetetur
                  sadipscing, at tempor amet ipsum diam tempor consetetur at
                  sit.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
              </div>
            </div>
            <div class="media mb-4">
              <img
                src="assets/img/img_wel/user.jpg"
                alt="Image"
                class="img-fluid rounded-circle mr-3 mt-1"
                style="width: 45px"
              />
              <div class="media-body">
                <h6>
                  John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                </h6>
                <p>
                  Diam amet duo labore stet elitr ea clita ipsum, tempor labore
                  accusam ipsum et no at. Kasd diam tempor rebum magna dolores
                  sed sed eirmod ipsum. Gubergren clita aliquyam consetetur
                  sadipscing, at tempor amet ipsum diam tempor consetetur at
                  sit.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
                <div class="media mt-4">
                  <img
                    src="assets/img/img_wel/user.jpg"
                    alt="Image"
                    class="img-fluid rounded-circle mr-3 mt-1"
                    style="width: 45px"
                  />
                  <div class="media-body">
                    <h6>
                      John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                    </h6>
                    <p>
                      Diam amet duo labore stet elitr ea clita ipsum, tempor
                      labore accusam ipsum et no at. Kasd diam tempor rebum
                      magna dolores sed sed eirmod ipsum. Gubergren clita
                      aliquyam consetetur, at tempor amet ipsum diam tempor at
                      sit.
                    </p>
                    <button class="btn btn-sm btn-light">Reply</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Comment Form -->
          <div class="bg-light p-5">
            <h2 class="mb-4">Leave a comment</h2>
            <form>
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website" />
              </div>

              <div class="form-group">
                <label for="message">Message *</label>
                <textarea
                  id="message"
                  cols="30"
                  rows="5"
                  class="form-control"
                ></textarea>
              </div>
              <div class="form-group mb-0">
                <input
                  type="submit"
                  value="Leave Comment"
                  class="btn btn-primary px-3"
                />
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-4 mt-5 mt-lg-0">
          <!-- Author Bio -->
          <div
            class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4"
          >
            <img
              src="assets/img/img_wel/user.jpg"
              class="img-fluid rounded-circle mx-auto mb-3"
              style="width: 100px"
            />
            <h3 class="text-secondary mb-3">John Doe</h3>
            <p class="text-white m-0">
              Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
              ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr
              ea sit.
            </p>
          </div>

          <!-- Search Form -->
          <div class="mb-5">
            <form action="">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  placeholder="Keyword"
                />
                <div class="input-group-append">
                  <span class="input-group-text bg-transparent text-primary"
                    ><i class="fa fa-search"></i
                  ></span>
                </div>
              </div>
            </form>
          </div>

          <!-- Category List -->
          <div class="mb-5">
            <h2 class="mb-4">Categories</h2>
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Web Design</a>
                <span class="badge badge-primary badge-pill">150</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Web Development</a>
                <span class="badge badge-primary badge-pill">131</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Online Marketing</a>
                <span class="badge badge-primary badge-pill">78</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Keyword Research</a>
                <span class="badge badge-primary badge-pill">56</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Email Marketing</a>
                <span class="badge badge-primary badge-pill">98</span>
              </li>
            </ul>
          </div>

          <!-- Single Image -->
          <div class="mb-5">
            <img src="assets/img/img_wel/blog-1.jpg" alt="" class="img-fluid rounded" />
          </div>

          <!-- Recent Post -->
          <div class="mb-5">
            <h2 class="mb-4">Recent Post</h2>
            <div
              class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
            >
              <img
                class="img-fluid"
                src="assets/img/img_wel/post-1.jpg"
                style="width: 80px; height: 80px"
              />
              <div class="pl-3">
                <h5 class="">Diam amet eos at no eos</h5>
                <div class="d-flex">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
              </div>
            </div>
            <div
              class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
            >
              <img
                class="img-fluid"
                src="assets/img/img_wel/post-2.jpg"
                style="width: 80px; height: 80px"
              />
              <div class="pl-3">
                <h5 class="">Diam amet eos at no eos</h5>
                <div class="d-flex">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
              </div>
            </div>
            <div
              class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
            >
              <img
                class="img-fluid"
                src="assets/img/img_wel/post-3.jpg"
                style="width: 80px; height: 80px"
              />
              <div class="pl-3">
                <h5 class="">Diam amet eos at no eos</h5>
                <div class="d-flex">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Single Image -->
          <div class="mb-5">
            <img src="assets/img/img_wel/blog-2.jpg" alt="" class="img-fluid rounded" />
          </div>

          <!-- Tag Cloud -->
          <div class="mb-5">
            <h2 class="mb-4">Tag Cloud</h2>
            <div class="d-flex flex-wrap m-n1">
              <a href="" class="btn btn-outline-primary m-1">Design</a>
              <a href="" class="btn btn-outline-primary m-1">Development</a>
              <a href="" class="btn btn-outline-primary m-1">Marketing</a>
              <a href="" class="btn btn-outline-primary m-1">SEO</a>
              <a href="" class="btn btn-outline-primary m-1">Writing</a>
              <a href="" class="btn btn-outline-primary m-1">Consulting</a>
            </div>
          </div>

          <!-- Single Image -->
          <div class="mb-5">
            <img src="assets/img/img_wel/blog-3.jpg" alt="" class="img-fluid rounded" />
          </div>

          <!-- Plain Text -->
          <div>
            <h2 class="mb-4">Plain Text</h2>
            Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea
            est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua
            et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum
            dolor, tempor takimata clita sit et elitr ut eirmod.
          </div>
        </div>
      </div>
    </div>
    <!-- Detail End -->

    @endsection
    @section('footerin')
@include('inc.footer')
    @stop
@section('scriptin')
    @include('inc.mainjs')
    @endsection
@section('scripts')
