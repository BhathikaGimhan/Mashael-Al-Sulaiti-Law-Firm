<footer class="footer-footer-black pt-0 pt-lg-0">
    <div class="container-fluid px-xxl-5 px-lg-5 py-0">
        <div class="py-3 py-lg-5 px-xxl-5">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-md-0 mb-4 {{ __('footer.marginPe') }}">
                    <h2 class="h4 text-light mb-3 mt-0">{{ __('title.contactUs') }}</h2>
                    <div class="d-flex text-white mt-3">
                        <div style="font-size: 25px"><i class="ai-map-pin {{ __('footer.margin') }}"></i></div>
                        <div>{!! trans('footer.address') !!}</div>
                    </div>
                    <div class="d-flex align-items-center text-white mt-3">
                        <div style="font-size: 25px"><i class="ai-phone {{ __('footer.margin') }}"></i></div>
                        <div>
                            <a href="tel:+97444664626" class="text-decoration-none text-white"
                                dir="ltr">+97444664626</a><br>
                            <a href="tel:+97444664633" class="text-decoration-none text-white"
                                dir="ltr">+97444664633</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mt-3">
                        <div style="font-size: 25px"><i class="ai-printer {{ __('footer.margin') }}"></i></div>
                        <div dir="ltr">+974 4413 1131</div>
                    </div>
                    <div class="d-flex align-items-center text-white mt-3">
                        <div style="font-size: 25px"><i class="ai-mail {{ __('footer.margin') }}"></i></div>
                        <div><a href="mailto:info@mas.com.qa"
                                class="text-decoration-none text-white">info@mas.com.qa</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mt-3">
                        <div style="font-size: 25px"><i class="ai-file-text {{ __('footer.margin') }}"></i></div>
                        <div><a target="_blank" href="{{ asset('assets/files/company-profile.pdf') }}"
                                class="text-decoration-none text-white">{{ __('footer.lawFirmProfile') }}</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mt-3">
                        <div style="font-size: 25px"><i class="ai-star {{ __('footer.margin') }}"></i></div>
                        <div><a target="_blank" href="{{ asset('/assets/files/quality-policy.jpg') }}"
                                class="text-decoration-none text-white">{{ __('footer.QualityPolicy') }}</a>
                        </div>
                    </div>
                    {{-- <div class="">
                    <div class="dropdown mt-3 d-lg-block d-none" id="langButton"><a
                            class="btn btn-light text-dark btn-xs dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ config('languages.' . app()->getLocale()) }}</a>
                        <ul class="dropdown-menu">
                            @foreach (config('languages') as $key => $value)
                                <li><a class="dropdown-item"
                                        href="{{ url('/language/' . $key) }}">{{ $value }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
                </div>
                <div class="col-md-12 col-lg-4 mt-lg-0 mt-sm-0 mt-md-3">
                    <div class="map-container h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14433.639134618898!2d51.536932010847146!3d25.256796999999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45cf9648a33255%3A0x35a5962b6ff2038d!2sMashael%20Al%20Sulaiti%20Legal%20Advocacy%20%26%20Arbitration%2C%20Doha%2C%20Qatar!5e0!3m2!1sen!2slk!4v1686547488436!5m2!1sen!2slk"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-md-0 mb-3 pt-lg-0 pt-3 pb-3 {{ __('footer.marginPs') }}">
                    <h2 class="h4 text-light mb-2 mt-0">{{ __('title.ourUpdates') }}</h2>

                    <p class="fs-lg text-white mt-0">{{ __('footer.update.descriptionOne') }}
                    </p>
                    @if ($errors->any())
                        <div class="alert alert-danger text-light">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" id="subscribe-form" onsubmit="event.preventDefault();">
                        <div class="input-group bg-light mb-3">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="{{ __('footer.update.subscribePlaceholder') }}">
                            <button type="button" class="btn btn-primary"
                                onclick="subscribe()">{{ __('buttons.subscribe') }}</button>
                        </div>
                    </form>

                    <p class="fs-lg text-white my-0">{{ __('footer.update.descriptionOne') }}</p>
                    <!-- Social media buttons -->
                    <h2 class="h4 text-light mb-2 mt-4">{{ __('title.followUs') }}</h2>

                    <div class="d-flex justify-content-start mt-4">
                        <a href="https://www.facebook.com/profile.php?id=100092992811142"
                            class="social-btn {{ __('footer.margin') }}"><i class="ai-facebook"></i></a>
                        <a href="https://twitter.com/maslawfirm" target="_blank"
                            class="social-btn {{ __('footer.margin') }}"><i class="ai-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/mashael-al-sulaiti-504bbaba" target="_blank"
                            class="social-btn {{ __('footer.margin') }}"><i class="ai-linkedin"></i></a>
                        <a href="https://www.instagram.com/mas.legalfirm/" target="_blank"
                            class="social-btn {{ __('footer.margin') }}"><i class="ai-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCeFI1cTR5AnhFEYGm_LJqxw" target="_blank"
                            class="social-btn {{ __('footer.margin') }}"><i class="ai-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 py-0" style="background-color: #810101">
        <div class="container py-2">
            <div class="row">
                <p class="copyright text-light text-center max-dev mb-0">
                    {{ __('footer.copyright') }} &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <i class="ion-ios-heart" aria-hidden="true"></i>
                    <a href="/" target="_blank"
                        class="text-secondary fw-bold text-decoration-none">{{ __('footer.siteName') }}</a>
                </p>
                <p class="copyright text-light text-center small-dev mb-0">
                    {{ __('footer.copyright') }} &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <i class="ion-ios-heart" aria-hidden="true"></i>
                    <br><a href="/" target="_blank" class="text-secondary fw-bold text-decoration-none">
                        {{ __('footer.siteName') }}</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="modal" id="message-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-center logo-red my-0" id="message-text"></p>
            </div>
        </div>
    </div>
</div>
{{-- <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-miterlimit="10"></circle>
    </svg><i class="ai-arrow-up"></i></a> --}}
<script>
    function subscribe() {
        var email = $('#email').val();

        axios.post('{{ route('subscribe.store') }}', {
                email: email
            })
            .then(function(response) {
                $('#message-text').text(response.data.success);
                $('#message-modal').removeClass('error').addClass('success');

                $('#message-modal').modal('show');

                setTimeout(function() {
                    $('#message-modal').modal('hide');
                }, 2000);

                $('#subscribe-form')[0].reset();
            })
            .catch(function(error) {
                $('#message-text').text('Error: ' + error.response.data.message);
                $('#message-modal').removeClass('success').addClass('error');

                $('#message-modal').modal('show');

                setTimeout(function() {
                    $('#message-modal').modal('hide');
                }, 2000);
            });
    }
</script>
