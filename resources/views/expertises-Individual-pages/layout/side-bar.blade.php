{{-- <div class="card rounded-0 p-4 m-auto" style="background-color: #800000">
    <h2 class="h5 text-white text-uppercase">Practice areas</h2>
    <div class="dropdown">
        <button class="btn btn-light rounded-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            SELECT OTHER AREAS
        </button>
        <ul class="dropdown-menu rounded-0  scrollable-drop-menu">

            <li><a class="dropdown-item" href="/practice-areas/banking-and-finance">Banking and Finance</a></li>
            <li><a class="dropdown-item" href="/practice-areas/construction-and-real-estate">Construction and Real
                    Estate</a></li>
            <li><a class="dropdown-item" href="/practice-areas/corporate-and-commercial">Corporate
                    and Commercial</a></li>
            <li><a class="dropdown-item" href="/practice-areas/criminal">Criminal</a></li>
            <li><a class="dropdown-item" href="/practice-areas/dispute-resolution-and-litigation">Dispute Resolution and
                    Litigation</a></li>
            <li><a class="dropdown-item" href="/practice-areas/education">Education</a></li>
            <li><a class="dropdown-item" href="/practice-areas/employment-and-labor">Employment and Labor</a></li>
            <li><a class="dropdown-item" href="/practice-areas/energy-and-natural-resources">Energy and Natural
                    Resources</a></li>
            <li><a class="dropdown-item" href="/practice-areas/environment">Environment</a></li>
            <li><a class="dropdown-item" href="/practice-areas/family">Family</a></li>
            <li><a class="dropdown-item" href="/practice-areas/government-and-public-sector">Another action</a></li>
            <li><a class="dropdown-item" href="/practice-areas/healthcare-and-pharmaceuticals">Healthcare and
                    Pharmaceuticals</a></li>
            <li><a class="dropdown-item" href="/practice-areas/intellectual-property">Intellectual Property</a></li>
            <li><a class="dropdown-item" href="/practice-areas/international-trade-and-customs">International Trade and
                    Customs</a></li>
            <li><a class="dropdown-item" href="/practice-areas/investment">Investment</a></li>
            <li><a class="dropdown-item" href="/practice-areas/maritime-and-aviation">Maritime and Aviation</a></li>
            <li><a class="dropdown-item" href="/practice-areas/regulatory-and-compliance">Regulatory and Compliance</a>
            </li>
            <li><a class="dropdown-item" href="/practice-areas/sports-and-Entertainment">Sports and Entertainment</a>
            </li>
            <li><a class="dropdown-item" href="/practice-areas/technology-and-innovation">Technology and Innovation</a>
            </li>
            <li><a class="dropdown-item" href="/practice-areas/tourism">Tourism</a></li>

        </ul>
    </div>
</div>
<div class="card rounded-0 bg-white shadow-sm p-4 mt-5">
    <h2 class="h5 text-uppercase" style="color: #800000">Contact</h2>
    <div class="d-flex">
        <div class="">
            <img src="{{ asset('assets/img/logo-transparent/mashael-fav-32x32.svg') }}" alt="" class=""
                style="height: 40px">
        </div>
        <div class="text-uppercase fw-bold mb-3 ms-3" style="color: #808285;">Mashael Alsulaiti <br>Law
            Firm
        </div>
    </div>
    <a href="tel:+974 4466 4626" class="text-decoration-none">
        <p class="fw-bold text-dark mb-1">Tel:+974 4466 4626</p>
    </a>
    <a href="mailto:info@mas.com.qa" class="text-decoration-none">
        <p class="fw-bold text-dark mb-0">mailto:info@mas.com.qa</p>
    </a>
    <hr class="my-4">
    <a href="/contact-us" class="text-decoration-none" style="color: #800000">Contact Us <i
            class="ai-arrow-right ms-1"></i></a>
</div> --}}
<div class="card rounded-0 p-4 m-auto" style="background-color: #800000">
    <h2 class="h5 text-white text-uppercase mt-0">{{ __('title.practicearea') }}</h2>
    <div class="dropdown">
        <button class="btn btn-light rounded-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">{{ __('buttons.selectArea') }}

        </button>
        <ul class="dropdown-menu rounded-0  scrollable-drop-menu">

            <li><a class="dropdown-item" href="/practice-areas/banking-and-finance">
                    {{ __('practiceArea.bankingAndFinance') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/construction-and-real-estate">
                    {{ __('practiceArea.constructionAndRealEstate') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/corporate-and-commercial">
                    {{ __('practiceArea.corporateAndCommercial') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/criminal"> {{ __('practiceArea.criminal') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/dispute-resolution-and-litigation">
                    {{ __('practiceArea.disputeResolutionAndLitigation') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/education"> {{ __('practiceArea.education') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/employment-and-labor">
                    {{ __('practiceArea.employmentAndLabor') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/energy-and-natural-resources">
                    {{ __('practiceArea.energyAndNaturalResources') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/environment"> {{ __('practiceArea.environment') }}</a>
            </li>
            <li><a class="dropdown-item" href="/practice-areas/family"> {{ __('practiceArea.family') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/government-and-public-sector">
                    {{ __('practiceArea.governmentAndPublicSector') }}</a></li>
            <li><a class="dropdown-item" href="/practice-areas/healthcare-and-pharmaceuticals">
                    {{ __('practiceArea.healthcareAndPharmaceuticals') }}</a></li>
            <li><a class="dropdown-item"
                    href="/practice-areas/intellectual-property">{{ __('practiceArea.intellectualProperty') }}</a></li>
            <li><a class="dropdown-item"
                    href="/practice-areas/international-trade-and-customs">{{ __('practiceArea.internationalTradeAndCustoms') }}</a>
            </li>
            <li><a class="dropdown-item" href="/practice-areas/investment">{{ __('practiceArea.investment') }}</a></li>
            <li><a class="dropdown-item"
                    href="/practice-areas/maritime-and-aviation">{{ __('practiceArea.maritimeAndAviation') }}</a></li>
            <li><a class="dropdown-item"
                    href="/practice-areas/regulatory-and-compliance">{{ __('practiceArea.regulatoryAndCompliance') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/practice-areas/sports-and-entertainment">{{ __('practiceArea.sportsAndEntertainment') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/practice-areas/technology-and-innovation">{{ __('practiceArea.technologyAndInnovation') }}</a>
            </li>
            <li><a class="dropdown-item" href="/practice-areas/tourism">{{ __('practiceArea.tourism') }}</a></li>

        </ul>
    </div>
</div>
<h4 class="pt-3 pt-lg-1 mb-4">{{ __('title.ourTeam') }}</h4>

{{-- <div class="card rounded-0 shadow-sm border-0 mb-4">
    <a href="/our-team/ms-mashael-mohammad-alsulaiti" class="text-decoration-none text-dark">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="/assets/img/default-user.png" alt="Ms. Mashael Mohammad Alsulaiti">
            </div>
            <div class="col-sm-8">
                <div class="py-4 ps-4 pe-4 ps-sm-3 pe-sm-2 py-sm-3">
                    <p class="fs-lg fw-bold mb-0">Ms. Mashael Mohammad Alsulaiti</p>
                    <p class="mb-1">Founder & Chairman</p>
                    <p class="mb-0">mashael@mas.com.qa</p>
                </div>
            </div>
        </div>
    </a>
</div> --}}

<div class="card rounded-0 shadow-sm border-0 mb-4">
    <a href="/our-team/mr-abdelRaouf-mohd-gharibeh" class="text-decoration-none text-dark">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="/assets/img/our-team/Mr-AbdelRaouf-Mohd-Gharibeh.jpg" alt="Mr. AbdelRaouf Mohd Gharibeh">
            </div>
            <div class="col-sm-8">
                <div class="py-4 ps-4 pe-4 ps-sm-3 pe-sm-2 py-sm-3">
                    <p class="fs-lg fw-bold mb-0">{{ __('ourTeam.teamMembers.gharibeh.name') }}</p>
                    <p class="mb-1">{{ __('ourTeam.teamMembers.gharibeh.designation') }}</p>
                    <p class="mb-0">a.rauf@mas.com.qa</p>
                </div>
            </div>
        </div>
    </a>
</div>

{{-- <div class="card rounded-0 shadow-sm border-0 mb-4">
    <a href="/our-team/mr-monir-abdulAziz-shalaby" class="text-decoration-none text-dark">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="/assets/img/our-team/Mr-Monir-AbdulAziz-Shalaby.jpg" alt="Mr. Monir AbdulAziz Shalaby">
            </div>
            <div class="col-sm-8">
                <div class="py-4 ps-4 pe-4 ps-sm-3 pe-sm-2 py-sm-3">
                    <p class="fs-lg fw-bold mb-0">Mr. Monir AbdulAziz Shalaby</p>
                    <p class="mb-1">Senior Legal Consultant</p>
                    <p class="mb-0">monir.shalaby@mas.com.qa</p>
                </div>
            </div>
        </div>
    </a>
</div> --}}

<div class="card rounded-0 shadow-sm border-0 mb-4">
    <a href="/our-team/mr-yasser-assed-yousef-mohammad" class="text-decoration-none text-dark">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="/assets/img/our-team/Mr-Yasser-Assed-Yousef-Mohammad.jpg"
                    alt="Mr. Yasser Assed Yousef Mohammad">
            </div>
            <div class="col-sm-8">
                <div class="py-4 ps-4 pe-4 ps-sm-3 pe-sm-2 py-sm-3">
                    <p class="fs-lg fw-bold mb-0">{{ __('ourTeam.teamMembers.mohammad.name') }}</p>
                    <p class="mb-1">{{ __('ourTeam.teamMembers.mohammad.designation') }}</p>
                    <p class="mb-0">yasser@mas.com.qa</p>
                </div>
            </div>
        </div>
    </a>
</div>

{{-- <div class="card rounded-0 shadow-sm border-0 mb-4">
    <a href="/our-team/mr-mohamed-ibrahim" class="text-decoration-none text-dark">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="/assets/img/our-team/Mr-Mohamed-Ibrahim-1.jpg" alt="Mr. Yasser Assed Yousef Mohammad"
                    class="w-100">
            </div>
            <div class="col-sm-8">
                <div class="py-4 ps-4 pe-4 ps-sm-3 pe-sm-2 py-sm-3">
                    <p class="fs-lg fw-bold mb-0">Mr. Mohamed Ibrahim</p>
                    <p class="mb-1">Legal Advisor</p>
                    <p class="mb-0">m.ibrahim@mas.com.qa</p>
                </div>
            </div>
        </div>
    </a>
</div> --}}
<div class="mt-5">
    <a href="/our-team" class="btn text-uppercase w-100"
        style="background-color: #800000; font-size:18px; color:white">{!! trans('buttons.professionalsBtn') !!}</a>
</div>
