<?php
/**
 * Created by PhpStorm.
 * User: nifontov
 * Date: 7/4/17
 * Time: 12:53 PM
 */

namespace Nepchure\Test\Models;

class NPCTrial extends NPCPost
{

    public $marketingTitle;


    public $studyTitle;


    public $title_City;


    public $homeFeaturedTrial;


    public $searchFeaturedTrial;


    public $alwaysShowTrial;


    public $shortDescription;


    public $briefDescription;


    public $studyGoal;


    public $involvedPatient;


    public $eligible;


    public $aboutStudyDrug;


    public $trialPeople;


    public $location;


    public $displayLocation;


    public $studyCoordinator;


    public $studyCoordinatorMail;


    public $studyCoordinatorPhone;


    public $siteName;


    public $siteAddress;


    public $sponsor;


    public $studyDrug;


    public $estimatedEnrollment;


    public $estimatedDate;


    public $currentlyEnrolling;


    public $studyType;


    public $title;


    public function __construct($post)
    {
        parent::__construct($post);

        if (function_exists('get_field')) {
            $this->title = get_the_title($post->ID);
            $this->marketingTitle = get_field('marketing_title', $post->ID);
            $this->studyTitle = get_field('study_title', $post->ID);
            $this->title_City = get_field('title_+_city_name', $post->ID);
            $this->homeFeaturedTrial = get_field('featured_trial', $post->ID);
            $this->searchFeaturedTrial = get_field('search_featured_trial', $post->ID);
            $this->alwaysShowTrial = get_field('show_all_this_trial', $post->ID);
            $this->shortDescription = get_field('short_description', $post->ID);
            $this->briefDescription = get_field('the_trial_is_for_people', $post->ID);
            $this->studyGoal = get_field('participant_requirements', $post->ID);
            $this->involvedPatient = get_field('involved', $post->ID);
            $this->eligible = get_field('am_i_eligible', $post->ID);
            $this->aboutStudyDrug = get_field('about_the_drug_or_intervention', $post->ID);
            $this->trialPeople = get_field('trial_is_for_people_with', $post->ID);
            $this->location = get_field('location', $post->ID);
            $this->displayLocation = get_field('location_to_display', $post->ID);
            $this->studyCoordinator = get_field('study_coordinator', $post->ID);
            $this->studyCoordinatorMail = get_field('study_coordinator_email', $post->ID);
            $this->studyCoordinatorPhone = get_field('study_coordinator_phone', $post->ID);
            $this->siteName = get_field('site_name', $post->ID);
            $this->siteAddress = get_field('address', $post->ID);
            $this->sponsor = get_field('sponsor', $post->ID);
            $this->studyDrug = get_field('study_drug', $post->ID);
            $this->estimatedEnrollment = get_field('estimated_enrollment', $post->ID);
            $this->estimatedDate = get_field('estimated_end_date', $post->ID);
            $this->currentlyEnrolling = get_field('currently_enrolling', $post->ID);
            $this->studyType = get_field('study_type', $post->ID);
        }
    }


    public function getTheSameTrials()
    {
        $args = array(
            'post_type' => 'trials',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            's' => $this->marketingTitle,
        );

        $theSameTrials = get_posts($args);
        return $theSameTrials;
    }

}