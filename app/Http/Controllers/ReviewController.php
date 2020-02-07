<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('review');
    }
    /* public function getReviewFile(){
         $headers = [
             'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
             ,   'Content-type'        => 'text/csv'
             ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
             ,   'Expires'             => '0'
             ,   'Pragma'              => 'public'
         ];

         $reviewModel = new ReviewController();

         $review = $reviewModel->getReviewFile();

         $list = $review->toArray();

         # add headers for each column in the CSV download
         array_unshift($list, array_keys((array) $list[0]));
         $callback = function() use ($list)
         {
             $FH = fopen('php://output', 'w');
             foreach ($list as $row) {
                 fputcsv($FH, (array)$row);
             }
             fclose($FH);
         };

         return (new StreamedResponse($callback, 200, $headers))->sendContent();
     }
    */


}
