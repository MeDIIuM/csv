<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * App\Review
 *
 * @method static Builder|Review newModelQuery()
 * @method static Builder|Review newQuery()
 * @method static Builder|Review query()
 * @mixin Eloquent
 */
class Review extends Model
{
    public function getReviewFile()
    {
        //$result = DB::raw("select * from Review join Users on Review.id_user = Users.id where Users.city in ('Волгоград', 'Самара') and (Review.likes > 10 or (select count(*) from Review as Review2 join Products on Review2.id_product = Products.id where (select avg(Rating.rating) from Rating where Users.id = Review.id_user) >= 4 and Review2.id_user = Review.id_user and Products.price > 2000) > 10);");
        $result = DB::select("select * from Review join Users on Review.id_user = Users.id where Users.city in ('Волгоград', 'Самара') and (Review.likes > 10 or (select count(*) from Review as Review2 join Products on Review2.id_product = Products.id where (select avg(Rating.rating) from Rating where Users.id = Review.id_user) >= 4 and Review2.id_user = Review.id_user and Products.price > 2000) > 10)");
        return $result;
    }
}
