@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Expertise')
@section('content')


    <!-- Hero-->
    <div class="section" style="background-image: url(assets/img/about/agency/parallax-image.jpg);">
        <div class="py-5" style="background-color: #8d8f92a8;">
            <div class="d-flex flex-column align-items-center py-5" data-aos="fade-up" data-aos-duration="800"
                data-aos-offset="180" data-disable-parallax-down="md">

                <h1 class="text-white">
                    Our Strategies</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white">Our Strategies</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="px-5">
                <p class="h3 text-center fw-bold">We take pride in our reputation as a premier law firm in Qatar.
                    Our dedicated team of
                    legal professionals specializes in a wide range of law areas, ensuring the provision of expert,
                    client-focused legal services to meet the unique needs of our clients.
                </p>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="">
                <h4 class="text-dark">We offer our legal services below to meet the criteria and achieve the goals of our
                    clients:</h4>
                <p class="fs-xl mb-2 fw-bold text-dark">Legal Consultancy in particular areas of knowledge and experience,
                    without
                    limitation:</p>
                <ul class="text-dark">
                    <li class="fs-lg mb-2">Familiarity with governmental laws and Regulatory Work relative to the nature of
                        the
                        project.</li>
                    <li class="fs-lg mb-2">Agreement and Contracts, Arbitration, Civil Law and Procedures Commercial Law,
                        Construction & Engineering, Corporate Advice, Criminal defense and Prosecution, Labor Law, Land Law,
                        Real Estate, Tax Law etc..</li>
                    <li class="fs-lg mb-2">Safety procedures and protection from hidden and indirect costs such as time
                        lost,
                        loss in earning power, economic loss, train or replacement of employees, equipment damage, loss of
                        production, fines, insurance premiums etc...</li>
                    <li class="fs-lg mb-2">Contract Requirements and Legal Obligations</li>
                    <li class="fs-lg mb-2">Corporate & Personal Legal Liability</li>
                    <li class="fs-lg mb-2">Delays in construction or infrastructure, disruption, acceleration, performance,
                        defective design and interference.</li>
                    <li class="fs-lg mb-2">Liquidated damages</li>
                    <li class="fs-lg mb-2">Environmental Issues such as laws, regulations, permit requirements, risk and
                        hazards.</li>
                </ul>
            </div>
            <div class="">
                <p class="fs-xl mb-2 fw-bold text-dark">Representation</p>
                <p class="fs-xl mb-2 fw-bold text-dark">Drafting Contracts; Memorandums and Resolutions</p>
                <p class="fs-xl mb-2 fw-bold text-dark">Court</p>
                <ul class="text-dark">
                    <li class="fs-lg mb-2">Quasi-Judicial and legislative procedures</li>
                    <li class="fs-lg mb-2">Violations</li>
                    <li class="fs-lg mb-2">Case Work & Trials</li>
                </ul>
                <p class="fs-xl mb-2 fw-bold text-dark">Alternative Dispute Resolutions</p>
                <ul class="text-dark">
                    <li class="fs-lg mb-2">Alternative methods of resolving disputes and settling claims, such as
                        negotiation,
                        arbitration and mediation.</li>
                </ul>
            </div>

        </div>

    </section>

    @include('layouts.components.coreteam')

    <!--- =========== core team end =========== --->

    <!--- ========= awards start ========== --->

    @include('layouts.components.awards')

@endsection
