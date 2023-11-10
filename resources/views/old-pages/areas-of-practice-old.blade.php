@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Our Attorneys')
@section('content')
    <section class="page-banner banner-overlay" style="background-image: url(/assets/img/practice-areas-2.jpeg);">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="text-white"> Practice Areas</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item" class="text-white">Practice Areas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    {{-- <section class="container pt-5">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/agency-2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Agency & Franchise</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Rather than establishing a dedicated presence in each target market,
                                    many
                                    established and ﬂedging companies increasingly look to franchise, agency, and
                                    distribution arrangements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/events2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Events & Sporting</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">As one of the most lucrative industries in the world, entertainment
                                    events and sporting competitions are increasingly gravitating toward the Gulf
                                    Cooperation Council countries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/Arbitration.png') }}" alt=""
                                class="" style="width: 111px; height:105px;">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Arbitration</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Sultan Al-Abdulla & Partners’ arbitration lawyers have significant
                                    experience in handling complex matters, with an emphasis on commercial, construction and
                                    public law cases.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/intellectual2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Intellectual Property</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">A company’s intellectual property is one of its most valuable assets.
                                    Concepts such as identity, quality, service, and eﬃciency are often tied to a company’s
                                    logo and trademark.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/banking-2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Banking & Finance</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Steady economic growth over the last two decades has meant that Qatar
                                    needed to reinvent its close-knit financial sector for seamless integration with
                                    international financial markets as they evolve.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/dispute2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Litigation</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Our Dispute Resolution team is widely recognized for its depth of
                                    expertise and experience. The team’s pragmatic solution driven advice makes the team the
                                    “go to” choice for our clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/construction2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Construction & Engineering</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Drawing on its formidable experience and expertise our construction
                                    and engineering team advises on every aspect of the design, engineering, construction
                                    and operation of projects in Qatar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/regulatory2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Regulatory & Compliance</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">The extra-territorial reach of anti-corruption legislation, coupled
                                    with the growing imposition of international sanctions, requires businesses to maintain
                                    an in-depth understanding of global events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/corporate2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Corporate, Commercial & Transactional</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Our corporate and commercial team draws on its expertise and
                                    experience to advise on all aspects of domestic and cross-border matters and
                                    transactions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/tax2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Tax</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Anticipating and managing tax implications is integral to the
                                    successful structuring of business operations and commercial transactions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/employment2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Employment & Immigration</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">A company is only as good as its employees and although every company
                                    wants to run eﬃciently, occasionally employment and immigration issues arise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/telecommunications2.png') }}"
                                alt="" class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Telecommunications & IT</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">The telecommunications and technology sector has experienced
                                    phenomenal growth during the course of the last decade, inextricably linking tech
                                    products with our professional and…</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-3 pe-0">
                            <img src="{{ asset('assets/img/marshael-practice-areas​/enery2.png') }}" alt=""
                                class="">
                        </div>
                        <div class="col-9 ps-0">
                            <div class="ms-n3">
                                <p class="fs-lg fw-bold text-dark mb-0">Energy & Natural Resources</p>
                                <hr class="me-4 my-1" style="border-top: 2px black solid;">
                                <p class="text-dark">Because of the complexity of the global energy markets, companies
                                    operating in the energy sector look to their trusted legal advisers for commercial and
                                    dispute resolution solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
