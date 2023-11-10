<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

class ButtonConversation extends Conversation
{

    protected $selectedButton;

    public function run()
    {
        $question = Question::create(__('conversation.choose_option'))
            ->addButtons([
                Button::create(__('conversation.buttons.aboutUsFirst'))->value(__('conversation.buttons.aboutUsFirst')),
                Button::create(__('conversation.buttons.whatWeDoFirst'))->value(__('conversation.buttons.whatWeDoFirst')),
                Button::create(__('conversation.buttons.legalMattersFirst'))
                    ->value(__('conversation.buttons.legalMattersFirst')),
                    Button::create(__('conversation.buttons.appointment'))
                    ->value(__('conversation.buttons.appointment'))
            ]);

        $this->ask($question, function ($answer) {
            $this->selectedButton = $answer->getText();
            switch ($answer->getValue()) {
                case (__('conversation.buttons.aboutUsFirst')):
                    $this->aboutUs();
                    break;

                case (__('conversation.buttons.whatWeDoFirst')):
                    $this->whatWeDo();
                    break;

                case (__('conversation.buttons.legalMattersFirst')):
                    $this->legalMatters();
                    return;

                     case (__('conversation.buttons.appointment')):
                    $this->appointment();
                    return;
            }
        });
    }

    public function aboutUs()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.aboutUs.selectedDes'));
        $this->say($reply);
    }

    public function whatWeDo()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.whatWeDo.whatWeDoDes'));
        $this->say($reply);
    }

    public function legalMatters()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $question = Question::create(__('conversation.choose_option'))
            ->addButtons([
                Button::create(__('conversation.legalMatters.yes'))->value(__('conversation.legalMatters.yes')),
                Button::create(__('conversation.legalMatters.no'))->value(__('conversation.legalMatters.no'))
            ]);

        $this->ask($question, function ($answer) {
            $this->selectedButton = $answer->getText();
            switch ($answer->getValue()) {
                case (__('conversation.legalMatters.yes')):
                    $this->askProblemType();
                    break;

                case (__('conversation.legalMatters.no')):
                    $this->askAboutUs();
                    break;
            }
        });
    }

    public function appointment()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.appointmentDes'));
        $this->say($reply);

    }

    public function askProblemType()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $question = Question::create(__('conversation.choose_option'))
            ->addButtons([
                Button::create(__('conversation.legalMatters.personalProblem'))->value(__('conversation.legalMatters.personalProblem')),
                Button::create(__('conversation.legalMatters.businessProblem'))->value(__('conversation.legalMatters.businessProblem'))
            ]);

        $this->ask($question, function ($answer) {
            $this->selectedButton = $answer->getText();
            switch ($answer->getValue()) {
                case (__('conversation.legalMatters.personalProblem')):
                    $this->askPersonalProblemType();
                    return;

                case (__('conversation.legalMatters.businessProblem')):
                    $this->askBusinessProblemType();
                    return;
            }
        });
    }

    public function askPersonalProblemType()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $question = Question::create(__('conversation.choose_option'))
            ->addButtons([
                Button::create(__('conversation.legalMatters.criminal'))->value(__('conversation.legalMatters.criminal')),
                Button::create(__('conversation.legalMatters.family'))->value(__('conversation.legalMatters.family')),
                Button::create(__('conversation.legalMatters.education'))->value(__('conversation.legalMatters.education')),
                Button::create(__('conversation.legalMatters.employmentAndLabor'))->value(__('conversation.legalMatters.employmentAndLabor')),
                Button::create(__('conversation.legalMatters.more'))->value(__('conversation.legalMatters.more'))
            ]);

        $this->ask($question, function ($answer) {
            $this->selectedButton = $answer->getText();
            switch ($answer->getValue()) {
                case (__('conversation.legalMatters.criminal')):
                    $this->criminal();
                    break;

                case (__('conversation.legalMatters.family')):
                    $this->family();
                    break;

                case (__('conversation.legalMatters.employmentAndLabor')):
                    $this->employment();
                    break;

                case (__('conversation.legalMatters.education')):
                    $this->education();
                    break;

                case (__('conversation.legalMatters.more')):
                    $this->moreCriminal();
                    break;

            }
        });
    }

    public function criminal()
    {

        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.criminalDesOne'));
        $this->say($reply);
    }

    public function family()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.familyDesOne'));
        $this->say($reply);
    }

    public function education()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.educationDesOne'));
        $this->say($reply);
    }

    public function employment()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply =(__('conversation.legalMatters.employmentAndLaborDesOne'));
        $this->say($reply);
    }

    public function moreCriminal()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.moreCriminal'));
        $this->say($reply);
    }

    public function askBusinessProblemType()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $question = Question::create(__('conversation.choose_option'))
                ->addButtons([
                    Button::create(__('conversation.legalMatters.corporateAndCommercial'))->value(__('conversation.legalMatters.corporateAndCommercial')),
                    Button::create(__('conversation.legalMatters.investment'))->value(__('conversation.legalMatters.investment')),
                    Button::create(__('conversation.legalMatters.bankingAndFinance'))->value(__('conversation.legalMatters.bankingAndFinance')),
                    Button::create(__('conversation.legalMatters.constructionAndRealEstate'))->value(__('conversation.legalMatters.constructionAndRealEstate')),
                    Button::create(__('conversation.legalMatters.disputeResolutionAndLitigation'))->value(__('conversation.legalMatters.disputeResolutionAndLitigation')),
                    Button::create(__('conversation.legalMatters.employmentAndLaborBusiness'))->value(__('conversation.legalMatters.employmentAndLaborBusiness')),
                    Button::create(__('conversation.legalMatters.energyAndNaturalResources'))->value(__('conversation.legalMatters.energyAndNaturalResources')),
                    Button::create(__('conversation.legalMatters.environment'))->value(__('conversation.legalMatters.environment')),
                    Button::create(__('conversation.legalMatters.governmentAndPublicSector'))->value(__('conversation.legalMatters.governmentAndPublicSector')),
                    Button::create(__('conversation.legalMatters.healthcareAndPharmaceuticals'))->value(__('conversation.legalMatters.healthcareAndPharmaceuticals')),
                    Button::create(__('conversation.legalMatters.intellectualProperty'))->value(__('conversation.legalMatters.intellectualProperty')),
                    Button::create(__('conversation.legalMatters.internationalTradeAndCustoms'))->value(__('conversation.legalMatters.internationalTradeAndCustoms')),
                    Button::create(__('conversation.legalMatters.maritimeAndAviation'))->value(__('conversation.legalMatters.maritimeAndAviation')),
                    Button::create(__('conversation.legalMatters.regulatoryAndCompliance'))->value(__('conversation.legalMatters.regulatoryAndCompliance')),
                    Button::create(__('conversation.legalMatters.sportsAndEntertainment'))->value(__('conversation.legalMatters.sportsAndEntertainment')),
                    Button::create(__('conversation.legalMatters.technologyAndInnovation'))->value(__('conversation.legalMatters.technologyAndInnovation')),
                    Button::create(__('conversation.legalMatters.tourism'))->value(__('conversation.legalMatters.tourism')),
                    Button::create(__('conversation.legalMatters.more'))->value(__('conversation.legalMatters.more'))

                ]);

            $this->ask($question, function ($answer) {
                $this->selectedButton = $answer->getText();
                switch ($answer->getValue()) {
                    case (__('conversation.legalMatters.corporateAndCommercial')):
                        $this->corporateCommercial();
                        break;

                    case (__('conversation.legalMatters.investment')):
                        $this->investment();
                        break;

                    case (__('conversation.legalMatters.bankingAndFinance')):
                        $this->bankingAndFinance();
                        break;

                    case (__('conversation.legalMatters.constructionAndRealEstate')):
                        $this->construction();
                        break;

                        case (__('conversation.legalMatters.disputeResolutionAndLitigation')):
                        $this->disputeResolution();
                            break;

                        case (__('conversation.legalMatters.employmentAndLaborBusiness')):
                        $this->employmentAndLabor();
                            break;

                        case (__('conversation.legalMatters.energyAndNaturalResources')):
                        $this->energyAndNatural();
                            break;

                        case (__('conversation.legalMatters.environment')):
                            $this->environment();
                                break;

                        case (__('conversation.legalMatters.governmentAndPublicSector')):
                        $this->government();
                            break;

                        case (__('conversation.legalMatters.healthcareAndPharmaceuticals')):
                        $this->healthcare();
                            break;

                        case (__('conversation.legalMatters.intellectualProperty')):
                        $this->intellectual();
                            break;

                        case (__('conversation.legalMatters.internationalTradeAndCustoms')):
                        $this->internationalTrade();
                            break;

                        case (__('conversation.legalMatters.maritimeAndAviation')):
                        $this->maritime();
                            break;

                        case (__('conversation.legalMatters.regulatoryAndCompliance')):
                        $this->regulatory();
                            break;

                        case (__('conversation.legalMatters.sportsAndEntertainment')):
                        $this->sports();
                            break;

                        case (__('conversation.legalMatters.technologyAndInnovation')):
                        $this->technology();
                            break;

                        case (__('conversation.legalMatters.tourism')):
                        $this->tourism();
                            break;

                    case (__('conversation.legalMatters.more')):
                        $this->moreBussiness();
                        break;
                }
            });
    }

    public function corporateCommercial()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.corporateAndCommercialDes'));
        $this->say($reply);

    }

    public function investment()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.investmentDes'));
        $this->say($reply);

    }

    public function bankingAndFinance()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.bankingAndFinanceDes'));
        $this->say($reply);

    }

    public function construction()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.constructionAndRealEstateDes'));
        $this->say($reply);

    }

    public function disputeResolution()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.disputeResolutionAndLitigationDes'));
        $this->say($reply);

    }

    public function employmentAndLabor()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.employmentAndLaborBusinessDes'));
        $this->say($reply);

    }

    public function energyAndNatural()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.energyAndNaturalResourcesDes'));
        $this->say($reply);

    }

    public function government()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.governmentAndPublicSectorDes'));
        $this->say($reply);

    }

    public function healthcare()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.healthcareAndPharmaceuticalsDes'));
        $this->say($reply);

    }


    public function intellectual()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.intellectualProperty'));
        $this->say($reply);

    }

    public function internationalTrade()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.maritimeAndAviationDes'));
        $this->say($reply);

    }

    public function maritime()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.maritimeAndAviationDes'));
        $this->say($reply);

    }

    public function regulatory()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.regulatoryAndComplianceDes'));
        $this->say($reply);

    }

    public function sports()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.sportsAndEntertainmentDes'));
        $this->say($reply);

    }

    public function technology()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.technologyAndInnovation'));
        $this->say($reply);

    }

    public function tourism()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.tourismDes'));
        $this->say($reply);

    }

    public function environment()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.environmentDes'));
        $this->say($reply);

    }

    public function moreBussiness()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.legalMatters.moreBusiness'));
        $this->say($reply);

    }


    public function askAboutUs()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $question = Question::create(__('conversation.choose_option'))
            ->addButtons([
                Button::create(__('conversation.askAboutUs.aboutUs'))->value(__('conversation.askAboutUs.aboutUs')),
                Button::create(__('conversation.askAboutUs.practiceAreas'))->value(__('conversation.askAboutUs.practiceAreas')),
                Button::create(__('conversation.askAboutUs.ourTeam'))->value(__('conversation.askAboutUs.ourTeam'))
            ]);

        $this->ask($question, function ($answer) {
            $this->selectedButton = $answer->getText();
            switch ($answer->getValue()) {
                case (__('conversation.askAboutUs.aboutUs')):
                    $this->noAboutUs();
                    break;

                case (__('conversation.askAboutUs.practiceAreas')):
                    $this->noPracticeAreas();
                    break;

                case (__('conversation.askAboutUs.ourTeam')):
                    $this->noOurTeam();
                    break;
            }
        });
    }

    public function noAboutUs()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.askAboutUs.noAboutUs'));
        $this->say($reply);

    }

    public function noPracticeAreas()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.askAboutUs.noPracticeAreas'));
        $this->say($reply);

    }

    public function noOurTeam()
    {
        $this->say(__('conversation.selectedHead') . $this->selectedButton);

        $reply = (__('conversation.askAboutUs.noOurTeam'));
        $this->say($reply);

    }

    public function switchToEnglish()
    {
        app()->setLocale('en');
        $this->run();
    }

    public function switchToArabic()
    {
        app()->setLocale('ar');
        $this->run();
    }

    public function switchToFrench()
    {
        app()->setLocale('fr');
        $this->run();
    }

}


