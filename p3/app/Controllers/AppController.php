<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $pick = $this->app->old('pick');
        $element = $this->app->old('element');
        $winner = $this->app->old('winner');

        return $this->app->view('index', [
            'pick' => $pick,
            'element' => $element,
            'winner' => $winner
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'pick' => 'required'
        ]);

        $pick = $this->app->input('pick');

        $element = ['rock', 'paper', 'scissors'][rand(0, 2)];

        if ($pick == 'rock' && $element == 'scissors') {
             $winner = 'You Win!';

         } else if ($pick == 'paper' && $element == 'rock') {
            $winner = 'You Win!';

         } else if ($pick == 'scissors' && $element == 'paper') {
             $winner = 'You Win!';

         } else if ($pick == $element) {
             $winner = 'There was a tie!';

         } else {
             $winner = 'You Lose';
         }

        $this->app->db()->insert('details', [
            'pick' => $pick,
            'element' => $element,
            'winner' => $winner,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect('/', ['pick' => $pick, 'element' => $element, 'winner' => $winner]);

    }

    public function history()
    {
        $details = $this->app->db()->all('details');

        return $this->app->view('history', ['details' => $details]);
    }

    public function details()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('details', $id);

        return $this->app->view('details', ['round' => $round]);
    }
}

    
