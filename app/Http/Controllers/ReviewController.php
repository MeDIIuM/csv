<?php

namespace App\Http\Controllers;

use App\Review;
use Symfony\Component\HttpFoundation\StreamedResponse;


class ReviewController extends Controller
{
    public function index()
    {
        return view('review');
    }
     public function getReviewFile(){
         $headers = [
             'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
             ,   'Content-type'        => 'text/csv'
             ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
             ,   'Expires'             => '0'
             ,   'Pragma'              => 'public'
         ];

         $reviewModel = new Review();
         $review = $reviewModel->getReviewFile();
         array_unshift($review, array_keys((array) $review[0]));
         $callback = function() use ($review)
         {
             $FH = fopen('php://output', 'w');
             foreach ($review as $row) {
                 fputcsv($FH, (array)$row);
             }
             fclose($FH);
         };

         return (new StreamedResponse($callback, 200, $headers))->sendContent();
     }


}
