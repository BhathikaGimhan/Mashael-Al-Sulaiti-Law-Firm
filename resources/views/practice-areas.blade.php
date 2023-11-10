@extends('layouts.publiclayout.master')

@section('title')
    {{ __('title.page.practiceAreas') }}
@endsection
@section('content')
    <section class="page-banner banner-overlay" style="background-image: url(/assets/img/practice-areas-2.jpeg);">
        <div class="banner-overlay-content" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
            data-disable-parallax-down="md">
            <h1 class="display-2 text-white">{{ __('title.practicearea') }}</h1>
            <div class="d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/"> {{ __('title.home') }}</a></li>
                        <li class="breadcrumb-item" class="text-white">{{ __('title.practicearea') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="py-5 px-xxl-5">
        <div class="container-fluid px-xxl-5 px-lg-5">
            <div class="row">
                <!--1-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise2">
                        <label for="expertise2">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/banking-and-finance"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.bankingAndFinance') }}</a>
                        </label>
                    </div>
                </div>
                <!--2-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise3">
                        <label for="expertise3">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/construction-and-real-estate"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.constructionAndRealEstate') }}</a>
                        </label>
                    </div>
                </div>
                <!--3-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise1">
                        <label for="expertise1">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/corporate-and-commercial"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.corporateAndCommercial') }}</a>
                        </label>
                    </div>
                </div>
                <!--4-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise7">
                        <label for="expertise7">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/criminal"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.criminal') }}</a>
                        </label>
                    </div>
                </div>
                <!--5-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise9">
                        <label for="expertise9">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/dispute-resolution-and-litigation"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.disputeResolutionAndLitigation') }}</a>
                        </label>
                    </div>
                </div>
                <!--6-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise15">
                        <label for="expertise15">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/education"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.education') }}</a>
                        </label>
                    </div>
                </div>
                <!--7-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise5">
                        <label for="expertise5">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/employment-and-labor"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.employmentAndLabor') }}</a>
                        </label>
                    </div>
                </div>
                <!--8-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise4">
                        <label for="expertise4">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/energy-and-natural-resources"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.energyAndNaturalResources') }}</a>
                        </label>
                    </div>
                </div>
                <!--9-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise18">
                        <label for="expertise18">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/environment"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.environment') }} </a>
                        </label>
                    </div>
                </div>
                <!--10-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise6">
                        <label for="expertise6">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/family"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.family') }}</a>
                        </label>
                    </div>
                </div>
                <!--11-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise17">
                        <label for="expertise17">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/government-and-public-sector"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.governmentAndPublicSector') }}</a>
                        </label>
                    </div>
                </div>
                <!--12-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise14">
                        <label for="expertise14">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/healthcare-and-pharmaceuticals"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.healthcareAndPharmaceuticals') }}</a>
                        </label>
                    </div>
                </div>
                <!--13-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise8">
                        <label for="expertise8">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/intellectual-property"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.intellectualProperty') }}</a>
                        </label>
                    </div>
                </div>
                <!--14-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise10">
                        <label for="expertise10">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/international-trade-and-customs"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.internationalTradeAndCustoms') }}</a>
                        </label>
                    </div>
                </div>
                <!--15-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise20">
                        <label for="expertise20">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/investment"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.investment') }}</a>
                        </label>
                    </div>
                </div>
                <!--16-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise11">
                        <label for="expertise11">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/maritime-and-aviation"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.maritimeAndAviation') }}</a>
                        </label>
                    </div>
                </div>
                <!--17-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise12">
                        <label for="expertise12">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/regulatory-and-compliance"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.regulatoryAndCompliance') }}</a>
                        </label>
                    </div>
                </div>
                <!--18-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise16">
                        <label for="expertise16">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/sports-and-entertainment"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.sportsAndEntertainment') }}</a>
                        </label>
                    </div>
                </div>
                <!--19-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise13">
                        <label for="expertise13">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/technology-and-innovation"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.technologyAndInnovation') }}</a>
                        </label>
                    </div>
                </div>
                <!--20-->
                <div class="col-md-6 mb-3">
                    <div class="{{ __('practiceArea.expertiseClass') }}">
                        <input type="radio" name="expertise" id="expertise19">
                        <label for="expertise19">
                            <span class="{{ __('practiceArea.bullet-drop') }}"></span>
                            <a href="/practice-areas/tourism"
                                class="{{ __('practiceArea.expertiseBtn') }}">{{ __('practiceArea.tourism') }}</a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
