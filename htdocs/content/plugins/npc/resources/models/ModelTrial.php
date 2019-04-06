<?php


namespace Nepchure\Test\Models;

use Nepchure\Test\Models\NPCTrial;
use WP_Query;


class ModelTrial
{
    const CPT = 'trials';

    /**
     * Return a list of all published trials.
     * @return \WP_Post[]
     */
    public static function all()
    {
        $query = new WP_Query([
            'post_type' => self::CPT,
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ]);

        $trials = $query->get_posts();

        $arrayRepeat = [];
        $locationsParents = [];
        foreach ($trials as $trial) {
            $marketingTitle = get_field('marketing_title', $trial->ID);

            if (!in_array($marketingTitle, $arrayRepeat)) {
                $itemTrial = [];
                $itemTrial['ID'] = $trial->ID;
                $locationsParents[$marketingTitle] = $itemTrial;
            }

            array_push($arrayRepeat, $marketingTitle);
            $countReapeat = array_count_values($arrayRepeat);
            $locationsParents[$marketingTitle]['count'] = $countReapeat[$marketingTitle];
        }

        return $locationsParents;
    }

    /**
     * Return a client found by slug.
     * @param string $slug
     * @return \WP_Post|bool
     */
    public static function findBySlug($slug)
    {
        $query = new WP_Query([
            'post_type' => self::CPT,
            'name' => $slug,
            'posts_per_page' => 1,
            'post_status' => 'publish'
        ]);

        if ($query->get_posts())
            return $query->get_posts()[0];
        else
            return false;
    }

    /**
     * Return a list of all published trials filtered by WP_Meta_Query.
     * @param array $metaQuery
     * @return \WP_Post[]
     */
    public static function findByMetaQuery($metaQuery = [])
    {
        $query = new WP_Query([
            'post_type' => self::CPT,
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_query' => $metaQuery
        ]);

        return $query->get_posts();
    }

    /**
     * Return a list of all published trials filtered by date parameters.
     * @param array $dateParameters
     * @return \WP_Post[]
     */
    public static function findByDateQuery($dateParameters = [])
    {
        $query = new WP_Query([
            'post_type' => self::CPT,
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'date_query' => $dateParameters
        ]);

        return $query->get_posts();
    }


    public static function getFeaturedTrials()
    {
        $metaQuery = [
            'key' => 'featured_post',
            'value' => 'yes',
            'compare' => 'LIKE'
        ];

        $query = new WP_Query([
            'post_type' => self::CPT,
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_query' => [$metaQuery],
        ]);

        $trials = $query->get_posts();

        $arrayRepeat = [];
        $featuredTrials = [];
        foreach ($trials as $trial) {
            $marketingTitle = get_field('marketing_title', $trial->ID);

            if (!in_array($marketingTitle, $arrayRepeat)) {
                $itemTrial = [];
                $itemTrial['ID'] = $trial->ID;
                $featuredTrials[$marketingTitle] = $itemTrial;
            }

            array_push($arrayRepeat, $marketingTitle);
            $countReapeat = array_count_values($arrayRepeat);
            $featuredTrials[$marketingTitle]['count'] = $countReapeat[$marketingTitle];
        }

        return $featuredTrials;
    }

}