<?php


namespace Nepchure\Test\Controllers;

use Nepchure\Test\Models\ModelTrial;
use Nepchure\Test\Models\NPCTrial;
use Themosis\Facades\Asset;

class TrialsController extends NPCController
{
    public function index()
    {
        $this->setDocumentTitle(__('trials', NPC_TD));
        return view('trial.archive', [
            'trialArchive' => ModelTrial::all(),
        ]);
    }

    public function single(TrialsController $trials, $slug)
    {
        Asset::add('js-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
        Asset::add('google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.35.ex&key=');
        Asset::add('js-gmaps-scripts', NPC_DIR . 'resources/assets/dist/js/gmaps.js', ['js-jquery'], '1', true);
        Asset::add('js-main', NPC_DIR . 'resources/assets/dist/js/main.js', ['js-jquery'], '1', true);

        $trial = ModelTrial::findBySlug($slug);
        if ($trial) {
            $trial = new NPCTrial($trial);
            $this->setDocumentTitle($trial->post_title);
            return view('trial.single', [
                'trial' => $trial,
            ]);
        } else {
            $this->setNotFound();
            return view('layout.not-found', [

            ]);
        }
    }

    public function runner()
    {
        $trialsList = [

        ];

        foreach ($trialsList as $trial) {
            echo wp_insert_post([
                'post_type' => 'trials',
                'post_status' => 'publish',
                'post_content' => '',
                'post_title' => wp_strip_all_tags($trial)
            ]);
        }
    }

    public function export()
    {
        $this->setDocumentTitle(__('trials', NPC_TD));
        return view('trial.export', [
            'trialArchive' => ModelTrial::all(),
        ]);
    }
}