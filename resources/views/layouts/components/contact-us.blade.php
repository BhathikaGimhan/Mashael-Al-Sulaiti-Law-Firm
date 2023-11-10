<section class="bg-white pt-5 pb-4">
    <div class="container">
        <h2 class="h1 pt-1 mb-0">Contact-us</h2>
        <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
            <div class="col-md-6 order-lg-1 order-2">
                {{-- <h3 class="mb-4">Send your request!</h3> --}}
                <div class="card border-0 p-5" style="background-color: rgba(225, 225, 225, 0.299); border-radius:8px">
                    <form class="needs-validation" novalidate>
                        <div class="form-group mb-2">
                            <label class="form-label fs-base" for="name">Full Name</label>
                            <input class="form-control" type="text" placeholder="Your name" required
                                id="name" />
                            <div class="invalid-feedback">
                                Please enter your name!
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label fs-base" for="email">Email</label>
                            <input class="form-control" type="email" placeholder="Email address" required
                                id="email" />
                            <div class="invalid-feedback">
                                Please provide a valid email address!
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label fs-base" for="phone-number">Phone Number</label>
                            <input class="form-control" type="text" placeholder="Phone number" required
                                id="email" />
                            <div class="invalid-feedback">
                                Please provide a valid Phone number!
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label fs-base" for="message">Message</label>
                            <textarea class="form-control" placeholder="Your message" rows="4" required id="message"></textarea>
                            <div class="invalid-feedback">
                                Please write your message!
                            </div>
                        </div>
                        {{-- <div class="col-lg-10"> --}}
                        <button class="btn btn-dark mt-2" type="submit">
                            Send request
                        </button>
                        {{-- </div> --}}
                    </form>
                </div>
            </div>
            <div class="col-md-6 m-auto order-lg-2 order-1">
                <div>
                    <img src="/assets/img/contact-us.png" alt="" class="" style="height:400px">
                    <h1 class="text-center mt-n4">“First 20 minutes FREE consultation, book yours now”</h1>
                </div>
            </div>
        </div>
    </div>
</section>
