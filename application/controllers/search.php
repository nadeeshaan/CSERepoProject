<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper('url');
        $data['docResults'] = NULL;
        $data['selectedButton'] = NULL;
        $this->load->model('sharedWithMe_model');
        $data['sharedCount'] = count($this->sharedWithMe_model->getShareDocs());
        $this->load->view('search_view', $data);
    }

    public function createTokens() {
        $this->load->helper('url');
        $this->load->model('sharedWithMe_model');

        $invalid = array(" is ", " the ", " or ", " am ", " are ", ",", ".");

        $twowords = array();
        $twowords2 = array();
        $threeWords = array();
        $threeWords2 = array();
        $fourWords = array();
        $fourWords2 = array();


        $searchText = $this->input->post('SearchFld');

        $replacedStr = str_replace($invalid, " ", $searchText);
        $tokens = preg_split('/[\s+ _]/', $replacedStr);


        if (count($tokens) >= 2) {
            $k = 0;
            for ($i = 0; $i < count($tokens) - 1; $i++) {

                for ($j = $i; $j < count($tokens) - 1; $j++) {
                    $twowords[$k] = $tokens[$i] . ' ' . $tokens[$j + 1];
                    $twowords2[$k] = $tokens[$i] . '_' . $tokens[$j + 1];
                    $k++;
                }
            }
        }

        if (count($tokens) >= 3) {
            for ($i = 0; $i < count($tokens) - 2; $i++) {
                $threeWords[$i] = $tokens[$i] . ' ' . $tokens[$i + 1] . ' ' . $tokens[$i + 2];
                $threeWords2[$i] = $tokens[$i] . '_' . $tokens[$i + 1] . '_' . $tokens[$i + 2];
            }
        }

        if (count($tokens) >= 4) {
            for ($i = 0; $i < count($tokens) - 3; $i++) {
                $fourWords[$i] = $tokens[$i] . ' ' . $tokens[$i + 1] . ' ' . $tokens[$i + 2] . ' ' . $tokens[$i + 3];
                $fourWords2[$i] = $tokens[$i] . '_' . $tokens[$i + 1] . '_' . $tokens[$i + 2] . '_' . $tokens[$i + 3];
            }
        }

        $this->load->model('search_model');

        if (($_POST['select']) === 'documentSearch') {
            $data['results'] = $this->search_model->getDocuments($twowords, $twowords2, $threeWords, $threeWords2);
            $data['selectedButton'] = 'document';
            $this->load->view('search_view', $data);
        } else if (($_POST['select']) === 'projectSearch') {
            $data['results'] = $this->search_model->getProjects($twowords, $twowords2, $threeWords, $threeWords2);
            $data['selectedButton'] = 'project';
//            print_r($selected);
            $data['sharedCount'] = count($this->sharedWithMe_model->getShareDocs());

            $this->load->view('search_view', $data);
        }
    }

}

?>
